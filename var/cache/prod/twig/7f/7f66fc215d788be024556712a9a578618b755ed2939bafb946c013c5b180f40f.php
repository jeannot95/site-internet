<?php

/* JeuArticleBundle:Panier:panier.html.twig */
class __TwigTemplate_ad610d9255bca88aa653518deb5c26f79fc3bd066664a321c06e862b7acd8412 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout2.html.twig", "JeuArticleBundle:Panier:panier.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jeu_article_body' => array($this, 'block_jeu_article_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuArticleBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["totalHT"] = 0;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        // line 6
        echo "  Panier - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 9
    public function block_jeu_article_body($context, array $blocks = array())
    {
        // line 10
        echo "
<h2>Votre panier</h2>

  ";
        // line 13
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 55
        echo "  
";
    }

    // line 13
    public function block_fos_user_content($context, array $blocks = array())
    {
        echo " 
\t  ";
        // line 17
        echo "\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 18
            echo "\t\t<div class=\"alert alert-success\">
\t\t\t";
            // line 19
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t</div>\t
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t<table class=\"table table-striped table-hover text-center\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"text-center\">Nom du jeu</th>
\t\t\t\t<th class=\"text-center\">Prix HT</th>
\t\t\t\t<th class=\"text-center\">Supprimer</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 31
        if ((twig_length_filter($this->env, ($context["articles"] ?? null)) == 0)) {
            // line 32
            echo "\t\t<tr><td colspan=\"3\" class=\"text-center\">Aucun article dans votre panier</td></tr>
\t\t";
        }
        // line 34
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 35
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prix", array()), "html", null, true);
            echo " €</td>
\t\t\t\t<td> <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_supprimer_panier", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
            echo "\" ><i class=\"glyphicon glyphicon-trash\"></i></a></td>
\t\t\t</tr>
\t\t\t";
            // line 40
            $context["totalHT"] = (($context["totalHT"] ?? null) + twig_get_attribute($this->env, $this->source, $context["article"], "prix", array()));
            // line 41
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "\t\t</tbody>
\t</table><hr>
\t";
        // line 44
        if ((twig_length_filter($this->env, ($context["articles"] ?? null)) != 0)) {
            // line 45
            echo "\t\t<dl class=\"dl-horizontal pull-right\">
\t\t\t\t\t<dt>Total HT </dt><dd>";
            // line 46
            echo twig_escape_filter($this->env, ($context["totalHT"] ?? null), "html", null, true);
            echo " €</dd>
\t\t\t\t\t<dt>TVA 20% </dt><dd>";
            // line 47
            echo twig_escape_filter($this->env, (($context["totalHT"] ?? null) * 0.2), "html", null, true);
            echo " €</dd>
\t\t\t\t\t<dt>Total TTC</dt><dd>";
            // line 48
            echo twig_escape_filter($this->env, (($context["totalHT"] ?? null) * 1.2), "html", null, true);
            echo " €</dd>
\t\t</dl>
\t\t<div class=\"clearfix\"></div>
\t\t<a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_livraison");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
\t";
        }
        // line 53
        echo "\t<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
  ";
    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Panier:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 53,  153 => 51,  147 => 48,  143 => 47,  139 => 46,  136 => 45,  134 => 44,  130 => 42,  124 => 41,  122 => 40,  117 => 38,  113 => 37,  109 => 36,  106 => 35,  101 => 34,  97 => 32,  95 => 31,  84 => 22,  75 => 19,  72 => 18,  67 => 17,  62 => 13,  57 => 55,  55 => 13,  50 => 10,  47 => 9,  40 => 6,  37 => 5,  33 => 1,  31 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuArticleBundle:Panier:panier.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Panier/panier.html.twig");
    }
}
