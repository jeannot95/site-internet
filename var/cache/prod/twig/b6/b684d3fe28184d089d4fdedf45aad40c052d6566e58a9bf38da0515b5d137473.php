<?php

/* JeuUserBundle:Administration/Utilisateurs:factures.html.twig */
class __TwigTemplate_db88bea0e44421511ae8f1d0d3684b30adfb9663f1e69cbbf32f884dc64b4df7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuUserBundle:Administration/Utilisateurs:factures.html.twig", 1);
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
\t\t<h2 class=\"orange ind centre\">Liste des factures de l'utilisateur</h2>
    </div>
    <div>
\t\t<table>
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Références</th>
\t\t\t\t<th>Date</th>
\t\t\t\t<th>Prix TTC</th>
\t\t\t\t<th></th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 18
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "commandes", array())) == 0)) {
            // line 19
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>Aucune facture actuellement.</td>
\t\t\t\t</tr>
\t\t\t";
        }
        // line 23
        echo "\t\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "commandes", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 24
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>ref : ";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "reference", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["facture"], "commande", array()), "prixTTC", array()), "html", null, true);
            echo " €</td>
\t\t\t\t\t<td><a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminShowFacture", array("id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">Voir</a></td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<p>
\t\t\t<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminUtilisateurs_index");
        echo "\" class=\"bouton1\">Retour à la liste</a>
\t\t</p>\t\t
    </div>
";
    }

    public function getTemplateName()
    {
        return "JeuUserBundle:Administration/Utilisateurs:factures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  88 => 31,  79 => 28,  75 => 27,  71 => 26,  67 => 25,  64 => 24,  59 => 23,  53 => 19,  51 => 18,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuUserBundle:Administration/Utilisateurs:factures.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle/Resources/views/Administration/Utilisateurs/factures.html.twig");
    }
}
