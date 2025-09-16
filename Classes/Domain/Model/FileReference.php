<?php

namespace Vtm\Rw\Domain\Model;

use GeorgRinger\News\Domain\Model\FileReference as BaseFileReference;

 /**
  * Class FileReference
  * @package Vtm\Rw\Domain\Model
  */
class FileReference extends BaseFileReference
{
    /**
     * @var string
     */
    protected $contentKey;

    /**
     * @var string
     */
    protected $content;

    /**
     * @return string
     */
    public function getContentKey()
    {
        return $this->contentKey;
    }

    /**
     * @param string $contentKey
     */
    public function setContentKey($contentKey)
    {
        $this->contentKey = $contentKey;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
}
