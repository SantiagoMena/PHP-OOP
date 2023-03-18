<?php
namespace Php\PhpUnit;
abstract class Model
{
    public string $first_name;
    public string $last_name;
    public string $age;
    
    public function __construct($arguments = null) {
        if(isset($arguments['first_name']))
            $this->first_name = $arguments['first_name'];

        if(isset($arguments['last_name']))
            $this->last_name = $arguments['last_name'];

        if(isset($arguments['age']))
            $this->age = $arguments['age'];
    }
}