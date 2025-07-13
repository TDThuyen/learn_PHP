<?php
// Definition of basic traits
trait CanFly
{
    public function fly()
    {
        echo "đang bay <br>";
    }
}

// Precedence 
class Animals
{
    public function eat()
    {
        echo "Động vật đang ăn <br>";
    }
}
trait EatingBird
{
    public function eat()
    {
        echo "Chim ăn bằng mỏ <br>";
    }
}

class Bird extends Animals
{
    use EatingBird;
    public function eat()
    {
        echo "Chim sơn ca đang ăn <br>";
    }
}

$sonca = new Bird();
$sonca->eat();
// Multiple Traits
trait Hello
{
    public function sayHello()
    {
        echo 'Hello, ';
    }
}

trait World
{
    public function sayHi()
    {
        echo 'Hi';
    }
}

class MyHelloWorld
{
    use Hello, World;
    public function sayHelloHi()
    {
        echo "! <br>";
    }
}

$x = new MyHelloWorld();
$x->sayHello();
$x->sayHi();
$x->sayHelloHi();

// Conflict Resolution
trait Homework
{
    public function check()
    {
        echo "kiểm tra bài tập về nhà <br>";
    }
}

trait SchoolHomework
{
    public function check()
    {
        echo "kiểm tra bài tập ở trường <br>";
    }
}

class Teacher
{
    use Homework, SchoolHomework {
        Homework::check insteadof SchoolHomework;
        SchoolHomework::check as checkSchool;
    }
}

$teacher = new Teacher();
$teacher->check();
$teacher->checkSchool();

// Traits Composed from Traits
trait FlyingVehicle
{
    use CanFly;
}

class Helicopter
{
    use FlyingVehicle;
    public function flying()
    {
        echo "Trực thăng ";
        $this->fly();
    }
}

$helicopter = new Helicopter();
$helicopter->flying();

// Abstract Trait Members
trait Engine
{
    public function start()
    {
        echo "Đang khởi động động cơ loại: " . $this->getEngineType() . "<br>";
    }
    abstract public function getEngineType();
}

class XeHoi
{
    use Engine;
    public function getEngineType()
    {
        return "Diesel";
    }
}

$xeHoi = new XeHoi();
$xeHoi->start();
