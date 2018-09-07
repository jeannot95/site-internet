<?php

/* JeuArticleBundle:Administration/Categories:edit.html.twig */
class __TwigTemplate_4c8c4b55289f21a302af17f4759546a705b4366731f22e8a03f4b6c49fe0890d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuArticleBundle:Administration/Categories:edit.html.twig", 1);
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
\t\t<h2 class=\"bordeau ind centre\">Edition de la Catégorie</h2>
    </div>

    <div>
        <div>
                ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_update", array("id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()))), "method" => "PUT"));
        echo "
                <p>
                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "name", array()), 'label', array("label_attr" => array("class" => "ind"), "label" => "Nom"));
        echo "
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "name", array()), 'widget');
        echo "
                </p>
                <br>
                <div>
                    <p>
                        <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_index");
        echo "\" class=\"bouton1\">Retour à la liste</a>
                    </p>
                    <p>
                        ";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "submit", array()), 'widget');
        echo "
                    </p>
                    ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
                    <p>
                        ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form');
        echo "
                    </p>
                </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Administration/Categories:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 25,  71 => 23,  66 => 21,  60 => 18,  52 => 13,  48 => 12,  43 => 10,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuArticleBundle:Administration/Categories:edit.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Administration/Categories/edit.html.twig");
    }
}
