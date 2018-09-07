<?php

/* @JeuArticle/Administration/Statistiques/commande.html.twig */
class __TwigTemplate_69d51fd8b916c4944064931c041f03f6bb27e12587819a93c0d4c76707fa4b1a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuArticle/Administration/Statistiques/commande.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Administration/Statistiques/commande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Administration/Statistiques/commande.html.twig"));

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
        $context["tour"] = 0;
        // line 5
        echo "    <div>
        <h2 class=\"centre indr\">TOP 5 des Jeux les plus commandés</h2>
    </div>
\t<div class=\"centre\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>Rang</th>
\t\t\t\t<th>Titre</th>
\t\t\t\t<th>Nombre de commandes</th>
\t\t\t</tr>
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 15, $this->source); })()));
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
        foreach ($context['_seq'] as $context["id"] => $context["ref"]) {
            // line 16
            echo "\t\t\t\t";
            if (((isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new Twig_Error_Runtime('Variable "tour" does not exist.', 16, $this->source); })()) < 5)) {
                // line 17
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td> ";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ref"], 0, array(), "array"), "html", null, true);
                echo " </td>
\t\t\t\t\t\t<td> ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ref"], 1, array(), "array"), "html", null, true);
                echo " </td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 22
            echo "\t
\t\t\t\t";
            // line 23
            $context["tour"] = ((isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new Twig_Error_Runtime('Variable "tour" does not exist.', 23, $this->source); })()) + 1);
            echo "\t
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['ref'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</table>\t\t\t
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminStatistiques_index");
        echo "\" class=\"bouton1\">Retour à la liste des Statistiques</a>
\t\t\t</li><br>\t\t\t\t
\t\t</ul>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeuArticle/Administration/Statistiques/commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  123 => 25,  107 => 23,  104 => 22,  98 => 20,  94 => 19,  90 => 18,  87 => 17,  84 => 16,  67 => 15,  55 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutAdmin.html.twig' %}

{% block body %}
{% set tour = 0 %}
    <div>
        <h2 class=\"centre indr\">TOP 5 des Jeux les plus commandés</h2>
    </div>
\t<div class=\"centre\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>Rang</th>
\t\t\t\t<th>Titre</th>
\t\t\t\t<th>Nombre de commandes</th>
\t\t\t</tr>
\t\t\t{% for id,ref in total %}
\t\t\t\t{% if tour < 5 %}
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>{{ loop.index }}</td>
\t\t\t\t\t\t<td> {{ ref[0] }} </td>
\t\t\t\t\t\t<td> {{ ref[1] }} </td>
\t\t\t\t\t</tr>
\t\t\t\t{% endif %}\t
\t\t\t\t{% set tour = tour + 1 %}\t
\t\t\t{% endfor %}
\t\t</table>\t\t\t
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"{{ path('adminStatistiques_index') }}\" class=\"bouton1\">Retour à la liste des Statistiques</a>
\t\t\t</li><br>\t\t\t\t
\t\t</ul>
    </div>
{% endblock %}
", "@JeuArticle/Administration/Statistiques/commande.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Administration\\Statistiques\\commande.html.twig");
    }
}
