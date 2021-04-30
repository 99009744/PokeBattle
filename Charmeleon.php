<?php

class Charmeleon extends Pokemon
{
    public function __construct(){
        $name = "Charmeleon";
        $type = "Fire";
        $totalHitpoints = 60;
        $currentHitpoints = 60;
        $moves = [ ['Head Butt',10] , ['Flare',30] ];
        $weakness = ['Water', 1.5];
        $resistance = ['Lightning', 20];

        parent::__construct($name, $type, $totalHitpoints, $currentHitpoints, $moves, $weakness, $resistance);
    }
}