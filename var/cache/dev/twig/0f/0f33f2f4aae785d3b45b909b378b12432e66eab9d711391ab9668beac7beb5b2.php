<?php

/* JeuArticleBundle:Panier:validation.html.twig */
class __TwigTemplate_16fbe0ee690ca9d17f17b8dedb4d78e69b3fe6a1032452c2a4d8beca445d53a2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout2.html.twig", "JeuArticleBundle:Panier:validation.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jeu_article_body' => array($this, 'block_jeu_article_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuArticleBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Panier:validation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Panier:validation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "  Validation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_jeu_article_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jeu_article_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jeu_article_body"));

        // line 8
        echo "
<h2>Validation</h2>

  ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 82
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 12
        echo "\t  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "loss"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "\t\t<div class=\"loss\">
\t\t\t";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
\t\t</div>\t
\t  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "  
\t<table class=\"centre\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom du jeu</th>
\t\t\t\t<th>Prix HT</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 25, $this->source); })()), "commande", array()), "article", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 26
            echo "\t\t\t<tr>
\t\t\t\t<td>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "reference", array()), "html", null, true);
            echo "</td>
\t\t\t\t<td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "prixHT", array()), "html", null, true);
            echo " €</td>
\t\t\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t\t</tbody>
\t</table><hr>
\t\t";
        // line 37
        echo "\t\t";
        if ((isset($context["form"]) || array_key_exists("form", $context))) {
            // line 38
            echo "\t\t\t";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), 'form');
            echo "
\t\t";
        }
        // line 39
        echo "\t
\t\t";
        // line 40
        if ((isset($context["promo"]) || array_key_exists("promo", $context))) {
            // line 41
            echo "\t\t\t";
            // line 42
            echo "\t\t\tCode promo : ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["promo"]) || array_key_exists("promo", $context) ? $context["promo"] : (function () { throw new Twig_Error_Runtime('Variable "promo" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["promotion"]) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["promotion"], "promo", array()), "html", null, true);
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['promotion'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "\t\t";
        }
        // line 44
        echo "\t\t<dl class=\"right padr bold\">
\t\t\t\t\t<dt>Total HT </dt><dd>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 45, $this->source); })()), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</dd>
\t\t\t\t\t<dt>TVA 20% </dt><dd>";
        // line 46
        echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 46, $this->source); })()), "commande", array()), "prixHT", array()) * 0.2), "html", null, true);
        echo " €</dd>
\t\t\t\t\t<dt>Total TTC</dt><dd>";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 47, $this->source); })()), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " €</dd>
\t\t\t\t\t";
        // line 48
        if ((isset($context["promo"]) || array_key_exists("promo", $context))) {
            echo "<dt>Total TTC apres promo</dt><dd>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 48, $this->source); })()), "commande", array()), "prixTTC2", array()), "html", null, true);
            echo " €</dd>
\t\t\t\t\t";
        }
        // line 50
        echo "\t\t</dl>
\t\t<div class=\"flex4\">
\t\t\t<div>
\t\t\t\t<dl>
\t\t\t\t\t<dt><h4>Adresse de livraison</h4></dt>
\t\t\t\t\t<dt>";
        // line 55
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 55, $this->source); })()), "commande", array()), "livraison", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 55, $this->source); })()), "commande", array()), "livraison", array()), "nom", array()), "html", null, true);
        echo "</dt>
\t\t\t\t\t<dt>";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 56, $this->source); })()), "commande", array()), "livraison", array()), "adresse", array()), "html", null, true);
        echo "</dt>
\t\t\t\t\t<dt>";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 57, $this->source); })()), "commande", array()), "livraison", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 57, $this->source); })()), "commande", array()), "livraison", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 57, $this->source); })()), "commande", array()), "livraison", array()), "pays", array()), "html", null, true);
        echo "</dt>
\t\t\t\t</dl>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<dl>
\t\t\t\t\t<dt><h4>Adresse de facturation</h4></dt>
\t\t\t\t\t<dt>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 63, $this->source); })()), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 63, $this->source); })()), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo "</dt>
\t\t\t\t\t<dt>";
        // line 64
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 64, $this->source); })()), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</dt>
\t\t\t\t\t<dt>";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 65, $this->source); })()), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 65, $this->source); })()), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 65, $this->source); })()), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</dt>
\t\t\t\t</dl>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"clear\"></div>

\t\t\t
\t\t<form id=\"valider\" action=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_user_validation_commande", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 72, $this->source); })()), "id", array()))), "html", null, true);
        echo "\" method =\"POST\" onsubmit=\"return valider()\">
\t\t\t<input name=\"token\" type=\"hidden\" value=\"";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 73, $this->source); })()), "commande", array()), "token", array()), "html", null, true);
        echo "\">
\t\t\t<input name=\"prix\" type=\"hidden\" value=\"";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 74, $this->source); })()), "commande", array()), "prixTTC", array()), "html", null, true);
        echo "\">
\t\t\t<input name=\"date\" type=\"hidden\" value=\"";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new Twig_Error_Runtime('Variable "commande" does not exist.', 75, $this->source); })()), "date", array()), "dmy"), "html", null, true);
        echo "\">
\t\t\t<input type=\"checkbox\" name=\"validation\" id=\"validation\"> J'ai lu et j'accepte les <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_pages_homepage", array("id" => 4));
        echo "\">conditions générales de vente</a>
\t\t\t<div class=\"right floatright centre2\"><button type=\"submit\" class=\"bouton2 \">Payer</button></div>
\t\t</form>
\t\t
\t<a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_livraison");
        echo "\" class=\"bouton1\">Retour</a>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 83
        echo "  <script>
