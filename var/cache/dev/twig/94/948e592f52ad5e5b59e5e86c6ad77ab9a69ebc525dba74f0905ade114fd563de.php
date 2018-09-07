<?php

/* JeuArticleBundle:Panier:livraison.html.twig */
class __TwigTemplate_2436091895ce4dc3c352ce10068ccd25f693065de4ff9ac1152e3ff0455ad216 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout2.html.twig", "JeuArticleBundle:Panier:livraison.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jeu_article_body' => array($this, 'block_jeu_article_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuArticleBundle::layout2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Panier:livraison.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Panier:livraison.html.twig"));

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
        echo "  Livraison - ";
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
<h2>Livraison</h2>

  ";
        // line 11
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 47
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

        echo " 
\t<div class=\"col-md-6 pull-left\">
\t\t";
        // line 13
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->source); })()), "adresses", array())) != 0)) {
            // line 14
            echo "\t\t<form action=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_validation");
            echo "\" method=\"POST\">
\t\t\t<h4>Adresse de livraison</h4>
\t\t\t";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 16, $this->source); })()), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 17
                echo "\t\t\t\t<label class=\"radio\">
\t\t\t\t\t<input type=\"radio\" name=\"livraison\" value=\"";
                // line 18
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\" ";
                }
                echo ">
\t\t\t\t\t";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "ville", array()), "html", null, true);
                echo "
\t\t\t\t\t<a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_adresse_suppression", array("id" => twig_get_attribute($this->env, $this->source, $context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i>supprimer</i></a><br>
\t\t\t\t\t";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "nom", array()), "html", null, true);
                echo "
\t\t\t\t</label>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t\t\t<br><br>
\t\t\t<h4>Adresse de facturation</h4>
\t\t\t";
            // line 26
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 26, $this->source); })()), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 27
                echo "\t\t\t\t<label class=\"radio\">
\t\t\t\t\t<input type=\"radio\" name=\"facturation\" value=\"";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) == 0)) {
                    echo "checked=\"checked\" ";
                }
                echo " >
\t\t\t\t\t";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "ville", array()), "html", null, true);
                echo "
\t\t\t\t\t<a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraison_adresse_suppression", array("id" => twig_get_attribute($this->env, $this->source, $context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i>supprimer</i></a><br>
\t\t\t\t\t";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "prenom", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "nom", array()), "html", null, true);
                echo "
\t\t\t\t</label>
\t\t\t";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "\t\t\t<br>\t\t\t
\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Valider mes adresses</button>
\t\t</form>
\t\t";
        }
        // line 38
        echo "\t</div>
\t<div class=\"col-md-6 pull-right\">
\t\t<h4>Ajouter une nouvelle adresse</h4>
\t\t<form action=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_livraison");
        echo "\" method=\"POST\">
\t\t\t";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), 'widget');
        echo "
\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Ajouter</button>
\t\t</form>
\t</div>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Panier:livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 42,  248 => 41,  243 => 38,  237 => 34,  218 => 31,  214 => 30,  206 => 29,  198 => 28,  195 => 27,  178 => 26,  174 => 24,  155 => 21,  151 => 20,  143 => 19,  135 => 18,  132 => 17,  115 => 16,  109 => 14,  107 => 13,  95 => 11,  84 => 47,  82 => 11,  77 => 8,  68 => 7,  55 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JeuArticleBundle::layout2.html.twig\" %}

{% block title %}
  Livraison - {{ parent() }}
{% endblock %}

{% block jeu_article_body %}

<h2>Livraison</h2>

  {% block fos_user_content %} 
\t<div class=\"col-md-6 pull-left\">
\t\t{% if user.adresses|length != 0 %}
\t\t<form action=\"{{ path('jeu_article_validation') }}\" method=\"POST\">
\t\t\t<h4>Adresse de livraison</h4>
\t\t\t{% for adresse in user.adresses %}
\t\t\t\t<label class=\"radio\">
\t\t\t\t\t<input type=\"radio\" name=\"livraison\" value=\"{{ adresse.id }}\" {% if loop.index0 == 0 %}checked=\"checked\" {% endif %}>
\t\t\t\t\t{{ adresse.adresse }}, {{ adresse.cp }} {{ adresse.ville }}
\t\t\t\t\t<a href=\"{{ path('livraison_adresse_suppression', { 'id': adresse.id }) }}\"><i>supprimer</i></a><br>
\t\t\t\t\t{{ adresse.prenom }} {{ adresse.nom }}
\t\t\t\t</label>
\t\t\t{% endfor %}
\t\t\t<br><br>
\t\t\t<h4>Adresse de facturation</h4>
\t\t\t{% for adresse in user.adresses %}
\t\t\t\t<label class=\"radio\">
\t\t\t\t\t<input type=\"radio\" name=\"facturation\" value=\"{{ adresse.id }}\" {% if loop.index0 == 0 %}checked=\"checked\" {% endif %} >
\t\t\t\t\t{{ adresse.adresse }}, {{ adresse.cp }} {{ adresse.ville }}
\t\t\t\t\t<a href=\"{{ path('livraison_adresse_suppression', { 'id': adresse.id }) }}\"><i>supprimer</i></a><br>
\t\t\t\t\t{{ adresse.prenom }} {{ adresse.nom }}
\t\t\t\t</label>
\t\t\t{% endfor %}
\t\t\t<br>\t\t\t
\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Valider mes adresses</button>
\t\t</form>
\t\t{% endif %}
\t</div>
\t<div class=\"col-md-6 pull-right\">
\t\t<h4>Ajouter une nouvelle adresse</h4>
\t\t<form action=\"{{ path('jeu_article_livraison') }}\" method=\"POST\">
\t\t\t{{ form_widget(form) }}
\t\t\t<button class=\"btn btn-primary\" type=\"submit\" >Ajouter</button>
\t\t</form>
\t</div>
  {% endblock fos_user_content %}
  
{% endblock %}", "JeuArticleBundle:Panier:livraison.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Panier/livraison.html.twig");
    }
}
