<?php
    declare(strict_types=1);

    class Pokemon {
        private $name;
        private $allied;
        private $image;
        private $nickname;
        private $types;
        private $totalHitpoints;
        private $currentHitpoints;
        private $moves;

        public function __construct( string $name, bool $allied, string $image, string $nickname, $types, int $totalHitpoints, int $currentHitpoints, ArrayCollection $moves)
    {
        $this->name = $name;
        $this->allied = $allied;
        $this->image = $image;
        $this->nickname = $nickname;
        $this->types = $types;
        $this->totalHitpoints = $totalHitpoints;
        $this->currentHitpoints = $currentHitpoints;
        $this->moves = $moves;
    }
    
    public function getName(): string
    {
        return $this->name;
    }

    public function getAllied(): bool
    {
        return $this->allied;
    }

    public function getImage(): string
    {
        return $this->image;
    }  
    
    public function getNickname(): string
    {
        return $this->nickname;
    }

    public function getTypes(): string
    {
        return $this->types;
    }

    public function getTotalHitpoints(): int
    {
        return $this->totalHitpoints;
    }
    public function getCurrentHitpoints(): int
    {
        return $this->currentHitpoints;
    }

    public function getMoves()
    {
        return $this->moves;
    }

}
    
?>