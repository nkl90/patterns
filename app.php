<?php
namespace App;

function stringUnderline($inputString, $simbol = '='){
    $outString = $simbol;
    for($i = 1; $i < mb_strlen($inputString); $i++){
        $outString = $outString . $simbol;
    }
    printf("%s\n", $outString);
}
$welcomeText = 'Welcome to SimUDuck training up!';

printf("%s\n", $welcomeText);
stringUnderline($welcomeText);

require_once 'Traits/FlyMixin.php';
require_once 'Interfaces/FlyBehavior.php';
require_once 'Classes/Duck.php';
require_once 'Classes/MallardDuck.php';
require_once 'Classes/RedheadDuck.php';
require_once 'Classes/DecoyDuck.php';


$duck1 = new Classes\MallardDuck();
$duck2 = new Classes\RedheadDuck();
$duck3 = new Classes\DecoyDuck();

$duck1->display();
$duck2->display();
$duck3->fly();
$duck1->fly();

//Еееее!!!! Я наконец понял в чем разница между интерфейсом и абстрактным классом!!!

