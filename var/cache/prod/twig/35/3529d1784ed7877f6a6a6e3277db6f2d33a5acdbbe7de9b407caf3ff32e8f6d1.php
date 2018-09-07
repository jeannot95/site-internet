<?php

/* JeuPagesBundle:Contact:contactEmail.html.twig */
class __TwigTemplate_743ca0a2613d0d82c8a3433cb7862da5f5c428d671e6645dbaef71c9cadc5d39 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Nouveau message de ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enquiry"] ?? null), "name", array()), "html", null, true);
        echo " le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d H:i"), "html", null, true);
        echo ".
<br />
Adresse pour la reponse: ";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enquiry"] ?? null), "email", array()), "html", null, true);
        echo "
<br />
Sujet du message: ";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enquiry"] ?? null), "subject", array()), "html", null, true);
        echo "
<br /><br />
";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["enquiry"] ?? null), "body", array()), "html", null, true);
        echo "
<br />
Envoyé depuis le site Jeux.";
    }

    public function getTemplateName()
    {
        return "JeuPagesBundle:Contact:contactEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  36 => 5,  31 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuPagesBundle:Contact:contactEmail.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\PagesBundle/Resources/views/Contact/contactEmail.html.twig");
    }
}
