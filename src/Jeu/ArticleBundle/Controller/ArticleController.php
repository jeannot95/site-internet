<?php

namespace Jeu\ArticleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jeu\ArticleBundle\Entity\Article;
use Jeu\ArticleBundle\Form\ArticleType;
use Jeu\ArticleBundle\Form\RechercheType;
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
		$note = $em->getRepository('JeuArticleBundle:Avis')->getNotes();
		$nbPages = ceil(count($articles) / $nbPerPage);

		if ($page > $nbPages && $page != 1) {
		  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}
	
		$em = $this->getDoctrine()->getManager();
		$limit = 4;

		$listArticles2 = $em->getRepository('JeuArticleBundle:Article')->findBy(
		array(),                 // Pas de critère
		array('dateDeSortie' => 'desc'), // On trie par date décroissante
		$limit,                  // On sélectionne $limit annonces
		0 
			);
	
        return $this->render('JeuArticleBundle:Article:index.html.twig',array(
		'articles'=>$articles,
		'nbPages'=>$nbPages,
		'page'=>$page,
		'note'=>$note,
		'listAdverts2'=>$listArticles2
		));
    }
	
	public function viewAction($id)
	{
		$session = $this->get('session');
		$em = $this->getDoctrine()->getManager();
		$article = $em->getRepository('JeuArticleBundle:Article')->find($id);
		$note = $em->getRepository('JeuArticleBundle:Avis')->getNotes();
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
			'panier'			=> $panier,
			'note'				=>$note		  
		));
	}	
	
	public function rechercheAction(Request $request)
	{		
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
		 // ->add('save', SubmitType::class)	
		;		
		
		$form = $formBuilder->getForm();
		
 			 if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) 
				{
					$val1 = $form['publicJeu']->getData();
					$tableau[] = '';
					$tableau2 = '';
					if( $val1 != null)
					{
						$tableau2 = $val1->getName();
					}			
				}	 
		return 	$this->render('JeuArticleBundle:Article:recherche.html.twig', array('form'=>$form->createView(),));
	}
	
	public function selectionAction(Request $request)
	{
			$em = $this->container->get('doctrine')->getEntityManager();
			if($request->isXmlHttpRequest())
			{

				
				 $cat = '';
				 $pub = '';
				 $cat = $request->request->get('idcat');
				 $pub = $request->request->get('idpub');
				 if(($cat != '') || ($pub != '')){
				 $listArticles = $em->getRepository('JeuArticleBundle:Article')->findByCriteria($cat,$pub); 
				 $note = $em->getRepository('JeuArticleBundle:Avis')->getNotes();
						$response = new JsonResponse(array($listArticles,$note));
				return $response;
				}
					return new Response('BRALLLLLL...');
			} 
			return new Response('Nonnnnnn...');
 			  

	}	
	
	public function recherchebisAction()
	{
        $form = $this->createForm(RechercheType::class);
        return $this->render('JeuArticleBundle:Recherche:recherche.html.twig', array('form' => $form->createView()));		
	}
  
    public function rechercheTraitementAction($page)
    {
		if ($page < 1) {
		  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}
        $request = Request::createFromGlobals();
        $form = $this->createForm(RechercheType::class);
        $searchTerm = $request->query->get('recherche');
		$chaine = $searchTerm['recherche'];
        if ($searchTerm != '') {
            $form->handleRequest($request);
            $em = $this->getDoctrine()->getManager();
			$nbPerPage = 150;
            $findProduits = $em->getRepository('JeuArticleBundle:Article')->recherche($chaine,$page, $nbPerPage);
		$nbPages = ceil(count($findProduits) / $nbPerPage);
		
		if ($page > $nbPages && $page != 1) {
		  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}   
			/* //var_dump($findProduits);die();
            $categories = $em->getRepository('JeuArticleBundle:Categorie')->findBy(array(), array('id' => 'ASC'),4);
			// var_dump($categories);die();
            foreach ($categories as $categorie)
            {
                $categorieid = $categorie->getId(); //var_dump($categorieid);die();
                $suggestions[$categorieid] = $em->getRepository('JeuArticleBundle:Article')->RandomProducts(4, $categorieid);
				//var_dump($suggestions[$categorieid]);die();
            } */
        } else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }
		//$chaine = $_GET['recherche'];
        return $this->render('JeuArticleBundle:Article:article.html.twig', array('articles' => $findProduits,
                                                                                                 //'suggestions' => $suggestions,
                                                                                                 //'categories' => $categories,
                                                                                                 'resultat' => $chaine,
																								 'nbPages'=>$nbPages,
																								 'page'=>$page,	
																								 ));
    }  
	
	public function meilleurAction()
	{
		$em = $this->getDoctrine()->getManager();
		$articles = $em->getRepository('JeuUserBundle:Commande')->getMeilleur();
		$arts = $em->getRepository('JeuArticleBundle:Article')->getImage();
		$note = $em->getRepository('JeuArticleBundle:Avis')->getNotes();
		$id = [];
		$id2 = [];
		$titre = [];
		$total = [];
		foreach($articles as $key => $art)
		{
			//var_dump($art['commande']['article']);
			$id[] = $art['commande']['article'];
			//$id2[] = $key;
					foreach($art['commande']['article'] as $key => $art2)
						{
				//			var_dump($art2['reference']);
							$titre[] = $art2['reference'];
							$id2[] = $key;
							if(!isset($total[$key]))
							{
								$total[$key] = array($art2['reference'],0,$key);
							}
							$total[$key][1]++;
/* 							foreach($id2 as $value)
							{
								if($key == $key){ $total += 1 ;}
							} */
						}
		}
		usort($total, function($a, $b) {
			return $b[1] <=> $a[1];
		});
		return $this->render('JeuArticleBundle:Article:meilleur.html.twig', array(
			'articles' => $articles,
			'id' => $id,
			'titre' => $titre,
			'id2' => $id2,
			'total' => $total,
			'arts' => $arts,
			'note' => $note,
		));
	}
	
	public function testAction()
	{
		return $this->render('JeuArticleBundle:Article:test.html.twig');
	}
	
	public function menuAction($limit)
	{
		$em = $this->getDoctrine()->getManager();
		$limit = 4;

		$listArticles = $em->getRepository('JeuArticleBundle:Article')->findBy(
		array(),                 // Pas de critère
		array('dateDeSortie' => 'desc'), // On trie par date décroissante
		$limit,                  // On sélectionne $limit annonces
		0                        // À partir du premier
	);

	return $this->render('JeuArticleBundle:Article:menu.html.twig', array(
	'listAdverts' => $listArticles
	));
	}
  
}