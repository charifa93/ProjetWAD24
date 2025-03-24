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

/* recette/new.html.twig */
class __TwigTemplate_cedb17b21a77618426a6e1d004072645 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recette/new.html.twig", 1);
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

        yield "Nouvelle Recette";
        
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
        yield "<main class=\"pt-24 pb-12\">
<div class=\"max-w-4xl mx-auto px-4\">
<div class=\"bg-white rounded-lg shadow-sm p-8\">
<h2 class=\"text-2xl font-bold text-gray-900 mb-8\">Nouvelle Recette</h2>

";
        // line 11
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["id" => "recipeForm", "class" => "space-y-8"]]);
        yield "

<div>
    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "titre", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"]]);
        yield "
    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "titre", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent", "placeholder" => "Donnez un nom à votre création"]]);
        yield "
</div>
<div>
    ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "description", [], "any", false, false, false, 18), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"]]);
        yield "
    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent", "placeholder" => "Donnez un nom à votre création"]]);
        yield "
</div>

<div>
    ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), "image", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"], "label" => "Photos de la recette"]);
        yield "
    <div class=\"border-2 border-dashed border-gray-200 rounded-lg p-8 text-center\" id=\"dropZone\">
        <div class=\"space-y-4\">
            <i class=\"ri-image-add-line text-4xl text-gray-400\"></i>
            <p class=\"text-gray-500\">Glissez vos photos ici ou</p>
            <button type=\"button\" class=\"bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors !rounded-button\" onclick=\"document.getElementById('photoInput').click()\">Parcourir</button>
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "image", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "hidden", "id" => "photoInput", "multiple" => true, "accept" => "image/*"]]);
        yield "
        </div>
    </div>
    <div id=\"previewContainer\" class=\"grid grid-cols-4 gap-4 mt-4\"></div>
</div>

";
        // line 43
        yield "
";
        // line 52
        yield "<div class=\"grid grid-cols-3 gap-6\">
<div>
    ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "saison", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-4"], "label" => "Saison"]);
        yield "
    ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "saison", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => " px-4 py-2 border border-gray-200 rounded-lg", "placeholder" => "30"]]);
        yield "
    
</div>
<div>
    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "typeDePlat", [], "any", false, false, false, 59), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-4"], "label" => "Type de plate"]);
        yield "
    ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "typeDePlat", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => " px-4 py-2 border border-gray-200 rounded-lg", "placeholder" => "30"]]);
        yield "
</div>
<div>
    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "origine", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-4"], "label" => "origine"]);
        yield "
    ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "origine", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => " px-4 py-2 border border-gray-200 rounded-lg", "placeholder" => "30"]]);
        yield "
</div>
<div>
    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "preparations", [], "any", false, false, false, 67), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-4"], "label" => "Preparation"]);
        yield "
    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "preparations", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => " px-4 py-2 border border-gray-200 rounded-lg", "placeholder" => "30"]]);
        yield "
    
</div>
<div>
    ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "datePublication", [], "any", false, false, false, 72), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-4"], "label" => "date de publication"]);
        yield "
    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "datePublication", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => " px-4 py-2 border border-gray-200 rounded-lg", "placeholder" => "30"]]);
        yield "
</div> 
<div>
    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "difficulte", [], "any", false, false, false, 76), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-4"], "label" => "difficulte"]);
        yield "
    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "difficulte", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => " px-4 py-2 border border-gray-200 rounded-lg", "placeholder" => "30"]]);
        yield "
</div>
</div> 


