<?php
    class Pokemon extends Pokemons{


        public function __construct($name, $gender, $oneliner)
    {
        $team = 'Vuur';
        parent::__construct($name, $gender, $team, $oneliner);
    }
    }
    
?>