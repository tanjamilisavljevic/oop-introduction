<?php

//Classes start in capital letters
class Drink
{
    public string $color;
    public float $price;
    public string $temperature;

//  Use typehinting to specify data types
//  Set default values when creating a constructor
    public function __construct (string $color, float $price, string $temperature= "cold")
    {
        $this -> color = $color;
        $this -> price = $price;
        $this -> temperature = $temperature;
    }

    public function getInfo ()
    {
        echo "This beverage is {$this->temperature} and {$this->color}. <br>";
    }
}



