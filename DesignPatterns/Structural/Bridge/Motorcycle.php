<?php

namespace DesignPatterns\Structural\Bridge;

/**
 * Refined Abstraction
 */
class Motorcycle extends Vehicle
{
    public function manufacture()
    {
        print 'Motorcycle ';
        $this->workShop1->work();
        $this->workShop2->work();
    }
}