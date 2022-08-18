<?php
namespace Source;

use Source\User;
use Source\LunchBox;

require __DIR__.'/../vendor/autoload.php';

// Test: __clone()

$gordon = new User(['name' => 'Gordon']);

// Daughters

$joanie = new User(['name' => 'Joanie']);
$haley = new User(['name' => 'Haley']);

// House
$lunchBox = new LunchBox(['Sandwich', 'Manzana']);
$lunchBox2 = clone($lunchBox);

$joanie->setLunch($lunchBox);
$haley->setLunch($lunchBox2);

// School

$joanie->eat();
$haley->eat();

var_dump($lunchBox);
var_dump($lunchBox2);