<?php

/* JeuArticleBundle:Administration/Statistiques:index.html.twig */
class __TwigTemplate_a9b41e23db5edb64c70fc79938dd8ee5c51e60954058714d3dec13141af143eb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuArticleBundle:Administration/Statistiques:index.html.twig", 1);
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
        <h2 class=\"ind\">Liste des Statistiques</h2>
    </div>
\t<div>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminStatistiques_note");
        echo "\" class=\"btn btn-primary\">Top 5 des Jeux les mieux notés</a>
\t\t\t</li><br>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 13
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminStatistiques_commande");
        echo "\" class=\"btn btn-primary\">Top 5 des Jeux les plus commandés</a>
\t\t\t</li><br>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminStatistiques_user");
        echo "\" class=\"btn btn-primary\">Top 5 des utilisateurs qui ont le plus commandé(quantité)</a>
\t\t\t</li><br>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminStatistiques_riche");
        echo "\" class=\"btn btn-primary\">Panier moyen</a>
\t\t\t</li>\t\t\t\t\t
\t\t</ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Administration/Statistiques:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 19,  55 => 16,  49 => 13,  43 => 10,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuArticleBundle:Administration/Statistiques:index.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Administration/Statistiques/index.html.twig");
    }
}
