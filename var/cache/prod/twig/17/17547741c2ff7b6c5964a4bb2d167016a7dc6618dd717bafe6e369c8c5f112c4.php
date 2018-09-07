<?php

/* JeuUserBundle:User:panier.html.twig */
class __TwigTemplate_af0a2d9c8971e40fc0edba0f064953cac14c9f8a16f0bda4e2700a7c0a17be69 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuUserBundle::layout.html.twig", "JeuUserBundle:User:panier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jeu_article_body' => array($this, 'block_jeu_article_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Panier - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_jeu_article_body($context, array $blocks = array())
    {
        // line 8
        echo "
<h2>Votre panier</h2>

  ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 13
        echo "  
";
    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 12
        echo "  ";
    }

    public function getTemplateName()
    {
        return "JeuUserBundle:User:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  59 => 11,  54 => 13,  52 => 11,  47 => 8,  44 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuUserBundle:User:panier.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle/Resources/views/User/panier.html.twig");
    }
}
