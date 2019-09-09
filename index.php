<?php
include ('Circle.php');
include ('cylinder.php');

$circle = new Circle();
$circle->setRadius(15);
echo "radius la: " . $circle->getRadius() . "<br>";
$circle->setColor('yellow');
echo "color: " . $circle->getColor(). "<br>";
echo "dien tich la: " . $circle->area(). "<br>";

$cylinder = new cylinder();
$cylinder->setRadius(20);
echo "radius cua hinh tru: ".$cylinder->getRadius(). "<br>";

$cylinder->setHeight(20);
echo "chieu cao:" .$cylinder->getHeight(). "<br>";
echo "dien tich xung quanh hinh tru: " . $cylinder->area_around_the_cylinder(). "<br>";
echo "dien tich toan phan hinh tru: " . $cylinder->total_cylindrical_area(). "<br>";
