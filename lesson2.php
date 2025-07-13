<?php
# Declare variable
$txt = "Hello world";
$x = 15;
$y = 10.5;
?>

<?php
# Data types
$s = "Hello world";
$i = 1000;
$f = 10.5;
$b = true;
$car = ["Honda", "BMW", "Vinfast"];
class Car {};
$herbie = new Car();
$n = null;
?>

<?php
# Operators
# Arithmetic operator
echo ($x + 10) . "<br>";

# Assignment operator
$x = $x + $y;
echo $x . "<br>";

# Comparison operator
echo ($x === $y);

# Increasement, decreasement operator
$x++;
echo $x . "<br>";

# Logical operator
echo ($x and $y) . "<br>";

# String operator
$txt1 = "Hello ";
$txt2 = "world!";
echo $txt1 . $txt2 . "<br>";

# Array operator
$a = ['name' => 'An', 'age' => 20];
$b = ['age' => 30, 'city' => 'Hanoi'];
$union = $a + $b;
print_r($union);
?>

<?php
# Condition statement
# if 
if (date("H") < 20) {
    echo "Good";
}

#if else
if (date("H") < 20) {
    echo "Good day";
} else {
    echo "Good night";
}

# if elseif else 
if (date("H") < 10) {
    echo "Good morning";
} elseif (date("H") < 20) {
    echo "Good day";
} else {
    echo "Good night";
}

# Switch statement
$t = date("H");
switch ($t) {
    case "7":
        echo "Morning";
        break;
    case "20":
        echo "Night";
        break;
    default:
        echo "No time";
}
?>

<?php
# Loop
# While
$x = 1;
while ($x < 11) {
    $x++;
    echo $x . "\n";
}

# do_while
$x = 1;
do {
    echo $x . "\n";
    $x++;
} while ($x < 11);

# for loop
for ($i = 1; $i < 11; $i++) {
    echo $i . "\n";
}

# foreach loop
$colors = ["red", "green", "blue"];
foreach ($colors as $name) {
    echo $name . "\n";
}
?>

<?php
# Array
# indexed Array
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";

# Associative Array
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");
echo "Peter is " . $age['Peter'] . " years old." . "<br>";

# Multidimension array
$matrix = [[1, 2, 3], [4, 5, 6]];
foreach ($matrix as $i) {
    foreach ($i as $j) {
        echo $j . " ";
    }
    echo "<br>";
}
?>