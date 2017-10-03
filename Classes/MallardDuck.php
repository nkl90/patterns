<?php
namespace App\Classes;
use App\Traits\FlyMixin;

class MallardDuck extends Duck
{
    use FlyMixin;

    public function display()
    {
        printf("\nЭто MallardDuck!\n");
    }
}