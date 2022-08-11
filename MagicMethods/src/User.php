<?php
namespace Source;

class User extends Model
{
    public function getFirstNameAttribute($value)
    {
        return strtoupper($value);
    }
}
