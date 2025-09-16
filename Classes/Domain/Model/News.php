<?php

namespace Vtm\Rw\Domain\Model;

use GeorgRinger\News\Domain\Model\News as BaseNews;

/**
 * Class News
 *
 * Override according to : https://docs.typo3.org/typo3cms/extensions/news/DeveloperManual/ExtendNews/ProxyClassGenerator/Index.html
 *
 * Please notice, that the object type is still the \GeorgRinger\News\Domain\Model\NewsDefault, since the
 * news class loader is doing some kind of magic to load this extension instead of the
 * \GeorgRinger\News\Domain\Model\NewsDefault.
 *
 * See `EXT:rw/ext_localconf.php` for activation of this override.
 *
 * @package Vtm\Rw\Domain\Model
 */
class News extends BaseNews
{
    protected ?\DateTime $endDatetime = null;
    protected string $latitude = '';
    protected string $longitude = '';
    protected string $location = '';

    public function getEndDatetime(): ?\DateTime
    {
        return $this->endDatetime;
    }

    public function setEndDatetime(?\DateTime $endDatetime): void
    {
        $this->endDatetime = $endDatetime;
    }

    public function getLatitude(): string
    {
        return $this->latitude;
    }

    public function setLatitude(string $latitude): void
    {
        $this->latitude = $latitude;
    }

    public function getLongitude(): string
    {
        return $this->longitude;
    }

    public function setLongitude(string $longitude): void
    {
        $this->longitude = $longitude;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function setLocation(string $location): void
    {
        $this->location = $location;
    }
}