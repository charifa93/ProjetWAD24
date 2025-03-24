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

/* gestion_recettes/afficher_recettes.html.twig */
class __TwigTemplate_b9c121a3367e2e37c0a8998a6d0c7e49 extends Template
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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_recettes/afficher_recettes.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "gestion_recettes/afficher_recettes.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "gestion_recettes/afficher_recettes.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

        yield "Liste des Recettes";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 7
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

        // line 8
        yield "    <h1>Liste des Recettes</h1>

    ";
        // line 11
        yield "<button id=\"showSaisonsBtn\">SAISON</button>
<div id=\"saison\" style=\"display:none;\">  ";
        // line 13
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["saisons"]) || array_key_exists("saisons", $context) ? $context["saisons"] : (function () { throw new RuntimeError('Variable "saisons" does not exist.', 13, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["saison"]) {
            // line 14
            yield "        <a href=\"#\" class=\"saison-link\" data-valeur=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["saison"], "value", [], "any", false, false, false, 14), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["saison"], "value", [], "any", false, false, false, 14), "html", null, true);
            yield "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['saison'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "</div>

";
        // line 19
        yield "<button id=\"showPlatsBtn\">TYPE DE PLAT</button>
<div id=\"typeDePlat\" style=\"display:none;\"> 
    ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["typeDePlats"]) || array_key_exists("typeDePlats", $context) ? $context["typeDePlats"] : (function () { throw new RuntimeError('Variable "typeDePlats" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["typeDePlat"]) {
            yield " 
        <a href=\"#\" class=\"typeDePlat-link\" data-valeur=\"";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typeDePlat"], "value", [], "any", false, false, false, 22), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["typeDePlat"], "value", [], "any", false, false, false, 22), "html", null, true);
            yield "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['typeDePlat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "</div>

    ";
        // line 27
        yield "<button id=\"showOriginesBtn\">ORIGINE</button>

<div id=\"origine\" style=\"display:none;\">
    ";
        // line 30
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["origines"]) || array_key_exists("origines", $context) ? $context["origines"] : (function () { throw new RuntimeError('Variable "origines" does not exist.', 30, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["origine"]) {
            yield " 
        <a href=\"#\" class=\"origine-link\" data-valeur=\"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["origine"], "value", [], "any", false, false, false, 31), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["origine"], "value", [], "any", false, false, false, 31), "html", null, true);
            yield "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['origine'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        yield "</div>

   ";
        // line 36
        yield "<button id=\"showPreparationsBtn\">preparation</button>
<div id=\"preparation\" style=\"display:none;\">  ";
        // line 38
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["preparations"]) || array_key_exists("preparations", $context) ? $context["preparations"] : (function () { throw new RuntimeError('Variable "preparations" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["preparation"]) {
            // line 39
            yield "        <a href=\"#\" class=\"preparation-link\" data-valeur=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preparation"], "value", [], "any", false, false, false, 39), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["preparation"], "value", [], "any", false, false, false, 39), "html", null, true);
            yield "</a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['preparation'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        yield "</div>



   <div id=\"divResultats\">
        ";
        // line 46
        if ((isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 46, $this->source); })())) {
            // line 47
            yield "            <ul>
                ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["recettes"]) || array_key_exists("recettes", $context) ? $context["recettes"] : (function () { throw new RuntimeError('Variable "recettes" does not exist.', 48, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["recette"]) {
                // line 49
                yield "                    <li class=\"recette-item\">
                        <h2>";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "titre", [], "any", false, false, false, 50), "html", null, true);
                yield "</h2>
                        <h3>";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 51), "nom", [], "any", false, false, false, 51), "html", null, true);
                yield "  ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "utilisateur", [], "any", false, false, false, 51), "prenom", [], "any", false, false, false, 51), "html", null, true);
                yield "</h3> 
                        <p><strong>Description :</strong> ";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "description", [], "any", false, false, false, 52), "html", null, true);
                yield "</p>
                        <p><strong>Date de publication :</strong> ";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "datePublication", [], "any", false, false, false, 53), "d-m-Y"), "html", null, true);
                yield "</p>
                        <p><strong>Temps de préparation :</strong> ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsDePreparation", [], "any", false, false, false, 54), "H:i:s"), "html", null, true);
                yield " minutes</p>
                        <p><strong>Temps de cuisson :</strong> ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "tempsDeCuison", [], "any", false, false, false, 55), "H:i:s"), "html", null, true);
                yield " minutes</p>
                        <p><strong>Difficulté :</strong> ";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "difficulte", [], "any", false, false, false, 56), "html", null, true);
                yield "/5</p>
                        <p><strong>Saison :</strong> ";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "Saison", [], "any", false, false, false, 57), "value", [], "any", false, false, false, 57), "html", null, true);
                yield "</p>
                    

                        <img src=\"";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "image", [], "any", false, false, false, 60), "html", null, true);
                yield "\" alt=\"Image de la recette\" class=\"recette-image\">
                        ";
                // line 61
                if (CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "recetteCom", [], "any", false, false, false, 61)) {
                    // line 62
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "recetteCom", [], "any", false, false, false, 62));
                    foreach ($context['_seq'] as $context["_key"] => $context["commentaire"]) {
                        // line 63
                        yield "                               <p> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commentaire"], "contenu", [], "any", false, false, false, 63), "html", null, true);
                        yield "  </p>                          
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['commentaire'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 65
                    yield "                        ";
                }
                // line 66
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "recettesNote", [], "any", false, false, false, 66)) {
                    // line 67
                    yield "                            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["recette"], "recettesNote", [], "any", false, false, false, 67));
                    foreach ($context['_seq'] as $context["_key"] => $context["note"]) {
                        // line 68
                        yield "                                <p>";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["note"], "valeur", [], "any", false, false, false, 68), "html", null, true);
                        yield " </p>                           
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['note'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 70
                    yield "                        ";
                }
                // line 71
                yield "                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['recette'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            yield "            </ul>  
        ";
        }
        // line 75
        yield "    </div> 


    
    <script>
    function setupSaisonRecetteHandler({ LinkSelector, divResultatsId, showBtnId, ListId }) {
    const links = document.querySelectorAll(LinkSelector);
    const divResultats = document.getElementById(divResultatsId);
    const showBtn = document.getElementById(showBtnId);
    const list = document.getElementById(ListId);

    // Gérer l'affichage des listes (saison/type de plat/origines)
    showBtn.addEventListener('click', function () {
        if (list.style.display === \"none\" || list.style.display === \"\") {
            list.style.display = \"block\";  // Afficher la liste
        } else {
            list.style.display = \"none\";  // Masquer la liste
        }
    });

    // Gérer les clics sur les liens
    links.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();  // Empêcher le comportement par défaut du lien

            let valeur = this.getAttribute('data-valeur') || '';  
        
               // Vider le contenu précédent et afficher un message de chargement
            divResultats.innerHTML = '<p>Chargement des recettes...</p>';

            let idParent = event.target.parentElement.id;

            // Construire l'URL en fonction des filtres (saison et/ou type de plat)
            let url = '/gestion/recettes/afficher';
            url += `/\${idParent}/\${valeur}`;  // Seule la saison

            console.log(url);

            // Utiliser Axios pour faire une requête AJAX
            axios.get(url).then(response => {
                    const recettes = response.data;  // Données en JSON
                    divResultats.innerHTML = '';  // Vider le contenu précédent

                    // Vérifier si des recettes sont trouvées
                    if (recettes.length > 0) {
                        recettes.forEach(recette => {
                            const recetteItem = document.createElement('div');
                            recetteItem.classList.add('recette-item');

                            recetteItem.innerHTML = `<img src=\"\${recette.image}\" alt=\"Image de la recette\" class=\"recette-image\">
                            <h2>\${recette.titre}</h2>
                            <h3>\${recette.utilisateur.nom}</h3>`;
                            

                            divResultats.appendChild(recetteItem);
                        });
                    } else {
                        divResultats.innerHTML = '<p>Aucune recette trouvée pour cette sélection.</p>';
                    }
                })
                .catch(error => {
                    console.error('Erreur lors de la requête:', error);
                    divResultats.innerHTML = '<p>Une erreur est survenue lors du chargement des recettes.</p>';
                });
        });
    });
}


