<?php

/* JeuArticleBundle:Administration/Produits:index.html.twig */
class __TwigTemplate_0fa2e8a4a30d60b4e4f82e861bc4a70404a496ee93088247e4fdafe1984ae021 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuArticleBundle:Administration/Produits:index.html.twig", 1);
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
        echo "<div>
\t\t<h2 class=\"bordeau centre ind\">Liste des Produits</h2>
\t\t<p class=\"ind\">Nombre total de produits : <span class=\"tomate\">";
        // line 6
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["entities"] ?? null)), "html", null, true);
        echo "</span></p>\t\t
    </div>
    <div>
\t\t<table class=\"centre\">
\t\t\t<thead>
\t\t\t\t<tr>
\t\t\t\t\t<th>Categorie</th>
\t\t\t\t\t<th>Nom</th>
\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t<th>Actions</th>
\t\t\t\t</tr>
\t\t\t</thead>
\t\t\t<tbody>
\t\t\t\t";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 20
            echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["entity"], "categories", array()));
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
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "titre", array()), "html", null, true);
            echo "</td>
\t\t\t\t\t\t<td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "prix", array()), "html", null, true);
            echo " €</td>
\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t<a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_show", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">voir</a> /
\t\t\t\t\t\t\t<a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">editer</i></a>
\t\t\t\t\t\t</td>
\t\t\t\t\t</tr>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "\t\t\t</tbody>
\t\t</table>
\t\t<br>
\t\t<a href=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_new");
        echo "\" class=\"bouton2\">Ajouter un nouveau produit</a>
    </div>
\t<div class=\"centre\">
\t\t<div class=\"pagination\">
\t\t\t";
        // line 37
        if ( !twig_test_empty(($context["entities"] ?? null))) {
            // line 38
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["nbPages"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 39
                echo "\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_index", array("page" => $context["p"])), "html", null, true);
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
            // line 41
            echo "\t\t\t";
        }
        // line 42
        echo "\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Administration/Produits:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 42,  156 => 41,  141 => 39,  136 => 38,  134 => 37,  127 => 33,  122 => 30,  112 => 26,  108 => 25,  103 => 23,  99 => 22,  62 => 21,  59 => 20,  55 => 19,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuArticleBundle:Administration/Produits:index.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Administration/Produits/index.html.twig");
    }
}
