<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4ca47a713c6f51c1155faa3267bc977
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4ca47a713c6f51c1155faa3267bc977::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4ca47a713c6f51c1155faa3267bc977::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite4ca47a713c6f51c1155faa3267bc977::$classMap;

        }, null, ClassLoader::class);
    }
}