<?php

/* @JeuArticle/Article/article.html.twig */
class __TwigTemplate_a56b785934d7e2dad9ac3a62e50de96580bb3f587eaa3652c8b665f11d315255 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout.html.twig", "@JeuArticle/Article/article.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jeu_article_body' => array($this, 'block_jeu_article_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuArticleBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Article/article.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Article/article.html.twig"));

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
        echo "  Accueil - ";
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
        $context["chemin"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->source); })()), "request", array()), "query", array()), "get", array(0 => "recherche"), "method");
        // line 9
        $context["chemin2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 9, $this->source); })()), "request", array()), "uri", array());
        // line 10
        $context["chemin3"] = twig_slice($this->env, (isset($context["chemin2"]) || array_key_exists("chemin2", $context) ? $context["chemin2"] : (function () { throw new Twig_Error_Runtime('Variable "chemin2" does not exist.', 10, $this->source); })()), 52, 150);
        // line 11
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 17
        echo "  <h2 class=\"ind\">Liste des jeux</h2>
\tNombre de résultats pour <strong>";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["resultat"]) || array_key_exists("resultat", $context) ? $context["resultat"] : (function () { throw new Twig_Error_Runtime('Variable "resultat" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "</strong> : ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 18, $this->source); })())), "html", null, true);
        echo " 
  <ul>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 20, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            echo "      <li>
        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_view", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
            echo "\">
          <span class=\"ind\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", array()), "html", null, true);
            echo "</span>
        </a>, 
        <em>date de sortie ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateDeSortie", array()), "d/m/Y"), "html", null, true);
            echo "</em>
\t\t<br>
\t\t<span class=\"ind2\">Catégories </span>: ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", array()), "html", null, true);
                echo ",";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t<br>
\t\t<span class=\"ind2\">Public concerné </span>: ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "publicJeu", array()), "name", array()), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "      <li>Pas (encore !) d'articles</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </ul>
  ";
        // line 43
        echo " 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeuArticle/Article/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 43,  145 => 34,  138 => 32,  130 => 29,  127 => 28,  117 => 27,  112 => 25,  107 => 23,  103 => 22,  100 => 21,  95 => 20,  88 => 18,  85 => 17,  83 => 12,  82 => 11,  80 => 10,  78 => 9,  76 => 8,  67 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JeuArticleBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

{% block jeu_article_body %}
{% set chemin = app.request.query.get(\"recherche\") %}
{% set chemin2 = app.request.uri %}
{% set chemin3 = chemin2|slice(52,150) %}
{% set currentPath = path(app.request.attributes.get('_route'),
                       app.request.attributes.get('_route_params')) %}
{#{ dump(chemin) }#}
{#{ dump(chemin2) }#}
{#{ dump(chemin3) }#}
{#{ dump(currentPath) }#}
  <h2 class=\"ind\">Liste des jeux</h2>
\tNombre de résultats pour <strong>{{ resultat }}</strong> : {{ articles|length }} 
  <ul>
    {% for article in articles %}
      <li>
        <a href=\"{{ path('jeu_article_view', {'id': article.id}) }}\">
          <span class=\"ind\">{{ article.titre }}</span>
        </a>, 
        <em>date de sortie {{ article.dateDeSortie|date('d/m/Y') }}</em>
\t\t<br>
\t\t<span class=\"ind2\">Catégories </span>: {% for cat in article.categories %}{{ cat.name }},{% endfor %}
\t\t<br>
\t\t<span class=\"ind2\">Public concerné </span>: {{ article.publicJeu.name }}
      </li>
    {% else %}
      <li>Pas (encore !) d'articles</li>
    {% endfor %}
  </ul>
  {#% if articles is not empty %}
  <ul class=\"pagination\">
    {% for p in range(1, nbPages) %}
      <li{% if p == page %} class=\"active\"{% endif %}>
        <a href=\"{{ chemin2 }}\">{{ p }}</a>
      </li>
    {% endfor %}
  </ul>
  {% endif %#} 
{% endblock %}
", "@JeuArticle/Article/article.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Article\\article.html.twig");
    }
}
