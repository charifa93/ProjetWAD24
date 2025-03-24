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

/* utilisateur/edit.html.twig */
class __TwigTemplate_9f16b30b8978635c3675d617f978cb2f extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/edit.html.twig"));

        // line 14
        yield "<div class=\"bg-white rounded-lg p-6 w-full max-w-lg\">
  <div class=\"flex justify-between items-center mb-6\">
    <h3 class=\"text-lg font-semibold\">Modifier le profil</h3>
    <button onclick=\"closeEditProfileModal()\" class=\"text-gray-400 hover:text-gray-600\">
      <i class=\"ri-close-line text-xl\"></i>
    </button>
  </div>

  ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["id" => "editProfileForm", "class" => "space-y-4"]]);
        yield "
    <div>
      ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "nom", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Nom d'utilisateur"]);
        yield "
      ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary", "placeholder" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 25, $this->source); })()), "nom", [], "any", false, false, false, 25)]]);
        yield "
    </div>
    <div>
      ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "prenom", [], "any", false, false, false, 28), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Prénom d'utilisateur"]);
        yield "
      ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary", "placeholder" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 29, $this->source); })()), "prenom", [], "any", false, false, false, 29)]]);
        yield "
    </div>
    <div>
      ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Email"]);
        yield "
      ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary", "placeholder" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33)]]);
        yield "
    </div>

    ";
        // line 36
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 36, $this->source); })()), "photo", [], "any", false, false, false, 36)) {
            // line 37
            yield "      <div>
        <p class=\"text-sm text-gray-600 mb-1\">Photo actuelle :</p>
        <img src=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/photos/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 39, $this->source); })()), "photo", [], "any", false, false, false, 39))), "html", null, true);
            yield "\" alt=\"Photo de profil\" class=\"w-20 h-20 rounded-full object-cover mb-2\">
      </div>
    ";
        }
        // line 42
        yield "
    <div>
      ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "photo", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700 mb-1"], "label" => "Nouvelle photo"]);
        yield "
      ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "photo", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary"]]);
        yield "
    </div>
    
    <div class=\"flex justify-end space-x-3\">
      <button type=\"button\" onclick=\"closeEditProfileModal()\" class=\"px-4 py-2 text-gray-600 hover:text-gray-800 rounded-button\">Annuler</button>
      <button type=\"submit\" class=\"bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 rounded-button\">Enregistrer</button>
    </div>
  ";
        // line 52
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_end');
        yield "
</div>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "utilisateur/edit.html.twig";
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
        return array (  123 => 52,  113 => 45,  109 => 44,  105 => 42,  99 => 39,  95 => 37,  93 => 36,  87 => 33,  83 => 32,  77 => 29,  73 => 28,  67 => 25,  63 => 24,  58 => 22,  48 => 14,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% extends 'base.html.twig' %}

{% block title %}Edit Recette{% endblock %}

{% block body %}
    <h1>Edit Recette</h1>

    {{ include('Utilisateur/_form.html.twig', {'button_label': 'Update'}) }}

    <a href=\"{{ path ('app_utilisateur_profil', { id: utilisateur.id }) }}\">back to list</a>


{% endblock %} #}
<div class=\"bg-white rounded-lg p-6 w-full max-w-lg\">
  <div class=\"flex justify-between items-center mb-6\">
    <h3 class=\"text-lg font-semibold\">Modifier le profil</h3>
    <button onclick=\"closeEditProfileModal()\" class=\"text-gray-400 hover:text-gray-600\">
      <i class=\"ri-close-line text-xl\"></i>
    </button>
  </div>

  {{ form_start(form, {'attr': {'id': 'editProfileForm', 'class': 'space-y-4'}}) }}
    <div>
      {{ form_label(form.nom, \"Nom d'utilisateur\", {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
      {{ form_widget(form.nom, {'attr': {'class': 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary', 'placeholder': utilisateur.nom}}) }}
    </div>
    <div>
      {{ form_label(form.prenom, \"Prénom d'utilisateur\", {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
      {{ form_widget(form.prenom, {'attr': {'class': 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary', 'placeholder': utilisateur.prenom}}) }}
    </div>
    <div>
      {{ form_label(form.email, \"Email\", {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
      {{ form_widget(form.email, {'attr': {'class': 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary', 'placeholder': utilisateur.email}}) }}
    </div>

    {% if utilisateur.photo %}
      <div>
        <p class=\"text-sm text-gray-600 mb-1\">Photo actuelle :</p>
        <img src=\"{{ asset('uploads/photos/' ~ utilisateur.photo) }}\" alt=\"Photo de profil\" class=\"w-20 h-20 rounded-full object-cover mb-2\">
      </div>
    {% endif %}

    <div>
      {{ form_label(form.photo, \"Nouvelle photo\", {'label_attr': {'class': 'block text-sm font-medium text-gray-700 mb-1'}}) }}
      {{ form_widget(form.photo, {'attr': {'class': 'w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary'}}) }}
    </div>
    
    <div class=\"flex justify-end space-x-3\">
      <button type=\"button\" onclick=\"closeEditProfileModal()\" class=\"px-4 py-2 text-gray-600 hover:text-gray-800 rounded-button\">Annuler</button>
      <button type=\"submit\" class=\"bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 rounded-button\">Enregistrer</button>
    </div>
  {{ form_end(form) }}
</div>

", "utilisateur/edit.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\Utilisateur\\edit.html.twig");
    }
}
