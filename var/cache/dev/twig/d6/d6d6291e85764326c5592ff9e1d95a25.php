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

/* includes/footer.html.twig */
class __TwigTemplate_bf5b117b9ab90a80d4084056dbdc474d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        // line 1
        yield "<footer class=\"bg-white border-t border-gray-200 mt-12\">
<div class=\"container mx-auto px-4 py-8\">
<div class=\"grid grid-cols-1 md:grid-cols-4 gap-8\">
<div>
<h3 class=\"text-lg font-semibold mb-4\">À propos</h3>
<ul class=\"space-y-2\">
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Qui sommes-nous</a></li>
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Notre équipe</a></li>
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Contactez-nous</a></li>
</ul>
</div>
<div>
<h3 class=\"text-lg font-semibold mb-4\">Recettes</h3>
<ul class=\"space-y-2\">
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Dernières recettes</a></li>
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Les plus populaires</a></li>
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Catégories</a></li>
</ul>
</div>
<div>
<h3 class=\"text-lg font-semibold mb-4\">Communauté</h3>
<ul class=\"space-y-2\">
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Forum</a></li>
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Blog</a></li>
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Événements</a></li>
</ul>
</div>
<div>
<h3 class=\"text-lg font-semibold mb-4\">Suivez-nous</h3>
<div class=\"flex space-x-4\">
<a href=\"#\" class=\"text-gray-600 hover:text-primary\">
<i class=\"ri-facebook-fill text-xl\"></i>
</a>
<a href=\"#\" class=\"text-gray-600 hover:text-primary\">
<i class=\"ri-instagram-fill text-xl\"></i>
</a>
<a href=\"#\" class=\"text-gray-600 hover:text-primary\">
<i class=\"ri-twitter-fill text-xl\"></i>
</a>
<a href=\"#\" class=\"text-gray-600 hover:text-primary\">
<i class=\"ri-pinterest-fill text-xl\"></i>
</a>
</div>
</div>
</div>
<div class=\"border-t border-gray-200 mt-8 pt-8 text-center text-sm text-gray-600\">
<p>&copy; 2025 Cuisine Connect. Tous droits réservés.</p>
</div>
</div>
</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "includes/footer.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer class=\"bg-white border-t border-gray-200 mt-12\">
<div class=\"container mx-auto px-4 py-8\">
<div class=\"grid grid-cols-1 md:grid-cols-4 gap-8\">
<div>
<h3 class=\"text-lg font-semibold mb-4\">À propos</h3>
<ul class=\"space-y-2\">
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Qui sommes-nous</a></li>
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Notre équipe</a></li>
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Contactez-nous</a></li>
</ul>
</div>
<div>
<h3 class=\"text-lg font-semibold mb-4\">Recettes</h3>
<ul class=\"space-y-2\">
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Dernières recettes</a></li>
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Les plus populaires</a></li>
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Catégories</a></li>
</ul>
</div>
<div>
<h3 class=\"text-lg font-semibold mb-4\">Communauté</h3>
<ul class=\"space-y-2\">
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Forum</a></li>
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Blog</a></li>
<li><a href=\"#\" class=\"text-gray-600 hover:text-primary\">Événements</a></li>
</ul>
</div>
<div>
<h3 class=\"text-lg font-semibold mb-4\">Suivez-nous</h3>
<div class=\"flex space-x-4\">
<a href=\"#\" class=\"text-gray-600 hover:text-primary\">
<i class=\"ri-facebook-fill text-xl\"></i>
</a>
<a href=\"#\" class=\"text-gray-600 hover:text-primary\">
<i class=\"ri-instagram-fill text-xl\"></i>
</a>
<a href=\"#\" class=\"text-gray-600 hover:text-primary\">
<i class=\"ri-twitter-fill text-xl\"></i>
</a>
<a href=\"#\" class=\"text-gray-600 hover:text-primary\">
<i class=\"ri-pinterest-fill text-xl\"></i>
</a>
</div>
</div>
</div>
<div class=\"border-t border-gray-200 mt-8 pt-8 text-center text-sm text-gray-600\">
<p>&copy; 2025 Cuisine Connect. Tous droits réservés.</p>
</div>
</div>
</footer>", "includes/footer.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\includes\\footer.html.twig");
    }
}
