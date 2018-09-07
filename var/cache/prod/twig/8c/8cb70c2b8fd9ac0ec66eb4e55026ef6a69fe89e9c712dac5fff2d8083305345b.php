<?php

/* @Twig/Exception/exception.txt.twig */
class __TwigTemplate_2085e077e9e7e88a5ee932fa7e495c064806e0d1a1b9a673ecc5d9083a8411dc extends Twig_Template
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
        echo "[exception] ";
        echo ((((($context["status_code"] ?? null) . " | ") . ($context["status_text"] ?? null)) . " | ") . twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "class", array()));
        echo "
[message] ";
        // line 2
        echo twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "message", array());
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["exception"] ?? null), "toarray", array()));
        foreach ($context['_seq'] as $context["i"] => $context["e"]) {
            // line 4
            echo "[";
            echo ($context["i"] + 1);
            echo "] ";
            echo twig_get_attribute($this->env, $this->source, $context["e"], "class", array());
            echo ": ";
            echo twig_get_attribute($this->env, $this->source, $context["e"], "message", array());
            echo "
";
            // line 5
            echo twig_include($this->env, $context, "@Twig/Exception/traces.txt.twig", array("exception" => $context["e"]), false);
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['i'], $context['e'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  36 => 4,  32 => 3,  28 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Twig/Exception/exception.txt.twig", "C:\\wamp\\www\\jeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.txt.twig");
    }
}
