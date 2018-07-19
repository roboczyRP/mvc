<?php

namespace Controllers;
use Model\Books;
use Simplex\App;
use Symfony\Component\HttpFoundation\Response;

class BookController extends App
{
    public function indexAction($page)
    {
        //return new Response($page.'</br>');

        /*
        $book=new Books();
        $book->setName('QWE');
        $book->setAuthor('H');
        $book->setDescription('Bardzo ciekawe');
        $manager=$this->getEntityManager();
        $manager->persist($book);
        $manager->flush();
        */

        $manager=$this->getEntityManager();
        $All=$manager->getRepository('Model\Books')->findAll();



        return new Response($this->render('/View/list.html.twig',array('age' => $All
        )));
    }

}