<?php

/* JeuUserBundle::layout.html.twig */
class __TwigTemplate_44b064db4f6558be45122cde1ed7a0143b4a89fc9795f58b8cf75d4a1c334da0 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuCoreBundle::layout.html.twig", "JeuUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "
  ";
        // line 7
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 8
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 9
                echo "      <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
        ";
                // line 10
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 13
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
  ";
        // line 16
        echo "  ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "
";
    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 17
        echo "  ";
    }

    public function getTemplateName()
    {
        return "JeuUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 17,  80 => 16,  75 => 18,  72 => 16,  69 => 14,  63 => 13,  54 => 10,  49 => 9,  44 => 8,  39 => 7,  36 => 5,  33 => 4,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuUserBundle::layout.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\UserBundle/Resources/views/layout.html.twig");
    }
}
