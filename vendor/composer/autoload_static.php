<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite4ce2414be0b0b439dd96eacd760334f
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Container\\' => 14,
        ),
        'M' => 
        array (
            'MRKWP\\GlobalFooter\\' => 19,
        ),
        'D' => 
        array (
            'DF\\HUB_V2\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'MRKWP\\GlobalFooter\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'DF\\HUB_V2\\' => 
        array (
            0 => __DIR__ . '/..' . '/mrkdevelopment/diviframework-hub-v2/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pimple' => 
            array (
                0 => __DIR__ . '/..' . '/pimple/pimple/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite4ce2414be0b0b439dd96eacd760334f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite4ce2414be0b0b439dd96eacd760334f::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite4ce2414be0b0b439dd96eacd760334f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
