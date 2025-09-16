<?php

namespace Vtm\Rw\ViewHelpers;

use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use FluidTYPO3\Vhs\Traits\TemplateVariableViewHelperTrait;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class GetRecordViewHelper
 *
 * @package Vtm\Rw\ViewHelpers
 */
class GetRecordViewHelper extends AbstractViewHelper
{

    use TemplateVariableViewHelperTrait;

    public function initializeArguments()
    {
        $this->registerArgument(
            'table',
            'string',
            'The table to get a record from.',
            true,
            null);
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
            $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)
                ->getQueryBuilderForTable($this->arguments['table']);
            $result = $queryBuilder->select('*')
                ->from($this->arguments['table'])
                ->where('uid = ' . $this->arguments['uid'])
                ->execute()
                ->fetch();
        }
        catch (\Exception $e) {
            return $e->getMessage();
        }

        return $this->renderChildrenWithVariableOrReturnInput($result);
    }
}
