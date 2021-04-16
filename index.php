<?php
    require "pokemons.php";
    require "pokemon.php";
    $spiderman = new Pokemons('super-man', 'M','spiderfriends', 'HELLO ITS ME');
    $batman = new Pokemons('bat-man', 'M','spiderfriends', 'HELLO ITS ME');
    print_r('<pre>'. $spiderman . '</pre>');
    print_r($spiderman->sayOneliner());
    print_r('<pre>'. $spiderman->getGender() . '</pre>');
    
    $thor = new Pokemon('Thor', 'Male', 'For Asgard!');
    print_r($thor->sayOneliner());
    print_r('<pre>' . $thor . '</pre>');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PokeBattle</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet"> 
</head>
<body>
    <div id="battle_container">
        <div id="pokemon_ally_pic" class="pic"></div>
        <div id="pokemon_ally_stats" class="stats">
            <h2>NAAM:</h3>
            <h3>HP:</h3>
        </div>
        <div id="pokemon_enemy_pic" class="pic"></div>
        <div id="pokemon_enemy_stats" class="stats">
            <h2>NAAM:</h3>
            <h3>HP:</h3>
        </div>
        <div id="text_area">
            <div id="text_state" class="state">

            </div>
            <div id="battle_state"  class="state">
                <div id="battle_text">

                </div>
                <div id="battle_options_div">
                    <button id="attack_one" class="battle_options"></button>
                    <button id="attack_two" class="battle_options"></button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>