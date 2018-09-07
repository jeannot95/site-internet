<?php

/* @JeuArticle/Administration/Categories/index.html.twig */
class __TwigTemplate_49344a6848d601ff701368c72926a00226274201264650450fe3b1623a7e5fee extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuArticle/Administration/Categories/index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Administration/Categories/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Administration/Categories/index.html.twig"));

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
\t\t<h2 class=\"bordeau ind centre\">Liste des catégories</h2>
    </div>

    <div class=\"centre style=\"overflow-x:auto;\"\">
                <table>
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new Twig_Error_Runtime('Variable "entities" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                        <tr>
                            <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_show", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "html", null, true);
            echo "</a>
                            </td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "name", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_show", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">voir</a> / 
                                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">editer</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </tbody>
                </table>
\t\t\t\t<br>
                        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_new");
        echo "\" class=\"bouton2\">Ajouter une
                            categorie</a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeuArticle/Administration/Categories/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  102 => 29,  92 => 25,  88 => 24,  83 => 22,  76 => 20,  73 => 19,  69 => 18,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutAdmin.html.twig' %}

{% block body %}
    <div>
\t\t<h2 class=\"bordeau ind centre\">Liste des catégories</h2>
    </div>

    <div class=\"centre style=\"overflow-x:auto;\"\">
                <table>
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    {% for entity in entities %}
                        <tr>
                            <td><a href=\"{{ path('adminCategories_show', { 'id': entity.id }) }}\">{{ entity.id }}</a>
                            </td>
                            <td>{{ entity.name }}</td>
                            <td>
                                <a href=\"{{ path('adminCategories_show', { 'id': entity.id }) }}\">voir</a> / 
                                <a href=\"{{ path('adminCategories_edit', { 'id': entity.id }) }}\">editer</a>
                            </td>
                        </tr>
                    {% endfor %}
                    </tbody>
                </table>
\t\t\t\t<br>
                        <a href=\"{{ path('adminCategories_new') }}\" class=\"bouton2\">Ajouter une
                            categorie</a>
    </div>
{% endblock %}", "@JeuArticle/Administration/Categories/index.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Administration\\Categories\\index.html.twig");
    }
}
