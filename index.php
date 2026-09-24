<?php

require_once 'LightableInterface.php';
require_once 'Car.php';
require_once 'Bicycle.php';
require_once 'SkateBoard.php';

$car = new Car('red', 5, 'fuel');
$bicycle = new Bicycle('blue', 1);
$skateBoard = new SkateBoard('black', 1);


var_dump($car);
var_dump($bicycle);
var_dump($skateBoard);