<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04dea1b9d5d4e3a6d8099327c1ec6ca0
{
    public static $prefixLengthsPsr4 = array (
        'l' => 
        array (
            'lsolesen\\pel\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'lsolesen\\pel\\' => 
        array (
            0 => __DIR__ . '/..' . '/lsolesen/pel/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 
            array (
                0 => __DIR__ . '/..' . '/composer/installers/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04dea1b9d5d4e3a6d8099327c1ec6ca0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04dea1b9d5d4e3a6d8099327c1ec6ca0::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit04dea1b9d5d4e3a6d8099327c1ec6ca0::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
