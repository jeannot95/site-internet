<?php

/* :modulesUsed:navigationAdmin.html.twig */
class __TwigTemplate_36d1ac6b249362d63677f624b378d63403223193a6282c03fda04f4d5feac869 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":modulesUsed:navigationAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":modulesUsed:navigationAdmin.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  61 => 10,  57 => 9,  53 => 8,  49 => 7,  45 => 6,  41 => 5,  37 => 4,  33 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<fieldset>
    <legend><h3 class=\"bordeau\">Administration</h3></legend>
\t<a href=\"{{ path('adminProduits_index') }}\">Gestion des Produits</a><br><br>
\t<a href=\"{{ path('adminCategories_index') }}\">Catégories produits</a><br><br>
\t<a href=\"{{ path('adminUtilisateurs_index') }}\">Clients</a><br><br>
\t<a href=\"{{ path('adminCommande') }}\">Commandes</a><br><br>
\t<a href=\"{{ path('adminPages') }}\">Gestion des Pages</a><br><br>
\t<a href=\"{{ path('adminPublic_index') }}\">Public produits</a><br><br>
\t<a href=\"{{ path('adminAvis_index') }}\">Gestion des Avis</a><br><br>
\t<a href=\"{{ path('adminStatistiques_index') }}\">Statistiques</a><br>
</fieldset>", ":modulesUsed:navigationAdmin.html.twig", "C:\\wamp\\www\\jeux\\app/Resources\\views/modulesUsed/navigationAdmin.html.twig");
    }
}
