<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//require 'drink.php';
//require 'beer.php';
require 'private.php';

//$cola = new Drink('black', 2);
//$cola -> getInfo();

$duvel = new Beer('blond', 3.5, '', 'Duvel', 8.5);

$duvel -> getAlcoholPercentage();
echo $duvel -> getAlcoholPercentage();
echo $duvel-> makeColorAccessible() . '<br>';
$duvel -> getInfo();


$duvel->setColor('light');
