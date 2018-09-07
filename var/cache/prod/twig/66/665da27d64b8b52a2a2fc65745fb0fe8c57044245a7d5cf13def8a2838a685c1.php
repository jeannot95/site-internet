<?php

/* @JeuArticle/Article/meilleur.html.twig */
class __TwigTemplate_45b4e39bcb8ad3c8e0d7267635508b9747d35b6abc3590e79fdcf490edf34b9f extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  TOP VENTES - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_jeu_article_body($context, array $blocks = array())
    {
        // line 8
        $context["tour"] = 0;
        // line 9
        echo "  <h2>TOP VENTES</h2>
\t\t";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["total"] ?? null));
        foreach ($context['_seq'] as $context["id"] => $context["ref"]) {
            // line 11
            echo "\t\t\t";
            if ((($context["tour"] ?? null) < 5)) {
                // line 12
                echo "\t\t\t\t<div>
\t\t\t\t";
                // line 13
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["arts"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                    // line 14
                    echo "\t\t\t\t\t";
                    if (((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["ref"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[2] ?? null) : null) == twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))) {
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
                        $context['_seq'] = twig_ensure_traversable(($context["note"] ?? null));
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
                        echo twig_escape_filter($this->env, ($context["notes"] ?? null), "html", null, true);
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
            $context["tour"] = (($context["tour"] ?? null) + 1);
            echo "\t
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['ref'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "\t\t
";
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
        return array (  226 => 51,  218 => 50,  215 => 49,  205 => 47,  197 => 42,  193 => 41,  156 => 40,  150 => 39,  142 => 38,  134 => 37,  128 => 35,  121 => 33,  114 => 30,  109 => 29,  107 => 28,  103 => 27,  96 => 26,  94 => 25,  88 => 22,  84 => 21,  80 => 20,  72 => 17,  68 => 15,  65 => 14,  61 => 13,  58 => 12,  55 => 11,  51 => 10,  48 => 9,  46 => 8,  43 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Article/meilleur.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Article\\meilleur.html.twig");
    }
}
