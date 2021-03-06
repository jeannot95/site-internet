<?php

namespace Jeu\PagesBundle\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Jeu\PagesBundle\Entity\Enquiry;
use Jeu\PagesBundle\Form\EnquiryType;

class PagesController extends Controller
{
    public function menuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('JeuPagesBundle:Pages')->findAll();
        return $this->render('JeuPagesBundle:Page:menu.html.twig', array('pages' => $pages));
    }
    public function pageAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository('JeuPagesBundle:Pages')->find($id);
       // if (!$page) throw $this->createNotFoundException('La page n\'existe pas.');
        return $this->render('JeuPagesBundle:Page:pages.html.twig', array('page' => $page));
    }

    public function contactAction(Request $request)
    {
        $enquiry = new Enquiry();
        $form = $this->createForm(EnquiryType::class, $enquiry);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($enquiry);
            $em->flush();
            $message = \Swift_Message::newInstance()
                ->setSubject('Contact via Jeux')
                ->setFrom(array('audoinjean95610@gmail.com' => "Jeux"))
                ->setTo('audoinjean95@hotmail.com')
                ->setCharset('utf-8')
                ->setContentType('text/html')
                ->setBody($this->renderView('JeuPagesBundle:Contact:contactEmail.html.twig', array('enquiry' => $enquiry)));
            $this->get('mailer')->send($message);
            $this->get('session')->getFlashBag()->Add('success', 'Votre message viens d\'être transmis, Merci a vous !');
            return $this->redirect($this->generateUrl('contact'));
        }
        return $this->render('JeuPagesBundle:Contact:contact.html.twig', array(
            'form' => $form->createView()
        ));
    }	
	
}
