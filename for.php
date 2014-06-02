<?php
// reviewing code from codeup exercises, code from class was 
// written on (line 30) all code above is from my refresher


// ask the user for a starting number 
fwrite(STDOUT, "Hello....Please pick a low number.\n");
// get the first number from the user
$first_number = trim(fgets(STDIN));
//ask user to pick a second number 
fwrite(STDOUT, "Please pick high number.\n");
// get the second number from the user
$second_number = trim(fgets(STDIN));
// ask user how they would like to number to increment
fwrite(STDOUT, "How would you like the number to increment?\n");
// get the incrementor from user
$i = fgets(STDIN);
// loop through w/ a FOR loop to count from low to high
for ($first_number = $first_number; $first_number <= $second_number; $first_number = $first_number + $i) { 
		echo "$first_number\n";
}














//Below is code that was done during codeup class
// I have reviewed the exercises and will push to git hub again

// greet the user  
// echo "Hello.........\n";

// 	// ask user to input number, if not a number close program 
// 	fwrite (STDOUT, 'please pick a number ');

// 	// Get the input from user
// 	$number1 = trim(fgets(STDIN));
// 	if (!is_numeric($number1)){
// 	echo "Must be a number!!\n";
// 	exit;
// 	}

// 	// ask user to input second number, if not a number close program
// 	fwrite(STDOUT, 'please pick another number ');

// 	// Get the input from user
// 	$number2 = fgets(STDIN);
// 	if (!is_numeric($number2)){
// 	echo "Must be a number!!\n";
// 	exit;
// 	}
	
// 	// ask how the user wants the numbers to increment 
// 	fwrite(STDOUT, 'what would you like your number to increment by ? ');
// 	$i = fgets(STDIN);

// 		// take the numbers given and add by increment until $number 2 hit
// 		for ($number1 = $number1; $number1 <= $number2; $number1 = $number1 + $i){
//     	echo "{$number1}\n";
// }





	