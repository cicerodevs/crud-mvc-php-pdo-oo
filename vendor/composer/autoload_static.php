<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5f9c8ee76d9b0f3e5ea993fa30c1a174
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5f9c8ee76d9b0f3e5ea993fa30c1a174::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5f9c8ee76d9b0f3e5ea993fa30c1a174::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
