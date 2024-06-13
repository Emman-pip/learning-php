<?php
echo "<h1>STRINGS</h1>";
// concatenation
$str1 = "emman";
$str2 = "someone";
$str3 = $str1 . $str2;
echo "$str3";

// adding string
echo "<br>";
$str3 .= $str1;
echo "$str3";

// getting length
echo "<br>";
echo "len of str3: " . strlen($str3);

// looping through
for ($i = 0; $i  < strlen($str3); $i++) {
	echo "<br>" . $str3[$i];
}
