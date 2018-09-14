<?php

/* JeuArticleBundle:Article:recherche.html.twig */
class __TwigTemplate_013d406108ed47fdda9c1dad422220ddbbb7d8ce3c0b5203b7717c3ae6307f5c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 2
        $this->parent = $this->loadTemplate("JeuArticleBundle::layout.html.twig", "JeuArticleBundle:Article:recherche.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'jeu_article_body' => array($this, 'block_jeu_article_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "JeuArticleBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Article:recherche.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JeuArticleBundle:Article:recherche.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 5
        echo "  Recherche - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_jeu_article_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jeu_article_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jeu_article_body"));

        // line 11
        echo "
  <h2 class=\"ind\">Liste des jeux</h2>
\t<div id=\"selection\">
\t</div>\t
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script
\t\tsrc=\"https://code.jquery.com/jquery-3.3.1.min.js\"
\t\tintegrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
\t\tcrossorigin=\"anonymous\">
\t</script>
\t<script>
\t\t\$(function()
\t\t{\t
\t\t\t\t
\t\t\t\$(\"#form\").change(function(event){
\t\t\t\tconsole.log('ok c\\'est bon');
\t\t\t\tevent.preventDefault();
\t\t\t\tinfo = [];
\t\t\t\tvalue1=[];
\t\t\t\tvar pub = \$('#form_publicJeu').val();
\t\t\t\t
\t\t\t\t\$(\"input[name='form[categories][]']:checked\").each(function(ind,val){
\t\t\t\t\t//console.log(\$(this).val());
\t\t\t\t\t//console.log(val);
\t\t\t\t\t\tinfo.push(\$(this).val());\t\t\t\t\t\t\t\t\t\t
\t\t\t\t});;
\t\t\t\t//console.log(value1);
\t\t\t\t//console.log(info);
\t\t\t\t//console.log(pub);
\t\t\t\t//console.log(\$(\"input[name='form[categories][]']\").val());
\t\t\t\t\t\t\t
\t\t\t\tvar \$this = \$(this);
\t\t\t\t//var data = {};
\t\t\t\t\$.ajax({
\t\t\t\t\turl: '";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_selection");
        echo "',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',\t\t\t\t\t
\t\t\t\t\tdata: { idpub: pub, idcat: info },\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t//processData: false,
\t\t\t\t\t//contentType: false,
\t\t\t\t\tsuccess: function(response){
\t\t\t\t\t\tconsole.log('ça marche');
\t\t\t\t\t\tconsole.log(response);
\t\t\t\t\t\t
\t\t\t\t\t\tif(response != ''){
\t\t\t\t\t\tid1 =[];
\t\t\t\t\t\tid2=[];
\t\t\t\t\t\tconsole.log(response[0].length);
\t\t\t\t\t\tfor (i = 0; i< response[0].length;i++){
\t\t\t\t\t\t\tconsole.log(response[0][i].id);
\t\t\t\t\t\t\tid1[i] = response[0][i].id.toString();\t\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t\turl =[];
\t\t\t\t\t\turl = '<a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_view", array("id" => "article_id"));
        echo " \">';
\t\t\t\t\t\turl = url.replace(\"article_id\", id1[i]);
\t\t\t\t\t\t\t
\t\t\t\t\t\tresult = [];\t\t\t\t\t\t
\t\t\t\t\t\t//console.log(result);
\t\t\t\t\t\tfor (i = 0; i< response[0].length;i++){
\t\t\t\t\t\t\t//console.log(response[i].image);
\t\t\t\t\t\t\tid1[i] = response[0][i].id.toString();\t
\t\t\t\t\t\t\turl =[];
\t\t\t\t\t\t\turl = '<a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("jeu_article_view", array("id" => "article_id"));
        echo " \">';
\t\t\t\t\t\t\turl = url.replace(\"article_id\", id1[i]);
\t\t\t\t\t\t\tresult[i] = '<div class=\"flex3 mar\"><div><img src=\"/jeux/web/uploads/img/'+ response[0][i].image.id + '.jpeg\" alt=\" '+ response[0][i].image.alt +' \" width=\"160\" height=\"160\"></div><div class=\"pad\"><span class=\"ind bleu size2\">' + url + response[0][i].titre + '</a></span>, <em>sorti le '+ response[0][i].dateDeSortie.date.substring(0,10) +'</em> ';
\t\t\t\t\t\t\tvar note = \"<br>Pas encore de note ! \";
\t\t\t\t\t\t\tfor(j = 0; j< response[1].length;j++){
\t\t\t\t\t\t\t\t//console.log(response[1][j]);
\t\t\t\t\t\t\t\tif (response[0][i].titre == response[1][j].titre ){
\t\t\t\t\t\t\t\t  note = \"\" ;
\t\t\t\t\t\t\t\tresult[i] +=  ' <div class=\"star-ratings-css\" title=\" ' + response[1][j].moyenne + ' /5\" > ';
\t\t\t\t\t\t\t\t  result[i] += ' <div class=\"star-ratings-css-top\" style=\"width: ' + response[1][j].moyenne*20 + '%\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div> ';
\t\t\t\t\t\t\t\t  result[i] += '<div class=\"star-ratings-css-bottom\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>';
\t\t\t\t\t\t\t\tresult[i] += '</div>' ;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t//result[i] += ' Moyenne = ' + response[1][j].moyenne + '/5 ' ;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tresult[i] += note ;
\t\t\t\t\t\t\tresult[i] += '<br><span title=\"de '+ response[0][i].nbJoueurMin +' à '+ response[0][i].nbJoueurMax +' joueurs\"><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/people.png"), "html", null, true);
        echo "\" width=\"20\" class=\"pad\"> ' + response[0][i].nbJoueurMin + ' - ' + response[0][i].nbJoueurMax + '</span>' +
\t\t\t\t\t\t\t' <span title=\"de '+ response[0][i].ageMin +' à '+ response[0][i].ageMax +' ans\"><img src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/age3.png"), "html", null, true);
        echo "\" width=\"20\" class=\"pad\"> ' + response[0][i].ageMin + '-' + response[0][i].ageMax + '</span>' +
\t\t\t\t\t\t\t' <span title=\"durée moyenne d\\'une partie : ' + response[0][i].duree + ' min\"><img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/minutes.png"), "html", null, true);
        echo "\" width=\"20\" class=\"pad\"> ' + response[0][i].duree + ' min ' + '</span>' +
\t\t\t\t\t\t\t'<br> <span class=\"ind orange\">Catégorie</span> : ' + response[0][i].categories[0].name + 
\t\t\t\t\t\t\t'<br> <span class=\"ind orange\">Public concerné </span>: ' + response[0][i].publicJeu.name + 
\t\t\t\t\t\t\t'<br> <span class=\"ind orange\"> ' + response[0][i].prix + ' € TTC</span> ' + \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t'</div></div><hr>' ;

\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#selection').html(result);
\t\t\t\t\t\t} else { \$('#selection').html(' Aucun résultat ne correspond à votre recherche') }
\t\t\t\t\t},
\t\t\t\t\terror: function(response){
\t\t\t\t\t\t\$('#selection').html(' Aucun résultat ne correspond à votre recherche');
\t\t\t\t\t}
\t\t\t\t});\t\t\t\t
\t\t\t});

\t\t});\t
\t</script>\t\t
  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "JeuArticleBundle:Article:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 94,  214 => 93,  210 => 92,  191 => 76,  179 => 67,  157 => 48,  123 => 18,  114 => 17,  100 => 11,  91 => 10,  78 => 8,  69 => 7,  56 => 5,  47 => 4,  15 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
{% extends \"JeuArticleBundle::layout.html.twig\" %}

{% block title %}
  Recherche - {{ parent() }}
{% endblock %}
    {% block stylesheets %}
\t{{ parent() }}
    {% endblock %}
{% block jeu_article_body %}

  <h2 class=\"ind\">Liste des jeux</h2>
\t<div id=\"selection\">
\t</div>\t
{% endblock %}

  {% block javascripts %}
\t{{ parent() }}
\t<script
\t\tsrc=\"https://code.jquery.com/jquery-3.3.1.min.js\"
\t\tintegrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\"
\t\tcrossorigin=\"anonymous\">
\t</script>
\t<script>
\t\t\$(function()
\t\t{\t
\t\t\t\t
\t\t\t\$(\"#form\").change(function(event){
\t\t\t\tconsole.log('ok c\\'est bon');
\t\t\t\tevent.preventDefault();
\t\t\t\tinfo = [];
\t\t\t\tvalue1=[];
\t\t\t\tvar pub = \$('#form_publicJeu').val();
\t\t\t\t
\t\t\t\t\$(\"input[name='form[categories][]']:checked\").each(function(ind,val){
\t\t\t\t\t//console.log(\$(this).val());
\t\t\t\t\t//console.log(val);
\t\t\t\t\t\tinfo.push(\$(this).val());\t\t\t\t\t\t\t\t\t\t
\t\t\t\t});;
\t\t\t\t//console.log(value1);
\t\t\t\t//console.log(info);
\t\t\t\t//console.log(pub);
\t\t\t\t//console.log(\$(\"input[name='form[categories][]']\").val());
\t\t\t\t\t\t\t
\t\t\t\tvar \$this = \$(this);
\t\t\t\t//var data = {};
\t\t\t\t\$.ajax({
\t\t\t\t\turl: '{{ path('jeu_article_selection') }}',
\t\t\t\t\ttype: 'post',
\t\t\t\t\tdataType: 'json',\t\t\t\t\t
\t\t\t\t\tdata: { idpub: pub, idcat: info },\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t//processData: false,
\t\t\t\t\t//contentType: false,
\t\t\t\t\tsuccess: function(response){
\t\t\t\t\t\tconsole.log('ça marche');
\t\t\t\t\t\tconsole.log(response);
\t\t\t\t\t\t
\t\t\t\t\t\tif(response != ''){
\t\t\t\t\t\tid1 =[];
\t\t\t\t\t\tid2=[];
\t\t\t\t\t\tconsole.log(response[0].length);
\t\t\t\t\t\tfor (i = 0; i< response[0].length;i++){
\t\t\t\t\t\t\tconsole.log(response[0][i].id);
\t\t\t\t\t\t\tid1[i] = response[0][i].id.toString();\t\t\t\t\t\t\t
\t\t\t\t\t\t}
\t\t\t\t\t\turl =[];
\t\t\t\t\t\turl = '<a href=\"{{ path('jeu_article_view', {'id': 'article_id' }) }} \">';
\t\t\t\t\t\turl = url.replace(\"article_id\", id1[i]);
\t\t\t\t\t\t\t
\t\t\t\t\t\tresult = [];\t\t\t\t\t\t
\t\t\t\t\t\t//console.log(result);
\t\t\t\t\t\tfor (i = 0; i< response[0].length;i++){
\t\t\t\t\t\t\t//console.log(response[i].image);
\t\t\t\t\t\t\tid1[i] = response[0][i].id.toString();\t
\t\t\t\t\t\t\turl =[];
\t\t\t\t\t\t\turl = '<a href=\"{{ path('jeu_article_view', {'id': 'article_id' }) }} \">';
\t\t\t\t\t\t\turl = url.replace(\"article_id\", id1[i]);
\t\t\t\t\t\t\tresult[i] = '<div class=\"flex3 mar\"><div><img src=\"/jeux/web/uploads/img/'+ response[0][i].image.id + '.jpeg\" alt=\" '+ response[0][i].image.alt +' \" width=\"160\" height=\"160\"></div><div class=\"pad\"><span class=\"ind bleu size2\">' + url + response[0][i].titre + '</a></span>, <em>sorti le '+ response[0][i].dateDeSortie.date.substring(0,10) +'</em> ';
\t\t\t\t\t\t\tvar note = \"<br>Pas encore de note ! \";
\t\t\t\t\t\t\tfor(j = 0; j< response[1].length;j++){
\t\t\t\t\t\t\t\t//console.log(response[1][j]);
\t\t\t\t\t\t\t\tif (response[0][i].titre == response[1][j].titre ){
\t\t\t\t\t\t\t\t  note = \"\" ;
\t\t\t\t\t\t\t\tresult[i] +=  ' <div class=\"star-ratings-css\" title=\" ' + response[1][j].moyenne + ' /5\" > ';
\t\t\t\t\t\t\t\t  result[i] += ' <div class=\"star-ratings-css-top\" style=\"width: ' + response[1][j].moyenne*20 + '%\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div> ';
\t\t\t\t\t\t\t\t  result[i] += '<div class=\"star-ratings-css-bottom\"><span>★</span><span>★</span><span>★</span><span>★</span><span>★</span></div>';
\t\t\t\t\t\t\t\tresult[i] += '</div>' ;
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t\t//result[i] += ' Moyenne = ' + response[1][j].moyenne + '/5 ' ;
\t\t\t\t\t\t\t}
\t\t\t\t\t\t\tresult[i] += note ;
\t\t\t\t\t\t\tresult[i] += '<br><span title=\"de '+ response[0][i].nbJoueurMin +' à '+ response[0][i].nbJoueurMax +' joueurs\"><img src=\"{{ asset('img/people.png')}}\" width=\"20\" class=\"pad\"> ' + response[0][i].nbJoueurMin + ' - ' + response[0][i].nbJoueurMax + '</span>' +
\t\t\t\t\t\t\t' <span title=\"de '+ response[0][i].ageMin +' à '+ response[0][i].ageMax +' ans\"><img src=\"{{ asset('img/age3.png')}}\" width=\"20\" class=\"pad\"> ' + response[0][i].ageMin + '-' + response[0][i].ageMax + '</span>' +
\t\t\t\t\t\t\t' <span title=\"durée moyenne d\\'une partie : ' + response[0][i].duree + ' min\"><img src=\"{{ asset('img/minutes.png')}}\" width=\"20\" class=\"pad\"> ' + response[0][i].duree + ' min ' + '</span>' +
\t\t\t\t\t\t\t'<br> <span class=\"ind orange\">Catégorie</span> : ' + response[0][i].categories[0].name + 
\t\t\t\t\t\t\t'<br> <span class=\"ind orange\">Public concerné </span>: ' + response[0][i].publicJeu.name + 
\t\t\t\t\t\t\t'<br> <span class=\"ind orange\"> ' + response[0][i].prix + ' € TTC</span> ' + \t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t'</div></div><hr>' ;

\t\t\t\t\t\t}
\t\t\t\t\t\t
\t\t\t\t\t\t\$('#selection').html(result);
\t\t\t\t\t\t} else { \$('#selection').html(' Aucun résultat ne correspond à votre recherche') }
\t\t\t\t\t},
\t\t\t\t\terror: function(response){
\t\t\t\t\t\t\$('#selection').html(' Aucun résultat ne correspond à votre recherche');
\t\t\t\t\t}
\t\t\t\t});\t\t\t\t
\t\t\t});

\t\t});\t
\t</script>\t\t
  {% endblock %}", "JeuArticleBundle:Article:recherche.html.twig", "C:\\wamp\\www\\jeux\\src\\Jeu\\ArticleBundle/Resources/views/Article/recherche.html.twig");
    }
}
