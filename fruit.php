<?php
// for loop

// $fruits = array('apple', 'orange', 'grape', 'lime', 'lemon');
// 	for ($i = 0; $i < count($fruits); $i++){
// 		echo $fruits{$i} . PHP_EOL;
// }

// foreach loop

// $fruits = array('apple', 'orange', 'grape', 'lime', 'lemon');
// 	foreach ($fruits as $fruit)
// 	{
// 		echo "$name\n";	
// 	}

// KEY = fruit type, VALUE = color 
$fruits = array(
    		array('name' => 'apple',  'color' => 'red'),
    		array('name' => 'orange', 'color' => 'organge'),
    		array('name' => 'grape',  'color' => 'purple'),
    		array('name' => 'lime',   'color' => 'green'),
    		array('name' => 'lemon',  'color' => 'yellow')
    	);
	foreach ($fruits as $fruit) {
		echo $fruit['name'] . " is "  . $fruit['color'] . PHP_EOL;
	}