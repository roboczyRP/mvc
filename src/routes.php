<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();
$routes -> add('books',new Route('/books/{page}',array('page'=>1,'_controller' => 'Controllers\\BookController::indexAction')));
$routes -> add('list',new Route('/list'));

return $routes;