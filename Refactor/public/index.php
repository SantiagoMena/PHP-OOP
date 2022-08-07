<?php
namespace Source;

use Source\Armors\BronzeArmor;

require __DIR__.'/../vendor/autoload.php';

$armorSoldier = new BronzeArmor;
$silence = new Soldier("Silence");
$silence->move("el norte");
$silence->setArmor($armorSoldier);
$arquero = new Archer("Arquero", 30);
$arquero->attack($silence);
$silence->attack($arquero);
$arquero->attack($silence);
