<?php

/* @JeuArticle/Administration/Categories/show.html.twig */
class __TwigTemplate_ff07a5dc44493cebba46b3aba368dacb9230c5a27fdc209fed5847116250cd25 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuArticle/Administration/Categories/show.html.twig", 1);
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
\t\t<h2 class=\"bordeau ind centre\">Détails de la Catégorie</h2>
    </div>

\t<div  style=\"overflow-x:auto;\"\">
                <table class=\"centre\">
                    <tbody>
                    <tr>
                        <th>Id</th>
                        <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()), "html", null, true);
        echo "</td>
                    </tr>
                    <tr>
                        <th>Nom</th>
                        <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "name", array()), "html", null, true);
        echo "</td>
                    </tr>
                    </tbody>
                </table>
                <br>
                <div>
                    <p>
                        <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_index");
        echo "\" class=\"bouton1\">Retour a la liste</a>
                    </p>
                    <p>
                        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()))), "html", null, true);
        echo "\" class=\"bouton2\">Editer</a>
                    </p>
                    <p>
                        ";
        // line 30
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form');
        echo "
                    </p>
                </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Administration/Categories/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 30,  69 => 27,  63 => 24,  53 => 17,  46 => 13,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Administration/Categories/show.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Administration\\Categories\\show.html.twig");
    }
}
