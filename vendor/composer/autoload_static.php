<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ddfe575305070baf3a6d59b1f08e5f6
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ddfe575305070baf3a6d59b1f08e5f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ddfe575305070baf3a6d59b1f08e5f6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ddfe575305070baf3a6d59b1f08e5f6::$classMap;

        }, null, ClassLoader::class);
    }
}
