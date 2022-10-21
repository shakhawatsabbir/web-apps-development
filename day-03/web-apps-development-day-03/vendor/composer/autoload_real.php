<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitacebc94b395ac89888cb11f2d0e97273
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitacebc94b395ac89888cb11f2d0e97273', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitacebc94b395ac89888cb11f2d0e97273', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitacebc94b395ac89888cb11f2d0e97273::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
