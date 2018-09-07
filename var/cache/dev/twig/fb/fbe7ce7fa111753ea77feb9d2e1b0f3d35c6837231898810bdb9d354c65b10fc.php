<?php

/* @JeuPages/Administration/show.html.twig */
class __TwigTemplate_088375a06c37410ae4a93a53fa40ee2622b354987ebe6b901edcbf632734dc8e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuPages/Administration/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuPages/Administration/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuPages/Administration/show.html.twig"));

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
        <h2 class=\"centre ind\">Details de la page</h2>
    </div>
    <div>
\t\t<table>
\t\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 12, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Titre</th>
\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 16, $this->source); })()), "titre", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Contenu</th>
\t\t\t\t<td>";
        // line 20
        echo twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 20, $this->source); })()), "contenu", array());
        echo "</td>
\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<br />
\t\t<nav>
\t\t\t<div>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages");
        echo "\" class=\"bouton1\">Retour a la liste des pages</a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 31, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"bouton2\">Editer</a>
\t\t\t\t</p>
\t\t\t\t<p>";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 33, $this->source); })()), 'form');
        echo "</p>
\t\t\t</div>
\t\t</nav>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeuPages/Administration/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 33,  94 => 31,  88 => 28,  77 => 20,  70 => 16,  63 => 12,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutAdmin.html.twig' %}

{% block body %}
    <div>
        <h2 class=\"centre ind\">Details de la page</h2>
    </div>
    <div>
\t\t<table>
\t\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>{{ entity.id }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Titre</th>
\t\t\t\t<td>{{ entity.titre }}</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Contenu</th>
\t\t\t\t<td>{{ entity.contenu|raw }}</td>
\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<br />
\t\t<nav>
\t\t\t<div>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"{{ path('adminPages') }}\" class=\"bouton1\">Retour a la liste des pages</a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"{{ path('adminPages_edit', { 'id': entity.id }) }}\" class=\"bouton2\">Editer</a>
\t\t\t\t</p>
\t\t\t\t<p>{{ form(delete_form) }}</p>
\t\t\t</div>
\t\t</nav>
    </div>
{% endblock %}", "@JeuPages/Administration/show.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\PagesBundle\\Resources\\views\\Administration\\show.html.twig");
    }
}
