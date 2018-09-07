<?php

/* @JeuArticle/Administration/Produits/edit.html.twig */
class __TwigTemplate_a2c131a8c34c7dfae5c7e092bfe50bba585ddf86f7ee433f904fc472e9cfc26a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuArticle/Administration/Produits/edit.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div>
        <h2 class=\"bordeau ind centre\">Edition du Produit</h2>
    </div>
\t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 8
            echo "\t\t<div>
\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t</div>\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "\t<div>
\t\t";
        // line 13
        echo twig_include($this->env, $context, "JeuArticleBundle:Article:form3.html.twig");
        echo "
\t</div>\t
";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Administration/Produits/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  56 => 12,  47 => 9,  44 => 8,  40 => 7,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Administration/Produits/edit.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Administration\\Produits\\edit.html.twig");
    }
}
