<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function Exec\GameEngine\Hello;
use function Exec\GameEngine\Result;

function even()
{
    global $name;
    global $point;

    hello("Answer \"yes\" if the number is even, otherwise answer \"no\".");

    for ($i = 0; $i < 3; $i++) {
        $randomNumber = mt_rand(1, 100);
        line("\nQuestion: {$randomNumber}");
        $answer = prompt("Your answer");
        if ($randomNumber % 2 == 0 && $answer == 'yes') {
            line("Correct!");
            $point++;
        } elseif ($randomNumber % 2 !== 0 && $answer == 'no') {
            line("Correct!");
            $point++;
        } else {
            line(
                "'yes' is wrong answer ;(. Correct answer was 'no'.
            Let's try again, {$name}!"
            );
            exit();
        }
    }
    result();
}
