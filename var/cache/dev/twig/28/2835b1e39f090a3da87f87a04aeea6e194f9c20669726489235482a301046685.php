<?php

/* @JeuCore/layout.html.twig */
class __TwigTemplate_3c1bb8d44f72a02ba4f4b9315773c6aeaf65444487c1d5569853d2f7d4760f59 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuCore/layout.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuCore/layout.html.twig"));

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
        // line 16
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.jpg"), "html", null, true);
        echo "\"/>
  </head>

  <body>
  <div class=\"container\">
    <header class=\"ind\">
\t\t<div class=\"hautCote\">
\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.jpg"), "html", null, true);
        echo "\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"hautCentre\">
\t\t\t\t
\t\t\t<div class=\"centre hautMilieu wid\">
\t\t\t\t<div class=\"wid flex\">
\t\t\t\t\t\t\t<div class=\"hautCache\">
\t\t\t\t\t\t<a href=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.jpg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"60px\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h1 class=\"vertfonce titre\">JeuxDeSociété</h1>
\t\t\t\t\t<div class=\"hautCache\">
\t\t\t\t\t\t<a href=\"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.jpg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"60px\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t\t
\t\t\t\t\t<p class=\"it\">
\t\t\t\t\t\tCe projet est propulsé par Symfony, et construit dans le cadre de mes études à IFOCOP.
\t\t\t\t\t</p>
\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t\t<div class=\"menu wid\" id=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\">Boutique</a></li>
\t\t\t\t";
        // line 47
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 48
            echo "\t\t\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 49
                echo "\t\t\t\t\t\t<li><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\" id=\"adminmenu\" >Administration</a></li>
\t\t\t\t\t";
            }
            // line 51
            echo "\t\t\t\t\t<li><a class=\"menuprofil\">Mon compte</a>
\t\t\t\t\t\t<ul class=\"sousmenu\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit");
            echo "\">Editer mes informations</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 55
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
            echo "\">Changer mon mot de passe</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 56
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_user_factures");
            echo "\">Mes factures</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 57
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>\t\t
\t\t\t\t";
        } else {
            // line 61
            echo "\t\t\t\t\t<li><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Connexion</a></li>
\t\t\t\t\t<li><a href=\"";
            // line 62
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a></li>
\t\t\t\t";
        }
        // line 64
        echo "\t\t\t\t</ul>
\t\t\t</div>\t
\t\t</div>\t
\t\t<div class=\"hautCote\">
\t\t\t<a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.jpg"), "html", null, true);
        echo "\" alt=\"logo\"></a>
\t\t</div>
    </header>
    <div class=\"section padb\">
      <div class=\"sidebar\">
\t\t<fieldset>
\t\t\t<legend><h3>Les jeux</h3></legend>
        
          <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\">Accueil</a><br><br>
          <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meilleurVente");
        echo "\">Top Ventes</a><br>
\t\t  ";
        // line 78
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 78, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "jeu_article_recherche")) {
            // line 79
            echo "\t\t  <h3>Recherche</h3>
\t\t\t";
            // line 80
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 80, $this->source); })()), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "form", "method" => "post")));
            echo "
\t\t\t<div>
              ";
            // line 82
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 82, $this->source); })()), "categories", array()), 'label', array("label_attr" => array("class" => "ind orange"), "label" => "Categories"));
            echo " 
              ";
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 83, $this->source); })()), "categories", array()), 'widget', array("attr" => array("class" => "categoriesclass span3")));
            echo "
              ";
            // line 84
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 84, $this->source); })()), "categories", array()), 'errors');
            echo "
            </div><br>
\t\t\t<div>
              ";
            // line 87
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 87, $this->source); })()), "publicJeu", array()), 'label', array("label_attr" => array("class" => "ind orange"), "label" => "Public concerné"));
            echo "
              ";
            // line 88
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 88, $this->source); })()), "publicJeu", array()), 'widget', array("attr" => array("class" => "publicJeuclass span3", "name" => "publicJeu")));
            echo "
              ";
            // line 89
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 89, $this->source); })()), "publicJeu", array()), 'errors');
            echo "
            </div>
\t\t\t";
            // line 91
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 91, $this->source); })()), 'form_end');
            echo "
\t\t  ";
        } else {
            // line 93
            echo "\t\t  <br><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_recherche");
            echo "\">Rechercher un jeu</a>
\t\t  ";
        }
        // line 95
        echo "        </fieldset>
\t\t

\t\t";
        // line 98
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 99
            echo "\t\t\t<br>
\t\t\t";
            // line 100
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 101
                echo "\t\t\tVous êtes Super Admin<br>
