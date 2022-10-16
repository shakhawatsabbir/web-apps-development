<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite4ca47a713c6f51c1155faa3267bc977
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

        spl_autoload_register(array('ComposerAutoloaderInite4ca47a713c6f51c1155faa3267bc977', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite4ca47a713c6f51c1155faa3267bc977', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite4ca47a713c6f51c1155faa3267bc977::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
