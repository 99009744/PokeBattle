<?php
    declare(strict_types=1);

    class Move{
        private $name;
        private $damage;

        public function __construct(string $name, int $damage)
        {
            $this->name = $name;
            $this->damage = $damage;
        }

        public function getName(): string
        {
            return $this->name;
        }
        public function getDamage(): int
        {
            return $this->damage;
        }
    }

?>