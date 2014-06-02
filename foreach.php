<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

//loop through array called $things and echo's back the result. 
foreach ($things as $thing) {
	echo "{$thing}\n";
}	

