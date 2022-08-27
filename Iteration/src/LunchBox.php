<?php
namespace Source;
use Iterator;

class LunchBox implements Iterator
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

    public function all()
    {
        return $this->food;
    }

    function rewind(): void {
        reset($this->food);
    }
    
    function current(): mixed {
        return current($this->food);
    }

    function key(): mixed {
        return key($this->food);
    }

    function next(): void {
        next($this->food);
    }

    function valid(): bool {
        return key($this->food) !== null;
    }
}
