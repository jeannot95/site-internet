<?php

/* @JeuCore/layout2.html.twig */
class __TwigTemplate_bbb87a2c9cef6cd469f5f69caea934e9adc48b8c5a4b0fc478a4e18c1ec2a939 extends Twig_Template
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
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "user", array()), "username", array()), "html", null, true);
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
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "Jeu de Société";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "      ";
        // line 12
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        // line 60
        echo "        ";
    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        // line 73
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
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
        return array (  185 => 73,  183 => 72,  180 => 71,  176 => 60,  173 => 59,  168 => 12,  166 => 11,  163 => 10,  157 => 8,  151 => 76,  149 => 71,  142 => 67,  134 => 61,  132 => 59,  128 => 57,  125 => 55,  120 => 53,  115 => 52,  110 => 50,  105 => 49,  101 => 47,  99 => 46,  94 => 45,  92 => 44,  83 => 37,  79 => 35,  73 => 31,  62 => 28,  60 => 27,  43 => 14,  41 => 10,  36 => 8,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuCore/layout2.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\CoreBundle\\Resources\\views\\layout2.html.twig");
    }
}
