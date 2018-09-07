<?php

/* @JeuArticle/Article/form3.html.twig */
class __TwigTemplate_e5f6f3637110ed67fdb9a5b0a9b731624416d38d027f09364d5fbe9eeed6420d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Article/form3.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Article/form3.html.twig"));

        // line 1
        echo "
<h3>Formulaire d'article</h3>

<div class=\"flex3\">
\t<div class=\"wid33 pad\">
\t\t";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 6, $this->source); })()), 'form_start', array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_update", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new Twig_Error_Runtime('Variable "entity" does not exist.', 6, $this->source); })()), "id", array()))), "method" => "PUT"));
        echo "
\t\t";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 7, $this->source); })()), 'errors');
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
        // line 11
        echo "\t

\t\t<div>
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 14, $this->source); })()), "titre", array()), 'label', array("label" => "Titre de l'article"));
        echo "
\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 15, $this->source); })()), "titre", array()), 'errors');
        echo "
\t\t\t<div>
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 17, $this->source); })()), "titre", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 22, $this->source); })()), "description", array()), 'label', array("label" => "Description de l'article"));
        echo "
\t\t\t";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 23, $this->source); })()), "description", array()), 'errors');
        echo "
\t\t\t<div>
\t\t\t  ";
        // line 25
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 25, $this->source); })()), "description", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 29, $this->source); })()), "prix", array()), 'label', array("label" => "Prix de l'article"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 31, $this->source); })()), "prix", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 35, $this->source); })()), "dateDeSortie", array()), 'label', array("label" => "Sortie de l'article"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 37, $this->source); })()), "dateDeSortie", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div><br>  
\t\t<div>
\t\t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 41, $this->source); })()), "ageMin", array()), 'label', array("label" => "Age minimum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 43, $this->source); })()), "ageMin", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>  
\t\t<div>
\t\t\t";
        // line 47
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 47, $this->source); })()), "ageMax", array()), 'label', array("label" => "Age maximum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 49
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 49, $this->source); })()), "ageMax", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div>
\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 54, $this->source); })()), "duree", array()), 'label', array("label" => "Temps de jeu"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 56, $this->source); })()), "duree", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>\t
\t<div class=\"wid33 pad\">\t\t
\t\t<div>
\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 62, $this->source); })()), "nbJoueurMin", array()), 'label', array("label" => "Nombre de joueur minimum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 64, $this->source); })()), "nbJoueurMin", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div> \t\t
\t\t<div>
\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 68, $this->source); })()), "nbJoueurMax", array()), 'label', array("label" => "Nombre de joueur maximum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 70, $this->source); })()), "nbJoueurMax", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>\t
\t\t<br>
\t\t<div>
\t\t\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 75, $this->source); })()), "image", array()), "file", array()), 'label', array("label" => "Image"));
        echo "
\t\t\t<div>
\t\t\t\t";
        // line 77
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 77, $this->source); })()), "image", array()), "file", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>\t\t
\t\t<br>
\t\t<div>
\t\t\t";
        // line 82
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 82, $this->source); })()), "categories", array()), 'label', array("label" => "Catégories"));
        echo "
\t\t\t<div class=\"select2\">\t
\t\t\t\t";
        // line 84
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 84, $this->source); })()), "categories", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>\t\t
\t\t<br>
\t\t<div>
\t\t\t";
        // line 89
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 89, $this->source); })()), "publicJeu", array()), 'label', array("label" => "Public concerné"));
        echo "
\t\t\t<div class=\"select\">
\t\t\t\t";
        // line 91
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 91, $this->source); })()), "publicJeu", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>\t
\t<div class=\"wid33 pad\">\t\t
\t\t<br>
\t\t";
        // line 97
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 97, $this->source); })()), "save", array()), 'widget', array("attr" => array("class" => "bouton2")));
        echo "
\t\t<p>
\t\t\t<a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_index");
        echo "\" class=\"bouton1\">Retour à la liste</a>
\t\t</p>\t 
\t\t";
        // line 101
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 101, $this->source); })()), 'rest');
        echo "

\t\t";
        // line 103
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 103, $this->source); })()), 'form_end');
        echo "
\t</div>\t
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  234 => 103,  229 => 101,  224 => 99,  219 => 97,  210 => 91,  205 => 89,  197 => 84,  192 => 82,  184 => 77,  179 => 75,  171 => 70,  166 => 68,  159 => 64,  154 => 62,  145 => 56,  140 => 54,  132 => 49,  127 => 47,  120 => 43,  115 => 41,  108 => 37,  103 => 35,  96 => 31,  91 => 29,  84 => 25,  79 => 23,  75 => 22,  67 => 17,  62 => 15,  58 => 14,  53 => 11,  47 => 10,  45 => 9,  40 => 7,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<h3>Formulaire d'article</h3>

