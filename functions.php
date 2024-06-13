<?php

echo "<h1>Functions</h1>";

// creating a function
function helloWorld()
{
	echo "Hello world";
}

// function parameters
function fullname($first, $last)
{
	echo "$first $last";
}

// default value
function printYear($year = 2024)
{
	echo $year;
}

// returning
function add($num1, $num2)
{
	return $num1 + $num2;
}

// passing by reference
function by5(&$num)
{
	$num += 5;
}

// n number of arguments
function schoolStudent($school, ...$students)
{
	for ($i = 0; $i < count($students); $i++) {
		echo "$school: $students[$i]<br>";
	}
};

// invoking a function
helloWorld();
echo "<br>";
fullname("Mr.", "Meesix");
echo "<br>";
printYear();
echo "<br>";
printYear(2023);
echo "<br>";
echo add(10, 17);
echo "<br>";
$i = 100;
by5($i);
echo $i;
echo "<br>";
schoolStudent("BSU", "Emmanuel", "Dugdug", "Someperson", "a classmate");
