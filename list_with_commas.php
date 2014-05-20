<?php

// Converts array into list n1, n2, ..., and n3
function humanized_list($string, $do_sort = FALSE) {
  // Your solution goes here!
	$array = explode(', ', $string);
	// sorts the array
	if ($do_sort === TRUE){
		sort($array);
	}
		
	// save and take the last item
	$last_item = array_pop($array);
	
	// will add the word AND to the end of the array
	array_push($array, "and ");

	// implode array back to string, then concats $last item back on array 
	$string = implode(', ', $array) . $last_item;

	return $string;
}

 
// list of famous peeps
$physicists_string = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';
// Humanize that list
$famous_fake_physicists = humanized_list($physicists_string, TRUE);
// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famous_fake_physicists}.". PHP_EOL;






