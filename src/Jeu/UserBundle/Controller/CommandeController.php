<?php

namespace Jeu\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jeu\ArticleBundle\Entity\Article;
use Jeu\UserBundle\Entity\Commande;
use Jeu\UserBundle\Entity\UserAdresses;
use Jeu\UserBundle\Form\UserAdressesType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
//use Symfony\Component\HttpFoundation\Session\Session;
use JMS\SecurityExtraBundle\Annotation\Secure;

class CommandeController extends Controller
{
	public function facture()
	{
		$em = $this->getDoctrine()->getManager();
		$session = $this->get('request_stack')->getCurrentRequest()->getSession();
		//$generator = $this->container->get('security.util.secure_random');
		$random = random_bytes(10);
		$adresse = $session->get('adresse');
		$panier = $session->get('panier');
		$commande = array();
		$totalHT = 0;	
		$totalTTC = 0;

		$facturation = $em->getRepository('JeuUserBundle:UserAdresses')->find($adresse['facturation']);	
		$livraison = $em->getRepository('JeuUserBundle:UserAdresses')->find($adresse['livraison']);	
		$articles = $em->getRepository('JeuArticleBundle:Article')->findArray(array_keys($session->get('panier')));

		foreach( $articles as $article )
		{
			$prixHT = ($article->getPrix() * $panier[$article->getId()]);
			$prixTTC = ($article->getPrix()* $panier[$article->getId()] * 1.2 );
			$tva = $prixTTC - $prixHT;
			$totalHT += $prixHT;
			$totalTTC += $prixTTC;
			//$totaltva += $tva;

			$commande['article'][$article->getId()] = array('reference'=>$article->getTitre(),
															'prixHT'=> round($article->getPrix(),2),
															'prixTTC'=>	round($article->getPrix(),2) * 1.2,
															);
		}													
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
			if($session->has('promo')){			
			$commande['prixTTC2'] = round($totalTTC, 2)*0.9;}
			$commande['prixTTC'] = round($totalTTC, 2);
			$commande['token'] = bin2hex($random);

			return $commande;	
		
		
	}
	
	public function prepareCommandeAction(Request $request)
	{
		$session = $request->getSession();
		$em = $this->getDoctrine()->getManager();
		
		if(!$session->has('commande'))
		{
			$commande = new Commande();
		}	
		else
		{
			$commande = $em->getRepository('JeuUserBundle:Commande')->find($session->get('commande'));
		}
		
		$commande->setDate(new \DateTime());
		$commande->setUser($this->container->get('security.token_storage')->getToken()->getUser());
		$commande->setValider(0);
		$commande->setReference(0);
		$commande->setCommande($this->facture());
		
		if (!$session->has('commande')){
			$em->persist($commande);
			$session->set('commande', $commande);
		}
		
		$em->flush();
		return new Response($commande->getId());
		
	}
	
    /*
     * Cette methode remplace l'API banque
     */
    public function validationCommandeAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('JeuUserBundle:Commande')->find($id);
        if (!$commande || $commande->getValider() == 1)
        {
            throw $this->createNotFoundException('La commande n\'existe pas !');
        }
        $commande->setValider(1);
        //$commande->setReference($this->container->get('setNewReference')->reference()); //Service a faire
		 $commande->setReference($this->container->get('setNewReference')->reference());
        $em->flush();
         $facture = $em->getRepository('JeuUserBundle:Commande')->findOneBy(array('user' => $this->getUser(),
            'valider' => 1,
            'id' => $commande->getId())); 
        $session = $request->getSession();
        $session->remove('adresse');
        $session->remove('panier');
        $session->remove('commande');
		if($session->has('promo')){
			$prom = $session->get('promo');
			$promo = $em->getRepository('JeuUserBundle:Promo')->findPromo($prom);
			//var_dump($promo);
			$promo[0]->setUtilise(1);
			$em->flush();
			$session->remove('promo');
		}
        // ici le mail de validation
          $message = \Swift_Message::newInstance()
            ->setSubject('Validation de votre commande')
            ->setFrom(array('jeux@jeux.audoinjean95300.com' => 'JeuxDeSociété'))
            ->setTo($commande->getUser()->getEmailCanonical())
            ->setCharset('utf-8')
            ->setContentType('text/html')
            ->setBody($this->renderView('JeuArticleBundle:Swift:validationCommande.html.twig',array('user' => $commande->getUser(),
                                                                                                                 'facture' => $facture)));
        $this->get('mailer')->send($message);
	
        $this->get('session')->getFlashBag()->add('success','Votre commande est validée avec succès. Un mail récapitulatif à été envoyé dans votre boîte mail');
        return $this->redirectToRoute('jeu_user_factures'); 
		
/* 		$message = "Line 1\r\nLine 2\r\nLine 3";

		$message = wordwrap($message, 70, "\r\n");

		mail('audoinjean95@hotmail.com', 'Mon Sujet', $message);
		return $this->redirectToRoute('jeu_user_factures'); */
    }		
	
}	