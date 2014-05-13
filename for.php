<?php

// greet the user  
echo "Hello!\n";

	// ask user to input number 
	fwrite (STDOUT, 'please pick a number ');

	// Get the input from user
	$number1 = trim(fgets(STDIN));
	if (!is_numeric($number1)){
	echo "Must be a number!!\n";
	exit;
	}

	// ask user to input second number 
	fwrite(STDOUT, 'please pick another number ');

	// Get the input from user
	$number2 = fgets(STDIN);
	if (!is_numeric($number2)){
	echo "Must be a number!!\n";
	exit;
	}
	
	// ask how the user wants the numbers to increment 
	fwrite(STDOUT, 'what would you like your number to increment by ? ');
	$i = fgets(STDIN);

		// take the numbers given and add by increment until $number 2 hit
		for ($number1 = $number1; $number1 <= $number2; $number1 = $number1 + $i){
    	echo "{$number1}\n";
}





	