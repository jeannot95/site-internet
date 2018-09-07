<?php

/* @JeuUser/Default/utilisateurs.html.twig */
class __TwigTemplate_255fd105e3616dffc3ff8b4d071b96e00a8a39799d1e453a23bfe0df7b43c3b8 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuUser/Default/utilisateurs.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuUser/Default/utilisateurs.html.twig"));

        // line 1
        echo "<div class=\"box related-list\">
    <ul class=\"menu-list\">
        <li><a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
        echo "\">Se connecter</a></li>
        <li><a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\">S'inscrire</a></li>
    </ul>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JeuUser/Default/utilisateurs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"box related-list\">
    <ul class=\"menu-list\">
        <li><a href=\"{{ path('fos_user_security_login') }}\">Se connecter</a></li>
        <li><a href=\"{{ path('fos_user_registration_register') }}\">S'inscrire</a></li>
    </ul>
</div>", "@JeuUser/Default/utilisateurs.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle\\Resources\\views\\Default\\utilisateurs.html.twig");
    }
}
