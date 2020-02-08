<?php

namespace brainGames\calc;

use function brainGames\gameEngine\engine;

function calc()
{
    $gameConditions = 'What is the result of the expression?';

    $questionsAnswers = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $operators = ["+","-","*"];
        $key = array_rand($operators, 1);
        $randNum1 = mt_rand(1, 50);
        $randNum2 = mt_rand(1, 50);
        $question = "{$randNum1} {$operators[$key]} {$randNum2}";
        switch ($operators[$key]) {
            case "+":
                $correctAnswer = $randNum1 + $randNum2;
                break;
            case "-":
                $correctAnswer = $randNum1 - $randNum2;
                break;
            case "*":
                $correctAnswer = $randNum1 * $randNum2;
                break;
        }

        $questionsAnswers[$question] = $correctAnswer;
    }
    engine($gameConditions, $questionsAnswers);
}
