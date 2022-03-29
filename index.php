<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
var_dump($bike);

$bike->color = 'blue';
$bike->currentSpeed = 0;
var_dump($bike); // then, another dump.

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();


$carOne = new Car("pink", 5, "fuel");
$carOne->setColor("pink");
$carOne->setNbSeats (5);
$carOne->setNbWheels (4);
$carOne->setCurrentSpeed (30);
$carOne->setEnergy ("fuel");
$carOne->setEnergyLevel (100);

var_dump($carOne);

echo $carOne->start();
echo $carOne->forward();
echo '<br> Vitesse du véhicule : ' . $carOne->getCurrentSpeed() . ' km/h' . '<br>';
echo $carOne->brake();
echo '<br> Vitesse du véhicule : ' . $carOne->getCurrentSpeed() . ' km/h' . '<br>';
echo $carOne->brake();

