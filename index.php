<?php

require_once 'bicycle.php';
$bike = new Bicycle('bleu');
$bike->currentSpeed = 0;
var_dump($bike);
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h ' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();
echo "<br>";
echo "<br>";

$rockrider = new Bicycle('yellow');

$tornado = new Bicycle('black');
$tornado->forward();

$car = new Car("blue", 4, "gasoline");
$car->setEnergyLevel(50);
$car->start();
$car->forward();
$car->brake();
var_dump($car);
