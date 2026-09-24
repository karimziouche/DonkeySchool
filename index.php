<?php

require_once 'Car.php';

$car = new Car('red', 5, 'fuel');

try{
    $car->start();
} catch (Exception $e) {
    echo $e->getMessage() ."<br>";
    $car->setHasParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}

var_dump($car);