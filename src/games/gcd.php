<?php

namespace brain\games\gcd;

use function brainGames\gameEngine\numberOfRounds;
use function brainGames\gameEngine\engine;

function calc_gcd($num1, $num2)
{
    while ($num1 !== $num2) {
        if ($num1 > $num2) {
            $num1 -= $num2;
        } else {
            $num2 -= $num1;
        }
    }
    return $num1;
}

function gcd()
{
    $gameConditions = 'Find the greatest common divisor of given numbers.';

    $questionAnswer = [];

    $rounds = numberOfRounds();

    for ($i = 0; $i < $rounds; $i++) {
        $num1 = mt_rand(0, 100);
        $num2 = mt_rand(0, 100);
        $questionAnswer[$num1 . ' ' . $num2] = calc_gcd($num1, $num2);
    }


    engine($gameConditions, $questionAnswer);
}
