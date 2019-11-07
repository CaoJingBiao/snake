<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ecdeb254e2b73264c1728becbf54412
{
    public static $files = array (
        'de5a05d860a3458e33da1cc737ac32ea' => __DIR__ . '/..' . '/qsnh/think-log-viewer/autoload.php',
        '1cfd2761b63b0a29ed23657ea394cb2d' => __DIR__ . '/..' . '/topthink/think-captcha/src/helper.php',
    );

    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\composer\\' => 15,
            'think\\captcha\\' => 14,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'Q' => 
        array (
            'Qsnh\\Think\\Log\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'think\\captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-captcha/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
        'Qsnh\\Think\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/qsnh/think-log-viewer/src',
        ),
    );

    public static $classMap = array (
        'Ip2Region' => __DIR__ . '/..' . '/zoujingli/ip2region/Ip2Region.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8ecdeb254e2b73264c1728becbf54412::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8ecdeb254e2b73264c1728becbf54412::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8ecdeb254e2b73264c1728becbf54412::$classMap;

        }, null, ClassLoader::class);
    }
}