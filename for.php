<?php

if ($argc < 2) {
	$numbers = $argv[0];
	echo "Usage: Please pick a starting number and ending number\n";
	exit(1);
}

$choice1 = $argv[1];
$choice2 = $argv[2];


echo $choice1;

for ($choice1 = $choice1++){
	echo "{$choice1}\n";


}