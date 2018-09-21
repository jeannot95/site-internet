<?php

/* JeuUserBundle:Administration/Utilisateurs:utilisateur.html.twig */
class __TwigTemplate_8ee136ed7cd696f5d74f83046636537390a37319c2390898c362a5e520a485bc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuUserBundle:Administration/Utilisateurs:utilisateur.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuUserBundle:Administration/Utilisateurs:utilisateur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuUserBundle:Administration/Utilisateurs:utilisateur.html.twig"));

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
\t\t<h2 class=\"centre orange ind\">Liste des Utilisateurs</h2>
\t\t<span class=\"ind\">Nombre d'utilisateur pour \"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new Twig_Error_Runtime('Variable "resultat" does not exist.', 6, $this->source); })()), "html", null, true);
        echo "\" : </span><span class=\"ind tomate\">";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateurs" does not exist.', 6, $this->source); })())), "html", null, true);
        echo "</span>
\t\t<div>
\t\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("JeuUserBundle:UserAdmin:recherche"));
        echo "
\t\t</div>
    </div>
    <div class=\"centre\">
\t\t<table>
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Actions</th>
\t\t\t\t";
        // line 17
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
            echo "<th>Editer</th>";
        }
        // line 18
        echo "\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateurs" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 22
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 25
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "adresses", array())) != 0)) {
                // line 26
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminAdressesUtilisateurs", array("id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", array()))), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t   title=\"Consulter les Adresses\">Adresses</a>&nbsp;&nbsp;
\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "commandes", array())) != 0)) {
                // line 30
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminFacturesUtilisateurs", array("id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", array()))), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t   title=\"Consulter les Factures\">Factures</a>
\t\t\t\t\t\t";
            }
            // line 33
            echo "\t\t\t\t\t</td>
\t\t\t\t\t";
            // line 34
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 35
                echo "\t\t\t\t\t\t<td>\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 36
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["utilisateur"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t";
                    if (!twig_in_filter("ROLE_SUPER_ADMIN", twig_get_attribute($this->env, $this->source, $context["utilisateur"], "roles", array()))) {
                        // line 38
                        echo "\t\t\t\t\t\t\t\t<a href=\" ";
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("editeUser", array("id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", array()))), "html", null, true);
                        echo " \">";
                        echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                        echo "</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 39
                    echo "\t
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "\t\t\t\t\t\t</td>
\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "\t\t\t</tbody>
\t\t</table>
    </div>
\t<br>
\t<a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminUtilisateurs_index");
        echo "\" class=\"bouton2\">Retour à la liste</a>
\t<div class=\"centre\">\t\t
\t\t<div class=\"pagination\">
\t\t\t";
        // line 52
        if ( !twig_test_empty((isset($context["utilisateurs"]) || array_key_exists("utilisateurs", $context) ? $context["utilisateurs"] : (function () { throw new Twig_Error_Runtime('Variable "utilisateurs" does not exist.', 52, $this->source); })()))) {
            // line 53
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbPages" does not exist.', 53, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 54
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminUtilisateurs_index", array("page" => $context["p"])), "html", null, true);
                echo "\" ";
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 54, $this->source); })()))) {
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
            // line 56
            echo "\t\t\t";
        }
        // line 57
        echo "\t\t</div>
\t</div>\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuUserBundle:Administration/Utilisateurs:utilisateur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 57,  192 => 56,  177 => 54,  172 => 53,  170 => 52,  164 => 49,  158 => 45,  150 => 42,  146 => 41,  139 => 39,  131 => 38,  128 => 37,  124 => 36,  121 => 35,  119 => 34,  116 => 33,  109 => 30,  106 => 29,  99 => 26,  97 => 25,  92 => 23,  89 => 22,  85 => 21,  80 => 18,  76 => 17,  64 => 8,  57 => 6,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutAdmin.html.twig' %}

{% block body %}
    <div>
\t\t<h2 class=\"centre orange ind\">Liste des Utilisateurs</h2>
\t\t<span class=\"ind\">Nombre d'utilisateur pour \"{{ resultat }}\" : </span><span class=\"ind tomate\">{{ utilisateurs|length }}</span>
\t\t<div>
\t\t\t{{ render(controller('JeuUserBundle:UserAdmin:recherche')) }}
\t\t</div>
    </div>
    <div class=\"centre\">
\t\t<table>
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Actions</th>
\t\t\t\t{% if is_granted(\"ROLE_SUPER_ADMIN\") %}<th>Editer</th>{% endif %}
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t{% for utilisateur in utilisateurs %}
\t\t\t\t<tr>
\t\t\t\t\t<td>{{ utilisateur.username }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t{% if utilisateur.adresses|length != 0 %}
\t\t\t\t\t\t\t<a href=\"{{ path('adminAdressesUtilisateurs', { 'id': utilisateur.id }) }}\"
\t\t\t\t\t\t\t   title=\"Consulter les Adresses\">Adresses</a>&nbsp;&nbsp;
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t{% if utilisateur.commandes|length != 0 %}
\t\t\t\t\t\t\t<a href=\"{{ path('adminFacturesUtilisateurs', { 'id': utilisateur.id }) }}\"
\t\t\t\t\t\t\t   title=\"Consulter les Factures\">Factures</a>
\t\t\t\t\t\t{% endif %}
\t\t\t\t\t</td>
\t\t\t\t\t{% if is_granted(\"ROLE_SUPER_ADMIN\") %}
\t\t\t\t\t\t<td>\t\t\t\t\t\t
\t\t\t\t\t\t\t{% for role in utilisateur.roles %}
\t\t\t\t\t\t\t\t{% if \"ROLE_SUPER_ADMIN\" not in utilisateur.roles %}
\t\t\t\t\t\t\t\t<a href=\" {{ path('editeUser',{ 'id': utilisateur.id }) }} \">{{ role }}</a>
\t\t\t\t\t\t\t\t{% endif %}\t
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t</td>
\t\t\t\t\t{% endif %}\t\t\t\t\t
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
    </div>
\t<br>
\t<a href=\"{{ path('adminUtilisateurs_index') }}\" class=\"bouton2\">Retour à la liste</a>
\t<div class=\"centre\">\t\t
\t\t<div class=\"pagination\">
\t\t\t{% if utilisateurs is not empty %}
\t\t\t\t{% for p in range(1, nbPages) %}
\t\t\t\t\t<a href=\"{{ path('adminUtilisateurs_index', {'page': p}) }}\" {% if p == page %} class=\"active\"{% endif %}>{{ p }}</a>
\t\t\t\t{% endfor %}
\t\t\t{% endif %}
\t\t</div>
\t</div>\t
{% endblock %}", "JeuUserBundle:Administration/Utilisateurs:utilisateur.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle/Resources/views/Administration/Utilisateurs/utilisateur.html.twig");
    }
}
