<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
use function Src\GameEngine\Engine;

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
        switch ($key) {
            case 0:
                $calc = (int)$randNum1 + (int)$randNum2;
                break;
            case 1:
                $calc = (int)$randNum1 - (int)$randNum2;
                break;
            case 2:
                $calc = (int)$randNum1 * (int)$randNum2;
                break;
        }

        $questionAnswer['quest' . $i] = $question;
        $questionAnswer['calc' . $i] = $calc;
    }
    engine($gameConditions, $questionAnswer);
}
