<?php

/* JeuUserBundle:Administration/Commandes:index.html.twig */
class __TwigTemplate_61db1b61bdc97fcb924051de5b56fe1969bf63abf9775942cbb805883a75a8d8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuUserBundle:Administration/Commandes:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuUserBundle:Administration/Commandes:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuUserBundle:Administration/Commandes:index.html.twig"));

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
\t\t<h2 class=\"orange centre ind\">Liste des Commandes</h2>
\t\t<span class=\"ind\">Nombres total de commandes :</span><span class=\"ind tomate\"> ";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new Twig_Error_Runtime('Variable "commandes" does not exist.', 6, $this->source); })())), "html", null, true);
        echo "</span>
    </div>
    <div class=\"centre\">
\t\t<table>
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Référence</th>
\t\t\t\t<th>Utilisateur</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new Twig_Error_Runtime('Variable "commandes" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 20
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "date", array()), "d-m-Y h:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "reference", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "user", array()), "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminShowFacture", array("id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">Voir Facture</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t</tbody>
\t\t</table>
    </div>
\t<br>
\t<div class=\"centre\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 35
        if ( !twig_test_empty((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new Twig_Error_Runtime('Variable "commandes" does not exist.', 35, $this->source); })()))) {
            // line 36
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbPages" does not exist.', 36, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 37
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCommande", array("page" => $context["p"])), "html", null, true);
                echo "\" ";
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 37, $this->source); })()))) {
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
            // line 39
            echo "\t\t\t";
        }
        // line 40
        echo "\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuUserBundle:Administration/Commandes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 40,  133 => 39,  118 => 37,  113 => 36,  111 => 35,  103 => 29,  93 => 25,  88 => 23,  84 => 22,  80 => 21,  77 => 20,  73 => 19,  57 => 6,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutAdmin.html.twig' %}

{% block body %}
    <div>
\t\t<h2 class=\"orange centre ind\">Liste des Commandes</h2>
\t\t<span class=\"ind\">Nombres total de commandes :</span><span class=\"ind tomate\"> {{ commandes|length }}</span>
    </div>
    <div class=\"centre\">
\t\t<table>
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Référence</th>
\t\t\t\t<th>Utilisateur</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t{% for commande in commandes %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ commande.date|date('d-m-Y h:i:s') }}</td>
\t\t\t\t\t<td>{{ commande.reference }}</td>
\t\t\t\t\t<td>{{ commande.user.username }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('adminShowFacture', { 'id' : commande.id }) }}\" target=\"_blank\">Voir Facture</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
    </div>
\t<br>
\t<div class=\"centre\">
\t\t<div class=\"pagination\">
\t\t\t{% if commandes is not empty %}
\t\t\t\t{% for p in range(1, nbPages) %}
\t\t\t\t\t<a href=\"{{ path('adminCommande', {'page': p}) }}\" {% if p == page %} class=\"active\"{% endif %}>{{ p }}</a>
\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t</div>
\t</div>
{% endblock %}", "JeuUserBundle:Administration/Commandes:index.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle/Resources/views/Administration/Commandes/index.html.twig");
    }
}
