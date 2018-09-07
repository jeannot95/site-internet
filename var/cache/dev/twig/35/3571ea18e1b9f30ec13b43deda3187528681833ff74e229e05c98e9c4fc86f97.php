<?php

/* JeuArticleBundle:Panier:validation.html.twig */
class __TwigTemplate_d3840fb3edc0e391812d7d9a9b2c3e5f71c69f6c798b9361eebb346b41a6cd0e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout2.html.twig", "JeuArticleBundle:Panier:validation.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Panier:validation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Panier:validation.html.twig"));

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
        echo "  Validation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_jeu_article_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jeu_article_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jeu_article_body"));

        // line 8
        echo "
<h2>Validation</h2>

  ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 61
        echo "  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        echo " 
\t<table class=\"table table-striped table-hover text-center\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"text-center\">Nom du jeu</th>
\t\t\t\t<th class=\"text-center\">Prix HT</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 20, $this->source); })()), "commande", array()), "article", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "reference", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prixHT", array()), "html", null, true);
            echo " €</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t</tbody>
\t</table><hr>
\t\t<dl class=\"dl-horizontal pull-right\">
\t\t\t\t\t<dt>Total HT </dt><dd>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 29, $this->source); })()), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</dd>
\t\t\t\t\t<dt>TVA 20% </dt><dd>";
        // line 30
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 30, $this->source); })()), "commande", array()), "prixHT", array()) * 0.2), "html", null, true);
        echo " €</dd>
\t\t\t\t\t<dt>Total TTC</dt><dd>";
        // line 31
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 31, $this->source); })()), "commande", array()), "prixHT", array()) * 1.2), "html", null, true);
        echo " €</dd>
\t\t</dl>
\t
\t\t<div class=\"col-md-4 pull-left\">
\t\t\t<dl class=\"pull-left\">
\t\t\t\t<dt><h4>Adresse de livraison</h4></dt>
\t\t\t\t<dt>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 37, $this->source); })()), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 37, $this->source); })()), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo "</dt>
\t\t\t\t<dt>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 38, $this->source); })()), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</dt>
\t\t\t\t<dt>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 39, $this->source); })()), "commande", array()), "livraison", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 39, $this->source); })()), "commande", array()), "livraison", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 39, $this->source); })()), "commande", array()), "livraison", array()), "pays", array()), "html", null, true);
        echo "</dt>
\t\t\t</dl>
\t\t</div>
\t\t<div class=\"col-md-4 pull-left\">
\t\t\t<dl class=\"pull-left\">
\t\t\t\t<dt><h4>Adresse de facturation</h4></dt>
\t\t\t\t<dt>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 45, $this->source); })()), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 45, $this->source); })()), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo "</dt>
\t\t\t\t<dt>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 46, $this->source); })()), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</dt>
\t\t\t\t<dt>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 47, $this->source); })()), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 47, $this->source); })()), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 47, $this->source); })()), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</dt>
\t\t\t</dl>
\t\t</div>\t\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<form action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_user_validation_commande", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 52, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" method =\"POST\">
\t\t\t<input name=\"token\" type=\"hidden\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 53, $this->source); })()), "commande", array()), "token", array()), "html", null, true);
        echo "\">
\t\t\t<input name=\"prix\" type=\"hidden\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 54, $this->source); })()), "commande", array()), "prixTTC", array()), "html", null, true);
        echo "\">
\t\t\t<input name=\"date\" type=\"hidden\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 55, $this->source); })()), "date", array()), "dmy"), "html", null, true);
        echo "\">
\t\t\t<button type=\"submit\" class=\"btn btn-success pull-right\">Payer</button>
\t\t</form>
\t\t
\t<a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_livraison");
        echo "\" class=\"btn btn-primary\">Retour</a>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Panier:validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 59,  213 => 55,  209 => 54,  205 => 53,  201 => 52,  189 => 47,  185 => 46,  179 => 45,  166 => 39,  162 => 38,  156 => 37,  147 => 31,  143 => 30,  139 => 29,  134 => 26,  125 => 23,  121 => 22,  118 => 21,  114 => 20,  95 => 11,  84 => 61,  82 => 11,  77 => 8,  68 => 7,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JeuArticleBundle::layout2.html.twig\" %}

{% block title %}
  Validation - {{ parent() }}
{% endblock %}

{% block jeu_article_body %}

<h2>Validation</h2>

  {% block fos_user_content %} 
\t<table class=\"table table-striped table-hover text-center\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"text-center\">Nom du jeu</th>
\t\t\t\t<th class=\"text-center\">Prix HT</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t{% for article in commande.commande.article %}
\t\t\t<tr>
\t\t\t\t<td>{{ article.reference }}</td>
\t\t\t\t<td>{{ article.prixHT }} €</td>
\t\t\t</tr>
\t\t{% endfor %}
\t\t</tbody>
\t</table><hr>
\t\t<dl class=\"dl-horizontal pull-right\">
\t\t\t\t\t<dt>Total HT </dt><dd>{{ commande.commande.prixHT }} €</dd>
\t\t\t\t\t<dt>TVA 20% </dt><dd>{{ commande.commande.prixHT*0.2 }} €</dd>
\t\t\t\t\t<dt>Total TTC</dt><dd>{{ commande.commande.prixHT*1.2 }} €</dd>
\t\t</dl>
\t
\t\t<div class=\"col-md-4 pull-left\">
\t\t\t<dl class=\"pull-left\">
\t\t\t\t<dt><h4>Adresse de livraison</h4></dt>
\t\t\t\t<dt>{{ commande.commande.livraison.prenom }} {{ commande.commande.livraison.nom }}</dt>
\t\t\t\t<dt>{{ commande.commande.livraison.adresse }}</dt>
\t\t\t\t<dt>{{ commande.commande.livraison.cp }} {{ commande.commande.livraison.ville }} - {{ commande.commande.livraison.pays }}</dt>
\t\t\t</dl>
\t\t</div>
\t\t<div class=\"col-md-4 pull-left\">
\t\t\t<dl class=\"pull-left\">
\t\t\t\t<dt><h4>Adresse de facturation</h4></dt>
\t\t\t\t<dt>{{ commande.commande.facturation.prenom }} {{ commande.commande.facturation.nom }}</dt>
\t\t\t\t<dt>{{ commande.commande.facturation.adresse }}</dt>
\t\t\t\t<dt>{{ commande.commande.facturation.cp }} {{ commande.commande.facturation.ville }} - {{ commande.commande.facturation.pays }}</dt>
\t\t\t</dl>
\t\t</div>\t\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<form action=\"{{ path('jeu_user_validation_commande', { 'id' : commande.id }) }}\" method =\"POST\">
\t\t\t<input name=\"token\" type=\"hidden\" value=\"{{ commande.commande.token }}\">
\t\t\t<input name=\"prix\" type=\"hidden\" value=\"{{ commande.commande.prixTTC }}\">
\t\t\t<input name=\"date\" type=\"hidden\" value=\"{{ commande.date|date('dmy') }}\">
\t\t\t<button type=\"submit\" class=\"btn btn-success pull-right\">Payer</button>
\t\t</form>
\t\t
\t<a href=\"{{ path('jeu_article_livraison') }}\" class=\"btn btn-primary\">Retour</a>
  {% endblock fos_user_content %}
  
{% endblock %}", "JeuArticleBundle:Panier:validation.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Panier/validation.html.twig");
    }
}