\tfunction valider(){
\t if(document.getElementById(\"validation\").checked==false){
\t\talert(\"Pour commander, vous devez accepter les conditions générales de vente.\" );  
\t\treturn false;
\t }
\t return true;
\t}
\t
  </script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Panier:validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 83,  297 => 82,  285 => 80,  278 => 76,  274 => 75,  270 => 74,  266 => 73,  262 => 72,  248 => 65,  244 => 64,  238 => 63,  225 => 57,  221 => 56,  215 => 55,  208 => 50,  201 => 48,  197 => 47,  193 => 46,  189 => 45,  186 => 44,  183 => 43,  173 => 42,  171 => 41,  169 => 40,  166 => 39,  160 => 38,  157 => 37,  153 => 31,  144 => 28,  140 => 27,  137 => 26,  133 => 25,  122 => 16,  113 => 14,  110 => 13,  105 => 12,  96 => 11,  85 => 82,  83 => 11,  78 => 8,  69 => 7,  56 => 4,  47 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JeuArticleBundle::layout2.html.twig\" %}

{% block title %}
  Validation - {{ parent() }}
{% endblock %}

{% block jeu_article_body %}

<h2>Validation</h2>

  {% block fos_user_content %}
\t  {% for flashMessage in app.session.flashbag.get('loss') %}
\t\t<div class=\"loss\">
\t\t\t{{ flashMessage }}
\t\t</div>\t
\t  {% endfor %}  
\t<table class=\"centre\">
\t\t<thead>
\t\t\t<tr>
\t\t\t\t<th>Nom du jeu</th>
\t\t\t\t<th>Prix HT</th>
\t\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t\t{% for article in commande.commande.article %}
\t\t\t<tr>
\t\t\t\t<td>{{ article.reference }}</td>
\t\t\t\t<td>{{ article.prixHT }} €</td>
\t\t\t</tr>
\t\t{% endfor %}
\t\t</tbody>
\t</table><hr>
\t\t{#<form action=\"{{ path('jeu_article_validation') }}\">
\t\t\tCode Promo : <input>
\t\t\t<button type=\"submit\" class=\"bouton1\">Valider</button>
\t\t</form>#}
\t\t{% if form is defined %}
\t\t\t{{ form(form) }}
\t\t{% endif %}\t
\t\t{% if promo is defined %}
\t\t\t{#{ dump(promo) }#}
\t\t\tCode promo : {% for promotion in promo %}{{ promotion.promo }}{% endfor %}
\t\t{% endif %}
\t\t<dl class=\"right padr bold\">
\t\t\t\t\t<dt>Total HT </dt><dd>{{ commande.commande.prixHT }} €</dd>
\t\t\t\t\t<dt>TVA 20% </dt><dd>{{ commande.commande.prixHT*0.2 }} €</dd>
\t\t\t\t\t<dt>Total TTC</dt><dd>{{ commande.commande.prixTTC }} €</dd>
\t\t\t\t\t{% if promo is defined %}<dt>Total TTC apres promo</dt><dd>{{ commande.commande.prixTTC2 }} €</dd>
\t\t\t\t\t{% endif %}
\t\t</dl>
\t\t<div class=\"flex4\">
\t\t\t<div>
\t\t\t\t<dl>
\t\t\t\t\t<dt><h4>Adresse de livraison</h4></dt>
\t\t\t\t\t<dt>{{ commande.commande.livraison.prenom }} {{ commande.commande.livraison.nom }}</dt>
\t\t\t\t\t<dt>{{ commande.commande.livraison.adresse }}</dt>
\t\t\t\t\t<dt>{{ commande.commande.livraison.cp }} {{ commande.commande.livraison.ville }} - {{ commande.commande.livraison.pays }}</dt>
\t\t\t\t</dl>
\t\t\t</div>
\t\t\t<div>
\t\t\t\t<dl>
\t\t\t\t\t<dt><h4>Adresse de facturation</h4></dt>
\t\t\t\t\t<dt>{{ commande.commande.facturation.prenom }} {{ commande.commande.facturation.nom }}</dt>
\t\t\t\t\t<dt>{{ commande.commande.facturation.adresse }}</dt>
\t\t\t\t\t<dt>{{ commande.commande.facturation.cp }} {{ commande.commande.facturation.ville }} - {{ commande.commande.facturation.pays }}</dt>
\t\t\t\t</dl>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"clear\"></div>

\t\t\t
\t\t<form id=\"valider\" action=\"{{ path('jeu_user_validation_commande', { 'id' : commande.id }) }}\" method =\"POST\" onsubmit=\"return valider()\">
\t\t\t<input name=\"token\" type=\"hidden\" value=\"{{ commande.commande.token }}\">
\t\t\t<input name=\"prix\" type=\"hidden\" value=\"{{ commande.commande.prixTTC }}\">
\t\t\t<input name=\"date\" type=\"hidden\" value=\"{{ commande.date|date('dmy') }}\">
\t\t\t<input type=\"checkbox\" name=\"validation\" id=\"validation\"> J'ai lu et j'accepte les <a href=\"{{ path('jeu_pages_homepage',{'id':4}) }}\">conditions générales de vente</a>
\t\t\t<div class=\"right floatright centre2\"><button type=\"submit\" class=\"bouton2 \">Payer</button></div>
\t\t</form>
\t\t
\t<a href=\"{{ path('jeu_article_livraison') }}\" class=\"bouton1\">Retour</a>
  {% endblock fos_user_content %}
  {% block javascripts %}
  <script>
\tfunction valider(){
\t if(document.getElementById(\"validation\").checked==false){
\t\talert(\"Pour commander, vous devez accepter les conditions générales de vente.\" );  
\t\treturn false;
\t }
\t return true;
\t}
\t
  </script>
  {% endblock %}
{% endblock %}", "JeuArticleBundle:Panier:validation.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Panier\\validation.html.twig");
    }
}
