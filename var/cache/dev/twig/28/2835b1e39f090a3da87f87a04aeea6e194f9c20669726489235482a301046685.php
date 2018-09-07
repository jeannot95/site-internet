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
        // line 15
        echo "\t<link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.jpg"), "html", null, true);
        echo "\"/>
  </head>

  <body>
  <div class=\"container\">
    <header class=\"ind\">
\t\t<div class=\"hautCote\">
\t\t\t<a href=\"";
        // line 22
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
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.jpg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"60px\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h1 class=\"vertfonce titre\">JeuxDeSociété</h1>
\t\t\t\t\t<div class=\"hautCache\">
\t\t\t\t\t\t<a href=\"";
        // line 33
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
\t\t\t<div class=\"menu wid\">
\t\t\t\t<a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\">Boutique</a>
\t\t\t\t";
        // line 45
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 46
            echo "\t\t\t";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 47
                echo "\t\t\t\t<a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin");
                echo "\">Administration</a>
\t\t\t";
            }
            // line 49
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Profil</a>
\t\t\t<a href=\"";
            // line 50
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
\t\t";
        } else {
            // line 52
            echo "\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Connexion</a>
\t\t\t<a href=\"";
            // line 53
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">S'enregistrer</a>
\t\t";
        }
        // line 55
        echo "\t\t\t</div>\t
\t\t</div>\t
\t\t<div class=\"hautCote\">
\t\t\t<a href=\"";
        // line 58
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
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\">Accueil</a><br><br>
          <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("meilleurVente");
        echo "\">Top Ventes</a><br>
\t\t  ";
        // line 68
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 68, $this->source); })()), "request", array()), "get", array(0 => "_route"), "method") == "jeu_article_recherche")) {
            // line 69
            echo "\t\t  <h3>Recherche</h3>
\t\t\t";
            // line 70
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 70, $this->source); })()), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "form", "method" => "post")));
            echo "
\t\t\t<div>
              ";
            // line 72
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 72, $this->source); })()), "categories", array()), 'label', array("label_attr" => array("class" => "ind orange"), "label" => "Categories"));
            echo " 
              ";
            // line 73
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->source); })()), "categories", array()), 'widget', array("attr" => array("class" => "categoriesclass span3")));
            echo "
              ";
            // line 74
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 74, $this->source); })()), "categories", array()), 'errors');
            echo "
            </div><br>
\t\t\t<div>
              ";
            // line 77
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 77, $this->source); })()), "publicJeu", array()), 'label', array("label_attr" => array("class" => "ind orange"), "label" => "Public concerné"));
            echo "
              ";
            // line 78
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 78, $this->source); })()), "publicJeu", array()), 'widget', array("attr" => array("class" => "publicJeuclass span3", "name" => "publicJeu")));
            echo "
              ";
            // line 79
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 79, $this->source); })()), "publicJeu", array()), 'errors');
            echo "
            </div>
\t\t\t";
            // line 81
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
            echo "
\t\t  ";
        } else {
            // line 83
            echo "\t\t  <br><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_recherche");
            echo "\">Rechercher un jeu</a>
\t\t  ";
        }
        // line 85
        echo "        </fieldset>
\t\t

\t\t";
        // line 88
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 89
            echo "\t\t\t<br>
\t\t\t";
            // line 90
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SUPER_ADMIN")) {
                // line 91
                echo "\t\t\tVous êtes Super Admin<br>
\t\t\t";
            }
            // line 93
            echo "\t\t<fieldset><legend><h3>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 93, $this->source); })()), "user", array()), "username", array()), "html", null, true);
            echo "</h3></legend>\t
\t\t\t<a href=\"";
            // line 94
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\"> Profil</a><br><br>
\t\t\t";
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("JeuArticleBundle:Panier:menu"));
            echo "<br>
\t\t\t<a href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_user_factures");
            echo "\"> Mes factures</a><br><br>
\t\t\t<a href=\"";
            // line 97
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
\t\t";
        }
        // line 99
        echo "\t\t</fieldset>
      </div>
\t  <!-- <hr> -->
      <div id=\"content\" class=\"pad\">
        ";
        // line 103
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "      </div>
    </div>

    

    <footer>\t
\t\t<div class=\"footer centre\">\t\t
\t\t\t<h4>Informations</h4>
\t\t\t\t";
        // line 113
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("JeuPagesBundle:Pages:menu"));
        echo "
