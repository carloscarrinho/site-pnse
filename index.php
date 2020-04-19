<?php
ob_start();

use CoffeeCode\Router\Router;
use Source\Core\Session;

require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
 */

$session = new Session();
$router = new Router(url(), "@");

/**
 * WEB ROUTES
 */
$router->namespace("Source\App");
$router->get("/", "Web@home");


/**
 * ERROR ROUTES
 */
$router->namespace("Source\App")->group("/ops");
$router->get("/{errcode}", "Web@error");


/**
 * ROUTE
 */
$router->dispatch();

ob_end_flush();