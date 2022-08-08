<?php
namespace Source;

use Source\Armors\BronzeArmor;
use Source\Weapons\BasicSword;
use Source\Weapons\CrossBow;
use Source\Armors\SilverArmor;

require __DIR__.'/../vendor/autoload.php';

$armorSoldier = new BronzeArmor;
$weaponSoldier = new BasicSword;

$silence = new Unit("Silence", $weaponSoldier);
$silence->move("el norte");
$silence->setArmor($armorSoldier);

$weaponArcher = new CrossBow;
$arquero = new Unit("Arquero", $weaponArcher);
$arquero->setArmor(new SilverArmor);

$arquero->attack($silence);
$silence->attack($arquero);
$arquero->attack($silence);
