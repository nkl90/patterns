<?php
namespace App\Traits;

trait FlyMixin
{
    public function fly()
    {
        echo "\n" . __METHOD__ . "\n";
    }
}