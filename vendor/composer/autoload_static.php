<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit531fbf8ed147b53dcf6a6139dea43148
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\Ipt10stripe\\' => 17,
        ),
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\Ipt10stripe\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit531fbf8ed147b53dcf6a6139dea43148::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit531fbf8ed147b53dcf6a6139dea43148::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit531fbf8ed147b53dcf6a6139dea43148::$classMap;

        }, null, ClassLoader::class);
    }
}
