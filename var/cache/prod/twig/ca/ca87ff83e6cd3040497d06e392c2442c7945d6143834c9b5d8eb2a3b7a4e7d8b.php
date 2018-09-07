<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_ccce132afbe7ae2ba6c006dd2b2034e2e2d965b441cecfbf35786bd9faa9c315 extends Twig_Template
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
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@Framework/Form/button_row.html.php", "C:\\wamp\\www\\jeux\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_row.html.php");
    }
}
