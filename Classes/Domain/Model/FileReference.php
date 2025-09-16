<?php

namespace Vtm\Rw\Domain\Model;

use GeorgRinger\News\Domain\Model\FileReference as BaseFileReference;

/**
 * Class FileReference
 * @package Vtm\Rw\Domain\Model
 */
class FileReference extends BaseFileReference
{
    protected string $contentKey = '';
    protected string $content = '';

    public function getContentKey(): string
    {
        return $this->contentKey;
    }

    public function setContentKey(string $contentKey): void
    {
        $this->contentKey = $contentKey;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }
}