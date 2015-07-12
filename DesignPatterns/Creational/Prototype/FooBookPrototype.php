<?php

namespace DesignPatterns\Creational\Prototype;
use phpDocumentor\Reflection\DocBlock\Context;
use phpDocumentor\Reflection\DocBlock\Description;
use phpDocumentor\Reflection\DocBlock\Location;
use phpDocumentor\Reflection\DocBlock\Serializer;


/**
 * Class FooBookPrototype
 */
class FooBookPrototype extends BookPrototype
{
    protected $category = 'Foo';
    protected $i1;
    protected $i2;
    protected $i3;
    protected $i4;
    /**
     * empty clone
     */
    public function __clone()
    {
    }

    public function __construct() {
        $this->i1 = new Context('cevbwe');
        $this->i2 = new Serializer();
        $this->i3 = new Location();
        $this->i4 = new Description('sds');
    }
}