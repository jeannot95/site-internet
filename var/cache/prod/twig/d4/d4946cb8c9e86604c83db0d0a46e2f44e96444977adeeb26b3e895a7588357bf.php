<?php

/* @JeuPages/Administration/edit.html.twig */
class __TwigTemplate_bd1ffdfbb053a91e0549011c780627df61c451f6449eee7dc0c3e61d085a4c35 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuPages/Administration/edit.html.twig", 1);
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
        <h2 class=\"centre ind\">Edition d'une page</h2>
    </div>
    <div>
\t\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start');
        echo "
\t\t<p>
\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "titre", array()), 'row');
        echo "
\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "contenu", array()), 'row');
        echo "
\t\t</p>
\t\t<div>
\t\t\t<p>
\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "submit", array()), 'row');
        echo "
\t\t\t</p>
\t\t\t<p>
\t\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages");
        echo "\" class=\"bouton1\">Retour</a>
\t\t\t</p>
\t\t\t<p class=\"control\">
\t\t\t\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form');
        echo "
\t\t\t</p>
\t\t</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@JeuPages/Administration/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  69 => 21,  63 => 18,  57 => 15,  50 => 11,  46 => 10,  41 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuPages/Administration/edit.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\PagesBundle\\Resources\\views\\Administration\\edit.html.twig");
    }
}
