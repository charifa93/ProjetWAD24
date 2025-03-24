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

/* recette/edit.html.twig */
class __TwigTemplate_c99128fa4539b6d96a0c6ba26dafbd84 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recette/edit.html.twig", 1);
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

        yield "Modifier Recette";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        yield "    <link href=\"https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FF6B6B',
                        secondary: '#4ECDC4'
                    },
                    borderRadius: {
                        'button': '8px'
                    }
                }
            }
        }
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
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

        // line 26
        yield "<nav class=\"bg-white shadow-sm fixed w-full z-50\">
    <div class=\"max-w-7xl mx-auto px-4\">
        <div class=\"flex justify-between h-16\">
            <div class=\"flex items-center\">
                <h1 class=\"font-['Pacifico'] text-2xl text-primary\">logo</h1>
                <div class=\"hidden md:flex items-center space-x-8 ml-10\">
                    <a href=\"";
        // line 32
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Accueil</a>
                    <a href=\"#\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Explorer</a>
                    <a href=\"#\" class=\"text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Mes Recettes</a>
                    <a href=\"#\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Communauté</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<main class=\"pt-24 pb-12 bg-gray-50 min-h-screen\">
    <div class=\"max-w-4xl mx-auto px-4\">
        <div class=\"bg-white rounded-lg shadow-sm p-8\">
            <h2 class=\"text-2xl font-bold text-gray-900 mb-8\">Modifier la Recette</h2>

            ";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_start');
        yield "
                ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), 'widget');
        yield "
                <div class=\"flex items-center justify-between pt-6\">
                    <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_index");
        yield "\" class=\"text-gray-500 hover:text-gray-700\">Retour à la liste</a>
                    <button type=\"submit\" class=\"px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors !rounded-button\">
                        ";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 52, $this->source); })()), "Sauvegarder")) : ("Sauvegarder")), "html", null, true);
        yield "
                    </button>
                </div>
            ";
        // line 55
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
        yield "

            <div class=\"mt-6\">
                ";
        // line 58
        yield Twig\Extension\CoreExtension::include($this->env, $context, "recette/_delete_form.html.twig");
        yield "
            </div>
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
        return "recette/edit.html.twig";
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
        return array (  194 => 58,  188 => 55,  182 => 52,  177 => 50,  172 => 48,  168 => 47,  150 => 32,  142 => 26,  129 => 25,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Recette{% endblock %}

{% block stylesheets %}
    <link href=\"https://cdn.jsdelivr.net/npm/remixicon@4.6.0/fonts/remixicon.css\" rel=\"stylesheet\">
    <script src=\"https://cdn.tailwindcss.com\"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FF6B6B',
                        secondary: '#4ECDC4'
                    },
                    borderRadius: {
                        'button': '8px'
                    }
                }
            }
        }
    </script>
{% endblock %}

{% block body %}
<nav class=\"bg-white shadow-sm fixed w-full z-50\">
    <div class=\"max-w-7xl mx-auto px-4\">
        <div class=\"flex justify-between h-16\">
            <div class=\"flex items-center\">
                <h1 class=\"font-['Pacifico'] text-2xl text-primary\">logo</h1>
                <div class=\"hidden md:flex items-center space-x-8 ml-10\">
                    <a href=\"{{ path('app_home') }}\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Accueil</a>
                    <a href=\"#\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Explorer</a>
                    <a href=\"#\" class=\"text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Mes Recettes</a>
                    <a href=\"#\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Communauté</a>
                </div>
            </div>
        </div>
    </div>
</nav>

<main class=\"pt-24 pb-12 bg-gray-50 min-h-screen\">
    <div class=\"max-w-4xl mx-auto px-4\">
        <div class=\"bg-white rounded-lg shadow-sm p-8\">
            <h2 class=\"text-2xl font-bold text-gray-900 mb-8\">Modifier la Recette</h2>

            {{ form_start(form) }}
                {{ form_widget(form) }}
                <div class=\"flex items-center justify-between pt-6\">
                    <a href=\"{{ path('app_recette_index') }}\" class=\"text-gray-500 hover:text-gray-700\">Retour à la liste</a>
                    <button type=\"submit\" class=\"px-6 py-2 bg-primary text-white rounded-lg hover:bg-primary/90 transition-colors !rounded-button\">
                        {{ button_label|default('Sauvegarder') }}
                    </button>
                </div>
            {{ form_end(form) }}

            <div class=\"mt-6\">
                {{ include('recette/_delete_form.html.twig') }}
            </div>
        </div>
    </div>
</main>
{% endblock %}

", "recette/edit.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\recette\\edit.html.twig");
    }
}
