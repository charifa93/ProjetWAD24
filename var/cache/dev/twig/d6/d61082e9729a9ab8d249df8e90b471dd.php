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

/* acceuil/index.html.twig */
class __TwigTemplate_cc9dfa4cd61f94fb7db5c06c150bf1ad extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "acceuil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "acceuil/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 4
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

        yield "Hello AccueilController!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 6
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

        // line 7
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 11
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

        // line 12
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
   
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
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

        // line 18
        yield "<section class=\"relative h-[600px] mb-12 overflow-hidden\">
<div class=\"absolute inset-0\">
<img src=\"https://public.readdy.ai/ai/img_res/1b671ebe004b1ca1d0281c456ee5c379.jpg\" alt=\"Kitchen Background\" class=\"w-full h-full object-cover\">
<div class=\"absolute inset-0 bg-gradient-to-r from-white/90 to-white/30\"></div>
</div>
<div class=\"container mx-auto px-4 h-full\">
";
        // line 24
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24)) {
            // line 25
            yield "<div class=\" relative flex flex-col items-start justify-center h-full max-w-2xl\">
<h1 class=\"text-4xl font-bold text-gray-900 mb-8\">Bienvenue ";
            // line 26
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "prenom", [], "any", false, false, false, 26), "html", null, true);
            yield "</h1>
<h1 class=\"text-4xl font-bold text-gray-900 mb-8\">Découvrez nos meilleures recettes</h1>
 ";
        } else {
            // line 29
            yield "<div class=\"relative flex flex-col items-start justify-center h-full max-w-2xl\">
<h1 class=\"text-5xl font-bold text-gray-900 mb-6 leading-tight\">Découvrez nos meilleures recettes</h1>
<p class=\"text-xl text-gray-700 mb-8\">Rejoignez notre communauté de passionnés de cuisine et partagez vos créations culinaires avec des milliers de gourmets</p>
<button  onclick=\"window.location.href='";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "'\" class=\"px-8 py-4 bg-primary text-white font-medium !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap text-lg shadow-lg\">
Essayer gratuitement
</button>
</div>
";
        }
        // line 37
        yield "</div>
</section>
<main class=\"container mx-auto px-4 py-8\">
<section class=\"mb-12\">
<h1 class=\"text-4xl font-bold text-gray-900 mb-8\">Découvrez nos plus facile recettes</h1>
<div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6\">
";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recetteDifficile"]) || array_key_exists("recetteDifficile", $context) ? $context["recetteDifficile"] : (function () { throw new RuntimeError('Variable "recetteDifficile" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 44
            yield "<div class=\"bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow\">
<img src=\"";
            // line 45
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "image", [], "any", false, false, false, 45), "html", null, true);
            yield "\" alt=\"Pâtes\" class=\"w-full h-48 object-cover rounded-lg mb-4\">
<h3 class=\"text-lg font-semibold mb-2\">";
            // line 46
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 46), "html", null, true);
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
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "recettesNote", [], "any", false, false, false, 55)), "html", null, true);
            yield " avis)</span>
</div>
<p class=\"text-sm text-gray-600 mb-4\">Par Chef ";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 57), "prenom", [], "any", false, false, false, 57), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 57), "nom", [], "any", false, false, false, 57), "html", null, true);
            yield "</p>
<div class=\"flex items-center justify-between text-sm text-gray-600\">
<span><i class=\"ri-time-line mr-1\"></i> ";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsDePreparation", [], "any", false, false, false, 59), "H:i"), "html", null, true);
            yield " minutes</span>
<span><i class=\"ri-user-line mr-1\"></i> ";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "nombrePortions", [], "any", false, false, false, 60), "html", null, true);
            yield "</span>
<span><i class=\"ri-award-line mr-1\"></i> ";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "difficulte", [], "any", false, false, false, 61), "html", null, true);
            yield "</span>
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
        yield "</div>
</section>
<section class=\"mb-12\">
<h1 class=\"text-4xl font-bold text-gray-900 mb-8\">Découvrez nos plus rapide recettes</h1>
<div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6\">
";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recetteRapide"]) || array_key_exists("recetteRapide", $context) ? $context["recetteRapide"] : (function () { throw new RuntimeError('Variable "recetteRapide" does not exist.', 70, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 71
            yield "<div class=\"bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow\">
<img src=\"";
            // line 72
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "image", [], "any", false, false, false, 72), "html", null, true);
            yield "\" alt=\"Pâtes\" class=\"w-full h-48 object-cover rounded-lg mb-4\">
<h3 class=\"text-lg font-semibold mb-2\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 73), "html", null, true);
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
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "recettesNote", [], "any", false, false, false, 82)), "html", null, true);
            yield " avis)</span>
