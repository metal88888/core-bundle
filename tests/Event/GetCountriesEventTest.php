<?php

/*
 * This file is part of Contao.
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @license LGPL-3.0+
 */

namespace Contao\CoreBundle\Test\Event;

use Contao\CoreBundle\Event\GetCountriesEvent;
use Contao\CoreBundle\Test\TestCase;

/**
 * Tests the GetCountriesEvent class.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class GetCountriesEventTest extends TestCase
{
    /**
     * @var GetCountriesEvent
     */
    private $event;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->event = new GetCountriesEvent(['au' => 'Australien'], ['au' => 'Australia']);
    }

    /**
     * Tests the object instantiation.
     */
    public function testInstantiation()
    {
        $this->assertInstanceOf('Contao\CoreBundle\Event\GetCountriesEvent', $this->event);
    }

    /**
     * Tests the getters.
     */
    public function testGetters()
    {
        $this->assertEquals(['au' => 'Australien'], $this->event->getReturnValue());
        $this->assertEquals(['au' => 'Australia'], $this->event->getCountries());
    }

    /**
     * Tests the setReturnValue() method.
     */
    public function testSetReturnValue()
    {
        $this->event->setReturnValue(['au' => 'Australie']);
        $this->assertEquals(['au' => 'Australie'], $this->event->getReturnValue());
    }

    /**
     * Tests the setCountries() method.
     */
    public function testSetCountries()
    {
        $this->event->setCountries(['fr' => 'France']);
        $this->assertEquals(['fr' => 'France'], $this->event->getCountries());
    }
}