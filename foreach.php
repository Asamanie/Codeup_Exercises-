<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

foreach ($things as $thing) {

	if (is_int($thing)) 
	{
		echo "{$thing} is a Integer\n";
	} 
	elseif (is_float($thing)) 
	{
		echo "{$thing} is a Float\n";
	} 
	elseif (is_bool($thing))
	{
		echo "{$thing} is a Boolean\n";
	} 
	elseif (is_array($thing))
	{
		echo "{$thing} is a Array\n";
	}
	elseif (is_null($thing)) 
	{
		echo "{$thing} is NULL\n";
	} 
	elseif (is_string($thing))
	{
		echo "{$thing} is a String\n";
	}

}


