<?php
use App\App;
use App\Middleware\OldInputMiddleware;
use Slim\Views\Twig;

session_start();
require __DIR__ . '/../vendor/autoload.php';

$dotenv = new Dotenv\Dotenv('../');
$dotenv->load();

$app = new App;
$container = $app->getContainer();

$app->add(new OldInputMiddleware($container->get(Twig::class)));

require __DIR__ . '/../app/routes.php';