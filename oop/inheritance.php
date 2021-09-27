<?php

//inheritance

//abtraction

//interface

//base class parent classes

//derived classes

class Car
{
    public $color;
    public $price;
}

class Ford extends Car
{
    function __construct($color, $price)
    {
        $this->color = $color;
        $this->price = $price;
    }
    function print()
    {
        echo $this->color;
        echo $this->price;
    }
}

$fordcar = new Ford("blue", 25000);

$fordcar->print();
