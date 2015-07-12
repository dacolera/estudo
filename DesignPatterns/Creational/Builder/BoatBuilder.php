<?php

namespace DesignPatterns\Creational\Builder;

/**
 * CarBuilder builds car
 */
class BoatBuilder implements BuilderInterface
{
    /**
     * @var Parts\Car
     */
    protected $boat;

    /**
     * @return void
     */
    public function addDoors()
    {
    }

    /**
     * @return void
     */
    public function addEngine()
    {
        $this->boat->setPart('engine', new Parts\Engine());
    }

    /**
     * @return void
     */
    public function addWheel()
    {
    }

    /**
     * @return void
     */
    public function createVehicle()
    {
        $this->boat = new Parts\Boat();
    }

    /**
     * @return Parts\Car
     */
    public function getVehicle()
    {
        return $this->boat;
    }
}