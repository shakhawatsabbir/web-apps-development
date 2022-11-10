<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInita57e49608b9b385b58da3a64802f3e2b
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

        spl_autoload_register(array('ComposerAutoloaderInita57e49608b9b385b58da3a64802f3e2b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInita57e49608b9b385b58da3a64802f3e2b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInita57e49608b9b385b58da3a64802f3e2b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
