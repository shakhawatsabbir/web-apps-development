<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita57e49608b9b385b58da3a64802f3e2b
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita57e49608b9b385b58da3a64802f3e2b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita57e49608b9b385b58da3a64802f3e2b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita57e49608b9b385b58da3a64802f3e2b::$classMap;

        }, null, ClassLoader::class);
    }
}
