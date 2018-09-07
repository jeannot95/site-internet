<?php

/* @JeuArticle/Administration/Avis/show.html.twig */
class __TwigTemplate_d394d193a70f8fedcbd90b88ffc65f47129a4ed297e78b4a5997b35a6d157f3e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuArticle/Administration/Avis/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Administration/Avis/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Administration/Avis/show.html.twig"));

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
        echo "<div>
        <h2 class=\"ind bordeau\">Details de l'avis \"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 5, $this->source); })()), "titre", array()), "html", null, true);
        echo "\"</h2>
    </div>
\t<div style=\"overflow-x:auto;\"\">
\t\t\t<table class=\"centre\">
\t\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>titre</th>
\t\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 16, $this->source); })()), "titre", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Jeux</th>
\t\t\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 20, $this->source); })()), "article", array()), "titre", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>\t\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<th>auteur</th>
\t\t\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 24, $this->source); })()), "user", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>date</th>
\t\t\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 28, $this->source); })()), "date", array()), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>note</th>
\t\t\t\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 32, $this->source); })()), "note", array()), "html", null, true);
        echo "/5</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>contenu</th>
\t\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 36, $this->source); })()), "content", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<br>
\t\t\t<div>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminAvis_index");
        echo "\" class=\"bouton1\">Retour a la liste</a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 46, $this->source); })()), 'form');
        echo "
\t\t\t\t</p>
\t\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeuArticle/Administration/Avis/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 46,  118 => 43,  108 => 36,  101 => 32,  94 => 28,  87 => 24,  80 => 20,  73 => 16,  66 => 12,  56 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutAdmin.html.twig' %}

{% block body -%}
    <div>
        <h2 class=\"ind bordeau\">Details de l'avis \"{{ entity.titre }}\"</h2>
    </div>
\t<div style=\"overflow-x:auto;\"\">
\t\t\t<table class=\"centre\">
\t\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<td>{{ entity.id }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>titre</th>
\t\t\t\t\t<td>{{ entity.titre }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Jeux</th>
\t\t\t\t\t<td>{{ entity.article.titre }}</td>
\t\t\t\t</tr>\t\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<th>auteur</th>
\t\t\t\t\t<td>{{ entity.user }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>date</th>
\t\t\t\t\t<td>{{ entity.date|date('d/m/Y') }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>note</th>
\t\t\t\t\t<td>{{ entity.note }}/5</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>contenu</th>
\t\t\t\t\t<td>{{ entity.content }}</td>
\t\t\t\t</tr>\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<br>
\t\t\t<div>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"{{ path('adminAvis_index') }}\" class=\"bouton1\">Retour a la liste</a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t{{ form(delete_form) }}
\t\t\t\t</p>
\t\t\t</div>
\t</div>
{% endblock %}", "@JeuArticle/Administration/Avis/show.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Administration\\Avis\\show.html.twig");
    }
}
