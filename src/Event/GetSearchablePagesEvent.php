<?php

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\Event;

use Contao\CoreBundle\Traits\GetLanguageTrait;
use Symfony\Component\EventDispatcher\Event;

/**
 * Allows to execute logic when the searchable pages are compiled.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class GetSearchablePagesEvent extends Event
{
    use GetLanguageTrait;

    /**
     * @var array
     */
    private $pages;

    /**
     * @var int
     */
    private $rootId;

    /**
     * Constructor.
     *
     * @param array  $pages    The pages
     * @param int    $rootId   The root page ID
     * @param string $language The language
     */
    public function __construct(array $pages, &$rootId, &$language)
    {
        $this->pages    = $pages;
        $this->rootId   = &$rootId;
        $this->language = &$language;
    }

    /**
     * Returns the pages.
     *
     * @return array The pages
     */
    public function getPages()
    {
        return $this->pages;
    }

    /**
     * Sets the pages.
     *
     * @param array $pages The pages
     */
    public function setPages(array $pages)
    {
        $this->pages = $pages;
    }

    /**
     * Returns the root page ID.
     *
     * @return int The root page ID
     */
    public function getRootId()
    {
        return $this->rootId;
    }

    /**
     * Sets the root page ID.
     *
     * @param int $rootId The root page ID
     */
    public function setRootId($rootId)
    {
        $this->rootId = (int) $rootId;
    }
}
