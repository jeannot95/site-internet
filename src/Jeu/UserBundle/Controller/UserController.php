<?php

namespace Jeu\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
//use Jeu\ArticleBundle\Services\GetFacture;

class UserController extends Controller
{
    public function panierAction()
    {
        return $this->render('JeuUserBundle:User:panier.html.twig');
    }
	
    public function facturesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $factures = $em->getRepository('JeuUserBundle:Commande')->byFacture($this->getUser());
        return $this->render('JeuUserBundle:User:facture.html.twig', array('factures' => $factures));
    }
	
    public function facturePDFAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('JeuUserBundle:Commande')->findOneBy(array('user' => $this->getUser(),
                                                                                     'valider' => 1,
                                                                                     'id' => $id));
        if (!$facture)
        {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('jeu_user_factures'));
        }
        $this->container->get('setNewFacture')->facture($facture)->Output('Facture.pdf');
        $response = new Response();
        $response->headers->set('Content-type' , 'application/pdf');
        return $response;
    }	
	
}