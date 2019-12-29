<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;
use function Exec\GameEngine\Hello;
use function Exec\GameEngine\Result;

function prime()
{
    global $name;
    global $point;

    hello("Answer \"yes\" if given number is prime. Otherwise answer \"no\".");

    $check = 0;
    $counter = 0;
    $result = false;

    while ($counter < 3) {
        $question = mt_rand(1, 50);

        for ($i = 1; $i <= $question; $i++) {
            if ($question % $i == 0) {
                $check += 1;
            }
        }
    
        if ($check == 2) {
            $result = true;
        }

        line("\nQuestion: $question");
        $answer = (string)prompt("Your answer");

        if ($answer == 'yes' && $result === true) {
            line('Correct!');
            $counter++;
            $point++;
        } elseif ($answer == 'no' && $result === false) {
            line('Correct!');
            $counter++;
            $point++;
        } elseif ($answer == 'yes' && $result === false) {
            line("'{$answer}' is wrong answer ;(. Correct answer was 'no'.
          Let's try again, {$name}!");
            exit();
        } elseif ($answer == 'no' && $result === true) {
            line("'{$answer}' is wrong answer ;(. Correct answer was 'yes'.
          Let's try again, {$name}!");
            exit();
        }
    }
    result();
}
