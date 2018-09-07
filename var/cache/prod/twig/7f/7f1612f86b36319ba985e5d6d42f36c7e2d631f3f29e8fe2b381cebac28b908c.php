<?php

/* @JeuArticle/Administration/PublicJeu/new.html.twig */
class __TwigTemplate_658ea47796ec311fef96aab6be6e99a242e28e1a4b9c9cced1a1151b10d1918b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuArticle/Administration/PublicJeu/new.html.twig", 1);
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
        <h2 class=\"ind\">Ajouter un public visé</h2>
    </div>

    <div>
\t\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublic_create"), "method" => "POST"));
        echo "
\t\t<p>
\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'label');
        echo "
\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'widget');
        echo "
\t\t</p>
\t\t<div>
\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublic_index");
        echo "\" class=\"bouton1\">Retour à la liste</a>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "submit", array()), 'widget');
        echo "
\t\t\t</p>
\t\t</div>
\t\t";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Administration/PublicJeu/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  64 => 19,  58 => 16,  51 => 12,  47 => 11,  42 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Administration/PublicJeu/new.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Administration\\PublicJeu\\new.html.twig");
    }
}
