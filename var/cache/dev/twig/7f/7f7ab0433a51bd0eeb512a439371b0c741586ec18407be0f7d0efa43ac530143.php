<?php

/* JeuUserBundle:User:facture.html.twig */
class __TwigTemplate_2a4766e6dfea7a1fb6630c6372101ecabc4f412956bf52d2f951a24c05ebf31f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuUserBundle::layout.html.twig", "JeuUserBundle:User:facture.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jeu_article_body' => array($this, 'block_jeu_article_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuUserBundle:User:facture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuUserBundle:User:facture.html.twig"));

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
        echo "  Facture - ";
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
<h2>Votre Facture</h2>

  ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 71
        echo "  
";
        
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
        echo "   <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-9\">

                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "                    <div class=\"notification is-success\">
                        ";
            // line 18
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 21, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "                    <div class=\"notification is-danger\">
                        ";
            // line 23
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "
                <div class=\"tile is-ancestor\">
                    <div class=\"tile is-parent is-12\">
                        <article class=\"tile is-child box is-12\">
                            <h2 class=\"title is-3 indieflower\">Vos factures</h2>
                        </article>
                    </div>
                </div>

                <div class=\"tile is-ancestor\">
                    <div class=\"tile is-parent is-12\">
                        <article class=\"tile is-child box is-12\">
                            <table class=\"table is-striped\">
                                <thead>
                                    <tr>
                                        <th class=\"title is-5 indieflower\">Références</th>
                                        <th class=\"title is-5 indieflower\">Date</th>
                                        <th class=\"title is-5 indieflower\">Prix TTC</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 48
        if ((twig_length_filter($this->env, (isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new Twig_Error_Runtime('Variable "factures" does not exist.', 48, $this->source); })())) == 0)) {
            // line 49
            echo "                                        <tr>
                                            <td colspan=\"4\">Aucune facture actuellement</td>
                                        </tr>
                                    ";
        }
        // line 53
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new Twig_Error_Runtime('Variable "factures" does not exist.', 53, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 54
            echo "                                        <tr>
                                            <td>ref : ";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "reference", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 56
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["facture"], "commande", array()), "prixTTC", array()), "html", null, true);
            echo " €</td>
                                            <td><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturePDF", array("id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\" title=\"Consulter le PDF\">PDF</a></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                                </tbody>
                            </table>
                        </article>
                    </div>
                </div>

            </div>
\t\t</div>
\t</div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuUserBundle:User:facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 61,  195 => 58,  191 => 57,  187 => 56,  183 => 55,  180 => 54,  175 => 53,  169 => 49,  167 => 48,  143 => 26,  134 => 23,  131 => 22,  126 => 21,  117 => 18,  114 => 17,  110 => 16,  104 => 12,  95 => 11,  84 => 71,  82 => 11,  77 => 8,  68 => 7,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JeuUserBundle::layout.html.twig\" %}

{% block title %}
  Facture - {{ parent() }}
{% endblock %}

{% block jeu_article_body %}

<h2>Votre Facture</h2>

  {% block fos_user_content %}
   <div class=\"container\">
        <div class=\"columns\">
            <div class=\"column is-9\">

                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"notification is-success\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('error') %}
                    <div class=\"notification is-danger\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}

                <div class=\"tile is-ancestor\">
                    <div class=\"tile is-parent is-12\">
                        <article class=\"tile is-child box is-12\">
                            <h2 class=\"title is-3 indieflower\">Vos factures</h2>
                        </article>
                    </div>
                </div>

                <div class=\"tile is-ancestor\">
                    <div class=\"tile is-parent is-12\">
                        <article class=\"tile is-child box is-12\">
                            <table class=\"table is-striped\">
                                <thead>
                                    <tr>
                                        <th class=\"title is-5 indieflower\">Références</th>
                                        <th class=\"title is-5 indieflower\">Date</th>
                                        <th class=\"title is-5 indieflower\">Prix TTC</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {% if factures|length == 0 %}
                                        <tr>
                                            <td colspan=\"4\">Aucune facture actuellement</td>
                                        </tr>
                                    {% endif %}
                                    {% for facture in factures %}
                                        <tr>
                                            <td>ref : {{ facture.reference }}</td>
                                            <td>{{ facture.date|date('d/m/Y') }}</td>
                                            <td>{{ facture.commande.prixTTC }} €</td>
                                            <td><a href=\"{{ path('facturePDF', { 'id' : facture.id }) }}\" target=\"_blank\" title=\"Consulter le PDF\">PDF</a></td>
                                        </tr>
                                    {% endfor %}
                                </tbody>
                            </table>
                        </article>
                    </div>
                </div>

            </div>
\t\t</div>
\t</div>
  {% endblock fos_user_content %}
  
{% endblock %}", "JeuUserBundle:User:facture.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle/Resources/views/User/facture.html.twig");
    }
}
