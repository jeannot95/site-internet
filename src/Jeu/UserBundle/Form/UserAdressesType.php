<?php

namespace Jeu\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CountryType;

class UserAdressesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('nom')
			->add('prenom')
			->add('telephone')
			->add('adresse')
			->add('cp')
			->add('ville')
			->add('pays', CountryType::class, array('preferred_choices'=>array('FR')))
			->add('complement', null, array('required' => false))
			//->add('user')
			;
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jeu\UserBundle\Entity\UserAdresses'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'jeu_userbundle_useradresses';
    }


}
