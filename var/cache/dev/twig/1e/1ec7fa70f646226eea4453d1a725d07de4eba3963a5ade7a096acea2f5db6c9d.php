<?php

/* JeuArticleBundle:Article:form2.html.twig */
class __TwigTemplate_28bcebdf72da7e64029399196fd962d5b57220b0582f10a3e9ef542386d0449a extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Article:form2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Article:form2.html.twig"));

        // line 2
        echo "
<h3>Formulaire de création d'article</h3>

<div class=\"flex3\">
\t<div class=\"wid33 pad\">
\t\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', array("attr" => array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_create"), "method" => "POST")));
        echo "
\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), 'errors');
        echo "
\t\t";
        // line 9
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_de_sortie", array(), "any", true, true)) {
            // line 10
            echo "\t\t\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->source); })()), "date_de_sortie", array()), 'row');
            echo "
\t\t";
        }
        // line 12
        echo "\t\t
\t\t<div>
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 14, $this->source); })()), "titre", array()), 'label', array("label" => "Titre de l'article"));
        echo "
\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->source); })()), "titre", array()), 'errors');
        echo "
\t\t\t<div>
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "titre", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 21, $this->source); })()), "description", array()), 'label', array("label" => "Description de l'article"));
        echo "
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->source); })()), "description", array()), 'errors');
        echo "
\t\t\t<div>
\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->source); })()), "description", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "prix", array()), 'label', array("label" => "Prix de l'article"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 30, $this->source); })()), "prix", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->source); })()), "dateDeSortie", array()), 'label', array("label" => "Sortie de l'article"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), "dateDeSortie", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div><br>  
\t\t<div>
\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "ageMin", array()), 'label', array("label" => "Age minimum"));
        echo "
\t\t\t<div>  
\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "ageMin", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>  
\t\t<div>
\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "ageMax", array()), 'label', array("label" => "Age maximum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "ageMax", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>  
\t\t<div>
\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "duree", array()), 'label', array("label" => "Temps de jeu"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 54, $this->source); })()), "duree", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"wid33 pad\">
\t\t<div>
\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 60, $this->source); })()), "nbJoueurMin", array()), 'label', array("label" => "Nombre de joueur minimum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->source); })()), "nbJoueurMin", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>  
\t\t<div>
\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "nbJoueurMax", array()), 'label', array("label" => "Nombre de joueur maximum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "nbJoueurMax", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div> 
\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 71, $this->source); })()), "image", array()), "file", array()), 'label', array("label" => "Image"));
        echo "
\t\t";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "image", array()), "file", array()), 'widget');
        echo " <br>
\t\t<div>
\t\t\t";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "categories", array()), 'label', array("label" => "Catégories"));
        echo "
\t\t\t<div class=\"select2\">
\t\t\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "categories", array()), 'widget');
        echo "
\t\t\t</div>\t
\t\t</div>\t\t
\t\t<br><br>
\t\t<div>
\t\t\t";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), "publicJeu", array()), 'label', array("label" => "Public concerné"));
        echo "
\t\t\t<div class=\"select\">
\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), "publicJeu", array()), 'widget');
        echo "
\t\t\t</div>\t
\t\t</div>\t
\t</div>
\t<div class=\"wid33 pad\">\t
\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->source); })()), "save", array()), 'widget', array("attr" => array("class" => "bouton2")));
        echo "
\t\t 
\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 90, $this->source); })()), 'rest');
        echo "
\t\t";
        // line 91
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
        echo "
\t\t<p>
\t\t\t<a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_index");
        echo "\" class=\"bouton1\">Retour a la liste des produits</a>
\t\t</p>
\t</div>\t
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Article:form2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 93,  217 => 91,  213 => 90,  208 => 88,  200 => 83,  195 => 81,  187 => 76,  182 => 74,  177 => 72,  173 => 71,  167 => 68,  162 => 66,  155 => 62,  150 => 60,  141 => 54,  136 => 52,  129 => 48,  124 => 46,  117 => 42,  112 => 40,  105 => 36,  100 => 34,  93 => 30,  88 => 28,  81 => 24,  76 => 22,  72 => 21,  65 => 17,  60 => 15,  56 => 14,  52 => 12,  46 => 10,  44 => 9,  40 => 8,  36 => 7,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

