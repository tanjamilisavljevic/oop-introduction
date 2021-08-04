<?php

declare(strict_types=1);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'drink.php';
require 'beer.php';


$cola = new Drink('black', 2);
$cola -> getInfo();


