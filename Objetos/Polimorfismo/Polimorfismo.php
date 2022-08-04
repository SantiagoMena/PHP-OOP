<?php
require('Message.php');
require('Unit.php');
require('Soldier.php');
require('Archer.php');
require('Armor.php');

$armorSoldier = new Armor;

$silence = new Soldier("Silence");
$silence->move("el norte");
$silence->setArmor($armorSoldier);
$arquero = new Archer("Arquero");
$arquero->attack($silence);
$silence->attack($arquero);
$arquero->attack($silence);
