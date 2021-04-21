<?php
    declare(strict_types=1);
    
    class Type{
        private $name;
        private $weaknesses = [];
        private $resistances = [];
        public function __construct(string $name , array $weaknesses, array $resistances)
        {
            $this->name = $name;
            $this->weaknesses = $weaknesses;
            $this->resistances = $resistance;
        }
        public function getName(): string
        {
            return $this->name;
        }
        public function getWeaknesses(): array
        {
            return $this->weaknesses;
        }
        public function getResistances(): array
        {
            return $this->resistances;
        }
    }

?>