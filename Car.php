<?php

require_once "vehicle.php";

class Car extends Vehicle
{

    private string $energy;
    private int $energyLevel;
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    private bool $hasParkBrake = false;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent:: __construct($color, $nbSeats);
        $this->setEnergy($energy);
    }


    public function start()
    {
        if ($this->getParkBrake() == true) {
            throw new Exception("Frain a main activée");
        }
            return "let's go le frein à main est désactivé";
    }


    public function getEnergy()
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Car
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel($energyLevel)
    {
        $this->energyLevel = $energyLevel;
    }

    public function getParkBrake()
    {
        return $this->hasParkBrake;
    }

    public function setParkBrake($hasparkbrake)
    {
        $this->hasparkbrake = $hasparkbrake;
        return $this;
    }
}

