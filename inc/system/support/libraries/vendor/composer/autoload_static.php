<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc5fd6db16cdf1575651d6d7ec79c7ffcFI
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc5fd6db16cdf1575651d6d7ec79c7ffcFI::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc5fd6db16cdf1575651d6d7ec79c7ffcFI::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
