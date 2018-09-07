<?php

/* JeuArticleBundle:Article:test.html.twig */
class __TwigTemplate_bcc44e8794156842175c9b4c52179d87200e58ca8b7eefb034e008eaea1fa9d3 extends Twig_Template
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
        echo "<!doctype html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<title>Document</title>
</head>
<body>
\tça marche super
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Article:test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "JeuArticleBundle:Article:test.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Article/test.html.twig");
    }
}
