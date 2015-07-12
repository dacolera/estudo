<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * Abstraction
 */
abstract class Vehicle
{

    protected $workShop1;
    protected $workShop2;

    public function __construct(Workshop $workShop1, Workshop $workShop2)
    {
        $this->workShop1 = $workShop1;
        $this->workShop2 = $workShop2;
    }

    abstract public function manufacture();
}