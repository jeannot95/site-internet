<?php

/* JeuUserBundle:Default:utilisateursConnecte.html.twig */
class __TwigTemplate_36915edd9729f2b3d05fe1e44039bc89de68e5c1dce40bc9e4c34f0147bf4f24 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuUserBundle:Default:utilisateursConnecte.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuUserBundle:Default:utilisateursConnecte.html.twig"));

        // line 1
        echo "<div class=\"box related-list\">
    <p class=\"menu-label title indieflower\">
        Mon compte
    </p>
    <ul class=\"menu-list\">
        <li><a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
        echo "\">Mes informations</a></li>
        <li><a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit");
        echo "\">Editer mes informations</a></li>
        <li><a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
        echo "\">Changer mon mot de passe</a></li>
        <li><a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_user_factures");
        echo "\">Mes factures</a></li>
        <li><a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
        echo "\">Deconnexion</a></li>
    </ul>
</div>
";
        // line 13
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 14
            echo "    ";
            $this->loadTemplate("::modulesUsed/navigationAdmin.html.twig", "JeuUserBundle:Default:utilisateursConnecte.html.twig", 14)->display($context);
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "JeuUserBundle:Default:utilisateursConnecte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 14,  58 => 13,  52 => 10,  48 => 9,  44 => 8,  40 => 7,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"box related-list\">
    <p class=\"menu-label title indieflower\">
        Mon compte
    </p>
    <ul class=\"menu-list\">
        <li><a href=\"{{ path('fos_user_profile_show') }}\">Mes informations</a></li>
        <li><a href=\"{{ path('fos_user_profile_edit') }}\">Editer mes informations</a></li>
        <li><a href=\"{{ path('fos_user_change_password') }}\">Changer mon mot de passe</a></li>
        <li><a href=\"{{ path('jeu_user_factures') }}\">Mes factures</a></li>
        <li><a href=\"{{ path('fos_user_security_logout') }}\">Deconnexion</a></li>
    </ul>
</div>
{% if is_granted('ROLE_ADMIN') %}
    {% include '::modulesUsed/navigationAdmin.html.twig' %}
{% endif %}", "JeuUserBundle:Default:utilisateursConnecte.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle/Resources/views/Default/utilisateursConnecte.html.twig");
    }
}
