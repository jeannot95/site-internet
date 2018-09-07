<?php

/* @JeuArticle/Administration/PublicJeu/show.html.twig */
class __TwigTemplate_339041c4eebb425accc986b830f483dd433affdec29228f850ad64f97fafd771 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuArticle/Administration/PublicJeu/show.html.twig", 1);
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
        <h2 class=\"ind\">Details du public visé ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", array()), "html", null, true);
        echo "</h2>
    </div>

    <div>
\t\t<table>
\t\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Nom</th>
\t\t\t\t<td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<br />
\t\t<div>
\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublic_index");
        echo "\" class=\"bouton1\">Retour a la liste</a>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublic_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"bouton2\">Editer</a>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form');
        echo "
\t\t\t</p>
\t\t</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Administration/PublicJeu/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 30,  72 => 27,  66 => 24,  56 => 17,  49 => 13,  38 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Administration/PublicJeu/show.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Administration\\PublicJeu\\show.html.twig");
    }
}
