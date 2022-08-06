<?php
namespace Source;

require 'src/Helpers/Message.php';


spl_autoload_register(function($className) {
    if(strpos($className, 'Source\\') === 0) {
        $className = str_replace('Source\\', '', $className);

        if(file_exists("./src/$className.php")) {
            require "src/$className.php";
        }
    }
});


$armorSoldier = new BronzeArmor;
$silence = new Soldier("Silence");
$silence->move("el norte");
$silence->setArmor($armorSoldier);
$arquero = new Archer("Arquero");
$arquero->attack($silence);
$silence->attack($arquero);
$arquero->attack($silence);
