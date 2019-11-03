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
    $question = mt_rand(1, 50);
    line("\nQuestion: $question");
    $answer = prompt("Your answer");
}