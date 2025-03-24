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

/* includes/nav.html.twig */
class __TwigTemplate_f4549de05094c7b780f7b3131dcf6272 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/nav.html.twig"));

        // line 2
        yield "<nav class=\"navbar bg-body-tertiary\">
\t<div class=\"container-fluid\">
\t<a href=\"";
        // line 4
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        yield "\">Acceuil</a>
\t<a href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_index");
        yield "\">les recettes</a>

\t";
        // line 8
        yield "\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
            // line 9
            yield "\t\t<a href=\"\">Option 3 admin</a>
\t\t<a href=\"\">Option 4 admin</a>
\t";
        }
        // line 12
        yield "
\t";
        // line 15
        yield "\t";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 16
            yield "\t\t<a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_new");
            yield "\">ajouterRecette</a>
\t\t
\t\t
\t\t";
            // line 20
            yield "\t\t
\t";
        }
        // line 22
        yield "
\t";
        // line 23
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            yield "\t\tConnecté:
\t\t";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "prenom", [], "any", false, false, false, 25), "html", null, true);
            yield "
\t\t";
            // line 28
            yield "\t\t<a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\">Logout</a>
\t";
        } else {
            // line 30
            yield "\t\t<a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\">Login</a>
\t";
        }
        // line 32
        yield "\t
\t 
\t\t</div>
\t  



\t\t
</nav>

\t
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
        return "includes/nav.html.twig";
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
        return array (  110 => 32,  104 => 30,  98 => 28,  94 => 25,  91 => 24,  89 => 23,  86 => 22,  82 => 20,  75 => 16,  72 => 15,  69 => 12,  64 => 9,  61 => 8,  56 => 5,  52 => 4,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# navigation, pour toutes les pages  #}
<nav class=\"navbar bg-body-tertiary\">
\t<div class=\"container-fluid\">
\t<a href=\"{{ path('accueil') }}\">Acceuil</a>
\t<a href=\"{{ path('app_recette_index')}}\">les recettes</a>

\t{# liens pour l'admin  #}
\t{% if is_granted ('ROLE_ADMIN') %}
\t\t<a href=\"\">Option 3 admin</a>
\t\t<a href=\"\">Option 4 admin</a>
\t{% endif %}

\t{# liens pour les users connectés,
\t\t\t\tpeu importe le role #}
\t{% if is_granted ('ROLE_USER') %}
\t\t<a href=\"{{ path('app_recette_new')}}\">ajouterRecette</a>
\t\t
\t\t
\t\t{# <a href=\"{{ path('modifier')}}\">AfficherRecettes</a> #}
\t\t
\t{% endif %}

\t{% if app.user %}
\t\tConnecté:
\t\t{{ app.user.prenom}}
\t\t{# et toutes les options dispo
\t\t                uniquement avec connexion #}
\t\t<a href=\"{{ path ('app_logout') }}\">Logout</a>
\t{% else %}
\t\t<a href=\"{{ path ('app_login') }}\">Login</a>
\t{% endif %}
\t
\t 
\t\t</div>
\t  



\t\t
</nav>

\t
", "includes/nav.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\includes\\nav.html.twig");
    }
}
