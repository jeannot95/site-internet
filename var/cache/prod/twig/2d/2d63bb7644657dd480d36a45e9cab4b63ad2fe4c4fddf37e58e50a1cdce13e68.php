<?php

/* :modulesUsed:navigationAdmin.html.twig */
class __TwigTemplate_e437aee715967f5fd37177cdd9fea77c46818add18551ca47b7c2585a83d20eb extends Twig_Template
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
        echo "<fieldset>
    <legend><h3 class=\"bordeau\">Administration</h3></legend>
\t<a href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminProduits_index");
        echo "\">Gestion des Produits</a><br><br>
\t<a href=\"";
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCategories_index");
        echo "\">Catégories produits</a><br><br>
\t<a href=\"";
        // line 5
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminUtilisateurs_index");
        echo "\">Clients</a><br><br>
\t<a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminCommande");
        echo "\">Commandes</a><br><br>
\t<a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPages");
        echo "\">Gestion des Pages</a><br><br>
\t<a href=\"";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminPublic_index");
        echo "\">Public produits</a><br><br>
\t<a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminAvis_index");
        echo "\">Gestion des Avis</a><br><br>
\t<a href=\"";
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminStatistiques_index");
        echo "\">Statistiques</a><br>
</fieldset>";
    }

    public function getTemplateName()
    {
        return ":modulesUsed:navigationAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 10,  51 => 9,  47 => 8,  43 => 7,  39 => 6,  35 => 5,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":modulesUsed:navigationAdmin.html.twig", "C:\\wamp\\www\\jeux\\app/Resources\\views/modulesUsed/navigationAdmin.html.twig");
    }
}
