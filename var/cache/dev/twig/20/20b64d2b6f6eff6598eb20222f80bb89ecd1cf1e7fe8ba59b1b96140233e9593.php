<?php

/* JeuArticleBundle:Panier:menu.html.twig */
class __TwigTemplate_23d1813d3c0b3365ae9a289c55f2c46f431ba04781e63cb598b96c2d0fd00ee7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Panier:menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Panier:menu.html.twig"));

        // line 1
        echo "<div>
\t<span class=\"ind orange\">Panier</span><br>
\t<a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_panier");
        echo "\">
\t\t";
        // line 4
        if (((isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new Twig_Error_Runtime('Variable "quantite" does not exist.', 4, $this->source); })()) == 0)) {
            // line 5
            echo "\t\t\tAucun article dans votre panier
\t\t";
        } elseif ((        // line 6
(isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new Twig_Error_Runtime('Variable "quantite" does not exist.', 6, $this->source); })()) == 1)) {
            // line 7
            echo "\t\t\t1 article dans votre panier
\t\t";
        } else {
            // line 9
            echo "\t\t\t";
            echo twig_escape_filter($this->env, (isset($context["quantite"]) || array_key_exists("quantite", $context) ? $context["quantite"] : (function () { throw new Twig_Error_Runtime('Variable "quantite" does not exist.', 9, $this->source); })()), "html", null, true);
            echo " articles dans votre panier
\t\t";
        }
        // line 11
        echo "\t</a>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Panier:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 11,  48 => 9,  44 => 7,  42 => 6,  39 => 5,  37 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
\t<span class=\"ind orange\">Panier</span><br>
\t<a href=\"{{ path('jeu_article_panier') }}\">
\t\t{% if quantite == 0 %}
\t\t\tAucun article dans votre panier
\t\t{% elseif quantite == 1 %}
\t\t\t1 article dans votre panier
\t\t{% else %}
\t\t\t{{ quantite }} articles dans votre panier
\t\t{% endif %}
\t</a>
</div>", "JeuArticleBundle:Panier:menu.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Panier/menu.html.twig");
    }
}
