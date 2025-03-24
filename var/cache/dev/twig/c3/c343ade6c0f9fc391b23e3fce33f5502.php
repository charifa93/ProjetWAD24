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

/* recette/index.html.twig */
class __TwigTemplate_5bf4eb9cb7fa18daaf0edaacef99b7cf extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recette/index.html.twig", 1);
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

        yield "Recette index";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 6
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("showRecette");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 9
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

        // line 10
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        // line 11
        yield $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("showRecette");
        yield "\t\t
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
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

        // line 15
        yield "
<main class=\"container mx-auto px-4 py-8\">
<div class=\"flex flex-col md:flex-row gap-8\">
<aside class=\"md:w-1/4 bg-white rounded-lg shadow-sm p-6 h-fit\">
<div class=\"mb-8\">
<div class=\"relative\">
<input type=\"text\" placeholder=\"Rechercher une recette...\" class=\"w-full px-4 py-2 pr-10 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-sm\">
<button class=\"absolute right-3 top-1/2 transform -translate-y-1/2\">
<i class=\"ri-search-line text-gray-400\"></i>
</button>
</div>
</div>

<div class=\"space-y-6 filter-section max-h-[calc(100vh-240px)] overflow-y-auto\">
<div>
<h3 class=\"font-semibold text-gray-900 mb-3\">Catégories</h3>
<div class=\"space-y-2\">
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Entrées</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Plats principaux</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Desserts</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Boissons</span>
</label>
</div>
</div>

<div>
<h3 class=\"font-semibold text-gray-900 mb-3\">Temps de préparation</h3>
<div class=\"space-y-2\">
<label class=\"flex items-center cursor-pointer\">
<input type=\"radio\" name=\"time\" class=\"form-radio text-primary border-gray-300\">
<span class=\"ml-2 text-gray-700\">0-15 minutes</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"radio\" name=\"time\" class=\"form-radio text-primary border-gray-300\">
<span class=\"ml-2 text-gray-700\">15-30 minutes</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"radio\" name=\"time\" class=\"form-radio text-primary border-gray-300\">
<span class=\"ml-2 text-gray-700\">30-45 minutes</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"radio\" name=\"time\" class=\"form-radio text-primary border-gray-300\">
<span class=\"ml-2 text-gray-700\">Plus de 45 minutes</span>
</label>
</div>
</div>

<div>
<h3 class=\"font-semibold text-gray-900 mb-3\">Niveau de difficulté</h3>
<div class=\"space-y-2\">
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Facile</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Intermédiaire</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Difficile</span>
</label>
</div>
</div>

<div>
<h3 class=\"font-semibold text-gray-900 mb-3\">Régimes spéciaux</h3>
<div class=\"space-y-2\">
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Végétarien</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Végan</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Sans gluten</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Sans lactose</span>
</label>
</div>
</div>

<button class=\"w-full mt-6 bg-gray-100 text-gray-600 py-2 rounded-lg hover:bg-gray-200 transition-colors !rounded-button\">
Réinitialiser les filtres
</button>
</div>
</aside>

<div class=\"md:w-3/4\">
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



    ";
        // line 137
        yield "    ";
        // line 141
        yield "
";
        // line 166
        yield "




<div id=\"divResultats\" >
    ";
        // line 172
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 172, $this->source); })()))) {
            // line 173
            yield "        <p>Aucune recette disponible pour le moment.</p>
    ";
        } else {
            // line 175
            yield "        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
            ";
            // line 176
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 176, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
                // line 177
                yield "            
<div  onclick=\"window.location.href='";
                // line 178
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 178)]), "html", null, true);
                yield "'\"  class=\"bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow transition-shadow cursor-pointer \">
<img src=\"";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "image", [], "any", false, false, false, 179), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 179), "html", null, true);
                yield "\" class=\"w-full h-48 object-cover\">
<div class=\"p-4\">
<h3 class=\"text-lg font-semibold mb-2\">";
                // line 181
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 181), "html", null, true);
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
                // line 190
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "recettesNote", [], "any", false, false, false, 190)), "html", null, true);
                yield " avis)</span>
</div>
<div class=\"flex items-center justify-between text-sm text-gray-600 mb-4\">
<span><i class=\"ri-time-line mr-1\"></i> ";
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsDePreparation", [], "any", false, false, false, 193), "H:i"), "html", null, true);
                yield " min</span>
