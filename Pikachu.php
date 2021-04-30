<?php

class Pikachu extends Pokemon
{
    public function __construct(){
        $name = "Pikachu";
        $type = "Lightning";
        $totalHitpoints = 60;
        $currentHitpoints = 60;
        $moves = [ ['Electric Ring', 50] , ['Pika Punch',20] ];
        $weakness = ['Fire', 1.5];
        $resistance = ['Fighting', 20];

        parent::__construct($name, $type, $totalHitpoints, $currentHitpoints, $moves, $weakness, $resistance);
    }
}