<?php

require "MotorWay.php";
require "PedestrianWay.php";
require "ResidentialWay.php";
require "Car.php";
require "Truck.php";
require "Bicycle.php";

//Creation nouvel objet bike de la classe Bicycle
$bike = new Bicycle("blue", 1);
//creation nouvel objet porsche de la classe Car
$porsche = new Car("blue", 4, "fuel");

//Creation nouvel objet superWay de la class MotorWay
$superWay = new MotorWay();
//var_dump($superWay);

//Utilisation de la fonction addVehicle pour verifier si le vehicle peut circuler sur la superWay
echo $superWay->addVehicle($porsche); //il peut car la fonction abstraite pour MotorWay car la variable vehicle est bien instancié à ma classe Car
//var_dump($porsche);
echo "En prenant l'objet bike cela nous affiche : " .$superWay->addVehicle($bike) ."<br/>"; // Ne peut pas car bike est issus de la class Bicycle.
//var_dump($bike);


//Creation nouvel objet residentialWay de la classe ResidentialWay
$residentialWay = new ResidentialWay();

echo $residentialWay->addVehicle($porsche); //Stocké dans le tableau currentVehicles
echo $residentialWay->addVehicle($bike); // Stocké dans le tableau currentVehicles


//Creation nouvel objet pedestrianWay de la classe PedestrianWay
$pedestrianWay = new PedestrianWay();

echo "En prenant Porsche cela nous affiche : " .$pedestrianWay->addVehicle($porsche); //Return Le véhicule n'est pas adapté pour la zone pietonne
echo $pedestrianWay->addVehicle($bike); //Stocké dans le tableau currentVehicles



//POO 4 : Exception
/*echo "<br>";
echo "<br>";
echo $porsche->setCurrentSpeed(0);
echo $porsche->getCurrentSpeed();
echo "<br>";
echo $porsche->setParkBrake();*/


$car= new Car("rouge", 3, "electric");

echo "<br>";
echo "<br>";
echo "<br>";

// frein

$car = new Car('red', 4, "electric");
try {
    echo $car->start();
} catch (Exception $e) {


    echo "execption receve : " . $e->getMessage() . "<br>";
    $car->setParkBreak(false);
    echo "frain à main changé: " . $car->start() . "<br>";
} finally {
    echo " Ma voiture roule comme un donut <br>";
}
