<?php

namespace Vtm\Rw\ViewHelpers;

use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use Vtm\Rw\ViewHelpers\LinkViewHelper;
use Vtm\Rw\Domain\Model\News;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

class GoogleMapsMarkersFromNewsViewHelper extends AbstractViewHelper
{

    /** @var LinkViewHelper */
    private $newsLinkViewHelper;

    /** @var ObjectManager $objectManager */
    private $objectManager;

    /**
     * @var bool
     */
    protected $escapeOutput = false;

    public function initializeArguments()
    {
        $this->registerArgument('news', 'mixed', 'List of news', true);
        $this->registerArgument('settings', 'array', 'Settings', false, []);
        $this->registerArgument('length', 'int', 'Amount of markers to get', false, '100');
        $this->registerArgument('fallbackMarker', 'string', 'Fallback on empty markers', false, null);
    }

    public function render()
    {
        $this->objectManager = GeneralUtility::makeInstance(ObjectManager::class);
        $this->newsLinkViewHelper = $this->objectManager->get(LinkViewHelper::class);    

        $markers = [];
        $this->newsLinkViewHelper->arguments = [
            'settings' => $this->arguments['settings'],
            'uriOnly' => true,
            'configuration' => []
        ];

        /**
         * @var News $newsItem
         */
        foreach ($this->arguments['news'] as $newsItem) {

            if (count($markers) >= $this->arguments['length']) {
                break;
            }

            $this->newsLinkViewHelper->arguments['newsItem'] = $newsItem;
            $this->newsLinkViewHelper->validateArguments();

            if ($newsItem->getLatitude() && $newsItem->getLongitude()) {
                $markers[] = [
                    'lat' => (float)$newsItem->getLatitude(),
                    'lng' => (float)$newsItem->getLongitude(),
                    'heading' => InteliTextViewHelper::decode($newsItem->getTitle()) ?: '',
                    'content' => $newsItem->getLocation() ?: '',
                    'link' => $this->newsLinkViewHelper->render()
                ];
            }
        }

        if (empty($markers) && !empty($this->arguments['fallbackMarker'])) {
            return json_encode($this->arguments['fallbackMarker']);
        }

        return json_encode($markers);
    }

}
