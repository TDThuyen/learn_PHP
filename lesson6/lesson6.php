<?php
interface basicActions
{
    public function move();
    public function eat();
}

abstract class Animal implements basicActions
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function makeSound();
    public function infomation()
    {
        echo "tôi là " . $this->name . "<br>";
    }
}

class Dog extends Animal
{
    public function makeSound()
    {
        echo $this->name . " kêu gâu gâu!<br>";
    }

    public function move()
    {
        echo $this->name . " chạy bằng 4 chân!<br>";
    }

    public function eat()
    {
        echo $this->name . " đang gặm xương!<br>";
    }
}


class Chicken extends Animal
{
    public function makeSound()
    {
        echo $this->name . " kêu cục tác!<br>";
    }

    public function move()
    {
        echo $this->name . " chạy bằng 2 chân!<br>";
    }

    public function eat()
    {
        echo $this->name . " đang mổ thóc!<br>";
    }
}

$dog1 = new Dog("Chó cỏ");
$chicken1 = new Chicken("Gà tre");

$dog1->makeSound();
$chicken1->makeSound();
$dog1->move();
$chicken1->move();
$dog1->eat();
$chicken1->eat();
$dog1->infomation();
$chicken1->infomation();
