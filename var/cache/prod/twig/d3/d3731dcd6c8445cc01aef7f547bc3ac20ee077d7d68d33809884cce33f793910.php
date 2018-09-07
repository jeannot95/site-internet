<?php

/* JeuArticleBundle:Administration/Statistiques:commande.html.twig */
class __TwigTemplate_953e258586a63657f80b9787f539ef9b08c401b7479bf35a29b6fd13246599df extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuArticleBundle:Administration/Statistiques:commande.html.twig", 1);
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
        $context["tour"] = 0;
        // line 5
        echo "    <div>
        <h2 class=\"centre indr\">TOP 5 des Jeux les plus commandés</h2>
    </div>
\t<div class=\"centre\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>Rang</th>
\t\t\t\t<th>Titre</th>
\t\t\t\t<th>Nombre de commandes</th>
\t\t\t</tr>
\t\t\t";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["total"] ?? null));
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
        foreach ($context['_seq'] as $context["id"] => $context["ref"]) {
            // line 16
            echo "\t\t\t\t";
            if ((($context["tour"] ?? null) < 5)) {
                // line 17
                echo "\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
                echo "</td>
\t\t\t\t\t\t<td> ";
                // line 19
                echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = $context["ref"]) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null), "html", null, true);
                echo " </td>
\t\t\t\t\t\t<td> ";
                // line 20
                echo twig_escape_filter($this->env, (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = $context["ref"]) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[1] ?? null) : null), "html", null, true);
                echo " </td>
\t\t\t\t\t</tr>
\t\t\t\t";
            }
            // line 22
            echo "\t
\t\t\t\t";
            // line 23
            $context["tour"] = (($context["tour"] ?? null) + 1);
            echo "\t
\t\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['ref'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</table>\t\t\t
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminStatistiques_index");
        echo "\" class=\"bouton1\">Retour à la liste des Statistiques</a>
\t\t\t</li><br>\t\t\t\t
\t\t</ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Administration/Statistiques:commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 28,  105 => 25,  89 => 23,  86 => 22,  80 => 20,  76 => 19,  72 => 18,  69 => 17,  66 => 16,  49 => 15,  37 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuArticleBundle:Administration/Statistiques:commande.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Administration/Statistiques/commande.html.twig");
    }
}
