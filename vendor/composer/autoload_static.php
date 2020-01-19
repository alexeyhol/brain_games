<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit84cae0875380fe3610634562d3a0718e
{
    public static $files = array (
        'be01b9b16925dcb22165c40b46681ac6' => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib/cli/cli.php',
        '361a2a1cda93e03a190573b08f6a53aa' => __DIR__ . '/../..' . '/src/gameEngine.php',
        'a0f73ec147f134c32e676836dbfa17e2' => __DIR__ . '/../..' . '/games/even.php',
        'd5a1ee4fa522ef9e4c6c810d318e8e74' => __DIR__ . '/../..' . '/games/calc.php',
        '1e0ddf0c9e49de31ac63956e2c6b8443' => __DIR__ . '/../..' . '/games/gcd.php',
        '55542655706e00ab307b2bf1bb7442a3' => __DIR__ . '/../..' . '/games/progression.php',
        '081f89e8d264d97c7fca0473e4a5d2e5' => __DIR__ . '/../..' . '/games/prime.php',
    );

    public static $prefixesPsr0 = array (
        'c' => 
        array (
            'cli' => 
            array (
                0 => __DIR__ . '/..' . '/wp-cli/php-cli-tools/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit84cae0875380fe3610634562d3a0718e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
