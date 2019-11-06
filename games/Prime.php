<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;

function hello()
{
    global $name;
    line("Welcome to Brain Games!");
    line(' ');
    line("Answer \"yes\" if given number is prime. Otherwise answer \"no\".");
    line(' ');
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
}

function prime()
{
    global $name;
    global $flag;
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
        $answer = prompt("Your answer");

        if ($answer == 'yes' && $result == true) {
            line('Correct!');
            $counter++;
            $flag++;
        } elseif ($answer == 'no' && $result == false) {
            line('Correct!');
            $counter++;
            $flag++;
        } elseif ($answer == 'yes' && $result == false) {
            line("'{$answer}' is wrong answer ;(. Correct answer was 'no'.
          Let's try again, {$name}!");
            exit();
        } elseif ($answer == 'no' && $result == true) {
            line("'{$answer}' is wrong answer ;(. Correct answer was 'yes'.
          Let's try again, {$name}!");
        }
    }
}
