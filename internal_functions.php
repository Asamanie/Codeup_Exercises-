<?php

$nothing = 2;
$something = '';
$array = array(1,2,3);

function printThing($a){
		if (isset($a)) {
			return "is SET\n";
		}
		elseif (empty($a)) {
			return "is NOT SET\n";
		}
}
echo "$nothing" . PHP_EOL;
echo "$something" . PHP_EOL;
echo "$array" . PHP_EOL;