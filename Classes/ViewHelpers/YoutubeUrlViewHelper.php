<?php

namespace Vtm\Rw\ViewHelpers;

use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

class YoutubeUrlViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    const YOUTUBE_REGEXP = '/^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)(?P<id>[^#&?]*).*/';
    const YOUTUBE_EMBED_URL = 'https://www.youtube-nocookie.com/embed/';

    /**
     * @var boolean
     */
    protected $escapeOutput = false;

    /**
     * @return void
     */
    public function initializeArguments()
    {
        $this->registerArgument(
            'url',
            'string',
            'YouTube Url',
            true
        );
    }

    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
        $videoId = static::getYoutubeVideoIdFromUrl($arguments['url']);

        return static::YOUTUBE_EMBED_URL . $videoId;
    }

    public static function getYoutubeVideoIdFromUrl($youtubeUrl)
    {
        if (preg_match(static::YOUTUBE_REGEXP, $youtubeUrl, $matches)) {
            return $matches['id'];
        }

        return null;
    }

}
