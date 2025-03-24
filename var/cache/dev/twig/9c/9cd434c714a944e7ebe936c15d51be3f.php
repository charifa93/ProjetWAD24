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

/* /includes/navBootstrap.html.twig */
class __TwigTemplate_f6a7da40618aa5e8e17fa3f0016c7af4 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/includes/navBootstrap.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/includes/navBootstrap.html.twig"));

        // line 1
        yield "<nav class=\"bg-white shadow-sm fixed w-full z-50\">
<div class=\"max-w-7xl mx-auto px-4\">
<div class=\"flex justify-between h-16\">
<div class=\"flex items-center\">
<a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\" data-readdy=\"true\" class=\"font-['Pacifico'] text-2xl text-primary\">logo</a>
<div class=\"hidden md:flex items-center space-x-8 ml-10\">
<a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\" data-readdy=\"true\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Accueil</a>
<a href=\"#\" class=\"text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-gray-100\">blog</a>
<a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_index");
        yield "\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Recettes</a>
";
        // line 10
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10)) {
            // line 11
            yield "<a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_recettes", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "id", [], "any", false, false, false, 11)]), "html", null, true);
            yield "\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Mes Recettes</a>
<a href=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_favoris", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "id", [], "any", false, false, false, 12)]), "html", null, true);
            yield "\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Mes Favoris</a>
";
        }
        // line 14
        yield "</div>
</div>
<div class=\"flex items-center space-x-4\">
<div class=\"relative\">
<input type=\"text\" placeholder=\"Rechercher une recette...\" class=\"w-64 px-4 py-2 pl-10 text-sm bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\">
<i class=\"ri-search-line absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400\"></i>
</div>
<a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_new");
        yield "\" class=\"p-2 rounded-full hover:bg-gray-100 relative\">
➕
<span class=\"absolute top-0 right-0 block h-2 w-2 rounded-full bg-primary\"></span>
</a>
";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25)) {
            // line 26
            yield "<div class=\"relative\">
";
            // line 27
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "user", [], "any", false, false, false, 27), "photo", [], "any", false, false, false, 27) != null)) {
                // line 28
                yield "<button onclick=\"toggleUserMenu()\" class=\"flex items-center space-x-3 p-2 rounded-full hover:bg-gray-100\">
<img src=\"";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29), "photo", [], "any", false, false, false, 29), "html", null, true);
                yield "\" class=\"w-8 h-8 rounded-full\">
<span class=\"text-sm font-medium text-gray-700\">";
                // line 30
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "nom", [], "any", false, false, false, 30), "html", null, true);
                yield " ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "prenom", [], "any", false, false, false, 30), "html", null, true);
                yield "</span>
</button>
";
            } else {
                // line 33
                yield "<button onclick=\"toggleUserMenu()\" class=\"flex items-center space-x-3 p-2 rounded-full hover:bg-gray-100\">
<i class=\"ri-user-line text-xl\"></i>
</button>
";
            }
            // line 37
            yield "<div id=\"userMenu\" class=\"hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-1\">
<a href=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38)]), "html", null, true);
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Mon Profil</a>
<a href=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_utilisateur_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "user", [], "any", false, false, false, 39), "id", [], "any", false, false, false, 39)]), "html", null, true);
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Paramètres</a>
<a href=\"";
            // line 40
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Déconnexion</a>
";
        } else {
            // line 42
            yield "<button  onclick=\"window.location.href='";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "'\" class=\"px-6 py-2 bg-primary text-white font-medium !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap\">Se connecter
</button>
";
        }
        // line 45
        yield "</div>
