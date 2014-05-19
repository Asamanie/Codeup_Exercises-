<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];


function array_has_value($needle, $haystack)
{
	if (array_search($needle, $haystack) === false)
	{
		return false;
	}
	else
	{
		return true;
	}
}


var_dump(array_has_value('Bob', $names));

function array_common_name($array1, $array2)
{
	$count = 0;
		foreach ($array1 as $value)
		{
			if (array_has_value($value,$array2))
				$count = $count + 1;
		}
	}	
			
	return $count;
}
echo $count;

var_dump(array_common_name)($names, $compare));

