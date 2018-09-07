<?php

/* JeuArticleBundle:Panier:panier.html.twig */
class __TwigTemplate_944c23825a508c6712e008f187b2c6242f5f747ba8513aca7a5e29967dda4445 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout2.html.twig", "JeuArticleBundle:Panier:panier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jeu_article_body' => array($this, 'block_jeu_article_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuArticleBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Panier:panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Panier:panier.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Panier - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_jeu_article_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jeu_article_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jeu_article_body"));

        // line 10
        echo "
<h2>Votre panier</h2>

  ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 55
        echo "  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo " 
\t  ";
        // line 17
        echo "\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 17, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t</div>\t
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t<table class=\"table table-striped table-hover text-center\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"text-center\">Nom du jeu</th>
\t\t\t\t<th class=\"text-center\">Prix HT</th>
\t\t\t\t<th class=\"text-center\">Supprimer</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 31
        if ((twig_length_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 31, $this->source); })())) == 0)) {
            // line 32
            echo "\t\t<tr><td colspan=\"3\" class=\"text-center\">Aucun article dans votre panier</td></tr>
\t\t";
        }
        // line 34
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 35
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", array()), "html", null, true);
            echo " €</td>
\t\t\t\t<td> <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_supprimer_panier", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"glyphicon glyphicon-trash\"></i></a></td>
\t\t\t</tr>
\t\t\t";
            // line 40
            $context["totalHT"] = ((isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 40, $this->source); })()) + twig_get_attribute($this->env, $this->source, $context["article"], "prix", array()));
            // line 41
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t</tbody>
\t</table><hr>
\t";
        // line 44
        if ((twig_length_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 44, $this->source); })())) != 0)) {
            // line 45
            echo "\t\t<dl class=\"dl-horizontal pull-right\">
\t\t\t\t\t<dt>Total HT </dt><dd>";
            // line 46
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 46, $this->source); })()), "html", null, true);
            echo " €</dd>
\t\t\t\t\t<dt>TVA 20% </dt><dd>";
            // line 47
            echo twig_escape_filter($this->env, ((isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 47, $this->source); })()) * 0.2), "html", null, true);
            echo " €</dd>
\t\t\t\t\t<dt>Total TTC</dt><dd>";
            // line 48
            echo twig_escape_filter($this->env, ((isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 48, $this->source); })()) * 1.2), "html", null, true);
            echo " €</dd>
\t\t</dl>
\t\t<div class=\"clearfix\"></div>
\t\t<a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_livraison");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
\t";
        }
        // line 53
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Panier:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 53,  195 => 51,  189 => 48,  185 => 47,  181 => 46,  178 => 45,  176 => 44,  172 => 42,  166 => 41,  164 => 40,  159 => 38,  155 => 37,  151 => 36,  148 => 35,  143 => 34,  139 => 32,  137 => 31,  126 => 22,  117 => 19,  114 => 18,  109 => 17,  98 => 13,  87 => 55,  85 => 13,  80 => 10,  71 => 9,  58 => 6,  49 => 5,  39 => 1,  37 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JeuArticleBundle::layout2.html.twig\" %}

{% set totalHT = 0 %}

{% block title %}
  Panier - {{ parent() }}
{% endblock %}

{% block jeu_article_body %}

<h2>Votre panier</h2>

  {% block fos_user_content %} 
\t  {#% if articles is defined %}
\t  {{ dump(articles) }}
\t  {% endif %#}
\t  {% for flashMessage in app.session.flashbag.get('success') %}
\t\t<div class=\"alert alert-success\">
\t\t\t{{ flashMessage }}
\t\t</div>\t
\t  {% endfor %}
\t<table class=\"table table-striped table-hover text-center\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"text-center\">Nom du jeu</th>
\t\t\t\t<th class=\"text-center\">Prix HT</th>
\t\t\t\t<th class=\"text-center\">Supprimer</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t{% if articles|length == 0 %}
\t\t<tr><td colspan=\"3\" class=\"text-center\">Aucun article dans votre panier</td></tr>
\t\t{% endif %}
\t\t{% for article in articles %}
\t\t\t<tr>
\t\t\t\t<td>{{ article.titre }}</td>
\t\t\t\t<td>{{ article.prix }} €</td>
\t\t\t\t<td> <a href=\"{{ path('jeu_article_supprimer_panier', {'id': article.id}) }}\" ><i class=\"glyphicon glyphicon-trash\"></i></a></td>
\t\t\t</tr>
\t\t\t{% set totalHT = totalHT + article.prix %}
\t\t{% endfor %}
\t\t</tbody>
\t</table><hr>
\t{% if articles|length != 0 %}
\t\t<dl class=\"dl-horizontal pull-right\">
\t\t\t\t\t<dt>Total HT </dt><dd>{{ totalHT }} €</dd>
\t\t\t\t\t<dt>TVA 20% </dt><dd>{{ totalHT*0.2 }} €</dd>
\t\t\t\t\t<dt>Total TTC</dt><dd>{{ totalHT*1.2 }} €</dd>
\t\t</dl>
\t\t<div class=\"clearfix\"></div>
\t\t<a href=\"{{ path('jeu_article_livraison') }}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
\t{% endif %}
\t<a href=\"{{ path('jeu_article_homepage') }}\" class=\"btn btn-primary\">Continuer mes achats</a>
  {% endblock fos_user_content %}
  
{% endblock %}




", "JeuArticleBundle:Panier:panier.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Panier/panier.html.twig");
    }
}
