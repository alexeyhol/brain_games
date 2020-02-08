<?php

namespace brainGames\prime;

use function brainGames\gameEngine\engine;

function isPrime($number)
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number <= 1 || $number % $i == 0) {
            return false;
        }
    }
    return true;
}

function prime()
{
    $questionsAnswers = [];

    $gameConditions = 'Answer \"yes\" if given number is prime. Otherwise answer \"no\".';

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $answers = ['yes' => 'yes', 'no' => 'no'];
        $question = mt_rand(1, 51);
        isPrime($question) ? $questionsAnswers[$question] = $answers['yes'] : $questionsAnswers[$question] =  $answers['no'];
    }

    engine($gameConditions, $questionsAnswers);
}
