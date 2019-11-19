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
    global $flag;
    global $gcd;
    $counter = 0;
    while ($counter < 3) {
        $num1 = mt_rand(0, 100);
        $num2 = mt_rand(0, 100);
    
        gcd_action($num1, $num2);

        line("\nQuestion: {$num1} {$num2}");
        $answer = (int)prompt("Your answer");

        if ($answer == $gcd) {
            line("Correct!");
            $flag++;
            $counter++;
        } else {
            line(
                "'{$answer}' is wrong answer ;(. Correct answer was '{$gcd}'.
          Let's try again, {$name}!"
            );
            exit();
        }
    }
}
/*function gcd()
{
    global $name;
    global $flag;
    //$gcd = 0;
    $counter = 0;

    while ($counter < 3) {
        $gcd = 0;
        $num1 = mt_rand(0, 100);
        $num2 = mt_rand(0, 100);

        if ($num1 === 0) {
            $gcd = abs($num2);
        } elseif ($num2 === 0) {
            $gcd = abs($num1);
        } else {
            for (;;) {
                if (($num1 %= $num2) === 0) {
                    $gcd = abs($num2);
                } elseif (($num2 %= $num1) === 0) {
                    $gcd = abs($num1);
                }
            }
        }

        line("\nQuestion: {$num1} {$num2}");
        $answer = (int)prompt("Your answer");

        if ($answer == $gcd) {
            line("Correct!");
            $flag++;
            $counter++;
        } else {
            line(
                "'{$answer}' is wrong answer ;(. Correct answer was '{$gcd}'.
          Let's try again, {$name}!"
            );
            exit();
        }
    }
     
       
}*/
