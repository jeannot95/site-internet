<?php

/* layoutAdmin.html.twig */
class __TwigTemplate_a67b9aa9c74c6eec2c5eca94769e2771b65c1fa7e5958528257aa1719ed9b6aa extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'motsCles' => array($this, 'block_motsCles'),
            'description' => array($this, 'block_description'),
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
    <meta charset=\"UTF-8\"/>
    <title>";
        // line 5
        $this->displayBlock('titre', $context, $blocks);
        echo "</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <meta name=\"keywords\" content=\"";
        // line 8
        $this->displayBlock('motsCles', $context, $blocks);
        echo "\"/>
    <meta name=\"description\" content=\"";
        // line 9
        $this->displayBlock('description', $context, $blocks);
        echo "\"/>
    ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"/>
</head>
<body id=\"bodyAdmin\">
<div class=\"container\">
    <header class=\"ind\" id=\"headAdmin\">
\t\t<div class=\"hautCote\">
\t\t\t<a href=\"";
        // line 20
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
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.jpg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"60px\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h1 class=\"bordeau titre\">JeuxDeSociété</h1>
\t\t\t\t\t<div class=\"hautCache\">
\t\t\t\t\t\t<a href=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.jpg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"60px\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<h2 class=\"bordeau\">VOUS ETES EN MODE ADMINISTRATION</h2>
\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t\t<div class=\"menu wid\">
\t\t\t\t<a href=\"";
        // line 39
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\">Boutique</a>
\t\t\t\t";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 41
            echo "\t\t\t\t\t<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Profil</a>
\t\t\t\t\t<a href=\"";
            // line 42
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a>
\t\t\t\t";
        }
        // line 44
        echo "\t\t\t</div>\t
\t\t</div>\t
\t\t<div class=\"hautCote\">
\t\t\t<a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.jpg"), "html", null, true);
        echo "\" alt=\"logo\"></a>
\t\t</div>
    </header>

    <div class=\"section padb\">

        <div class=\"sidebar\">
            ";
        // line 54
        $this->loadTemplate("::modulesUsed/navigationAdmin.html.twig", "layoutAdmin.html.twig", 54)->display($context);
        // line 55
        echo "        </div>
        <div id=\"content\" class=\"pad\">
            ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "        </div>
    </div>
\t<footer id=\"footerAdmin\">
\t\t\t\t<div class=\"footer centre\">\t\t
\t\t\t\t\t<h4>Informations</h4>
\t\t\t\t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("JeuPagesBundle:Pages:menu"));
        echo "
\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t<div class=\"footer centre\">\t\t
\t\t\t\t\t<p class=\" title is-5 indieflower\">Copyright ";
        // line 66
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " - <b>Geek-Street</b> (<a
\t\t\t\t\t\t\t\thref=\"http://audoinjean95300.com\" target=\"_blank\">jeannot95</a>)</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer centre\">\t\t
\t\t\t\t\t\t<h4>Nous contacter</h4>
\t\t\t\t\t\t<p>Tel : 06.20.00.00.00</p>
\t\t\t\t\t\t<p>Fax : 01.20.00.00.00</p>
\t\t\t\t</div>
\t</footer>
</div>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/jeupages/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "</body>
</html>";
    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        echo "Jeux - By Jeannot";
    }

    // line 8
    public function block_motsCles($context, array $blocks = array())
    {
    }

    // line 9
    public function block_description($context, array $blocks = array())
    {
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
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

    // line 57
    public function block_body($context, array $blocks = array())
    {
    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 77,  203 => 57,  197 => 12,  192 => 11,  189 => 10,  184 => 9,  179 => 8,  173 => 5,  168 => 78,  166 => 77,  162 => 76,  149 => 66,  143 => 63,  136 => 58,  134 => 57,  130 => 55,  128 => 54,  116 => 47,  111 => 44,  106 => 42,  101 => 41,  99 => 40,  95 => 39,  82 => 31,  73 => 27,  61 => 20,  51 => 14,  49 => 10,  45 => 9,  41 => 8,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "layoutAdmin.html.twig", "C:\\wamp\\www\\jeux\\app\\Resources\\views\\layoutAdmin.html.twig");
    }
}
