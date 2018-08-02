<?php
namespace Jeu\ArticleBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class CategoriesController extends Controller
{
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('JeuArticleBundle:Categorie')->findBy(array(), array('name' => 'ASC'));
        return $this->render('JeuArticleBundle:Categories:menu.html.twig', array('categories' => $categories));
    }
}