<?php

use Symfony\Component\Debug\ErrorHandler;
use Symfony\Component\Debug\ExceptionHandler;

// Register global error and exception handlers
ErrorHandler::register();
ExceptionHandler::register();

// Register service providers.
$app->register(new Silex\Provider\DoctrineServiceProvider());
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));
$app->register(new Silex\Provider\AssetServiceProvider(), array(
    'assets.version' => 'v1'
));

// Register services.
$app['dao.book'] = function ($app) {
    return new MyBooks\DAO\BookDAO($app['db']);
};

// Register services.
$app['dao.author'] = function ($app) {
    return new MyBooks\DAO\AuthorDAO($app['db']);
};