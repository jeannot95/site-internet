<?php

/* JeuUserBundle:User:facturePDF.html.twig */
class __TwigTemplate_1f0f629fc6aaa0157739fdcf1758a92239724734cbdfbf3a298d6f09a80906e2 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
        <title>Facture</title>
        <link href=\"C:/wamp/www/symfony/web/css/facture.css\" rel=\"stylesheet\" type=\"text/css\"/>
    </head>
    <body>
        <h1>Jeux de Société</h1>
        <table id=\"enTete\">
            <tr>
                <td colspan=\"1\"></td>
                <td colspan=\"1\"><h1>Facture</h1></td>
                <td colspan=\"1\"></td>
            </tr>
            <tr>
                <td width=\"80\">Page</td>
                <td width=\"100\">Date</td>
                <td width=\"120\">Ref</td>
            </tr>
            <tr>
                <td class=\"color\">[[page_nb]]</td>
                <td class=\"color\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "date", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                <td class=\"color\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "reference", array()), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</li>
        </ul>
        <table id=\"entity\">
            <tr>
                <td width=\"280\">DESIGNATION</td>
                <td width=\"105\">MONTANT HT</td>
                <td width=\"105\">MONTANT TTC</td>
            </tr>
            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "article", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 39
            echo "                <tr>
                    <td class=\"color\">";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixHT", array()), "html", null, true);
            echo " €</td>
                    <td class=\"color\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixTTC", array()), "html", null, true);
            echo " €</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">TOTAL HT :</td>
                <td width=\"100\" class=\"color\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</td>
            </tr>
 
                <tr>
                    <td width=\"110\">TVA <span class=\"color min\"></span> :</td>
                    <td width=\"100\" class=\"color\"> ";
        // line 54
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "prixTTC", array()) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "prixHT", array())), "html", null, true);
        echo "€</td>
                </tr>

            <tr>
                <td width=\"110\">TOTAL TTC :</td>
                <td width=\"100\" class=\"color\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " €</td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\"></span>
            <br/>
           
        </div>
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "JeuUserBundle:User:facturePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 59,  121 => 54,  113 => 49,  107 => 45,  98 => 42,  94 => 41,  90 => 40,  87 => 39,  83 => 38,  68 => 30,  64 => 29,  58 => 28,  51 => 24,  47 => 23,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuUserBundle:User:facturePDF.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle/Resources/views/User/facturePDF.html.twig");
    }
}
