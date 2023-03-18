<?php

trait CanShootArrows
{
    public function shootArrow()
    {
        echo "Disparó una flecha\n";
    }
}

trait CanRide
{
    public function move()
    {
        echo "Cabalgó\n";
    }
}

class Unit
{
    public function move()
    {
        echo "Caminó\n";
    }
}


class Knight extends Unit
{
    use CanRide;
}

class Archer extends Unit
{
    use CanShootArrows;

}

class MountedArcher extends Unit
{
    use CanRide, CanShootArrows;
}

$archer = new Archer();
$archer->shootArrow();

$mountedArcher = new MountedArcher();
$mountedArcher->shootArrow();
$mountedArcher->move();