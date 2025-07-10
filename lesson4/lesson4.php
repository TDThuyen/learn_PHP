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
        return "Hellooooo";
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
$people1 = new Person("Alice", 30);
$people2 = new Person("Bob", 25);

echo $people1->getName() . " is " . $people1->getAge() . " years old.<br>";
echo $people2->getName() . " is " . $people2->getAge() . " years old.<br>";
echo $people1->getName() . " say " . $people1->sayHello() . "<br>";