<?php

/* ::layoutAdmin.html.twig */
class __TwigTemplate_c2465f1f524f03e0a8b85543201dd22bdb4df0cb146d6104bfd15ece3a9062c2 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layoutAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layoutAdmin.html.twig"));

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
        // line 15
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\"/>
</head>
<body id=\"bodyAdmin\">
<div class=\"container\">
    <header class=\"ind\" id=\"headAdmin\">
\t\t<div class=\"hautCote\">
\t\t\t<a href=\"";
        // line 21
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
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.jpg"), "html", null, true);
        echo "\" alt=\"logo\" width=\"60px\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<h1 class=\"bordeau titre\">JeuxDeSociété</h1>
\t\t\t\t\t<div class=\"hautCache\">
\t\t\t\t\t\t<a href=\"";
        // line 32
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
\t\t\t<div class=\"menu wid\" id=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\">Boutique</a></li>
\t\t\t\t";
        // line 42
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 43
            echo "\t\t\t\t\t<li><a class=\"menuprofil\">Mon compte</a>
\t\t\t\t\t\t<ul class=\"sousmenu\">
\t\t\t\t\t\t\t<li><a href=\"";
            // line 45
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Profil</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 46
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit");
            echo "\">Editer mes informations</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 47
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
            echo "\">Changer mon mot de passe</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 48
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_user_factures");
            echo "\">Mes factures</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
            // line 49
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t<li>
\t\t\t\t";
        }
        // line 53
        echo "\t\t\t\t</ul>
\t\t\t</div>\t
\t\t</div>\t
\t\t<div class=\"hautCote\">
\t\t\t<a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo2.jpg"), "html", null, true);
        echo "\" alt=\"logo\"></a>
\t\t</div>
    </header>

    <div class=\"section padb\">

        <div class=\"sidebar\">
            ";
        // line 64
        $this->loadTemplate("::modulesUsed/navigationAdmin.html.twig", "::layoutAdmin.html.twig", 64)->display($context);
        // line 65
        echo "        </div>
        <div id=\"content\" class=\"pad\">
            ";
        // line 67
        $this->displayBlock('body', $context, $blocks);
        // line 68
        echo "        </div>
    </div>
\t<footer id=\"footerAdmin\">
\t\t\t\t<div class=\"footer centre\">\t\t
\t\t\t\t\t<h4>Informations</h4>
\t\t\t\t\t";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("JeuPagesBundle:Pages:menu"));
        echo "
\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t<div class=\"footer centre\">\t\t
\t\t\t\t\t<p class=\" title is-5 indieflower\">Copyright ";
        // line 76
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
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/jeupages/ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>
";
        // line 87
        $this->displayBlock('javascripts', $context, $blocks);
        // line 101
        echo "</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_titre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Jeux - By Jeannot";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_motsCles($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motsCles"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_description($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        
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
        echo "\t  <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/jeux.css"), "html", null, true);
        echo "\">
\t  <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/stars.css"), "html", null, true);
        echo "\">
\t  <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/boutons.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 67
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 88
        echo "\t<script>