</div>
<p class=\"text-sm text-gray-600 mb-4\">Par Chef ";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 84), "prenom", [], "any", false, false, false, 84), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 84), "nom", [], "any", false, false, false, 84), "html", null, true);
            yield "</p>
<div class=\"flex items-center justify-between text-sm text-gray-600\">
<span><i class=\"ri-time-line mr-1\"></i> ";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsDePreparation", [], "any", false, false, false, 86), "H:i"), "html", null, true);
            yield " minutes</span>
<span><i class=\"ri-user-line mr-1\"></i> ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "nombrePortions", [], "any", false, false, false, 87), "html", null, true);
            yield "</span>
<span><i class=\"ri-award-line mr-1\"></i> ";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "difficulte", [], "any", false, false, false, 88), "html", null, true);
            yield "</span>
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        yield "</div>
</section>
  ";
        // line 95
        yield "<section class=\"mb-12\">
<div class=\"grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4\">
<a href=\"#\" class=\"bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow\">
<div class=\"w-12 h-12 mx-auto mb-2 flex items-center justify-center text-primary\">
<i class=\"ri-restaurant-line text-2xl\"></i>
</div>
<span class=\"text-gray-700\">Entrées</span>
</a>
<a href=\"#\" class=\"bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow\">
<div class=\"w-12 h-12 mx-auto mb-2 flex items-center justify-center text-primary\">
<i class=\"ri-bowl-line text-2xl\"></i>
</div>
<span class=\"text-gray-700\">Plats</span>
</a>
<a href=\"#\" class=\"bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow\">
<div class=\"w-12 h-12 mx-auto mb-2 flex items-center justify-center text-primary\">
<i class=\"ri-cake-line text-2xl\"></i>
</div>
<span class=\"text-gray-700\">Desserts</span>
</a>
<a href=\"#\" class=\"bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow\">
<div class=\"w-12 h-12 mx-auto mb-2 flex items-center justify-center text-primary\">
<i class=\"ri-plant-line text-2xl\"></i>
</div>
<span class=\"text-gray-700\">Végétarien</span>
</a>
<a href=\"#\" class=\"bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow\">
<div class=\"w-12 h-12 mx-auto mb-2 flex items-center justify-center text-primary\">
<i class=\"ri-timer-line text-2xl\"></i>
</div>
<span class=\"text-gray-700\">Rapide</span>
</a>
<a href=\"#\" class=\"bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow\">
<div class=\"w-12 h-12 mx-auto mb-2 flex items-center justify-center text-primary\">
<i class=\"ri-global-line text-2xl\"></i>
</div>
<span class=\"text-gray-700\">Du Monde</span>
</a>
</div>
</section>

";
        // line 137
        yield "<section class=\"mb-12\">
<div class=\"flex justify-between items-center mb-6\">
<h2 class=\"text-2xl font-bold text-gray-900\">Dernières recettes</h2>
<a href=\"#\" class=\"text-primary hover:text-primary-dark\">Voir tout</a>
</div>
<div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
 ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 143, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 144
            yield "<div class=\"bg-white rounded-lg shadow-sm overflow-hidden\">
<img src=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "image", [], "any", false, false, false, 145), "html", null, true);
            yield "\" alt=\"Pizza\" class=\"w-full h-48 object-cover\">
<div class=\"p-4\">
<h3 class=\"text-lg font-semibold mb-2\">";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 147), "html", null, true);
            yield "</h3>
<p class=\"text-sm text-gray-600 mb-4\">";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "description", [], "any", false, false, false, 148), "html", null, true);
            yield "</p>
<div class=\"flex items-center justify-between\">
<div class=\"flex items-center\">
<img src=\"";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 151), "photo", [], "any", false, false, false, 151), "html", null, true);
            yield "\" alt=\"Chef\" class=\"w-8 h-8 rounded-full mr-2\">
<span class=\"text-sm text-gray-600\">";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 152), "prenom", [], "any", false, false, false, 152), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 152), "nom", [], "any", false, false, false, 152), "html", null, true);
            yield "</span>
