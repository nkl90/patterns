<?php

class A
{
    function foo()
    {
        if(isset($this)){
            printf("\n%s%s%s\n", '$this определена (', get_class($this), ')' );
        }else{
            printf("\n%s\n", '$this не определена.' );
        }
    }
}

class B
{
    function bar()
    {
        A::foo();
    }
}

$a = new A();
$b = new B();

$a->foo();
A::foo();
$b->bar();
B::bar();
$className = 'A';
$instance = new $className();
$instance->foo();

//В php объекты передаются по ссылке! Запомни!

$b = $a;
printf("\n%s%s\n",'В $b теперь хранится объект $a get_class($b) = ', get_class($b));


