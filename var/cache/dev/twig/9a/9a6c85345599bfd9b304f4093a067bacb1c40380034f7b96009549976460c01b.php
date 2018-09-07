<?php

/* JeuPagesBundle:Administration:edit.html.twig */
class __TwigTemplate_974cefc4b969e79ae91a24b51b80297346fee322d01fcbce6c3428bf82a3abbd extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuPagesBundle:Administration:edit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuPagesBundle:Administration:edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuPagesBundle:Administration:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div>
        <h2 class=\"centre ind\">Edition d'une page</h2>
    </div>
    <div>
\t\t";
        // line 8
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "
\t\t<p>
\t\t\t";
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 10, $this->source); })()), "titre", array()), 'row');
        echo "
\t\t\t";
        // line 11
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 11, $this->source); })()), "contenu", array()), 'row');
        echo "
\t\t</p>
\t\t<div>
\t\t\t<p>
\t\t\t\t";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 15, $this->source); })()), "submit", array()), 'row');
        echo "
\t\t\t</p>
\t\t\t<p>
\t\t\t";
        // line 18
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new Twig_Error_Runtime('Variable "edit_form" does not exist.', 18, $this->source); })()), 'form_end');
        echo "
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages");
        echo "\" class=\"bouton1\">Retour</a>
\t\t\t</p>
\t\t\t<p class=\"control\">
\t\t\t\t";
        // line 24
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) || array_key_exists("delete_form", $context) ? $context["delete_form"] : (function () { throw new Twig_Error_Runtime('Variable "delete_form" does not exist.', 24, $this->source); })()), 'form');
        echo "
\t\t\t</p>
\t\t</div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuPagesBundle:Administration:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 24,  87 => 21,  81 => 18,  75 => 15,  68 => 11,  64 => 10,  59 => 8,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::layoutAdmin.html.twig' %}

{% block body %}
    <div>
        <h2 class=\"centre ind\">Edition d'une page</h2>
    </div>
    <div>
\t\t{{ form_start(edit_form) }}
\t\t<p>
\t\t\t{{ form_row(edit_form.titre) }}
\t\t\t{{ form_row(edit_form.contenu) }}
\t\t</p>
\t\t<div>
\t\t\t<p>
\t\t\t\t{{ form_row(edit_form.submit)}}
\t\t\t</p>
\t\t\t<p>
\t\t\t{{ form_end(edit_form) }}
\t\t\t</p>
\t\t\t<p>
\t\t\t\t<a href=\"{{ path('adminPages') }}\" class=\"bouton1\">Retour</a>
\t\t\t</p>
\t\t\t<p class=\"control\">
\t\t\t\t{{ form(delete_form) }}
\t\t\t</p>
\t\t</div>
    </div>
{% endblock %}", "JeuPagesBundle:Administration:edit.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\PagesBundle/Resources/views/Administration/edit.html.twig");
    }
}
