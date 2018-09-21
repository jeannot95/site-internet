<?php

/* @JeuUser/Administration/Utilisateurs/factures.html.twig */
class __TwigTemplate_6f34bb356d655327ce731ea4fa8285776709be46592e877f3acd43a7324b4353 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuUser/Administration/Utilisateurs/factures.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuUser/Administration/Utilisateurs/factures.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuUser/Administration/Utilisateurs/factures.html.twig"));

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
        $context["util"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 4, $this->source); })()), "query", array()), "parameters", array()), 0, array(), "array"), "value", array());
        // line 5
        echo "   <div>
\t\t<h2 class=\"orange ind centre\">Liste des factures de l'utilisateur \"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["util"]) || array_key_exists("util", $context) ? $context["util"] : (function () { throw new Twig_Error_Runtime('Variable "util" does not exist.', 6, $this->source); })()), "username", array()), "html", null, true);
        echo "\"</h2>
    </div>
\t";
        // line 9
        echo "\t";
        // line 10
        echo "\t";
        // line 11
        echo "\t<span class=\"ind\">Nombre total de factures : </span><span class=\"ind tomate\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 11, $this->source); })())), "html", null, true);
        echo "</span>
    <div>
\t\t<table class=\"centre\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Références</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Prix TTC</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 23
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["util"]) || array_key_exists("util", $context) ? $context["util"] : (function () { throw new Twig_Error_Runtime('Variable "util" does not exist.', 23, $this->source); })()), "commandes", array())) == 0)) {
            // line 24
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>Aucune facture actuellement.</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 28
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateur" does not exist.', 28, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 29
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>ref : ";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "reference", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["facture"], "commande", array()), "prixTTC", array()), "html", null, true);
            echo " €</td>
\t\t\t\t\t<td><a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminShowFacture", array("id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">Voir</a></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<br>
\t\t<div class=\"centre\">
\t\t\t<div class=\"pagination\">
\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbPages" does not exist.', 41, $this->source); })())));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 42
            echo "\t\t\t\t\t<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminFacturesUtilisateurs", array("page" => $context["p"], "id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 42, $this->source); })()))), "html", null, true);
            echo "\" ";
            if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 42, $this->source); })()))) {
                echo " class=\"active\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "\t\t\t</div>
\t\t</div>
\t\t<p>
\t\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminUtilisateurs_index");
        echo "\" class=\"bouton1\">Retour à la liste</a>
\t\t</p>\t\t
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeuUser/Administration/Utilisateurs/factures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 47,  146 => 44,  131 => 42,  127 => 41,  120 => 36,  111 => 33,  107 => 32,  103 => 31,  99 => 30,  96 => 29,  91 => 28,  85 => 24,  83 => 23,  67 => 11,  65 => 10,  63 => 9,  58 => 6,  55 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutAdmin.html.twig' %}

{% block body %}
{% set util = utilisateur.query.parameters[0].value  %}
   <div>
\t\t<h2 class=\"orange ind centre\">Liste des factures de l'utilisateur \"{{ util.username}}\"</h2>
    </div>
\t{#{ dump(utilisateur) }#}
\t{#{ dump(utilisateur.query.parameters[0].value) }#}
\t{#{ dump(id) }#}
\t<span class=\"ind\">Nombre total de factures : </span><span class=\"ind tomate\">{{ utilisateur|length }}</span>
    <div>
\t\t<table class=\"centre\">
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Références</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Prix TTC</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t{% if util.commandes|length == 0 %}
\t\t\t\t<tr>
\t\t\t\t\t<td>Aucune facture actuellement.</td>
\t\t\t\t</tr>
\t\t\t{% endif %}
\t\t\t{% for facture in utilisateur %}
\t\t\t\t<tr>
\t\t\t\t\t<td>ref : {{ facture.reference }}</td>
\t\t\t\t\t<td>{{ facture.date|date('d/m/Y') }}</td>
\t\t\t\t\t<td>{{ facture.commande.prixTTC }} €</td>
\t\t\t\t\t<td><a href=\"{{ path('adminShowFacture', { 'id' : facture.id }) }}\" target=\"_blank\">Voir</a></td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t<br>
\t\t<div class=\"centre\">
\t\t\t<div class=\"pagination\">
\t\t\t\t{% for p in range(1, nbPages) %}
\t\t\t\t\t<a href=\"{{ path('adminFacturesUtilisateurs', {'page': p,'id': id}) }}\" {% if p == page %} class=\"active\"{% endif %}>{{ p }}</a>
\t\t\t\t{% endfor %}
\t\t\t</div>
\t\t</div>
\t\t<p>
\t\t\t<a href=\"{{ path('adminUtilisateurs_index') }}\" class=\"bouton1\">Retour à la liste</a>
\t\t</p>\t\t
    </div>
{% endblock %}", "@JeuUser/Administration/Utilisateurs/factures.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle\\Resources\\views\\Administration\\Utilisateurs\\factures.html.twig");
    }
}
