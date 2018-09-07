<?php

/* @JeuArticle/Article/article.html.twig */
class __TwigTemplate_88ec1cae2e21247739d744bd934319b2a628a7851a727336620264410fcd6721 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout.html.twig", "@JeuArticle/Article/article.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'jeu_article_body' => array($this, 'block_jeu_article_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuArticleBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_jeu_article_body($context, array $blocks = array())
    {
        // line 8
        $context["chemin"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "query", array()), "get", array(0 => "recherche"), "method");
        // line 9
        $context["chemin2"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "uri", array());
        // line 10
        $context["chemin3"] = twig_slice($this->env, ($context["chemin2"] ?? null), 52, 150);
        // line 11
        $context["currentPath"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method"), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 12
($context["app"] ?? null), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"));
        // line 17
        echo "  <h2 class=\"ind\">Liste des jeux</h2>
\tNombre de résultats pour <strong>";
        // line 18
        echo twig_escape_filter($this->env, ($context["resultat"] ?? null), "html", null, true);
        echo "</strong> : ";
        echo twig_escape_filter($this->env, twig_length_filter($this->env, ($context["articles"] ?? null)), "html", null, true);
        echo " 
  <ul>
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["articles"] ?? null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 21
            echo "      <li>
        <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_view", array("id" => twig_get_attribute($this->env, $this->source, $context["article"], "id", array()))), "html", null, true);
            echo "\">
          <span class=\"ind\">";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "titre", array()), "html", null, true);
            echo "</span>
        </a>, 
        <em>date de sortie ";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "dateDeSortie", array()), "d/m/Y"), "html", null, true);
            echo "</em>
\t\t<br>
\t\t<span class=\"ind2\">Catégories </span>: ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["article"], "categories", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "name", array()), "html", null, true);
                echo ",";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t\t<br>
\t\t<span class=\"ind2\">Public concerné </span>: ";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["article"], "publicJeu", array()), "name", array()), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 32
            echo "      <li>Pas (encore !) d'articles</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </ul>
  ";
        // line 43
        echo " 
";
    }

    public function getTemplateName()
    {
        return "@JeuArticle/Article/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 43,  115 => 34,  108 => 32,  100 => 29,  97 => 28,  87 => 27,  82 => 25,  77 => 23,  73 => 22,  70 => 21,  65 => 20,  58 => 18,  55 => 17,  53 => 12,  52 => 11,  50 => 10,  48 => 9,  46 => 8,  43 => 7,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuArticle/Article/article.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle\\Resources\\views\\Article\\article.html.twig");
    }
}