<div class=\"grid grid-cols-3 gap-6\">
    <div>
        ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "tempsDePreparation", [], "any", false, false, false, 84), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"]]);
        yield "
        <div class=\"flex items-center space-x-2\">
            ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "tempsDePreparation", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border border-gray-200 rounded-lg", "placeholder" => "30"]]);
        yield "
            <span class=\"text-gray-500\">min</span>
        </div>
    </div>
    <div>
        ";
        // line 91
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "tempsDeCuison", [], "any", false, false, false, 91), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"]]);
        yield "
        <div class=\"flex items-center space-x-2\">
            ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "tempsDeCuison", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border border-gray-200 rounded-lg", "placeholder" => "45"]]);
        yield "
            <span class=\"text-gray-500\">min</span>
        </div>
    </div>
    <div>
        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "nombrePortions", [], "any", false, false, false, 98), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-2"]]);
        yield "
        ";
        // line 99
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "nombrePortions", [], "any", false, false, false, 99), 'widget', ["attr" => ["class" => "w-full px-4 py-2 border border-gray-200 rounded-lg", "placeholder" => "4"]]);
        yield "
    </div>
</div>

<div class=\"flex items-center justify-between pt-6\">
    ";
        // line 105
        yield "    <div class=\"space-x-4\">
        <button type=\"submit\" class=\"px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors !rounded-button\">Publier</button>
    </div>
</div>

";
        // line 110
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_end');
        yield "

<a href=\"";
        // line 112
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_index");
        yield "\" class=\"text-sm text-primary hover:underline mt-4 block\">Retour à la liste</a>

