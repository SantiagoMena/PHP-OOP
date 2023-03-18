<?php
namespace Php\PhpUnit;

class User extends Model
{
    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
