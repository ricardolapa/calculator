<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2be5f3dce4994cee8f011271a18a65d8
{
    public static $classMap = array (
        'Caetsu\\Controllers\\Controller' => __DIR__ . '/../..' . '/Controllers/Controller.php',
        'Caetsu\\Controllers\\Products' => __DIR__ . '/../..' . '/Controllers/Products.php',
        'Caetsu\\Core\\App' => __DIR__ . '/../..' . '/Core/App.php',
        'Caetsu\\Core\\Database\\Connection' => __DIR__ . '/../..' . '/Core/Database/Connection.php',
        'Caetsu\\Core\\Database\\QueryBuilder' => __DIR__ . '/../..' . '/Core/Database/QueryBuilder.php',
        'Caetsu\\Core\\Request' => __DIR__ . '/../..' . '/Core/Request.php',
        'Caetsu\\Core\\Router' => __DIR__ . '/../..' . '/Core/Router.php',
        'Caetsu\\Http\\Api' => __DIR__ . '/../..' . '/Http/Api.php',
        'ComposerAutoloaderInit2be5f3dce4994cee8f011271a18a65d8' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit2be5f3dce4994cee8f011271a18a65d8' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Product' => __DIR__ . '/../..' . '/models/Product.model.php',
        'Task' => __DIR__ . '/../..' . '/models/Task.php',
        'User' => __DIR__ . '/../..' . '/models/User.model.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit2be5f3dce4994cee8f011271a18a65d8::$classMap;

        }, null, ClassLoader::class);
    }
}