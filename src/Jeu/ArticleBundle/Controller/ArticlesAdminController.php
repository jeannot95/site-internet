<?php
namespace Jeu\ArticleBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Jeu\ArticleBundle\Entity\Article;
use Jeu\ArticleBundle\Form\ArticleType;
/**
 * Produits controller.
 *
 */
class ArticlesAdminController extends Controller
{
    /**
     * Lists all Produits entities.
     *
     */
    public function indexAction(Request $request, $page)
    {
		
		if ($page < 1) {
			  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
			}		
		$em = $this->getDoctrine()->getManager();
		$nbPerPage = 5;
		$entities = $em->getRepository('JeuArticleBundle:Article')->getJeux($page, $nbPerPage);
		$nbPages = ceil(count($entities) / $nbPerPage);

		if ($page > $nbPages && $page != 1) {
		  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}		

        return $this->render('JeuArticleBundle:Administration:Produits/index.html.twig', array(
            'entities' => $entities,
			'nbPages'=>$nbPages,
			'page'=>$page,
        ));
    }
    /**
     * Creates a new Produits entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Article();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
		if ($form->getData()->getNbJoueurMin() > $form->getData()->getNbJoueurMax() ) {
			$request->getSession()->getFlashBag()->add('notice', "le nombre de joueurs minimum ne peut pas être supérieur au nombre de joueur maximum");
			return $this->render('JeuArticleBundle:Administration:Produits/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
			));
		}
		
		if ($form->getData()->getAgeMin() > $form->getData()->getAgeMax() ) {
			$request->getSession()->getFlashBag()->add('notice', "l'age minimum ne peut pas être supérieur à l'âge maximum");
			return $this->render('JeuArticleBundle:Administration:Produits/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
			));
		}		
		
			if ($form->isValid()) {
				$em = $this->getDoctrine()->getManager();
				$em->persist($entity);
				$em->flush();
				return $this->redirect($this->generateUrl('adminProduits_show', array('id' => $entity->getId())));
			}
        return $this->render('JeuArticleBundle:Administration:Produits/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    /**
     * Creates a form to create a Produits entity.
     *
     * @param Produits $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Article $entity)
    {
        $form = $this->createForm(ArticleType::class, $entity);
        //$form->add('submit', SubmitType::class, array('label' => 'Ajouter', 'attr'=> array('class'=>'button is-success is-outlined',)));
        return $form;
    }
    /**
     * Displays a form to create a new Produits entity.
     *
     */
    public function newAction()
    {	
	
/* 		$article = new Article();
		$form   = $this->get('form.factory')->create(ArticleType::class, $article);

		 if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		  $em = $this->getDoctrine()->getManager();
		  $em->persist($article);
		  $em->flush(); 

		  $request->getSession()->getFlashBag()->add('notice', 'Article bien enregistré.');

		  return $this->redirectToRoute('jeu_article_view', array('id' => $article->getId()));
		} 

		return $this->render('JeuArticleBundle:Administration:new.html.twig', array(
		  'form' => $form->createView(),
		));*/
		
        $entity = new Article();
        $form   = $this->createCreateForm($entity);
        return $this->render('JeuArticleBundle:Administration:Produits/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    /**
     * Finds and displays a Produits entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('JeuArticleBundle:Article')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produits entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('JeuArticleBundle:Administration:Produits/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }
    /**
     * Displays a form to edit an existing Produits entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('JeuArticleBundle:Article')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produits entity.');
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('JeuArticleBundle:Administration:Produits/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Creates a form to edit a Produits entity.
     *
     * @param Produits $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Article $entity)
    {
        $form = $this->createForm(ArticleType::class, $entity, array(
            'action' => $this->generateUrl('adminProduits_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        //$form->add('submit', SubmitType::class, array('label' => 'Mettre à jour', 'attr'=> array('class'=>'button is-success is-outlined')));
        return $form;
    }
    /**
     * Edits an existing Produits entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('JeuArticleBundle:Article')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Produits entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
		if ($editForm->getData()->getNbJoueurMin() > $editForm->getData()->getNbJoueurMax() ) {
			$request->getSession()->getFlashBag()->add('notice', "le nombre de joueurs minimum ne peut pas être supérieur au nombre de joueur maximum");
			return $this->render('JeuArticleBundle:Administration:Produits/edit.html.twig', array(
				'entity'      => $entity,
				'edit_form'   => $editForm->createView(),
				'delete_form' => $deleteForm->createView(),
			));			
		}
		if ($editForm->getData()->getAgeMin() > $editForm->getData()->getAgeMax() ) {
			$request->getSession()->getFlashBag()->add('notice', "l'age minimum ne peut pas être supérieur à l'âge maximum");
			return $this->render('JeuArticleBundle:Administration:Produits/edit.html.twig', array(
				'entity'      => $entity,
				'edit_form'   => $editForm->createView(),
				'delete_form' => $deleteForm->createView(),
			));			
		}		
        if ($editForm->isSubmitted()){
            if ($editForm->isValid()) {
                $em->flush();
                return $this->redirect($this->generateUrl('adminProduits_show', array('id' => $id)));
            }else{
                die('test');
                return $editForm->getErrors();
            }
        }
        return $this->render('JeuArticleBundle:Administration:Produits/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Produits entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('JeuArticleBundle:Article')->find($id);
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Produits entity.');
            }
            $em->remove($entity);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('adminProduits_index'));
    }
    /**
     * Creates a form to delete a Produits entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminProduits_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', SubmitType::class, array('label' => 'Supprimer', 'attr'=> array('class'=>'button is-danger is-outlined')))
            ->getForm()
            ;
    }
}