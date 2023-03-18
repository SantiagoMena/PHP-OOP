<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd3035f18a9b5be038efd559f2fe6cdc1
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd3035f18a9b5be038efd559f2fe6cdc1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd3035f18a9b5be038efd559f2fe6cdc1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd3035f18a9b5be038efd559f2fe6cdc1::$classMap;

        }, null, ClassLoader::class);
    }
}