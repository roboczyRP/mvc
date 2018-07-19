<?php
/**
 * Created by PhpStorm.
 * User: rp
 * Date: 18.07.18
 * Time: 12:27
 */

namespace Simplex\Providers;

use Twig_Loader_Filesystem;
use Twig_Environment;
use Symfony\Component\Routing\Generator\UrlGenerator;


class TwigServiceProvider extends ServiceProviders
{
    public function provide(array $parameters)
    {
        $loader=new Twig_Loader_Filesystem($this->config['dir']);
        $envi=new Twig_Environment($loader,array(
            'cache'=>$this->config['cache'],
            'auto_reload' => true));


        if(isSet($parameters['urlGenerator']) && ($parameters['urlGenerator'] instanceof UrlGenerator))
        {
            //jako ze function($route,$parameters[])jest 'bezimienna' nie ma dostepu
            // do zmiennej lokalnej $parameters wiec stad instrukcja 'use'
            $function= new \Twig_SimpleFunction('generateUrl',
                function($route,array $params) use ($parameters){
                return $parameters['urlGenerator']->generate($route,$params);
                } );
            $envi->addFunction($function);
        }
        else{
            try {
                throw new \Exception('Twig needs urlGenerator as a parameter in method provide()');
            }catch(\Exception $e)
            {
                echo $e->getMessage();
            }
        }

        return $envi;
    }
}