</div>
</div>
</div>
</div>
</nav>
<script>
function toggleUserMenu() {
const menu = document.getElementById('userMenu');
menu.classList.toggle('hidden');
}
function toggleFilters() {
const filters = document.getElementById('filters');
filters.classList.toggle('hidden');
}
document.addEventListener('click', function(event) {
const menu = document.getElementById('userMenu');
const button = event.target.closest('button');
if (!button && !menu.contains(event.target)) {
menu.classList.add('hidden');
}
});
</script>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "/includes/navBootstrap.html.twig";
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
        return array (  147 => 45,  140 => 42,  135 => 40,  131 => 39,  127 => 38,  124 => 37,  118 => 33,  110 => 30,  106 => 29,  103 => 28,  101 => 27,  98 => 26,  96 => 25,  89 => 21,  80 => 14,  75 => 12,  70 => 11,  68 => 10,  64 => 9,  59 => 7,  54 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<nav class=\"bg-white shadow-sm fixed w-full z-50\">
<div class=\"max-w-7xl mx-auto px-4\">
<div class=\"flex justify-between h-16\">
<div class=\"flex items-center\">
<a href=\"{{ path('accueil') }}\" data-readdy=\"true\" class=\"font-['Pacifico'] text-2xl text-primary\">logo</a>
<div class=\"hidden md:flex items-center space-x-8 ml-10\">
<a href=\"{{ path('accueil') }}\" data-readdy=\"true\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Accueil</a>
<a href=\"#\" class=\"text-gray-900 px-3 py-2 rounded-md text-sm font-medium transition-all duration-300 hover:bg-gray-100\">blog</a>
<a href=\"{{ path('app_recette_index')}}\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Recettes</a>
{% if app.user %}
<a href=\"{{ path('app_utilisateur_recettes', {'id': app.user.id})}}\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Mes Recettes</a>
<a href=\"{{ path('app_utilisateur_favoris', {'id': app.user.id})}}\" class=\"text-gray-500 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium\">Mes Favoris</a>
{% endif %}
</div>
</div>
<div class=\"flex items-center space-x-4\">
<div class=\"relative\">
<input type=\"text\" placeholder=\"Rechercher une recette...\" class=\"w-64 px-4 py-2 pl-10 text-sm bg-gray-100 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\">
<i class=\"ri-search-line absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400\"></i>
</div>
<a href=\"{{path('app_recette_new')}}\" class=\"p-2 rounded-full hover:bg-gray-100 relative\">
➕
<span class=\"absolute top-0 right-0 block h-2 w-2 rounded-full bg-primary\"></span>
</a>
{% if app.user %}
<div class=\"relative\">
{% if app.user.photo != null  %}
<button onclick=\"toggleUserMenu()\" class=\"flex items-center space-x-3 p-2 rounded-full hover:bg-gray-100\">
<img src=\"{{app.user.photo}}\" class=\"w-8 h-8 rounded-full\">
<span class=\"text-sm font-medium text-gray-700\">{{app.user.nom}} {{app.user.prenom}}</span>
</button>
{% else %}
<button onclick=\"toggleUserMenu()\" class=\"flex items-center space-x-3 p-2 rounded-full hover:bg-gray-100\">
<i class=\"ri-user-line text-xl\"></i>
</button>
{% endif %}
<div id=\"userMenu\" class=\"hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-1\">
<a href=\"{{ path('app_utilisateur_show', {'id': app.user.id}) }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Mon Profil</a>
<a href=\"{{ path('app_utilisateur_edit', {'id': app.user.id}) }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Paramètres</a>
<a href=\"{{ path('app_logout') }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Déconnexion</a>
{% else %}
<button  onclick=\"window.location.href='{{ path('app_login') }}'\" class=\"px-6 py-2 bg-primary text-white font-medium !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap\">Se connecter
</button>
{% endif %}
</div>
</div>
</div>
</div>
</div>
</nav>
<script>
function toggleUserMenu() {
const menu = document.getElementById('userMenu');
menu.classList.toggle('hidden');
}
function toggleFilters() {
const filters = document.getElementById('filters');
filters.classList.toggle('hidden');
}
document.addEventListener('click', function(event) {
const menu = document.getElementById('userMenu');
const button = event.target.closest('button');
if (!button && !menu.contains(event.target)) {
menu.classList.add('hidden');
}
});
</script>", "/includes/navBootstrap.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\includes\\navBootstrap.html.twig");
    }
}
