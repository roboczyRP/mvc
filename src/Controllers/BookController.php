<?php

namespace Controllers;
use Simplex\App;
use Symfony\Component\HttpFoundation\Response;

class BookController extends App
{
    public function indexAction($page)
    {
        //return new Response($page.'</br>');

        return new Response($this->render('/View/list.html.twig',array('age' => $page
        )));
    }

}