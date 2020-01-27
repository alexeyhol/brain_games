<?php

namespace brain\games\progression;

use function brainGames\gameEngine\engine;

function progression()
{
    $gameConditions = 'Find the greatest common divisor of given numbers.';

    $questionAnswer = [];

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

        $questionAnswer[$question] = $double_result[$repl];
        
        $counter += 1;
    }

    engine($gameConditions, $questionAnswer);
}
