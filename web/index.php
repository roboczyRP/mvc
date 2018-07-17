<?php

require(__DIR__.'/../vendor/autoload.php');

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing;

//:: to wywolanie metody statycznej
//createFromGlobals() kopiuje do zmiennej request wszystkie tablice globalne
$request= Request::createFromGlobals();
$response = new Response();
$routes = include (__DIR__.'/../src/app/routes.php');

$context = new Routing\RequestContext();
$context->fromRequest($request);

$matcher = new Routing\Matcher\UrlMatcher($routes,$context);

try{

    extract($matcher->match($request->getPathInfo()),EXTR_SKIP);



    $dir=__DIR__.'/../src/app/controllers/%s.php';
    ob_start();
    require(sprintf($dir,$_route));
    $response->setContent(ob_get_clean());

}catch(Routing\Exception\RouteNotFoundException $e)
{
    $response->setStatusCode(404);
    $response->setContent($e->getMessage());
}
catch( Exception $e)
{
    $response->setStatusCode(500);
    $response->setContent($e->getMessage());
}
$response->send();


//$controllers = isSet($_GET['controllers']) ? $_GET['controllers'] : 'home';
//robi to samo co zakomentowana linijka powyzej



//$controllers = $request->get('controllers','home');

//to samo ale przez przyjazne adresy

//$path=$request->getPathInfo();




/*
$map=array(

    '/home' => 'home',
    '/list' => 'list'
);



//$dir=__DIR__.'/../src/app/controllers/'.$controllers.'.php';
$dir=__DIR__.'/../src/app/controllers/%s.php';

//if(file_exists($dir))
if(isset($map[$path]))
{
    //ob_start() i ob_get_clean() : wynik polecen miedzy nimi zostaje wrzucony do zmiennej a nie na ekran ob_get_clean() zwraca to co jest w tej zmiennej
    ob_start();
    require(sprintf($dir,$map[$path]));
    $response->setContent(ob_get_clean());
}
else
{
    $response->setStatusCode(404);
    //header('HTTP/1.0 404 Not Found');
    //echo '<p style="font-size:250px;text-align: center;">404</p>';
    $response->setContent('404');
}
$response->send();

?>

*/