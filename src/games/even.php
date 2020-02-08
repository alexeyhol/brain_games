<?php

namespace brainGames\even;

use function brainGames\gameEngine\engine;

function isEven($question)
{
    return $question % 2 == 0;
}

function even()
{
    $gameConditions = 'Answer \"yes\" if the number is even, otherwise answer \"no\".';

    $questionsAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = mt_rand(1, 100);
        $answer = ['yes' => 'yes', 'no' => 'no'];
        isEven($question) ? $questionsAnswers[$question] = $answer['yes'] : $questionsAnswers[$question] = $answer['no'];
    }

    engine($gameConditions, $questionsAnswers);
}
