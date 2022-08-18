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
$lunchBox = new LunchBox(['Sandwich']);
$joanie->setLunch($lunchBox);
$haley->setLunch($lunchBox);

// School

$joanie->eat();
$haley->eat();