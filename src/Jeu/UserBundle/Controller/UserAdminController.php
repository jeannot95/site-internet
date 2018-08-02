<?php
namespace Jeu\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class UserAdminController extends Controller
{
    public function indexAction($page)
    {
		if ($page < 1) {
			  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
			}		
		$em = $this->getDoctrine()->getManager();
		$nbPerPage = 5;		
        $utilisateurs = $em->getRepository('JeuUserBundle:User')->getUtilisateurs($page, $nbPerPage);
		$nbPages = ceil(count($utilisateurs) / $nbPerPage);
		if ($page > $nbPages && $page != 1) {
		  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}			
        return $this->render('JeuUserBundle:Administration:Utilisateurs/index.html.twig', array(
				'utilisateurs' => $utilisateurs,
				'nbPages'=>$nbPages,
				'page'=>$page,				
			));
    }
    public function utilisateurAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('JeuUserBundle:User')->find($id);
        $route = $request->get('_route');
        if ($route == 'adminAdressesUtilisateurs')
        {
            return $this->render('JeuUserBundle:Administration:Utilisateurs/adresses.html.twig', array('utilisateur' => $utilisateur));
        } elseif ($route == 'adminFacturesUtilisateurs'){
            return $this->render('JeuUserBundle:Administration:Utilisateurs/factures.html.twig', array('utilisateur' => $utilisateur));
        } else {
            throw $this->createNotFoundException('La vue n\'existe pas !');
        }
    }
	
}