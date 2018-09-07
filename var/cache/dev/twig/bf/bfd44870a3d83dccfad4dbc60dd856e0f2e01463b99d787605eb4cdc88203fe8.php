<?php

/* @JeuPages/Contact/contactEmail.html.twig */
class __TwigTemplate_fec457e68c16d874ad6acbd387a8faf1b7ecf3f93db39e25c34fb09645c44840 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuPages/Contact/contactEmail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuPages/Contact/contactEmail.html.twig"));

        // line 1
        echo "Nouveau message de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new Twig_Error_Runtime('Variable "enquiry" does not exist.', 1, $this->source); })()), "name", array()), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i"), "html", null, true);
        echo ".
<br />
Adresse pour la reponse: ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new Twig_Error_Runtime('Variable "enquiry" does not exist.', 3, $this->source); })()), "email", array()), "html", null, true);
        echo "
<br />
Sujet du message: ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new Twig_Error_Runtime('Variable "enquiry" does not exist.', 5, $this->source); })()), "subject", array()), "html", null, true);
        echo "
<br /><br />
";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["enquiry"]) || array_key_exists("enquiry", $context) ? $context["enquiry"] : (function () { throw new Twig_Error_Runtime('Variable "enquiry" does not exist.', 7, $this->source); })()), "body", array()), "html", null, true);
        echo "
<br />
Envoyé depuis le site Jeux.";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JeuPages/Contact/contactEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  42 => 5,  37 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("Nouveau message de {{ enquiry.name }} le {{ \"now\" | date(\"Y-m-d H:i\") }}.
<br />
Adresse pour la reponse: {{ enquiry.email }}
<br />
Sujet du message: {{ enquiry.subject }}
<br /><br />
{{ enquiry.body }}
<br />
Envoyé depuis le site Jeux.", "@JeuPages/Contact/contactEmail.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\PagesBundle\\Resources\\views\\Contact\\contactEmail.html.twig");
    }
}
