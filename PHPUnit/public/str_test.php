<?php

require __DIR__ . '/../vendor/autoload.php';

use Php\PhpUnit\Str;

if(Str::studly('full_name') != 'FullName') {
    throw new Exception("Error, no convierte la cadena deseada full_name esperado FullName");
    
}

var_dump(Str::studly('full_name'));