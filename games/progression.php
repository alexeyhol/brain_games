<?php

namespace BrainGames\Progression;

use function cli\line;
use function cli\prompt;
use function Exec\GameEngine\Hello;
use function Exec\GameEngine\Result;

function progression()
{
    global $name;
    global $point;

    hello("Find the greatest common divisor of given numbers.");

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
            $point++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$double_result[$repl]}'.
          Let's try again, {$name}!");
            exit();
        }
    }
    result();
}
