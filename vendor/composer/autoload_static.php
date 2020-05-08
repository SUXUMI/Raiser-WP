<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit402c9af7573c68e43027b623d761173f
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '241d2b5b9c1e680c0770b006b0271156' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/load-v4p9.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Contracts\\' => 18,
            'Symfony\\Component\\Console\\' => 26,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/contracts',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $classMap = array (
        'initConfig' => __DIR__ . '/../..' . '/commands/init/initConfig.php',
        'makeBlock' => __DIR__ . '/../..' . '/commands/make/makeBlock.php',
        'makeCPT' => __DIR__ . '/../..' . '/commands/make/makeCPT.php',
        'makePage' => __DIR__ . '/../..' . '/commands/make/makePage.php',
        'makeTax' => __DIR__ . '/../..' . '/commands/make/makeTax.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit402c9af7573c68e43027b623d761173f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit402c9af7573c68e43027b623d761173f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit402c9af7573c68e43027b623d761173f::$classMap;

        }, null, ClassLoader::class);
    }
}
