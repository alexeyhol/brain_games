<?php

namespace BrainGames\Even;

use function cli\line;
use function cli\prompt;
use function Src\GameEngine\Engine;

function even()
{
    $gameConditions = 'Answer \"yes\" if the number is even, otherwise answer \"no\".';

    $questionAnswer = [];

    for ($i = 0; $i < 3; $i++) {
        $randNum = mt_rand(1, 100);
        $questionAnswer['quest' . $i] = $randNum;
        if ($randNum % 2 == 0) {
            $questionAnswer['calc' . $i] = 'yes';
        } else {
            $questionAnswer['calc' . $i] = 'no';
        }
    }

    engine($gameConditions, $questionAnswer);
}
