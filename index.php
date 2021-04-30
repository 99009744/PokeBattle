<?php
    declare(strict_types=1);
    include_once "Pokemon.php";
    include_once "Pikachu.php";
    include_once "Charmeleon.php";
    
    $pikachu = new Pikachu();
    $charmeleon = new Charmeleon();
    
    
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
    <?
        print_r($pikachu->getName() . ' has ' . $pikachu->getCurrentHitpoints() . '/' . $pikachu->getTotalHitpoints() . ' Hitpoints<br>');
        print_r($charmeleon->getName() . ' has ' . $charmeleon->getCurrentHitpoints() . '/' . $charmeleon->getTotalHitpoints() . ' Hitpoints<br>');
        print_r($pikachu->getName() . ' attacks ' . $charmeleon->getName() . ' with ' . $pikachu->getMoves()[0][0] . '<br>');
        print_r($pikachu->getName() . ' deals ' . $charmeleon->calculateDamage($pikachu->getType(),$pikachu->getMoves()[0][1]) . ' damage to ' . $charmeleon->getName() . '<br>');
        print_r($charmeleon->getName() .  ' now has ' .$charmeleon->dealsDamage( $charmeleon->calculateDamage($pikachu->getType(),$pikachu->getMoves()[0][1])) . ' hitpoints<br>');
        print_r($charmeleon->getName() . ' attacks ' . $pikachu->getName() . ' with ' . $charmeleon->getMoves()[1][0] . '<br>');
        print_r($charmeleon->getName() . ' deals ' . $pikachu->calculateDamage($charmeleon->getType(),$charmeleon->getMoves()[1][1]) . ' damage to ' . $pikachu->getName() . '<br>');
        print_r($pikachu->getName() .  ' now has ' . $pikachu->dealsDamage( $pikachu->calculateDamage($charmeleon->getType(),$charmeleon->getMoves()[1][1])) . ' hitpoints<br>');
        print_r(Pokemon::$population);
    ?>
</body>
</html>