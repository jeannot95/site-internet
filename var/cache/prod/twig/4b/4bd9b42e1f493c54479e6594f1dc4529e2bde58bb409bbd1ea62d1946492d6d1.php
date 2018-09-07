<?php

/* @JeuArticle/Panier/validation.html.twig */
class __TwigTemplate_f31266ba689fb3ceeda98df8ae663150641c261564a8e3d3397d75dd1dcdff6a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout2.html.twig", "@JeuArticle/Panier/validation.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Validation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_jeu_article_body($context, array $blocks = array())
    {
        // line 8
        echo "
<h2>Validation</h2>

  ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 61
        echo "  
";
    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        echo " 
\t<table class=\"table table-striped table-hover text-center\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th class=\"text-center\">Nom du jeu</th>
\t\t\t\t<th class=\"text-center\">Prix HT</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "article", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "reference", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prixHT", array()), "html", null, true);
            echo " €</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "\t\t</tbody>
\t</table><hr>
\t\t<dl class=\"dl-horizontal pull-right\">
\t\t\t\t\t<dt>Total HT </dt><dd>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</dd>
\t\t\t\t\t<dt>TVA 20% </dt><dd>";
        // line 30
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "prixHT", array()) * 0.2), "html", null, true);
        echo " €</dd>
\t\t\t\t\t<dt>Total TTC</dt><dd>";
        // line 31
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "prixHT", array()) * 1.2), "html", null, true);
        echo " €</dd>
\t\t</dl>
\t
\t\t<div class=\"col-md-4 pull-left\">
\t\t\t<dl class=\"pull-left\">
\t\t\t\t<dt><h4>Adresse de livraison</h4></dt>
\t\t\t\t<dt>";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo "</dt>
\t\t\t\t<dt>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</dt>
\t\t\t\t<dt>";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "livraison", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "livraison", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "livraison", array()), "pays", array()), "html", null, true);
        echo "</dt>
\t\t\t</dl>
\t\t</div>
\t\t<div class=\"col-md-4 pull-left\">
\t\t\t<dl class=\"pull-left\">
\t\t\t\t<dt><h4>Adresse de facturation</h4></dt>
\t\t\t\t<dt>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo "</dt>
\t\t\t\t<dt>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</dt>
\t\t\t\t<dt>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</dt>
\t\t\t</dl>
\t\t</div>\t\t\t
\t\t<div class=\"clearfix\"></div>
\t\t
\t\t<form action=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_user_validation_commande", array("id" => twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "id", array()))), "html", null, true);
        echo "\" method =\"POST\">
\t\t\t<input name=\"token\" type=\"hidden\" value=\"";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "token", array()), "html", null, true);
        echo "\">
\t\t\t<input name=\"prix\" type=\"hidden\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "commande", array()), "prixTTC", array()), "html", null, true);
        echo "\">
\t\t\t<input name=\"date\" type=\"hidden\" value=\"";
        // line 55
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["commande"] ?? null), "date", array()), "dmy"), "html", null, true);
        echo "\">
\t\t\t<button type=\"submit\" class=\"btn btn-success pull-right\">Payer</button>
\t\t</form>
\t\t
\t<a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_livraison");
        echo "\" class=\"btn btn-primary\">Retour</a>
  ";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Panier/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 59,  171 => 55,  167 => 54,  163 => 53,  159 => 52,  147 => 47,  143 => 46,  137 => 45,  124 => 39,  120 => 38,  114 => 37,  105 => 31,  101 => 30,  97 => 29,  92 => 26,  83 => 23,  79 => 22,  76 => 21,  72 => 20,  59 => 11,  54 => 61,  52 => 11,  47 => 8,  44 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Panier/validation.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Panier\\validation.html.twig");
    }
}
