<?php

/* JeuPagesBundle:Page:pages.html.twig */
class __TwigTemplate_d175a87958cb3ba19ae2bc27079ea824ad45e781fdbd1fabcbfd480052a70c88 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuCoreBundle::layout.html.twig", "JeuPagesBundle:Page:pages.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        echo "Jeannot - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "titre", array()), "html", null, true);
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "titre", array()), "html", null, true);
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "<div class=\"container\">
    <div class=\"row\">
        <h1>";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "titre", array()), "html", null, true);
        echo "</h1>
        <div class=\"col-md-12\">
            ";
        // line 11
        echo twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenu", array());
        echo "
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "JeuPagesBundle:Page:pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  54 => 9,  50 => 7,  47 => 6,  41 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuPagesBundle:Page:pages.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\PagesBundle/Resources/views/Page/pages.html.twig");
    }
}
