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

/* security/login.html.twig */
class __TwigTemplate_d3b56600648389ba9c43e0c929495189 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        // line 1
        yield "
<form id=\"loginForm\" action=\"";
        // line 2
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" method=\"post\" class=\"w-full min-w-full px-8\">
    ";
        // line 4
        yield "    ";
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 4, $this->source); })())) {
            // line 5
            yield "        <div class=\"mb-4 text-red-500 text-sm\">
            ";
            // line 6
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "messageKey", [], "any", false, false, false, 6), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 6, $this->source); })()), "messageData", [], "any", false, false, false, 6), "security"), "html", null, true);
            yield "
        </div>
    ";
        }
        // line 9
        yield "
    <div class=\"mb-6\">
        <div class=\"relative\">
            <i class=\"ri-mail-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\"></i>
            <input 
                type=\"email\" 
                name=\"_username\" 
                value=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 16, $this->source); })()), "html", null, true);
        yield "\" 
                placeholder=\"Email\" 
                class=\"w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary\" 
                required
            >
        </div>
    </div>

    <div class=\"mb-6\">
        <div class=\"relative\">
            <i class=\"ri-lock-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\"></i>
            <input 
                type=\"password\" 
                name=\"_password\" 
                placeholder=\"Mot de passe\" 
                class=\"w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary\" 
                required
            >
            <button type=\"button\" class=\"absolute right-4 top-1/2 -translate-y-1/2 text-gray-400\" onclick=\"togglePassword(this)\">
                <i class=\"ri-eye-line\"></i>
            </button>
        </div>
    </div>

    ";
        // line 51
        yield "
    ";
        // line 53
        yield "    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">

    <button type=\"submit\" class=\"w-full py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary/90 transition-colors !rounded-button\">
        Se connecter
    </button>
</form>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "security/login.html.twig";
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
        return array (  106 => 53,  103 => 51,  76 => 16,  67 => 9,  61 => 6,  58 => 5,  55 => 4,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<form id=\"loginForm\" action=\"{{ path('app_login') }}\" method=\"post\" class=\"w-full min-w-full px-8\">
    {# Affiche une erreur si l'identification échoue #}
    {% if error %}
        <div class=\"mb-4 text-red-500 text-sm\">
            {{ error.messageKey|trans(error.messageData, 'security') }}
        </div>
    {% endif %}

    <div class=\"mb-6\">
        <div class=\"relative\">
            <i class=\"ri-mail-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\"></i>
            <input 
                type=\"email\" 
                name=\"_username\" 
                value=\"{{ last_username }}\" 
                placeholder=\"Email\" 
                class=\"w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary\" 
                required
            >
        </div>
    </div>

    <div class=\"mb-6\">
        <div class=\"relative\">
            <i class=\"ri-lock-line absolute left-4 top-1/2 -translate-y-1/2 text-gray-400\"></i>
            <input 
                type=\"password\" 
                name=\"_password\" 
                placeholder=\"Mot de passe\" 
                class=\"w-full px-12 py-3 border border-gray-200 rounded-lg focus:outline-none focus:border-primary\" 
                required
            >
            <button type=\"button\" class=\"absolute right-4 top-1/2 -translate-y-1/2 text-gray-400\" onclick=\"togglePassword(this)\">
                <i class=\"ri-eye-line\"></i>
            </button>
        </div>
    </div>

    {# <div class=\"flex items-center justify-between mb-6\">
        <label class=\"flex items-center cursor-pointer\">
            <input 
                type=\"checkbox\" 
                name=\"_remember_me\" 
                class=\"w-4 h-4 rounded border-gray-300 text-primary focus:ring-primary\"
            >
            <span class=\"ml-2 text-sm text-gray-600\">Se souvenir de moi</span>
        </label>
        <a href=\"{{ path('app_forgot_password') }}\" class=\"text-sm text-primary hover:underline\">Mot de passe oublié?</a>
    </div> #}

    {# CSRF Token #}
    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">

    <button type=\"submit\" class=\"w-full py-3 bg-primary text-white font-medium rounded-lg hover:bg-primary/90 transition-colors !rounded-button\">
        Se connecter
    </button>
</form>", "security/login.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\security\\login.html.twig");
    }
}
