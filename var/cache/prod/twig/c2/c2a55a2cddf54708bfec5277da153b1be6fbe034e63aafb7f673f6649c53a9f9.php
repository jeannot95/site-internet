<?php

/* @JeuArticle/Administration/PublicJeu/edit.html.twig */
class __TwigTemplate_e568b96cfa83f4bb15a1f9e1263cb67da1a371c0f9db79ee1b5f28739e673c64 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "@JeuArticle/Administration/PublicJeu/edit.html.twig", 1);
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
        <h2 class=\"centre ind\">Edition du public</h2>
    </div>

    <div>
\t\t";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublic_update", array("id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()))), "method" => "PUT"));
        echo "
\t\t<p>
\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "name", array()), 'label');
        echo "
\t\t\t";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "name", array()), 'widget');
        echo "
\t\t</p>
\t\t<br>
\t\t<div>
\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublic_index");
        echo "\" class=\"bouton1\">Retour à la liste</a>
\t\t\t</p>
\t\t\t<p>
\t\t\t\t";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "submit", array()), 'widget');
        echo "
\t\t\t</p>
\t\t\t\t";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
\t\t\t<p>
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
        return "@JeuArticle/Administration/PublicJeu/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 24,  70 => 22,  65 => 20,  59 => 17,  51 => 12,  47 => 11,  42 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Administration/PublicJeu/edit.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Administration\\PublicJeu\\edit.html.twig");
    }
}
