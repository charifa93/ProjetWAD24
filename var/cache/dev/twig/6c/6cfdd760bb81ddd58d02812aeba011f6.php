<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* gestion_recettes/recherche_form.html.twig */
class __TwigTemplate_a5986eb73d5e3dc00c76c3bbd80f6dc1 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_recettes/recherche_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_recettes/recherche_form.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion_recettes/recherche_form.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "recherche par titre ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "


";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["id" => "recherche_form"]]);
        yield "
";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "titre", [], "any", false, false, false, 10), 'row');
        yield "
<button type=\"submit\">Rechercher</button>
";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_end');
        yield " 

<div id = \"divResultats\" ></div>

";
        // line 17
        yield "
<script>
let form = document.getElementById('recherche_form');

form.addEventListener ('input',function(){

    console.log(\"on a modifier la form\");
    
    let formData = new FormData (form);

    //obtenir le div qui contiendra la resultat 
    let divResultats = document.getElementById('divResultats');
    

      axios.post ('/gestion/recettes/rechercheAjax', formData)
        .then (Response => {
            console.log (Response.data);

            // pas besoin de parser la reponse car AXIOS le fait par défaut

            // ceci est déjà un array d'objets
            let arrayRecette = Response.data;  

            // vider le div
            divResultats.innerHTML = \"\";
            
            let ul = document.createElement ('ul');

            for (index in arrayRecette){
                let li = document.createElement ('li');
                li.innerText = arrayRecette[index].titre;
                ul.appendChild (li);
            }
            divResultats.appendChild (ul);
            })
            .catch(error => {
                console.error(\"Erreur lors de la requête : \", error);
                // divResultats.innerHTML = \"<p>Une erreur est survenue lors de la récupération des résultats.</p>\";
         
    });

});


</script>


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "gestion_recettes/recherche_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  121 => 17,  114 => 12,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}recherche par titre {% endblock %}

{% block body %}



{{ form_start(form, {'attr':{'id':'recherche_form'}}) }}
{{ form_row(form.titre)}}
<button type=\"submit\">Rechercher</button>
{{ form_end(form) }} 

<div id = \"divResultats\" ></div>

{# appel ajax  #}

<script>
let form = document.getElementById('recherche_form');

form.addEventListener ('input',function(){

    console.log(\"on a modifier la form\");
    
    let formData = new FormData (form);

    //obtenir le div qui contiendra la resultat 
    let divResultats = document.getElementById('divResultats');
    

      axios.post ('/gestion/recettes/rechercheAjax', formData)
        .then (Response => {
            console.log (Response.data);

            // pas besoin de parser la reponse car AXIOS le fait par défaut

            // ceci est déjà un array d'objets
            let arrayRecette = Response.data;  

            // vider le div
            divResultats.innerHTML = \"\";
            
            let ul = document.createElement ('ul');

            for (index in arrayRecette){
                let li = document.createElement ('li');
                li.innerText = arrayRecette[index].titre;
                ul.appendChild (li);
            }
            divResultats.appendChild (ul);
            })
            .catch(error => {
                console.error(\"Erreur lors de la requête : \", error);
                // divResultats.innerHTML = \"<p>Une erreur est survenue lors de la récupération des résultats.</p>\";
         
    });

});


</script>


{% endblock %}", "gestion_recettes/recherche_form.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\gestion_recettes\\recherche_form.html.twig");
    }
}
