<?php
    declare(strict_types=1);

    class Pokemon {
        private $name;
        private $type;
        private $totalHitpoints;
        private $currentHitpoints;
        private $moves;
        private $weakness;
        private $resistance;
        private static $population = 0;

        public function __construct( string $name, string $type, int $totalHitpoints, int $currentHitpoints, array $moves, array $weakness, array $resistance)
    {
        $this->name = $name;
        $this->type = $type;
        $this->totalHitpoints = $totalHitpoints;
        $this->currentHitpoints = $currentHitpoints;
        $this->moves = $moves;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        self::$population++;
    }
    
    public function getName(): string
    {
        return $this->name;
    } 

    public function getType(): string
    {
        return $this->type;
    }

    public function getTotalHitpoints(): int
    {
        return $this->totalHitpoints;
    }
    public function getCurrentHitpoints()
    {
        return $this->currentHitpoints;
    }

    public function getMoves(): array
    {
        return $this->moves;
    }
    public function getWeakness(): array
    {
        return $this->weakness;
    }
    public function getResistance(): array
    {
        return $this->resistance;
    }

    public function calculateDamage($attackType,$attackDamage): float
    {
        if($attackType == $this->weakness[0]){
            return $attackDamage * $this->weakness[1];
        }
        if($attackType == $this->resistance[0]){
            return  $attackDamage - $this->resistance[1];
        }
        return $attackDamage;
    }
    public function dealsDamage($damage) : float
    {
        $this->currentHitpoints -= $damage;
        if ($this->currentHitpoints <= 0)
        {
            $this->currentHitpoints = 0;
            Pokemon::pokemonDied();
            return $this->currentHitpoints;
        }
        return $this->currentHitpoints;
    }
    public static function getPopulation() : int
    {
        return static::$population;
    }
    public static function pokemonDied()
    {
        static::$population--;
    }
}
    
?>