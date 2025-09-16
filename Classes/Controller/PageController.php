<?php

namespace Vtm\Rw\Controller;

use GeorgRinger\News\Domain\Model\News;
use GeorgRinger\News\Domain\Repository\NewsRepository;
use TYPO3\CMS\Core\Context\Context;
use TYPO3\CMS\Core\Http\ApplicationType;
use TYPO3\CMS\Core\Resource\FileReference;
use TYPO3\CMS\Core\Resource\FileRepository;
use TYPO3\CMS\Core\Resource\ResourceFactory;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Frontend\Controller\TypoScriptFrontendController;

class PageController extends ActionController
{
    protected FileRepository $fileRepository;
    protected NewsRepository $newsRepository;

    // Dependency Injection - TYPO3 12 Style
    public function __construct(
        FileRepository $fileRepository,
        NewsRepository $newsRepository
    ) {
        $this->fileRepository = $fileRepository;
        $this->newsRepository = $newsRepository;
    }

    /**
     * Default one column template
     */
    public function defaultAction(): void
    {
        $typoScriptFrontendController = $this->getTypoScriptFrontendController();
        
        $this->view->assign('rootPage', $typoScriptFrontendController->rootLine[0] ?? []);
        $this->view->assign('currentPage', $this->getCurrentPage());
        $this->view->assign('currentPageMedia', $this->getCurrentPageMedia());
        $this->view->assign('currentNews', $this->getCurrentNews());
        $this->view->assign('headerImage', $this->getHeaderImage());
        $this->view->assign('headerNavigationActive', $this->getHeaderNavigationActive());
        $this->view->assign('isHeaderSmall',
            is_null($this->getHeaderImage()) && empty($this->getHeaderNavigationActive()));

        // Remove indexDocTitle for indexed search, since cs_seo takes care of this
        if (!empty($this->getCurrentNews())) {
            $typoScriptFrontendController->indexedDocTitle = null;
        }
    }

    /**
     * Whole template will be done by plugin
     */
    public function plainAction(): void
    {
        // Not used yet
    }

    /**
     * @return array
     */
    protected function getCurrentPage(): array
    {
        return $this->getTypoScriptFrontendController()->page;
    }

    /**
     * @return FileReference[]
     */
    protected function getCurrentPageMedia(): array
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
    protected function getHeaderImage(): ?FileReference
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

    protected function getHeaderNavigationActive(): bool
    {
        return $this->getHeaderImage() !== null;
    }

    /**
     * Current news object
     */
    protected function getCurrentNews(): ?News
    {
        $request = $this->request->getArguments();
        
        // Check for news parameter
        if (!empty($request['tx_news_pi1']['news'])) {
            /** @var News $news */
            $news = $this->newsRepository->findByUid((int)$request['tx_news_pi1']['news']);
            return $news;
        }

        return null;
    }

    /**
     * News header
     */
    protected function getNewsHeaderImage(): ?\TYPO3\CMS\Core\Resource\FileInterface
    {
        $currentNews = $this->getCurrentNews();
        if (!$currentNews) {
            return null;
        }

        /** @var FileReference|null $firstImage */
        $firstImage = $currentNews->getMedia()->current();

        if ($firstImage) {
            return $firstImage;
        } else {
            try {
                return GeneralUtility::makeInstance(ResourceFactory::class)
                    ->getFileObjectFromCombinedIdentifier('1:/user_upload/news_fallback_image.jpg');
            } catch (\Exception $e) {
                return null;
            }
        }
    }

    /**
     * Get TypoScript Frontend Controller
     */
    protected function getTypoScriptFrontendController(): TypoScriptFrontendController
    {
        return $GLOBALS['TSFE'];
    }
}