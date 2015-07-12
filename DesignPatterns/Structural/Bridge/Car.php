<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * Refined Abstraction
 */
class Car extends Vehicle
{
    public function manufacture()
    {
        print 'Car ';
        $this->workShop1->work();
        $this->workShop2->work();
    }
}