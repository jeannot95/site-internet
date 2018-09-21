<?php

/* JeuArticleBundle:Article:view.html.twig */
class __TwigTemplate_7b98ccfecfea4689b7baa2ead006b552642b37034e5f2193cdb37d34c7009f05 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout.html.twig", "JeuArticleBundle:Article:view.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Article:view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Article:view.html.twig"));

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
        echo "  Details - ";
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
        echo "
\t<h2>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 9, $this->source); })()), "titre", array()), "html", null, true);
        echo "</h2>
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
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
        echo "\t<div class=\"flex3 contView\">\t\t
\t\t<div class=\"item1\">
\t\t\t";
        // line 17
        if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 17, $this->source); })()), "image", array()))) {
            // line 18
            echo "\t\t\t\t<img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 18, $this->source); })()), "image", array()), "webPath", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 18, $this->source); })()), "image", array()), "alt", array()), "html", null, true);
            echo "\" width=\"100%\" height =\"90%\"/>
\t\t\t";
        }
        // line 20
        echo "\t\t</div>
\t\t<div class=\"item2 pad\">
\t\t\t<p><i>Sorti le ";
        // line 22
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 22, $this->source); })()), "dateDeSortie", array()), "d/m/Y"), "html", null, true);
        echo "</i><p>
\t\t\t\t";
        // line 23
        $context["notes"] = "Pas encore de note !";
        // line 24
        echo "\t\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["note"]) || array_key_exists("note", $context) ? $context["note"] : (function () { throw new Twig_Error_Runtime('Variable "note" does not exist.', 24, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["n"]) {
            echo " 
\t\t\t\t\t";
            // line 25
            if ((twig_get_attribute($this->env, $this->source, $context["n"], "titre", array()) == twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 25, $this->source); })()), "titre", array()))) {
                echo "\t\t\t\t\t\t
\t\t\t\t\t\t\t";
                // line 26
                echo " ";
                $context["notes"] = "";
                // line 27
                echo "\t\t\t\t\t<div class=\"star-ratings-css\" title=\"";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["n"], "moyenne", array()), 0, 4), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["notes"]) || array_key_exists("notes", $context) ? $context["notes"] : (function () { throw new Twig_Error_Runtime('Variable "notes" does not exist.', 33, $this->source); })()), "html", null, true);
        echo "
\t\t\t<br>\t\t\t\t
\t\t\t<span class=\"ind orange\">Description</span> : ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 35, $this->source); })()), "description", array()), "html", null, true);
        echo "\t\t
\t\t\t";
        // line 36
        if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 36, $this->source); })()), "categories", array()), "empty", array())) {
            // line 37
            echo "\t\t\t\t<p>
\t\t\t\t\t<span class=\"ind orange\">Catégories</span> :
\t\t\t\t\t";
            // line 39
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 39, $this->source); })()), "categories", array()));
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 46, $this->source); })()), "publicJeu", array()), "name", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 50, $this->source); })()), "nbJoueurMin", array()), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 50, $this->source); })()), "nbJoueurMax", array()), "html", null, true);
        echo " joueurs
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/age3.png"), "html", null, true);
        echo "\" width=\"20\" class=\"pad\">  <span class=\"ind orange\">Age</span> : de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 53, $this->source); })()), "ageMin", array()), "html", null, true);
        echo " à ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 53, $this->source); })()), "ageMax", array()), "html", null, true);
        echo " ans
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/minutes.png"), "html", null, true);
        echo "\" width=\"20\" class=\"pad\"> <span class=\"ind orange\">Durée</span> : Une partie dure en moyenne ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 56, $this->source); })()), "duree", array()), "html", null, true);
        echo " minutes
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<span class=\"ind orange\">Prix</span> :  ";
        // line 59
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 59, $this->source); })()), "prix", array()) * 1.2), "html", null, true);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 66, $this->source); })()), "user", array())) {
            // line 67
            echo "\t\t";
            if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 67, $this->source); })()), "id", array()), array(), "array", true, true)) {
                // line 68
                echo "\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_ajouter_panier", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 68, $this->source); })()), "id", array()))), "html", null, true);
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
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_avis_depos", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 73, $this->source); })()), "id", array()))), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_avis_vue", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new Twig_Error_Runtime('Variable "article" does not exist.', 78, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" class=\"bouton4\">Voir les avis</a>\t  \t
\t<hr>
\tJeux apparu dans la même catégorie :<hr>
\t<div class=\"flex3\">
\t\t";
        // line 82
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["suggestion"]) || array_key_exists("suggestion", $context) ? $context["suggestion"] : (function () { throw new Twig_Error_Runtime('Variable "suggestion" does not exist.', 82, $this->source); })()));
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Article:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 90,  332 => 87,  324 => 86,  322 => 85,  316 => 84,  313 => 83,  309 => 82,  301 => 78,  295 => 76,  292 => 75,  287 => 73,  282 => 72,  274 => 68,  271 => 67,  269 => 66,  263 => 63,  256 => 59,  248 => 56,  238 => 53,  228 => 50,  225 => 49,  219 => 46,  216 => 45,  213 => 44,  209 => 42,  195 => 41,  189 => 40,  172 => 39,  168 => 37,  166 => 36,  162 => 35,  156 => 33,  149 => 31,  142 => 28,  137 => 27,  134 => 26,  130 => 25,  123 => 24,  121 => 23,  117 => 22,  113 => 20,  105 => 18,  103 => 17,  99 => 15,  90 => 12,  87 => 11,  83 => 10,  79 => 9,  76 => 8,  67 => 7,  54 => 4,  45 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JeuArticleBundle::layout.html.twig\" %}

