<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($string) {
  // Your solution goes here!
	$array = explode(', ', $string);
	asort($array);

	// save and take the last item
	$last_item = array_pop($array);
	array_push($array, "and ");

	// implode array
	$string = implode(', ', $array) . $last_item . PHP_EOL;
	// concant last item back to string

	return $string;
}

 
// list of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string);
// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.";






