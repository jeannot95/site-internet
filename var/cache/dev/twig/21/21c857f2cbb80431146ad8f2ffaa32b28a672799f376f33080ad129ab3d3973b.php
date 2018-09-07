<?php

/* @JeuCore/layout2.html.twig */
class __TwigTemplate_96d062ba1274f91846548fdad4b668da2a7828a6f1d315527b7e4a9f04c7c81f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuCore/layout2.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuCore/layout2.html.twig"));

        // line 1
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"/>\t
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
\t";
        // line 27
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "\t<div class=\"row\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_ajout");
            echo "\">Ajouter Article</a> / <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_modifier");
            echo "\">Modifier Article</a> / <a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_supprimer");
            echo "\">Supprimer Article</a>
\t</div>
\t";
        }
        // line 31
        echo "    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les jeux</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\">Accueil</a></li>
          ";
        // line 37
        echo "\t\t  <form id=\"form_recherche\">
\t\t  ça marche
\t\t  
\t\t  </form>
        </ul>
\t\t<h3>Connexion</h3>

\t\t";
        // line 44
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 45
            echo "\t\t\tConnecté en tant que ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 45, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "<br>
\t\t\t";
            // line 46
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 47
                echo "\t\t\tVous êtes Super Admin<br>
\t\t\t";
            }
            // line 49
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\"> Profil</a><br>
\t\t\t<a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
\t\t";
        } else {
            // line 52
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Connexion</a><br>
\t\t\t<a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a>
\t\t";
        }
        // line 55
        echo "        <h4>Dernières sorties</h4>
       ";
        // line 57
        echo "      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 67
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 76
        echo "
  </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
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

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "      ";
        // line 12
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 60
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "    ";
        // line 73
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeuCore/layout2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 73,  237 => 72,  228 => 71,  218 => 60,  209 => 59,  198 => 12,  196 => 11,  187 => 10,  169 => 8,  157 => 76,  155 => 71,  148 => 67,  140 => 61,  138 => 59,  134 => 57,  131 => 55,  126 => 53,  121 => 52,  116 => 50,  111 => 49,  107 => 47,  105 => 46,  100 => 45,  98 => 44,  89 => 37,  85 => 35,  79 => 31,  68 => 28,  66 => 27,  49 => 14,  47 => 10,  42 => 8,  33 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>{% block title %}Jeu de Société{% endblock %}</title>

    {% block stylesheets %}
      {# On charge le CSS de bootstrap depuis le site directement #}
      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    {% endblock %}
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/logo.png') }}\"/>\t
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
\t<div class=\"row\"><a href=\"{{ path(\"jeu_article_ajout\") }}\">Ajouter Article</a> / <a href=\"{{ path(\"jeu_article_modifier\") }}\">Modifier Article</a> / <a href=\"{{ path(\"jeu_article_supprimer\") }}\">Supprimer Article</a>
\t</div>
\t{% endif %}
    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les jeux</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"{{ path('jeu_article_homepage') }}\">Accueil</a></li>
          {# <li><a href=\"{{ path('jeu_article_recherche') }}\">Rechercher un jeu</a></li> #}
\t\t  <form id=\"form_recherche\">
\t\t  ça marche
\t\t  
\t\t  </form>
        </ul>
\t\t<h3>Connexion</h3>

\t\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t\t\tConnecté en tant que {{ app.user.username }}<br>
\t\t\t{% if is_granted(\"ROLE_SUPER_ADMIN\") %}
\t\t\tVous êtes Super Admin<br>
\t\t\t{% endif %}
\t\t\t<a href=\"{{ path('fos_user_profile_show') }}\"> Profil</a><br>
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
</html>", "@JeuCore/layout2.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\CoreBundle\\Resources\\views\\layout2.html.twig");
    }
}
