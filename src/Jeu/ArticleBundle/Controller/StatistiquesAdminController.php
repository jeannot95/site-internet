<?php
namespace Jeu\ArticleBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class StatistiquesAdminController extends Controller
{
	public function indexAction()
	{
		return $this->render('JeuArticleBundle:Administration:Statistiques/index.html.twig');
	}
	
	public function noteAction()
	{
		$em = $this->getDoctrine()->getManager();
		$articles = $em->getRepository('JeuArticleBundle:Avis')->getNote();
		//var_dump($articles);die();	
		return $this->render('JeuArticleBundle:Administration:Statistiques/note.html.twig', array('articles'=>$articles));
	}

	public function commandeAction()
	{
		$em = $this->getDoctrine()->getManager();
		$articles = $em->getRepository('JeuUserBundle:Commande')->getMeilleur();
		$id = [];
		$id2 = [];
		$titre = [];
		$total = [];
		foreach($articles as $key => $art)
		{
			$id[] = $art['commande']['article'];
					foreach($art['commande']['article'] as $key => $art2)
						{
							$titre[] = $art2['reference'];
							$id2[] = $key;
							if(!isset($total[$key]))
							{
								$total[$key] = array($art2['reference'],0);
							}
							$total[$key][1]++;
						}
		}
		usort($total, function($a, $b) {
			return $b[1] <=> $a[1];
		});		
		return $this->render('JeuArticleBundle:Administration:Statistiques/commande.html.twig', array(
			'articles' => $articles,
			'id' => $id,
			'titre' => $titre,
			'id2' => $id2,
			'total' => $total,
		));		
		//return $this->render('JeuArticleBundle:Administration:Statistiques/commande.html.twig');
	}

	public function userAction()
	{
		$em = $this->getDoctrine()->getManager();
		$users = $em->getRepository('JeuUserBundle:User')->getCommandes();
		return $this->render('JeuArticleBundle:Administration:Statistiques/user.html.twig',array('utilisateurs'=>$users));
	}

	public function richeAction()
	{		
		$em = $this->getDoctrine()->getManager();
		$articles = $em->getRepository('JeuUserBundle:Commande')->getMeilleur();
		$somme = 0;
		$i = 0;
		$total = [];
		//var_dump($articles);//die();
		foreach($articles as $key => $art)
		{
			//var_dump($art['commande']['prixTTC']);
			$somme += $art['commande']['prixTTC'];
			$i++;
						
		}
		$moyenne = $somme / $i;
		//var_dump($moyenne);
		return $this->render('JeuArticleBundle:Administration:Statistiques/riche.html.twig',array('somme'=>$moyenne));
	}	
}