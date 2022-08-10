<?php
namespace Source;

use Source\User;

require __DIR__.'/../vendor/autoload.php';

$user = new User();
$user->fill([
    'first_name' => 'Jhon',
    'last_name' => 'Doe',
    'nickname' => 'jhondoe'
]);
echo "Nickname: {$user->nickname}\n";
echo "Bienvenido {$user->first_name} {$user->last_name}\n";
print_r($user->getAttributes());