<?php

/* JeuUserBundle:Administration/Utilisateurs:adresses.html.twig */
class __TwigTemplate_465fc7be88c7267cf6dfc191906654bb8e08768d1253f817d087fda17b18615f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::layoutAdmin.html.twig", "JeuUserBundle:Administration/Utilisateurs:adresses.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layoutAdmin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <div>
\t\t<h2 class=\"bordeau ind centre\">Adresses de l'utilisateur</h2>
    </div>

    <div>
\t\t";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "adresses", array()));
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
            // line 10
            echo "\t\t\t<div>
\t\t\t\t<div>
\t\t\t\t\t<h4>Adresse ";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", array()), "html", null, true);
            echo " :</h4>
\t\t\t\t\t";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "prenom", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "nom", array()), "html", null, true);
            echo "
\t\t\t\t\t<br>";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "adresse", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "cp", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "ville", array()), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "pays", array()), "html", null, true);
            echo "
\t\t\t\t\t<br><br>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
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
        // line 19
        echo "\t\t<p>
\t\t\t<a href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("adminUtilisateurs_index");
        echo "\" class=\"bouton1\">Retour à la liste</a>
\t\t</p>\t\t
    </div>

";
    }

    public function getTemplateName()
    {
        return "JeuUserBundle:Administration/Utilisateurs:adresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 20,  98 => 19,  73 => 14,  67 => 13,  63 => 12,  59 => 10,  42 => 9,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuUserBundle:Administration/Utilisateurs:adresses.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle/Resources/views/Administration/Utilisateurs/adresses.html.twig");
    }
}