<div class=\"flex3\">
\t<div class=\"wid33 pad\">
\t\t{{ form_start(edit_form, {'action': path('adminProduits_update', { 'id' : entity.id }), 'method': 'PUT' }) }}
\t\t{{ form_errors(edit_form) }}

\t\t{% if form.date_de_sortie is defined %}
\t\t\t{{ form_row(form.date_de_sortie) }}
\t\t{% endif %}\t

\t\t<div>
\t\t\t{{ form_label(edit_form.titre, \"Titre de l'article\") }}
\t\t\t{{ form_errors(edit_form.titre) }}
\t\t\t<div>
\t\t\t\t{{ form_widget(edit_form.titre) }}
\t\t\t</div>
\t\t</div>

\t\t<div>
\t\t\t{{ form_label(edit_form.description, \"Description de l'article\") }}
\t\t\t{{ form_errors(edit_form.description) }}
\t\t\t<div>
\t\t\t  {{ form_widget(edit_form.description) }}
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t{{ form_label(edit_form.prix, \"Prix de l'article\") }}
\t\t\t<div>  
\t\t\t\t{{ form_widget(edit_form.prix) }}
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t{{ form_label(edit_form.dateDeSortie, \"Sortie de l'article\") }}
\t\t\t<div>  
\t\t\t\t{{ form_widget(edit_form.dateDeSortie) }}
\t\t\t</div>
\t\t</div><br>  
\t\t<div>
\t\t\t{{ form_label(edit_form.ageMin, \"Age minimum\") }}
\t\t\t<div>  
\t\t\t\t{{ form_widget(edit_form.ageMin) }}
\t\t\t</div>
\t\t</div>  
\t\t<div>
\t\t\t{{ form_label(edit_form.ageMax, \"Age maximum\") }}
\t\t\t<div>  
\t\t\t\t{{ form_widget(edit_form.ageMax) }}
\t\t\t</div>
\t\t</div>
\t\t
\t\t<div>
\t\t\t{{ form_label(edit_form.duree, \"Temps de jeu\") }}
\t\t\t<div>  
\t\t\t\t{{ form_widget(edit_form.duree) }}
\t\t\t</div>
\t\t</div>
\t</div>\t
\t<div class=\"wid33 pad\">\t\t
\t\t<div>
\t\t\t{{ form_label(edit_form.nbJoueurMin, \"Nombre de joueur minimum\") }}
\t\t\t<div>  
\t\t\t\t{{ form_widget(edit_form.nbJoueurMin) }}
\t\t\t</div>
\t\t</div> \t\t
\t\t<div>
\t\t\t{{ form_label(edit_form.nbJoueurMax, \"Nombre de joueur maximum\") }}
\t\t\t<div>  
\t\t\t\t{{ form_widget(edit_form.nbJoueurMax) }}
\t\t\t</div>
\t\t</div>\t
\t\t<br>
\t\t<div>
\t\t\t{{ form_label(edit_form.image.file,\"Image\") }}
\t\t\t<div>
\t\t\t\t{{ form_widget(edit_form.image.file) }}
\t\t\t</div>
\t\t</div>\t\t
\t\t<br>
\t\t<div>
\t\t\t{{ form_label(edit_form.categories,\"Catégories\") }}
\t\t\t<div class=\"select2\">\t
\t\t\t\t{{ form_widget(edit_form.categories) }}
\t\t\t</div>
\t\t</div>\t\t
\t\t<br>
\t\t<div>
\t\t\t{{ form_label(edit_form.publicJeu,\"Public concerné\") }}
\t\t\t<div class=\"select\">
\t\t\t\t{{ form_widget(edit_form.publicJeu) }}
\t\t\t</div>
\t\t</div>
\t</div>\t
\t<div class=\"wid33 pad\">\t\t
\t\t<br>
\t\t{{ form_widget(edit_form.save,{'attr': {'class': 'bouton2'}}) }}
\t\t<p>
\t\t\t<a href=\"{{ path('adminProduits_index') }}\" class=\"bouton1\">Retour à la liste</a>
\t\t</p>\t 
\t\t{{ form_rest(edit_form) }}

\t\t{{ form_end(edit_form) }}
\t</div>\t
</div>", "@JeuArticle/Article/form3.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Article\\form3.html.twig");
    }
}
