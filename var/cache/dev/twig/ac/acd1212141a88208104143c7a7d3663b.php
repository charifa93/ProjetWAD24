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

/* includes/navbar.html.twig */
class __TwigTemplate_75b487be6dbe33677f5fd49c9be7e5b3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navbar.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/navbar.html.twig"));

        // line 1
        yield "
<nav class=\"container mx-auto px-4 py-4 flex items-center justify-between\">
<div class=\"flex items-center space-x-8\">
<a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\" class=\"text-3xl font-['Pacifico'] text-primary\">logo</a>
<div class=\"hidden md:flex space-x-6\">
<a href=\"";
        // line 6
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\" class=\"text-gray-600 hover:text-primary\" id=\"homeLink\">Accueil</a>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const homeLink = document.getElementById('homeLink');
  const isHomePage = window.location.pathname === '";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "';
  
  if(isHomePage) {
    homeLink.classList.remove('text-gray-600', 'hover:text-primary');
    homeLink.classList.add('text-primary', 'font-semibold', 'cursor-default');
    homeLink.addEventListener('click', (e) => {
      e.preventDefault();
    });
  }
});
</script>
<a href=\"";
        // line 21
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_index");
        yield "\" class=\"text-gray-600 hover:text-primary\">Recettes</a>
<a href=\"#\" class=\"text-gray-600 hover:text-primary\">Catégories</a>
<a href=\"#\" class=\"text-gray-600 hover:text-primary\">Communauté</a>
</div>
</div>
<div class=\"flex items-center space-x-4\">
<button id=\"searchToggle\" class=\"w-10 h-10 flex items-center justify-center text-gray-600 hover:text-primary\">
<i class=\"ri-search-line text-xl\"></i>
</button>
<button
";
        // line 31
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31)) {
            // line 32
            yield "<div class=\"relative\" id=\"userMenu\">
<button class=\"w-10 h-10 flex items-center justify-center text-gray-600 hover:text-primary\">
<i class=\"ri-user-line text-xl\"></i>
</button>
\t
<div class=\"hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1\" id=\"userDropdown\">
<a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Mon Profil</a>
<a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Mes Recettes</a>
<a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Favoris</a>
<a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Liste de courses</a>
<hr class=\"my-1\">
<a href=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Déconnexion</a>
</div>
";
        } else {
            // line 46
            yield "<button  onclick=\"window.location.href='";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "'\" class=\"px-6 py-2 bg-primary text-white font-medium !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap\">Se connecter
</button>
";
        }
        // line 49
        yield "</div>
</div>
</nav>
<script>
document.getElementById('userMenu').addEventListener('click', function() {
document.getElementById('userDropdown').classList.toggle('hidden');
});

document.addEventListener('click', function(event) {
const userMenu = document.getElementById('userMenu');
const userDropdown = document.getElementById('userDropdown');
if (!userMenu.contains(event.target) && !userDropdown.classList.contains('hidden')) {
userDropdown.classList.add('hidden');
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
        return "includes/navbar.html.twig";
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
        return array (  120 => 49,  113 => 46,  107 => 43,  94 => 32,  92 => 31,  79 => 21,  65 => 10,  58 => 6,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<nav class=\"container mx-auto px-4 py-4 flex items-center justify-between\">
<div class=\"flex items-center space-x-8\">
<a href=\"{{ path('accueil') }}\" class=\"text-3xl font-['Pacifico'] text-primary\">logo</a>
<div class=\"hidden md:flex space-x-6\">
<a href=\"{{ path('accueil') }}\" class=\"text-gray-600 hover:text-primary\" id=\"homeLink\">Accueil</a>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const homeLink = document.getElementById('homeLink');
  const isHomePage = window.location.pathname === '{{ path('accueil') }}';
  
  if(isHomePage) {
    homeLink.classList.remove('text-gray-600', 'hover:text-primary');
    homeLink.classList.add('text-primary', 'font-semibold', 'cursor-default');
    homeLink.addEventListener('click', (e) => {
      e.preventDefault();
    });
  }
});
</script>
<a href=\"{{ path('app_recette_index')}}\" class=\"text-gray-600 hover:text-primary\">Recettes</a>
<a href=\"#\" class=\"text-gray-600 hover:text-primary\">Catégories</a>
<a href=\"#\" class=\"text-gray-600 hover:text-primary\">Communauté</a>
</div>
</div>
<div class=\"flex items-center space-x-4\">
<button id=\"searchToggle\" class=\"w-10 h-10 flex items-center justify-center text-gray-600 hover:text-primary\">
<i class=\"ri-search-line text-xl\"></i>
</button>
<button
{% if app.user %}
<div class=\"relative\" id=\"userMenu\">
<button class=\"w-10 h-10 flex items-center justify-center text-gray-600 hover:text-primary\">
<i class=\"ri-user-line text-xl\"></i>
</button>
\t
<div class=\"hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1\" id=\"userDropdown\">
<a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Mon Profil</a>
<a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Mes Recettes</a>
<a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Favoris</a>
<a href=\"#\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Liste de courses</a>
<hr class=\"my-1\">
<a href=\"{{ path ('app_logout') }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Déconnexion</a>
</div>
{% else %}
<button  onclick=\"window.location.href='{{ path('app_login') }}'\" class=\"px-6 py-2 bg-primary text-white font-medium !rounded-button hover:bg-opacity-90 transition-colors whitespace-nowrap\">Se connecter
</button>
{% endif %}
</div>
</div>
</nav>
<script>
document.getElementById('userMenu').addEventListener('click', function() {
document.getElementById('userDropdown').classList.toggle('hidden');
});

document.addEventListener('click', function(event) {
const userMenu = document.getElementById('userMenu');
const userDropdown = document.getElementById('userDropdown');
if (!userMenu.contains(event.target) && !userDropdown.classList.contains('hidden')) {
userDropdown.classList.add('hidden');
}
});
</script>", "includes/navbar.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\includes\\navbar.html.twig");
    }
}
