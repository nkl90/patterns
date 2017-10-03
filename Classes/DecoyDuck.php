<?php
/*
 * Эта утка может летать!!!
 */
namespace App\Classes;
use App\Interfaces\FlyBehavior;
use App\Traits\FlyMixin;

/*
 * Итак! Мы реализовали интерфейс с помощью трейта!
 * Незнаю, множественное ли это наследование и зачем тогда вообще
 * интерфейс... Но это круто и я понял как это делается на php...
 */
class DecoyDuck extends Duck implements FlyBehavior
{
    public function display()
    {
        echo "\n" . __CLASS__ . "\n";
    }

    public function fly()
    {
        echo "\n" . 'Это собственная реализация метода fly для класса уток DecoyDuck' . "\n";
    }

}