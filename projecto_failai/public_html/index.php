<?php

use Simas\Authenticator;
use Simas\Controllers\AdminController;
use Simas\Controllers\ContactController;
use Simas\Controllers\PersonController;
use Simas\Controllers\PradziaController;
use Simas\ExceptionHandler;
use Simas\Output;
use Simas\Router;
use Simas\FS;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/larapack/dd/src/helper.php';

$log = new Logger('Portfolios');
$log->pushHandler(new StreamHandler('../logs/klaidos.log', Logger::INFO));

$output = new Output();

try {
    session_start();

    $authenticator = new Authenticator();
    $adminController = new AdminController($authenticator);
    $kontaktaiController = new ContactController($log);
    $personController = new PersonController();

    $router = new Router($output);
    $router->addRoute('GET', '', [new PradziaController(), 'index']);
    $router->addRoute('GET', 'admin', [$adminController, 'index']);
    $router->addRoute('POST', 'login', [$adminController, 'login']);
    $router->addRoute('GET', 'logout', [$adminController, 'logout']);
    $router->addRoute('GET', 'kontaktai', [$kontaktaiController, 'index']);
    $router->addRoute('GET', 'persons', [$personController, 'list']);
    $router->addRoute('GET', 'person/new', [$personController, 'new']);
    $router->addRoute('GET', 'person/delete', [$personController, 'delete']);
    $router->addRoute('GET', 'person/edit', [$personController, 'edit']);
    $router->addRoute('GET', 'person/show', [$personController, 'show']);
    $router->addRoute('POST', 'person', [$personController, 'store']);
    $router->addRoute('POST', 'person/update', [$personController, 'update']);
    $router->run();
}
catch (Exception $e) {
    $handler = new ExceptionHandler($output, $log);
    $handler->handle($e);
}