<?php

namespace brain\games\even;

use function brainGames\gameEngine\numberOfRounds;
use function brainGames\gameEngine\engine;

function isEven($num)
{
    return $num % 2 == 0 ? true : false;
}

function even()
{
    $gameConditions = 'Answer \"yes\" if the number is even, otherwise answer \"no\".';

    $questionAnswer = [];

    $rounds = numberOfRounds();

    for ($i = 0; $i < $rounds; $i++) {
        $num = mt_rand(1, 100);
        $y = 'yes';
        $n = 'no';
        isEven($num) ? $questionAnswer[$num] = $y : $questionAnswer[$num] =  $n;
    }

    engine($gameConditions, $questionAnswer);
}
