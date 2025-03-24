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

/* registration/register.html.twig */
class __TwigTemplate_83f4ccd538d781727abb813a4662a6bc extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "Register";
        
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
        yield "    ";
        // line 18
        yield "
";
        // line 19
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 19, $this->source); })()), 'form_start', ["attr" => ["class" => "w-full min-w-full px-8"]]);
        yield "
    <div class=\"mb-6\">
        <div class=\"relative\">
            <i class=\"ri-user-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\"></i>
            ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "nom", [], "any", false, false, false, 23), 'widget', ["attr" => ["class" => "w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary", "placeholder" => "Nom"]]);
        // line 28
        yield "
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 29, $this->source); })()), "nom", [], "any", false, false, false, 29), 'errors');
        yield "
        </div>
    </div>

    <div class=\"mb-6\">
        <div class=\"relative\">
            <i class=\"ri-user-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\"></i>
            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 36, $this->source); })()), "prenom", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary", "placeholder" => "Prénom"]]);
        // line 41
        yield "
            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "prenom", [], "any", false, false, false, 42), 'errors');
        yield "
        </div>
    </div>

    <div class=\"mb-6\">
        <div class=\"relative\">
            <i class=\"ri-mail-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\"></i>
            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "email", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary", "placeholder" => "Email"]]);
        // line 54
        yield "
            ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "email", [], "any", false, false, false, 55), 'errors');
        yield "
        </div>
    </div>

    <div class=\"mb-6\">
        <div class=\"relative\">
            <i class=\"ri-lock-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\"></i>
            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 62, $this->source); })()), "plainPassword", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary", "placeholder" => "Mot de passe"]]);
        // line 67
        yield "
            <button type=\"button\" class=\"absolute right-4 top-1/2 -translate-y-1/2 text-gray-400\" onclick=\"togglePassword(this)\">
                <i class=\"ri-eye-line\"></i>
            </button>
            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "plainPassword", [], "any", false, false, false, 71), 'errors');
        yield "
        </div>
    </div>
    <div class=\"mb-6\">
        <div class=\"relative border-2 border-dashed border-gray-200 rounded-lg p-6 text-center cursor-pointer hover:border-primary transition-colors\">
        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "photo", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary", "placeholder" => "Mot de passe"]]);
        // line 81
        yield "
        </div>
    </div>

    ";
        // line 100
        yield "
    ";
        // line 102
        yield "    ";
        // line 109
        yield "
    <button type=\"submit\" class=\"w-full py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary/90 transition-colors\">S'inscrire</button>
";
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 111, $this->source); })()), 'form_end');
        yield "



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
        return "registration/register.html.twig";
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
        return array (  190 => 111,  186 => 109,  184 => 102,  181 => 100,  175 => 81,  173 => 76,  165 => 71,  159 => 67,  157 => 62,  147 => 55,  144 => 54,  142 => 49,  132 => 42,  129 => 41,  127 => 36,  117 => 29,  114 => 28,  112 => 23,  105 => 19,  102 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Register{% endblock %}

{% block body %}
    {# {{ form_errors(registrationForm) }}

    {{ form_start(registrationForm) }}
        {{ form_row(registrationForm.nom) }}
        {{ form_row(registrationForm.prenom) }}
        {{ form_row(registrationForm.email) }}
        {{ form_row(registrationForm.plainPassword, {
            label: 'Password'
        }) }}
        {# {{ form_row(registrationForm.agreeTerms) }} 
        <button type=\"submit\" class=\"btn\">Register</button>
    {{ form_end(registrationForm) }} #}

{{ form_start(registrationForm, {'attr': {'class': 'w-full min-w-full px-8'}}) }}
    <div class=\"mb-6\">
        <div class=\"relative\">
            <i class=\"ri-user-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\"></i>
            {{ form_widget(registrationForm.nom, {
                'attr': {
                    'class': 'w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary',
                    'placeholder': 'Nom'
                }
            }) }}
            {{ form_errors(registrationForm.nom) }}
        </div>
    </div>

    <div class=\"mb-6\">
        <div class=\"relative\">
            <i class=\"ri-user-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\"></i>
            {{ form_widget(registrationForm.prenom, {
                'attr': {
                    'class': 'w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary',
                    'placeholder': 'Prénom'
                }
            }) }}
            {{ form_errors(registrationForm.prenom) }}
        </div>
    </div>

    <div class=\"mb-6\">
        <div class=\"relative\">
            <i class=\"ri-mail-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\"></i>
            {{ form_widget(registrationForm.email, {
                'attr': {
                    'class': 'w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary',
                    'placeholder': 'Email'
                }
            }) }}
            {{ form_errors(registrationForm.email) }}
        </div>
    </div>

    <div class=\"mb-6\">
        <div class=\"relative\">
            <i class=\"ri-lock-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\"></i>
            {{ form_widget(registrationForm.plainPassword, {
                'attr': {
                    'class': 'w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary',
                    'placeholder': 'Mot de passe'
                }
            }) }}
            <button type=\"button\" class=\"absolute right-4 top-1/2 -translate-y-1/2 text-gray-400\" onclick=\"togglePassword(this)\">
                <i class=\"ri-eye-line\"></i>
            </button>
            {{ form_errors(registrationForm.plainPassword) }}
        </div>
    </div>
    <div class=\"mb-6\">
        <div class=\"relative border-2 border-dashed border-gray-200 rounded-lg p-6 text-center cursor-pointer hover:border-primary transition-colors\">
        {{ form_widget(registrationForm.photo, {
                'attr': {
                    'class': 'w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary',
                    'placeholder': 'Mot de passe'
                }
            }) }}
        </div>
    </div>

    {# <div class=\"mb-6\">
        <div class=\"relative\">
            <i class=\"ri-lock-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\"></i>
            {{ form_widget(registrationForm.plainPassword.second, {
                'attr': {
                    'class': 'w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary',
                    'placeholder': 'Confirmer le mot de passe'
                }
            }) }}
            <button type=\"button\" class=\"absolute right-4 top-1/2 -translate-y-1/2 text-gray-400\" onclick=\"togglePassword(this)\">
                <i class=\"ri-eye-line\"></i>
            </button>
            {{ form_errors(registrationForm.plainPassword.second) }}
        </div>
    </div> #}

    {# Champ image de profil (si pas dans le form Symfony) #}
    {# <div class=\"mb-6\">
        <div class=\"relative border-2 border-dashed border-gray-200 rounded-lg p-6 text-center cursor-pointer hover:border-primary transition-colors\" onclick=\"document.getElementById('profilePicture').click()\">
            <input type=\"file\" id=\"profilePicture\" class=\"hidden\" accept=\"image/*\">
            <i class=\"ri-image-line text-4xl text-gray-400 mb-2\"></i>
            <p class=\"text-sm text-gray-600\">Cliquez ou glissez une photo de profil</p>
        </div>
    </div> #}

    <button type=\"submit\" class=\"w-full py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary/90 transition-colors\">S'inscrire</button>
{{ form_end(registrationForm) }}



{% endblock %}", "registration/register.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\registration\\register.html.twig");
    }
}