setupSaisonRecetteHandler({LinkSelector: '.saison-link',divResultatsId: 'divResultats',showBtnId: 'showSaisonsBtn',ListId: 'saison'});
setupSaisonRecetteHandler({LinkSelector: '.typeDePlat-link',divResultatsId: 'divResultats',showBtnId: 'showPlatsBtn',ListId: 'typeDePlat'});
setupSaisonRecetteHandler({LinkSelector: '.origine-link',divResultatsId: 'divResultats',showBtnId: 'showOriginesBtn',ListId: 'origine'});
setupSaisonRecetteHandler({LinkSelector: '.preparation-link',divResultatsId: 'divResultats',showBtnId: 'showPreparationsBtn',ListId: 'preparation'});


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
        return "gestion_recettes/afficher_recettes.html.twig";
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
        return array (  304 => 75,  300 => 73,  293 => 71,  290 => 70,  281 => 68,  276 => 67,  273 => 66,  270 => 65,  261 => 63,  256 => 62,  254 => 61,  250 => 60,  244 => 57,  240 => 56,  236 => 55,  232 => 54,  228 => 53,  224 => 52,  218 => 51,  214 => 50,  211 => 49,  207 => 48,  204 => 47,  202 => 46,  195 => 41,  184 => 39,  179 => 38,  176 => 36,  172 => 33,  162 => 31,  156 => 30,  151 => 27,  147 => 24,  137 => 22,  131 => 21,  127 => 19,  123 => 16,  112 => 14,  107 => 13,  104 => 11,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/gestion_recettes/afficherRecettes.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}Liste des Recettes{% endblock %}

