<?php
/*
 * Эта утка может летать!!!
 */
namespace App\Classes;

use App\Interfaces\Flyable;

class DecoyDuck extends Duck implements Flyable
{
    public function display()
    {
        echo "\n" . __CLASS__ . "\n";
    }

    public function fly()
    {
        echo "\n" . 'Этот метод обязан быть реализован!!' . "\n";
    }
}