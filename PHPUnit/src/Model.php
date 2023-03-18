<?php
namespace Php\PhpUnit;
use ArrayAccess;
abstract class Model implements ArrayAccess
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
    public function offsetExists($offset): bool
    {
        return isset($this->$offset);
    }

    public function offsetGet($offset): mixed
    {
        return $this->$offset;
    }

    public function offsetSet($offset, $value): void
    {
        $this->$offset = $value;
    }

    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
}