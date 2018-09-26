<?php
namespace Jeu\UserBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class PromoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('promo', TextType::class, array('label' => 'Code Promo',
                                                          'attr' => array('class' => 'field')))
				->add('save', SubmitType::class, array('label' => 'Valider',
														'attr' => array('class' => 'bouton1')										  
														  ));
    }
    public function getName()
    {
        return 'jeu_userbundle_promo';
    }
}