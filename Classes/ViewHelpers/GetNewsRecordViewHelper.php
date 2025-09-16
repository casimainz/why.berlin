<?php

namespace Vtm\Rw\ViewHelpers;

use FluidTYPO3\Vhs\Traits\TemplateVariableViewHelperTrait;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class GetRecordViewHelper
 *
 * @package Vtm\Rw\ViewHelpers
 */
class GetNewsRecordViewHelper extends AbstractViewHelper
{

    use TemplateVariableViewHelperTrait;

    /**
     * @var \GeorgRinger\News\Domain\Repository\NewsRepository
     * @TYPO3\CMS\Extbase\Annotation\Inject
     */
    private $newsRepository;

    public function initializeArguments()
    {
        $this->registerArgument(
            'uid',
            'integer',
            'The id of the record'
        );
        $this->registerArgument(
            'as',
            'string',
            'If specified, a template variable with this name containing the requested data will be inserted ' .
            'instead of returning it.',
            false,
            null
        );
    }

    public function render()
    {
        try {
            $result = $this->newsRepository->findByUid($this->arguments['uid']);
        }
        catch (\Exception $e) {
            return $e->getMessage();
        }

        return $this->renderChildrenWithVariableOrReturnInput($result);
    }
}
