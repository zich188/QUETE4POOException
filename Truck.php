<?php

require_once "vehicle.php";

class Truck extends Vehicle
{
    private string $capacity;
    private int $loading = 0;
    private string $energy;
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];


    public function __construct(string $color, int $nbSeats, int $capacity, string $energy)
    {
        parent::__construct($color, $nbSeats);
        $this->capacity=$capacity;
        $this->setEnergy($energy);
    }

    public function truckIsFull()
    {
        if ($this->getCapacity() <= $this->loading)
        {
            return "Capacity full.";
        } else {
            return "Filling.";
        }
        return $this;

    }

    public function getCapacity()
    {
        return $this->capacity;
    }

    public function setCapacity($capacity) : void
    {
        $this->capacity=$capacity;
    }

    public function getLoading()
    {
        return $this->loading;
    }

    public function setLoading($loading)
    {
        $this->loading=$loading;
    }

    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy(string $energy) : Truck
    {
        if(in_array($energy, self::ALLOWED_ENERGIES)){
            $this->energy=$energy;
        }
        return $this;
    }

}