<?php

/* @JeuPages/Contact/contact.html.twig */
class __TwigTemplate_d36c41d8ee08f4ee0d136fa678efdedd7238c61a2f495e3f1cab402d43803b8e extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("JeuCoreBundle::layout.html.twig", "@JeuPages/Contact/contact.html.twig", 1);
        $this->blocks = array(
            'titre' => array($this, 'block_titre'),
            'description' => array($this, 'block_description'),
            'body' => array($this, 'block_body'),
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

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        echo "Jeux - Contact";
    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        echo "Contact Page";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <div class=\"container\">
        <div class=\"columns\">

            <div class=\"column is-9\">

                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "                    <div class=\"notification is-success\">
                        ";
            // line 14
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "
                <div class=\"tile is-ancestor\">
                    <div class=\"tile is-parent is-12\">
                        <article class=\"tile is-child box is-12\">
                            <h2 class=\"title is-3 indieflower\">Contacter l'équipe Jeux</h2>
                        </article>
                    </div>
                </div>

                <div class=\"tile is-ancestor\">
                    <div class=\"tile is-parent is-12\">
                        <article class=\"tile is-child box is-12\">
                            <p>Vous souhaitez obtenir des informations ? Vous desirez nous laisser un message ?<br />Remplissez ce formulaire afin d'entrer en contact avec notre équipe.</p>
                            <br /><br />
                            <form action=\"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" method=\"post\" class=\"blogger\">
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'errors');
        echo "
                                <div class=\"control is-horizontal\">
                                    <div class=\"control-label\">
                                        <label class=\"label indieflower\">Vos informations</label>
                                    </div>
                                    <div class=\"control is-grouped\">
                                        <p class=\"control is-expanded\">
                                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", array()), 'widget');
        echo "
                                        </p>
                                        <p class=\"control is-expanded\">
                                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", array()), 'widget');
        echo "
                                        </p>
                                    </div>
                                </div>
                                <div class=\"control is-horizontal\">
                                    <div class=\"control-label\">
                                        <label class=\"label indieflower\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subject", array()), 'label');
        echo "</label>
                                    </div>
                                    <div class=\"control\">
                                        <div class=\"select is-fullwidth\">
                                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "subject", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control is-horizontal\">
                                    <div class=\"control-label\">
                                        <label class=\"label indieflower\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "body", array()), 'label');
        echo "</label>
                                    </div>
                                    <div class=\"control\">
                                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "body", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
                                <div class=\"has-text-right\">
                                    <button class=\"button button-vert\" type=\"submit\">Envoyer votre message</button>
                                </div>
                            </form>
                        </article>
                    </div>
                </div>

                <div class=\"tile is-ancestor\">
                    <div class=\"tile is-parent is-12\">
                        <article class=\"tile is-child box is-12\">
                            <h2 class=\"title is-3 indieflower\">Nous situer</h2>
                        </article>
                    </div>
                </div>

                <div class=\"tile is-ancestor\">
                    <div class=\"tile is-parent is-12\">
                        <article class=\"tile is-child box is-12\">

                            <iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2863.5600542958755!2d4.090957915513384!3d44.13369587910777!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b4425ef4072d39%3A0x9eef73a6f0c28b9d!2s49+Avenue+Gaston+Ribot%2C+30100+Al%C3%A8s!5e0!3m2!1sfr!2sfr!4v1482511649943\" width=\"100%\" height=\"450\" frameborder=\"0\" style=\"border:1px solid #006A43; border-radius: 5px\" allowfullscreen></iframe>

                        </article>
                    </div>
                </div>

            </div>

        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@JeuPages/Contact/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 64,  139 => 61,  133 => 58,  124 => 52,  117 => 48,  108 => 42,  102 => 39,  92 => 32,  88 => 31,  72 => 17,  63 => 14,  60 => 13,  56 => 12,  49 => 7,  46 => 6,  40 => 4,  34 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@JeuPages/Contact/contact.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\PagesBundle\\Resources\\views\\Contact\\contact.html.twig");
    }
}
