<?php

namespace Vtm\Rw\Controller;

use GeorgRinger\News\Domain\Model\Category;
use GeorgRinger\News\Domain\Model\NewsDefault;
use GeorgRinger\News\Domain\Repository\NewsRepository;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\RootlineUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3\CMS\Frontend\Page\PageRepository;

class SitemapController extends ActionController
{
    const EXCLUDED_DOKTYPES = [PageRepository::DOKTYPE_SYSFOLDER];
    const EVENT_CATEGORY = 'Event';

    /**
     * @var NewsRepository
     */
    protected $newsRepository;

    /**
     * @var PageRepository
     */
    protected $pageRepository;

    /**
     * @param NewsRepository $newsRepository
     */
    public function injectNewsRepository(NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    /**
     * @param PageRepository $pageRepository
     */
    public function injectPageRepository(PageRepository $pageRepository)
    {
        $this->pageRepository = $pageRepository;
    }

    /**
     * Index action
     */
    public function indexAction()
    {
        
        $rootLine = GeneralUtility::makeInstance(RootlineUtility::class, $this->getCurrentPage()['uid'], '', $this->context);
        /** @var RootlineUtility  $rootline*/
        $rootLine = $rootLine->get();
        
        //$rootLine = $this->pageRepository->getRootLine($this->getCurrentPage()['uid']);
        $rootUid = $rootLine[0] ?? null;
        $pageRepository = GeneralUtility::makeInstance(PageRepository::class);
        
        $menu = $pageRepository->getMenu(
            $rootUid,
            $fields = '*',
            $sortField = 'sorting',
            $additionalWhereClause = 'AND pages.nav_hide=0 AND pages.doktype NOT IN (' . implode(',',static::EXCLUDED_DOKTYPES) . ')'
        );

        $now = new \DateTime('now');

        $news = $this->getNews();
        $newsByPage = [];
        /** @var NewsDefault $newsItem */
        foreach ($news as $newsItem) {
            $categories = $newsItem->getCategories();
            /** @var Category $category */
            foreach ($categories as $category) {
                //events with past start time are ignored
                if ($category->getTitle() === static::EVENT_CATEGORY && $newsItem->getDatetime() < $now) {
                    continue;
                }
                $pageUid = $category->getShortcut();
                if (!isset($newsByPage[$pageUid])) {
                    $newsByPage[$pageUid] = [];
                }
                $newsByPage[$pageUid][] = $newsItem;
            }
        }

        $sitemapTree = $this->buildTree($menu);
        $this->view->assign('rootUid', $rootUid);
        $this->view->assign('sitemapTree', $sitemapTree);
        $this->view->assign('newsByPage', $newsByPage);
    }

    /**
     * Build a tree structure from page rows
     * @param array $elements
     * @param int $pid
     * @return array
     */
    protected function buildTree(array $elements, $pid = 0)
    {
        $branch = [];

        foreach ($elements as $element) {
            if ($element['pid'] === $pid) {
                $children = $this->buildTree($elements, $element['uid']);
                if ($children) {
                    $element['children'] = $children;
                }
                $branch[] = $element;
            }
        }

        return $branch;
    }

    /**
     * News getter
     * @return array|\TYPO3\CMS\Extbase\Persistence\QueryResultInterface
     */
    protected function getNews()
    {
        $newsQuery = $this->newsRepository->createQuery();
        $newsQuery->getQuerySettings()->setRespectStoragePage(false);
        return $newsQuery->execute();
    }

    /**
     * @return array
     */
    protected function getCurrentPage()
    {
        return $GLOBALS['TSFE']->page;
    }
}
