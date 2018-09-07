<?php

/* JeuArticleBundle:Panier:menu.html.twig */
class __TwigTemplate_de1007b0908beecd3d6155f710682275d00406f2b101e673a34ad1257fddb60b extends Twig_Template
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
        echo "<div>
\t<span class=\"ind orange\">Panier</span><br>
\t<a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_panier");
        echo "\">
\t\t";
        // line 4
        if ((($context["quantite"] ?? null) == 0)) {
            // line 5
            echo "\t\t\tAucun article dans votre panier
\t\t";
        } elseif ((        // line 6
($context["quantite"] ?? null) == 1)) {
            // line 7
            echo "\t\t\t1 article dans votre panier
\t\t";
        } else {
            // line 9
            echo "\t\t\t";
            echo twig_escape_filter($this->env, ($context["quantite"] ?? null), "html", null, true);
            echo " articles dans votre panier
\t\t";
        }
        // line 11
        echo "\t</a>
</div>";
    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Panier:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  42 => 9,  38 => 7,  36 => 6,  33 => 5,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuArticleBundle:Panier:menu.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Panier/menu.html.twig");
    }
}
