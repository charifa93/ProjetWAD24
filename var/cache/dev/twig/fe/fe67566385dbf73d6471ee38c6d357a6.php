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

/* utilisateur/mesRecettes.html.twig */
class __TwigTemplate_d791c08d34dc1b7398a1bd67f06f9f8e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/mesRecettes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/mesRecettes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/mesRecettes.html.twig", 1);
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

        yield "Mon Profil";
        
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
        // line 17
        yield "

<main class=\"container mx-auto px-4 py-8\">
<div>
<div>
<div class=\"flex justify-between items-center mb-6\">
<h1 class=\"text-2xl font-bold text-gray-900\">Toutes les recettes</h1>
<div class=\"flex items-center space-x-4\">
<select class=\"bg-white border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary cursor-pointer pr-8\">
<option>Plus récentes</option>
<option>Mieux notées</option>
<option>Plus populaires</option>
<option>Temps de préparation</option>
</select>
</div>
</div>
<div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 34, $this->source); })()), "recettes", [], "any", false, false, false, 34));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 35
            yield "<div class=\"bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow\">
<img src=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "image", [], "any", false, false, false, 36), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 36), "html", null, true);
            yield "\" class=\"w-full h-48 object-cover\">
<div class=\"p-4\">
<h3 class=\"text-lg font-semibold mb-2\">";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 38), "html", null, true);
            yield "</h3>
<div class=\"flex items-center mb-2\">
<div class=\"flex text-yellow-400\">
<i class=\"ri-star-fill\"></i>
<i class=\"ri-star-fill\"></i>
<i class=\"ri-star-fill\"></i>
<i class=\"ri-star-fill\"></i>
<i class=\"ri-star-half-fill\"></i>
</div>
<span class=\"ml-2 text-sm text-gray-600\">(";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "recettesNote", [], "any", false, false, false, 47)), "html", null, true);
            yield " avis)</span>
</div>
<div class=\"flex items-center justify-between text-sm text-gray-600 mb-4\">
<span><i class=\"ri-time-line mr-1\"></i>";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsDePreparation", [], "any", false, false, false, 50), "H:i"), "html", null, true);
            yield " min</span>
<span><i class=\"ri-user-line mr-1\"></i> ";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "nombrePortions", [], "any", false, false, false, 51), "html", null, true);
            yield " pers.</span>
<span><i class=\"ri-award-line mr-1\"></i> ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "difficulte", [], "any", false, false, false, 52), "html", null, true);
            yield "</span>
</div>
<div class=\"flex items-center justify-between\">
<div class=\"flex items-center\">
<img src=\"";
            // line 56
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 56, $this->source); })()), "user", [], "any", false, false, false, 56), "photo", [], "any", false, false, false, 56), "html", null, true);
            yield "\" alt=\"Chef\" class=\"w-8 h-8 rounded-full mr-2\">
<span class=\"text-sm text-gray-600\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "nom", [], "any", false, false, false, 57), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "prenom", [], "any", false, false, false, 57), "html", null, true);
            yield "</span>
