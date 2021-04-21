<?php
    require "ArrayCollection.php";

    class PokemonCollection extends ArrayCollection
    {
        protected function getTarget(): string
        {
            return Pokemon::class;
        }
    }