<?php
class Person
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello()
    {
        return "Hello world!";
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}
$person1 = new Person("Thang", 22);
echo $person1->getName() . " is " . $person1->getAge() . " years old.<br>";

class Tree
{
    protected $name;
    protected $species;

    public function __construct($name, $species)
    {
        $this->name = $name;
        $this->species = $species;
    }

    public function photosynthesis()
    {
        echo $this->name . " đang quang hợp <br>";
    }
}

class redRose extends Tree
{
    private $color;

    public function __construct($name, $species, $color)
    {
        parent::__construct($name, $species);
        $this->color = $color;
    }

    public function bloom()
    {
        echo $this->name . " thuộc " . $this->species . " có màu " . $this->color . " đang nở!<br>";
    }
}


$redRose1 = new redRose("Hoa hồng đỏ", "loài hoa hồng", "đỏ");
$redRose1->photosynthesis();
$redRose1->bloom();