<span><i class=\"ri-user-line mr-1\"></i>";
                // line 194
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "nombrePortions", [], "any", false, false, false, 194), "html", null, true);
                yield " pers.</span>
<span><i class=\"ri-award-line mr-1\"></i> ";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "difficulte", [], "any", false, false, false, 195), "html", null, true);
                yield "</span>
</div>
<div class=\"flex items-center justify-between\">
<div class=\"flex items-center\">
<img src=\"";
                // line 199
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 199), "photo", [], "any", false, false, false, 199), "html", null, true);
                yield "\" alt=\"Chef\" class=\"w-8 h-8 rounded-full mr-2\">
<span class=\"text-sm text-gray-600\"> ";
                // line 200
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 200), "prenom", [], "any", false, false, false, 200), "html", null, true);
                yield "  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 200), "nom", [], "any", false, false, false, 200), "html", null, true);
                yield "</span>
</div>
 ";
                // line 202
                if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 202, $this->source); })()), "user", [], "any", false, false, false, 202)) {
                    yield "                       
<a href=\"";
                    // line 203
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_favoris", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 203)]), "html", null, true);
                    yield "\" class=\"text-gray-400 hover:text-primary\">
  <i class=\"ri-heart-line text-xl\"></i>
</a>                     
 ";
                }
                // line 207
                yield "</div>
