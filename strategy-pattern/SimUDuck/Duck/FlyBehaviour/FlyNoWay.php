<?php

include_once 'FlyBehaviour.php';

class FlyNoWay implements FlyBehaviour
{
    public function fly()
    {
        return "I can't fly";
    }
}