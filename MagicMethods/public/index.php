<?php
namespace Source;

use Source\User;
use Source\HtmlNode;

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

// Test: __call() & __callStatic()
$nodeName = (new HtmlNode('input'))
                ->name('first_name')
                ->type('text');

$nodeMessage = HtmlNode::textarea("Message")->name('message');

echo $nodeName->render()."\n";
echo $nodeMessage->render()."\n";

// Test: __toString();

echo $nodeMessage."\n";

echo $nodeName('name')."\n";

// Test: __sleep() && __wakeup()
$user = new User(['first_name' => 'Test']);
$result = serialize($user);
$data = unserialize($result);

echo serialize($data)."\n";