<?php
    declare(strict_types=1);

    class Pokemon {
        private $name;
        private $allied;
        private $image;
        private $nickname;
        private $types;
        private $hitpoints;
        private $moves;

        public function __construct( string $name, bool $allied, string $image, string $nickname, $types, int $hitpoints, MoveCollection $moves)
    {
        $this->name = $name;
        $this->allied = $allied;
        $this->image = $image;
        $this->nickname = $nickname;
        $this->types = $types;
        $this->hitpoints = $hitpoints;
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

    public function getHitpoints(): int
    {
        return $this->hitpoints;
    }

    public function getMoves(): array
    {
        return $this->moves;
    }

}
    
?>