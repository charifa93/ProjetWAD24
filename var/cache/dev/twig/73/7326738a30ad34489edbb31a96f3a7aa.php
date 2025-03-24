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

/* gestion_recettes/affichage_filtre.html.twig */
class __TwigTemplate_db9df1ac724f5e295be0d6844bfab903 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_recettes/affichage_filtre.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_recettes/affichage_filtre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion_recettes/affichage_filtre.html.twig", 1);
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

        yield "Liste des Recettes";
        
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
        yield "    <h1>Liste des Recettes</h1>

    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["saisons"]) || array_key_exists("saisons", $context) ? $context["saisons"] : (function () { throw new RuntimeError('Variable "saisons" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["saison"]) {
            // line 9
            yield "        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("afficherRecetteParSaison", ["saison" => CoreExtension::getAttribute($this->env, $this->source, $context["saison"], "value", [], "any", false, false, false, 9)]), "html", null, true);
            yield "\" value = 'lienSaison'>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["saison"], "value", [], "any", false, false, false, 9), "html", null, true);
            yield "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['saison'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        yield "
<div id = \"divResultats\" ></div>

";
        // line 15
        yield "
<script>
let lien = document.getElementById('lienSaison');

form.addEventListener ('click',function(){

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
        return "gestion_recettes/affichage_filtre.html.twig";
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
        return array (  124 => 15,  119 => 11,  108 => 9,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Liste des Recettes{% endblock %}

{% block body %}
    <h1>Liste des Recettes</h1>

    {% for saison in saisons %}
        <a href=\"{{ path('afficherRecetteParSaison' ,  {'saison': saison.value }) }}\" value = 'lienSaison'>{{saison.value }}</a>
    {% endfor %}

<div id = \"divResultats\" ></div>

{# appel ajax  #}

<script>
let lien = document.getElementById('lienSaison');

form.addEventListener ('click',function(){

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
         
    
{% endblock %}", "gestion_recettes/affichage_filtre.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\gestion_recettes\\affichage_filtre.html.twig");
    }
}
