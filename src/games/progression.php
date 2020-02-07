<?php

namespace brainGames\progression;

use function brainGames\gameEngine\engine;

function progression()
{
    $gameConditions = 'Find the greatest common divisor of given numbers.';

    $questionAnswer = [];
    
    
    for ($i = 0; $i < 3; $i++) {
        $fullProgression = [];
        $startItem = mt_rand(1, 50);
        $stepProgression = mt_rand(2, 5);
        $progressionLength = 10;
        $stub = '..';

        for ($j = 0; $j < $progressionLength; $j++) {
            $fullProgression[$j] = $startItem + ($stepProgression * $j);
        }

        $index = array_rand($fullProgression);
        $itemReplacement = $fullProgression[$index];
        $fullProgression[$index] = $stub;
        $questionAnswer[implode(' ', $fullProgression)] = $itemReplacement;
    }
    
    engine($gameConditions, $questionAnswer);
}
