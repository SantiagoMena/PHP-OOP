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

echo "Bienvenido {$user->first_name} {$user->last_name}\n";

unset($user->nickname);

if($user->nickname){
    echo "Nickname: {$user->nickname}\n";
}