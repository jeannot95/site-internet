<?php

/* JeuArticleBundle:Swift:relanceCommande.html.twig */
class __TwigTemplate_27ee08d0bd5602a5d493ed8dc3ba702403cdcd92dcd7e9e56f5f27af5c6307d7 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Swift:relanceCommande.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Swift:relanceCommande.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"utf-8\"> <!-- utf-8 works for most cases -->
    <meta name=\"viewport\" content=\"width=device-width\"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name=\"x-apple-disable-message-reformatting\">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>JeuxDeSociété - Commande</title>


    <style>
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        /* What it does: Centers email on Android 4.4 */
        div[style*=\"margin: 16px 0\"] {
            margin:0 !important;
        }
        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }
        /* What it does: A work-around for iOS meddling in triggered links. */
        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color:inherit !important;
            text-decoration: underline !important;
        }
        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }
        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* Thanks to Eric Lepetit @ericlepetitsf) for help troubleshooting */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }
    </style>

    <!-- Progressive Enhancements -->
    <style>
        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }
        /* Media Queries */
        @media screen and (max-width: 480px) {
            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }
            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
        }
    </style>

</head>
<body width=\"100%\"  style=\"margin: 0; mso-line-height-rule: exactly;background-image:radial-gradient(white,white, #ccffff)\">
<center style=\"width: 100%;\">
    <div style=\"display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;\">
        JeuxDeSociété - Votre commande
    </div>

    <div style=\"max-width: 680px; margin: auto;\" class=\"email-container\">
        <!-- Email Header : BEGIN -->
        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" width=\"100%\" style=\"max-width: 680px;background-image: linear-gradient(#3399ff, lightblue,white,white);\">
            <tr>
                <td style=\"padding: 20px 0; text-align: center\">
                    <img src=\"http://audoinjean95300.com/symfony/web/img/logo2.jpg\" width=\"250\" alt=\"JeuxDeSociété Logo\" border=\"0\" style=\"height: auto; background: #000; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;\">
                </td>
            </tr>
        </table>
        <!-- Email Header : END -->

        <!-- Email Body : BEGIN -->
        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" width=\"100%\" style=\"max-width: 680px;\">

            <!-- Hero Image, Flush : BEGIN -->
            <!-- Hero Image, Flush : END -->

            <!-- 1 Column Text : BEGIN -->
            <tr>
                <td bgcolor=\"#ffffff\">
                    <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                        <tr>
                            <td style=\"padding: 40px; text-align: center; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;\">
                                Bonjour ";
        // line 146
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 146, $this->source); })()), "username", array()), "html", null, true);
        echo ",<br />
                                Vous étiez récemment intéressé par les articles suivant.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- 1 Column Text : END -->

            <!-- 3 Even Columns : BEGIN -->
            <tr>
                <td bgcolor=\"#ffffff\" align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\" style=\"padding: 20px;\">
                    <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"padding: 20px;\">
                        <thead style=\"font-weight: bold;background-color: #eaeaea;\">
                        <tr>
                            <td width=\"60%\" style=\"border-bottom: 1px solid black;\">Article</td>
                            <td width=\"20%\" style=\"border-bottom: 1px solid black;\">Prix TTC</td>
                        </tr>
                        </thead>
                        <tbody>
\t\t\t\t\t\t";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 166, $this->source); })()), "article", array(), "array"));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 167
            echo "                            <tr>
                                <td style=\"border-bottom: 1px solid black;\">";
            // line 168
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "reference", array()), "html", null, true);
            echo "</td>                                
                                <td style=\"border-bottom: 1px solid black;\">&nbsp;&nbsp;";
            // line 169
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixTTC", array()), "html", null, true);
            echo " €</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 172
        echo "                        
                        <tr>
                            <td colspan=\"2\" align=\"right\" style=\"font-weight: bold;background-color: #eaeaea;\">Total TTC</td>
                            <td style=\"background-color: #eaeaea;\">&nbsp;&nbsp; ";
        // line 175
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 175, $this->source); })()), "prixTTC", array(), "array"), "html", null, true);
        echo "€</td>
                        </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            <!-- 3 Even Columns : END -->

            <!-- 1 Column Text : BEGIN -->
            <tr>
                <td bgcolor=\"#ffffff\">
                    <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                        <tr>
                            <td style=\"padding: 40px; text-align: center; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;\">
                                Bénéficier de -10% sur ces articles avec le code de promotion suivant : ";
        // line 190
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new Twig_Error_Runtime('Variable "promo" does not exist.', 190, $this->source); })()), "promo", array()), "html", null, true);
        echo "
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- 1 Column Text : END -->

            <!-- Background Image with Text : BEGIN -->
            <tr>
                <!-- Bulletproof Background Images c/o https://backgrounds.cm -->
                <td background=\"http://www.france-alu-color.com/static/illustrations/nuancier/tb0015-ceruse-blanc-texture.jpg\" valign=\"middle\" style=\"text-align: center; background-position: center center !important; background-size: cover !important;\">
 
                    <div>
                        <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" style=\"max-width:500px; margin: auto;\">
                            <tr>
                                <td valign=\"middle\" style=\"text-align: center; padding: 40px 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #000;\">
