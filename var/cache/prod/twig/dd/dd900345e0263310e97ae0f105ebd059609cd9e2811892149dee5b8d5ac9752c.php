<?php

/* @JeuArticle/Article/form2.html.twig */
class __TwigTemplate_c6f1f3f4700544ad702776424e79a5d5d732114bd21769f3e456fbf0e2320b64 extends Twig_Template
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
<h3>Formulaire de création d'article</h3>

<div class=\"flex3\">
\t<div class=\"wid33 pad\"
\t\t";
        // line 7
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_create"), "method" => "POST")));
        echo "
\t\t";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
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
        // line 12
        echo "\t\t
\t\t<div>
\t\t\t";
        // line 14
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", array()), 'label', array("label" => "Titre de l'article"));
        echo "
\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", array()), 'errors');
        echo "
\t\t\t<div>
\t\t\t\t";
        // line 17
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "titre", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t";
        // line 21
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", array()), 'label', array("label" => "Description de l'article"));
        echo "
\t\t\t";
        // line 22
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", array()), 'errors');
        echo "
\t\t\t<div>
\t\t\t\t";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prix", array()), 'label', array("label" => "Prix de l'article"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 30
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "prix", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t\t<div>
\t\t\t";
        // line 34
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateDeSortie", array()), 'label', array("label" => "Sortie de l'article"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 36
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "dateDeSortie", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div><br>  
\t\t<div>
\t\t\t";
        // line 40
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ageMin", array()), 'label', array("label" => "Age minimum"));
        echo "
\t\t\t<div>  
\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ageMin", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>  
\t\t<div>
\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ageMax", array()), 'label', array("label" => "Age maximum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "ageMax", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>  
\t\t<div>
\t\t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "duree", array()), 'label', array("label" => "Temps de jeu"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "duree", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"wid33 pad\">
\t\t<div>
\t\t\t";
        // line 60
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nbJoueurMin", array()), 'label', array("label" => "Nombre de joueur minimum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nbJoueurMin", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div>  
\t\t<div>
\t\t\t";
        // line 66
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nbJoueurMax", array()), 'label', array("label" => "Nombre de joueur maximum"));
        echo "
\t\t\t<div>  
\t\t\t\t";
        // line 68
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "nbJoueurMax", array()), 'widget');
        echo "
\t\t\t</div>
\t\t</div> 
\t\t";
        // line 71
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", array()), "file", array()), 'label', array("label" => "Image"));
        echo "
\t\t";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "image", array()), "file", array()), 'widget');
        echo " <br>
\t\t<div>
\t\t\t";
        // line 74
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categories", array()), 'label', array("label" => "Catégories"));
        echo "
\t\t\t<div class=\"select2\">
\t\t\t\t";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categories", array()), 'widget');
        echo "
\t\t\t</div>\t
\t\t</div>\t\t
\t\t<br><br>
\t\t<div>
\t\t\t";
        // line 81
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "publicJeu", array()), 'label', array("label" => "Public concerné"));
        echo "
\t\t\t<div class=\"select\">
\t\t\t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "publicJeu", array()), 'widget');
        echo "
\t\t\t</div>\t
\t\t</div>\t
\t</div>
\t<div class=\"wid33 pad\">\t
\t\t";
        // line 88
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "save", array()), 'widget', array("attr" => array("class" => "bouton2")));
        echo "
\t\t 
\t\t";
        // line 90
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
\t\t";
        // line 91
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
        echo "
\t\t<p>
\t\t\t<a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_index");
        echo "\" class=\"bouton1\">Retour a la liste des produits</a>
\t\t</p>
\t</div>\t
</div>";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Article/form2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 93,  211 => 91,  207 => 90,  202 => 88,  194 => 83,  189 => 81,  181 => 76,  176 => 74,  171 => 72,  167 => 71,  161 => 68,  156 => 66,  149 => 62,  144 => 60,  135 => 54,  130 => 52,  123 => 48,  118 => 46,  111 => 42,  106 => 40,  99 => 36,  94 => 34,  87 => 30,  82 => 28,  75 => 24,  70 => 22,  66 => 21,  59 => 17,  54 => 15,  50 => 14,  46 => 12,  40 => 10,  38 => 9,  34 => 8,  30 => 7,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Article/form2.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Article\\form2.html.twig");
    }
}
