<?php

namespace Vtm\Rw\Controller;

use GeorgRinger\News\Domain\Model\Category;
use GeorgRinger\News\Domain\Model\NewsDefault;
use GeorgRinger\News\Domain\Repository\NewsRepository;
use TYPO3\CMS\Core\Context\Context;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Core\Utility\RootlineUtility;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;
use TYPO3\CMS\Frontend\Page\PageRepository;

class SitemapController extends ActionController
{
    const EXCLUDED_DOKTYPES = [PageRepository::DOKTYPE_SYSFOLDER];
    const EVENT_CATEGORY = 'Event';

    protected NewsRepository $newsRepository;
    protected Context $context;

    // Dependency Injection - TYPO3 12 Style
    public function __construct(
        NewsRepository $newsRepository,
        Context $context
    ) {
        $this->newsRepository = $newsRepository;
        $this->context = $context;
    }

    /**
     * Index action
     */
    public function indexAction(): void
    {
        $currentPage = $this->getCurrentPage();
        
        $rootLineUtility = GeneralUtility::makeInstance(RootlineUtility::class, $currentPage['uid']);
        $rootLine = $rootLineUtility->get();
        
        $rootUid = $rootLine[0]['uid'] ?? 0;
        $pageRepository = GeneralUtility::makeInstance(PageRepository::class, $this->context);
        
        $menu = $pageRepository->getMenu(
            $rootUid,
            $fields = '*',
            $sortField = 'sorting',
            $additionalWhereClause = 'AND pages.nav_hide=0 AND pages.doktype NOT IN (' . implode(',', static::EXCLUDED_DOKTYPES) . ')'
        );

        $now = new \DateTime('now');

        $news = $this->getNews();
        $newsByPage = [];
        
        /** @var NewsDefault $newsItem */
        foreach ($news as $newsItem) {
            $categories = $newsItem->getCategories();
            /** @var Category $category */
            foreach ($categories as $category) {
                // Events with past start time are ignored
                if ($category->getTitle() === static::EVENT_CATEGORY && $newsItem->getDatetime() < $now) {
                    continue 2; // Continue outer foreach
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
     */
    protected function buildTree(array $elements, int $pid = 0): array
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
     */
    protected function getNews(): iterable
    {
        $newsQuery = $this->newsRepository->createQuery();
        $newsQuery->getQuerySettings()->setRespectStoragePage(false);
        return $newsQuery->execute();
    }

    protected function getCurrentPage(): array
    {
        return $GLOBALS['TSFE']->page;
    }
}