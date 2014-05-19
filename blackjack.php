<?php

$hand = array('A-H', '5-D', 'K-C', 'A-S', '4-H');

function getTotal($hand)
{
    $total = 0;

    // loop through hand and calculate total value
    // use "explode" function to separate card suit and value
    // aces count as 11 unless you are over 21 and then they count as 1
    // K, Q, and J count as 10
    // numeric cards count as their value

    foreach ($hand as $card)
    {
        $value = explode('-', $card);
        // $value1 = $value[0];

        if($value[0] == "A" || $value[0] == "J" || $value[0] == "K"){
            $value = intval($value) += 10;
        }
        elseif ($value[0] < 12 && $value[0] == "A") {
            $value[0] = intval($value[0]) += 11;  
        }
        else {
        $value[0] = intval($value[0]) += intval($value[0]);
        }
    }

    return $total;
}

echo getTotal($hand) . PHP_EOL;



