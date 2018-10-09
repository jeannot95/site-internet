<?php

/* JeuArticleBundle:Article:index.html.twig */
class __TwigTemplate_f1f0b8d469f308ab3083d5e298579bf29bbf654678bf4adc143ddf84d26b22a5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout.html.twig", "JeuArticleBundle:Article:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jeu_article_body' => array($this, 'block_jeu_article_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuArticleBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Article:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Article:index.html.twig"));

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
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slider.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_jeu_article_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jeu_article_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jeu_article_body"));

        // line 13
        echo "<h2>Dernières nouveautés</h2>
<div id=\"slider\">
  <a href=\"#\" class=\"control_next\">></a>
  <a href=\"#\" class=\"control_prev\"><</a>
  <ul>
   ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts2"]) || array_key_exists("listAdverts2", $context) ? $context["listAdverts2"] : (function () { throw new Twig_Error_Runtime('Variable "listAdverts2" does not exist.', 18, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 19
            echo "    
\t";
            // line 20
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["advert"], "image", array()))) {
                // line 21
                echo "\t\t<li><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_view", array("id" => twig_get_attribute($this->env, $this->source, $context["advert"], "id", array()))), "html", null, true);
                echo "\" >
\t\t<img src=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["advert"], "image", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["advert"], "image", array()), "alt", array()), "html", null, true);
                echo "\" width=\"100%\" height=\"100%\" style=\"object-fit:contain\"></a> 
          <h3>";
                // line 23
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["advert"], "titre", array()), "html", null, true);
                echo "</h3>
        </li>
\t";
            }
            // line 26
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo " 
  </ul> 
\t 
</div>
  <h2 class=\"ind\">Liste des jeux</h2>

    ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 32, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 33
            echo "\t\t<div class=\"flex3 mar\">
\t\t\t<div>
\t\t\t\t";
            // line 35
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["article"], "image", array()))) {
                // line 36
                echo "\t\t\t\t\t<img
\t\t\t\t\tsrc=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "image", array()), "webPath", array())), "html", null, true);
                echo "\"
\t\t\t\t\talt=\"";
                // line 38
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\"
\t\t\t\t\twidth=\"160\" height=\"160\">
\t\t\t\t";
            }
            // line 41
            echo "\t\t\t</div>
\t\t\t<div class=\"pad\">\t
\t\t\t\t<a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_view", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"ind size\">
\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", array()), "html", null, true);
            echo " 
\t\t\t\t</a><em>sorti le ";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateDeSortie", array()), "d/m/Y"), "html", null, true);
            echo "</em> 
\t\t\t\t <br> 
\t\t\t\t
\t\t\t\t";
            // line 48
            $context["notes"] = "Pas encore de note !";
            // line 49
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new Twig_Error_Runtime('Variable "note" does not exist.', 49, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                echo " 
\t\t\t\t\t";
                // line 50
                if ((twig_get_attribute($this->env, $this->source, $context["n"], "titre", array()) == twig_get_attribute($this->env, $this->source, $context["article"], "titre", array()))) {
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 51
                    echo " ";
                    $context["notes"] = "";
                    // line 52
                    echo "\t\t\t\t\t<div class=\"star-ratings-css\" title=\"";
                    echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "moyenne", array()), 0, 3), "html", null, true);
                    echo "/5\">
\t\t\t\t\t  <div class=\"star-ratings-css-top\" style=\"width: ";
                    // line 53
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["n"], "moyenne", array()) * 20), "html", null, true);
                    echo "%\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t  <div class=\"star-ratings-css-bottom\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 56
                echo " \t\t\t\t
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new Twig_Error_Runtime('Variable "notes" does not exist.', 58, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t<br>
\t\t\t\t<span title=\"de ";
            // line 60
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbJoueurMin", array()), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbJoueurMax", array()), "html", null, true);
            echo " joueurs\">
\t\t\t\t<img src=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/people.png"), "html", null, true);
            echo "\" width=\"20\" class=\"pad\">  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbJoueurMin", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbJoueurMax", array()), "html", null, true);
            echo "</span>
\t\t\t\t<span title=\"de ";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ageMin", array()), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ageMax", array()), "html", null, true);
            echo " ans\">
\t\t\t\t<img src=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/age3.png"), "html", null, true);
            echo "\" width=\"20\" class=\"pad\">  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ageMin", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ageMax", array()), "html", null, true);
            echo "
\t\t\t\t<span title=\"Durée moyenne d'une partie : ";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "duree", array()), "html", null, true);
            echo " minutes\">
\t\t\t\t<img src=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/minutes.png"), "html", null, true);
            echo "\" width=\"20\" class=\"pad\">  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "duree", array()), "html", null, true);
            echo " '<br><br>
