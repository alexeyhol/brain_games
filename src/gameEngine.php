<?php

namespace Src\GameEngine;

use function cli\line;
use function cli\prompt;

$name = '';

function engine(string $gameConditions, array $questionAnswer)
{
    global $name;

    /* User greeting*/

    line("Welcome to Brain Games!");
    line(' ');
    line($gameConditions);
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);

    /* Playing rounds */

/*
    for ($i = 0; $i < $s; $i++) {
        line("\nQuestion: {$questionAnswer[$i]}");
        $answer = prompt("Your answer");
        if ($answer == $questionAnswer['calc' . $i]) {
            line("Correct!");
        } else {
            line(
                "'{$answer}' is wrong answer ;(. Correct answer was '{$questionAnswer['calc' . $i]}'.
            Let's try again, {$name}!"
            );
            exit();
        }
    }
*/
    foreach ($questionAnswer as $key => $value) {

        line("\nQuestion: {$key}");
        $answer = prompt("Your answer");
        if ($answer == $value) {
            line("Correct!");
        } else {
            line(
                "'{$answer}' is wrong answer ;(. Correct answer was '{$value}'.
            Let's try again, {$name}!"
            );
            exit();
        }
    }

       /* Scoring, printing results */

       line(' ');
       line("Congratulations, {$name}!");
}
