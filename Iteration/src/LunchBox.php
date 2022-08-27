<?php
namespace Source;
use ArrayIterator;

class LunchBox implements \IteratorAggregate
{
    protected $food = [];
    protected $original = true;

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

    public function __clone()
    {
        $this->original = false;
    }

    public function getIterator(): ArrayIterator
    {
        return new ArrayIterator($this->food);
    }
}
