<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitec6d1327e5425d0397a70c4b4de529c0
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitec6d1327e5425d0397a70c4b4de529c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitec6d1327e5425d0397a70c4b4de529c0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitec6d1327e5425d0397a70c4b4de529c0::$classMap;

        }, null, ClassLoader::class);
    }
}
