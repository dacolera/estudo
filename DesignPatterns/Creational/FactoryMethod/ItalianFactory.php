<?php

namespace DesignPatterns\Creational\FactoryMethod;

/**
 * ItalianFactory is vehicle factory in Italy
 */
class ItalianFactory extends FactoryMethod
{
    /**
     * {@inheritdoc}
     */
    protected function createVehicle($type)
    {
        switch ($type) {
            case parent::CHEAP:
                return new Bicycle();
                break;
            case parent::FAST: 
                $obj = new Ferrari();
                $obj->setColor('#0f0');
                return $obj;
                break;
            default:
                throw new \InvalidArgumentException("$type is not a valid vehicle");
        }
    }
}