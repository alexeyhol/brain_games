<?php

namespace brain\games\even;

use function src\gameEngine\engine;

function isEven($num)
{
    return $result = $num % 2 == 0 ? true : false;
}

function even()
{
    $gameConditions = 'Answer \"yes\" if the number is even, otherwise answer \"no\".';

    $questionAnswer = [];

    for ($i = 0; $i < 3; $i++) {
        $randNum = mt_rand(1, 100);
        if (isEven($randNum)) {
            $questionAnswer[$randNum] = 'yes';
        } else {
            $questionAnswer[$randNum] = 'no';
        }
    }

    engine($gameConditions, $questionAnswer);
}
