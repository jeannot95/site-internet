<?php

/* @JeuPages/Contact/contact.html.twig */
class __TwigTemplate_ff65a43066c65e7b54696106587bc020db87ebbd1060b3b95fde579fdf74e15f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuPages/Contact/contact.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JeuPages/Contact/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_titre($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "titre"));

        echo "Jeux - Contact";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo "Contact Page";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"container\">
        <div class=\"columns\">

            <div class=\"column is-9\">

                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
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
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->source); })()), 'errors');
        echo "
                                <div class=\"control is-horizontal\">
                                    <div class=\"control-label\">
                                        <label class=\"label indieflower\">Vos informations</label>
                                    </div>
                                    <div class=\"control is-grouped\">
                                        <p class=\"control is-expanded\">
                                            ";
        // line 39
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 39, $this->source); })()), "name", array()), 'widget');
        echo "
                                        </p>
                                        <p class=\"control is-expanded\">
                                            ";
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->source); })()), "email", array()), 'widget');
        echo "
                                        </p>
                                    </div>
                                </div>
                                <div class=\"control is-horizontal\">
                                    <div class=\"control-label\">
                                        <label class=\"label indieflower\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 48, $this->source); })()), "subject", array()), 'label');
        echo "</label>
                                    </div>
                                    <div class=\"control\">
                                        <div class=\"select is-fullwidth\">
                                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 52, $this->source); })()), "subject", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control is-horizontal\">
                                    <div class=\"control-label\">
                                        <label class=\"label indieflower\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 58, $this->source); })()), "body", array()), 'label');
        echo "</label>
                                    </div>
                                    <div class=\"control\">
                                        ";
        // line 61
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 61, $this->source); })()), "body", array()), 'widget');
        echo "
                                    </div>
                                </div>
                                ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 64, $this->source); })()), 'rest');
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  187 => 64,  181 => 61,  175 => 58,  166 => 52,  159 => 48,  150 => 42,  144 => 39,  134 => 32,  130 => 31,  114 => 17,  105 => 14,  102 => 13,  98 => 12,  91 => 7,  82 => 6,  64 => 4,  46 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"JeuCoreBundle::layout.html.twig\" %}

{% block titre %}Jeux - Contact{% endblock %}
{% block description %}Contact Page{% endblock %}

{% block body %}
    <div class=\"container\">
        <div class=\"columns\">

            <div class=\"column is-9\">

                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"notification is-success\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}

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
                            <form action=\"{{ path('contact') }}\" method=\"post\" class=\"blogger\">
                                {{ form_errors(form) }}
                                <div class=\"control is-horizontal\">
                                    <div class=\"control-label\">
                                        <label class=\"label indieflower\">Vos informations</label>
                                    </div>
                                    <div class=\"control is-grouped\">
                                        <p class=\"control is-expanded\">
                                            {{ form_widget(form.name) }}
                                        </p>
                                        <p class=\"control is-expanded\">
                                            {{ form_widget(form.email) }}
                                        </p>
                                    </div>
                                </div>
                                <div class=\"control is-horizontal\">
                                    <div class=\"control-label\">
                                        <label class=\"label indieflower\">{{ form_label(form.subject) }}</label>
                                    </div>
                                    <div class=\"control\">
                                        <div class=\"select is-fullwidth\">
                                            {{ form_widget(form.subject) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"control is-horizontal\">
                                    <div class=\"control-label\">
                                        <label class=\"label indieflower\">{{ form_label(form.body) }}</label>
                                    </div>
                                    <div class=\"control\">
                                        {{ form_widget(form.body) }}
                                    </div>
                                </div>
                                {{ form_rest(form) }}
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
{% endblock %}", "@JeuPages/Contact/contact.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\PagesBundle\\Resources\\views\\Contact\\contact.html.twig");
    }
}
