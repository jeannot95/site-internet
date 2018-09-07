<?php

/* @JeuArticle/Article/index.html.twig */
class __TwigTemplate_4b12805668014f66bcaee7565d85225caaab7f728ea0b39ac8d52b97f14c2f73 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout.html.twig", "@JeuArticle/Article/index.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_jeu_article_body($context, array $blocks = array())
    {
        // line 8
        echo "
  <h2 class=\"ind\">Liste des jeux</h2>

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 12
            echo "\t\t<div class=\"flex3 mar\">
\t\t\t<div>
\t\t\t\t";
            // line 14
            if ( !(null === twig_get_attribute($this->env, $this->source, $context["article"], "image", array()))) {
                // line 15
                echo "\t\t\t\t\t<img
\t\t\t\t\tsrc=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "image", array()), "webPath", array())), "html", null, true);
                echo "\"
\t\t\t\t\talt=\"";
                // line 17
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "image", array()), "alt", array()), "html", null, true);
                echo "\"
\t\t\t\t\twidth=\"160\" height=\"160\">
\t\t\t\t";
            }
            // line 20
            echo "\t\t\t</div>
\t\t\t<div class=\"pad\">\t
\t\t\t\t<a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_view", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
            echo "\" class=\"ind size\">
\t\t\t\t";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", array()), "html", null, true);
            echo " 
\t\t\t\t</a><em>sorti le ";
            // line 24
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateDeSortie", array()), "d/m/Y"), "html", null, true);
            echo "</em> 
\t\t\t\t <br> 
\t\t\t\t
\t\t\t\t";
            // line 27
            $context["notes"] = "Pas encore de note !";
            // line 28
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["note"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
                echo " 
\t\t\t\t\t";
                // line 29
                if ((twig_get_attribute($this->env, $this->source, $context["n"], "titre", array()) == twig_get_attribute($this->env, $this->source, $context["article"], "titre", array()))) {
                    echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                    // line 30
                    echo " ";
                    $context["notes"] = "";
                    // line 31
                    echo "\t\t\t\t\t<div class=\"star-ratings-css\" title=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "moyenne", array()), "html", null, true);
                    echo "/5\">
\t\t\t\t\t  <div class=\"star-ratings-css-top\" style=\"width: ";
                    // line 32
                    echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["n"], "moyenne", array()) * 20), "html", null, true);
                    echo "%\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t  <div class=\"star-ratings-css-bottom\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
                }
                // line 35
                echo " \t\t\t\t
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, ($context["notes"] ?? null), "html", null, true);
            echo "
\t\t\t\t<br>
\t\t\t\t<span title=\"de ";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbJoueurMin", array()), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbJoueurMax", array()), "html", null, true);
            echo " joueurs\">
\t\t\t\t<img src=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/people.png"), "html", null, true);
            echo "\" width=\"20\" class=\"pad\">  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbJoueurMin", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "nbJoueurMax", array()), "html", null, true);
            echo "</span>
\t\t\t\t<span title=\"de ";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ageMin", array()), "html", null, true);
            echo " à ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ageMax", array()), "html", null, true);
            echo " ans\">
\t\t\t\t<img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/age3.png"), "html", null, true);
            echo "\" width=\"20\" class=\"pad\">  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ageMin", array()), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "ageMax", array()), "html", null, true);
            echo "
\t\t\t\t<span title=\"Durée moyenne d'une partie : ";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "duree", array()), "html", null, true);
            echo " minutes\">
\t\t\t\t<img src=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/minutes.png"), "html", null, true);
            echo "\" width=\"20\" class=\"pad\">  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "duree", array()), "html", null, true);
            echo " '<br><br>
\t\t\t\t<span class=\"ind orange\">Catégories </span>: ";
            // line 45
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
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "publicJeu", array()), "name", array()), "html", null, true);
            echo "<br>
\t\t\t\t<span class=\"ind orange size2\">";
            // line 47
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["article"], "prix", array()) * 1.2), "html", null, true);
            echo " €</span><br>
\t\t\t</div>
\t\t</div>
\t\t<hr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 52
            echo "      Pas (encore !) d'articles
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo " ";
        // line 55
        echo "  ";
        if ( !twig_test_empty(($context["articles"] ?? null))) {
            // line 56
            echo "  <br>
  <div class=\"centre\">
\t  <div class=\"pagination\">
\t\t";
            // line 59
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 60
                echo "\t\t  ";
                // line 61
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage", array("page" => $context["p"])), "html", null, true);
                echo "\" ";
                if (($context["p"] == ($context["page"] ?? null))) {
                    echo " class=\"active\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a>
\t\t ";
                // line 63
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "\t  </div>
  </div>
  ";
        }
        // line 66
        echo " 
  <br>
  <hr>
";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Article/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  268 => 66,  263 => 64,  257 => 63,  246 => 61,  244 => 60,  240 => 59,  235 => 56,  232 => 55,  230 => 54,  223 => 52,  213 => 47,  209 => 46,  172 => 45,  166 => 44,  162 => 43,  154 => 42,  148 => 41,  140 => 40,  134 => 39,  128 => 37,  121 => 35,  114 => 32,  109 => 31,  106 => 30,  102 => 29,  95 => 28,  93 => 27,  87 => 24,  83 => 23,  79 => 22,  75 => 20,  69 => 17,  65 => 16,  62 => 15,  60 => 14,  56 => 12,  51 => 11,  46 => 8,  43 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Article/index.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Article\\index.html.twig");
    }
}