\t\twindow.onscroll = function() {myFunction()};
\t\tvar menu = document.getElementById(\"menu\");
\t\tvar sticky = menu.offsetTop;
\t\tfunction myFunction() {
\t\t  if (window.pageYOffset > sticky) {
\t\t\tmenu.classList.add(\"sticky2\");
\t\t  } else {
\t\t\tmenu.classList.remove(\"sticky2\");
\t\t  }
\t\t}
\t</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::layoutAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  312 => 88,  303 => 87,  286 => 67,  274 => 13,  270 => 12,  265 => 11,  256 => 10,  239 => 9,  222 => 8,  204 => 5,  193 => 101,  191 => 87,  187 => 86,  174 => 76,  168 => 73,  161 => 68,  159 => 67,  155 => 65,  153 => 64,  141 => 57,  135 => 53,  128 => 49,  124 => 48,  120 => 47,  116 => 46,  112 => 45,  108 => 43,  106 => 42,  102 => 41,  88 => 32,  79 => 28,  67 => 21,  57 => 15,  55 => 10,  51 => 9,  47 => 8,  41 => 5,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\"/>
    <title>{% block titre %}Jeux - By Jeannot{% endblock %}</title>
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\"/>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\"/>
    <meta name=\"keywords\" content=\"{% block motsCles %}{% endblock %}\"/>
    <meta name=\"description\" content=\"{% block description %}{% endblock %}\"/>
    {% block stylesheets %}
\t  <link rel=\"stylesheet\" href=\"{{ asset('css/jeux.css') }}\">
\t  <link rel=\"stylesheet\" href=\"{{ asset('css/stars.css') }}\">
\t  <link rel=\"stylesheet\" href=\"{{ asset('css/boutons.css') }}\">
    {% endblock %}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('img/logo.png') }}\"/>
</head>
<body id=\"bodyAdmin\">
<div class=\"container\">
    <header class=\"ind\" id=\"headAdmin\">
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
\t\t\t\t\t<h1 class=\"bordeau titre\">JeuxDeSociété</h1>
\t\t\t\t\t<div class=\"hautCache\">
\t\t\t\t\t\t<a href=\"{{ path('jeu_article_homepage') }}\"><img src=\"{{ asset('img/logo2.jpg') }}\" alt=\"logo\" width=\"60px\"></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div>
\t\t\t\t\t<h2 class=\"bordeau\">VOUS ETES EN MODE ADMINISTRATION</h2>
\t\t\t\t</div>\t\t\t
\t\t\t</div>
\t\t\t<div class=\"menu wid\" id=\"menu\">
\t\t\t\t<ul>
\t\t\t\t\t<li><a href=\"{{ path('jeu_article_homepage') }}\">Boutique</a></li>
\t\t\t\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t\t\t\t\t<li><a class=\"menuprofil\">Mon compte</a>
\t\t\t\t\t\t<ul class=\"sousmenu\">
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_profile_show') }}\">Profil</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_profile_edit') }}\">Editer mes informations</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_change_password') }}\">Changer mon mot de passe</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('jeu_user_factures') }}\">Mes factures</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{ path('fos_user_security_logout') }}\">Déconnexion</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t<li>
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
            {% include '::modulesUsed/navigationAdmin.html.twig' %}
        </div>
        <div id=\"content\" class=\"pad\">
            {% block body %}{% endblock %}
        </div>
    </div>
\t<footer id=\"footerAdmin\">
\t\t\t\t<div class=\"footer centre\">\t\t
\t\t\t\t\t<h4>Informations</h4>
\t\t\t\t\t{{ render(controller('JeuPagesBundle:Pages:menu')) }}
\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t<div class=\"footer centre\">\t\t
\t\t\t\t\t<p class=\" title is-5 indieflower\">Copyright {{ \"now\"|date('Y') }} - <b>Geek-Street</b> (<a
\t\t\t\t\t\t\t\thref=\"http://audoinjean95300.com\" target=\"_blank\">jeannot95</a>)</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer centre\">\t\t
\t\t\t\t\t\t<h4>Nous contacter</h4>
\t\t\t\t\t\t<p>Tel : 06.20.00.00.00</p>
\t\t\t\t\t\t<p>Fax : 01.20.00.00.00</p>
\t\t\t\t</div>
\t</footer>
</div>
<script src=\"{{ asset('bundles/jeupages/ckeditor/ckeditor.js') }}\"></script>
{% block javascripts %}
\t<script>
\t\twindow.onscroll = function() {myFunction()};
\t\tvar menu = document.getElementById(\"menu\");
\t\tvar sticky = menu.offsetTop;
\t\tfunction myFunction() {
\t\t  if (window.pageYOffset > sticky) {
\t\t\tmenu.classList.add(\"sticky2\");
\t\t  } else {
\t\t\tmenu.classList.remove(\"sticky2\");
\t\t  }
\t\t}
\t</script>
{% endblock %}
</body>
</html>", "::layoutAdmin.html.twig", "C:\\wamp\\www\\jeux\\app/Resources\\views/layoutAdmin.html.twig");
    }
}
