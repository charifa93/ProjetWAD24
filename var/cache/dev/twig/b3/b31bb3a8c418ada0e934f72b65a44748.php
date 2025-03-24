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

/* utilisateur/show.html.twig */
class __TwigTemplate_c3464f46a2e77bab73ab9dded6c6a195 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "utilisateur/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "utilisateur/show.html.twig", 1);
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

        yield "Profil Utilisateur ";
        
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
        yield "<main class=\"pt-16\">
<div class=\"profile-banner relative h-64\">
<div class=\"absolute inset-0 bg-black bg-opacity-30\"></div>
<div class=\"absolute -bottom-16 left-1/2 transform -translate-x-1/2\">
<div class=\"relative\">
<img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 20, $this->source); })()), "photo", [], "any", false, false, false, 20), "html", null, true);
        yield " \" class=\"w-32 h-32 rounded-full border-4 border-white\">
</div>
</div>
</div>
<div class=\"max-w-7xl mx-auto px-4 pt-24\">
<div class=\"text-center mb-8\">
<h1 class=\"text-2xl font-bold text-gray-900\">";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 26, $this->source); })()), "nom", [], "any", false, false, false, 26), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 26, $this->source); })()), "prenom", [], "any", false, false, false, 26), "html", null, true);
        yield "  </h1>
<p class=\"text-gray-600\">Chef Passionnée • Membre depuis 2023</p>
<div class=\"flex justify-center items-center space-x-4 mt-4\">
<div class=\"flex items-center space-x-1 text-yellow-400\">
<i class=\"ri-star-fill\"></i>
<span class=\"text-gray-700\">4.8</span>
</div>
<span class=\"text-gray-300\">|</span>
<div class=\"flex items-center space-x-1\">
<i class=\"ri-user-follow-line text-primary\"></i>
<span class=\"text-gray-700\">1.2k abonnés</span>
</div>
</div>
</div>
<div class=\"grid grid-cols-12 gap-6\">
<div class=\"col-span-12\">
<div class=\"flex justify-end mb-6\">
<button onclick=\"openEditProfileModal()\" class=\"bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 transition-colors flex items-center space-x-2 !rounded-button\">
<i class=\"ri-edit-line\"></i>
<span>Modifier le profil</span>
</button>
</div>
<div class=\"bg-white rounded-lg shadow p-6 mb-6\">
<div class=\"flex items-center justify-between mb-6\">
<h2 class=\"text-lg font-semibold\">Mes Recettes Publiées</h2>
<a href=\"";
        // line 51
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_new");
        yield "\" class=\"text-primary hover:text-primary/90 flex items-center space-x-2\">
    <i class=\"ri-add-line\"></i>
    <span>Nouvelle Recette</span>
</a>
</div>
<div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
";
        // line 57
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 57, $this->source); })()), "recettes", [], "any", false, false, false, 57));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 58
            yield "<div onclick=\"window.location.href='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "'\"  class=\"border rounded-lg overflow-hidden\">
<img src=\"";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "image", [], "any", false, false, false, 59), "html", null, true);
            yield "\" class=\"w-full h-48 object-cover\">
<div class=\"p-4\">
<h3 class=\"font-medium mb-2\">";
            // line 61
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 61), "html", null, true);
            yield "</h3>
<div class=\"flex items-center justify-between text-sm text-gray-500\">
<span>Publié le ";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "datePublication", [], "any", false, false, false, 63), "html", null, true);
            yield "</span>
<div class=\"flex items-center space-x-2\">
<i class=\"ri-heart-line\"></i>
<span>";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "recettesNote", [], "any", false, false, false, 66)), "html", null, true);
            yield "</span>
</div>
</div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 70
            yield "    <li class=\"list-group-item\">Aucune activité récente.</li>   
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        yield "</div>
</div>
<div class=\"bg-white rounded-lg shadow p-6 mb-6\">
<h2 class=\"text-lg font-semibold mb-6\">Mes Recettes Favorites</h2>
";
        // line 80
        yield "<div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
 ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 81, $this->source); })()), "FavorisRecette", [], "any", false, false, false, 81));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
            // line 82
            yield "<div onclick=\"window.location.href='";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_recette_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "id", [], "any", false, false, false, 82)]), "html", null, true);
            yield "'\"  class=\"border rounded-lg overflow-hidden\">
