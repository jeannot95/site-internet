<?php

/* :modulesUsed:navigation.html.twig */
class __TwigTemplate_cbe19e45ee9c20524ed7f75a23df527103baa65aa8a5b77759db10cdcc669439 extends Twig_Template
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
        echo "<div class=\"box related-list\">
    <p class=\"menu-label title indieflower\">
        Produits
    </p>
    <ul class=\"menu-list\">
        ";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("JeuArticleBundle:Categories:menu"));
        echo "
    </ul>
</div>";
    }

    public function getTemplateName()
    {
        return ":modulesUsed:navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":modulesUsed:navigation.html.twig", "C:\\wamp\\www\\jeux\\app/Resources\\views/modulesUsed/navigation.html.twig");
    }
}
