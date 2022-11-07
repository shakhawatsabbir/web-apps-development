<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf9e5b4ab4edcc4332f37e3f556950117
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitf9e5b4ab4edcc4332f37e3f556950117::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf9e5b4ab4edcc4332f37e3f556950117::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitf9e5b4ab4edcc4332f37e3f556950117::$classMap;

        }, null, ClassLoader::class);
    }
}