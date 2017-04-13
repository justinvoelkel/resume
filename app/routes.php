<?php

$app->get('/', function ($request, $response, $args) use ($app, $container) {

    $md = file_get_contents(realpath('../').'/README.md', 'r');
    $html = $container->parser->parse($md);

    $container->view->render($response, 'md.twig', ['html' => $html]);
});
