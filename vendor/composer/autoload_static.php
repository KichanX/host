<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit72d2a5b2f7c5b1e47684a03a44a4ba96
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Seld\\CliPrompt\\' => 15,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'L' => 
        array (
            'League\\CLImate\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Seld\\CliPrompt\\' => 
        array (
            0 => __DIR__ . '/..' . '/seld/cli-prompt/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'League\\CLImate\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/climate/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit72d2a5b2f7c5b1e47684a03a44a4ba96::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit72d2a5b2f7c5b1e47684a03a44a4ba96::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit72d2a5b2f7c5b1e47684a03a44a4ba96::$classMap;

        }, null, ClassLoader::class);
    }
}
