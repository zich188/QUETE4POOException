<?php
require_once "HighWay.php";

final class MotorWay extends HighWay
{
    public function __construct(int $nbLane = 4, int $maxSpeed = 130)
    {
        parent::__construct($nbLane, $maxSpeed);
    }

//appel de la fonction abstraite addVehicle en la definissant pour tous les enfants.Qui stock le resultat dans un tableau s'il est True
    public function addVehicle(Vehicle $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->currentVehicles[] = $vehicle;
        } else {
            return "Ce vehicule n'est pas adapté pour l'autoroute";

        }
    }

}


