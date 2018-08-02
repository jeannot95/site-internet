<?php

namespace Jeu\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JeuCoreBundle:Default:index.html.twig');
    }
}
