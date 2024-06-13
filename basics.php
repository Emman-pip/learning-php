	<?php
	// SIMPLE PRINTING
	echo "<h1>Hello, php</h1>";
	if (1 > 0) {
		echo "<h3>I am an echo under a control statement.</h3>";
	}
	// STRING CONCATENATION
	$str1 = "I am,";
	$str2 = " Groot";
	// clean
	echo "<p>$str1 $str2</p>";
	//  not clean
	echo "<p>" . $str1 . $str2 . "</p>";
	// same output 
	//

	// working with numbers (printing)
	$num1 = 1;
	$num2 = 1;
	echo "<p>";
	echo $num1 +  $num2;
	$num1 = 10;
	echo "<br>";
	echo $num1 +  $num2;
	echo "</p>";

	// checking the type of data
	var_dump($num1);
	echo "<br>";
	var_dump($str1);

	// functions
	function someFunc($str)
	{
		echo "<p>I am a cool function</p>";
		echo "<i>I was told to print \"$str\"</i>";
	}

	// invoking a function
	someFunc("uhmmm");

	function withStatic()
	{ //  a static variable inside a local scope will retain it's value in all instances
		static $i = 0;
		$i++;
		echo "<p>incremented by one (current value: $i)</p>";
	}

	for ($i = 0; $i < 10; $i++) {
		withStatic();
	}

	// PHP array
	$arr = array("Monchito", "Pungkol", "Bats", "Hobbs");
	echo "<p>this is from an array: $arr[1]</p>";

	// PHP classes
	class Cat
	{
		private $name;
		private $breed;
		public function __construct($name, $breed)
		{
			$this->name = $name;
			$this->breed = $breed;
		}
		public function callCat()
		{
			echo "<p>pspspspspspspsps, $this->name. My pookie wookie $this->breed cat. PSspspSSpspspssPSS...</p>";
		}
	}

	$monghi = new $Cat("Monchito", "Pusakal geng geng");
