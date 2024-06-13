<?php
echo "<h1>Arrays</h1>";
/*indexed arrays*/
$arr1 = array("emman", "is", "a", "person");
print_r($arr1);
/*associative arrays*/
echo "<br>";
$arr2 = array("one" => "some value", "two" => "other value", "three" => "another value");
print_r($arr2);
/*shorthand*/
$anotherArr = [1, 2, 3, 4, 5, 6];
echo "<br>";
print_r($anotherArr);

$anotherArr2 = [
	"one" => "emman",
	"two" => "is",
	"three" => "a",
	"four" => "person with no external goal"
];
echo "<br>";
print_r($anotherArr2);
