<?php
namespace Jeu\UserBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Jeu\UserBundle\Form\RechercheType;
use Symfony\Component\Form\Extension\Core\Type\FormType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\RedirectResponse;
class UserAdminController extends Controller
{
    public function indexAction($page)
    {
		if ($page < 1) {
			  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
			}		
		$em = $this->getDoctrine()->getManager();
		$nbPerPage = 5;		
        $utilisateurs = $em->getRepository('JeuUserBundle:User')->getUtilisateurs($page, $nbPerPage);
		$nbPages = ceil(count($utilisateurs) / $nbPerPage);
		if ($page > $nbPages && $page != 1) {
		  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}			
        return $this->render('JeuUserBundle:Administration:Utilisateurs/index.html.twig', array(
				'utilisateurs' => $utilisateurs,
				'nbPages'=>$nbPages,
				'page'=>$page,				
			));
    }
    public function utilisateurFacturesAction($page,$id)
    {
		if ($page < 1) {
			  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
			}
        $em = $this->getDoctrine()->getManager();
		$nbPerPage = 10;
		$user = $em->getRepository('JeuUserBundle:User')->find($id);
        $utilisateur = $em->getRepository('JeuUserBundle:Commande')->byFacture2($user,$page, $nbPerPage);
        
        //$utilisateur = $em->getRepository('JeuUserBundle:User')->getUtilisateur($id,$page, $nbPerPage);
		$nbPages = ceil(count($utilisateur) / $nbPerPage);
		//$utilisateur = $em->getRepository('JeuUserBundle:User')->find($id);
		if ($page > $nbPages && $page != 1) {
		  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}
            return $this->render('JeuUserBundle:Administration:Utilisateurs/factures.html.twig', array(
				'utilisateur' => $utilisateur,
				'nbPages'=>$nbPages,
				'page'=>$page,
				//'user'=>$user,
				'id'=>$id	
				));

    }
    public function utilisateurAdressesAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $utilisateur = $em->getRepository('JeuUserBundle:User')->find($id);

            return $this->render('JeuUserBundle:Administration:Utilisateurs/adresses.html.twig', array(
				'utilisateur' => $utilisateur,
		
				));
    }	
	public function rechercheAction()
	{
        $form = $this->createForm(RechercheType::class);
        return $this->render('JeuUserBundle:Administration:Utilisateurs/recherche.html.twig', array('form' => $form->createView()));		
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
            $findUser = $em->getRepository('JeuUserBundle:User')->recherche($chaine,$page, $nbPerPage);
		$nbPages = ceil(count($findUser) / $nbPerPage);
		
		if ($page > $nbPages && $page != 1) {
		  throw $this->createNotFoundException("La page ".$page." n'existe pas.");
		}   
        } else {
            throw $this->createNotFoundException('La page n\'existe pas.');
        }
        return $this->render('JeuUserBundle:Administration:Utilisateurs/utilisateur.html.twig', array('utilisateurs' => $findUser,
                                                                                                 'resultat' => $chaine,
																								 'nbPages'=>$nbPages,
																								 'page'=>$page,	
																								 ));
    }  
	
	public function editRolesAction(Request $request, $id)
	{
		if(!$this->get('security.authorization_checker')->isGranted('ROLE_SUPER_ADMIN'))return $this->redirectToRoute('adminUtilisateurs_index');
		if($id == 1)return $this->redirectToRoute('adminUtilisateurs_index');
		$em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('JeuUserBundle:User')->find($id);
		$formBuilder = $this->get('form.factory')->createBuilder(FormType::class, $user);
		$formBuilder
        ->add(
            'roles', ChoiceType::class, [
                'choices' => ['ROLE_ADMIN' => 'ROLE_ADMIN', 'ROLE_USER' => 'ROLE_USER'],
                'expanded' => true,
                'multiple' => true,
            ]
        )
        ->add('save', SubmitType::class, ['label' => 'changer','attr'=> array('class'=>'bouton1 mart')]);
		//$form = $this->form_factory->create('dirital_user_roles_form_type', $user);
		$form = $formBuilder->getForm();
		
		$form->handleRequest($request);
		if($form->isValid())
		{
			$request->getSession()->getFlashBag()->add('success', "Changement de role effectué avec succès ! ");
			$em->persist($user);
			$em->flush();
			return $this->redirectToRoute('adminUtilisateurs_index');
		}
		return $this->render('JeuUserBundle:Administration:Utilisateurs/editer.html.twig',[
			'form' => $form->createView(),
			'user' => $user
		]);
	}	
	
}