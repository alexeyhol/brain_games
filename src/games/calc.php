<?php

namespace brain\games\calc;

use function src\gameEngine\engine;

function calc()
{
    $gameConditions = 'What is the result of the expression?';

    $questionAnswer = [];

    for ($i = 0; $i < 3; $i++) {
        $operators = ["+","-","*"];
        $key = array_rand($operators, 1);
        $randNum1 = mt_rand(1, 50);
        $randNum2 = mt_rand(1, 50);
        $question = $randNum1 . ' ' . $operators[$key]  . ' ' . $randNum2;
        switch ($operators[$key]) {
            case "+":
                $calc = (int)$randNum1 + (int)$randNum2;
                break;
            case "-":
                $calc = (int)$randNum1 - (int)$randNum2;
                break;
            case "*":
                $calc = (int)$randNum1 * (int)$randNum2;
                break;
        }

        $questionAnswer[$question] = $calc;
    }
    engine($gameConditions, $questionAnswer);
}
