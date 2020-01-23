<?php

namespace brain\games\prime;

use function src\gameEngine\engine;

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

    $counter = 0;
    while ($counter < 3) {
        $num = mt_rand(1, 50);

        if (isPrime($num)) {
            $questionAnswer[$num] = 'yes';
        } else {
            $questionAnswer[$num] = 'no';
        }

        $counter += 1;
    }

    engine($gameConditions, $questionAnswer);
}
