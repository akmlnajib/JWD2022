<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit062b7bfce368e78fd8add63bbb3ee8bc
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'SecurityLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/security-lib/lib',
            ),
        ),
        'R' => 
        array (
            'RandomLib' => 
            array (
                0 => __DIR__ . '/..' . '/ircmaxell/random-lib/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit062b7bfce368e78fd8add63bbb3ee8bc::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit062b7bfce368e78fd8add63bbb3ee8bc::$classMap;

        }, null, ClassLoader::class);
    }
}
