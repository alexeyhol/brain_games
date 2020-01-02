<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function Src\GameEngine\Hello;
use function Src\GameEngine\Result;

function calc()
{
    global $name;
    global $point;

    hello("What is the result of the expression?");

    for ($i = 0; $i < 3; $i++) {
        $operators = ["+","-","*"];
        $operatorsKey = array_rand($operators, 1);
        $randomNumber1 = mt_rand(1, 50);
        $randomNumber2 = mt_rand(1, 50);
        $operationLine = $randomNumber1 . ' ' . $operators[$operatorsKey]  . ' ' . $randomNumber2;

        switch ($operatorsKey) {
            case 0:
                $operation = (int)$randomNumber1 + (int)$randomNumber2;
                break;
            case 1:
                $operation = (int)$randomNumber1 - (int)$randomNumber2;
                break;
            case 2:
                $operation = (int)$randomNumber1 * (int)$randomNumber2;
                break;
        }

        line("\nQuestion: $operationLine");
        $answer = prompt("Your answer");
        if ($answer == $operation) {
            line("Correct!");
            $point++;
        } else {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$operation}'.
            Let's try again, {$name}!");
            exit();
        }
    }
    result();
}
