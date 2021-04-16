<?php
    class Pokemons {
        public $name;
        private $gender;
        public $team;
        public $oneliner;

        public function __construct($name, $gender, $team, $oneliner)
    {
        $this->name = $name;
        $this->gender = $gender;
        $this->team = $team;
        $this->oneliner = $oneliner;
    }
    public function __toString() {
        return json_encode($this);
    }
    public function sayOneliner()
    {
        echo '<h2>' . $this->oneliner . '</h2>';
    }
    public function getGender(){
        if ($this->gender == 'M'){
            return 'Male';
        }
        else if($this->gender == 'F'){
            return 'Female';
        }
    }
    }
?>