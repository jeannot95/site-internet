<?php

/* @JeuArticle/Article/form3.html.twig */
class __TwigTemplate_0dd20c804207e74d151875bf1d449cd57c1e8ceafc82b0d849d1d38409b7993c extends Twig_Template
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
        echo "
<h3>Formulaire d'article</h3>

<div class=\"flex3\">
\t<div class=\"wid33 pad\">
\t\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_update", array("id" => twig_get_attribute($this->env, $this->source, ($context["entity"] ?? null), "id", array()))), "method" => "PUT"));
        echo "
\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? null), 'errors');
        echo "

\t\t";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_de_sortie", array(), "any", true, true)) {
            // line 10
            echo "\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_de_sortie", array()), 'row');
            echo "
\t\t";
        }
        // line 11
        echo "\t

\t\t<div>
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "titre", array()), 'label', array("label" => "Titre de l'article"));
        echo "
\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "titre", array()), 'errors');
        echo "
\t\t\t<div>
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "titre", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "description", array()), 'label', array("label" => "Description de l'article"));
        echo "
\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "description", array()), 'errors');
        echo "
\t\t\t<div>
\t\t\t  ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "description", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "prix", array()), 'label', array("label" => "Prix de l'article"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "prix", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "dateDeSortie", array()), 'label', array("label" => "Sortie de l'article"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "dateDeSortie", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div><br>  
\t\t<div>
\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "ageMin", array()), 'label', array("label" => "Age minimum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "ageMin", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>  
\t\t<div>
\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "ageMax", array()), 'label', array("label" => "Age maximum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "ageMax", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div>
\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "duree", array()), 'label', array("label" => "Temps de jeu"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "duree", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>\t
\t<div class=\"wid33 pad\">\t\t
\t\t<div>
\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "nbJoueurMin", array()), 'label', array("label" => "Nombre de joueur minimum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "nbJoueurMin", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div> \t\t
\t\t<div>
\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "nbJoueurMax", array()), 'label', array("label" => "Nombre de joueur maximum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "nbJoueurMax", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>\t
\t\t<br>
\t\t<div>
\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "image", array()), "file", array()), 'label', array("label" => "Image"));
        echo "
\t\t\t<div>
\t\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "image", array()), "file", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>\t\t
\t\t<br>
\t\t<div>
\t\t\t";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "categories", array()), 'label', array("label" => "Catégories"));
        echo "
\t\t\t<div class=\"select2\">\t
\t\t\t\t";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "categories", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>\t\t
\t\t<br>
\t\t<div>
\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "publicJeu", array()), 'label', array("label" => "Public concerné"));
        echo "
\t\t\t<div class=\"select\">
\t\t\t\t";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "publicJeu", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>\t
\t<div class=\"wid33 pad\">\t\t
\t\t<br>
\t\t";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["edit_form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "bouton2")));
        echo "
\t\t<p>
\t\t\t<a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_index");
        echo "\" class=\"bouton1\">Retour à la liste</a>
\t\t</p>\t 
\t\t";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["edit_form"] ?? null), 'rest');
        echo "

\t\t";
        // line 103
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["edit_form"] ?? null), 'form_end');
        echo "
\t</div>\t
</div>";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Article/form3.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 103,  223 => 101,  218 => 99,  213 => 97,  204 => 91,  199 => 89,  191 => 84,  186 => 82,  178 => 77,  173 => 75,  165 => 70,  160 => 68,  153 => 64,  148 => 62,  139 => 56,  134 => 54,  126 => 49,  121 => 47,  114 => 43,  109 => 41,  102 => 37,  97 => 35,  90 => 31,  85 => 29,  78 => 25,  73 => 23,  69 => 22,  61 => 17,  56 => 15,  52 => 14,  47 => 11,  41 => 10,  39 => 9,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Article/form3.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Article\\form3.html.twig");
    }
}
