<?php

namespace Vtm\Rw\Controller;

use GeorgRinger\News\Domain\Model\News;
use GeorgRinger\News\Domain\Repository\NewsRepository;
use TYPO3\CMS\Core\Resource\FileReference;
use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3\CMS\Core\Resource\ResourceFactory;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class PageController extends ActionController
{

    /**
     * @var FileRepository
     */
    protected $fileRepository;

    /**
     * @var NewsRepository
     */
    protected $newsRepository;

    /**
     * @param FileRepository $fileRepository
     */
    public function injectFileRepository(FileRepository $fileRepository)
    {
        $this->fileRepository = $fileRepository;
    }

    /**
     * @param NewsRepository $newsRepository
     */
    public function injectNewsRepository(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    /**
     * Default one column template
     */
    public function defaultAction()
    {
        $this->view->assign('rootPage', $GLOBALS['TSFE']->rootLine[0]);
        $this->view->assign('currentPage', $this->getCurrentPage());
        $this->view->assign('currentPageMedia', $this->getCurrentPageMedia());
        $this->view->assign('currentNews', $this->getCurrentNews());
        $this->view->assign('headerImage', $this->getHeaderImage());
        $this->view->assign('headerNavigationActive', $this->getHeaderNavigationActive());
        $this->view->assign('isHeaderSmall',
            is_null($this->getHeaderImage()) && empty($this->getHeaderNavigationActive()));

        // Remove indexDocTitle for indexed search, since cs_seo takes care of this
        if (!empty($this->getCurrentNews())) {
            $GLOBALS['TSFE']->indexedDocTitle = null;
        }
    }

    /**
     * Whole template will be done by plugin
     */
    public function plainAction()
    {
        // Not used yet
    }

    /**
     * @return array
     */
    protected function getCurrentPage()
    {
        return $GLOBALS['TSFE']->page;
    }

    /**
     * @return FileReference[]
     */
    protected function getCurrentPageMedia()
    {
        $media = [];
        $mediaRelations = $this->fileRepository->findByRelation('pages', 'media', $this->getCurrentPage()['uid']);

        /** @var FileReference[] $mediaRelations */
        foreach ($mediaRelations as $mediaRelation) {
            $media[] = $mediaRelation;
        }

        return $media;
    }

    /**
     * Header image
     *
     * This method controls the header image. It will also take care to
     * take the header from a news on news detail pages.
     */
    protected function getHeaderImage()
    {
        $pageMedia = $this->getCurrentPageMedia();

        // If we have news that can provide the header image
        if ($this->getCurrentNews()) {
            return $this->getNewsHeaderImage();
        }

        // Else if the page has an image
        if (count($pageMedia)) {
            return $pageMedia[0];
        }

        return null;
    }

    /**
     * @return bool
     */
    protected function getHeaderNavigationActive()
    {
        if ($this->getHeaderImage()
        ) {
            return true;
        }

        return false;
    }

    /**
     * Current news object
     *
     * @return News|null
     */
    protected function getCurrentNews()
    {
        $request = array_replace_recursive($_GET, $_POST);
        // Maybe we find a better way of detecting if we are on a news detail page
        if (!empty($request['tx_news_pi1']['news'])) {
            /** @var News $news */
            $news = $this->newsRepository->findByUid($request['tx_news_pi1']['news']);
            return $news;
        }

        return null;
    }

    /**
     * News header
     *
     * @return FileReference|\TYPO3\CMS\Core\Resource\File
     */
    protected function getNewsHeaderImage()
    {
        /** @var FileReference|null $firstImage */
        $firstImage = $this->getCurrentNews()->getMedia()->current();

        if ($firstImage) {
            return $firstImage;
        } else {
            return ResourceFactory::getInstance()->getFileObjectFromCombinedIdentifier('1:/user_upload/news_fallback_image.jpg');
        }
    }
}