\t\t\t\t<span class=\"ind orange\">Catégories </span>: ";
            // line 66
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
\t\t\t\t<span class=\"ind orange\">Public concerné</span> : ";
            // line 67
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "publicJeu", array()), "name", array()), "html", null, true);
            echo "<br>
\t\t\t\t<span class=\"ind orange size2\">";
            // line 68
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["article"], "prix", array()) * 1.2), "html", null, true);
            echo " € T.T.C</span><br>
\t\t\t</div>
\t\t</div>
\t\t<hr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 73
            echo "      Pas (encore !) d'articles
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo " ";
        // line 76
        echo "  ";
        if ( !twig_test_empty((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 76, $this->source); })()))) {
            // line 77
            echo "  <br>
  <div class=\"centre\">
\t  <div class=\"pagination\">
\t\t";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbPages" does not exist.', 80, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 81
                echo "\t\t  ";
                // line 82
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage", array("page" => $context["p"])), "html", null, true);
                echo "\" ";
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 82, $this->source); })()))) {
                    echo " class=\"active\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a>
\t\t ";
                // line 84
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "\t  </div>
  </div>
  ";
        }
        // line 87
        echo " 
  <br>
  <hr>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 92
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script src=\"http://code.jquery.com/jquery-1.12.4.js\"></script>
<script>
jQuery(document).ready(function (\$) {

\t setInterval(function () {
        moveRight();
    }, 4000); 
\tvar slideCount = \$('#slider ul li').length;
\tvar slideWidth = \$('#slider ul li').width();
\tvar slideHeight = \$('#slider ul li').height();
\tvar sliderUlWidth = slideCount * slideWidth;
\t
\t\$('#slider').css({ width: slideWidth, height: slideHeight });
\t
\t\$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
\t
    \$('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        \$('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            \$('#slider ul li:last-child').prependTo('#slider ul');
            \$('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        \$('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            \$('#slider ul li:first-child').appendTo('#slider ul');
            \$('#slider ul').css('left', '');
        });
    };

    \$('a.control_prev').click(function () {
        moveLeft();
    });

    \$('a.control_next').click(function () {
        moveRight();
    });

}); 
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  389 => 92,  380 => 91,  367 => 87,  362 => 85,  356 => 84,  345 => 82,  343 => 81,  339 => 80,  334 => 77,  331 => 76,  329 => 75,  322 => 73,  312 => 68,  308 => 67,  271 => 66,  265 => 65,  261 => 64,  253 => 63,  247 => 62,  239 => 61,  233 => 60,  227 => 58,  220 => 56,  213 => 53,  208 => 52,  205 => 51,  201 => 50,  194 => 49,  192 => 48,  186 => 45,  182 => 44,  178 => 43,  174 => 41,  168 => 38,  164 => 37,  161 => 36,  159 => 35,  155 => 33,  150 => 32,  137 => 26,  131 => 23,  125 => 22,  120 => 21,  118 => 20,  115 => 19,  111 => 18,  104 => 13,  95 => 12,  83 => 9,  78 => 8,  69 => 7,  56 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JeuArticleBundle::layout.html.twig\" %}

{% block title %}
  Accueil - {{ parent() }}
{% endblock %}

    {% block stylesheets %}
\t\t{{ parent() }}
\t  <link rel=\"stylesheet\" href=\"{{ asset('css/slider.css') }}\">
    {% endblock %}

{% block jeu_article_body %}
<h2>Dernières nouveautés</h2>
<div id=\"slider\">
  <a href=\"#\" class=\"control_next\">></a>
  <a href=\"#\" class=\"control_prev\"><</a>
  <ul>
   {% for advert in listAdverts2 %}
    
\t{% if advert.image is not null %}
\t\t<li><a href=\"{{ path('jeu_article_view', {'id': advert.id}) }}\" >
\t\t<img src=\"{{ asset(advert.image.webPath) }}\" alt=\"{{ advert.image.alt }}\" width=\"100%\" height=\"100%\" style=\"object-fit:contain\"></a> 
          <h3>{{ advert.titre }}</h3>
        </li>
\t{% endif %}
\t{% endfor %} 
  </ul> 
\t 
</div>
  <h2 class=\"ind\">Liste des jeux</h2>

    {% for article in articles %}