</div>
</div>
 ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 211
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
 ";
        }
        // line 228
        yield "</div>
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
        return "recette/index.html.twig";
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
        return array (  408 => 228,  389 => 211,  380 => 207,  373 => 203,  369 => 202,  362 => 200,  358 => 199,  351 => 195,  347 => 194,  343 => 193,  337 => 190,  325 => 181,  318 => 179,  314 => 178,  311 => 177,  307 => 176,  304 => 175,  300 => 173,  298 => 172,  290 => 166,  287 => 141,  285 => 137,  164 => 15,  151 => 14,  138 => 11,  133 => 10,  120 => 9,  107 => 6,  102 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Recette index{% endblock %}
{% block javascripts %}
    {{ parent() }}
    {{ encore_entry_script_tags ('showRecette') }}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {{ encore_entry_link_tags ('showRecette') }}\t\t
{% endblock %}

{% block body %}

<main class=\"container mx-auto px-4 py-8\">
<div class=\"flex flex-col md:flex-row gap-8\">
<aside class=\"md:w-1/4 bg-white rounded-lg shadow-sm p-6 h-fit\">
<div class=\"mb-8\">
<div class=\"relative\">
<input type=\"text\" placeholder=\"Rechercher une recette...\" class=\"w-full px-4 py-2 pr-10 border border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary text-sm\">
<button class=\"absolute right-3 top-1/2 transform -translate-y-1/2\">
<i class=\"ri-search-line text-gray-400\"></i>
</button>
</div>
</div>

<div class=\"space-y-6 filter-section max-h-[calc(100vh-240px)] overflow-y-auto\">
<div>
<h3 class=\"font-semibold text-gray-900 mb-3\">Catégories</h3>
<div class=\"space-y-2\">
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Entrées</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Plats principaux</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Desserts</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Boissons</span>
</label>
</div>
</div>

<div>
<h3 class=\"font-semibold text-gray-900 mb-3\">Temps de préparation</h3>
<div class=\"space-y-2\">
<label class=\"flex items-center cursor-pointer\">
<input type=\"radio\" name=\"time\" class=\"form-radio text-primary border-gray-300\">
<span class=\"ml-2 text-gray-700\">0-15 minutes</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"radio\" name=\"time\" class=\"form-radio text-primary border-gray-300\">
<span class=\"ml-2 text-gray-700\">15-30 minutes</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"radio\" name=\"time\" class=\"form-radio text-primary border-gray-300\">
<span class=\"ml-2 text-gray-700\">30-45 minutes</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"radio\" name=\"time\" class=\"form-radio text-primary border-gray-300\">
<span class=\"ml-2 text-gray-700\">Plus de 45 minutes</span>
</label>
</div>
</div>

<div>
<h3 class=\"font-semibold text-gray-900 mb-3\">Niveau de difficulté</h3>
<div class=\"space-y-2\">
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Facile</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Intermédiaire</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Difficile</span>
</label>
</div>
</div>

<div>
<h3 class=\"font-semibold text-gray-900 mb-3\">Régimes spéciaux</h3>
<div class=\"space-y-2\">
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Végétarien</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Végan</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Sans gluten</span>
</label>
<label class=\"flex items-center cursor-pointer\">
<input type=\"checkbox\" class=\"form-checkbox text-primary rounded border-gray-300\">
<span class=\"ml-2 text-gray-700\">Sans lactose</span>
</label>
</div>
</div>

<button class=\"w-full mt-6 bg-gray-100 text-gray-600 py-2 rounded-lg hover:bg-gray-200 transition-colors !rounded-button\">
Réinitialiser les filtres
</button>
</div>
</aside>

<div class=\"md:w-3/4\">
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



    {# Button pour afficher les saisons #}
{# <button id=\"showSaisonsBtn\">SAISON</button>
< id=\"saison\" style=\"display:none;\">  {# Ajout d'un style pour masquer par défaut #}
    {# {% for saison in saisons %}
        <a href=\"#\" class=\"saison-link\" data-valeur=\"{{ saison.value }}\">{{ saison.value }}</a>
    {% endfor %}
 #}

{# Button pour afficher les types de plats
<button id=\"showPlatsBtn\">TYPE DE PLAT</button>
<div id=\"typeDePlat\" style=\"display:none;\"> 
    {% for typeDePlat in typeDePlats %} 
        <a href=\"#\" class=\"typeDePlat-link\" data-valeur=\"{{ typeDePlat.value }}\">{{ typeDePlat.value }}</a>
    {% endfor %}
</div>

    {# Button pour afficher les Origines 
<button id=\"showOriginesBtn\">ORIGINE</button>

<div id=\"origine\" style=\"display:none;\">
    {% for origine in origines %} 
        <a href=\"#\" class=\"origine-link\" data-valeur=\"{{ origine.value }}\">{{ origine.value }}</a>
    {% endfor %}
</div>

   {# Button pour afficher les preparations 
<button id=\"showPreparationsBtn\">preparation</button>
<div id=\"preparation\" style=\"display:none;\"> 
    {% for preparation in preparations %}
        <a href=\"#\" class=\"preparation-link\" data-valeur=\"{{ preparation.value }}\">{{ preparation.value }}</a>
    {% endfor %}
</div> #}





<div id=\"divResultats\" >
    {% if recettes is empty %}
        <p>Aucune recette disponible pour le moment.</p>
    {% else %}
        <div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
            {% for recette in recettes %}
            
<div  onclick=\"window.location.href='{{ path('app_recette_show', {'id': recette.id}) }}'\"  class=\"bg-white rounded-lg shadow-sm overflow-hidden hover:shadow-md transition-shadow transition-shadow cursor-pointer \">
<img src=\"{{ recette.image }}\" alt=\"{{recette.titre}}\" class=\"w-full h-48 object-cover\">
<div class=\"p-4\">
<h3 class=\"text-lg font-semibold mb-2\">{{recette.titre}}</h3>
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
<span><i class=\"ri-time-line mr-1\"></i> {{ recette.tempsDePreparation|date('H:i') }} min</span>
<span><i class=\"ri-user-line mr-1\"></i>{{recette.nombrePortions}} pers.</span>
<span><i class=\"ri-award-line mr-1\"></i> {{recette.difficulte}}</span>
</div>
<div class=\"flex items-center justify-between\">
<div class=\"flex items-center\">
<img src=\"{{recette.utilisateur.photo}}\" alt=\"Chef\" class=\"w-8 h-8 rounded-full mr-2\">
<span class=\"text-sm text-gray-600\"> {{recette.utilisateur.prenom}}  {{recette.utilisateur.nom}}</span>
</div>
 {% if app.user %}                       
<a href=\"{{ path('app_utilisateur_favoris', {'id': recette.id}) }}\" class=\"text-gray-400 hover:text-primary\">
  <i class=\"ri-heart-line text-xl\"></i>
</a>                     
 {% endif %}
</div>
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
 {% endif %}
</div>
</main>
{% endblock %}
", "recette/index.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\recette\\index.html.twig");
    }
}
