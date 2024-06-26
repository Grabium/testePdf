<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitb818b3ffc257e9bc92cef147d88e5068
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitb818b3ffc257e9bc92cef147d88e5068', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitb818b3ffc257e9bc92cef147d88e5068', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitb818b3ffc257e9bc92cef147d88e5068::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
