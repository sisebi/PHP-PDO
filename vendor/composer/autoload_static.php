<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit15836363d4052fe616bc452a9fb5b054
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'config\\' => 7,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'config\\' => 
        array (
            0 => __DIR__ . '/../..' . '/config',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit15836363d4052fe616bc452a9fb5b054::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit15836363d4052fe616bc452a9fb5b054::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}