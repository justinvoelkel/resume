<?php

use Slim\App;
use cebe\markdown\GithubMarkdown;

//new Slim instance
$app = new App();
//set up the application container
$container = $app->getContainer();
//set up a parser for the readme file
$container['parser'] = new GithubMarkdown();

require_once 'views.php';
require_once 'routes.php';

$app->run();
