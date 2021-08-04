<?php

class Drink
{
    public string $color;
    public float $price;
    public string $temperature;

    public function __construct (string $color, float $price, string $temperature)
    {
        $this -> color = $color;
        $this -> price = $price;
        $this -> temperature = 'cold';
    }

    public function getInfo ()
    {
        echo 'This beverage is {$this->temperature} and {$this->color} <br>.';
    }
}


