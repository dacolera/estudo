<?php

namespace DesignPatterns\Creational\Singleton\Tests;

use DesignPatterns\Creational\Singleton\Singleton;

/**
 * SingletonTest tests the singleton pattern
 */
class SingletonTest extends \PHPUnit_Framework_TestCase
{

    public function testUniqueness()
    {
        $firstCall = Singleton::getInstance();
        $this->assertInstanceOf('DesignPatterns\Creational\Singleton\Singleton', $firstCall);
        $secondCall = Singleton::getInstance();
        $this->assertSame($firstCall, $secondCall);
    }

    public function getTypes()
    {
        return array(
            array('__construct'),
            array('__clone'),
            array('__wakeup')
        );
    }
    /**
     * @dataProvider getTypes
     */
    public function testNoInstanciation($method)
    {
        $obj = Singleton::getInstance();

        $refl = new \ReflectionObject($obj);
        $meth = $refl->getMethod($method);
        $this->assertTrue($meth->isPrivate());
    }

}