<?php

namespace App\Classes;
/**
 * Created by PhpStorm.
 * User: nkl
 * Date: 02.10.17
 * Time: 10:51
 */

class Duck
{
    abstract protected function display();

    protected function quack()
    {
        printf('%s\nКря!');
    }

    protected function swim()
    {
        printf('%s\nПлыву...');
    }
}