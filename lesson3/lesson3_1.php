<!-- 1.Function -->
<?php
function flowerName($name, $color)
{
    echo "flower name is $name and color is $color\n" . "<br>";
}

flowerName("Rose", "Red");

function setHeight($maxHeight = 100)
{
    echo "max height is $maxHeight\n" . "<br>";
}
setHeight(1000);
setHeight();

function multiply($x, $y)
{
    $z = $x * $y;
    return $z;
}
echo "10 x 20 = " . multiply(10, 20) . "<br>";
?>