<?php

require '../vendor/autoload.php';

use Source\User;
use Source\LunchBox;
use Source\Food;

$gordon = new User(['name' => 'Gordon']);

// Hija
$joanne = new User(['name' => 'Joanne']);

$lunchBox = new LunchBox([
    new Food(['name' => 'Sandwich']), 
    new Food(['name' => 'Papas']), 
    new Food(['name' => 'Jugo de Naranja', 'beverage' => true]), 
]);

// Casa
$joanne->setLunch($lunchBox);

// Escuela
$joanne->eatMeal();