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

/* recette/show.html.twig */
class __TwigTemplate_eead9aeb6468e9bf36a889bdfefdc753 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "recette/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "recette/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 3, $this->source); })()), "titre", [], "any", false, false, false, 3), "html", null, true);
        yield " - Cuisine Connect";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 10
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

        // line 11
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
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

        yield "   

<main class=\"container mx-auto px-4 py-8 bg-gray-50 min-h-screen\">
  <div class=\"flex flex-col lg:flex-row gap-8\">
    <div class=\"lg:w-2/3\">
      <nav class=\"flex mb-4\" aria-label=\"Breadcrumb\">
        <ol class=\"inline-flex items-center space-x-1 md:space-x-3\">
          <li class=\"inline-flex items-center\">
            <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_index");
        yield "\" class=\"text-gray-600 hover:text-primary\">Recettes</a>
          </li>
          <li>
            <div class=\"flex items-center\">
              <i class=\"ri-arrow-right-s-line text-gray-400\"></i>
              <span class=\"ml-1 text-gray-500\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 28, $this->source); })()), "titre", [], "any", false, false, false, 28), "html", null, true);
        yield "</span>
            </div>
          </li>
        </ol>
      </nav>

      <div class=\"bg-white rounded-lg shadow-sm overflow-hidden mb-8\">
        <div class=\"relative\">
          <img src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 36, $this->source); })()), "image", [], "any", false, false, false, 36), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 36, $this->source); })()), "titre", [], "any", false, false, false, 36), "html", null, true);
        yield "\" class=\"w-full h-[500px] object-cover\">
          <div class=\"absolute bottom-0 left-0 right-0 recipe-info p-6\">
            <h1 class=\"text-3xl font-bold text-gray-900 mb-4\">";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 38, $this->source); })()), "titre", [], "any", false, false, false, 38), "html", null, true);
        yield "</h1>
            <div class=\"flex flex-wrap items-center gap-6 text-sm\">
              <div class=\"flex items-center\">
                <i class=\"ri-time-line mr-2 text-primary\"></i>
                <span>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 42, $this->source); })()), "tempsDePreparation", [], "any", false, false, false, 42), "H:i"), "html", null, true);
        yield " minutes</span>
              </div>
              <div class=\"flex items-center\">
                <i class=\"ri-user-3-line mr-2 text-primary\"></i>
                <span>";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 46, $this->source); })()), "nombrePortions", [], "any", false, false, false, 46), "html", null, true);
        yield " personnes</span>
              </div>
              <div class=\"flex items-center\">
                <i class=\"ri-award-line mr-2 text-primary\"></i>
                <span>Difficulté : ";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 50, $this->source); })()), "difficulte", [], "any", false, false, false, 50), "html", null, true);
        yield "</span>
              </div>
              <div class=\"flex items-center\">
                <div class=\"flex text-yellow-400\">
                  <i class=\"ri-star-fill\"></i>
                  <i class=\"ri-star-fill\"></i>
                  <i class=\"ri-star-fill\"></i>
                  <i class=\"ri-star-fill\"></i>
                  <i class=\"ri-star-half-fill\"></i>
                </div>
                <span class=\"ml-2\">(";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 60, $this->source); })()), "recettesNote", [], "any", false, false, false, 60)), "html", null, true);
        yield " avis)</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"bg-white rounded-lg shadow-sm p-6 mb-8\">
        <h2 class=\"text-xl font-semibold mb-6\">Description</h2>
        <p class=\"text-gray-600 leading-relaxed\">";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 69, $this->source); })()), "description", [], "any", false, false, false, 69), "html", null, true);
        yield "</p>
      </div>

      <div class=\"bg-white rounded-lg shadow-sm p-6 mb-8\">
        <h2 class=\"text-xl font-semibold mb-6\">Instructions de préparation</h2>
        <div class=\"space-y-6\">
          ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 75, $this->source); })()), "etapes", [], "any", false, false, false, 75));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["etape"]) {
            // line 76
            yield "            <div class=\"flex items-start\">
              <div class=\"w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary font-semibold mr-4 flex-shrink-0\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 77), "html", null, true);
            yield "</div>
              <div>
                <h3 class=\"font-medium mb-2\">";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "titre", [], "any", false, false, false, 79), "html", null, true);
            yield "</h3>
                <p class=\"text-gray-600\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["etape"], "description", [], "any", false, false, false, 80), "html", null, true);
            yield "</p>
              </div>
            </div>
          ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['etape'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 84
        yield "        </div>
      </div>
      ";
        // line 87
        yield "      <div class=\"bg-white rounded-lg shadow-sm p-6 mb-8\">
        <h2 class=\"text-xl font-semibold mb-6\">Commentaires (";
        // line 88
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 88, $this->source); })()), "recetteCom", [], "any", false, false, false, 88)), "html", null, true);
        yield ")</h2>
        ";
        // line 89
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 89, $this->source); })()), "user", [], "any", false, false, false, 89)) {
            yield " 
        ";
            // line 90
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 90, $this->source); })()), 'form_start', ["attr" => ["id" => "commentForm"]]);
            yield "
          <div class=\"mb-4\">
            <div class=\"flex text-yellow-400 mb-2\">
              <i class=\"ri-star-line cursor-pointer hover:text-yellow-500\" data-rating=\"1\"></i>
              <i class=\"ri-star-line cursor-pointer hover:text-yellow-500\" data-rating=\"2\"></i>
              <i class=\"ri-star-line cursor-pointer hover:text-yellow-500\" data-rating=\"3\"></i>
              <i class=\"ri-star-line cursor-pointer hover:text-yellow-500\" data-rating=\"4\"></i>
              <i class=\"ri-star-line cursor-pointer hover:text-yellow-500\" data-rating=\"5\"></i>
            </div>
            ";
            // line 100
            yield "            ";
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 100, $this->source); })()), "contenu", [], "any", false, false, false, 100), 'row', ["attr" => ["class" => "w-full p-3 border border-gray-200 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary"]]);
            yield "
          </div>
          <button type=\"submit\" class=\"bg-primary text-white px-6 py-2 rounded-button hover:bg-primary/90 transition-colors\">
            Publier
          </button>
        ";
            // line 105
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentaireForm"]) || array_key_exists("commentaireForm", $context) ? $context["commentaireForm"] : (function () { throw new RuntimeError('Variable "commentaireForm" does not exist.', 105, $this->source); })()), 'form_end');
            yield "
         ";
        }
        // line 107
        yield "        <div class=\"space-y-6 mt-6\">
          ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["recette"]) || array_key_exists("recette", $context) ? $context["recette"] : (function () { throw new RuntimeError('Variable "recette" does not exist.', 108, $this->source); })()), "recetteCom", [], "any", false, false, false, 108));
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 109
            yield "            <div class=\"flex items-start gap-4\">
              ";
            // line 111
            yield "              <div class=\"flex-1\">
                <div class=\"flex items-center mb-2\">
                  ";
            // line 114
            yield "                  <div class=\"flex text-yellow-400\">
                    <i class=\"ri-star-fill\"></i><i class=\"ri-star-fill\"></i><i class=\"ri-star-fill\"></i><i class=\"ri-star-fill\"></i><i class=\"ri-star-fill\"></i>
                  </div>
                </div>
                <p class=\"text-gray-600 mb-2\">";
            // line 118
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contenu", [], "any", false, false, false, 118), "html", null, true);
            yield "</p>
                <div class=\"flex items-center text-sm text-gray-500\">
                  <span>";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "dateCommentaire", [], "any", false, false, false, 120), "d-m-Y"), "html", null, true);
            yield "</span>
                </div>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "        </div>
      </div>
    </div>

    <!-- Ingrédients -->
     <div class=\"lg:w-1/3\">
      <div class=\"bg-white rounded-lg shadow-sm p-6 mb-8 sticky top-4\">
        ";
        // line 133
        yield "        <div class=\"flex items-center justify-between mb-6\">
        <h2 class=\"text-xl font-semibold\">Ingrédients</h2>
        <div class=\"relative\">
        <button id=\"servingsButton\" class=\"flex items-center space-x-2 text-gray-600 hover:text-primary\">
        <span>6 personnes</span>
        <i class=\"ri-arrow-down-s-line\"></i>
        </button>
        <div id=\"servingsDropdown\" class=\"hidden absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg py-1 z-50\">
        <button class=\"block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100\">2 personnes</button>
        <button class=\"block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100\">4 personnes</button>
        <button class=\"block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100\">6 personnes</button>
        <button class=\"block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100\">8 personnes</button>
        </div>
        </div>
        </div>
        <div class=\"space-y-3\">
          ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ingredients"]) || array_key_exists("ingredients", $context) ? $context["ingredients"] : (function () { throw new RuntimeError('Variable "ingredients" does not exist.', 149, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 150
            yield "            <label class=\"flex items-center\">
              <input type=\"checkbox\" class=\"ingredient-checkbox hidden\" name=\"ingredient\">
              <span class=\"w-5 h-5 border border-gray-300 rounded mr-3 flex items-center justify-center\">
                <i class=\"ri-check-line text-primary hidden\"></i>
              </span>
              <span class=\"text-gray-700\">";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "quantite", [], "any", false, false, false, 155), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "uniteMesure", [], "any", false, false, false, 155), "html", null, true);
            yield " : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "ingredient", [], "any", false, false, false, 155), "nom", [], "any", false, false, false, 155), "html", null, true);
            yield "</span>
            </label>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        yield "        </div>
      </div>
    </div> 
  </div>
  </div>
