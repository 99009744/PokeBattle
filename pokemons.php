<?php
    class Pokemons {
        public $pokemon;
        public $team;
        public $img;
        public $name;
        public $type;
        public $hp;
        public $weakness;
        public $resistance;
        public $attack;

        public function __construct($pokemon,$team,$img,$name,$type,$hp,$weakness,$resistance,$attack)
    {
        $this->pokemon = $pokemon;
        $this->team = $team;
        $this->img = $img;
        $this->name = $name;
        $this->type = $type;
        $this->hp = $hp;
        $this->weakness = $weakness;
        $this->resistance = $resistance;
        $this->attack1 = $attack[0];
        $this->attack2 = $attack[1];
        $this->attack3 = $attack[2];
        $this->attack4 = $attack[3];
    }
    public function __toString() {
        return json_encode($this);
    }
    public function showAttack()
    {
        echo '<button id="attack_one" onclick="attack1()" class="battle_options">' . $this->attack1 . '</button>';
        if($this->attack2 != NULL){
            echo '<button id="attack_one" class="battle_options">' . $this->attack2 . '</button>';
        }
        if($this->attack3 != NULL){
            echo '<button id="attack_one" class="battle_options">' . $this->attack3 . '</button>';
        }
        if($this->attack4 != NULL){
            echo '<button id="attack_one" class="battle_options">' . $this->attack4 . '</button>';
        }
    }
    public function showName()
    {
        echo $this->name ;
    }
    public function showHp()
    {
        echo $this->hp;
    }
    public function makeImg()
    {
        echo $this->img;
    }
    public function getGender(){
        if ($this->gender == 'M'){
            return 'Male';
        }
        else if($this->gender == 'F'){
            return 'Female';
        }
    }
    function attack1(){
        alert("AS");
    }
    }
    
?>