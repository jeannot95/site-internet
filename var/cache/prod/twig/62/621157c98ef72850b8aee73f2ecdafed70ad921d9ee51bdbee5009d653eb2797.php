<?php

/* @JeuArticle/Administration/Statistiques/riche.html.twig */
class __TwigTemplate_7fe1b639e51831362826a2cfe1ecfc840be132634af70ba5bf7a1bfa707a2faf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuArticle/Administration/Statistiques/riche.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div>
\t\t<h2 class=\"ind\">Panier Moyen : ";
        // line 5
        echo twig_escape_filter($this->env, ($context["somme"] ?? null), "html", null, true);
        echo " €</h2>
    </div>
\t<div>\t\t\t
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminStatistiques_index");
        echo "\" class=\"bouton1\">Retour à la liste des Statistiques</a>
\t\t\t</li><br>\t\t\t\t
\t\t</ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Administration/Statistiques/riche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 10,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Administration/Statistiques/riche.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Administration\\Statistiques\\riche.html.twig");
    }
}
