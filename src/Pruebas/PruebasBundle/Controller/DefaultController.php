<?php

namespace Pruebas\PruebasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('PruebasPruebasBundle:Default:index.html.twig', array('name' => $name));
    }
}
