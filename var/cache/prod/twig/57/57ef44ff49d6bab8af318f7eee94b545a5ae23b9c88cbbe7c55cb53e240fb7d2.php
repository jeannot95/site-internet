<?php

/* JeuUserBundle:Administration/Commandes:index.html.twig */
class __TwigTemplate_e8a058ae44a924c636eb1bae4ba7dee95924900c824bd66aec1fa3f8557d5a02 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuUserBundle:Administration/Commandes:index.html.twig", 1);
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
\t\t<h2 class=\"orange centre ind\">Liste des Commandes</h2>
\t\t<span class=\"ind\">Nombres total de commandes :</span><span class=\"ind tomate\"> ";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["commandes"] ?? null)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"centre\">
\t\t<table>
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Référence</th>
\t\t\t\t<th>Utilisateur</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 20
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 21
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "date", array()), "d-m-Y h:i:s"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "reference", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "user", array()), "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminShowFacture", array("id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">Voir Facture</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "\t\t\t</tbody>
\t\t</table>
    </div>
\t<br>
\t<div class=\"centre\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 35
        if ( !twig_test_empty(($context["commandes"] ?? null))) {
            // line 36
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 37
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCommande", array("page" => $context["p"])), "html", null, true);
                echo "\" ";
                if (($context["p"] == ($context["page"] ?? null))) {
                    echo " class=\"active\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t";
        }
        // line 40
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "JeuUserBundle:Administration/Commandes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 40,  115 => 39,  100 => 37,  95 => 36,  93 => 35,  85 => 29,  75 => 25,  70 => 23,  66 => 22,  62 => 21,  59 => 20,  55 => 19,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuUserBundle:Administration/Commandes:index.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle/Resources/views/Administration/Commandes/index.html.twig");
    }
}