</div>
</div>
</main>
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
        return "recette/new.html.twig";
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
        return array (  275 => 112,  270 => 110,  263 => 105,  255 => 99,  251 => 98,  243 => 93,  238 => 91,  230 => 86,  225 => 84,  215 => 77,  211 => 76,  205 => 73,  201 => 72,  194 => 68,  190 => 67,  184 => 64,  180 => 63,  174 => 60,  170 => 59,  163 => 55,  159 => 54,  155 => 52,  152 => 43,  143 => 29,  134 => 23,  127 => 19,  123 => 18,  117 => 15,  113 => 14,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Nouvelle Recette{% endblock %}

{% block body %}
<main class=\"pt-24 pb-12\">
<div class=\"max-w-4xl mx-auto px-4\">
<div class=\"bg-white rounded-lg shadow-sm p-8\">
<h2 class=\"text-2xl font-bold text-gray-900 mb-8\">Nouvelle Recette</h2>

{{ form_start(form, {'attr': {'id': 'recipeForm', 'class': 'space-y-8'}}) }}

<div>
    {{ form_label(form.titre, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2'}}) }}
    {{ form_widget(form.titre, {'attr': {'class': 'w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent', 'placeholder': 'Donnez un nom à votre création'}}) }}
</div>
<div>
    {{ form_label(form.description, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2'}}) }}
    {{ form_widget(form.description, {'attr': {'class': 'w-full px-4 py-2 border border-gray-200 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent', 'placeholder': 'Donnez un nom à votre création'}}) }}
</div>

<div>
    {{ form_label(form.image, 'Photos de la recette', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2'}}) }}
    <div class=\"border-2 border-dashed border-gray-200 rounded-lg p-8 text-center\" id=\"dropZone\">
        <div class=\"space-y-4\">
            <i class=\"ri-image-add-line text-4xl text-gray-400\"></i>
            <p class=\"text-gray-500\">Glissez vos photos ici ou</p>
            <button type=\"button\" class=\"bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors !rounded-button\" onclick=\"document.getElementById('photoInput').click()\">Parcourir</button>
            {{ form_widget(form.image, {'attr': {'class': 'hidden', 'id': 'photoInput', 'multiple': true, 'accept': 'image/*'}}) }}
        </div>
    </div>
    <div id=\"previewContainer\" class=\"grid grid-cols-4 gap-4 mt-4\"></div>
</div>

{# <div>
    {{ form_label(form.detailRecette, 'Ingrédients', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-4'}}) }}
    {{ form_widget(form.detailRecette, {'attr': {'id': 'ingredientsContainer', 'class': 'space-y-4'}}) }}
    <button type=\"button\" class=\"mt-4 text-primary hover:text-primary/80 flex items-center space-x-2\" onclick=\"addIngredient()\">
        <i class=\"ri-add-line\"></i>
        <span>Ajouter un ingrédient</span>
    </button>
</div> #}

{# <div>
    {{ form_label(form.etapes, 'Étapes de préparation', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-4'}}) }}
    {{ form_widget(form.etapes, {'attr': {'id': 'stepsContainer', 'class': 'space-y-6'}}) }}
    <button type=\"button\" class=\"mt-4 text-primary hover:text-primary/80 flex items-center space-x-2\" onclick=\"addStep()\">
        <i class=\"ri-add-line\"></i>
        <span>Ajouter une étape</span>
    </button>
</div> #}
<div class=\"grid grid-cols-3 gap-6\">
<div>
    {{ form_label(form.saison, 'Saison', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-4'}}) }}
    {{ form_widget(form.saison, {'attr': {'class': ' px-4 py-2 border border-gray-200 rounded-lg', 'placeholder': '30'}}) }}
    
</div>
<div>
    {{ form_label(form.typeDePlat, 'Type de plate', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-4'}}) }}
    {{ form_widget(form.typeDePlat, {'attr': {'class': ' px-4 py-2 border border-gray-200 rounded-lg', 'placeholder': '30'}}) }}
</div>
<div>
    {{ form_label(form.origine, 'origine', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-4'}}) }}
    {{ form_widget(form.origine, {'attr': {'class': ' px-4 py-2 border border-gray-200 rounded-lg', 'placeholder': '30'}}) }}
</div>
<div>
    {{ form_label(form.preparations, 'Preparation', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-4'}}) }}
    {{ form_widget(form.preparations, {'attr': {'class': ' px-4 py-2 border border-gray-200 rounded-lg', 'placeholder': '30'}}) }}
    
</div>
<div>
    {{ form_label(form.datePublication, 'date de publication', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-4'}}) }}
    {{ form_widget(form.datePublication, {'attr': {'class': ' px-4 py-2 border border-gray-200 rounded-lg', 'placeholder': '30'}}) }}
</div> 
<div>
    {{ form_label(form.difficulte, 'difficulte', {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-4'}}) }}
    {{ form_widget(form.difficulte, {'attr': {'class': ' px-4 py-2 border border-gray-200 rounded-lg', 'placeholder': '30'}}) }}
</div>
</div> 


<div class=\"grid grid-cols-3 gap-6\">
    <div>
        {{ form_label(form.tempsDePreparation, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2'}}) }}
        <div class=\"flex items-center space-x-2\">
            {{ form_widget(form.tempsDePreparation, {'attr': {'class': 'w-full px-4 py-2 border border-gray-200 rounded-lg', 'placeholder': '30'}}) }}
            <span class=\"text-gray-500\">min</span>
        </div>
    </div>
    <div>
        {{ form_label(form.tempsDeCuison, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2'}}) }}
        <div class=\"flex items-center space-x-2\">
            {{ form_widget(form.tempsDeCuison, {'attr': {'class': 'w-full px-4 py-2 border border-gray-200 rounded-lg', 'placeholder': '45'}}) }}
            <span class=\"text-gray-500\">min</span>
        </div>
    </div>
    <div>
        {{ form_label(form.nombrePortions, null, {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-2'}}) }}
        {{ form_widget(form.nombrePortions, {'attr': {'class': 'w-full px-4 py-2 border border-gray-200 rounded-lg', 'placeholder': '4'}}) }}
    </div>
</div>

<div class=\"flex items-center justify-between pt-6\">
    {# <button type=\"button\" class=\"text-gray-500 hover:text-gray-700\" onclick=\"saveDraft()\">Enregistrer comme brouillon</button> #}
    <div class=\"space-x-4\">
        <button type=\"submit\" class=\"px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors !rounded-button\">Publier</button>
    </div>
</div>

{{ form_end(form) }}

<a href=\"{{ path('app_recette_index') }}\" class=\"text-sm text-primary hover:underline mt-4 block\">Retour à la liste</a>

</div>
</div>
</main>
{% endblock %}
", "recette/new.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\recette\\new.html.twig");
    }
}
