<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee7375b27820910c52d0ce6dc517476d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Spotfin\\Conch\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Spotfin\\Conch\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee7375b27820910c52d0ce6dc517476d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee7375b27820910c52d0ce6dc517476d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee7375b27820910c52d0ce6dc517476d::$classMap;

        }, null, ClassLoader::class);
    }
}