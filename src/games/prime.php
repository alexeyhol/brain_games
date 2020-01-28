<?php

namespace brain\games\prime;

use function brainGames\gameEngine\numberOfRounds;
use function brainGames\gameEngine\engine;

function isPrime($num)
{
    $check = 0;
    for ($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $check += 1;
        }
    }
    return $check == 2 ? true : false;
}

function prime()
{
    $gameConditions = 'Answer \"yes\" if given number is prime. Otherwise answer \"no\".';

    $questionAnswer = [];

    $rounds = numberOfRounds();

    for ($i = 0; $i < $rounds; $i++) {
        $num = mt_rand(1, 50);
        $y = 'yes';
        $n = 'no';
        isPrime($num) ? $questionAnswer[$num] = $y : $questionAnswer[$num] =  $n;
    }

    engine($gameConditions, $questionAnswer);
}
