<?php
ob_start();

require __DIR__ . "/vendor/autoload.php";

/**
 * BOOTSTRAP
 */
use CoffeeCode\Router\Router;
use Source\Core\Session;

$session = new Session();
$route = new Router(url(), "@");

/**
 * WEB ROUTES
 */
$route->namespace("Source\App");

    // pages
    $route->get("/", "Web@home");
    $route->get("/padroeira", "Web@patroness");
    $route->get("/comunidades", "Web@churches");
    $route->get("/pastorais", "Web@pastorals");
    $route->get("/dizimo", "Web@tithe");

    // blog
    $route->get("/blog", "Web@blog");

    // auth

    // opt-in


/**
 * ERROR ROUTES
 */
$route->namespace("Source\App")->group("/ops");
$route->get("/{errcode}", "Web@error");


/**
 * ROUTE
 */
$route->dispatch();


/**
 * ERROR REDIRECT
 */
if($route->error()){
    $route->redirect("/ops/{$route->error()}");
}

ob_end_flush();