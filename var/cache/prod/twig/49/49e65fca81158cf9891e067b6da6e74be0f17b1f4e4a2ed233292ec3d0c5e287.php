<?php

/* @JeuArticle/Administration/Statistiques/note.html.twig */
class __TwigTemplate_8097cdd4561f4411d86a023a6cc371caf062fb8961cd282120a9a1338540b8cc extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuArticle/Administration/Statistiques/note.html.twig", 1);
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
\t\t<h2 class=\"ind\">TOP 5 des Jeux les mieux notés</h2>
    </div>
\t<div class=\"centre\">
\t\t<table>
\t\t\t<tr>
\t\t\t\t<th>Rang</th>
\t\t\t\t<th>Titre</th>
\t\t\t\t<th>Moyenne notes</th>
\t\t\t</tr>
\t\t";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["art"]) {
            // line 15
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "titre", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["art"], "moyenne", array()), "html", null, true);
            echo "</td>
\t\t\t</tr>
\t\t";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['art'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "\t\t</table>
\t\t<ul>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminStatistiques_index");
        echo "\" class=\"bouton1\">Retour à la liste des Statistiques</a>
\t\t\t</li>\t\t\t\t
\t\t</ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Administration/Statistiques/note.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 24,  92 => 21,  75 => 18,  71 => 17,  67 => 16,  64 => 15,  47 => 14,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Administration/Statistiques/note.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Administration\\Statistiques\\note.html.twig");
    }
}
