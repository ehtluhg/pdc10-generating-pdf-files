<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit50df455eaf6e2bb825c838bcfeda9c8e
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'User\\Pdc10GeneratingPdfFiles\\' => 29,
        ),
        'F' => 
        array (
            'Fpdf\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'User\\Pdc10GeneratingPdfFiles\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'Fpdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/fpdf/fpdf/src/Fpdf',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit50df455eaf6e2bb825c838bcfeda9c8e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit50df455eaf6e2bb825c838bcfeda9c8e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit50df455eaf6e2bb825c838bcfeda9c8e::$classMap;

        }, null, ClassLoader::class);
    }
}
