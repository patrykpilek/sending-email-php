<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit975881827223f5d58b09eafacad93ff5
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
        'Config' => __DIR__ . '/../..' . '/classes/Config.php',
        'Queue' => __DIR__ . '/../..' . '/classes/Queue.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit975881827223f5d58b09eafacad93ff5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit975881827223f5d58b09eafacad93ff5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit975881827223f5d58b09eafacad93ff5::$classMap;

        }, null, ClassLoader::class);
    }
}
