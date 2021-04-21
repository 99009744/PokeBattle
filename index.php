<?php
    declare(strict_types=1);
    include_once "Move.php";
    include_once "Type.php";
    include_once "PokemonCollection.php";
    include_once "MoveCollection.php";
    include_once "Pokemon.php";
    
    /*
        * Moves
        * ( Name, Damage )
    */

    $electric_ring = new Move ('Electric Ring',50);
    $pikaPunch = new Move ('Pika Punch',20);
    $headButt = new Move ('Head Butt',10);
    $flare = new Move ('Flare',30);

    /*
        * Collection Moves
    */

    $pikachuMoveCollection = new MoveCollection([$electric_ring, $pikaPunch]);
    $charmeleonMoveCollection = new MoveCollection([$headButt, $flare]);

    /*
        * Types
        * ( Type, Weakness, Resistances )
    */

    $lightning = new Type ('Lightning',['Water'],['Rock']);
    $fire = new Type ('Fire',['Water'],['Lightning']);

    /*
        * Pokemons
        * ( Name, Allied, Image, Nickname, Type, Hitpoints, Moves )
    */

    $pikachu = new Pokemon('Pikachu', true ,'img/pikachu.png', 'Pika',[$lightning], 60, $pikachuMoveCollection);
    $charmeleon = new Pokemon('Charmeleon', false ,'img/charmeleon.webp','NotPikachu', [$fire], 60, [$charmeleonMoveCollection]);
    
    /*
        * Collection Pokemons
    */

    $collection = new PokemonCollection ([$pikachu, $charmeleon]);
    
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
        <div id="pokemon_ally_pic" class="pic" style="background-image: url('<?= $pikachu->getImage() ?>'); background-size: cover;">
           
        </div>
        <div id="pokemon_ally_stats" class="stats">
            <h3><?= $pikachu->getName()?></h3>
            <h3>HP: <?= $pikachu->getHitpoints()?></h3>
        </div>
        <div id="pokemon_enemy_pic" class="pic" style="background-image: url('<?= $charmeleon->getImage() ?>'); background-size: cover;"></div>
        <div id="pokemon_enemy_stats" class="stats">
            <h3><?= $charmeleon->getNickname() ?></h3>
            <h3>HP: <?= $charmeleon->getHitpoints() ?></h3>
        </div>
        <div id="text_area">
            <div id="text_state" class="state">
                <p>A wild <?= $charmeleon->getNickname() ?> has appeard</p>
                <button id="text_state_btn" onclick="text_state_btn()">Next</button>
            </div>
            <div id="battle_state"  class="state">
                <div id="battle_text">
                    
                </div>
                <div id="battle_options_div">
                    <? 
                    foreach($pikachu->getMoves() as $move)
                    {
                    ?>
                        <button onclick="start($move)" class="battle_options" value="<?= $move->getDamage() ?>"><?= $move->getName() ?></button>
                    <? 
                    } 
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="js.js"></script>
</body>
</html>