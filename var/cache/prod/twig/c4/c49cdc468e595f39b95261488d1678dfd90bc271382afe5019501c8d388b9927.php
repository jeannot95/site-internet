<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_a7bd53f3a914f75c52be47c9e3438e3a7d89ba7a55d08a33a88469d45a070e41 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.email.subject", array("%username%" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array())), "FOSUserBundle");
    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        // line 10
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("registration.email.message", array("%username%" => twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? null)), "FOSUserBundle");
        echo "
";
    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  53 => 13,  47 => 10,  44 => 8,  40 => 4,  37 => 2,  33 => 13,  31 => 8,  28 => 7,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Registration:email.txt.twig", "C:\\wamp\\www\\jeux\\vendor\\friendsofsymfony\\user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
