<?php

namespace Controllers;
use Symfony\Component\HttpFoundation\Response;

class BookController
{
    public function indexAction($page)
    {
        return new Response($page.'</br>');
    }

}