\t\t\t\t\t\t\t\t\t\tMerci à vous et à bientôt sur JeuxDeSociété !
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>

        </table>
        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" width=\"100%\" style=\"max-width: 680px;background-image: linear-gradient(white, white,lightblue,#3399ff);\">
            <tr>
                <td style=\"padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; line-height:18px; text-align: center; color: #888888;\">
                    <webversion style=\"color:#cccccc; text-decoration:underline; font-weight: bold;\"></webversion>
                    <br><br>
                    JeuxDeSociété<br><span class=\"mobile-link--footer\">30 rue de Gisors, 95300 Pontoise</span><br><span class=\"mobile-link--footer\">01 00 00 00 00</span>
                    <br><br>
                </td>
            </tr>
        </table>
    </div>
</center>
</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Swift:relanceCommande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 190,  224 => 175,  219 => 172,  210 => 169,  206 => 168,  203 => 167,  199 => 166,  176 => 146,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
    <meta charset=\"utf-8\"> <!-- utf-8 works for most cases -->
    <meta name=\"viewport\" content=\"width=device-width\"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"> <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name=\"x-apple-disable-message-reformatting\">  <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title>JeuxDeSociété - Commande</title>


    <style>
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }
        /* What it does: Stops email clients resizing small text. */
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }
        /* What it does: Centers email on Android 4.4 */
        div[style*=\"margin: 16px 0\"] {
            margin:0 !important;
        }
        /* What it does: Stops Outlook from adding extra spacing to tables. */
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }
        /* What it does: Fixes webkit padding issue. Fix for Yahoo mail table alignment bug. Applies table-layout to the first 2 tables then removes for anything nested deeper. */
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }
        /* What it does: Uses a better rendering method when resizing images in IE. */
        img {
            -ms-interpolation-mode:bicubic;
        }
        /* What it does: A work-around for iOS meddling in triggered links. */
        .mobile-link--footer a,
        a[x-apple-data-detectors] {
            color:inherit !important;
            text-decoration: underline !important;
        }
        /* What it does: Prevents underlining the button text in Windows 10 */
        .button-link {
            text-decoration: none !important;
        }
        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* Thanks to Eric Lepetit @ericlepetitsf) for help troubleshooting */
        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }
    </style>

    <!-- Progressive Enhancements -->
    <style>
        /* What it does: Hover styles for buttons */
        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }
        /* Media Queries */
        @media screen and (max-width: 480px) {
            /* What it does: Forces elements to resize to the full width of their container. Useful for resizing images beyond their max-width. */
            .fluid {
                width: 100% !important;
                max-width: 100% !important;
                height: auto !important;
                margin-left: auto !important;
                margin-right: auto !important;
            }
            /* What it does: Forces table cells into full-width rows. */
            .stack-column,
            .stack-column-center {
                display: block !important;
                width: 100% !important;
                max-width: 100% !important;
                direction: ltr !important;
            }
            /* And center justify these ones. */
            .stack-column-center {
                text-align: center !important;
            }
            /* What it does: Generic utility class for centering. Useful for images, buttons, and nested tables. */
            .center-on-narrow {
                text-align: center !important;
                display: block !important;
                margin-left: auto !important;
                margin-right: auto !important;
                float: none !important;
            }
            table.center-on-narrow {
                display: inline-block !important;
            }
        }
    </style>

