<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit336ffdb3f0dd299f94612a000e47bba0
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit336ffdb3f0dd299f94612a000e47bba0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit336ffdb3f0dd299f94612a000e47bba0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}