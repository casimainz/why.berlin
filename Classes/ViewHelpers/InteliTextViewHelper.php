<?php

namespace Vtm\Rw\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;

/**
 * Class InteliTextViewHelper
 *
 * @package Vtm\Rw\ViewHelpers
 */
class InteliTextViewHelper extends AbstractViewHelper
{

    /**
     * @var bool
     */
    protected $escapeOutput = false;

    /**
     * @var array
     */
    private static $decodeMapping = [
        '/\^(.*)\^/U' => '<sup>$1</sup>',
        '/  -(&gt;|>)/' => '&nbsp;&nbsp;<i class="fa fa-arrow-right"></i>',
        '/ -(&gt;|>)/' => '&nbsp;<i class="fa fa-arrow-right"></i>',
        '/[|][|][|]/' => '<br />',
        '/---/' => '&shy;',
        '/\*{2}(.*)\*{2}/U' => '<strong>$1</strong>',
        '/\*(.*)\*/U' => '<em>$1</em>',
    ];

    /**
     * Expected arguments
     *
     * Register arguments in the ViewHelper context
     */
    public function initializeArguments()
    {
        $this->registerArgument('text', 'string', 'Text input to decode with InteliText viewhelper', false, null);
    }

    /**
     * Render
     *
     * @return string
     */
    public function render()
    {
        $text = $this->arguments['text'] ?? $this->renderChildren();
        return static::decode($text);
    }

    /**
     * Decode text according mapped regex specifications
     *
     * @param $text
     * @return string
     */
    public static function decode($text)
    {
        foreach (static::$decodeMapping as $regEx => $replace) {
            $text = preg_replace($regEx, $replace, $text, -1);
        }

        return $text;
    }
}
