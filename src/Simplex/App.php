<?php
/**
 * Created by PhpStorm.
 * User: rp
 * Date: 18.07.18
 * Time: 11:03
 */

namespace Simplex;


use Simplex\Providers\TwigServiceProvider;
use Simplex\Providers\DoctrinServiceProvider;
use Symfony\Component\Routing\Generator\UrlGenerator;
use Symfony\Component\Routing;

class App
{

    private $config;
    private $view;
    private $model;
    private $urlGenerator;


    public function __construct()
    {
        $this->loadConfig();
        $this->urlGenerator=new UrlGenerator(include (__DIR__.'/../routes.php'),new Routing\RequestContext());

        $twig = new TwigServiceProvider($this->config['twig']);
        $this->view = $twig->provide(array('urlGenerator'=>$this->urlGenerator));
        $doctrine= new DoctrinServiceProvider($this->config['database']);
        $this->model=$doctrine->provide([]);
    }

    public function render($name,array $data)
    {
    try {
        return $this->view->render($name, $data);
    }catch(\Exception $e)
    {
        return $e->getMessage();
    }
    }

    public function getEntityManager()
    {
        return $this->model;
    }


    private function loadConfig()
    {
        $this->config = include (__DIR__.'/../config.php');
    }


}