<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee5c86554a60bc84baab1c89263efcbe
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
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitee5c86554a60bc84baab1c89263efcbe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee5c86554a60bc84baab1c89263efcbe::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
