<?php
namespace Source;

class User extends Model
{
    public $id = 5;
    private $dbPassword = 'secret';
    private $table = 'table';
    public function getFirstNameAttribute($value)
    {
        return strtoupper($value);
    }

    public function __sleep()
    {
        return ['attributes', 'table'];
    }

    public function __wakeup()
    {
        $this->attributes['first_name'] = strtoupper($this->attributes['first_name']);
    }
}
