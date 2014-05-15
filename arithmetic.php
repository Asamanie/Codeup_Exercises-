<?php

function add($a, $b) {

    if (is_numeric($a) && is_numeric($b)) {
   		return $a + $b; 
   	} else {
   	   	return "ERROR: \$a or \$b must be a number\n";	
    }
 }

$sum = add(2, 3);
echo $sum . PHP_EOL;



// function error (){
// 	echo "<<< ERROR >>>"
// }
// // addition 

// function add($a, $b) {

//     if (is_numeric($a) && is_numeric($b)){
//    		echo $a + $b; 
//    	} else {
//    	   	echo 'ERROR: $a or $b must be a number';	
//      }
//      echo PHP_EOL;
// }

// add(3,4);

// subtract 

// function subtract($a, $b) {
//     if (is_numeric($a) && is_numeric($b)){
//    		echo $a - $b; 
//    	} else {
//    	   	echo 'ERROR: $a or $b must be a number';	
//      }
//      echo PHP_EOL;
// }

// subtract(a,4);


// multiply

// function multiply($a, $b) {
//     if (is_numeric($a) && is_numeric($b)){
//     echo $a * $b;
// 		} else }
// 		 echo 'ERROR: $a or $b must be a number';
// 		}
// 		echo PHP_EOL; 
// }
// multiply(a,4);

// divide

// function divide($a, $b) {
//     if (is_numeric($a) && is_numeric($b)){
//     echo $a / $b
// 	} else }
// 	  echo 'ERROR: $a or $b must be a number';
// 	}
// 	echo PHP_EOL; 
// }
// divide(20,2);


// function modulus($a, $b) {
//     if (is_numeric($a) && is_numeric($b)){
//     echo $a % $b
// 	} else }
// 	  echo 'ERROR: $a or $b must be a number';
// 	}
// 	echo PHP_EOL; 
// }
// modulus(20,2);







