<?php

namespace Jeu\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jeu\ArticleBundle\Entity\Article;
use Jeu\UserBundle\Entity\UserAdresses;
use Jeu\UserBundle\Form\UserAdressesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
//use Symfony\Component\HttpFoundation\Session\Session;

class PanierController extends Controller
{
	public function ajouterAction($id)
	{	
		$session = $this->get('session');		
		
		if(!$session->has('panier'))  $session->set('panier', array());
		$panier = $session->get('panier');

		$panier[$id] = 1;
		
		$this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
		$session->set('panier', $panier);
		
		return $this->redirectToRoute('jeu_article_panier');
		
	}
	
	public function panierAction()
	{
		//echo 'test'; die();
		$session = $this->get('session');
		
		if(!$session->has('panier')) $session->set('panier', array());
		//var_dump($session->get('panier'));die();
		$em = $this->getDoctrine()->getManager();
		$articles = $em->getRepository('JeuArticleBundle:Article')->findArray(array_keys($session->get('panier')));
		//$articles = array();
		return $this->render('JeuArticleBundle:Panier:panier.html.twig', array('articles'=> $articles));
	}
	
	public function supprimerAction($id)
	{
		$session = $this->get('session');
		$panier = $session->get('panier');
		if (array_key_exists($id,$panier))
		{
			unset($panier[$id]);
			$session->set('panier', $panier);
			$this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
		}
		return $this->redirectToRoute('jeu_article_panier');
	}	
	
	public function menuAction()
	{
		$session = $this->get('session');
		if(!$session->has('panier')){
			$quantite = 0;
		}	else {
			$quantite = count($session->get('panier'));
		}
		
		return $this->render('JeuArticleBundle:Panier:menu.html.twig', array('quantite' => $quantite));
	}
	
	public function livraisonAction(Request $request)
	{
		$user = $this->container->get('security.token_storage')->getToken()->getUser();
		$entity = new UserAdresses;
		$form = $this->get('form.factory')->create(UserAdressesType::class, $entity);
		
		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
		{
			$em = $this->getDoctrine()->getManager();
			$entity->setUser($user);
			$em->persist($entity);
			$em->flush();
			
			return $this->redirectToRoute('jeu_article_livraison');
		}
		return $this->render('JeuArticleBundle:Panier:livraison.html.twig', array(
									'user' => $user,		
									'form' => $form->createView()));
	}
	
	public function suppressionAdresseAction($id)
	{
		$em = $this->getDoctrine()->getManager();
		$entity = $em->getRepository('JeuUserBundle:UserAdresses')->find($id);
		if($this->container->get('security.token_storage')->getToken()->getUser() != $entity->getUser() || !$entity)
			return $this->redirectToRoute('jeu_article_livraison');
		
		$em->remove($entity);
		$em->flush();
		return $this->redirectToRoute('jeu_article_livraison');
	}	
	
	public function setLivraisonSession(Request $request)
	{
		$session = $request->getSession();
		if(!$session->has('adresse')) $session->set('adresse', array());
		$adresse = $session->get('adresse');
		if ( $request->get('livraison') != null && $request->get('facturation') != null)
		{
			$adresse['livraison'] = $request->get('livraison');
			$adresse['facturation'] = $request->get('facturation');
		}	else {
			return $this->redirectToRoute('jeu_article_validation');
		}
		
		$session->set('adresse', $adresse);
		return $this->redirectToRoute('jeu_article_validation');
	}	
	
	public function validationAction(Request $request)
	{
		if ($request->isMethod('POST')) 
			$this->setLivraisonSession($request);
		$em = $this->getDoctrine()->getManager();
		$prepareCommande = $this->forward('JeuUserBundle:Commande:prepareCommande');

		$commande = $em->getRepository('JeuUserBundle:Commande')->find($prepareCommande->getContent());
				
		return $this->render('JeuArticleBundle:Panier:validation.html.twig', array('commande'=> $commande));
	}	

}	









