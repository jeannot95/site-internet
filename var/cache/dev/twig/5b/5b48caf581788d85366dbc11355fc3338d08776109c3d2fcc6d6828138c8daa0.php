<?php

/* @JeuArticle/Article/meilleur.html.twig */
class __TwigTemplate_22ad88bde8af0328d4ecd234915aba871066f36dc4182aec891ef568d8eeebcf extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout.html.twig", "@JeuArticle/Article/meilleur.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Article/meilleur.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Article/meilleur.html.twig"));

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
        echo "  TOP VENTES - ";
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
        $context["tour"] = 0;
        // line 9
        echo "  <h2>TOP VENTES</h2>
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["total"]) || array_key_exists("total", $context) ? $context["total"] : (function () { throw new Twig_Error_Runtime('Variable "total" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["id"] => $context["ref"]) {
            // line 11
            echo "\t\t\t";
            if (((isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new Twig_Error_Runtime('Variable "tour" does not exist.', 11, $this->source); })()) < 5)) {
                // line 12
                echo "\t\t\t\t<div>
\t\t\t\t";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["arts"]) || array_key_exists("arts", $context) ? $context["arts"] : (function () { throw new Twig_Error_Runtime('Variable "arts" does not exist.', 13, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 14
                    echo "\t\t\t\t\t";
                    if ((twig_get_attribute($this->env, $this->source, $context["ref"], 2, array(), "array") == twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))) {
                        // line 15
                        echo "\t\t\t\t\t<div class=\"flex3 mar\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<img src=\"";
                        // line 17
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "image", array()), "webPath", array())), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "image", array()), "alt", array()), "html", null, true);
                        echo "\" width=\"160\" height=\"160\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pad\">\t
\t\t\t\t\t\t\t<a href=\"";
                        // line 20
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_view", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
                        echo "\" class=\"ind size\">
\t\t\t\t\t\t\t\t";
                        // line 21
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", array()), "html", null, true);
                        echo " 
\t\t\t\t\t\t\t</a><em>sorti le ";
                        // line 22
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateDeSortie", array()), "d/m/Y"), "html", null, true);
                        echo "</em> 
\t\t\t\t\t\t\t<br> 
\t\t\t\t
\t\t\t\t\t\t\t";
                        // line 25
                        $context["notes"] = "Pas encore de note !";
                        // line 26
                        echo "\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable((isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new Twig_Error_Runtime('Variable "note" does not exist.', 26, $this->source); })()));
                        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                            echo " 
\t\t\t\t\t\t\t\t";
                            // line 27
                            if ((twig_get_attribute($this->env, $this->source, $context["n"], "titre", array()) == twig_get_attribute($this->env, $this->source, $context["article"], "titre", array()))) {
                                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t ";
                                // line 28
                                $context["notes"] = "";
                                // line 29
                                echo "\t\t\t\t\t\t\t\t\t<div class=\"star-ratings-css\" title=\"";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "moyenne", array()), "html", null, true);
                                echo "/5\">
\t\t\t\t\t\t\t\t\t<div class=\"star-ratings-css-top\" style=\"width: ";
                                // line 30
                                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["n"], "moyenne", array()) * 20), "html", null, true);
                                echo "%\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"star-ratings-css-bottom\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                            }
                            // line 33
                            echo " \t\t\t\t
\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 35
                        echo "\t\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, (isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new Twig_Error_Runtime('Variable "notes" does not exist.', 35, $this->source); })()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<img src=\"";
                        // line 37
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/people.png"), "html", null, true);
                        echo "\" width=\"20\" class=\"pad\">  ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbJoueurMin", array()), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbJoueurMax", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t<img src=\"";
                        // line 38
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/age3.png"), "html", null, true);
                        echo "\" width=\"20\" class=\"pad\">  ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ageMin", array()), "html", null, true);
                        echo "-";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ageMax", array()), "html", null, true);
                        echo "
\t\t\t\t\t\t\t<img src=\"";
                        // line 39
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/minutes.png"), "html", null, true);
                        echo "\" width=\"20\" class=\"pad\">  ";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "duree", array()), "html", null, true);
                        echo " '<br><br>
\t\t\t\t\t\t\t<span class=\"ind orange\">Catégories </span>: ";
                        // line 40
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "categories", array()));
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
                                echo ",";
                            } else {
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", array()), "html", null, true);
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
                        echo "<br>
\t\t\t\t\t\t\t<span class=\"ind orange\">Public concerné</span> : ";
                        // line 41
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "publicJeu", array()), "name", array()), "html", null, true);
                        echo "<br>
