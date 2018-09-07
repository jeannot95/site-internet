<?php

/* JeuArticleBundle:Administration/Avis:index.html.twig */
class __TwigTemplate_7295d3def41a4c8bd0e8197c63150a67c79098e72385c86d2706343eea993e56 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuArticleBundle:Administration/Avis:index.html.twig", 1);
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
\t\t<h2 class=\"bordeau ind centre\">Liste des avis</h2>
\t\t<p class=\"ind\">Nombre total d'avis : <span class=\"tomate\">";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["entities"] ?? null)), "html", null, true);
        echo "</span></p>
    </div>
    <div class=\"centre style=\"overflow-x:auto;\"\">
\t\t<table>
\t\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<th>Titre</th>
\t\t\t\t<th>Jeux</th>
\t\t\t\t<th>Actions</th>
\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "\t\t\t\t<tr>
\t\t\t\t\t<td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminAvis_show", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "html", null, true);
            echo "</a>
\t\t\t\t\t</td>
\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "titre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["entity"], "article", array()), "titre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t<td>
\t\t\t\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminAvis_show", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">voir</a>
\t\t\t\t\t</td>
\t\t\t\t</tr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t</tbody>
\t\t</table>
    </div>
\t<br>
\t<div class=\"centre\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 36
        if ( !twig_test_empty(($context["entities"] ?? null))) {
            // line 37
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 38
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminAvis_index", array("page" => $context["p"])), "html", null, true);
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
            // line 40
            echo "\t\t\t";
        }
        // line 41
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Administration/Avis:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 41,  118 => 40,  103 => 38,  98 => 37,  96 => 36,  88 => 30,  78 => 26,  73 => 24,  69 => 23,  62 => 21,  59 => 20,  55 => 19,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuArticleBundle:Administration/Avis:index.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Administration/Avis/index.html.twig");
    }
}
