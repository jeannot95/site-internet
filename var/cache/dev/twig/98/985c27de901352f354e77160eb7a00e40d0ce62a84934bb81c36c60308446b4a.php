<?php

/* @JeuUser/User/facture.html.twig */
class __TwigTemplate_e361bc97c4c4dbf9e83859a996376da4e327b2e650e2ff2888e176e58f96380e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuUserBundle::layout.html.twig", "@JeuUser/User/facture.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuUser/User/facture.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuUser/User/facture.html.twig"));

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
        // line 85
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
        echo "   <div class=\"container space-around\">
        <div>
            <div>

                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 16, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 17
            echo "                    <div class=\"success\">
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
            echo "                    <div class=\"danger\">
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
                <div>
                    <div>
                        <article>
                            <h2>Vos factures</h2>
                        </article>
\t\t\t\t\t\t";
        // line 33
        echo "\t\t\t\t\t\t<span class=\"ind\">Nombres total de commandes :</span><span class=\"ind tomate\"> ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new Twig_Error_Runtime('Variable "factures" does not exist.', 33, $this->source); })())), "html", null, true);
        echo "</span>
                    </div>
                </div>

                <div>
                    <div>
                        <article>
                            <table >
                                <thead>
                                    <tr>
                                        <th>Références</th>
                                        <th>Date</th>
                                        <th>Prix TTC</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    ";
        // line 50
        if ((twig_length_filter($this->env, (isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new Twig_Error_Runtime('Variable "factures" does not exist.', 50, $this->source); })())) == 0)) {
            // line 51
            echo "                                        <tr>
                                            <td colspan=\"4\">Aucune facture actuellement</td>
                                        </tr>
                                    ";
        }
        // line 55
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new Twig_Error_Runtime('Variable "factures" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facture"]) {
            // line 56
            echo "                                        <tr>
                                            <td>ref : ";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "reference", array()), "html", null, true);
            echo "</td>
                                            <td>";
            // line 58
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facture"], "date", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                                            <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["facture"], "commande", array()), "prixTTC", array()), "html", null, true);
            echo " €</td>
                                            <td><a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("facturePDF", array("id" => twig_get_attribute($this->env, $this->source, $context["facture"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\" title=\"Consulter le PDF\">PDF</a></td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facture'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                                </tbody>
                            </table>
                        </article>
                    </div>
                </div>
\t\t\t\t  ";
        // line 68
        if ( !twig_test_empty((isset($context["factures"]) || array_key_exists("factures", $context) ? $context["factures"] : (function () { throw new Twig_Error_Runtime('Variable "factures" does not exist.', 68, $this->source); })()))) {
            // line 69
            echo "\t\t\t\t  <br>
\t\t\t\t  <div class=\"centre\">
\t\t\t\t\t  <div class=\"pagination\">
\t\t\t\t\t\t";
            // line 72
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) || array_key_exists("nbPages", $context) ? $context["nbPages"] : (function () { throw new Twig_Error_Runtime('Variable "nbPages" does not exist.', 72, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 73
                echo "\t\t\t\t\t\t  ";
                // line 74
                echo "\t\t\t\t\t\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_user_factures", array("page" => $context["p"])), "html", null, true);
                echo "\" ";
                if (($context["p"] == (isset($context["page"]) || array_key_exists("page", $context) ? $context["page"] : (function () { throw new Twig_Error_Runtime('Variable "page" does not exist.', 74, $this->source); })()))) {
                    echo " class=\"active\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a>
\t\t\t\t\t\t ";
                // line 76
                echo "\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 77
            echo "\t\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t  ";
        }
        // line 79
        echo " 
\t\t\t\t  <br>
            </div>
\t\t</div>
\t</div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeuUser/User/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  251 => 79,  246 => 77,  240 => 76,  229 => 74,  227 => 73,  223 => 72,  218 => 69,  216 => 68,  209 => 63,  200 => 60,  196 => 59,  192 => 58,  188 => 57,  185 => 56,  180 => 55,  174 => 51,  172 => 50,  151 => 33,  143 => 26,  134 => 23,  131 => 22,  126 => 21,  117 => 18,  114 => 17,  110 => 16,  104 => 12,  95 => 11,  84 => 85,  82 => 11,  77 => 8,  68 => 7,  55 => 4,  46 => 3,  15 => 1,);
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
   <div class=\"container space-around\">
        <div>
            <div>

                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"success\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('error') %}
                    <div class=\"danger\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}

                <div>
                    <div>
                        <article>
                            <h2>Vos factures</h2>
                        </article>
\t\t\t\t\t\t{#{ dump(factures) }#}
\t\t\t\t\t\t<span class=\"ind\">Nombres total de commandes :</span><span class=\"ind tomate\"> {{ factures|length }}</span>
                    </div>
                </div>

                <div>
                    <div>
                        <article>
                            <table >
                                <thead>
                                    <tr>
                                        <th>Références</th>
                                        <th>Date</th>
                                        <th>Prix TTC</th>
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
\t\t\t\t  {% if factures is not empty %}
\t\t\t\t  <br>
\t\t\t\t  <div class=\"centre\">
\t\t\t\t\t  <div class=\"pagination\">
\t\t\t\t\t\t{% for p in range(1, nbPages) %}
\t\t\t\t\t\t  {# <li{% if p == page %} class=\"active\"{% endif %} > #}
\t\t\t\t\t\t\t<a href=\"{{ path('jeu_user_factures', {'page': p}) }}\" {% if p == page %} class=\"active\"{% endif %}>{{ p }}</a>
\t\t\t\t\t\t {# </li> #}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t  </div>
\t\t\t\t  </div>
\t\t\t\t  {% endif %} 
\t\t\t\t  <br>
            </div>
\t\t</div>
\t</div>
  {% endblock fos_user_content %}
  
{% endblock %}", "@JeuUser/User/facture.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle\\Resources\\views\\User\\facture.html.twig");
    }
}
