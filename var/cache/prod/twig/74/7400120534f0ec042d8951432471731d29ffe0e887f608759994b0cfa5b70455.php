<?php

/* JeuUserBundle:Default:utilisateursConnecte.html.twig */
class __TwigTemplate_31556a78a5da1d31714a4aad7441884f6849e0b90ae97ee54830e1a9cbf40aa1 extends Twig_Template
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
        return array (  54 => 14,  52 => 13,  46 => 10,  42 => 9,  38 => 8,  34 => 7,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuUserBundle:Default:utilisateursConnecte.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle/Resources/views/Default/utilisateursConnecte.html.twig");
    }
}
