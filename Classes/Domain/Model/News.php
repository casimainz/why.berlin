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

    /**
     * @var \DateTime
     */
    protected $endDatetime;

    /**
     * @var string
     */
    protected $latitude;

    /**
     * @var string
     */
    protected $longitude;

    /**
     * @var string
     */
    protected $location;

    /**
     * @return \DateTime
     */
    public function getEndDatetime()
    {
        return $this->endDatetime;
    }

    /**
     * @param \DateTime $endDatetime
     */
    public function setEndDatetime($endDatetime)
    {
        $this->endDatetime = $endDatetime;
    }

    /**
     * @return string
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param string $latitude
     */
    public function setLatitude(string $latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return string
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param string $longitude
     */
    public function setLongitude(string $longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param string $location
     */
    public function setLocation(string $location)
    {
        $this->location = $location;
    }

}
