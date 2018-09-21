<?php
namespace Jeu\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class CommandesAdminController extends Controller
{
    public function commandesAction($page)
    {
		if ($page < 1) {
			  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
			}		
		$em = $this->getDoctrine()->getManager();
		$nbPerPage = 10;		
        $commandes = $em->getRepository('JeuUserBundle:Commande')->getCommandes($page, $nbPerPage);
		$nbPages = ceil(count($commandes) / $nbPerPage);
		if ($page > $nbPages && $page != 1) {
		  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}			
        return $this->render('JeuUserBundle:Administration:Commandes/index.html.twig', array(
			'commandes' => $commandes,
			'nbPages'=>$nbPages,
			'page'=>$page,		
		));
    }
    public function showFactureAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('JeuUserBundle:Commande')->find($id);
        if (!$facture)
        {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('adminCommande'));
        }
        $this->container->get('setNewFacture')->facture($facture)->Output('Facture.pdf');
        $response = new Response();
        $response->headers->set('Content-type' , 'application/pdf');
        return $response;
    }
}