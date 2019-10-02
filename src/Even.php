<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function even()
{
    line("Welcome to Brain Games!");
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
    $flag = 0;

    for ($i = 0; $i < 3; $i++) {
        $randomNumber = mt_rand(1, 1000);
        line("\nQuestion: {$randomNumber}");
        $answer = prompt("Your answer");
        if ($randomNumber % 2 == 0 && $answer == 'yes') {
            line("Correct!");
            $flag++;
        } elseif ($randomNumber % 2 !== 0 && $answer == 'no') {
            line("Correct!");
            $flag++;
        } else {
            line(
                "'yes' is wrong answer ;(. Correct answer was 'no'.
            Let's try again, {$name}!"
            );
        }
    }

    if ($flag == 3) {
        line(' ');
        line("Congratulations, {$name}!");
    }
}
