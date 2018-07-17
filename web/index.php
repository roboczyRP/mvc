<?php

require(__DIR__.'/../vendor/autoload.php');

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;
use Simplex\Framework;
use Symfony\Component\HttpKernel\Controller\ControllerResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver;

//:: to wywolanie metody statycznej
//createFromGlobals() kopiuje do zmiennej request wszystkie tablice globalne
$request= Request::createFromGlobals();
//$response = new Response();
$routes = include (__DIR__ . '/../src/routes.php');

$context = new Routing\RequestContext();
//$context->fromRequest($request);

$matcher = new Routing\Matcher\UrlMatcher($routes,$context);
$controller_resolver=new ControllerResolver();
$argument_resolver=new ArgumentResolver();
$framework = new Framework($matcher,$controller_resolver,$argument_resolver);

$response=$framework->handle($request);
$response->send();
