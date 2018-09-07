<?php

/* @JeuArticle/Administration/PublicJeu/index.html.twig */
class __TwigTemplate_210db8e5c1e92b650233e7986cb349cd52fad939fa58de7b6ea8fa45a4111121 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuArticle/Administration/PublicJeu/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Administration/PublicJeu/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Administration/PublicJeu/index.html.twig"));

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
        <h2 class=\"centre ind\">Liste des publics</h2>
    </div>
    <div class=\"centre\">
\t\t<table>
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublic_show", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "name", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublic_show", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">voir</a> / 
\t\t\t\t\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublic_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">editer</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublic_new");
        echo "\" class=\"bouton2\">Ajouter un
\t\t\t\t\tpublic</a>
\t\t\t</li>
\t\t</ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeuArticle/Administration/PublicJeu/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  101 => 28,  91 => 24,  87 => 23,  82 => 21,  75 => 19,  72 => 18,  68 => 17,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutAdmin.html.twig' %}

{% block body %}
    <div>
        <h2 class=\"centre ind\">Liste des publics</h2>
    </div>
    <div class=\"centre\">
\t\t<table>
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t{% for entity in entities %}
\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"{{ path('adminPublic_show', { 'id': entity.id }) }}\">{{ entity.id }}</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>{{ entity.name }}</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"{{ path('adminPublic_show', { 'id': entity.id }) }}\">voir</a> / 
\t\t\t\t\t\t<a href=\"{{ path('adminPublic_edit', { 'id': entity.id }) }}\">editer</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t{% endfor %}
\t\t\t</tbody>
\t\t</table>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('adminPublic_new') }}\" class=\"bouton2\">Ajouter un
\t\t\t\t\tpublic</a>
\t\t\t</li>
\t\t</ul>
    </div>
{% endblock %}", "@JeuArticle/Administration/PublicJeu/index.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Administration\\PublicJeu\\index.html.twig");
    }
}
