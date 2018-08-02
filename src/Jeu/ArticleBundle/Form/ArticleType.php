<?php

namespace Jeu\ArticleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class ArticleType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('titre', TextType::class)
			->add('description', TextareaType::class)
			->add('prix', IntegerType::class)
			->add('dateDeSortie', DateType::class)
			->add('ageMin', IntegerType::class)
			->add('ageMax', IntegerType::class)
			->add('duree', IntegerType::class)
			->add('nbJoueurMin', IntegerType::class)
			->add('nbJoueurMax', IntegerType::class)
			->add('image',     ImageType::class)
			->add('categories', EntityType::class, array(
			'class'         => 'JeuArticleBundle:Categorie',
			'choice_label'  => 'name',
			'multiple'      => true))
			->add('publicJeu', EntityType::class, array(
			'class'         => 'JeuArticleBundle:PublicJeu',
			'choice_label'  => 'name',
			'multiple'      => false))
			->add('save',      SubmitType::class)
			;
    }
	
	/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Jeu\ArticleBundle\Entity\Article'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'jeu_articlebundle_article';
    }
}
