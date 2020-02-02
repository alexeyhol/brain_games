<?php

namespace brainGames\progression;

use function brainGames\gameEngine\engine;

function progression()
{
    $gameConditions = 'Find the greatest common divisor of given numbers.';

    $questionAnswer = [];
    
    $counter = 0;
    while ($counter < ROUNDS) {
        $fullProgression = [];
        $startItem = mt_rand(1, 50);
        $stepProgression = mt_rand(2, 5);
        $progressionLength = 10;
        $stub = '..';

        for ($i = 0; $i < $progressionLength; $i++) {
            $fullProgression[$i] = $startItem + ($stepProgression * $i);
        }

        $index = array_rand($fullProgression);
        $itemReplacement = $fullProgression[$index];
        $fullProgression[$index] = $stub;
        $questionAnswer[implode(' ', $fullProgression)] = $itemReplacement;

        $counter++;
    }
    
    engine($gameConditions, $questionAnswer);
}
