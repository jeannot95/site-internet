<?php

/* @JeuUser/User/facturePDF.html.twig */
class __TwigTemplate_173b5d7ee2fccbee6f0d158d4d7acbbded28a50fc5a7f51f6b54a982d91c321d extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuUser/User/facturePDF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuUser/User/facturePDF.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
        <title>Facture</title>
        <link href=\"C:/wamp/www/jeux/web/css/facture.css\" rel=\"stylesheet\" type=\"text/css\"/>
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 23, $this->source); })()), "date", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                <td class=\"color\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 24, $this->source); })()), "reference", array()), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 28, $this->source); })()), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 28, $this->source); })()), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 29, $this->source); })()), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 30, $this->source); })()), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 30, $this->source); })()), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 30, $this->source); })()), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 38, $this->source); })()), "commande", array()), "article", array()));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 49, $this->source); })()), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</td>
            </tr>
 
                <tr>
                    <td width=\"110\">TVA <span class=\"color min\"></span> :</td>
                    <td width=\"100\" class=\"color\"> ";
        // line 54
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 54, $this->source); })()), "commande", array()), "prixTTC", array()) - twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 54, $this->source); })()), "commande", array()), "prixHT", array())), "html", null, true);
        echo "€</td>
                </tr>

            <tr>
                <td width=\"110\">TOTAL TTC :</td>
                <td width=\"100\" class=\"color\">";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 59, $this->source); })()), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " €</td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\"></span>
            <br>           
        </div>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@JeuUser/User/facturePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 59,  127 => 54,  119 => 49,  113 => 45,  104 => 42,  100 => 41,  96 => 40,  93 => 39,  89 => 38,  74 => 30,  70 => 29,  64 => 28,  57 => 24,  53 => 23,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\"/>
        <title>Facture</title>
        <link href=\"C:/wamp/www/jeux/web/css/facture.css\" rel=\"stylesheet\" type=\"text/css\"/>
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
                <td class=\"color\">{{ facture.date|date('d-m-Y') }}</td>
                <td class=\"color\">{{ facture.reference }}</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>{{ facture.commande.facturation.nom }} {{ facture.commande.facturation.prenom }}</li>
            <li>{{ facture.commande.facturation.adresse }}</li>
            <li>{{ facture.commande.facturation.cp }} {{ facture.commande.facturation.ville }} - {{ facture.commande.facturation.pays }}</li>
        </ul>
        <table id=\"entity\">
            <tr>
                <td width=\"280\">DESIGNATION</td>
                <td width=\"105\">MONTANT HT</td>
                <td width=\"105\">MONTANT TTC</td>
            </tr>
            {% for produit in facture.commande.article %}
                <tr>
                    <td class=\"color\">{{ produit.reference }}</td>
                    <td class=\"color\">{{ produit.prixHT }} €</td>
                    <td class=\"color\">{{ produit.prixTTC }} €</td>
                </tr>
            {% endfor %}
        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">TOTAL HT :</td>
                <td width=\"100\" class=\"color\">{{ facture.commande.prixHT }} €</td>
            </tr>
 
                <tr>
                    <td width=\"110\">TVA <span class=\"color min\"></span> :</td>
                    <td width=\"100\" class=\"color\"> {{ facture.commande.prixTTC - facture.commande.prixHT }}€</td>
                </tr>

            <tr>
                <td width=\"110\">TOTAL TTC :</td>
                <td width=\"100\" class=\"color\">{{ facture.commande.prixTTC }} €</td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\"></span>
            <br>           
        </div>
    </body>
</html>", "@JeuUser/User/facturePDF.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle\\Resources\\views\\User\\facturePDF.html.twig");
    }
}
