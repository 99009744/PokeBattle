<?php
    class EnemyPokemon extends Pokemons{


        public function __construct($pokemon,$img,$name,$type,$hp,$weakness,$resistance,$attack)
    {
        $team = 'Enemy';
        parent::__construct($pokemon,$team,$img,$name,$type,$hp,$weakness,$resistance,$attack);
    }
    }
    
?>