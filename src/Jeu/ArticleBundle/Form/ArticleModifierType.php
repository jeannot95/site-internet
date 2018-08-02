<?php
namespace Jeu\ArticleBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ArticleModifierType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    //$builder->remove('date');
  }

  public function getParent()
  {
    return ArticleType::class;
  }
}