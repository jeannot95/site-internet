<?php

namespace Jeu\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jeu\ArticleBundle\Entity\Article;
use Jeu\ArticleBundle\Form\ArticleType;
use Jeu\ArticleBundle\Form\ArticleModifierType;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ArticleController extends Controller
{
    public function indexAction($page)
    {
		
		if ($page < 1) {
			  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
			}		
		$em = $this->getDoctrine()->getManager();
		$nbPerPage = 3;
		$articles = $em->getRepository('JeuArticleBundle:Article')->getJeux($page, $nbPerPage);
		$nbPages = ceil(count($articles) / $nbPerPage);

		if ($page > $nbPages && $page != 1) {
		  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}
		
        return $this->render('JeuArticleBundle:Article:index.html.twig',array(
		'articles'=>$articles,
		'nbPages'=>$nbPages,
		'page'=>$page,
		));
    }
	
	public function ajouterAction(Request $request)
	{		
		$article = new Article();
		$form   = $this->get('form.factory')->create(ArticleType::class, $article);

		 if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		  $em = $this->getDoctrine()->getManager();
		  $em->persist($article);
		  $em->flush(); 

		  $request->getSession()->getFlashBag()->add('notice', 'Article bien enregistré.');

		  return $this->redirectToRoute('jeu_article_view', array('id' => $article->getId()));
		}

		return $this->render('JeuArticleBundle:Article:ajouter.html.twig', array(
		  'form' => $form->createView(),
		));
	}
	
	public function modifierAction($id, Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		$article = $em->getRepository('JeuArticleBundle:Article')->find($id);
		if (null === $article) {
		  throw new NotFoundHttpException("L'article d'id ".$id." n'existe pas.");
		}

		$form = $this->get('form.factory')->create(ArticleModifierType::class, $article);	
		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		  // Inutile de persister ici, Doctrine connait déjà notre annonce
		  $em->flush();

		  $request->getSession()->getFlashBag()->add('notice', 'Articlee bien modifié.');

		  return $this->redirectToRoute('jeu_article_view', array('id' => $article->getId()));
		}		
		return $this->render('JeuArticleBundle:Article:modifier.html.twig', array('article'=>$article,
		'form'=>$form->createView(),
		));
	}
	
	public function supprimerAction(Request $request,$id)
	{
		$em = $this->getDoctrine()->getManager();

		$article = $em->getRepository('JeuArticleBundle:Article')->find($id);

		if (null === $article) {
		  throw new NotFoundHttpException("L'article d'id ".$id." n'existe pas.");
		}

		$form = $this->get('form.factory')->create();

		if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		  $em->remove($article);
		  $em->flush();

		  $request->getSession()->getFlashBag()->add('info', "L'article a bien été supprimée.");

		  return $this->redirectToRoute('jeu_article_homepage');
		}
		
		return $this->render('JeuArticleBundle:Article:supprimer.html.twig', array(
		  'article' => $article,
		  'form'   => $form->createView(),
		));
	}
	
	public function viewAction($id)
	{
		$session = $this->get('session');
		$em = $this->getDoctrine()->getManager();
		$article = $em->getRepository('JeuArticleBundle:Article')->find($id);
		
		$cat = $article->getCategories();
		$articles = $em->getRepository('JeuArticleBundle:Article')->suggestion($id,$cat);
		
		if (null === $article) {
		  throw new NotFoundHttpException("L'article d'id ".$id." n'existe pas.");
		}
		
		if ($session->has('panier')){
			$panier = $session->get('panier');
		} else {
			$panier = false ;
		}
		
		return $this->render('JeuArticleBundle:Article:view.html.twig', array(
		  'article'           => $article,
		  'suggestion'        => $articles,
		  'panier'			=> $panier	
		));
	}	

	//protected $list;
	
	public function rechercheAction(Request $request)
	{	
		//$cat = $_POST['categorie'];	
		$em = $this->getDoctrine()->getManager();
		
		$article = new Article();
		$formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $article);		
		$formBuilder
		  ->add('categories', EntityType::class,array(
			'class'         => 'JeuArticleBundle:Categorie',
			'choice_label'  => 'name',
			'multiple'      => true,
			'expanded'		=> true))
 		  ->add('publicJeu',  EntityType::class,array(
			'class'         => 'JeuArticleBundle:PublicJeu',
			'placeholder' => 'None',
			'choice_label'  => 'name',
			'multiple'      => false)) 
		 // ->add('save',      SubmitType::class)	
		;		
		
		$form = $formBuilder->getForm();
		
/* 		if ($form->isSubmitted() && $form->isValid()) {
			return $this->redirectToRoute('jeu_article_selection');
		} */
 			 if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
				{
				// if($request->isXmlHttpRequest())
			// 		{
					//$val = $form['categories']->getData();
					$val1 = $form['publicJeu']->getData();
					$tableau[] = '';
					$tableau2 = '';
					// foreach($val as $indice){
						// if($indice != null)
						// $tableau[] = $indice->getName();
					// }
					if( $val1 != null){
					$tableau2 = $val1->getName();
					}			

					// if(isset($tableau) || isset($tableau2))
					// { 
						// $listArticles = $em->getRepository('JeuArticleBundle:Article')->findByCategorie($tableau,array($tableau2));
// /* 						$listArticles1 = $request->get('listArticles');
						// $response = new JsonResponse($listArticles1);
						// $response->setStatusCode(200);
						// $response->setData(array(
						// 'successMessage' => "Votre message a bien été envoyé",
						// 'listArticles'=> $listArticles));
						// ));
						// return new Response('Nonnnnnn...');
						// return $response; */
					
					
// /* 	 					return 	$this->render('JeuArticleBundle:Article:recherche.html.twig',array(
							// 'listArticles' => $listArticles,
							// 'val' => $val,
							// 'vals' => $val1,
							// 'valss' => $val2,
							// 'valsss' => $tableau,
							// 'valssss' => $tableau2,
							// 'vals' => $value,
							// 'form'=>$form->createView()
						// )); */   
					// }
				//}	
				//return new Response('Nonnnnnn...');
			}	 
	//	} else 
		return 	$this->render('JeuArticleBundle:Article:recherche.html.twig', array('form'=>$form->createView(),));
	}
	
	public function selectionAction(Request $request)
	{
			$em = $this->container->get('doctrine')->getEntityManager();
			//$request = $this->getRequest();
			if($request->isXmlHttpRequest())
			{

				
				 $cat = '';
				 $pub = '';
				 $cat = $request->request->get('idcat');
				 //$cat = '';
				 $pub = $request->request->get('idpub');
				 //$pub = '';
				 if(($cat != '') || ($pub != '')){
				 $listArticles = $em->getRepository('JeuArticleBundle:Article')->findByCriteria($cat,$pub); 
				//$listArticles = $request->request->get('listArticles');
						$response = new JsonResponse($listArticles);
						// $response->setStatusCode(200);
						// $response->setData(array(
						// 'successMessage' => "Votre message a bien été envoyé",
						// 'listArticles'=> $listArticles1));
						// ));
						// return new Response('Nonnnnnn...');
						//return new Response('Yes...');
				return $response;
				}
					return new Response('BRALLLLLL...');				 
/* 				return 	$this->render('JeuArticleBundle:Article:selection.html.twig',array(
				'listArticles' => $listArticles)); */
			} 
			return new Response('Nonnnnnn...');
 			  

	}	
  
}