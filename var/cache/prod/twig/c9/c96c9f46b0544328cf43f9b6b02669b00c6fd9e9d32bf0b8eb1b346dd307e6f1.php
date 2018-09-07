<?php

/* JeuUserBundle:Administration/Utilisateurs:index.html.twig */
class __TwigTemplate_a4d258e571881eea580e75a04807bb0499354c23183b7d394621c454d7452fde extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuUserBundle:Administration/Utilisateurs:index.html.twig", 1);
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
\t\t<h2 class=\"centre orange ind\">Liste des Utilisateurs</h2>
\t\t<span class=\"ind\">Nombre total d'utilisateur : </span><span class=\"ind tomate\">";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["utilisateurs"] ?? null)), "html", null, true);
        echo "</span>
    </div>
    <div class=\"centre\">
\t\t<table>
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["utilisateurs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["utilisateur"]) {
            // line 18
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "username", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t";
            // line 21
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "adresses", array())) != 0)) {
                // line 22
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminAdressesUtilisateurs", array("id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", array()))), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t   title=\"Consulter les Adresses\">Adresses</a>&nbsp;&nbsp;
\t\t\t\t\t\t";
            }
            // line 25
            echo "\t\t\t\t\t\t";
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["utilisateur"], "commandes", array())) != 0)) {
                // line 26
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminFacturesUtilisateurs", array("id" => twig_get_attribute($this->env, $this->source, $context["utilisateur"], "id", array()))), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t   title=\"Consulter les Factures\">Factures</a>
\t\t\t\t\t\t";
            }
            // line 29
            echo "\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['utilisateur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t\t\t</tbody>
\t\t</table>
    </div>
\t<br>
\t<div class=\"centre\">\t\t
\t\t<div class=\"pagination\">
\t\t\t";
        // line 38
        if ( !twig_test_empty(($context["utilisateurs"] ?? null))) {
            // line 39
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 40
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminUtilisateurs_index", array("page" => $context["p"])), "html", null, true);
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
            // line 42
            echo "\t\t\t";
        }
        // line 43
        echo "\t\t</div>
\t</div>\t
";
    }

    public function getTemplateName()
    {
        return "JeuUserBundle:Administration/Utilisateurs:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 43,  122 => 42,  107 => 40,  102 => 39,  100 => 38,  92 => 32,  84 => 29,  77 => 26,  74 => 25,  67 => 22,  65 => 21,  60 => 19,  57 => 18,  53 => 17,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuUserBundle:Administration/Utilisateurs:index.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle/Resources/views/Administration/Utilisateurs/index.html.twig");
    }
}
