<?php
/**
 * Created by PhpStorm.
 * User: nkl
 * Date: 02.10.17
 * Time: 21:11
 */

namespace App\Classes;


class RedheadDuck extends Duck
{
    public function display()
    {
        echo "\nThis is\n";
        echo "\nRedhead duck\n";
        echo "\n" . __METHOD__ . "\n";
    }
}