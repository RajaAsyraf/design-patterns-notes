<?php

include_once 'QuackBehaviour.php';

class NormalQuack implements QuackBehaviour
{
    public function quack()
    {
        return "Quack";
    }
}