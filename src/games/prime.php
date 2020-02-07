<?php

namespace brainGames\prime;

use function brainGames\gameEngine\engine;

function isPrime($number)
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function prime()
{
    $questionAnswer = [];

    $gameConditions = 'Answer \"yes\" if given number is prime. Otherwise answer \"no\".';

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = mt_rand(2, 51);
        $answer = ['yes' => 'yes', 'no' => 'no'];
        isPrime($question) ? $questionAnswer[$question] = $answer['yes'] : $questionAnswer[$question] =  $answer['no'];
    }

    engine($gameConditions, $questionAnswer);
}
