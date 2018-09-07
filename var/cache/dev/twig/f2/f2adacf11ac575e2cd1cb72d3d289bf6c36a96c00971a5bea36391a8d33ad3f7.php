<?php

/* JeuCoreBundle::layoutAdmin.html.twig */
class __TwigTemplate_5d2958fe2b6cf691178b7f4c37b800faef6b1739ed54835906e689733b8d0d9d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuCoreBundle::layoutAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuCoreBundle::layoutAdmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Mon site de jeux de société</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit dans le cadre de mes études à IFOCOP.
      </p>
      <p>
      </p>
    </div>
\t";
        // line 26
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 27
            echo "\t<div class=\"row\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_ajout");
            echo "\">Ajouter Article</a>
\t</div>
\t";
        }
        // line 30
        echo "    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les jeux</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\">Accueil</a></li>
\t\t  ";
        // line 35
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 35, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "jeu_article_recherche")) {
            // line 36
            echo "\t\t\t";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 36, $this->source); })()), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "form", "method" => "post")));
            echo "
\t\t\t<div class=\"span3\">
              ";
            // line 38
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 38, $this->source); })()), "categories", array()), 'label', array("label" => "Categories"));
            echo "
              ";
            // line 39
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "categories", array()), 'widget', array("attr" => array("class" => "categoriesclass span3")));
            echo "
              ";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 40, $this->source); })()), "categories", array()), 'errors');
            echo "
            </div>
\t\t\t<div class=\"span3\">
              ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 43, $this->source); })()), "publicJeu", array()), 'label', array("label" => "Public concerné"));
            echo "
              ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 44, $this->source); })()), "publicJeu", array()), 'widget', array("attr" => array("class" => "publicJeuclass span3", "name" => "publicJeu")));
            echo "
              ";
            // line 45
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 45, $this->source); })()), "publicJeu", array()), 'errors');
            echo "
            </div>
\t\t\t";
            // line 47
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
            echo "
\t\t  ";
        } else {
            // line 49
            echo "\t\t  <li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_recherche");
            echo "\">Rechercher un jeu</a></li>
\t\t  ";
        }
        // line 51
        echo "        </ul>
\t\t<h3>Connexion</h3>

\t\t";
        // line 54
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 55
            echo "\t\t\tConnecté en tant que ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 55, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "<br>
\t\t\t";
            // line 56
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 57
                echo "\t\t\tVous êtes Super Admin<br>
\t\t\t";
            }
            // line 59
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\"> Profil</a><br>
\t\t\t";
            // line 60
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("JeuArticleBundle:Panier:menu"));
            echo "
\t\t\t<a href=\"";
            // line 61
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_user_factures");
            echo "\"> Mes factures</a><br>
\t\t\t<a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
\t\t";
        } else {
            // line 64
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Connexion</a><br>
\t\t\t<a href=\"";
            // line 65
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a>
\t\t";
        }
        // line 67
        echo "        <h4>Dernières sorties</h4>
       ";
        // line 69
        echo "      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 79
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 83
        $this->displayBlock('javascripts', $context, $blocks);
        // line 88
        echo "
  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Jeu de Société";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "      ";
        // line 11
        echo "\t  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jeux.css"), "html", null, true);
        echo "\">
\t  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stars.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 72
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 84
        echo "    ";
        // line 85
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuCoreBundle::layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 85,  285 => 84,  276 => 83,  266 => 72,  257 => 71,  245 => 12,  240 => 11,  238 => 10,  229 => 9,  211 => 7,  199 => 88,  197 => 83,  190 => 79,  182 => 73,  180 => 71,  176 => 69,  173 => 67,  168 => 65,  163 => 64,  158 => 62,  154 => 61,  150 => 60,  145 => 59,  141 => 57,  139 => 56,  134 => 55,  132 => 54,  127 => 51,  121 => 49,  116 => 47,  111 => 45,  107 => 44,  103 => 43,  97 => 40,  93 => 39,  89 => 38,  83 => 36,  81 => 35,  77 => 34,  71 => 30,  64 => 27,  62 => 26,  48 => 14,  46 => 9,  41 => 7,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}Jeu de Société{% endblock %}</title>

    {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
\t  <link rel=\"stylesheet\" href=\"{{ asset('css/jeux.css') }}\">
\t  <link rel=\"stylesheet\" href=\"{{ asset('css/stars.css') }}\">
    {% endblock %}
  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Mon site de jeux de société</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit dans le cadre de mes études à IFOCOP.
      </p>
      <p>
      </p>
    </div>
\t{% if is_granted(\"ROLE_ADMIN\") %}
\t<div class=\"row\"><a href=\"{{ path(\"jeu_article_ajout\") }}\">Ajouter Article</a>
\t</div>
\t{% endif %}
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les jeux</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('jeu_article_homepage') }}\">Accueil</a></li>
\t\t  {% if app.request.get('_route') == 'jeu_article_recherche' %}
\t\t\t{{ form_start(form, {'attr': {'class': 'form-horizontal','id': 'form', 'method': 'post'}}) }}
\t\t\t<div class=\"span3\">
              {{ form_label (form.categories, \"Categories\") }}
              {{ form_widget(form.categories, {'attr' : {'class' : 'categoriesclass span3'}}) }}
              {{ form_errors(form.categories) }}
            </div>
\t\t\t<div class=\"span3\">
              {{ form_label (form.publicJeu, \"Public concerné\") }}
              {{ form_widget(form.publicJeu, {'attr' : {'class' : 'publicJeuclass span3','name':'publicJeu'}}) }}
              {{ form_errors(form.publicJeu) }}
            </div>
\t\t\t{{ form_end(form) }}
\t\t  {% else %}
\t\t  <li><a href=\"{{ path('jeu_article_recherche') }}\">Rechercher un jeu</a></li>
\t\t  {% endif %}
        </ul>
\t\t<h3>Connexion</h3>

\t\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t\t\tConnecté en tant que {{ app.user.username }}<br>
\t\t\t{% if is_granted(\"ROLE_SUPER_ADMIN\") %}
\t\t\tVous êtes Super Admin<br>
\t\t\t{% endif %}
\t\t\t<a href=\"{{ path('fos_user_profile_show') }}\"> Profil</a><br>
\t\t\t{{ render(controller('JeuArticleBundle:Panier:menu')) }}
\t\t\t<a href=\"{{ path('jeu_user_factures') }}\"> Mes factures</a><br>
\t\t\t<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
\t\t{% else %}
\t\t\t<a href=\"{{ path('fos_user_security_login') }}\">Connexion</a><br>
\t\t\t<a href=\"{{ path('fos_user_registration_register') }}\">S'enregistrer</a>
\t\t{% endif %}
        <h4>Dernières sorties</h4>
       {# {{ render(controller(\"OCPlatformBundle:Advert:menu\", {'limit': 3})) }}#}
      </div>
      <div id=\"content\" class=\"col-md-9\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

  </body>
</html>", "JeuCoreBundle::layoutAdmin.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\CoreBundle/Resources/views/layoutAdmin.html.twig");
    }
}
