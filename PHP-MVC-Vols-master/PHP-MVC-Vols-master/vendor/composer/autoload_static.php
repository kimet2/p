<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita595d8b49cfbd9bb3a74260df5964fa2
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInita595d8b49cfbd9bb3a74260df5964fa2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita595d8b49cfbd9bb3a74260df5964fa2::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInita595d8b49cfbd9bb3a74260df5964fa2::$classMap;

        }, null, ClassLoader::class);
    }
}
