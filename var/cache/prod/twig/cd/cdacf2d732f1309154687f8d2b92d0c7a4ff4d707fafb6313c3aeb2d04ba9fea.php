<?php

/* JeuArticleBundle:Administration/Produits:show.html.twig */
class __TwigTemplate_26749ec5bf87c9af6988cef619db6217825a16ea676b8c9c19333c7b36eebb81 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuArticleBundle:Administration/Produits:show.html.twig", 1);
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
                <h2 class=\"bordeau ind centre\">Details du Produit</h2>
    </div>
    <div>          
\t\t<div>
\t\t\t<figure>
\t\t\t\t<img  src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "image", array()), "webPath", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "image", array()), "alt", array()), "html", null, true);
        echo "\" width=\"400\">
\t\t\t</figure>
\t\t</div>                
\t\t<div>
\t\t\t<table>
\t\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<td>";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Titre</th>
\t\t\t\t\t<td>";
        // line 22
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "titre", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Description</th>
\t\t\t\t\t<td>";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "description", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Prix</th>
\t\t\t\t\t<td>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "prix", array()), "html", null, true);
        echo " €</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Catégories</th>
\t\t\t\t\t<td>";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "categories", array()));
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
                echo " ,";
            } else {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", array()), "html", null, true);
                echo " ";
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
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Public visé</th>
\t\t\t\t\t<td>";
        // line 38
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "publicJeu", array()), "name", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t <th>Age</th>
\t\t\t\t\t<td>Min : ";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "ageMin", array()), "html", null, true);
        echo " / Max : ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "ageMax", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t <th>Durée</th>
\t\t\t\t\t<td>";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "duree", array()), "html", null, true);
        echo " minutes</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t <th>Nombre de joueurs</th>
\t\t\t\t\t<td>Min:";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "nbjoueurMin", array()), "html", null, true);
        echo " / Max:  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "nbjoueurMax", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>\t\t\t\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t <th>Date de sortie</th>
\t\t\t\t\t<td>";
        // line 54
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "dateDeSortie", array()), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t <th>Date d'enregistrement</th>
\t\t\t\t\t<td>";
        // line 58
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "dateEnregistrement", array()), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>\t\t\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t</div>                                
\t\t<nav>
\t\t\t<div>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_index");
        echo "\" class=\"bouton1\">Retour à la liste</a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"bouton2\">Editer</a>
\t\t\t\t</p>
\t\t\t\t<p>";
        // line 71
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form');
        echo "</p>
\t\t\t</div>
\t\t</nav>        
    </div>
";
    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Administration/Produits:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 71,  182 => 69,  176 => 66,  165 => 58,  158 => 54,  149 => 50,  142 => 46,  133 => 42,  126 => 38,  84 => 34,  77 => 30,  70 => 26,  63 => 22,  56 => 18,  43 => 10,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuArticleBundle:Administration/Produits:show.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Administration/Produits/show.html.twig");
    }
}
