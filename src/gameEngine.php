<?php

namespace brainGames\gameEngine;

use function cli\line;
use function cli\prompt;

define('ROUNDS', 3);

function engine(string $gameConditions, array $questionAnswer)
{
    /* User greeting*/

    line("Welcome to Brain Games!");
    line(' ');
    line($gameConditions);
    $name = prompt("May I have your name?");
    line("Hello, %s!, {$name}");

    /* Playing rounds */

    foreach ($questionAnswer as $question => $answer) {
        line("\nQuestion: {$question}");
        $userAnswer = prompt("Your answer");
        if ($userAnswer == $answer) {
            line("Correct!");
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$answer}'.");
            line("Let\'s try again, {$name}!");
            exit();
        }
    }

       /* Scoring, printing results */

       line("\nCongratulations, {$name}!");
}
