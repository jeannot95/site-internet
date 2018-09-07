<?php

/* @JeuArticle/Article/view.html.twig */
class __TwigTemplate_42e6191fd67a64872c3855f499a993d1c9f12b0188499175990ed2c6ff78e0a8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout.html.twig", "@JeuArticle/Article/view.html.twig", 1);
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
        echo "  Details - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_jeu_article_body($context, array $blocks = array())
    {
        // line 8
        echo "
\t<h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titre", array()), "html", null, true);
        echo "</h2>
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 11
            echo "\t\t\t<div>
\t\t\t\t";
            // line 12
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t\t</div>\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t<div class=\"flex3\">\t\t
\t\t<div class=\"item1\">
\t\t\t";
        // line 17
        if ( !(null === twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image", array()))) {
            // line 18
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "image", array()), "alt", array()), "html", null, true);
            echo "\" width=\"200\" height=\"200\"/>
\t\t\t";
        }
        // line 20
        echo "\t\t</div>
\t\t<div class=\"item2 pad\">
\t\t\t<p><i>Sorti le ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "dateDeSortie", array()), "d/m/Y"), "html", null, true);
        echo "</i><p>
\t\t\t\t";
        // line 23
        $context["notes"] = "Pas encore de note !";
        // line 24
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["note"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            echo " 
\t\t\t\t\t";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["n"], "titre", array()) == twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "titre", array()))) {
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 26
                echo " ";
                $context["notes"] = "";
                // line 27
                echo "\t\t\t\t\t<div class=\"star-ratings-css\" title=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "moyenne", array()), "html", null, true);
                echo "/5\">
\t\t\t\t\t  <div class=\"star-ratings-css-top\" style=\"width: ";
                // line 28
                echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["n"], "moyenne", array()) * 20), "html", null, true);
                echo "%\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t  <div class=\"star-ratings-css-bottom\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t</div>
\t\t\t\t\t";
            }
            // line 31
            echo " \t\t\t\t
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['n'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "\t\t\t\t";
        echo twig_escape_filter($this->env, ($context["notes"] ?? null), "html", null, true);
        echo "
\t\t\t<br>\t\t\t\t
\t\t\t<span class=\"ind orange\">Description</span> : ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "description", array()), "html", null, true);
        echo "\t\t
\t\t\t";
        // line 36
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "categories", array()), "empty", array())) {
            // line 37
            echo "\t\t\t\t<p>
\t\t\t\t\t<span class=\"ind orange\">Catégories</span> :
\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "categories", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 40
                echo "\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "name", array()), "html", null, true);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 41
                echo "\t\t\t\t\t";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "\t\t\t\t</p>
\t\t\t";
        }
        // line 44
        echo "\t\t\t";
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "publicJeu", array(), "any", false, true), "name", array(), "any", true, true)) {
            // line 45
            echo "\t\t\t\t<p>
\t\t\t\t\t<span class=\"ind orange\">Public concerné</span> : ";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "publicJeu", array()), "name", array()), "html", null, true);
            echo "
\t\t\t\t</p>
\t\t\t";
        }
        // line 49
        echo "\t\t\t<p>
\t\t\t\t<img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/people.png"), "html", null, true);
        echo "\" width=\"20\" class=\"pad\"> <span class=\"ind orange\">Nombre de joueur</span> : de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "nbJoueurMin", array()), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "nbJoueurMax", array()), "html", null, true);
        echo " joueurs
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/age3.png"), "html", null, true);
        echo "\" width=\"20\" class=\"pad\">  <span class=\"ind orange\">Age</span> : de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ageMin", array()), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ageMax", array()), "html", null, true);
        echo " ans
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/minutes.png"), "html", null, true);
        echo "\" width=\"20\" class=\"pad\"> <span class=\"ind orange\">Durée</span> : Une partie dure en moyenne ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "duree", array()), "html", null, true);
        echo " minutes
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<span class=\"ind orange\">Prix</span> :  ";
        // line 59
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "prix", array()) * 1.2), "html", null, true);
        echo " €
\t\t\t</p>
\t\t</div>\t\t
\t</div>\t
\t<a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\" class=\"bouton1\">
\t\tRetour à la liste
    </a>
\t";
        // line 66
        if (twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array())) {
            // line 67
            echo "\t\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()), array(), "array", true, true)) {
                // line 68
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_ajouter_panier", array("id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()))), "html", null, true);
                echo "\" class=\"bouton2\">      
\t\t\t\tAjouter au panier
\t\t\t</a>
\t\t";
            } else {
                // line 72
                echo "\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_panier");
                echo "\" class=\"bouton2\">Le produit est déjà dans votre panier</a>
\t\t\t<a href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_avis_depos", array("id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()))), "html", null, true);
                echo "\" class=\"bouton3\">Déposer un avis</a>
\t\t";
            }
            // line 75
            echo "\t";
        } else {
            // line 76
            echo "\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\" class=\"bouton2\">Connectez-vous</a> pour ajoutez cet article à votre panier ou pour déposer un avis<br><br>\t\t
\t";
        }
        // line 78
        echo "\t<a href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_avis_vue", array("id" => twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"bouton4\">Voir les avis</a>\t  \t
\t<hr>
\tJeux apparu dans la même catégorie :<hr>
\t<div class=\"flex3\">
\t\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["suggestion"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["jeu"]) {
            // line 83
            echo "\t\t\t<div class=\"flex3 pad\">
\t\t\t\t<a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_view", array("id" => twig_get_attribute($this->env, $this->source, $context["jeu"], "id", array()))), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["jeu"], "titre", array()), "html", null, true);
            echo "\">
\t\t\t\t";
            // line 85
            if (twig_get_attribute($this->env, $this->source, $context["jeu"], "image", array(), "any", true, true)) {
                // line 86
                echo "\t\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["jeu"], "image", array()), "webPath", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["jeu"], "image", array()), "alt", array()), "html", null, true);
                echo "\" width=\"100\" height=\"100\"/>
\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t
\t\t\t\t</a>
\t\t\t</div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jeu'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "\t\t\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Article/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 90,  302 => 87,  294 => 86,  292 => 85,  286 => 84,  283 => 83,  279 => 82,  271 => 78,  265 => 76,  262 => 75,  257 => 73,  252 => 72,  244 => 68,  241 => 67,  239 => 66,  233 => 63,  226 => 59,  218 => 56,  208 => 53,  198 => 50,  195 => 49,  189 => 46,  186 => 45,  183 => 44,  179 => 42,  165 => 41,  159 => 40,  142 => 39,  138 => 37,  136 => 36,  132 => 35,  126 => 33,  119 => 31,  112 => 28,  107 => 27,  104 => 26,  100 => 25,  93 => 24,  91 => 23,  87 => 22,  83 => 20,  75 => 18,  73 => 17,  69 => 15,  60 => 12,  57 => 11,  53 => 10,  49 => 9,  46 => 8,  43 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Article/view.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Article\\view.html.twig");
    }
}
