<?php
namespace Jeu\ArticleBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Jeu\ArticleBundle\Entity\Avis;
use Jeu\ArticleBundle\Form\AvisType;
/**
 * Avis controller.
 *
 */
class AvisAdminController extends Controller
{
    /**
     * Lists all Avis entities.
     *
     */
    public function indexAction($page)
    {
		if ($page < 1) {
			  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
			}		
		$em = $this->getDoctrine()->getManager();
		$nbPerPage = 5;		
        $entities = $em->getRepository('JeuArticleBundle:Avis')->getAvis($page, $nbPerPage);
		$nbPages = ceil(count($entities) / $nbPerPage);

		if ($page > $nbPages && $page != 1) {
		  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}			
		
        return $this->render('JeuArticleBundle:Administration:Avis/index.html.twig', array(
            'entities' => $entities,
			'nbPages'=>$nbPages,
			'page'=>$page,			
        ));
    }

    /**
     * Finds and displays a Avis entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('JeuArticleBundle:Avis')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Avis entity.');
        }
        $deleteForm = $this->createDeleteForm($id);
        return $this->render('JeuArticleBundle:Administration:Avis/show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Deletes a Avis entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('JeuArticleBundle:Avis')->find($id);
            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Avis entity.');
            }
            $em->remove($entity);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('adminAvis_index'));
    }
    /**
     * Creates a form to delete a Avis entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('adminAvis_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', SubmitType::class, array('label' => 'Supprimer', 'attr'=> array('class'=>'bouton5')))
            ->getForm()
            ;
    }
}