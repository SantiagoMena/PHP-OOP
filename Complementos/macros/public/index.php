<?php

require __DIR__ . '/../vendor/autoload.php';

use Php\Componentes\HtmlBuilder;

HtmlBuilder::macro('success', function($message){
    return "<p>{$message}</p>";
});

$html = new HtmlBuilder();


echo $html->hr();
echo $html->success("Todo salió bien!");