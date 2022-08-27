<?php
namespace Source;

use Source\LunchBox;

class User extends Model
{
    protected $lunch;
    
    public function __construct(array $attributes = []) {
        parent::__construct($attributes);

        $this->lunch = new LunchBox();
    }

    public function setLunch(LunchBox $lunch)
    {
        $this->lunch = $lunch;
    }
     
    public function eat()
    {
        if($this->lunch->isEmpty()) {
            throw new \Exception("{$this->name} no tiene nada para comer!");
        }

        echo "{$this->name} almuerza {$this->lunch->shift()} \n";
    }

    public function eatMeal()
    {
        echo "{$this->name} tiene en su caja de almuerzo ". $this->lunch->count() ." alimentos\n";

        $food = $this->lunch->filter(function($item) {
            return ! $item->beverage;
        });

        $beverage = $this->lunch->filter(function($item) {
            return $item->beverage;
        });

        foreach ($food as $item) {
            echo "{$this->name} come {$item->name}\n";
        }

        foreach ($beverage as $item) {
            echo "{$this->name} toma {$item->name}\n";
        }
    }
}