</div>
<span class=\"text-sm text-gray-500\">Il y a 2 heures</span>
</div>
</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        yield "</div>
</section>
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
        return "acceuil/index.html.twig";
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
        return array (  406 => 159,  391 => 152,  387 => 151,  381 => 148,  377 => 147,  372 => 145,  369 => 144,  365 => 143,  357 => 137,  314 => 95,  310 => 92,  300 => 88,  296 => 87,  292 => 86,  285 => 84,  280 => 82,  268 => 73,  264 => 72,  261 => 71,  257 => 70,  250 => 65,  240 => 61,  236 => 60,  232 => 59,  225 => 57,  220 => 55,  208 => 46,  204 => 45,  201 => 44,  197 => 43,  189 => 37,  181 => 32,  176 => 29,  170 => 26,  167 => 25,  165 => 24,  157 => 18,  144 => 17,  129 => 12,  116 => 11,  102 => 7,  89 => 6,  66 => 4,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Hello AccueilController!{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# {{ encore_entry_script_tags ('autre') }} #}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
   
    {# {{ encore_entry_link_tags ('autre') }}\t\t #}
{% endblock %}

{% block body %}
<section class=\"relative h-[600px] mb-12 overflow-hidden\">
<div class=\"absolute inset-0\">
<img src=\"https://public.readdy.ai/ai/img_res/1b671ebe004b1ca1d0281c456ee5c379.jpg\" alt=\"Kitchen Background\" class=\"w-full h-full object-cover\">
<div class=\"absolute inset-0 bg-gradient-to-r from-white/90 to-white/30\"></div>
</div>
<div class=\"container mx-auto px-4 h-full\">
{% if app.user %}
<div class=\" relative flex flex-col items-start justify-center h-full max-w-2xl\">
<h1 class=\"text-4xl font-bold text-gray-900 mb-8\">Bienvenue {{ app.user.prenom }}</h1>
<h1 class=\"text-4xl font-bold text-gray-900 mb-8\">Découvrez nos meilleures recettes</h1>
 {% else %}
<div class=\"relative flex flex-col items-start justify-center h-full max-w-2xl\">
<h1 class=\"text-5xl font-bold text-gray-900 mb-6 leading-tight\">Découvrez nos meilleures recettes</h1>
<p class=\"text-xl text-gray-700 mb-8\">Rejoignez notre communauté de passionnés de cuisine et partagez vos créations culinaires avec des milliers de gourmets</p>
<button  onclick=\"window.location.href='{{ path('app_login') }}'\" class=\"px-8 py-4 bg-primary text-white font-medium !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap text-lg shadow-lg\">
Essayer gratuitement
</button>
</div>
{% endif %}
</div>
</section>
<main class=\"container mx-auto px-4 py-8\">
<section class=\"mb-12\">
<h1 class=\"text-4xl font-bold text-gray-900 mb-8\">Découvrez nos plus facile recettes</h1>
<div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6\">
{% for recette in recetteDifficile %}
<div class=\"bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow\">
<img src=\"{{recette.image}}\" alt=\"Pâtes\" class=\"w-full h-48 object-cover rounded-lg mb-4\">
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
<p class=\"text-sm text-gray-600 mb-4\">Par Chef {{recette.utilisateur.prenom}} {{recette.utilisateur.nom}}</p>
<div class=\"flex items-center justify-between text-sm text-gray-600\">
<span><i class=\"ri-time-line mr-1\"></i> {{ recette.tempsDePreparation|date('H:i') }} minutes</span>
<span><i class=\"ri-user-line mr-1\"></i> {{recette.nombrePortions}}</span>
<span><i class=\"ri-award-line mr-1\"></i> {{recette.difficulte}}</span>
</div>
</div>
{% endfor %}
</div>
</section>
<section class=\"mb-12\">
<h1 class=\"text-4xl font-bold text-gray-900 mb-8\">Découvrez nos plus rapide recettes</h1>
<div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6\">
{% for recette in recetteRapide %}
<div class=\"bg-white rounded-lg shadow-sm p-6 hover:shadow-md transition-shadow\">
<img src=\"{{recette.image}}\" alt=\"Pâtes\" class=\"w-full h-48 object-cover rounded-lg mb-4\">
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
<p class=\"text-sm text-gray-600 mb-4\">Par Chef {{recette.utilisateur.prenom}} {{recette.utilisateur.nom}}</p>
<div class=\"flex items-center justify-between text-sm text-gray-600\">
<span><i class=\"ri-time-line mr-1\"></i> {{ recette.tempsDePreparation|date('H:i') }} minutes</span>
<span><i class=\"ri-user-line mr-1\"></i> {{recette.nombrePortions}}</span>
<span><i class=\"ri-award-line mr-1\"></i> {{recette.difficulte}}</span>
</div>
</div>
{% endfor %}
</div>
</section>
  {# section de categories #}
<section class=\"mb-12\">
<div class=\"grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4\">
<a href=\"#\" class=\"bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow\">
<div class=\"w-12 h-12 mx-auto mb-2 flex items-center justify-center text-primary\">
<i class=\"ri-restaurant-line text-2xl\"></i>
</div>
<span class=\"text-gray-700\">Entrées</span>
</a>
<a href=\"#\" class=\"bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow\">
<div class=\"w-12 h-12 mx-auto mb-2 flex items-center justify-center text-primary\">
<i class=\"ri-bowl-line text-2xl\"></i>
</div>
<span class=\"text-gray-700\">Plats</span>
</a>
<a href=\"#\" class=\"bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow\">
<div class=\"w-12 h-12 mx-auto mb-2 flex items-center justify-center text-primary\">
<i class=\"ri-cake-line text-2xl\"></i>
</div>
<span class=\"text-gray-700\">Desserts</span>
</a>
<a href=\"#\" class=\"bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow\">
<div class=\"w-12 h-12 mx-auto mb-2 flex items-center justify-center text-primary\">
<i class=\"ri-plant-line text-2xl\"></i>
</div>
<span class=\"text-gray-700\">Végétarien</span>
</a>
<a href=\"#\" class=\"bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow\">
<div class=\"w-12 h-12 mx-auto mb-2 flex items-center justify-center text-primary\">
<i class=\"ri-timer-line text-2xl\"></i>
</div>
<span class=\"text-gray-700\">Rapide</span>
</a>
<a href=\"#\" class=\"bg-white rounded-lg p-4 text-center hover:shadow-md transition-shadow\">
<div class=\"w-12 h-12 mx-auto mb-2 flex items-center justify-center text-primary\">
<i class=\"ri-global-line text-2xl\"></i>
</div>
<span class=\"text-gray-700\">Du Monde</span>
</a>
</div>
</section>

{#  #}
<section class=\"mb-12\">
<div class=\"flex justify-between items-center mb-6\">
<h2 class=\"text-2xl font-bold text-gray-900\">Dernières recettes</h2>
<a href=\"#\" class=\"text-primary hover:text-primary-dark\">Voir tout</a>
</div>
<div class=\"grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6\">
 {% for recette in recettes %}
<div class=\"bg-white rounded-lg shadow-sm overflow-hidden\">
<img src=\"{{recette.image}}\" alt=\"Pizza\" class=\"w-full h-48 object-cover\">
<div class=\"p-4\">
<h3 class=\"text-lg font-semibold mb-2\">{{recette.titre}}</h3>
<p class=\"text-sm text-gray-600 mb-4\">{{recette.description}}</p>
<div class=\"flex items-center justify-between\">
<div class=\"flex items-center\">
<img src=\"{{recette.utilisateur.photo}}\" alt=\"Chef\" class=\"w-8 h-8 rounded-full mr-2\">
<span class=\"text-sm text-gray-600\">{{recette.utilisateur.prenom}} {{recette.utilisateur.nom}}</span>
</div>
<span class=\"text-sm text-gray-500\">Il y a 2 heures</span>
</div>
</div>
</div>
{% endfor %}
</div>
</section>
</main>
{% endblock %}

  
{# <div class=\"search-section\">
  <h1>Trouver une recette !</h1>
  <p>Dénichez la recette idéale en saisissant un nom d'ingrédient ou de recette !</p> #}

  {# <form class=\"search-bar\" id=\"searchForm\">
    <div class=\"input-group\">
      <input id=\"btn-recherche-ajax\" type=\"text\" class=\"form-control\" placeholder=\"Recette ou ingrédients...\" aria-label=\"Recette ou ingrédients\" id=\"searchInput\">
      <div class=\"input-group-append\">
        <button class=\"btn btn-outline-secondary\">🔍</button>
      </div>
    </div>
  </form> #}

  {# {{ form_start(form, { attr: {'id':'form_recherche'} })}}
  {{ form_widget(form)}}
        <button class=\"btn btn-outline-secondary\">🔍</button>
  {{ form_start(form)}}
 </div>

  <div id=\"divResultats\">
  </div>

  {# <div id=\"results\" style=\"margin-top: 20px;\"></div> <!-- Div pour afficher les résultats --> #}
{# </div> #}", "acceuil/index.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\acceuil\\index.html.twig");
    }
}
