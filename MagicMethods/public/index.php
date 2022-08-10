<?php
namespace Source;

use Source\User;

require __DIR__.'/../vendor/autoload.php';

$user = new User([
    'first_name' => 'Jhon',
    'last_name' => 'Doe'
]);

echo "Bienvenido {$user->first_name} {$user->last_name}\n";