<?php
echo "<h1>CLASSES</h1>";
class Car
{
	private $name;
	private $breed;

	public function __construct($name, $breed)
	{
		$this->name = $name;
		$this->breed = $breed;
	}
	function greet()
	{
		echo "pssspspspspspsps, $this->name. My $this->breed babyyy!!";
	}
};

$socks = new Car("Mr. socks", "Puspin");
$socks->greet();

print_r($socks);
