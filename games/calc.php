<?php

namespace BrainGames\Calc;

use function cli\line;
use function cli\prompt;
//use function Src\GameEngine\Hello;
//use function Src\GameEngine\Result;
//use function Src\GameEngine\Action;
use function Src\GameEngine\Engine;

function calc()
{
    $gameConditions = "What is the result of the expression?";

    $questionAnswer = [];

    for ($i = 0; $i < 3; $i++) {
        $operators = ["+","-","*"];
        $operatorsKey = array_rand($operators, 1);
        $randomNumber1 = mt_rand(1, 50);
        $randomNumber2 = mt_rand(1, 50);
        $question = $randomNumber1 . ' ' . $operators[$operatorsKey]  . ' ' . $randomNumber2;
        switch ($operatorsKey) {
            case 0:
                $calc = (int)$randomNumber1 + (int)$randomNumber2;
                break;
            case 1:
                $calc = (int)$randomNumber1 - (int)$randomNumber2;
                break;
            case 2:
                $calc = (int)$randomNumber1 * (int)$randomNumber2;
                break;
        }

        $questionAnswer['quest' . $i] = $question;
        $questionAnswer['calc' . $i] = $calc;
   }
    engine($gameConditions, $questionAnswer);
}
