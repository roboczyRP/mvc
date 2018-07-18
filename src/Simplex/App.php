<?php
/**
 * Created by PhpStorm.
 * User: rp
 * Date: 18.07.18
 * Time: 11:03
 */

namespace Simplex;


use Simplex\Providers\TwigServiceProvider;

class App
{

    private $config;
    private $view;


    public function __construct()
    {
        $this->loadConfig();
        $twig = new TwigServiceProvider($this->config['twig']);
        $this->view = $twig->provide();

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


    private function loadConfig()
    {
        $this->config = include (__DIR__.'/../config.php');
    }


}