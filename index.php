<?php
    require "pokemons.php";
    require "ally_pokemon.php";
    require "enemy_pokemon.php";
    $pikachu = new AllyPokemon('Pikachu', 'img/pikachu.png', 'Pika','Lightning', '60', 'Fire', 'Fighting' ,['Electric Ring', 'Pika Punch']);
    $charmeleon = new EnemyPokemon('Charmeleon', 'img/charmeleon.webp','NotPikachu', 'Fire','60', 'Water', 'Lightning', ['Head Butt', 'Flare']);
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
        <div id="pokemon_ally_pic" class="pic" style="background-image: url('<?= $pikachu->makeImg() ?>'); background-size: cover;">
           
        </div>
        <div id="pokemon_ally_stats" class="stats">
            <h3><? print_r($pikachu->showName())?></h3>
            <h3>HP: <? print_r($pikachu->showHp())?></h3>
        </div>
        <div id="pokemon_enemy_pic" class="pic" style="background-image: url('<?= $charmeleon->makeImg() ?>'); background-size: cover;"></div>
        <div id="pokemon_enemy_stats" class="stats">
            <h3><? print_r($charmeleon->showName())?></h3>
            <h3>HP: <? print_r($charmeleon->showHp())?></h3>
        </div>
        <div id="text_area">
            <div id="text_state" class="state">
                <p>A wild <?= $charmeleon->showName() ?> has appeard</p>
                <button id="text_state_btn" onclick="text_state_btn()">Next</button>
            </div>
            <div id="battle_state"  class="state">
                <div id="battle_text">
                    
                </div>
                <div id="battle_options_div">
                    <? $pikachu->showAttack(); ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js.js"></script>
</body>
</html>