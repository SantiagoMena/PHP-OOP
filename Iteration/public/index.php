<?php

require '../vendor/autoload.php';

use Source\User;
use Source\LunchBox;

$gordon = new User(['name' => 'Gordon']);

// Hija
$joanne = new User(['name' => 'Joanne']);

$lunchBox = new LunchBox(['Sandwich', 'Papas']);

// Casa
$joanne->setLunch($lunchBox);

// Escuela
$joanne->eat();