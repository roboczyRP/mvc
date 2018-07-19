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

class App
{

    private $config;
    private $view;
    private $model;


    public function __construct()
    {
        $this->loadConfig();
        $twig = new TwigServiceProvider($this->config['twig']);
        $this->view = $twig->provide();
        $doctrine= new DoctrinServiceProvider($this->config['database']);
        $this->model=$doctrine->provide();
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