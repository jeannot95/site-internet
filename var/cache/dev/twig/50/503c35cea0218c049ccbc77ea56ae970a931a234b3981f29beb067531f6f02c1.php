<?php

/* @JeuArticle/Article/form.html.twig */
class __TwigTemplate_0ec9f86e07b5cf8f077460e7c2335af2d6ba364efb7656bac23b30e29d3ffa4c extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Article/form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Article/form.html.twig"));

        // line 2
        echo "
<h3>Formulaire d'article</h3>

<div class=\"well\">
  ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 8, $this->source); })()), 'errors');
        echo "

  ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_de_sortie", array(), "any", true, true)) {
            // line 11
            echo "\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 11, $this->source); })()), "date_de_sortie", array()), 'row');
            echo "
  ";
        }
        // line 12
        echo "\t


  <div class=\"form-group\">

    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->source); })()), "titre", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'article"));
        echo "


    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 20, $this->source); })()), "titre", array()), 'errors');
        echo "

    <div class=\"col-sm-8\">
      ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->source); })()), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->source); })()), "description", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Description de l'article"));
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->source); })()), "description", array()), 'errors');
        echo "
    <div class=\"col-sm-8\">
      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->source); })()), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 35, $this->source); })()), "prix", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Prix de l'article"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->source); })()), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>
  <div class=\"form-group\">
\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 41, $this->source); })()), "dateDeSortie", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Sortie de l'article"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "dateDeSortie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>  <div class=\"form-group\">
\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 46, $this->source); })()), "ageMin", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Age minimum"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "ageMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>  <div class=\"form-group\">
\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->source); })()), "ageMax", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Age maximum"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 53, $this->source); })()), "ageMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>  <div class=\"form-group\">
\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 56, $this->source); })()), "duree", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Temps de jeu"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>  <div class=\"form-group\">
\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "nbJoueurMin", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de joueur minimum"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 63, $this->source); })()), "nbJoueurMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>  <div class=\"form-group\">
\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 66, $this->source); })()), "nbJoueurMax", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de joueur maximum"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 68, $this->source); })()), "nbJoueurMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div> 
  Ajoutez une Image
  ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "image", array()), "file", array()), 'row');
        echo " <br>
 ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "categories", array()), 'row');
        echo "  
\t<br><br>
\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 75, $this->source); })()), "publicJeu", array()), 'row');
        echo "
  ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 76, $this->source); })()), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

\t 
  ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), 'rest');
        echo "

  ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        echo "
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JeuArticle/Article/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 81,  194 => 79,  188 => 76,  184 => 75,  179 => 73,  175 => 72,  168 => 68,  163 => 66,  157 => 63,  152 => 61,  146 => 58,  141 => 56,  135 => 53,  130 => 51,  124 => 48,  119 => 46,  113 => 43,  108 => 41,  101 => 37,  96 => 35,  89 => 31,  84 => 29,  80 => 28,  72 => 23,  66 => 20,  60 => 17,  53 => 12,  47 => 11,  45 => 10,  40 => 8,  35 => 6,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/form.html.twig #}

<h3>Formulaire d'article</h3>

<div class=\"well\">
  {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}

  {{ form_errors(form) }}

  {% if form.date_de_sortie is defined %}
\t{{ form_row(form.date_de_sortie) }}
  {% endif %}\t


  <div class=\"form-group\">

    {{ form_label(form.titre, \"Titre de l'article\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}


    {{ form_errors(form.titre) }}

    <div class=\"col-sm-8\">
      {{ form_widget(form.titre, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>

  <div class=\"form-group\">
    {{ form_label(form.description, \"Description de l'article\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
    {{ form_errors(form.description) }}
    <div class=\"col-sm-8\">
      {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
    </div>
  </div>
  <div class=\"form-group\">
\t{{ form_label(form.prix, \"Prix de l'article\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
\t<div class=\"col-sm-8\">  
\t{{ form_widget(form.prix, {'attr': {'class': 'form-control'}}) }}
\t</div>
  </div>
  <div class=\"form-group\">
\t{{ form_label(form.dateDeSortie, \"Sortie de l'article\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
\t<div class=\"col-sm-8\">  
\t{{ form_widget(form.dateDeSortie, {'attr': {'class': 'form-control'}}) }}
\t</div>
  </div>  <div class=\"form-group\">
\t{{ form_label(form.ageMin, \"Age minimum\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
\t<div class=\"col-sm-8\">  
\t{{ form_widget(form.ageMin, {'attr': {'class': 'form-control'}}) }}
\t</div>
  </div>  <div class=\"form-group\">
\t{{ form_label(form.ageMax, \"Age maximum\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
\t<div class=\"col-sm-8\">  
\t{{ form_widget(form.ageMax, {'attr': {'class': 'form-control'}}) }}
\t</div>
  </div>  <div class=\"form-group\">
\t{{ form_label(form.duree, \"Temps de jeu\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
\t<div class=\"col-sm-8\">  
\t{{ form_widget(form.duree, {'attr': {'class': 'form-control'}}) }}
\t</div>
  </div>  <div class=\"form-group\">
\t{{ form_label(form.nbJoueurMin, \"Nombre de joueur minimum\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
\t<div class=\"col-sm-8\">  
\t{{ form_widget(form.nbJoueurMin, {'attr': {'class': 'form-control'}}) }}
\t</div>
  </div>  <div class=\"form-group\">
\t{{ form_label(form.nbJoueurMax, \"Nombre de joueur maximum\", {'label_attr': {'class': 'col-sm-2 control-label'}}) }}
\t<div class=\"col-sm-8\">  
\t{{ form_widget(form.nbJoueurMax, {'attr': {'class': 'form-control'}}) }}
\t</div>
  </div> 
  Ajoutez une Image
  {{ form_row(form.image.file) }} <br>
 {{ form_row(form.categories) }}  
\t<br><br>
\t{{ form_row(form.publicJeu) }}
  {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}

\t 
  {{ form_rest(form) }}

  {{ form_end(form) }}
</div>", "@JeuArticle/Article/form.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Article\\form.html.twig");
    }
}
