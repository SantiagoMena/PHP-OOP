<?php
namespace Source;

use Source\Armors\BronzeArmor;
use Source\Weapons\BasicSword;
use Source\Weapons\CrossBow;
use Source\Armors\SilverArmor;

require __DIR__.'/../vendor/autoload.php';

Translator::set([
    'BasicBowAttack' => ':unit lanza una flecha a :opponent',
    'BasicSwordAttack' => ':unit ataca con la espada a :opponent',
    'FireBowAttack' => ':unit lanza una flecha de fuego a :opponent',
    'CrossBowAttack' => ':unit lanza tres flechas a :opponent',
    'WeaponAttack' => ':unit ataca a :opponent',
]);

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
