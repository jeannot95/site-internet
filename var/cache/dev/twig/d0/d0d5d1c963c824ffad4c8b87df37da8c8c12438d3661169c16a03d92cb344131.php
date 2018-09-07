<?php

/* @JeuArticle/Administration/Produits/show.html.twig */
class __TwigTemplate_39846b493820b335767efd6db961f90503d1a398b2b72a71d6dab6f6b48a6c30 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuArticle/Administration/Produits/show.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Administration/Produits/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Administration/Produits/show.html.twig"));

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
                <h2 class=\"bordeau ind centre\">Details du Produit</h2>
    </div>
    <div>          
\t\t<div>
\t\t\t<figure>
\t\t\t\t<img  src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 10, $this->source); })()), "image", array()), "webPath", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 10, $this->source); })()), "image", array()), "alt", array()), "html", null, true);
        echo "\" width=\"400\">
\t\t\t</figure>
\t\t</div>                
\t\t<div>
\t\t\t<table>
\t\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 18, $this->source); })()), "id", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 22, $this->source); })()), "titre", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Description</th>
\t\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 26, $this->source); })()), "description", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 30, $this->source); })()), "prix", array()), "html", null, true);
        echo " €</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Catégories</th>
\t\t\t\t\t<td>";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 34, $this->source); })()), "categories", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", array()), "html", null, true);
                echo " ,";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", array()), "html", null, true);
                echo " ";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Public visé</th>
\t\t\t\t\t<td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 38, $this->source); })()), "publicJeu", array()), "name", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t <th>Age</th>
\t\t\t\t\t<td>Min : ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 42, $this->source); })()), "ageMin", array()), "html", null, true);
        echo " / Max : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 42, $this->source); })()), "ageMax", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t <th>Durée</th>
\t\t\t\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 46, $this->source); })()), "duree", array()), "html", null, true);
        echo " minutes</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t <th>Nombre de joueurs</th>
\t\t\t\t\t<td>Min:";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 50, $this->source); })()), "nbjoueurMin", array()), "html", null, true);
        echo " / Max:  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 50, $this->source); })()), "nbjoueurMax", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>\t\t\t\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t <th>Date de sortie</th>
\t\t\t\t\t<td>";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 54, $this->source); })()), "dateDeSortie", array()), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t <th>Date d'enregistrement</th>
\t\t\t\t\t<td>";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 58, $this->source); })()), "dateEnregistrement", array()), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>\t\t\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>                                
\t\t<nav>
\t\t\t<div>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_index");
        echo "\" class=\"bouton1\">Retour à la liste</a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_edit", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 69, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"bouton2\">Editer</a>
\t\t\t\t</p>
\t\t\t\t<p>";
        // line 71
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 71, $this->source); })()), 'form');
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
        return "@JeuArticle/Administration/Produits/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  205 => 71,  200 => 69,  194 => 66,  183 => 58,  176 => 54,  167 => 50,  160 => 46,  151 => 42,  144 => 38,  102 => 34,  95 => 30,  88 => 26,  81 => 22,  74 => 18,  61 => 10,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutAdmin.html.twig' %}

{% block body -%}
    <div>
                <h2 class=\"bordeau ind centre\">Details du Produit</h2>
    </div>
    <div>          
\t\t<div>
\t\t\t<figure>
\t\t\t\t<img  src=\"{{ asset(entity.image.webPath) }}\" alt=\"{{ entity.image.alt }}\" width=\"400\">
\t\t\t</figure>
\t\t</div>                
\t\t<div>
\t\t\t<table>
\t\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<td>{{ entity.id }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t<td>{{ entity.titre }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Description</th>
\t\t\t\t\t<td>{{ entity.description }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t<td>{{ entity.prix }} €</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Catégories</th>
\t\t\t\t\t<td>{% for cat in entity.categories %}{% if not loop.last %}{{ cat.name }} ,{% else %} {{ cat.name }} {% endif %}{% endfor %}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Public visé</th>
\t\t\t\t\t<td>{{ entity.publicJeu.name }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t <th>Age</th>
\t\t\t\t\t<td>Min : {{ entity.ageMin }} / Max : {{ entity.ageMax }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t <th>Durée</th>
\t\t\t\t\t<td>{{ entity.duree }} minutes</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t <th>Nombre de joueurs</th>
\t\t\t\t\t<td>Min:{{ entity.nbjoueurMin }} / Max:  {{ entity.nbjoueurMax }}</td>
\t\t\t\t</tr>\t\t\t\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t <th>Date de sortie</th>
\t\t\t\t\t<td>{{ entity.dateDeSortie|date('d/m/Y') }}</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t <th>Date d'enregistrement</th>
\t\t\t\t\t<td>{{ entity.dateEnregistrement|date('d/m/Y') }}</td>
\t\t\t\t</tr>\t\t\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>                                
\t\t<nav>
\t\t\t<div>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"{{ path('adminProduits_index') }}\" class=\"bouton1\">Retour à la liste</a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"{{ path('adminProduits_edit', { 'id': entity.id }) }}\" class=\"bouton2\">Editer</a>
\t\t\t\t</p>
\t\t\t\t<p>{{ form(delete_form) }}</p>
\t\t\t</div>
\t\t</nav>        
    </div>
{% endblock %}", "@JeuArticle/Administration/Produits/show.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Administration\\Produits\\show.html.twig");
    }
}