\t\t\t";
            }
            // line 103
            echo "\t\t<fieldset><legend><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 103, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "</h3></legend>\t
\t\t\t<a href=\"";
            // line 104
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\"> Profil</a><br><br>
\t\t\t";
            // line 105
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("JeuArticleBundle:Panier:menu"));
            echo "<br>
\t\t\t<a href=\"";
            // line 106
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_user_factures");
            echo "\"> Mes factures</a><br><br>
\t\t\t<a href=\"";
            // line 107
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
\t\t";
        }
        // line 109
        echo "\t\t</fieldset>
      </div>
\t  <!-- <hr> -->
      <div id=\"content\" class=\"pad\">
        ";
        // line 113
        $this->displayBlock('body', $context, $blocks);
        // line 115
        echo "      </div>
    </div>

    

    <footer>\t
\t\t<div class=\"footer centre\">\t\t
\t\t\t<h4>Informations</h4>
\t\t\t\t";
        // line 123
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("JeuPagesBundle:Pages:menu"));
        echo "
\t\t</div>\t
\t\t<div class=\"footer centre\">\t
\t\t\t<h4>Réseaux sociaux</h4>
\t\t\t<div class=\"flex3 justify-center\">
\t\t\t\t\t<div class=\"mar2\"><a href=\"http://twitter.com/share\" class=\"twitter-share-button\" 
\t\t\t\t\t  data-count=\"vertical\" data-via=\"InfoWebMaster\">Tweet</a></div>
\t\t\t\t\t<div class=\"fb-like mar2\" data-href=\"http://jeux.audoinjean95300.com\" data-layout=\"button\" data-action=\"like\" data-size=\"small\" data-show-faces=\"false\" data-share=\"true\"></div><div class=\"mar2\">
\t\t\t\t\t<g:plusone size=\"tall\"></g:plusone></div>
\t\t\t\t\t<div>
\t\t\t\t\t<script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"> lang: fr_FR</script>
\t\t\t\t\t<script type=\"IN/Share\" data-url=\"http://jeux.audoinjean95300.com\"></script></div>
\t\t\t</div>\t\t\t
\t\t\t\t\t<p>Copyright ";
        // line 136
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - <b>Geek-Street</b> (<a
\t\t\t\t\t\t\thref=\"http://jeux.audoinjean95300.com\" target=\"_blank\">jeannot95</a>)</p>
\t\t\t\t\t\t
\t\t</div>\t\t\t\t
\t\t<div class=\"footer centre\">\t\t
\t\t\t<h4>Nous contacter</h4>
\t\t\t<p>Tel : 06.00.00.00.00</p>
\t\t\t<p>Fax : 01.00.00.00.00</p>
\t\t</div>\t\t\t\t\t\t
    </footer>
  </div>

  ";
        // line 148
        $this->displayBlock('javascripts', $context, $blocks);
        // line 177
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
        echo "      <!-- <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\"> -->
\t  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jeux.css"), "html", null, true);
        echo "\">
\t  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stars.css"), "html", null, true);
        echo "\">
\t  <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/boutons.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 113
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 114
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 148
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 149
        echo "    ";
        // line 150
        echo "<!--     <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script> -->
\t<script>
\t\twindow.onscroll = function() {myFunction()};
\t\tvar menu = document.getElementById(\"menu\");
\t\tvar sticky = menu.offsetTop;
\t\tfunction myFunction() {
\t\t  if (window.pageYOffset > sticky) {
\t\t\tmenu.classList.add(\"sticky\");
\t\t  } else {
\t\t\tmenu.classList.remove(\"sticky\");
\t\t  }
\t\t}
\t</script>
\t<script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
\t<script>(function(d, s, id) {
\t\t  var js, fjs = d.getElementsByTagName(s)[0];
\t\t  if (d.getElementById(id)) return;
\t\t  js = d.createElement(s); js.id = id;
\t\t  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.1';
\t\t  fjs.parentNode.insertBefore(js, fjs);
\t\t}(document, 'script', 'facebook-jssdk'));
\t</script>
\t<script type=\"text/javascript\" src=\"https://apis.google.com/js/plusone.js\">
\t\t{lang: 'fr'}
\t</script>\t
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@JeuCore/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 150,  404 => 149,  395 => 148,  385 => 114,  376 => 113,  364 => 14,  360 => 13,  356 => 12,  353 => 11,  344 => 10,  326 => 8,  314 => 177,  312 => 148,  297 => 136,  281 => 123,  271 => 115,  269 => 113,  263 => 109,  258 => 107,  254 => 106,  250 => 105,  246 => 104,  241 => 103,  237 => 101,  235 => 100,  232 => 99,  230 => 98,  225 => 95,  219 => 93,  214 => 91,  209 => 89,  205 => 88,  201 => 87,  195 => 84,  191 => 83,  187 => 82,  182 => 80,  179 => 79,  177 => 78,  173 => 77,  169 => 76,  156 => 68,  150 => 64,  145 => 62,  140 => 61,  133 => 57,  129 => 56,  125 => 55,  121 => 54,  117 => 53,  113 => 51,  107 => 49,  104 => 48,  102 => 47,  98 => 46,  81 => 34,  72 => 30,  60 => 23,  49 => 16,  47 => 10,  42 => 8,  33 => 1,);
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
      <!-- <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\"> -->
\t  <link rel=\"stylesheet\" href=\"{{ asset('css/jeux.css') }}\">
\t  <link rel=\"stylesheet\" href=\"{{ asset('css/stars.css') }}\">
\t  <link rel=\"stylesheet\" href=\"{{ asset('css/boutons.css') }}\">
    {% endblock %}
\t<link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/logo2.jpg') }}\"/>
  </head>

  <body>
  <div class=\"container\">
    <header class=\"ind\">
\t\t<div class=\"hautCote\">
\t\t\t<a href=\"{{ path('jeu_article_homepage') }}\"><img src=\"{{ asset('img/logo2.jpg') }}\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"hautCentre\">
\t\t\t\t
\t\t\t<div class=\"centre hautMilieu wid\">
\t\t\t\t<div class=\"wid flex\">
\t\t\t\t\t\t\t<div class=\"hautCache\">
\t\t\t\t\t\t<a href=\"{{ path('jeu_article_homepage') }}\"><img src=\"{{ asset('img/logo2.jpg') }}\" alt=\"logo\" width=\"60px\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h1 class=\"vertfonce titre\">JeuxDeSociété</h1>
\t\t\t\t\t<div class=\"hautCache\">
\t\t\t\t\t\t<a href=\"{{ path('jeu_article_homepage') }}\"><img src=\"{{ asset('img/logo2.jpg') }}\" alt=\"logo\" width=\"60px\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t\t
\t\t\t\t\t<p class=\"it\">
\t\t\t\t\t\tCe projet est propulsé par Symfony, et construit dans le cadre de mes études à IFOCOP.
\t\t\t\t\t</p>
\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t\t<div class=\"menu wid\" id=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"{{ path('jeu_article_homepage') }}\">Boutique</a></li>
\t\t\t\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t\t\t\t\t{% if is_granted(\"ROLE_ADMIN\") %}
\t\t\t\t\t\t<li><a href=\"{{ path('admin') }}\" id=\"adminmenu\" >Administration</a></li>
\t\t\t\t\t{% endif %}
\t\t\t\t\t<li><a class=\"menuprofil\">Mon compte</a>
\t\t\t\t\t\t<ul class=\"sousmenu\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_profile_show') }}\">Profil</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_profile_edit') }}\">Editer mes informations</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_change_password') }}\">Changer mon mot de passe</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('jeu_user_factures') }}\">Mes factures</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>\t\t
\t\t\t\t{% else %}
\t\t\t\t\t<li><a href=\"{{ path('fos_user_security_login') }}\">Connexion</a></li>
\t\t\t\t\t<li><a href=\"{{ path('fos_user_registration_register') }}\">S'enregistrer</a></li>
\t\t\t\t{% endif %}
\t\t\t\t</ul>
\t\t\t</div>\t
\t\t</div>\t
\t\t<div class=\"hautCote\">
\t\t\t<a href=\"{{ path('jeu_article_homepage') }}\"><img src=\"{{ asset('img/logo2.jpg') }}\" alt=\"logo\"></a>
\t\t</div>
    </header>
    <div class=\"section padb\">
      <div class=\"sidebar\">
\t\t<fieldset>
\t\t\t<legend><h3>Les jeux</h3></legend>
        
          <a href=\"{{ path('jeu_article_homepage') }}\">Accueil</a><br><br>
          <a href=\"{{ path('meilleurVente') }}\">Top Ventes</a><br>
\t\t  {% if app.request.get('_route') == 'jeu_article_recherche' %}
\t\t  <h3>Recherche</h3>
\t\t\t{{ form_start(form, {'attr': {'class': 'form-horizontal','id': 'form', 'method': 'post'}}) }}
\t\t\t<div>
              {{ form_label (form.categories, \"Categories\", {'label_attr': {'class': 'ind orange'}}) }} 
              {{ form_widget(form.categories, {'attr' : {'class' : 'categoriesclass span3'}}) }}
              {{ form_errors(form.categories) }}
            </div><br>
\t\t\t<div>
              {{ form_label (form.publicJeu, \"Public concerné\", {'label_attr': {'class': 'ind orange'}}) }}
              {{ form_widget(form.publicJeu, {'attr' : {'class' : 'publicJeuclass span3','name':'publicJeu'}}) }}
              {{ form_errors(form.publicJeu) }}
            </div>
\t\t\t{{ form_end(form) }}
\t\t  {% else %}
\t\t  <br><a href=\"{{ path('jeu_article_recherche') }}\">Rechercher un jeu</a>
\t\t  {% endif %}
        </fieldset>
\t\t

\t\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t\t\t<br>
\t\t\t{% if is_granted(\"ROLE_SUPER_ADMIN\") %}
\t\t\tVous êtes Super Admin<br>
\t\t\t{% endif %}
\t\t<fieldset><legend><h3>{{ app.user.username }}</h3></legend>\t
\t\t\t<a href=\"{{ path('fos_user_profile_show') }}\"> Profil</a><br><br>
\t\t\t{{ render(controller('JeuArticleBundle:Panier:menu')) }}<br>
\t\t\t<a href=\"{{ path('jeu_user_factures') }}\"> Mes factures</a><br><br>
\t\t\t<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
\t\t{% endif %}
\t\t</fieldset>
      </div>
\t  <!-- <hr> -->
      <div id=\"content\" class=\"pad\">
        {% block body %}
        {% endblock %}
      </div>
    </div>

    

    <footer>\t
\t\t<div class=\"footer centre\">\t\t
\t\t\t<h4>Informations</h4>
\t\t\t\t{{ render(controller('JeuPagesBundle:Pages:menu')) }}
\t\t</div>\t
\t\t<div class=\"footer centre\">\t
\t\t\t<h4>Réseaux sociaux</h4>
\t\t\t<div class=\"flex3 justify-center\">
\t\t\t\t\t<div class=\"mar2\"><a href=\"http://twitter.com/share\" class=\"twitter-share-button\" 
\t\t\t\t\t  data-count=\"vertical\" data-via=\"InfoWebMaster\">Tweet</a></div>
\t\t\t\t\t<div class=\"fb-like mar2\" data-href=\"http://jeux.audoinjean95300.com\" data-layout=\"button\" data-action=\"like\" data-size=\"small\" data-show-faces=\"false\" data-share=\"true\"></div><div class=\"mar2\">
\t\t\t\t\t<g:plusone size=\"tall\"></g:plusone></div>
\t\t\t\t\t<div>
\t\t\t\t\t<script src=\"//platform.linkedin.com/in.js\" type=\"text/javascript\"> lang: fr_FR</script>
\t\t\t\t\t<script type=\"IN/Share\" data-url=\"http://jeux.audoinjean95300.com\"></script></div>
\t\t\t</div>\t\t\t
\t\t\t\t\t<p>Copyright {{ \"now\"|date('Y') }} - <b>Geek-Street</b> (<a
\t\t\t\t\t\t\thref=\"http://jeux.audoinjean95300.com\" target=\"_blank\">jeannot95</a>)</p>
\t\t\t\t\t\t
\t\t</div>\t\t\t\t
\t\t<div class=\"footer centre\">\t\t
\t\t\t<h4>Nous contacter</h4>
\t\t\t<p>Tel : 06.00.00.00.00</p>
\t\t\t<p>Fax : 01.00.00.00.00</p>
\t\t</div>\t\t\t\t\t\t
    </footer>
  </div>

  {% block javascripts %}
    {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}
<!--     <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script> -->
\t<script>
\t\twindow.onscroll = function() {myFunction()};
\t\tvar menu = document.getElementById(\"menu\");
\t\tvar sticky = menu.offsetTop;
\t\tfunction myFunction() {
\t\t  if (window.pageYOffset > sticky) {
\t\t\tmenu.classList.add(\"sticky\");
\t\t  } else {
\t\t\tmenu.classList.remove(\"sticky\");
\t\t  }
\t\t}
\t</script>
\t<script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
\t<script>(function(d, s, id) {
\t\t  var js, fjs = d.getElementsByTagName(s)[0];
\t\t  if (d.getElementById(id)) return;
\t\t  js = d.createElement(s); js.id = id;
\t\t  js.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.1';
\t\t  fjs.parentNode.insertBefore(js, fjs);
\t\t}(document, 'script', 'facebook-jssdk'));
\t</script>
\t<script type=\"text/javascript\" src=\"https://apis.google.com/js/plusone.js\">
\t\t{lang: 'fr'}
\t</script>\t
  {% endblock %}

  </body>
</html>", "@JeuCore/layout.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\CoreBundle\\Resources\\views\\layout.html.twig");
    }
}
