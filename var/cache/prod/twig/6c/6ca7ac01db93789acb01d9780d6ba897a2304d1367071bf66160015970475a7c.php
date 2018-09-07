<?php

/* @JeuUser/User/facture.html.twig */
class __TwigTemplate_ed59a2dd96d904d974ccbeb477c7551433bbdcc2bb2559fd43f83f7230b33e31 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuUserBundle::layout.html.twig", "@JeuUser/User/facture.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jeu_article_body' => array($this, 'block_jeu_article_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Facture - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_jeu_article_body($context, array $blocks = array())
    {
        // line 8
        echo "
<h2>Votre Facture</h2>

  ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 71
        echo "  
";
    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 12
        echo "   <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-9\">

                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "                    <div class=\"notification is-success\">
                        ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "                    <div class=\"notification is-danger\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
                <div class=\"tile is-ancestor\">
                    <div class=\"tile is-parent is-12\">
                        <article class=\"tile is-child box is-12\">
                            <h2 class=\"title is-3 indieflower\">Vos factures</h2>
                        </article>
                    </div>
                </div>

                <div class=\"tile is-ancestor\">
                    <div class=\"tile is-parent is-12\">
                        <article class=\"tile is-child box is-12\">
                            <table class=\"table is-striped\">
                                <thead>
                                    <tr>
                                        <th class=\"title is-5 indieflower\">Références</th>
                                        <th class=\"title is-5 indieflower\">Date</th>
                                        <th class=\"title is-5 indieflower\">Prix TTC</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 48
        if ((twig_length_filter($this->env, ($context["factures"] ?? null)) == 0)) {
            // line 49
            echo "                                        <tr>
                                            <td colspan=\"4\">Aucune facture actuellement</td>
                                        </tr>
                                    ";
        }
        // line 53
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["factures"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 54
            echo "                                        <tr>
                                            <td>ref : ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "reference", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["facture"], "commande", array()), "prixTTC", array()), "html", null, true);
            echo " €</td>
                                            <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturePDF", array("id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\" title=\"Consulter le PDF\">PDF</a></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                </tbody>
                            </table>
                        </article>
                    </div>
                </div>

            </div>
\t\t</div>
\t</div>
  ";
    }

    public function getTemplateName()
    {
        return "@JeuUser/User/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 61,  153 => 58,  149 => 57,  145 => 56,  141 => 55,  138 => 54,  133 => 53,  127 => 49,  125 => 48,  101 => 26,  92 => 23,  89 => 22,  84 => 21,  75 => 18,  72 => 17,  68 => 16,  62 => 12,  59 => 11,  54 => 71,  52 => 11,  47 => 8,  44 => 7,  37 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuUser/User/facture.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle\\Resources\\views\\User\\facture.html.twig");
    }
}
