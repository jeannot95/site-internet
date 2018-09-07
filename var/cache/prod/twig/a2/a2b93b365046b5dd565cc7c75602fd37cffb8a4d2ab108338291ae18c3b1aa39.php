<?php

/* @JeuPages/Administration/show.html.twig */
class __TwigTemplate_a7380b10e0a20e507de4a48bbb5b7560d303af2beb302863a677b18b4cc68e54 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuPages/Administration/show.html.twig", 1);
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
        <h2 class=\"centre ind\">Details de la page</h2>
    </div>
    <div>
\t\t<table>
\t\t\t<tbody>
\t\t\t<tr>
\t\t\t\t<th>Id</th>
\t\t\t\t<td>";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Titre</th>
\t\t\t\t<td>";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "titre", array()), "html", null, true);
        echo "</td>
\t\t\t</tr>
\t\t\t<tr>
\t\t\t\t<th>Contenu</th>
\t\t\t\t<td>";
        // line 20
        echo twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "contenu", array());
        echo "</td>
\t\t\t</tr>
\t\t\t</tbody>
\t\t</table>
\t\t<br />
\t\t<nav>
\t\t\t<div>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages");
        echo "\" class=\"bouton1\">Retour a la liste des pages</a>
\t\t\t\t</p>
\t\t\t\t<p>
\t\t\t\t\t<a href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"bouton2\">Editer</a>
\t\t\t\t</p>
\t\t\t\t<p>";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form');
        echo "</p>
\t\t\t</div>
\t\t</nav>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@JeuPages/Administration/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  76 => 31,  70 => 28,  59 => 20,  52 => 16,  45 => 12,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuPages/Administration/show.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\PagesBundle\\Resources\\views\\Administration\\show.html.twig");
    }
}
