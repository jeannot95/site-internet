<?php

namespace Jeu\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jeu\ArticleBundle\Entity\Article;
use Jeu\UserBundle\Entity\Commandes;
use Jeu\UserBundle\Entity\UserAdresses;
use Jeu\UserBundle\Form\UserAdressesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Session\Session;

class CommandesController extends Controller
{
	public function facture(Request $request)
	{
		$session = $request->getSession();
		$em = $this->getDoctrine()->getManager();
		//$generator = $this->container->get('security.secure_random');
		$random = random_bytes(10);
		$adresse = $session->get('adresse');
		$panier = $session->get('panier');
		$commande = array();
		$totalHT = 0;	
		$totalTTC = 0;

		$facturation = $em->getRepository('JeuUserBunle:UserAdresses')->find($adresse['facturation']);	
		$livraison = $em->getRepository('JeuUserBunle:UserAdresses')->find($adresse['livraison']);	
		$articles = $em->getRepository('JeuArticleBundle:Article')->findArray(array_keys($session->get('panier')));

		foreach( $articles as $article )
		{
			$prixHT = ($article->getPrix() * $panier[$produit->getId()]);
			$prixTTC = ($article->getPrix()* $panier[$produit->getId()] * 1.2 );
			$tva = $prixTTC - $prixHT;
			$totalHT += $prixHT;
			$totalTTC += $prixTTC;
			$totaltva += $tva;

			$commande['article'][$article->getId()] = array('reference'=>$article->getNom(),
															'prixHT'=> round($produit->getPrix(),2),
															'prixTTC'=>	round($produit->getPrix(),2) * 1.2,
															);
			$commande['livraison'] = array('prenom'=> $livraison->getPrenom(),
											'nom'=> $livraison->getNom(),
											'telephone'=> $livraison->getTelephone(),
											'adresse'=> $livraison->getAdresse(),
											'cp'=> $livraison->getCp(),
											'ville'=> $livraison->getVille(),
											'pays'=> $livraison->getPays(),
											'complement'=> $livraison->getComplement(),
											);
											
			$commande['facturation'] = array('prenom'=> $facturation->getPrenom(),
											'nom'=> $facturation->getNom(),
											'telephone'=> $facturation->getTelephone(),
											'adresse'=> $facturation->getAdresse(),
											'cp'=> $facturation->getCp(),
											'ville'=> $facturation->getVille(),
											'pays'=> $facturation->getPays(),
											'complement'=> $facturation->getComplement(),
											);	

			$commande['prixHT'] = round($totalHT, 2);									
			$commande['prixTTC'] = round($totalTTC, 2);
			$commande['random'] = 	$random;

			return $commande;	
		}
		
	}
	
	public function prepareCommandeAction(Request $request)
	{
		$session = $request->getSession();
		$em = $this->getDoctrine()->getManager();
		
		if(!$session->has('commande'))
			$commande = new Commandes();
		else
			$commande = $em->getRepository('JeuArticleBundle:Commandes')->find($session->get('commande'));
		
		$commande->setDate(new \DateTime());
		$commande->setUser($this->container->get('security.token_storage')->getToken()->getUser());
		$commande->setValider(0);
		$commande->setReference(0);
		$commande->setCommande($this->facture($request));
		
		if (!$session->has('commande')){
			$em->persist($commande);
			$session->set('commande', $commande);
		}
		
		$em->flush();
		
		return new Response($commande->getId());
		
	}
}	