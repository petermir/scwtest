<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbcccce51868b769e859b4c1668b7ded8
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

        spl_autoload_register(array('ComposerAutoloaderInitbcccce51868b769e859b4c1668b7ded8', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbcccce51868b769e859b4c1668b7ded8', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbcccce51868b769e859b4c1668b7ded8::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
