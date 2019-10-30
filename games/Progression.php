<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;

function hello()
{
    global $name;
    line("Welcome to Brain Games!");
    line(' ');
    line("Find the greatest common divisor of given numbers.");
    line(' ');
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
}

function progression()
{
    global $name;
    global $flag;
    $counter = 0;
    while ($counter < 3) {

        $start = mt_rand(1, 50);
        $step = mt_rand(2, 5);
        $result = [];
        $result[0] = $start;
        $count = 10;
        $stub = '..';
    
        for ($i = 0; $i <= $count; $i++) {
            $result[] = $result[$i] + $step;
        }
    
        $repl = array_rand($result);
        $double_result = $result;
        $result[$repl] = $stub;

        $question = implode(' ', $result);

        line("\nQuestion: $question");
        $answer = prompt("Your answer");
        if ($answer == $double_result[$repl]) {
            line("Correct!");
            $counter++;
            $flag++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$double_result[$repl]}'.
          Let's try again, {$name}!");
            exit();
        }
    }
}
