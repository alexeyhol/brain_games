<?php

namespace BrainGames\Prime;

use function cli\line;
use function cli\prompt;
use function Src\GameEngine\Engine;

function prime()
{
    $gameConditions = 'Answer \"yes\" if given number is prime. Otherwise answer \"no\".';

    $questionAnswer = [];

    $check = 0;
    $counter = 0;
    $result = false;

    while ($counter < 3) {
        $question = mt_rand(1, 50);
        $questionAnswer['quest' . $counter] = $question;

        for ($i = 1; $i <= $question; $i++) {
            if ($question % $i == 0) {
                $check += 1;
            }
        }
    
        if ($check == 2) {
            $result = true;
            $questionAnswer['calc' . $counter] = 'yes';
        } elseif ($check !== 2) {
            $questionAnswer['calc' . $counter] = 'no';
        }

        $counter += 1;
    }

    engine($gameConditions, $questionAnswer);
}
