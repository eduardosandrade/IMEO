<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4a7923ee59621a0c694f7dee8d53e04f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Project\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Project\\' => 
        array (
            0 => __DIR__ . '/..' . '/project',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4a7923ee59621a0c694f7dee8d53e04f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4a7923ee59621a0c694f7dee8d53e04f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit4a7923ee59621a0c694f7dee8d53e04f::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit4a7923ee59621a0c694f7dee8d53e04f::$classMap;

        }, null, ClassLoader::class);
    }
}
