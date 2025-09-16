<?php

namespace Vtm\Rw\ViewHelpers;

use GeorgRinger\News\Domain\Model\FileReference;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3\CMS\Fluid\View\StandaloneView;

class EmbeddedContentViewHelper extends AbstractViewHelper
{
    const EMBEDDED_CONTENT_ATTRIBUTE_PREFIX = 'data-embeddedcontent-';
    const EMBEDDED_CONTENT_ATTRIBUTE = 'data-embeddedcontent-type';

    protected $escapeOutput = false;

    protected $escapeChildren = false;

    private $objectManager;

    /**
     * Expected arguments
     *
     * Register arguments in the ViewHelper context
     * @throws \TYPO3Fluid\Fluid\Core\ViewHelper\Exception
     */
    public function initializeArguments()
    {
        $this->registerArgument('record', 'mixed', 'Record object');
        $this->registerArgument('media', ObjectStorage::class, 'Media collection');
    }

    public function render()
    {
        //sort images by content_key
        $mediaByContentKey = [];
        if (null !== $this->arguments['media']) {
            /** @var  $mediaItem FileReference */
            foreach ($this->arguments['media'] as $mediaItem) {
                $contentKeys = explode(',',$mediaItem->getOriginalResource()->getProperty('content_key'));
                foreach ($contentKeys as $contentKey) {
                    if (!isset($mediaByContentKey[$contentKey])) {
                        $mediaByContentKey[$contentKey] = [];
                    }
                    $mediaByContentKey[$contentKey][] = $mediaItem;
                }
            }
        }

        //render children and extract embedded elements
        $content = $this->renderChildren();
        $content = preg_replace_callback(
            '%<div([^>]+data-embeddedcontent-type=[^>]+)>[^<]*</div>%',
            function ($match) use ($mediaByContentKey) {
                $nodeAttributes = [];

                list($element, $attributes) = $match;
                preg_replace_callback(
                    '%([^="\'\s]+)="([^"]+)"%',
                    function ($matches) use (&$nodeAttributes) {
                        list($attr, $attrName, $attrValue) = $matches;
                        $nodeAttributes[$attrName] = $attrValue;
                    },
                    trim($attributes)
                );

                $embeddedType = $nodeAttributes[static::EMBEDDED_CONTENT_ATTRIBUTE];
                $attrStartsWithQuery = static::EMBEDDED_CONTENT_ATTRIBUTE_PREFIX . $embeddedType . '-';

                $embeddedParams = [
                    'record' => $this->arguments['record']
                ];
                /**
                 * @var string $attrName
                 * @var \DOMAttr $attrNode
                 */
                foreach ($nodeAttributes as $attrName => $attrValue) {
                    if (substr($attrName, 0, strlen($attrStartsWithQuery)) === $attrStartsWithQuery) {
                        $paramName = substr($attrName, strlen($attrStartsWithQuery));
                        $paramName = str_replace('-', '_', $paramName);
                        $embeddedParams[$paramName] = html_entity_decode($attrValue);
                    }
                }

                //render template
                /** @var StandaloneView $standaloneView */
                $this->objectManager = GeneralUtility::makeInstance(ObjectManager::class);
                $standaloneView = $this->objectManager->get(StandaloneView::class);
                $templateFile = ucfirst($embeddedType) . '.html';
                $standaloneView->setTemplatePathAndFilename(
                    GeneralUtility::getFileAbsFileName('EXT:rw/Resources/Private/EmbeddedContent') . '/' . $templateFile
                );
                $standaloneView->assignMultiple($embeddedParams);
                $standaloneView->assign('mediaByContentKey', $mediaByContentKey);
                return $standaloneView->render();
            },
            $content
        );

        return $content;
    }
}
