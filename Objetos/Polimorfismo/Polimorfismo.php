<?php
require('Message.php');
require('Unit.php');
require('Soldier.php');
require('Archer.php');


$silence = new Soldier("Silence");
$silence->move("el norte");

$arquero = new Archer("Arquero");
$arquero->attack($silence);
$silence->attack($arquero);
$arquero->attack($silence);
