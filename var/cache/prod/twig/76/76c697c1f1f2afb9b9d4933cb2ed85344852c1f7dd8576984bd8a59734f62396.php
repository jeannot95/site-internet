<?php

/* @JeuArticle/Administration/Avis/show.html.twig */
class __TwigTemplate_ac03e16826a239eeb9d18ce678140b3ff9c82f38a0405fc86502b1150be649c7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuArticle/Administration/Avis/show.html.twig", 1);
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
        <h2 class=\"ind bordeau\">Details de l'avis \"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "titre", array()), "html", null, true);
        echo "\"</h2>
    </div>
\t<div style=\"overflow-x:auto;\"\">
\t\t\t<table class=\"centre\">
\t\t\t\t<tbody>
\t\t\t\t<tr>
\t\t\t\t\t<th>Id</th>
\t\t\t\t\t<td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>titre</th>
\t\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "titre", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>Jeux</th>
\t\t\t\t\t<td>";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "article", array()), "titre", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>\t\t\t\t\t
\t\t\t\t<tr>
\t\t\t\t\t<th>auteur</th>
\t\t\t\t\t<td>";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "user", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>date</th>
\t\t\t\t\t<td>";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "date", array()), "d/m/Y"), "html", null, true);
        echo "</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>note</th>
\t\t\t\t\t<td>";
        // line 32
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "note", array()), "html", null, true);
        echo "/5</td>
\t\t\t\t</tr>
\t\t\t\t<tr>
\t\t\t\t\t<th>contenu</th>
\t\t\t\t\t<td>";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "content", array()), "html", null, true);
        echo "</td>
\t\t\t\t</tr>\t\t\t\t\t
\t\t\t\t</tbody>
\t\t\t</table>
\t\t\t<br>
\t\t\t<div>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminAvis_index");
        echo "\" class=\"bouton1\">Retour a la liste</a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t";
        // line 46
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form');
        echo "
\t\t\t\t</p>
\t\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Administration/Avis/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 46,  100 => 43,  90 => 36,  83 => 32,  76 => 28,  69 => 24,  62 => 20,  55 => 16,  48 => 12,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Administration/Avis/show.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Administration\\Avis\\show.html.twig");
    }
}
