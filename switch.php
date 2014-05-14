<?php

//exercise 

// Set the default timezone
date_default_timezone_set('America/Chicago');

// Get Day of Week as number
// 1 (for Monday) through 7 (for Sunday)

// switch statement which outputs the day of the week when called upon.  This exercise 
// has been commited out so I can compair the two statements.


// 2nd part of exercise

// $day_of_week = date('N');
// $day_of_week = 7;

//      if ($day_of_week == 1){
//  	    	echo "Monday\n";
// 	} elseif ($day_of_week == 2) {   	
//  	    	echo "Tuesday\n";
//  	}elseif ($day_of_week == 3)	{	
//  			echo "Wednesday\n";
//  	}elseif ($day_of_week == 4)	{	
//  			echo "Thursday\n";
//  	}elseif ($day_of_week == 5) {			
//  			echo "Friday\n";
//  	}elseif ($day_of_week == 6)	{		
//  			echo "Saturday\n";
//  	}elseif ($day_of_week == 7)	{		
//  			echo "Sunday\n";
//  	}



// 1st part of exercise
$day_of_week = date('N');
$day_of_week = 4;

 switch($day_of_week) {
	    case 1:
	    	echo "Monday\n";
	    	break;   	
	    case 2:
	    	echo "Tuesday\n";
			break;
		case 3:
			echo "Wednesday\n";
			break;	
		case 4:
			echo "Thursday\n";
			break;		
		case 5:
			echo "Friday\n";
			break;		
		case 6:
			echo "Saturday\n";
			break;		
		case 7:
			echo "Sunday\n";
			break;						
	}	






