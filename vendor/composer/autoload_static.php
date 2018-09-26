<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2c2ca28286e2ede608eb5b2c86079a3a
{
    public static $prefixLengthsPsr4 = array (
        'Y' => 
        array (
            'YeTii\\PhpFile\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'YeTii\\PhpFile\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2c2ca28286e2ede608eb5b2c86079a3a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2c2ca28286e2ede608eb5b2c86079a3a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}