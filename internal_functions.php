<?php

$nothing = NULL;
$something = '';
$array = array(1,2,3);

function printThing($a){
		if (isset($a)) {
			return "is SET\n";
		}
		else {empty($a){
			return "is NOT SET\n";
		}
}
