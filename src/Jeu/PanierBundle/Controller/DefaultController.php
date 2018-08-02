<?php

namespace Jeu\PanierBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JeuPanierBundle:Default:index.html.twig');
    }
}
