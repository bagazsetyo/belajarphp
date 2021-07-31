<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit33d072aec72a6db6dedef3b9d2f56729
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'ProgrammerZamanNow\\Belajar\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ProgrammerZamanNow\\Belajar\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit33d072aec72a6db6dedef3b9d2f56729::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit33d072aec72a6db6dedef3b9d2f56729::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit33d072aec72a6db6dedef3b9d2f56729::$classMap;

        }, null, ClassLoader::class);
    }
}