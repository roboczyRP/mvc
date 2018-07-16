<?php

require(__DIR__.'/../vendor/autoload.php');

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

//:: to wywolanie metody statycznej
//createFromGlobals() kopiuje do zmiennej request wszystkie tablice globalne
$request= Request::createFromGlobals();
$response = new Response();

//$controllers = isSet($_GET['controllers']) ? $_GET['controllers'] : 'home';
//robi to samo co zakomentowana linijka powyzej



$controllers = $request->get('controllers','home');




$dir=__DIR__.'/../src/app/controllers/'.$controllers.'.php';

if(file_exists($dir))
{
    //ob_start() i ob_get_clean() : wynik polecen miedzy nimi zostaje wrzucony do zmiennej a nie na ekran ob_get_clean() zwraca to co jest w tej zmiennej
    ob_start();
    require($dir);
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

