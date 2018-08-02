<?php
namespace Jeu\ArticleBundle\Services;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Spipu\Html2Pdf\Html2Pdf;
class GetFacture extends Controller
{
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    public function facture($facture)
    {
        $html = $this->container->get('templating')->render('JeuUserBundle:User:facturePDF.html.twig', array('facture' => $facture));
        //$html2pdf = $this->get('html2pdf_factory')->create('P', 'A4', 'fr', true, 'UTF-8', array(10, 15, 10, 15));
		$html2pdf = new Html2Pdf('P', 'A4', 'fr', true, 'UTF-8', array(10, 15, 10, 15));
		//$html2pdf->create('P', 'A4', 'fr', true, 'UTF-8', array(10, 15, 10, 15));
		//$html2pdf = new Html2Pdf();
        $html2pdf->pdf->SetAuthor('Jeux');
        $html2pdf->pdf->SetTitle('Jeux - Facture '.$facture->getReference());
        $html2pdf->pdf->SetSubject('Facture Jeux');
        $html2pdf->pdf->SetKeywords('facture,jeux');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);
        return $html2pdf;
            //new Response($html2pdf->Output('facture.pdf'), 200, array('Content-Type' => 'application/pdf'));
    }
}