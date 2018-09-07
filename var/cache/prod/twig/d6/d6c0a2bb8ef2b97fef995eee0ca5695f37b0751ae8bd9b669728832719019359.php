<?php

/* @JeuPages/Page/menu.html.twig */
class __TwigTemplate_3bd0f6d19400d78b81a56030f1ff7e4f693171f1cc76df7b064e8d591372739c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 2
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_pages_homepage", array("id" => twig_get_attribute($this->env, $this->source, $context["page"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "titre", array()), "html", null, true);
            echo "</a><br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 4
        echo "<a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">Contact</a><br />";
    }

    public function getTemplateName()
    {
        return "@JeuPages/Page/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 4,  27 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuPages/Page/menu.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\PagesBundle\\Resources\\views\\Page\\menu.html.twig");
    }
}