<img src=\"";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "image", [], "any", false, false, false, 83), "html", null, true);
            yield "\" class=\"w-full h-48 object-cover\">
<div class=\"p-4\">
<h3 class=\"font-medium mb-2\">";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 85), "html", null, true);
            yield "</h3>
<div class=\"flex items-center justify-between text-sm text-gray-500\">
<span>Par Chef ";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 87), "nom", [], "any", false, false, false, 87), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 87), "prenom", [], "any", false, false, false, 87), "html", null, true);
            yield "</span>
<button class=\"text-primary hover:text-primary/90\">
<i class=\"ri-heart-fill\"></i>
</button>
</div>
</div>
</div>
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 95
            yield "    <li class=\"list-group-item\">Aucune recettes favoris.</li>   
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        yield "</div>
</div>
<div class=\"bg-white rounded-lg shadow p-6\">
<div class=\"flex items-center justify-between mb-6\">
<h2 class=\"text-lg font-semibold\">Ma Liste de Courses</h2>
<button class=\"text-primary hover:text-primary/90 flex items-center space-x-2\" onclick=\"addShoppingItem()\">
<i class=\"ri-add-line\"></i>
<span>Ajouter un article</span>
</button>
</div>
<div class=\"space-y-4\" id=\"shoppingList\">
 ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["utilisateur"]) || array_key_exists("utilisateur", $context) ? $context["utilisateur"] : (function () { throw new RuntimeError('Variable "utilisateur" does not exist.', 108, $this->source); })()), "listCourses", [], "any", false, false, false, 108));
        foreach ($context['_seq'] as $context["_key"] => $context["ingredient"]) {
            // line 109
            yield "<div class=\"flex items-center justify-between p-3 bg-gray-50 rounded-lg\">
<div class=\"flex items-center space-x-3\">
<input type=\"checkbox\" class=\"rounded text-primary focus:ring-primary\">
<span> ";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "detailsCourses", [], "any", false, false, false, 112), "nom", [], "any", false, false, false, 112), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["ingredient"], "detailsCourses", [], "any", false, false, false, 112), "quantite", [], "any", false, false, false, 112), "html", null, true);
            yield ")</span>
</div>
<button class=\"text-gray-400 hover:text-gray-600\" onclick=\"removeShoppingItem(this)\">
<i class=\"ri-delete-bin-line\"></i>
</button>
</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['ingredient'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        yield "
</div>
</div>
</div>
</div>
</main>

<script>
function toggleUserMenu() {
const menu = document.getElementById('userMenu');
menu.classList.toggle('hidden');
}
document.addEventListener('click', function(event) {
const menu = document.getElementById('userMenu');
const button = event.target.closest('button');
if (!button && !menu.contains(event.target)) {
menu.classList.add('hidden');
}
});
function openEditProfileModal() {
  fetch('/Utilisateur/edit')
    .then(response => response.text())
    .then(html => {
      const modalOverlay = document.createElement('div');
      modalOverlay.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
      modalOverlay.id = 'editProfileModal';
      modalOverlay.innerHTML = html;
      document.body.appendChild(modalOverlay);

      // Gérer la soumission du formulaire
      document.getElementById('editProfileForm').addEventListener('submit', function(e) {
        e.preventDefault();
        closeEditProfileModal();
        showSuccessMessage('Profil mis à jour avec succès');
      });
    })
    .catch(error => {
      console.error('Erreur lors du chargement du modal :', error);
    });
}

function closeEditProfileModal() {
  const modal = document.getElementById('editProfileModal');
  if (modal) modal.remove();
}

function addShoppingItem() {
const modal = document.createElement('div');
modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
modal.innerHTML = `
<div class=\"bg-white rounded-lg p-6 w-full max-w-md\">
<div class=\"flex justify-between items-center mb-6\">
<h3 class=\"text-lg font-semibold\">Ajouter un article</h3>
<button onclick=\"this.closest('.fixed').remove()\" class=\"text-gray-400 hover:text-gray-600\">
<i class=\"ri-close-line text-xl\"></i>
</button>
</div>
<form id=\"addItemForm\" class=\"space-y-4\">
<div>
<label class=\"block text-sm font-medium text-gray-700 mb-1\">Article</label>
<input type=\"text\" placeholder=\"Nom de l'article\" class=\"w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\">
</div>
<div>
<label class=\"block text-sm font-medium text-gray-700 mb-1\">Quantité</label>
<input type=\"text\" placeholder=\"Ex: 500g, 2L, 3 pièces\" class=\"w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\">
</div>
<div class=\"flex justify-end space-x-3\">
<button type=\"submit\" class=\"bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 !rounded-button\">Ajouter</button>
<button type=\"button\" onclick=\"this.closest('.fixed').remove()\" class=\"px-4 py-2 text-gray-600 hover:text-gray-800 !rounded-button\">Annuler</button>
</div>
</form>
</div>
`;
document.body.appendChild(modal);
document.getElementById('addItemForm').addEventListener('submit', function(e) {
e.preventDefault();
const shoppingList = document.getElementById('shoppingList');
const newItem = document.createElement('div');
newItem.className = 'flex items-center justify-between p-3 bg-gray-50 rounded-lg';
newItem.innerHTML = `
<div class=\"flex items-center space-x-3\">
<input type=\"checkbox\" class=\"rounded text-primary focus:ring-primary\">
<span>\${e.target.elements[0].value} (\${e.target.elements[1].value})</span>
</div>
<button class=\"text-gray-400 hover:text-gray-600\" onclick=\"removeShoppingItem(this)\">
<i class=\"ri-delete-bin-line\"></i>
</button>
`;
shoppingList.prepend(newItem);
modal.remove();
showSuccessMessage('Article ajouté à la liste');
});
}
function removeShoppingItem(button) {
button.closest('.flex').remove();
showSuccessMessage('Article supprimé de la liste');
}
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
        return "utilisateur/show.html.twig";
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
        return array (  341 => 119,  326 => 112,  321 => 109,  317 => 108,  304 => 97,  297 => 95,  282 => 87,  277 => 85,  272 => 83,  267 => 82,  262 => 81,  259 => 80,  253 => 72,  246 => 70,  237 => 66,  231 => 63,  226 => 61,  221 => 59,  216 => 58,  211 => 57,  202 => 51,  172 => 26,  163 => 20,  156 => 15,  143 => 14,  129 => 10,  116 => 9,  102 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil Utilisateur {% endblock %}
{% block javascripts %}
    {{ parent() }}
    {# {{ encore_entry_script_tags ('Prodil') }} #}
{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    {# {{ encore_entry_link_tags ('showRecette') }}\t\t #}
{% endblock %}

{% block body %}
<main class=\"pt-16\">
<div class=\"profile-banner relative h-64\">
<div class=\"absolute inset-0 bg-black bg-opacity-30\"></div>
<div class=\"absolute -bottom-16 left-1/2 transform -translate-x-1/2\">
<div class=\"relative\">
<img src=\"{{ utilisateur.photo }} \" class=\"w-32 h-32 rounded-full border-4 border-white\">
</div>
</div>
</div>
<div class=\"max-w-7xl mx-auto px-4 pt-24\">
<div class=\"text-center mb-8\">
<h1 class=\"text-2xl font-bold text-gray-900\">{{ utilisateur.nom }} {{ utilisateur.prenom }}  </h1>
<p class=\"text-gray-600\">Chef Passionnée • Membre depuis 2023</p>
<div class=\"flex justify-center items-center space-x-4 mt-4\">
<div class=\"flex items-center space-x-1 text-yellow-400\">
<i class=\"ri-star-fill\"></i>
<span class=\"text-gray-700\">4.8</span>
</div>
<span class=\"text-gray-300\">|</span>
<div class=\"flex items-center space-x-1\">
<i class=\"ri-user-follow-line text-primary\"></i>
<span class=\"text-gray-700\">1.2k abonnés</span>
</div>
</div>
</div>
<div class=\"grid grid-cols-12 gap-6\">
<div class=\"col-span-12\">
<div class=\"flex justify-end mb-6\">
<button onclick=\"openEditProfileModal()\" class=\"bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 transition-colors flex items-center space-x-2 !rounded-button\">
<i class=\"ri-edit-line\"></i>
<span>Modifier le profil</span>
</button>
</div>
<div class=\"bg-white rounded-lg shadow p-6 mb-6\">
<div class=\"flex items-center justify-between mb-6\">
<h2 class=\"text-lg font-semibold\">Mes Recettes Publiées</h2>
<a href=\"{{ path('app_recette_new') }}\" class=\"text-primary hover:text-primary/90 flex items-center space-x-2\">
    <i class=\"ri-add-line\"></i>
    <span>Nouvelle Recette</span>
</a>
</div>
<div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
{% for recette in utilisateur.recettes %}
<div onclick=\"window.location.href='{{ path('app_recette_show', {'id': recette.id}) }}'\"  class=\"border rounded-lg overflow-hidden\">
<img src=\"{{recette.image}}\" class=\"w-full h-48 object-cover\">
<div class=\"p-4\">
<h3 class=\"font-medium mb-2\">{{recette.titre}}</h3>
<div class=\"flex items-center justify-between text-sm text-gray-500\">
<span>Publié le {{recette.datePublication}}</span>
<div class=\"flex items-center space-x-2\">
<i class=\"ri-heart-line\"></i>
<span>{{ recette.recettesNote|length }}</span>
</div>
</div>
{% else %}
    <li class=\"list-group-item\">Aucune activité récente.</li>   
{% endfor %}
</div>
</div>
<div class=\"bg-white rounded-lg shadow p-6 mb-6\">
<h2 class=\"text-lg font-semibold mb-6\">Mes Recettes Favorites</h2>
{# <a href=\"{{ path('app_utilisateur_favoris', {'id': app.user.id})}}\" class=\"text-primary hover:text-primary/90 flex items-center space-x-2\">
    <i class=\"ri-add-line\"></i>
    <span>la liste Favoris</span>
</a> #}
<div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
 {% for recette in utilisateur.FavorisRecette %}
<div onclick=\"window.location.href='{{ path('app_recette_show', {'id': recette.id}) }}'\"  class=\"border rounded-lg overflow-hidden\">
<img src=\"{{recette.image}}\" class=\"w-full h-48 object-cover\">
<div class=\"p-4\">
<h3 class=\"font-medium mb-2\">{{recette.titre}}</h3>
<div class=\"flex items-center justify-between text-sm text-gray-500\">
<span>Par Chef {{recette.utilisateur.nom}} {{recette.utilisateur.prenom}}</span>
<button class=\"text-primary hover:text-primary/90\">
<i class=\"ri-heart-fill\"></i>
</button>
</div>
</div>
</div>
{% else %}
    <li class=\"list-group-item\">Aucune recettes favoris.</li>   
{% endfor %}
</div>
</div>
<div class=\"bg-white rounded-lg shadow p-6\">
<div class=\"flex items-center justify-between mb-6\">
<h2 class=\"text-lg font-semibold\">Ma Liste de Courses</h2>
<button class=\"text-primary hover:text-primary/90 flex items-center space-x-2\" onclick=\"addShoppingItem()\">
<i class=\"ri-add-line\"></i>
<span>Ajouter un article</span>
</button>
</div>
<div class=\"space-y-4\" id=\"shoppingList\">
 {% for ingredient in utilisateur.listCourses %}
<div class=\"flex items-center justify-between p-3 bg-gray-50 rounded-lg\">
<div class=\"flex items-center space-x-3\">
<input type=\"checkbox\" class=\"rounded text-primary focus:ring-primary\">
<span> {{ingredient.detailsCourses.nom}} ({{ingredient.detailsCourses.quantite}})</span>
</div>
<button class=\"text-gray-400 hover:text-gray-600\" onclick=\"removeShoppingItem(this)\">
<i class=\"ri-delete-bin-line\"></i>
</button>
</div>
{% endfor %}

</div>
</div>
</div>
</div>
</main>

<script>
function toggleUserMenu() {
const menu = document.getElementById('userMenu');
menu.classList.toggle('hidden');
}
document.addEventListener('click', function(event) {
const menu = document.getElementById('userMenu');
const button = event.target.closest('button');
if (!button && !menu.contains(event.target)) {
menu.classList.add('hidden');
}
});
function openEditProfileModal() {
  fetch('/Utilisateur/edit')
    .then(response => response.text())
    .then(html => {
      const modalOverlay = document.createElement('div');
      modalOverlay.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
      modalOverlay.id = 'editProfileModal';
      modalOverlay.innerHTML = html;
      document.body.appendChild(modalOverlay);

      // Gérer la soumission du formulaire
      document.getElementById('editProfileForm').addEventListener('submit', function(e) {
        e.preventDefault();
        closeEditProfileModal();
        showSuccessMessage('Profil mis à jour avec succès');
      });
    })
    .catch(error => {
      console.error('Erreur lors du chargement du modal :', error);
    });
}

function closeEditProfileModal() {
  const modal = document.getElementById('editProfileModal');
  if (modal) modal.remove();
}

function addShoppingItem() {
const modal = document.createElement('div');
modal.className = 'fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50';
modal.innerHTML = `
<div class=\"bg-white rounded-lg p-6 w-full max-w-md\">
<div class=\"flex justify-between items-center mb-6\">
<h3 class=\"text-lg font-semibold\">Ajouter un article</h3>
<button onclick=\"this.closest('.fixed').remove()\" class=\"text-gray-400 hover:text-gray-600\">
<i class=\"ri-close-line text-xl\"></i>
</button>
</div>
<form id=\"addItemForm\" class=\"space-y-4\">
<div>
<label class=\"block text-sm font-medium text-gray-700 mb-1\">Article</label>
<input type=\"text\" placeholder=\"Nom de l'article\" class=\"w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\">
</div>
<div>
<label class=\"block text-sm font-medium text-gray-700 mb-1\">Quantité</label>
<input type=\"text\" placeholder=\"Ex: 500g, 2L, 3 pièces\" class=\"w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-primary\">
</div>
<div class=\"flex justify-end space-x-3\">
<button type=\"submit\" class=\"bg-primary text-white px-4 py-2 rounded-lg hover:bg-primary/90 !rounded-button\">Ajouter</button>
<button type=\"button\" onclick=\"this.closest('.fixed').remove()\" class=\"px-4 py-2 text-gray-600 hover:text-gray-800 !rounded-button\">Annuler</button>
</div>
</form>
</div>
`;
document.body.appendChild(modal);
document.getElementById('addItemForm').addEventListener('submit', function(e) {
e.preventDefault();
const shoppingList = document.getElementById('shoppingList');
const newItem = document.createElement('div');
newItem.className = 'flex items-center justify-between p-3 bg-gray-50 rounded-lg';
newItem.innerHTML = `
<div class=\"flex items-center space-x-3\">
<input type=\"checkbox\" class=\"rounded text-primary focus:ring-primary\">
<span>\${e.target.elements[0].value} (\${e.target.elements[1].value})</span>
</div>
<button class=\"text-gray-400 hover:text-gray-600\" onclick=\"removeShoppingItem(this)\">
<i class=\"ri-delete-bin-line\"></i>
</button>
`;
shoppingList.prepend(newItem);
modal.remove();
showSuccessMessage('Article ajouté à la liste');
});
}
function removeShoppingItem(button) {
button.closest('.flex').remove();
showSuccessMessage('Article supprimé de la liste');
}
</script>
{% endblock %}
", "utilisateur/show.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\Utilisateur\\show.html.twig");
    }
}
