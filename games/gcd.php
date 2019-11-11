<?php

namespace BrainGames\Gcd;

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

function gcd()
{
    global $name;
    global $flag;
    $gcd = null;
    $result = null;


    for ($i = 0; $i < 3; $i++) {
        $num1 = mt_rand(0, 100);
        $num2 = mt_rand(0, 100);

        /*if ($num1 === 0) {
            $gcd = $num1;
        } elseif ($num2 === 0) {
            $gcd = $num2;
        } elseif (($num1 %= $num2) === 0) {
            $gcd = $num2;
        } elseif (($num2 %= $num1) === 0) {
            $gcd = $num1;
        }*/

    
        if ($num1 === 0) {
            $gcd = $num2;
        } elseif ($num2 === 0) {
            $gcd = $num1;
        }
    
        for (;;) {
            if (($num1 %= $num2) === 0) {
                $gcd = $num2;
            } elseif (($num2 %= $num1) === 0) {
                $gcd = $num1;
            }
        }
    }
     
        line("\nQuestion: {$num1} {$num2}");
        $answer = prompt("Your answer");
    if ($answer == $gcd) {
        line("Correct!");
        $flag++;
    } else {
        line(
            "'{$answer}' is wrong answer ;(. Correct answer was '{$gcd}'.
          Let's try again, {$name}!"
        );
        exit();
    }
}
