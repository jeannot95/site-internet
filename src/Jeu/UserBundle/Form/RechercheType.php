<?php
namespace Jeu\UserBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
class RechercheType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('recherche', TextType::class, array('label' => false,
                                                          'attr' => array('class' => 'field')));
    }
    public function getName()
    {
        return 'jeu_userbundle_recherche';
    }
}