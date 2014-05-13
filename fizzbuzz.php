<?php

$a = 1;

// getting the numbers to count from 1-100
for ($a = 0; $a <=100; $a += 1){
	echo "$a\n";

// adding bizz statement 
	if($a % 3 == 0)  {
		echo "Bizz\n";
	}
// adding buzz statement
	elseif ($a % 5 == 0) {
	 	echo "Buzz\n";
	}
}

