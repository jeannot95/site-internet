<?php

/* JeuArticleBundle::layout2.html.twig */
class __TwigTemplate_3f2c2747daeb8ac270d97f1a57208b3d04490c948457a83dc14a3fcfb0f4e657 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuCoreBundle::layout.html.twig", "JeuArticleBundle::layout2.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'jeu_article_body' => array($this, 'block_jeu_article_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuCoreBundle::layout.html.twig";
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
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  <h1>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "html", null, true);
        echo "</h1>
  <hr>
  ";
        // line 10
        $this->displayBlock('jeu_article_body', $context, $blocks);
        // line 12
        echo "
";
    }

    // line 10
    public function block_jeu_article_body($context, array $blocks = array())
    {
        // line 11
        echo "  ";
    }

    public function getTemplateName()
    {
        return "JeuArticleBundle::layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 11,  60 => 10,  55 => 12,  53 => 10,  47 => 8,  44 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuArticleBundle::layout2.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/layout2.html.twig");
    }
}
