<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit59147feb6cadb8e01de8320f746fca34
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
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit59147feb6cadb8e01de8320f746fca34::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit59147feb6cadb8e01de8320f746fca34::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit59147feb6cadb8e01de8320f746fca34::$classMap;

        }, null, ClassLoader::class);
    }
}