</head>
<body width=\"100%\"  style=\"margin: 0; mso-line-height-rule: exactly;background-image:radial-gradient(white,white, #ccffff)\">
<center style=\"width: 100%;\">
    <div style=\"display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;\">
        JeuxDeSociété - Votre commande
    </div>

    <div style=\"max-width: 680px; margin: auto;\" class=\"email-container\">
        <!-- Email Header : BEGIN -->
        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" width=\"100%\" style=\"max-width: 680px;background-image: linear-gradient(#3399ff, lightblue,white,white);\">
            <tr>
                <td style=\"padding: 20px 0; text-align: center\">
                    <img src=\"http://audoinjean95300.com/symfony/web/img/logo2.jpg\" width=\"250\" alt=\"JeuxDeSociété Logo\" border=\"0\" style=\"height: auto; background: #000; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;\">
                </td>
            </tr>
        </table>
        <!-- Email Header : END -->

        <!-- Email Body : BEGIN -->
        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" width=\"100%\" style=\"max-width: 680px;\">

            <!-- Hero Image, Flush : BEGIN -->
            <!-- Hero Image, Flush : END -->

            <!-- 1 Column Text : BEGIN -->
            <tr>
                <td bgcolor=\"#ffffff\">
                    <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                        <tr>
                            <td style=\"padding: 40px; text-align: center; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;\">
                                Bonjour {{ user.username }},<br />
                                Vous étiez récemment intéressé par les articles suivant.
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- 1 Column Text : END -->

            <!-- 3 Even Columns : BEGIN -->
            <tr>
                <td bgcolor=\"#ffffff\" align=\"center\" height=\"100%\" valign=\"top\" width=\"100%\" style=\"padding: 20px;\">
                    <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\" style=\"padding: 20px;\">
                        <thead style=\"font-weight: bold;background-color: #eaeaea;\">
                        <tr>
                            <td width=\"60%\" style=\"border-bottom: 1px solid black;\">Article</td>
                            <td width=\"20%\" style=\"border-bottom: 1px solid black;\">Prix TTC</td>
                        </tr>
                        </thead>
                        <tbody>
\t\t\t\t\t\t{% for produit in facture['article'] %}
                            <tr>
                                <td style=\"border-bottom: 1px solid black;\">{{ produit.reference }}</td>                                
                                <td style=\"border-bottom: 1px solid black;\">&nbsp;&nbsp;{{ produit.prixTTC }} €</td>
                            </tr>
                        {% endfor %}
                        
                        <tr>
                            <td colspan=\"2\" align=\"right\" style=\"font-weight: bold;background-color: #eaeaea;\">Total TTC</td>
                            <td style=\"background-color: #eaeaea;\">&nbsp;&nbsp; {{ facture['prixTTC'] }}€</td>
                        </tr>
                        </tbody>
                    </table>

                </td>
            </tr>
            <!-- 3 Even Columns : END -->

            <!-- 1 Column Text : BEGIN -->
            <tr>
                <td bgcolor=\"#ffffff\">
                    <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">
                        <tr>
                            <td style=\"padding: 40px; text-align: center; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;\">
                                Bénéficier de -10% sur ces articles avec le code de promotion suivant : {{ promo.promo }}
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
            <!-- 1 Column Text : END -->

            <!-- Background Image with Text : BEGIN -->
            <tr>
                <!-- Bulletproof Background Images c/o https://backgrounds.cm -->
                <td background=\"http://www.france-alu-color.com/static/illustrations/nuancier/tb0015-ceruse-blanc-texture.jpg\" valign=\"middle\" style=\"text-align: center; background-position: center center !important; background-size: cover !important;\">
 
                    <div>
                        <table role=\"presentation\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" align=\"center\" width=\"100%\" style=\"max-width:500px; margin: auto;\">
                            <tr>
                                <td valign=\"middle\" style=\"text-align: center; padding: 40px 20px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #000;\">
\t\t\t\t\t\t\t\t\t\tMerci à vous et à bientôt sur JeuxDeSociété !
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>

        </table>
        <table role=\"presentation\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\" align=\"center\" width=\"100%\" style=\"max-width: 680px;background-image: linear-gradient(white, white,lightblue,#3399ff);\">
            <tr>
                <td style=\"padding: 40px 10px;width: 100%;font-size: 12px; font-family: sans-serif; line-height:18px; text-align: center; color: #888888;\">
                    <webversion style=\"color:#cccccc; text-decoration:underline; font-weight: bold;\"></webversion>
                    <br><br>
                    JeuxDeSociété<br><span class=\"mobile-link--footer\">30 rue de Gisors, 95300 Pontoise</span><br><span class=\"mobile-link--footer\">01 00 00 00 00</span>
                    <br><br>
                </td>
            </tr>
        </table>
    </div>
</center>
</body>
</html>", "JeuArticleBundle:Swift:relanceCommande.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Swift/relanceCommande.html.twig");
    }
}
