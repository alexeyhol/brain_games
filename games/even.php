<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;

function hello()
{
    global $name;
    line("Welcome to Brain Games!");
    line(' ');
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
}

function even()
{
    global $flag;
    for ($i = 0; $i < 3; $i++) {
        $randomNumber = mt_rand(1, 100);
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
            exit();
        }
    }
}

function result()
{
    global $flag;
    global $name;
    if ($flag == 3) {
        line(' ');
        line("Congratulations, {$name}!");
    }
}