{% block body %}
    <h1>Liste des Recettes</h1>

    {# Button pour afficher les saisons #}
<button id=\"showSaisonsBtn\">SAISON</button>
<div id=\"saison\" style=\"display:none;\">  {# Ajout d'un style pour masquer par défaut #}
    {% for saison in saisons %}
        <a href=\"#\" class=\"saison-link\" data-valeur=\"{{ saison.value }}\">{{ saison.value }}</a>
    {% endfor %}
</div>

{# Button pour afficher les types de plats #}
<button id=\"showPlatsBtn\">TYPE DE PLAT</button>
<div id=\"typeDePlat\" style=\"display:none;\"> 
    {% for typeDePlat in typeDePlats %} 
        <a href=\"#\" class=\"typeDePlat-link\" data-valeur=\"{{ typeDePlat.value }}\">{{ typeDePlat.value }}</a>
    {% endfor %}
</div>

    {# Button pour afficher les Origines #}
<button id=\"showOriginesBtn\">ORIGINE</button>

<div id=\"origine\" style=\"display:none;\">
    {% for origine in origines %} 
        <a href=\"#\" class=\"origine-link\" data-valeur=\"{{ origine.value }}\">{{ origine.value }}</a>
    {% endfor %}
</div>

   {# Button pour afficher les preparations #}
<button id=\"showPreparationsBtn\">preparation</button>
<div id=\"preparation\" style=\"display:none;\">  {# Ajout d'un style pour masquer par défaut #}
    {% for preparation in preparations %}
        <a href=\"#\" class=\"preparation-link\" data-valeur=\"{{ preparation.value }}\">{{ preparation.value }}</a>
    {% endfor %}
</div>



   <div id=\"divResultats\">
        {% if recettes %}
            <ul>
                {% for recette in recettes %}
                    <li class=\"recette-item\">
                        <h2>{{ recette.titre }}</h2>
                        <h3>{{ recette.utilisateur.nom }}  {{ recette.utilisateur.prenom }}</h3> 
                        <p><strong>Description :</strong> {{ recette.description }}</p>
                        <p><strong>Date de publication :</strong> {{ recette.datePublication|date('d-m-Y') }}</p>
                        <p><strong>Temps de préparation :</strong> {{ recette.tempsDePreparation |date('H:i:s')}} minutes</p>
                        <p><strong>Temps de cuisson :</strong> {{ recette.tempsDeCuison|date('H:i:s') }} minutes</p>
                        <p><strong>Difficulté :</strong> {{ recette.difficulte }}/5</p>
                        <p><strong>Saison :</strong> {{ recette.Saison.value }}</p>
                    

                        <img src=\"{{ recette.image }}\" alt=\"Image de la recette\" class=\"recette-image\">
                        {% if recette.recetteCom %}
                            {% for commentaire in recette.recetteCom %}
                               <p> {{ commentaire.contenu }}  </p>                          
                            {% endfor %}
                        {% endif %}
                        {% if recette.recettesNote %}
                            {% for note in recette.recettesNote %}
                                <p>{{ note.valeur }} </p>                           
                            {% endfor %}
                        {% endif %}
                    </li>
                {% endfor %}
            </ul>  
        {% endif %}
    </div> 


    
    <script>
    function setupSaisonRecetteHandler({ LinkSelector, divResultatsId, showBtnId, ListId }) {
    const links = document.querySelectorAll(LinkSelector);
    const divResultats = document.getElementById(divResultatsId);
    const showBtn = document.getElementById(showBtnId);
    const list = document.getElementById(ListId);

    // Gérer l'affichage des listes (saison/type de plat/origines)
    showBtn.addEventListener('click', function () {
        if (list.style.display === \"none\" || list.style.display === \"\") {
            list.style.display = \"block\";  // Afficher la liste
        } else {
            list.style.display = \"none\";  // Masquer la liste
        }
    });

    // Gérer les clics sur les liens
    links.forEach(function (link) {
        link.addEventListener('click', function (event) {
            event.preventDefault();  // Empêcher le comportement par défaut du lien

            let valeur = this.getAttribute('data-valeur') || '';  
        
               // Vider le contenu précédent et afficher un message de chargement
            divResultats.innerHTML = '<p>Chargement des recettes...</p>';

            let idParent = event.target.parentElement.id;

            // Construire l'URL en fonction des filtres (saison et/ou type de plat)
            let url = '/gestion/recettes/afficher';
            url += `/\${idParent}/\${valeur}`;  // Seule la saison

            console.log(url);

            // Utiliser Axios pour faire une requête AJAX
            axios.get(url).then(response => {
                    const recettes = response.data;  // Données en JSON
                    divResultats.innerHTML = '';  // Vider le contenu précédent

                    // Vérifier si des recettes sont trouvées
                    if (recettes.length > 0) {
                        recettes.forEach(recette => {
                            const recetteItem = document.createElement('div');
                            recetteItem.classList.add('recette-item');

                            recetteItem.innerHTML = `<img src=\"\${recette.image}\" alt=\"Image de la recette\" class=\"recette-image\">
                            <h2>\${recette.titre}</h2>
                            <h3>\${recette.utilisateur.nom}</h3>`;
                            

                            divResultats.appendChild(recetteItem);
                        });
                    } else {
                        divResultats.innerHTML = '<p>Aucune recette trouvée pour cette sélection.</p>';
                    }
                })
                .catch(error => {
                    console.error('Erreur lors de la requête:', error);
                    divResultats.innerHTML = '<p>Une erreur est survenue lors du chargement des recettes.</p>';
                });
        });
    });
}


setupSaisonRecetteHandler({LinkSelector: '.saison-link',divResultatsId: 'divResultats',showBtnId: 'showSaisonsBtn',ListId: 'saison'});
setupSaisonRecetteHandler({LinkSelector: '.typeDePlat-link',divResultatsId: 'divResultats',showBtnId: 'showPlatsBtn',ListId: 'typeDePlat'});
setupSaisonRecetteHandler({LinkSelector: '.origine-link',divResultatsId: 'divResultats',showBtnId: 'showOriginesBtn',ListId: 'origine'});
setupSaisonRecetteHandler({LinkSelector: '.preparation-link',divResultatsId: 'divResultats',showBtnId: 'showPreparationsBtn',ListId: 'preparation'});


    </script>
{% endblock %}

", "gestion_recettes/afficher_recettes.html.twig", "C:\\xampp\\htdocs\\ProjetWAD24-1\\ProjetWADSymfony\\templates\\gestion_recettes\\afficher_recettes.html.twig");
    }
}
