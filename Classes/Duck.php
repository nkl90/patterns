<?php
namespace App\Classes;

abstract class Duck
{
    abstract protected function display();

    public function quack()
    {
        printf("\nКря!\n");
    }

    public function swim()
    {
        printf('\nПлыву...');
    }
}