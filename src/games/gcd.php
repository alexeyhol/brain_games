<?php

namespace brain\games\gcd;

use function brainGames\gameEngine\engine;

function gcd_action($num1, $num2)
{
    global $gcd;
    
    if ($num2 === 0) {
        return $gcd = $num1;
    } else {
        return $gcd = gcd_action($num2, $num1 % $num2);
    }
}

function gcd()
{
    global $gcd;
    
    $gameConditions = 'Find the greatest common divisor of given numbers.';

    $questionAnswer = [];

    $counter = 0;
    while ($counter < 3) {
        $num1 = mt_rand(0, 100);
        $num2 = mt_rand(0, 100);

        gcd_action($num1, $num2);

        $questionAnswer[$num1 . ' ' . $num2] = $gcd;

        $counter += 1;
    }

    engine($gameConditions, $questionAnswer);
}
