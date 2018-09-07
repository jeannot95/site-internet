<?php

/* JeuArticleBundle::layout.html.twig */
class __TwigTemplate_d1514fce650112fb506c6330bd02450b70d14a813feaf082a4c9cafd33cf32d4 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuCoreBundle::layout.html.twig", "JeuArticleBundle::layout.html.twig", 1);
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
        echo "  Jeux - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "\t<div class=\"flex2 ind\">
  <h1>Jeux</h1>\t           
\t<div>
\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("JeuArticleBundle:Article:recherchebis"));
        echo "
\t</div>
\t</div>
  <hr>
  ";
        // line 15
        $this->displayBlock('jeu_article_body', $context, $blocks);
        // line 17
        echo "
";
    }

    // line 15
    public function block_jeu_article_body($context, array $blocks = array())
    {
        // line 16
        echo "  ";
    }

    public function getTemplateName()
    {
        return "JeuArticleBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 16,  66 => 15,  61 => 17,  59 => 15,  52 => 11,  47 => 8,  44 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuArticleBundle::layout.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/layout.html.twig");
    }
}
