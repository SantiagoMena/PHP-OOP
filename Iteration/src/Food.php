<?php

namespace Source;

class Food extends Model
{
    public function getBeverageAttribute()
    {
        return $this->attributes['beverage'] ?? false;
    }
}