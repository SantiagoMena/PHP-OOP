<?php

trait CanPerformBasicActions
{
    public function move()
    {
        echo "Caminó\n";
    }
}

trait CanShootArrows
{
    public $arrows = 50;
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


class Knight
{
    use CanRide;
}

class Archer
{
    use CanShootArrows, CanPerformBasicActions;

}

class MountedArcher
{
    use CanRide, CanPerformBasicActions {
        CanRide::move insteadof CanPerformBasicActions;
        CanRide as ride;
    }

    use CanShootArrows;
}

$archer = new Archer();
$archer->shootArrow();

$mountedArcher = new MountedArcher();
$mountedArcher->shootArrow();
$mountedArcher->move();


echo $mountedArcher->arrows;