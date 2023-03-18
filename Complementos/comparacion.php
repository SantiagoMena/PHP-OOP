<?php

class Person
{
    public function __construct(private int $id, private string $name) { }
}

$persona1 = new Person(1, 'Santiago');
$persona2 = new Person(2, 'Mena');

if($persona1 == $persona2) {
    echo "Verdadero";
} else {
    echo "Falso";
}

echo "\n";

$persona3 = new Person(3, 'Daniel');
$persona4 = $persona3;
if($persona3 == $persona4) {
    echo "Verdadero";
} else {
    echo "Falso";
}