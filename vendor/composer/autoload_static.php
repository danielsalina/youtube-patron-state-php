<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7eeaa265ef5f676ec429809860a09f2
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'Order\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Order\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/Order',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite7eeaa265ef5f676ec429809860a09f2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite7eeaa265ef5f676ec429809860a09f2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite7eeaa265ef5f676ec429809860a09f2::$classMap;

        }, null, ClassLoader::class);
    }
}