<div class=\"bg-white rounded-lg shadow-sm p-6 mt-8\">
<h2 class=\"text-xl font-semibold mb-6\">Recettes similaires</h2>
<div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
";
        // line 166
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recettesSimilaires"]) || array_key_exists("recettesSimilaires", $context) ? $context["recettesSimilaires"] : (function () { throw new RuntimeError('Variable "recettesSimilaires" does not exist.', 166, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 167
            yield "<div class=\"group cursor-pointer\">
<img src=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "image", [], "any", false, false, false, 168), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 168), "html", null, true);
            yield "\" class=\"w-full h-40 object-cover rounded-lg mb-3\">
<h3 class=\"font-medium group-hover:text-primary transition-colors\">";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 169), "html", null, true);
            yield "</h3>
<div class=\"text-sm text-gray-600\">";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsDePreparation", [], "any", false, false, false, 170), "H:i"), "html", null, true);
            yield " min · ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "difficulte", [], "any", false, false, false, 170), "html", null, true);
            yield "</div>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 173
        yield "</div>
</div>
</main>


<!-- Script pour étoiles et interactions -->
<script>
document.getElementById('servingsButton').addEventListener('click', function() {
document.getElementById('servingsDropdown').classList.toggle('hidden');
});
document.addEventListener('click', function(event) {
const servingsButton = document.getElementById('servingsButton');
const servingsDropdown = document.getElementById('servingsDropdown');
if (!servingsButton.contains(event.target) && !servingsDropdown.classList.contains('hidden')) {
servingsDropdown.classList.add('hidden');
}
});
document.querySelectorAll('.ingredient-checkbox').forEach(checkbox => {
checkbox.addEventListener('change', function() {
const checkIcon = this.nextElementSibling.querySelector('.ri-check-line');
if (this.checked) {
checkIcon.classList.remove('hidden');
this.nextElementSibling.classList.add('bg-primary/10', 'border-primary');
} else {
checkIcon.classList.add('hidden');
this.nextElementSibling.classList.remove('bg-primary/10', 'border-primary');
}
});
});
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
const ratingStars = document.querySelectorAll('[data-rating]');
let currentRating = 0;
ratingStars.forEach(star => {
  star.addEventListener('mouseover', function() {
    const rating = parseInt(this.dataset.rating);
    updateStars(rating, 'hover');
  });
  
  star.addEventListener('mouseout', function() {
    updateStars(currentRating, 'current');
  });
  
  star.addEventListener('click', function() {
    currentRating = parseInt(this.dataset.rating);
    updateStars(currentRating, 'current');
  });
});
function updateStars(rating, type) {
  ratingStars.forEach(star => {
    const starRating = parseInt(star.dataset.rating);
    if (type === 'hover') {
      if (starRating <= rating) {
        star.classList.remove('ri-star-line');
        star.classList.add('ri-star-fill');
      } else {
        star.classList.remove('ri-star-fill');
        star.classList.add('ri-star-line');
      }
    } else {
      if (starRating <= rating) {
        star.classList.remove('ri-star-line');
        star.classList.add('ri-star-fill');
      } else {
        star.classList.remove('ri-star-fill');
        star.classList.add('ri-star-line');
      }
    }
  });
}
document.getElementById('commentForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  if (currentRating === 0) {
    const ratingError = document.createElement('div');
    ratingError.className = 'text-red-500 text-sm mt-2';
    ratingError.textContent = 'Veuillez sélectionner une note';
    this.querySelector('.flex-1').appendChild(ratingError);
    setTimeout(() => ratingError.remove(), 3000);
    return;
  }
  
  const comment = this.querySelector('textarea').value.trim();
  if (!comment) {
    const commentError = document.createElement('div');
    commentError.className = 'text-red-500 text-sm mt-2';
    commentError.textContent = 'Veuillez écrire un commentaire';
    this.querySelector('.flex-1').appendChild(commentError);
    setTimeout(() => commentError.remove(), 3000);
    return;
  }
  
  const newComment = document.createElement('div');
  newComment.className = 'flex items-start gap-4';
  newComment.innerHTML = `
    <img src=\"https://public.readdy.ai/ai/img_res/eb28e1ada4a5df4b32971245ea3c79cf.jpg\" alt=\"User\" class=\"w-10 h-10 rounded-full\">
    <div class=\"flex-1\">
      <div class=\"flex items-center mb-2\">
        <h3 class=\"font-medium mr-2\">Vous</h3>
        <div class=\"flex text-yellow-400\">
          \${Array(currentRating).fill('<i class=\"ri-star-fill\"></i>').join('')}
          \${Array(5-currentRating).fill('<i class=\"ri-star-line\"></i>').join('')}
        </div>
      </div>
      <p class=\"text-gray-600 mb-2\">\${comment}</p>
      <div class=\"flex items-center text-sm text-gray-500\">
        <span>À l'instant</span>
        <button class=\"ml-4 hover:text-primary\">Répondre</button>
      </div>
    </div>
  `;
  
  const commentsContainer = document.querySelector('.space-y-6');
  commentsContainer.insertBefore(newComment, commentsContainer.firstChild);
  
  this.querySelector('textarea').value = '';
  currentRating = 0;
  updateStars(0, 'current');
  
  const successMessage = document.createElement('div');
  successMessage.className = 'text-green-500 text-sm mt-2';
  successMessage.textContent = 'Votre commentaire a été publié';
  this.querySelector('.flex-1').appendChild(successMessage);
  setTimeout(() => successMessage.remove(), 3000);
});
</script>
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
        return "recette/show.html.twig";
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
        return array (  460 => 173,  449 => 170,  445 => 169,  439 => 168,  436 => 167,  432 => 166,  422 => 158,  409 => 155,  402 => 150,  398 => 149,  380 => 133,  371 => 125,  360 => 120,  355 => 118,  349 => 114,  345 => 111,  342 => 109,  338 => 108,  335 => 107,  330 => 105,  321 => 100,  309 => 90,  305 => 89,  301 => 88,  298 => 87,  294 => 84,  276 => 80,  272 => 79,  267 => 77,  264 => 76,  247 => 75,  238 => 69,  226 => 60,  213 => 50,  206 => 46,  199 => 42,  192 => 38,  185 => 36,  174 => 28,  166 => 23,  144 => 15,  130 => 11,  117 => 10,  103 => 6,  90 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ recette.titre }} - Cuisine Connect{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {# {{ encore_entry_script_tags ('showRecette') }} #}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# {{ encore_entry_link_tags ('showRecette') }}\t\t #}
{% endblock %}

{% block body %}   

<main class=\"container mx-auto px-4 py-8 bg-gray-50 min-h-screen\">
  <div class=\"flex flex-col lg:flex-row gap-8\">
    <div class=\"lg:w-2/3\">
      <nav class=\"flex mb-4\" aria-label=\"Breadcrumb\">
        <ol class=\"inline-flex items-center space-x-1 md:space-x-3\">
          <li class=\"inline-flex items-center\">
            <a href=\"{{ path('app_recette_index') }}\" class=\"text-gray-600 hover:text-primary\">Recettes</a>
          </li>
          <li>
            <div class=\"flex items-center\">
              <i class=\"ri-arrow-right-s-line text-gray-400\"></i>
              <span class=\"ml-1 text-gray-500\">{{ recette.titre }}</span>
            </div>
          </li>
        </ol>
      </nav>

      <div class=\"bg-white rounded-lg shadow-sm overflow-hidden mb-8\">
        <div class=\"relative\">
          <img src=\"{{ recette.image }}\" alt=\"{{ recette.titre }}\" class=\"w-full h-[500px] object-cover\">
          <div class=\"absolute bottom-0 left-0 right-0 recipe-info p-6\">
            <h1 class=\"text-3xl font-bold text-gray-900 mb-4\">{{ recette.titre }}</h1>
            <div class=\"flex flex-wrap items-center gap-6 text-sm\">
              <div class=\"flex items-center\">
                <i class=\"ri-time-line mr-2 text-primary\"></i>
                <span>{{ recette.tempsDePreparation|date('H:i') }} minutes</span>
              </div>
              <div class=\"flex items-center\">
                <i class=\"ri-user-3-line mr-2 text-primary\"></i>
                <span>{{ recette.nombrePortions }} personnes</span>
              </div>
              <div class=\"flex items-center\">
                <i class=\"ri-award-line mr-2 text-primary\"></i>
                <span>Difficulté : {{ recette.difficulte }}</span>
              </div>
              <div class=\"flex items-center\">
                <div class=\"flex text-yellow-400\">
                  <i class=\"ri-star-fill\"></i>
                  <i class=\"ri-star-fill\"></i>
                  <i class=\"ri-star-fill\"></i>
                  <i class=\"ri-star-fill\"></i>
                  <i class=\"ri-star-half-fill\"></i>
                </div>
                <span class=\"ml-2\">({{ recette.recettesNote|length }} avis)</span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class=\"bg-white rounded-lg shadow-sm p-6 mb-8\">
        <h2 class=\"text-xl font-semibold mb-6\">Description</h2>
        <p class=\"text-gray-600 leading-relaxed\">{{ recette.description }}</p>
      </div>

      <div class=\"bg-white rounded-lg shadow-sm p-6 mb-8\">
        <h2 class=\"text-xl font-semibold mb-6\">Instructions de préparation</h2>
        <div class=\"space-y-6\">
          {% for etape in recette.etapes %}
            <div class=\"flex items-start\">
              <div class=\"w-8 h-8 rounded-full bg-primary/10 flex items-center justify-center text-primary font-semibold mr-4 flex-shrink-0\">{{ loop.index }}</div>
              <div>
                <h3 class=\"font-medium mb-2\">{{ etape.titre }}</h3>
                <p class=\"text-gray-600\">{{ etape.description }}</p>
              </div>
            </div>
          {% endfor %}
        </div>
      </div>
      {# les commentaires #}
      <div class=\"bg-white rounded-lg shadow-sm p-6 mb-8\">
        <h2 class=\"text-xl font-semibold mb-6\">Commentaires ({{ recette.recetteCom|length }})</h2>
        {% if app.user %} 
        {{ form_start(commentaireForm, {'attr': {'id': 'commentForm'}}) }}
          <div class=\"mb-4\">
            <div class=\"flex text-yellow-400 mb-2\">
              <i class=\"ri-star-line cursor-pointer hover:text-yellow-500\" data-rating=\"1\"></i>
              <i class=\"ri-star-line cursor-pointer hover:text-yellow-500\" data-rating=\"2\"></i>
              <i class=\"ri-star-line cursor-pointer hover:text-yellow-500\" data-rating=\"3\"></i>
              <i class=\"ri-star-line cursor-pointer hover:text-yellow-500\" data-rating=\"4\"></i>
              <i class=\"ri-star-line cursor-pointer hover:text-yellow-500\" data-rating=\"5\"></i>
            </div>
            {# {{ form_widget(commentaireForm.commentaires, {'value': app.user.id}) }} #}
            {{ form_row(commentaireForm.contenu, {'attr': {'class': 'w-full p-3 border border-gray-200 rounded-lg focus:border-primary focus:ring-1 focus:ring-primary'}}) }}
          </div>
          <button type=\"submit\" class=\"bg-primary text-white px-6 py-2 rounded-button hover:bg-primary/90 transition-colors\">
            Publier
          </button>
        {{ form_end(commentaireForm) }}
         {% endif %}
        <div class=\"space-y-6 mt-6\">
          {% for comment in recette.recetteCom %}
            <div class=\"flex items-start gap-4\">
              {# <img src=\"{{ comment.utilisateur.photo }}\" alt=\"{{ comment.utilisateur.prenom }} {{ comment.utilisateur.nom }}\" class=\"w-10 h-10 rounded-full\"> #}
              <div class=\"flex-1\">
                <div class=\"flex items-center mb-2\">
                  {# <h3 class=\"font-medium mr-2\">{{ comment.utilisateur.prenom }} {{ comment.utilisateur.nom }}</h3> #}
                  <div class=\"flex text-yellow-400\">
                    <i class=\"ri-star-fill\"></i><i class=\"ri-star-fill\"></i><i class=\"ri-star-fill\"></i><i class=\"ri-star-fill\"></i><i class=\"ri-star-fill\"></i>
                  </div>
                </div>
                <p class=\"text-gray-600 mb-2\">{{ comment.contenu }}</p>
                <div class=\"flex items-center text-sm text-gray-500\">
                  <span>{{ comment.dateCommentaire|date('d-m-Y') }}</span>
                </div>
              </div>
            </div>
          {% endfor %}
        </div>
      </div>
    </div>

    <!-- Ingrédients -->
     <div class=\"lg:w-1/3\">
      <div class=\"bg-white rounded-lg shadow-sm p-6 mb-8 sticky top-4\">
        {# <h2 class=\"text-xl font-semibold mb-6\">Ingrédients</h2> #}
        <div class=\"flex items-center justify-between mb-6\">
        <h2 class=\"text-xl font-semibold\">Ingrédients</h2>
        <div class=\"relative\">
        <button id=\"servingsButton\" class=\"flex items-center space-x-2 text-gray-600 hover:text-primary\">
        <span>6 personnes</span>
        <i class=\"ri-arrow-down-s-line\"></i>
        </button>
        <div id=\"servingsDropdown\" class=\"hidden absolute right-0 mt-2 w-40 bg-white rounded-md shadow-lg py-1 z-50\">
        <button class=\"block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100\">2 personnes</button>
        <button class=\"block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100\">4 personnes</button>
        <button class=\"block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100\">6 personnes</button>
        <button class=\"block w-full px-4 py-2 text-sm text-left text-gray-700 hover:bg-gray-100\">8 personnes</button>
        </div>
        </div>
        </div>
        <div class=\"space-y-3\">
          {% for item in ingredients %}
            <label class=\"flex items-center\">
              <input type=\"checkbox\" class=\"ingredient-checkbox hidden\" name=\"ingredient\">
              <span class=\"w-5 h-5 border border-gray-300 rounded mr-3 flex items-center justify-center\">
                <i class=\"ri-check-line text-primary hidden\"></i>
              </span>
              <span class=\"text-gray-700\">{{ item.quantite }} {{ item.uniteMesure }} : {{ item.ingredient.nom }}</span>
            </label>
          {% endfor %}
        </div>
      </div>
    </div> 
  </div>
  </div>
<div class=\"bg-white rounded-lg shadow-sm p-6 mt-8\">
<h2 class=\"text-xl font-semibold mb-6\">Recettes similaires</h2>
<div class=\"grid grid-cols-1 md:grid-cols-3 gap-6\">
{% for recette in recettesSimilaires %}
<div class=\"group cursor-pointer\">
<img src=\"{{recette.image}}\" alt=\"{{recette.titre}}\" class=\"w-full h-40 object-cover rounded-lg mb-3\">
<h3 class=\"font-medium group-hover:text-primary transition-colors\">{{recette.titre}}</h3>
<div class=\"text-sm text-gray-600\">{{ recette.tempsDePreparation|date('H:i') }} min · {{recette.difficulte}}</div>
</div>
{% endfor %}
</div>
</div>
</main>


<!-- Script pour étoiles et interactions -->
<script>
document.getElementById('servingsButton').addEventListener('click', function() {
document.getElementById('servingsDropdown').classList.toggle('hidden');
});
document.addEventListener('click', function(event) {
const servingsButton = document.getElementById('servingsButton');
const servingsDropdown = document.getElementById('servingsDropdown');
if (!servingsButton.contains(event.target) && !servingsDropdown.classList.contains('hidden')) {
servingsDropdown.classList.add('hidden');
}
});
document.querySelectorAll('.ingredient-checkbox').forEach(checkbox => {
checkbox.addEventListener('change', function() {
const checkIcon = this.nextElementSibling.querySelector('.ri-check-line');
if (this.checked) {
checkIcon.classList.remove('hidden');
this.nextElementSibling.classList.add('bg-primary/10', 'border-primary');
} else {
checkIcon.classList.add('hidden');
this.nextElementSibling.classList.remove('bg-primary/10', 'border-primary');
}
});
});
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
const ratingStars = document.querySelectorAll('[data-rating]');
let currentRating = 0;
ratingStars.forEach(star => {
  star.addEventListener('mouseover', function() {
    const rating = parseInt(this.dataset.rating);
    updateStars(rating, 'hover');
  });
  
  star.addEventListener('mouseout', function() {
    updateStars(currentRating, 'current');
  });
  
  star.addEventListener('click', function() {
    currentRating = parseInt(this.dataset.rating);
    updateStars(currentRating, 'current');
  });
});
function updateStars(rating, type) {
  ratingStars.forEach(star => {
    const starRating = parseInt(star.dataset.rating);
    if (type === 'hover') {
      if (starRating <= rating) {
        star.classList.remove('ri-star-line');
        star.classList.add('ri-star-fill');
      } else {
        star.classList.remove('ri-star-fill');
        star.classList.add('ri-star-line');
      }
    } else {
      if (starRating <= rating) {
        star.classList.remove('ri-star-line');
        star.classList.add('ri-star-fill');
      } else {
        star.classList.remove('ri-star-fill');
        star.classList.add('ri-star-line');
      }
    }
  });
}
document.getElementById('commentForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  if (currentRating === 0) {
    const ratingError = document.createElement('div');
    ratingError.className = 'text-red-500 text-sm mt-2';
    ratingError.textContent = 'Veuillez sélectionner une note';
    this.querySelector('.flex-1').appendChild(ratingError);
    setTimeout(() => ratingError.remove(), 3000);
    return;
  }
  
  const comment = this.querySelector('textarea').value.trim();
  if (!comment) {
    const commentError = document.createElement('div');
    commentError.className = 'text-red-500 text-sm mt-2';
    commentError.textContent = 'Veuillez écrire un commentaire';
    this.querySelector('.flex-1').appendChild(commentError);
    setTimeout(() => commentError.remove(), 3000);
    return;
  }
  
  const newComment = document.createElement('div');
  newComment.className = 'flex items-start gap-4';
  newComment.innerHTML = `
    <img src=\"https://public.readdy.ai/ai/img_res/eb28e1ada4a5df4b32971245ea3c79cf.jpg\" alt=\"User\" class=\"w-10 h-10 rounded-full\">
    <div class=\"flex-1\">
      <div class=\"flex items-center mb-2\">
        <h3 class=\"font-medium mr-2\">Vous</h3>
        <div class=\"flex text-yellow-400\">
          \${Array(currentRating).fill('<i class=\"ri-star-fill\"></i>').join('')}
          \${Array(5-currentRating).fill('<i class=\"ri-star-line\"></i>').join('')}
        </div>
      </div>
      <p class=\"text-gray-600 mb-2\">\${comment}</p>
      <div class=\"flex items-center text-sm text-gray-500\">
        <span>À l'instant</span>
        <button class=\"ml-4 hover:text-primary\">Répondre</button>
      </div>
    </div>
  `;
  
  const commentsContainer = document.querySelector('.space-y-6');
  commentsContainer.insertBefore(newComment, commentsContainer.firstChild);
  
  this.querySelector('textarea').value = '';
  currentRating = 0;
  updateStars(0, 'current');
  
  const successMessage = document.createElement('div');
  successMessage.className = 'text-green-500 text-sm mt-2';
  successMessage.textContent = 'Votre commentaire a été publié';
  this.querySelector('.flex-1').appendChild(successMessage);
  setTimeout(() => successMessage.remove(), 3000);
});
</script>
{% endblock %}
", "recette/show.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\recette\\show.html.twig");
    }
}