\t\t</div>\t
\t\t<div class=\"footer centre\">\t
\t\t\t<h4>Réseaux sociaux</h4>
\t\t\t<a href=\"http://twitter.com/share\" class=\"twitter-share-button\" 
\t\t\t  data-count=\"vertical\" data-via=\"InfoWebMaster\">Tweet</a>
\t\t\t<script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
\t\t\t\t<script type=\"text/javascript\" src=\"http://platform.linkedin.com/in.js\"></script>
\t\t\t\t<script type=\"in/share\" data-counter=\"top\"></script>
\t\t\t\t<g:plusone size=\"tall\"></g:plusone>
\t\t\t\t<script type=\"text/javascript\" src=\"https://apis.google.com/js/plusone.js\">
\t\t\t\t{lang: 'fr'}
\t\t\t\t</script>
\t\t\t\t<div id=\"fb-root\"></div>
\t\t\t\t<script>(function(d, s, id) {
\t\t\t\tvar js, fjs = d.getElementsByTagName(s)[0];
\t\t\t\tif (d.getElementById(id)) return;
\t\t\t\tjs = d.createElement(s); js.id = id;
\t\t\t\tjs.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.1';
\t\t\t\tfjs.parentNode.insertBefore(js, fjs);
\t\t\t\t}(document, 'script', 'facebook-jssdk'));</script>
\t\t\t\t<div class=\"fb-like\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button\" data-action=\"like\" data-size=\"small\" data-show-faces=\"true\" data-share=\"true\"></div>\t\t\t\t\t
\t\t\t\t<p class=\" title is-5 indieflower\">Copyright ";
        // line 135
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - <b>Geek-Street</b> (<a
\t\t\t\t\t\thref=\"http://audoinjean95300.com\" target=\"_blank\">jeannot95</a>)</p>
\t\t</div>\t\t\t\t
\t\t<div class=\"footer centre\">\t\t
\t\t\t<h4>Nous contacter</h4>
\t\t\t<p>Tel : 06.00.00.00.00</p>
\t\t\t<p>Fax : 01.00.00.00.00</p>
\t\t</div>\t\t\t\t\t\t
    </footer>
  </div>

  ";
        // line 146
        $this->displayBlock('javascripts', $context, $blocks);
        // line 151
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
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 103
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 104
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 147
        echo "    ";
        // line 148
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
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
        return array (  391 => 148,  389 => 147,  380 => 146,  370 => 104,  361 => 103,  349 => 13,  345 => 12,  342 => 11,  333 => 10,  315 => 8,  303 => 151,  301 => 146,  287 => 135,  262 => 113,  252 => 105,  250 => 103,  244 => 99,  239 => 97,  235 => 96,  231 => 95,  227 => 94,  222 => 93,  218 => 91,  216 => 90,  213 => 89,  211 => 88,  206 => 85,  200 => 83,  195 => 81,  190 => 79,  186 => 78,  182 => 77,  176 => 74,  172 => 73,  168 => 72,  163 => 70,  160 => 69,  158 => 68,  154 => 67,  150 => 66,  137 => 58,  132 => 55,  127 => 53,  122 => 52,  117 => 50,  112 => 49,  106 => 47,  103 => 46,  101 => 45,  97 => 44,  81 => 33,  72 => 29,  60 => 22,  49 => 15,  47 => 10,  42 => 8,  33 => 1,);
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
\t\t\t<div class=\"menu wid\">
\t\t\t\t<a href=\"{{ path('jeu_article_homepage') }}\">Boutique</a>
\t\t\t\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t\t\t{% if is_granted(\"ROLE_SUPER_ADMIN\") %}
\t\t\t\t<a href=\"{{ path('admin') }}\">Administration</a>
\t\t\t{% endif %}
\t\t\t<a href=\"{{ path('fos_user_profile_show') }}\">Profil</a>
\t\t\t<a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a>
\t\t{% else %}
\t\t\t<a href=\"{{ path('fos_user_security_login') }}\">Connexion</a>
\t\t\t<a href=\"{{ path('fos_user_registration_register') }}\">S'enregistrer</a>
\t\t{% endif %}
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
\t\t\t<a href=\"http://twitter.com/share\" class=\"twitter-share-button\" 
\t\t\t  data-count=\"vertical\" data-via=\"InfoWebMaster\">Tweet</a>
\t\t\t<script type=\"text/javascript\" src=\"http://platform.twitter.com/widgets.js\"></script>
\t\t\t\t<script type=\"text/javascript\" src=\"http://platform.linkedin.com/in.js\"></script>
\t\t\t\t<script type=\"in/share\" data-counter=\"top\"></script>
\t\t\t\t<g:plusone size=\"tall\"></g:plusone>
\t\t\t\t<script type=\"text/javascript\" src=\"https://apis.google.com/js/plusone.js\">
\t\t\t\t{lang: 'fr'}
\t\t\t\t</script>
\t\t\t\t<div id=\"fb-root\"></div>
\t\t\t\t<script>(function(d, s, id) {
\t\t\t\tvar js, fjs = d.getElementsByTagName(s)[0];
\t\t\t\tif (d.getElementById(id)) return;
\t\t\t\tjs = d.createElement(s); js.id = id;
\t\t\t\tjs.src = 'https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.1';
\t\t\t\tfjs.parentNode.insertBefore(js, fjs);
\t\t\t\t}(document, 'script', 'facebook-jssdk'));</script>
\t\t\t\t<div class=\"fb-like\" data-href=\"https://developers.facebook.com/docs/plugins/\" data-layout=\"button\" data-action=\"like\" data-size=\"small\" data-show-faces=\"true\" data-share=\"true\"></div>\t\t\t\t\t
\t\t\t\t<p class=\" title is-5 indieflower\">Copyright {{ \"now\"|date('Y') }} - <b>Geek-Street</b> (<a
\t\t\t\t\t\thref=\"http://audoinjean95300.com\" target=\"_blank\">jeannot95</a>)</p>
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
    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  {% endblock %}

  </body>
</html>", "@JeuCore/layout.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\CoreBundle\\Resources\\views\\layout.html.twig");
    }
}
