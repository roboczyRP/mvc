<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$routes = new RouteCollection();
$routes -> add('books',new Route('/books/{page}',array('page'=>1,'_controller' => 'Controllers\\BookController::indexAction')));
$routes -> add('deleteId',new Route('/books/delete/{id}'),array('_controller'=>'Controllers\\BookController::indexAction'));

return $routes;