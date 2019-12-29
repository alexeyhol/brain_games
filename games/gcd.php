<?php

namespace BrainGames\Gcd;

use function cli\line;
use function cli\prompt;
use function Exec\GameEngine\Hello;
use function Exec\GameEngine\Result;

$gcd = 0;

function gcd_action($num1, $num2)
{
    global $gcd;

    if ($num2 === 0) {
        return $gcd = $num1;
    } else {
        return $gcd = gcd_action($num2, $num1 % $num2);
    }
}

function gcd()
{
    global $name;
    global $point;
    global $gcd;

    hello("Find the greatest common divisor of given numbers.");

    $counter = 0;
    while ($counter < 3) {
        $num1 = mt_rand(0, 100);
        $num2 = mt_rand(0, 100);
    
        gcd_action($num1, $num2);

        line("\nQuestion: {$num1} {$num2}");
        $answer = (int)prompt("Your answer");

        if ($answer == $gcd) {
            line("Correct!");
            $point++;
            $counter++;
        } else {
            line(
                "'{$answer}' is wrong answer ;(. Correct answer was '{$gcd}'.
          Let's try again, {$name}!"
            );
            exit();
        }
    }
    result();
}
