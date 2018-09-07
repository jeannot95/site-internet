<?php

/* @JeuArticle/Avis/depos.html.twig */
class __TwigTemplate_3e616fbeb0d9467fff847d8640369d21c2fcd8be991b0279a3d6d4358b5aba58 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout.html.twig", "@JeuArticle/Avis/depos.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jeu_article_body' => array($this, 'block_jeu_article_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuArticleBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_jeu_article_body($context, array $blocks = array())
    {
        // line 8
        echo "\t";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form');
        echo "
";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Avis/depos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  43 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Avis/depos.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Avis\\depos.html.twig");
    }
}
