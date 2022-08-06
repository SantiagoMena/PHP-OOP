<?php
require 'src/Helpers/Message.php';

spl_autoload_register(function($className) {
    require "src/$className.php";
});


$armorSoldier = new BronzeArmor;
$silence = new Soldier("Silence");
$silence->move("el norte");
$silence->setArmor($armorSoldier);
$arquero = new Archer("Arquero");
$arquero->attack($silence);
$silence->attack($arquero);
$arquero->attack($silence);
