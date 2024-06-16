<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5876b7ec6480d981f39ae38708ec3770
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'Lohl\\Finance\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Lohl\\Finance\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5876b7ec6480d981f39ae38708ec3770::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5876b7ec6480d981f39ae38708ec3770::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5876b7ec6480d981f39ae38708ec3770::$classMap;

        }, null, ClassLoader::class);
    }
}