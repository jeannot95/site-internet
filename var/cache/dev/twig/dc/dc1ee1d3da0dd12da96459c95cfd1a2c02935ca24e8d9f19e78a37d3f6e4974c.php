<?php

/* JeuArticleBundle:Avis:vue.html.twig */
class __TwigTemplate_478bab05e483eb6a78f4ba59f43dd1fa69018e9b9bc197fef2ae675855bbcafa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout.html.twig", "JeuArticleBundle:Avis:vue.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Avis:vue.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Avis:vue.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_jeu_article_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jeu_article_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jeu_article_body"));

        // line 7
        echo "\t<h2>Liste des Avis</h2>
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["avis"]);
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 9
            echo "\t\t<fieldset><legend>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "titre", array()), "html", null, true);
            echo "</legend>
\t\tNote : ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "note", array()), "html", null, true);
            echo "/5 <br>
\t\t <em>avis déposé le ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "date", array()), "d/m/Y"), "html", null, true);
            echo " par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "user", array()), "html", null, true);
            echo "</em><br>
\t\t ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "content", array()), "html", null, true);
            echo "
\t\t</fieldset><br>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t";
        if ( !twig_test_empty((isset($context["avis"]) || array_key_exists("avis", $context) ? $context["avis"] : (function () { throw new Twig_Error_Runtime('Variable "avis" does not exist.', 15, $this->source); })()))) {
            // line 16
            echo "\t  <ul class=\"pagination\">
\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbPages" does not exist.', 17, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 18
                echo "\t\t  <li";
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 18, $this->source); })()))) {
                    echo " class=\"active\"";
                }
                echo ">
\t\t\t<a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_avis_vue", array("page" => $context["p"], "id" => (isset($context["idart"]) || array_key_exists("idart", $context) ? $context["idart"] : (function () { throw new Twig_Error_Runtime('Variable "idart" does not exist.', 19, $this->source); })()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a>
\t\t  </li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t  </ul><br>
\t";
        }
        // line 23
        echo " 
\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_view", array("id" => (isset($context["idart"]) || array_key_exists("idart", $context) ? $context["idart"] : (function () { throw new Twig_Error_Runtime('Variable "idart" does not exist.', 24, $this->source); })()))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Retour à l'article</a>
\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Avis:vue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 24,  139 => 23,  135 => 22,  124 => 19,  117 => 18,  113 => 17,  110 => 16,  107 => 15,  98 => 12,  92 => 11,  88 => 10,  83 => 9,  79 => 8,  76 => 7,  67 => 6,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JeuArticleBundle::layout.html.twig\" %}

{% block title %}
  Avis - {{ parent() }}
{% endblock %}
{% block jeu_article_body %}
\t<h2>Liste des Avis</h2>
\t{% for avis in avis %}
\t\t<fieldset><legend>{{ avis.titre }}</legend>
\t\tNote : {{ avis.note }}/5 <br>
\t\t <em>avis déposé le {{ avis.date|date('d/m/Y') }} par {{ avis.user }}</em><br>
\t\t {{ avis.content }}
\t\t</fieldset><br>
\t{% endfor %}
\t{% if avis is not empty %}
\t  <ul class=\"pagination\">
\t\t{% for p in range(1, nbPages) %}
\t\t  <li{% if p == page %} class=\"active\"{% endif %}>
\t\t\t<a href=\"{{ path('jeu_article_avis_vue', {'page': p,'id': idart }) }}\">{{ p }}</a>
\t\t  </li>
\t\t{% endfor %}
\t  </ul><br>
\t{% endif %} 
\t<a href=\"{{ path('jeu_article_view',{ 'id': idart }) }}\" class=\"btn btn-primary\">Retour à l'article</a>
\t
{% endblock %}", "JeuArticleBundle:Avis:vue.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Avis/vue.html.twig");
    }
}
