<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb016f10c1e8edc610649bcf8627ccf2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sandip\\Autoloader\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sandip\\Autoloader\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb016f10c1e8edc610649bcf8627ccf2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb016f10c1e8edc610649bcf8627ccf2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb016f10c1e8edc610649bcf8627ccf2::$classMap;

        }, null, ClassLoader::class);
    }
}
