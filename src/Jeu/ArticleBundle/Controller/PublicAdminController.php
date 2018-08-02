<?php
namespace Jeu\ArticleBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Jeu\ArticleBundle\Entity\PublicJeu;
use Jeu\ArticleBundle\Form\PublicJeuType;
/**
 * Categories controller.
 *
 */
class PublicAdminController extends Controller
{
    /**
     * Lists all Categories entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('JeuArticleBundle:PublicJeu')->findAll();
        return $this->render('JeuArticleBundle:Administration:PublicJeu/index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Categories entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new PublicJeu();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('adminPublic_show', array('id' => $entity->getId())));
        }
        return $this->render('JeuArticleBundle:Administration:PublicJeu/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    /**
     * Creates a form to create a Categories entity.
     *
     * @param Categories $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(PublicJeu $entity)
    {
        $form = $this->createForm(PublicJeuType::class, $entity, array(
            'action' => $this->generateUrl('adminPublic_create'),
            'method' => 'POST',
        ));
        $form->add('submit', SubmitType::class, array('label' => 'Ajouter', 'attr'=> array('class'=>'button is-success is-outlined',)));
        return $form;
    }
    /**
     * Displays a form to create a new Categories entity.
     *
     */
    public function newAction()
    {
        $entity = new PublicJeu();
        $form   = $this->createCreateForm($entity);
        return $this->render('JeuArticleBundle:Administration:PublicJeu/new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }
    /**
     * Finds and displays a Categories entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('JeuArticleBundle:PublicJeu')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PublicJeu entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('JeuArticleBundle:Administration:PublicJeu/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }
    /**
     * Displays a form to edit an existing Categories entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('JeuArticleBundle:PublicJeu')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PublicJeu entity.');
        }
        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('JeuArticleBundle:Administration:PublicJeu/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Creates a form to edit a Categories entity.
     *
     * @param Categories $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(PublicJeu $entity)
    {
        $form = $this->createForm(PublicJeuType::class, $entity, array(
            'action' => $this->generateUrl('adminPublic_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));
        $form->add('submit', SubmitType::class, array('label' => 'Mettre à jour', 'attr'=> array('class'=>'button is-success is-outlined')));
        return $form;
    }
    /**
     * Edits an existing Categories entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('JeuArticleBundle:PublicJeu')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find PublicJeu entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);
        if ($editForm->isValid()) {
            $em->flush();
            return $this->redirect($this->generateUrl('adminPublic_show', array('id' => $id)));
        }
        return $this->render('JeuArticleBundle:Administration:PublicJeu/edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Categories entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('JeuArticleBundle:PublicJeu')->find($id);
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find PublicJeu entity.');
            }
            $em->remove($entity);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('adminPublic_index'));
    }
    /**
     * Creates a form to delete a Categories entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminPublic_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', SubmitType::class, array('label' => 'Supprimer', 'attr'=> array('class'=>'button is-danger is-outlined')))
            ->getForm()
            ;
    }
}