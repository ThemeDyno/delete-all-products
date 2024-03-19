<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a2fbca7e518f38c5e7f014281204e06
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'DAPRODS\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'DAPRODS\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a2fbca7e518f38c5e7f014281204e06::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a2fbca7e518f38c5e7f014281204e06::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a2fbca7e518f38c5e7f014281204e06::$classMap;

        }, null, ClassLoader::class);
    }
}