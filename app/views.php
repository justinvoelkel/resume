<?php

use Slim\Views\Twig;

$container['view'] = function ($container) {
    $view = new Twig(__DIR__.'/Views/');

    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

    return $view;
};
