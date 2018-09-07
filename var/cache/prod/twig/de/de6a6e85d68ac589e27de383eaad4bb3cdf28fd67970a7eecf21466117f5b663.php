<?php

/* @JeuPages/Administration/new.html.twig */
class __TwigTemplate_9c09caf21f4f24d2d530233404c722688eb17f0a5a93a4b136e64f0022a42628 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuPages/Administration/new.html.twig", 1);
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
        <h2 class=\"centre ind\">Creation d'une page</h2>
    </div>
    <div>
\t\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start');
        echo "
\t\t<p>
\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", array()), 'label');
        echo "
\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", array()), 'widget');
        echo "
\t\t</p>
\t\t<p>
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contenu", array()), 'label');
        echo "
\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "contenu", array()), 'widget');
        echo "
\t\t</p>
\t\t<div>
\t\t\t<p>
\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", array()), 'widget');
        echo "
\t\t\t</p>
\t\t\t";
        // line 21
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages");
        echo "\" class=\"bouton1\">Retour</a>
\t\t\t</p>
\t\t</div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@JeuPages/Administration/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 23,  72 => 21,  67 => 19,  60 => 15,  56 => 14,  50 => 11,  46 => 10,  41 => 8,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuPages/Administration/new.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\PagesBundle\\Resources\\views\\Administration\\new.html.twig");
    }
}
