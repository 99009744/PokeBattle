<?php
    class AllyPokemon extends Pokemons{


        public function __construct($pokemon,$img,$name,$type,$hp,$weakness,$resistance,$attack)
    {
        $team = 'ally';
        parent::__construct($pokemon,$team,$img,$name,$type,$hp,$weakness,$resistance,$attack);
    }
    }
    
?>