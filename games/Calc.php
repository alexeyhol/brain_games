<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;

function calc()
{
    global $name;
    global $flag;
    $operators = ["+","-","*"];
    /*$operatorsKey = array_rand($operators, 1);
    $randomNumber1 = mt_rand(1, 100);
    $randomNumber2 = mt_rand(1, 100);*/
    for ($i = 0; $i < 3; $i++) {
        $operatorsKey = array_rand($operators, 1);
        $randomNumber1 = mt_rand(1, 50);
        $randomNumber2 = mt_rand(1, 50);
        $operationLine = $randomNumber1 . $operators[$operatorsKey] . $randomNumber2;

        if ($operatorsKey == 0) {
            $operation = (int)$randomNumber1 + (int)$randomNumber2;
        } elseif ($operatorsKey == 1) {
            $operation = (int)$randomNumber1 - (int)$randomNumber2;
        } elseif ($operatorsKey == 2) {
            $operation = (int)$randomNumber1 * (int)$randomNumber2;
        }
        line("\nQuestion: $operationLine");
        $answer = prompt("Your answer");
        if ($answer == $operation) {
            line("Correct!");
            $flag++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$operation}'.
            Let's try again, {$name}!");
        }
    }
}