</div>
<button class=\"text-gray-400 hover:text-primary\">
<i class=\"ri-heart-line text-xl\"></i>
</button>
</div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 64
            yield "                <h2 class=\"text-center\">Aucune recette trouvée.</h2>
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        yield "</div>
<div class=\"mt-8 flex justify-center\">
<nav class=\"flex items-center space-x-2\">
<button class=\"px-3 py-2 rounded-lg bg-white text-gray-500 hover:text-primary\">
<i class=\"ri-arrow-left-s-line\"></i>
</button>
<button class=\"px-3 py-2 rounded-lg bg-primary text-white\">1</button>
<button class=\"px-3 py-2 rounded-lg bg-white text-gray-700 hover:bg-gray-100\">2</button>
<button class=\"px-3 py-2 rounded-lg bg-white text-gray-700 hover:bg-gray-100\">3</button>
<button class=\"px-3 py-2 rounded-lg bg-white text-gray-700 hover:bg-gray-100\">4</button>
<button class=\"px-3 py-2 rounded-lg bg-white text-gray-500 hover:text-primary\">
<i class=\"ri-arrow-right-s-line\"></i>
</button>
</nav>
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
        return "utilisateur/mesRecettes.html.twig";
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
        return array (  197 => 68,  188 => 64,  174 => 57,  170 => 56,  163 => 52,  159 => 51,  155 => 50,  149 => 47,  137 => 38,  130 => 36,  127 => 35,  122 => 34,  103 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block body %}
             
                            {# <button type=\"button\" onclick=\"window.location.href='{{ path('app_recette_edit', { id: recette.id }) }}'\">Éditer la recette</button> 
                        </div>
                    </div>
                    
                </div>
            {% else %}
                <p class=\"text-center\">Aucune recette trouvée.</p>
            {% endfor %}
        </div>
    </div> #}


<main class=\"container mx-auto px-4 py-8\">
<div>
<div>
<div class=\"flex justify-between items-center mb-6\">
<h1 class=\"text-2xl font-bold text-gray-900\">Toutes les recettes</h1>
<div class=\"flex items-center space-x-4\">
<select class=\"bg-white border border-gray-200 rounded-lg px-4 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-primary cursor-pointer pr-8\">
<option>Plus récentes</option>
<option>Mieux notées</option>
<option>Plus populaires</option>
<option>Temps de préparation</option>
</select>
</div>
</div>
<div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
{% for recette in utilisateur.recettes %}
<div class=\"bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow\">
<img src=\"{{ recette.image }}\" alt=\"{{ recette.titre }}\" class=\"w-full h-48 object-cover\">
<div class=\"p-4\">
<h3 class=\"text-lg font-semibold mb-2\">{{ recette.titre }}</h3>
<div class=\"flex items-center mb-2\">
<div class=\"flex text-yellow-400\">
<i class=\"ri-star-fill\"></i>
<i class=\"ri-star-fill\"></i>
<i class=\"ri-star-fill\"></i>
<i class=\"ri-star-fill\"></i>
<i class=\"ri-star-half-fill\"></i>
</div>
<span class=\"ml-2 text-sm text-gray-600\">({{ recette.recettesNote|length }} avis)</span>
</div>
<div class=\"flex items-center justify-between text-sm text-gray-600 mb-4\">
<span><i class=\"ri-time-line mr-1\"></i>{{ recette.tempsDePreparation|date('H:i') }} min</span>
<span><i class=\"ri-user-line mr-1\"></i> {{ recette.nombrePortions }} pers.</span>
<span><i class=\"ri-award-line mr-1\"></i> {{ recette.difficulte }}</span>
</div>
<div class=\"flex items-center justify-between\">
<div class=\"flex items-center\">
<img src=\"{{ app.user.photo }}\" alt=\"Chef\" class=\"w-8 h-8 rounded-full mr-2\">
<span class=\"text-sm text-gray-600\">{{ app.user.nom }} {{ app.user.prenom }}</span>
</div>
<button class=\"text-gray-400 hover:text-primary\">
<i class=\"ri-heart-line text-xl\"></i>
</button>
</div>
{% else %}
                <h2 class=\"text-center\">Aucune recette trouvée.</h2>
</div>
</div>
{% endfor %}
</div>
<div class=\"mt-8 flex justify-center\">
<nav class=\"flex items-center space-x-2\">
<button class=\"px-3 py-2 rounded-lg bg-white text-gray-500 hover:text-primary\">
<i class=\"ri-arrow-left-s-line\"></i>
</button>
<button class=\"px-3 py-2 rounded-lg bg-primary text-white\">1</button>
<button class=\"px-3 py-2 rounded-lg bg-white text-gray-700 hover:bg-gray-100\">2</button>
<button class=\"px-3 py-2 rounded-lg bg-white text-gray-700 hover:bg-gray-100\">3</button>
<button class=\"px-3 py-2 rounded-lg bg-white text-gray-700 hover:bg-gray-100\">4</button>
<button class=\"px-3 py-2 rounded-lg bg-white text-gray-500 hover:text-primary\">
<i class=\"ri-arrow-right-s-line\"></i>
</button>
</nav>
</div>
</div>
</div>
</main>
{% endblock %}", "utilisateur/mesRecettes.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\Utilisateur\\mesRecettes.html.twig");
    }
}
