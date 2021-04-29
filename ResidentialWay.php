<?php

require_once "HighWay.php";

final class ResidentialWay extends HighWay
{
public function __construct(int $nbLane = 2, int $maxSpeed = 50)
{
    parent::__construct($nbLane, $maxSpeed);
}
public function addVehicle(Vehicle $vehicle)
{
    if ($vehicle instanceof Car || $vehicle instanceof Bicycle)
    {
        $this->currentVehicles[] = $vehicle;
    } else {
        return "Manque le véhicule";
    }
}

}