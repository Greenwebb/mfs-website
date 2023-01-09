<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0206f86e67c818c0d38ea1a8c965f0f6
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hashids\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hashids\\' => 
        array (
            0 => __DIR__ . '/..' . '/hashids/hashids/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Monolog' => 
            array (
                0 => __DIR__ . '/..' . '/monolog/monolog/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0206f86e67c818c0d38ea1a8c965f0f6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0206f86e67c818c0d38ea1a8c965f0f6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0206f86e67c818c0d38ea1a8c965f0f6::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
