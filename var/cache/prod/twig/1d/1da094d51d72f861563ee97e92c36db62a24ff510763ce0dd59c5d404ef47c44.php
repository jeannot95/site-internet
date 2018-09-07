<?php

/* @JeuUser/Default/utilisateurs.html.twig */
class __TwigTemplate_5eff4ebf393437e51c5469af9791b844bafb79ab4962dce59be53450e8011cc0 extends Twig_Template
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
        return array (  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuUser/Default/utilisateurs.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle\\Resources\\views\\Default\\utilisateurs.html.twig");
    }
}
