<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbaf537148e64635290632dd6e17dc42f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'L' => 
        array (
            'Laminas\\Escaper\\' => 16,
        ),
        'C' => 
        array (
            'CodeIgniter\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Laminas\\Escaper\\' => 
        array (
            0 => __DIR__ . '/..' . '/laminas/laminas-escaper/src',
        ),
        'CodeIgniter\\' => 
        array (
            0 => __DIR__ . '/..' . '/codeigniter4/framework/system',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbaf537148e64635290632dd6e17dc42f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbaf537148e64635290632dd6e17dc42f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbaf537148e64635290632dd6e17dc42f::$classMap;

        }, null, ClassLoader::class);
    }
}