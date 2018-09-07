<?php

/* @JeuArticle/Recherche/recherche.html.twig */
class __TwigTemplate_70c9c40a230031622bc84eb23fb50ff97df1d507f2821f71dcaa47e7005f9dc6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rechercheProduits");
        echo "\" method=\"GET\" name=\"test\">
\t<div class=\"pad\">
\t\tRechercher un jeu par son nom : ";
        // line 3
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "recherche", array()), 'widget');
        echo "
\t\t";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
\t</div>
</form>";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Recherche/recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  29 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Recherche/recherche.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Recherche\\recherche.html.twig");
    }
}
