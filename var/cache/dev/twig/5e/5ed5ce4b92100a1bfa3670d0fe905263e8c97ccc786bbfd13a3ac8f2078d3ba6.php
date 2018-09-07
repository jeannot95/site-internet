<?php

/* @JeuArticle/Categories/menu.html.twig */
class __TwigTemplate_4b059c8e946457695930d2afd6ab969f42c1ebba84808e3a58328a3fbea2d219 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Categories/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuArticle/Categories/menu.html.twig"));

        // line 1
        echo "<li><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\" class=\"indieflower menusubtitle\">Tout nos produits</a></li>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new Twig_Error_Runtime('Variable "categories" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categorie"]) {
            // line 3
            echo "    <li><a href=\"";
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JeuArticle/Categories/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 3,  34 => 2,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<li><a href=\"{{ path('jeu_article_homepage') }}\" class=\"indieflower menusubtitle\">Tout nos produits</a></li>
{% for categorie in categories %}
    <li><a href=\"{#{ path('categorieProduits', { 'categorie' : categorie.id }) }}\" class=\"indieflower menusubtitle\">{{ categorie.nom }#}</a></li>
{% endfor %}", "@JeuArticle/Categories/menu.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Categories\\menu.html.twig");
    }
}