\t\t<div class=\"flex3 mar\">
\t\t\t<div>
\t\t\t\t{% if article.image is not null %}
\t\t\t\t\t<img
\t\t\t\t\tsrc=\"{{ asset(article.image.webPath) }}\"
\t\t\t\t\talt=\"{{ article.image.alt }}\"
\t\t\t\t\twidth=\"160\" height=\"160\">
\t\t\t\t{% endif %}
\t\t\t</div>
\t\t\t<div class=\"pad\">\t
\t\t\t\t<a href=\"{{ path('jeu_article_view', {'id': article.id}) }}\" class=\"ind size\">
\t\t\t\t{{ article.titre }} 
\t\t\t\t</a><em>sorti le {{ article.dateDeSortie|date('d/m/Y') }}</em> 
\t\t\t\t <br> 
\t\t\t\t
\t\t\t\t{% set notes = 'Pas encore de note !' %}
\t\t\t\t{% for n in note %} 
\t\t\t\t\t{% if n.titre == article.titre %}\t\t\t\t\t\t
\t\t\t\t\t\t\t{#{ n.moyenne }#} {% set notes = '' %}
\t\t\t\t\t<div class=\"star-ratings-css\" title=\"{{ n.moyenne|slice(0,3) }}/5\">
\t\t\t\t\t  <div class=\"star-ratings-css-top\" style=\"width: {{ n.moyenne * 20 }}%\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t  <div class=\"star-ratings-css-bottom\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %} \t\t\t\t
\t\t\t\t{% endfor %}
\t\t\t\t{{ notes }}
\t\t\t\t<br>
\t\t\t\t<span title=\"de {{ article.nbJoueurMin }} à {{ article.nbJoueurMax }} joueurs\">
\t\t\t\t<img src=\"{{ asset('img/people.png')}}\" width=\"20\" class=\"pad\">  {{ article.nbJoueurMin }}-{{ article.nbJoueurMax }}</span>
\t\t\t\t<span title=\"de {{ article.ageMin }} à {{ article.ageMax }} ans\">
\t\t\t\t<img src=\"{{ asset('img/age3.png')}}\" width=\"20\" class=\"pad\">  {{ article.ageMin }}-{{ article.ageMax }}
\t\t\t\t<span title=\"Durée moyenne d'une partie : {{ article.duree }} minutes\">
\t\t\t\t<img src=\"{{ asset('img/minutes.png')}}\" width=\"20\" class=\"pad\">  {{ article.duree }} '<br><br>
\t\t\t\t<span class=\"ind orange\">Catégories </span>: {% for cat in article.categories %}{% if not loop.last %}{{ cat.name }},{% else %}{{ cat.name }}{% endif %}{% endfor %}<br>
\t\t\t\t<span class=\"ind orange\">Public concerné</span> : {{ article.publicJeu.name }}<br>
\t\t\t\t<span class=\"ind orange size2\">{{article.prix * 1.2}} € T.T.C</span><br>
\t\t\t</div>
\t\t</div>
\t\t<hr>
    {% else %}
      Pas (encore !) d'articles
    {% endfor %}
 {#{ dump(note) }#}
  {% if articles is not empty %}
  <br>
  <div class=\"centre\">
\t  <div class=\"pagination\">
\t\t{% for p in range(1, nbPages) %}
\t\t  {# <li{% if p == page %} class=\"active\"{% endif %} > #}
\t\t\t<a href=\"{{ path('jeu_article_homepage', {'page': p}) }}\" {% if p == page %} class=\"active\"{% endif %}>{{ p }}</a>
\t\t {# </li> #}
\t\t{% endfor %}
\t  </div>
  </div>
  {% endif %} 
  <br>
  <hr>
{% endblock %}
{% block javascripts %}
{{ parent() }}
<script src=\"http://code.jquery.com/jquery-1.12.4.js\"></script>
<script>
jQuery(document).ready(function (\$) {

\t setInterval(function () {
        moveRight();
    }, 4000); 
\tvar slideCount = \$('#slider ul li').length;
\tvar slideWidth = \$('#slider ul li').width();
\tvar slideHeight = \$('#slider ul li').height();
\tvar sliderUlWidth = slideCount * slideWidth;
\t
\t\$('#slider').css({ width: slideWidth, height: slideHeight });
\t
\t\$('#slider ul').css({ width: sliderUlWidth, marginLeft: - slideWidth });
\t
    \$('#slider ul li:last-child').prependTo('#slider ul');

    function moveLeft() {
        \$('#slider ul').animate({
            left: + slideWidth
        }, 200, function () {
            \$('#slider ul li:last-child').prependTo('#slider ul');
            \$('#slider ul').css('left', '');
        });
    };

    function moveRight() {
        \$('#slider ul').animate({
            left: - slideWidth
        }, 200, function () {
            \$('#slider ul li:first-child').appendTo('#slider ul');
            \$('#slider ul').css('left', '');
        });
    };

    \$('a.control_prev').click(function () {
        moveLeft();
    });

    \$('a.control_next').click(function () {
        moveRight();
    });

}); 
</script>
{% endblock %}
", "JeuArticleBundle:Article:index.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Article\\index.html.twig");
    }
}
