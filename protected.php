<?php

declare(strict_types=1);

/* EXERCISE 4
Copy the code of exercise 2 to here and delete everything related to cola.
Make all properties protected.
Make all the other prints work without error without changing the beverage class.
USE TYPEHINTING EVERYWHERE!
*/

class Drink
{
    protected string $color;
    protected float $price;
    protected string $temperature;

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


class Beer extends Drink
{
    protected string $name;
    protected float $alcoholPercentage;

    public function __construct(string $color, float $price, string $temperature, string $name, float $alcoholPercentage)
    {
        parent::__construct($color, $price, $temperature = 'cold');
        $this -> name = $name;
        $this -> alcoholPercentage = $alcoholPercentage;

    }
    public function declareAlcoholPercentage()
    {
        echo $this->alcoholPercentage;
        echo "<br>";
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAlcoholPercentage(): float
    {
        return $this->alcoholPercentage;
    }

    public function getColorAccessible(): string
    {
        return $this->color;
    }

    function setColor($color)
    {
        $this->color = $color;
        echo $color;
    }

    private function beerInfo()
    {
        echo '<br>' ."Hi i'm $this->name and have an alcohol percentage of $this->alcoholPercentage and I have a $this->color color.";
    }
    public function getBeerInfo(){
        echo $this -> beerInfo();
    }
};
