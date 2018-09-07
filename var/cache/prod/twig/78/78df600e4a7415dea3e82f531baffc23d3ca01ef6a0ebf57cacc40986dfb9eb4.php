<?php

/* @JeuArticle/Article/form.html.twig */
class __TwigTemplate_165c031a051d57cbb092a79b08d2d125b11a6607643b0a3ea07cee7edc7c5158 extends Twig_Template
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
        // line 2
        echo "
<h3>Formulaire d'article</h3>

<div class=\"well\">
  ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

  ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "

  ";
        // line 10
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_de_sortie", array(), "any", true, true)) {
            // line 11
            echo "\t";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "date_de_sortie", array()), 'row');
            echo "
  ";
        }
        // line 12
        echo "\t


  <div class=\"form-group\">

    ";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Titre de l'article"));
        echo "


    ";
        // line 20
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", array()), 'errors');
        echo "

    <div class=\"col-sm-8\">
      ";
        // line 23
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Description de l'article"));
        echo "
    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", array()), 'errors');
        echo "
    <div class=\"col-sm-8\">
      ";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
    </div>
  </div>
  <div class=\"form-group\">
\t";
        // line 35
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prix", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Prix de l'article"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prix", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>
  <div class=\"form-group\">
\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateDeSortie", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Sortie de l'article"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateDeSortie", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>  <div class=\"form-group\">
\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ageMin", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Age minimum"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ageMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>  <div class=\"form-group\">
\t";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ageMax", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Age maximum"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 53
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ageMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>  <div class=\"form-group\">
\t";
        // line 56
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "duree", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Temps de jeu"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "duree", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>  <div class=\"form-group\">
\t";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nbJoueurMin", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de joueur minimum"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nbJoueurMin", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div>  <div class=\"form-group\">
\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nbJoueurMax", array()), 'label', array("label_attr" => array("class" => "col-sm-2 control-label"), "label" => "Nombre de joueur maximum"));
        echo "
\t<div class=\"col-sm-8\">  
\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nbJoueurMax", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t</div>
  </div> 
  Ajoutez une Image
  ";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", array()), "file", array()), 'row');
        echo " <br>
 ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categories", array()), 'row');
        echo "  
\t<br><br>
\t";
        // line 75
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "publicJeu", array()), 'row');
        echo "
  ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "

\t 
  ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "

  ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
</div>";
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
        return array (  193 => 81,  188 => 79,  182 => 76,  178 => 75,  173 => 73,  169 => 72,  162 => 68,  157 => 66,  151 => 63,  146 => 61,  140 => 58,  135 => 56,  129 => 53,  124 => 51,  118 => 48,  113 => 46,  107 => 43,  102 => 41,  95 => 37,  90 => 35,  83 => 31,  78 => 29,  74 => 28,  66 => 23,  60 => 20,  54 => 17,  47 => 12,  41 => 11,  39 => 10,  34 => 8,  29 => 6,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Article/form.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Article\\form.html.twig");
    }
}
