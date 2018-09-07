<?php

/* JeuArticleBundle:Administration/Categories:index.html.twig */
class __TwigTemplate_3b498dbb58130d9be9da0cac084dc924f0f22ea8a8e20b4355e321e297029c01 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuArticleBundle:Administration/Categories:index.html.twig", 1);
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
\t\t<h2 class=\"bordeau ind centre\">Liste des catégories</h2>
    </div>

    <div class=\"centre style=\"overflow-x:auto;\"\">
                <table>
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nom</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "                        <tr>
                            <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_show", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()), "html", null, true);
            echo "</a>
                            </td>
                            <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "name", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_show", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">voir</a> / 
                                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">editer</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "                    </tbody>
                </table>
\t\t\t\t<br>
                        <a href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_new");
        echo "\" class=\"bouton2\">Ajouter une
                            categorie</a>
    </div>
";
    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Administration/Categories:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 32,  84 => 29,  74 => 25,  70 => 24,  65 => 22,  58 => 20,  55 => 19,  51 => 18,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuArticleBundle:Administration/Categories:index.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Administration/Categories/index.html.twig");
    }
}
