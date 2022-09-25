<?php
require_once "Bicycle.php";
require_once "Car.php";
require_once "Truck.php";

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);


$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

var_dump(Car::ALLOWED_ENERGIES);


// TRUCK

$truck = new Truck("black", 3, "electric", 30000);
var_dump($truck);

echo $truck->forward();
echo $truck->brake();
echo $truck->checkStock();
echo $truck->setStock(30000);
echo $truck->checkStock();