\t\t\t\t\t\t\t<span class=\"ind orange size2\">";
                        // line 42
                        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["article"], "prix", array()) * 1.2), "html", null, true);
                        echo " €</span><br>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<hr>\t\t\t\t\t\t
\t\t\t\t\t";
                    }
                    // line 47
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "\t
\t\t\t\t</div>
\t\t\t";
            }
            // line 49
            echo "\t
\t\t\t";
            // line 50
            $context["tour"] = ((isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new Twig_Error_Runtime('Variable "tour" does not exist.', 50, $this->source); })()) + 1);
            echo "\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['ref'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeuArticle/Article/meilleur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 51,  248 => 50,  245 => 49,  235 => 47,  227 => 42,  223 => 41,  186 => 40,  180 => 39,  172 => 38,  164 => 37,  158 => 35,  151 => 33,  144 => 30,  139 => 29,  137 => 28,  133 => 27,  126 => 26,  124 => 25,  118 => 22,  114 => 21,  110 => 20,  102 => 17,  98 => 15,  95 => 14,  91 => 13,  88 => 12,  85 => 11,  81 => 10,  78 => 9,  76 => 8,  67 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JeuArticleBundle::layout.html.twig\" %}

{% block title %}
  TOP VENTES - {{ parent() }}
{% endblock %}

{% block jeu_article_body %}
{% set tour = 0 %}
  <h2>TOP VENTES</h2>
\t\t{% for id,ref in total %}
\t\t\t{% if tour < 5 %}
\t\t\t\t<div>
\t\t\t\t{% for article in arts %}
\t\t\t\t\t{% if ref[2] == article.id  %}
\t\t\t\t\t<div class=\"flex3 mar\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<img src=\"{{ asset(article.image.webPath) }}\" alt=\"{{ article.image.alt }}\" width=\"160\" height=\"160\">
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"pad\">\t
\t\t\t\t\t\t\t<a href=\"{{ path('jeu_article_view', {'id': article.id}) }}\" class=\"ind size\">
\t\t\t\t\t\t\t\t{{ article.titre }} 
\t\t\t\t\t\t\t</a><em>sorti le {{ article.dateDeSortie|date('d/m/Y') }}</em> 
\t\t\t\t\t\t\t<br> 
\t\t\t\t
\t\t\t\t\t\t\t{% set notes = 'Pas encore de note !' %}
\t\t\t\t\t\t\t{% for n in note %} 
\t\t\t\t\t\t\t\t{% if n.titre == article.titre %}\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t {% set notes = '' %}
\t\t\t\t\t\t\t\t\t<div class=\"star-ratings-css\" title=\"{{ n.moyenne }}/5\">
\t\t\t\t\t\t\t\t\t<div class=\"star-ratings-css-top\" style=\"width: {{ n.moyenne * 20 }}%\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t\t\t\t\t<div class=\"star-ratings-css-bottom\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t{% endif %} \t\t\t\t
\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t{{ notes }}
\t\t\t\t\t\t\t<br>
\t\t\t\t\t\t\t<img src=\"{{ asset('img/people.png')}}\" width=\"20\" class=\"pad\">  {{ article.nbJoueurMin }}-{{ article.nbJoueurMax }}
\t\t\t\t\t\t\t<img src=\"{{ asset('img/age3.png')}}\" width=\"20\" class=\"pad\">  {{ article.ageMin }}-{{ article.ageMax }}
\t\t\t\t\t\t\t<img src=\"{{ asset('img/minutes.png')}}\" width=\"20\" class=\"pad\">  {{ article.duree }} '<br><br>
\t\t\t\t\t\t\t<span class=\"ind orange\">Catégories </span>: {% for cat in article.categories %}{% if not loop.last %}{{ cat.name }},{% else %}{{ cat.name }}{% endif %}{% endfor %}<br>
\t\t\t\t\t\t\t<span class=\"ind orange\">Public concerné</span> : {{ article.publicJeu.name }}<br>
\t\t\t\t\t\t\t<span class=\"ind orange size2\">{{article.prix * 1.2}} €</span><br>
\t\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t<hr>\t\t\t\t\t\t
\t\t\t\t\t{% endif %}
\t\t\t\t{% endfor %}\t
\t\t\t\t</div>
\t\t\t{% endif %}\t
\t\t\t{% set tour = tour + 1 %}\t
\t\t{% endfor %}\t\t
{% endblock %}", "@JeuArticle/Article/meilleur.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Article\\meilleur.html.twig");
    }
}
