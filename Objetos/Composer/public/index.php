<?php
namespace Source;

require __DIR__.'/../vendor/autoload.php';

$armorSoldier = new BronzeArmor;
$silence = new Soldier("Silence");
$silence->move("el norte");
$silence->setArmor($armorSoldier);
$arquero = new Archer("Arquero");
$arquero->attack($silence);
$silence->attack($arquero);
$arquero->attack($silence);
