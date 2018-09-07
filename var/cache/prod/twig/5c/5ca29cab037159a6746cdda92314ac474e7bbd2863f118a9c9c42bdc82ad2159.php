<?php

/* @JeuCore/layoutAdmin.html.twig */
class __TwigTemplate_a7b35e71c471eedae985aff20a27078e92f74ebdaca5b74dbcebc7737ac836c0 extends Twig_Template
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
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "get", array(0 => "_route"), "method") == "jeu_article_recherche")) {
            // line 36
            echo "\t\t\t";
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_start', array("attr" => array("class" => "form-horizontal", "id" => "form", "method" => "post")));
            echo "
\t\t\t<div class=\"span3\">
              ";
            // line 38
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categories", array()), 'label', array("label" => "Categories"));
            echo "
              ";
            // line 39
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categories", array()), 'widget', array("attr" => array("class" => "categoriesclass span3")));
            echo "
              ";
            // line 40
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "categories", array()), 'errors');
            echo "
            </div>
\t\t\t<div class=\"span3\">
              ";
            // line 43
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "publicJeu", array()), 'label', array("label" => "Public concerné"));
            echo "
              ";
            // line 44
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "publicJeu", array()), 'widget', array("attr" => array("class" => "publicJeuclass span3", "name" => "publicJeu")));
            echo "
              ";
            // line 45
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "publicJeu", array()), 'errors');
            echo "
            </div>
\t\t\t";
            // line 47
            echo             $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? null), 'form_end');
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
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
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "Jeu de Société";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        // line 72
        echo "        ";
    }

    // line 83
    public function block_javascripts($context, array $blocks = array())
    {
        // line 84
        echo "    ";
        // line 85
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
    }

    public function getTemplateName()
    {
        return "@JeuCore/layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 85,  231 => 84,  228 => 83,  224 => 72,  221 => 71,  215 => 12,  210 => 11,  208 => 10,  205 => 9,  199 => 7,  193 => 88,  191 => 83,  184 => 79,  176 => 73,  174 => 71,  170 => 69,  167 => 67,  162 => 65,  157 => 64,  152 => 62,  148 => 61,  144 => 60,  139 => 59,  135 => 57,  133 => 56,  128 => 55,  126 => 54,  121 => 51,  115 => 49,  110 => 47,  105 => 45,  101 => 44,  97 => 43,  91 => 40,  87 => 39,  83 => 38,  77 => 36,  75 => 35,  71 => 34,  65 => 30,  58 => 27,  56 => 26,  42 => 14,  40 => 9,  35 => 7,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuCore/layoutAdmin.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\CoreBundle\\Resources\\views\\layoutAdmin.html.twig");
    }
}
