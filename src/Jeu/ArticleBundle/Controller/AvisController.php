<?php

namespace Jeu\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jeu\ArticleBundle\Entity\Avis;
//use Jeu\UserBundle\Entity\User;
use Jeu\ArticleBundle\Form\AvisType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AvisController extends Controller
{
	public function vueAction ($id,$page)
	{
		if ($page < 1) {
		  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}
		$session = $this->get('session');
		$em = $this->getDoctrine()->getManager();
		$nbPerPage = 3;
		$avis = $em->getRepository('JeuArticleBundle:Avis')->findAvis($id,$page, $nbPerPage);
		$nbPages = ceil(count($avis) / $nbPerPage);

		if ($page > $nbPages && $page != 1) {
		  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}
		
		if (null === $id) {
		  throw new NotFoundHttpException("L'article d'id ".$id." n'existe pas.");
		}
		
		return $this->render('JeuArticleBundle:Avis:vue.html.twig', array(
			'avis'           => $avis,
			'nbPages'=>$nbPages,
			'page'=>$page,
			'idart'=>$id	
		));		
	}

	public function deposAction (Request $request, $id)
	{
		$session = $this->get('session');
		$em = $this->getDoctrine()->getManager();
		$user = $this->getUser();
		$article = $em->getRepository('JeuArticleBundle:Article')->find($id);;
		
		$avis = new Avis();
		$form   = $this->get('form.factory')->create(AvisType::class, $avis);

		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		  $em = $this->getDoctrine()->getManager();
		  $avis->setUser($user);
		  $avis->setArticle($article);
		  $em->persist($avis);
		  $em->flush(); 

		  $request->getSession()->getFlashBag()->add('notice', 'Avis bien enregistré.');

		  return $this->redirectToRoute('jeu_article_view', array('id' => $avis->getArticle()->getId()));
		}

		return $this->render('JeuArticleBundle:Avis:depos.html.twig', array(
		  'form' => $form->createView(),
		));
				
	}
	
}	