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


class TwigServiceProvider extends ServiceProviders
{
    public function provide()
    {
        $loader=new Twig_Loader_Filesystem($this->config['dir']);
        $envi=new Twig_Environment($loader,array(
            'cache'=>$this->config['cache'],
            'auto_reload' => true));
        return $envi;
    }
}