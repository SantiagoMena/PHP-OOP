<?php
require __DIR__ . '/../vendor/autoload.php';

use Php\PhpUnit\User;

$user = new User([
    'first_name' => 'Walter',
    'last_name' => 'Willson',
    'age' => 36,
]);

echo "{$user->getFullName()} tiene {$user->age} años";