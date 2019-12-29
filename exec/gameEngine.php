<?php

namespace Exec\GameEngine;

use function cli\line;
use function cli\prompt;

$name = '';
$point = 0;

function hello($gameConditions)
{
    global $name;
    line("Welcome to Brain Games!");
    line(' ');
    line($gameConditions);
    $name = prompt("May I have your name?");
    line("Hello, %s!", $name);
}

function result()
{
    global $point;
    global $name;
    
    if ($point == 3) {
        line(' ');
        line("Congratulations, {$name}!");
    }
}