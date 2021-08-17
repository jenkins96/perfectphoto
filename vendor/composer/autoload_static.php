<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1b57c0ddfd1be0ba2f4fc13c0f165c5b
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1b57c0ddfd1be0ba2f4fc13c0f165c5b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1b57c0ddfd1be0ba2f4fc13c0f165c5b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1b57c0ddfd1be0ba2f4fc13c0f165c5b::$classMap;

        }, null, ClassLoader::class);
    }
}
