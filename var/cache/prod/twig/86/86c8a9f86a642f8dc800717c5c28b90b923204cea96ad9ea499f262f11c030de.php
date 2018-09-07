<?php

/* @JeuArticle/Avis/vue.html.twig */
class __TwigTemplate_3506d8c15abf594140619efc338042fb3c231ac4475cf940eff3d93522b62429 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout.html.twig", "@JeuArticle/Avis/vue.html.twig", 1);
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
        echo "  Avis - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 6
    public function block_jeu_article_body($context, array $blocks = array())
    {
        // line 7
        echo "\t<h2>Liste des Avis</h2>
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["avis"]);
        foreach ($context['_seq'] as $context["_key"] => $context["avis"]) {
            // line 9
            echo "\t\t<fieldset><legend>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "titre", array()), "html", null, true);
            echo "</legend>
\t\tNote : ";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "note", array()), "html", null, true);
            echo "/5 <br>
\t\t <em>avis déposé le ";
            // line 11
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "date", array()), "d/m/Y"), "html", null, true);
            echo " par ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "user", array()), "html", null, true);
            echo "</em><br>
\t\t ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["avis"], "content", array()), "html", null, true);
            echo "
\t\t</fieldset><br>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['avis'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "\t";
        if ( !twig_test_empty(($context["avis"] ?? null))) {
            // line 16
            echo "\t  <ul class=\"pagination\">
\t\t";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 18
                echo "\t\t  <li";
                if (($context["p"] == ($context["page"] ?? null))) {
                    echo " class=\"active\"";
                }
                echo ">
\t\t\t<a href=\"";
                // line 19
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_avis_vue", array("page" => $context["p"], "id" => ($context["idart"] ?? null))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a>
\t\t  </li>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 22
            echo "\t  </ul><br>
\t";
        }
        // line 23
        echo " 
\t<a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_view", array("id" => ($context["idart"] ?? null))), "html", null, true);
        echo "\" class=\"btn btn-primary\">Retour à l'article</a>
\t
";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Avis/vue.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 24,  109 => 23,  105 => 22,  94 => 19,  87 => 18,  83 => 17,  80 => 16,  77 => 15,  68 => 12,  62 => 11,  58 => 10,  53 => 9,  49 => 8,  46 => 7,  43 => 6,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Avis/vue.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Avis\\vue.html.twig");
    }
}
