<?php

/* JeuArticleBundle:Administration/Statistiques:index.html.twig */
class __TwigTemplate_bf96e44990cd17187027ff05be4effdc653887589945dfbc997f934d8c6672c1 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Administration/Statistiques:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Administration/Statistiques:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  79 => 19,  73 => 16,  67 => 13,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutAdmin.html.twig' %}

{% block body %}
    <div>
        <h2 class=\"ind\">Liste des Statistiques</h2>
    </div>
\t<div>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('adminStatistiques_note') }}\" class=\"btn btn-primary\">Top 5 des Jeux les mieux notés</a>
\t\t\t</li><br>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('adminStatistiques_commande') }}\" class=\"btn btn-primary\">Top 5 des Jeux les plus commandés</a>
\t\t\t</li><br>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('adminStatistiques_user') }}\" class=\"btn btn-primary\">Top 5 des utilisateurs qui ont le plus commandé(quantité)</a>
\t\t\t</li><br>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('adminStatistiques_riche') }}\" class=\"btn btn-primary\">Panier moyen</a>
\t\t\t</li>\t\t\t\t\t
\t\t</ul>
    </div>
{% endblock %}", "JeuArticleBundle:Administration/Statistiques:index.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Administration/Statistiques/index.html.twig");
    }
}
