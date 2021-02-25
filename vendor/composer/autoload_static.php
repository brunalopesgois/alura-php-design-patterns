<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48b18859dee19adb3991bbb651111474
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\DesignPattern\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\DesignPattern\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit48b18859dee19adb3991bbb651111474::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48b18859dee19adb3991bbb651111474::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit48b18859dee19adb3991bbb651111474::$classMap;

        }, null, ClassLoader::class);
    }
}
