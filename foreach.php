<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {
   	echo "this is {$thing}\n";

	if (is_int($thing)) {
		echo "This is a Integer";
	} elseif (is_float($thing)) {
		echo "This is a Float";
	} elseif (is_bool($thing)) {
		echo "This is a Boolean";
	} elseif (is_array($thing)) {
		echo "This is a Array";
	} elseif (is_null($thing)) {
		echo "This is NULL";
	} elseif (is_string($thing)) {
			 "This is a String";
	}

}


