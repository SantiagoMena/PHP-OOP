<?php
namespace Source;

use Source\Armors\BronzeArmor;
use Source\Weapons\BasicSword;
use Source\Weapons\CrossBow;

require __DIR__.'/../vendor/autoload.php';

$armorSoldier = new BronzeArmor;
$weaponSoldier = new BasicSword;

$silence = new Soldier("Silence", $weaponSoldier);
$silence->move("el norte");
$silence->setArmor($armorSoldier);

$weaponArcher = new CrossBow;
$arquero = new Archer("Arquero", $weaponArcher);

$arquero->attack($silence);
$silence->attack($arquero);
$arquero->attack($silence);
