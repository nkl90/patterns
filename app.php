<?php
spl_autoload_register(function ($class) {
    include 'Classes/' . $class . '.php';
});

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

$duck1 = new MallardDuck();

$duck1->quack();


