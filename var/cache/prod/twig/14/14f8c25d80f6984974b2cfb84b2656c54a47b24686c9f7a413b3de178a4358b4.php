<?php

/* JeuPagesBundle:Administration:index.html.twig */
class __TwigTemplate_9dd663dd1e772a385b89428077f3f6b6bea7fa9c9847ba9cb753b1593549df85 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuPagesBundle:Administration:index.html.twig", 1);
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
                <h2 class=\"centre ind\">Liste des Pages</h2>
    </div>

    <div class=\"centre\">
                <table>
                    <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["entities"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "                        <tr>
                            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "titre", array()), "html", null, true);
            echo "</td>
                            <td>
                                <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages_show", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">Voir</a> / 
                                <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", array()))), "html", null, true);
            echo "\">Editer</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                    </tbody>
                </table>

                <ul>
                    <li>
                        <a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages_new");
        echo "\" class=\"bouton2\">nouvelle page</a>
                    </li>
                </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "JeuPagesBundle:Administration:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 31,  76 => 26,  66 => 22,  62 => 21,  57 => 19,  54 => 18,  50 => 17,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuPagesBundle:Administration:index.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\PagesBundle/Resources/views/Administration/index.html.twig");
    }
}