{% block title %}
  Details - {{ parent() }}
{% endblock %}

{% block jeu_article_body %}

\t<h2>{{ article.titre }}</h2>
\t\t{% for flashMessage in app.session.flashbag.get('notice') %}
\t\t\t<div>
\t\t\t\t{{ flashMessage }}
\t\t\t</div>\t
\t\t{% endfor %}
\t<div class=\"flex3 contView\">\t\t
\t\t<div class=\"item1\">
\t\t\t{% if article.image is not null %}
\t\t\t\t<img src=\"{{ asset(article.image.webPath) }}\" alt=\"{{ article.image.alt }}\" width=\"100%\" height =\"90%\"/>
\t\t\t{% endif %}
\t\t</div>
\t\t<div class=\"item2 pad\">
\t\t\t<p><i>Sorti le {{ article.dateDeSortie|date('d/m/Y') }}</i><p>
\t\t\t\t{% set notes = 'Pas encore de note !' %}
\t\t\t\t{% for n in note %} 
\t\t\t\t\t{% if n.titre == article.titre %}\t\t\t\t\t\t
\t\t\t\t\t\t\t{#{ n.moyenne }#} {% set notes = '' %}
\t\t\t\t\t<div class=\"star-ratings-css\" title=\"{{ n.moyenne|slice(0,4) }}/5\">
\t\t\t\t\t  <div class=\"star-ratings-css-top\" style=\"width: {{ n.moyenne * 20 }}%\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t  <div class=\"star-ratings-css-bottom\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>
\t\t\t\t\t</div>
\t\t\t\t\t{% endif %} \t\t\t\t
\t\t\t\t{% endfor %}
\t\t\t\t{{ notes }}
\t\t\t<br>\t\t\t\t
\t\t\t<span class=\"ind orange\">Description</span> : {{ article.description }}\t\t
\t\t\t{% if not article.categories.empty %}
\t\t\t\t<p>
\t\t\t\t\t<span class=\"ind orange\">Catégories</span> :
\t\t\t\t\t{% for category in article.categories %}
\t\t\t\t\t\t{{ category.name }}{% if not loop.last %}, {% endif %}
\t\t\t\t\t{% endfor %}
\t\t\t\t</p>
\t\t\t{% endif %}
\t\t\t{% if  article.publicJeu.name is defined %}
\t\t\t\t<p>
\t\t\t\t\t<span class=\"ind orange\">Public concerné</span> : {{ article.publicJeu.name }}
\t\t\t\t</p>
\t\t\t{% endif %}
\t\t\t<p>
\t\t\t\t<img src=\"{{ asset('img/people.png')}}\" width=\"20\" class=\"pad\"> <span class=\"ind orange\">Nombre de joueur</span> : de {{article.nbJoueurMin}} à {{article.nbJoueurMax}} joueurs
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<img src=\"{{ asset('img/age3.png')}}\" width=\"20\" class=\"pad\">  <span class=\"ind orange\">Age</span> : de {{article.ageMin}} à {{article.ageMax}} ans
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<img src=\"{{ asset('img/minutes.png')}}\" width=\"20\" class=\"pad\"> <span class=\"ind orange\">Durée</span> : Une partie dure en moyenne {{ article.duree }} minutes
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<span class=\"ind orange\">Prix</span> :  {{ article.prix *1.2 }} €
\t\t\t</p>
\t\t</div>\t\t
\t</div>\t
\t<a href=\"{{ path('jeu_article_homepage') }}\" class=\"bouton1\">
\t\tRetour à la liste
    </a>
\t{% if app.user %}
\t\t{% if panier[article.id] is not defined %}
\t\t\t<a href=\"{{ path('jeu_article_ajouter_panier', {'id': article.id}) }}\" class=\"bouton2\">      
\t\t\t\tAjouter au panier
\t\t\t</a>
\t\t{% else %}
\t\t\t<a href=\"{{ path('jeu_article_panier') }}\" class=\"bouton2\">Le produit est déjà dans votre panier</a>
\t\t\t<a href=\"{{ path('jeu_article_avis_depos', { 'id' : article.id }) }}\" class=\"bouton3\">Déposer un avis</a>
\t\t{% endif %}
\t{% else %}
\t\t<a href=\"{{ path('fos_user_security_login') }}\" class=\"bouton2\">Connectez-vous</a> pour ajoutez cet article à votre panier ou pour déposer un avis<br><br>\t\t
\t{% endif %}
\t<a href=\"{{ path('jeu_article_avis_vue', { 'id': article.id }) }}\" class=\"bouton4\">Voir les avis</a>\t  \t
\t<hr>
\tJeux apparu dans la même catégorie :<hr>
\t<div class=\"flex3\">
\t\t{% for jeu in suggestion %}
\t\t\t<div class=\"flex3 pad\">
\t\t\t\t<a href=\"{{ path('jeu_article_view', {'id': jeu.id}) }}\" title=\"{{ jeu.titre }}\">
\t\t\t\t{% if jeu.image is defined %}
\t\t\t\t\t<img src=\"{{ asset(jeu.image.webPath) }}\" alt=\"{{ jeu.image.alt }}\" width=\"100\" height=\"100\"/>
\t\t\t\t{% endif %}\t\t\t\t
\t\t\t\t</a>
\t\t\t</div>
\t\t{% endfor %}\t\t\t
\t</div>
{% endblock %}", "JeuArticleBundle:Article:view.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Article/view.html.twig");
    }
}
