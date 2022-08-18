<?php
namespace Source;

class LunchBox
{
    protected $food = [];

    public function __construct(array $food = []) {
    $this->food = $food;
    }

    public function shift()
    {
        return array_shift($this->food);
    }

    public function isEmpty()
    {
        return empty($this->food);
    }
}