<h3>Formulaire de création d'article</h3>

<div class=\"flex3\">
\t<div class=\"wid33 pad\">
\t\t{{ form_start(form, {'attr': {'action': path('adminProduits_create'), 'method': 'POST'}}) }}
\t\t{{ form_errors(form) }}
\t\t{% if form.date_de_sortie is defined %}
\t\t\t{{ form_row(form.date_de_sortie) }}
\t\t{% endif %}
\t\t
\t\t<div>
\t\t\t{{ form_label(form.titre, \"Titre de l'article\") }}
\t\t\t{{ form_errors(form.titre) }}
\t\t\t<div>
\t\t\t\t{{ form_widget(form.titre) }}
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t{{ form_label(form.description, \"Description de l'article\") }}
\t\t\t{{ form_errors(form.description) }}
\t\t\t<div>
\t\t\t\t{{ form_widget(form.description) }}
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t{{ form_label(form.prix, \"Prix de l'article\") }}
\t\t\t<div>  
\t\t\t\t{{ form_widget(form.prix) }}
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t{{ form_label(form.dateDeSortie, \"Sortie de l'article\") }}
\t\t\t<div>  
\t\t\t\t{{ form_widget(form.dateDeSortie) }}
\t\t\t</div>
\t\t</div><br>  
\t\t<div>
\t\t\t{{ form_label(form.ageMin, \"Age minimum\") }}
\t\t\t<div>  
\t\t\t{{ form_widget(form.ageMin) }}
\t\t\t</div>
\t\t</div>  
\t\t<div>
\t\t{{ form_label(form.ageMax, \"Age maximum\") }}
\t\t\t<div>  
\t\t\t\t{{ form_widget(form.ageMax) }}
\t\t\t</div>
\t\t</div>  
\t\t<div>
\t\t\t{{ form_label(form.duree, \"Temps de jeu\") }}
\t\t\t<div>  
\t\t\t\t{{ form_widget(form.duree) }}
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"wid33 pad\">
\t\t<div>
\t\t\t{{ form_label(form.nbJoueurMin, \"Nombre de joueur minimum\") }}
\t\t\t<div>  
\t\t\t\t{{ form_widget(form.nbJoueurMin) }}
\t\t\t</div>
\t\t</div>  
\t\t<div>
\t\t\t{{ form_label(form.nbJoueurMax, \"Nombre de joueur maximum\") }}
\t\t\t<div>  
\t\t\t\t{{ form_widget(form.nbJoueurMax) }}
\t\t\t</div>
\t\t</div> 
\t\t{{ form_label(form.image.file,\"Image\") }}
\t\t{{ form_widget(form.image.file) }} <br>
\t\t<div>
\t\t\t{{ form_label(form.categories,\"Catégories\") }}
\t\t\t<div class=\"select2\">
\t\t\t\t{{ form_widget(form.categories) }}
\t\t\t</div>\t
\t\t</div>\t\t
\t\t<br><br>
\t\t<div>
\t\t\t{{ form_label(form.publicJeu,\"Public concerné\") }}
\t\t\t<div class=\"select\">
\t\t\t\t{{ form_widget(form.publicJeu) }}
\t\t\t</div>\t
\t\t</div>\t
\t</div>
\t<div class=\"wid33 pad\">\t
\t\t{{ form_widget(form.save, {'attr': {'class': 'bouton2'}}) }}
\t\t 
\t\t{{ form_rest(form) }}
\t\t{{ form_end(form) }}
\t\t<p>
\t\t\t<a href=\"{{ path('adminProduits_index') }}\" class=\"bouton1\">Retour a la liste des produits</a>
\t\t</p>
\t</div>\t
</div>", "JeuArticleBundle:Article:form2.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Article/form2.html.twig");
    }
}
