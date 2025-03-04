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

/* produit/artist-list.html.twig */
class __TwigTemplate_900f5594b59815932ef3dc1670566d1b extends Template
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
        // line 1
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/artist-list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/artist-list.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "produit/artist-list.html.twig", 1);
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

        yield "Liste des Œuvres de l'Artiste";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    <div class=\"container mt-5\">    
        <h1 class=\"text-center mb-5\" style=\"color: #e74c3c; font-size: 2.5rem;\">Mes Œuvres</h1>
        <div class=\"text-center mb-4\"> <!-- Ajout d'un espace avec mb-4 pour créer un gap entre le titre et le bouton -->
            <a href=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_statistics");
        yield "\" class=\"btn btn-lg\" style=\"font-size: 1.25rem; padding: 12px 30px; background-color: #ff69b4; color: white;\">Voir les Statistiques</a>
        </div>

        <!-- Formulaire de recherche avancée -->
        <div class=\"card p-4 mb-4 shadow-sm\" style=\"border-radius: 15px; background-color: #f8f9fa;\">
            <form method=\"GET\" action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_artist_list");
        yield "\" class=\"row g-3\">
                <div class=\"col-md-4\">
                    <label for=\"nom\" class=\"form-label\" style=\"font-size: 1.1rem;\">Nom de l'Œuvre</label>
                    <input type=\"text\" id=\"nom\" name=\"nom\" class=\"form-control form-control-lg\" value=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "request", [], "any", false, false, false, 17), "query", [], "any", false, false, false, 17), "get", ["nom"], "method", false, false, false, 17), "html", null, true);
        yield "\" style=\"font-size: 1.1rem;\">
                </div>
                <div class=\"col-md-4\">
                    <label for=\"prix\" class=\"form-label\" style=\"font-size: 1.1rem;\">Prix (DT)</label>
                    <input type=\"number\" id=\"prix\" name=\"prix\" class=\"form-control form-control-lg\" step=\"0.01\" value=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "request", [], "any", false, false, false, 21), "query", [], "any", false, false, false, 21), "get", ["prix"], "method", false, false, false, 21), "html", null, true);
        yield "\" style=\"font-size: 1.1rem;\">
                </div>
                <div class=\"col-md-4\">
                    <label for=\"categorie\" class=\"form-label\" style=\"font-size: 1.1rem;\">Catégorie</label>
                    <select id=\"categorie\" name=\"categorie\" class=\"form-select form-select-lg\" style=\"font-size: 1.1rem;\">
                        <option value=\"\">Toutes les catégories</option>
                        <option value=\"Dessin\" ";
        // line 27
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 27, $this->source); })()), "request", [], "any", false, false, false, 27), "query", [], "any", false, false, false, 27), "get", ["categorie"], "method", false, false, false, 27) == "Dessin")) {
            yield "selected";
        }
        yield ">Dessin</option>
                        <option value=\"Peinture\" ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "query", [], "any", false, false, false, 28), "get", ["categorie"], "method", false, false, false, 28) == "Peinture")) {
            yield "selected";
        }
        yield ">Peinture</option>
                        <option value=\"Sculpture\" ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "request", [], "any", false, false, false, 29), "query", [], "any", false, false, false, 29), "get", ["categorie"], "method", false, false, false, 29) == "Sculpture")) {
            yield "selected";
        }
        yield ">Sculpture</option>
                        <option value=\"Edition\" ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "query", [], "any", false, false, false, 30), "get", ["categorie"], "method", false, false, false, 30) == "Edition")) {
            yield "selected";
        }
        yield ">Edition</option>
                        <option value=\"Photographie\" ";
        // line 31
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "query", [], "any", false, false, false, 31), "get", ["categorie"], "method", false, false, false, 31) == "Photographie")) {
            yield "selected";
        }
        yield ">Photographie</option>
                    </select>
                </div>
                <div class=\"col-12 d-flex justify-content-between align-items-center\">
                    <a href=\"";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_artist_list", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "query", [], "any", false, false, false, 35), "all", [], "any", false, false, false, 35), ["sort" => "nom"])), "html", null, true);
        yield "\" class=\"btn btn-lg mt-3\" style=\"font-size: 1.1rem; background-color: #8e44ad; color: white;\">Trier par nom</a>
                    <button type=\"submit\" class=\"btn btn-lg mt-3\" style=\"font-size: 1.1rem; background-color: #ff8c00; color: white;\">Rechercher</button>
                </div>
            </form>
        </div>

        <div class=\"card p-5 shadow-lg\" style=\"border-radius: 15px; background-color: #f8f9fa;\">
            <table class=\"table table-striped table-hover\" style=\"font-size: 1.1rem;\">
                <thead class=\"table-warning\" style=\"font-size: 1.2rem;\">
                    <tr>
                        <th class=\"text-center\" style=\"padding: 15px;\">ID</th>
                        <th class=\"text-center\" style=\"padding: 15px;\">Nom de l'Œuvre</th>
                        <th class=\"text-center\" style=\"padding: 15px;\">Prix</th>
                        <th class=\"text-center\" style=\"padding: 15px;\">Catégorie</th>
                        <th class=\"text-center\" style=\"padding: 15px;\">Image</th>
                        <th class=\"text-center\" style=\"padding: 15px;\">Statut</th>
                        <th class=\"text-center\" style=\"min-width: 300px; padding: 15px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 55, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 56
            yield "                        <tr style=\"padding: 10px;\">
                            <td class=\"text-center\" style=\"padding: 15px;\">";
            // line 57
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 57), "html", null, true);
            yield "</td>
                            <td style=\"padding: 15px;\">";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 58), "html", null, true);
            yield "</td>
                            <td class=\"text-center\" style=\"padding: 15px;\">";
            // line 59
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 59), "html", null, true);
            yield " DT</td>
                            <td class=\"text-center\" style=\"padding: 15px;\">";
            // line 60
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 60), "html", null, true);
            yield "</td>
                            <td class=\"text-center\" style=\"padding: 15px;\">
                                ";
            // line 62
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 62)) {
                // line 63
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 63))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 63), "html", null, true);
                yield "\" style=\"width: 150px; height: auto; border-radius: 8px;\">
                                ";
            } else {
                // line 65
                yield "                                    <span class=\"text-muted\">Aucune image</span>
                                ";
            }
            // line 67
            yield "                            </td>
                            <td class=\"text-center\" style=\"padding: 15px;\">";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "approvalStatus", [], "any", false, false, false, 68), "html", null, true);
            yield "</td>
                            <td class=\"text-center d-flex justify-content-center gap-3\" style=\"padding: 15px; width: 100%;\">
                                <form method=\"post\" action=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\">
                                    <button class=\"btn btn-danger\" type=\"submit\">Suppr.</button>
                                </form>
                                <a href=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 73)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Modif.</a>
                                <a href=\"";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show_artist", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 74)]), "html", null, true);
            yield "\" class=\"btn btn-info\">Voir</a>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "                </tbody>
            </table>
        </div>
        <div class=\"text-center mt-5\">
            <a href=\"";
        // line 82
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_new");
        yield "\" class=\"btn btn-success btn-lg\" style=\"font-size: 1.25rem; padding: 12px 30px;\">Ajouter un Produit</a>
        </div>
    </div>
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
        return "produit/artist-list.html.twig";
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
        return array (  263 => 82,  257 => 78,  247 => 74,  243 => 73,  237 => 70,  232 => 68,  229 => 67,  225 => 65,  217 => 63,  215 => 62,  210 => 60,  206 => 59,  202 => 58,  198 => 57,  195 => 56,  191 => 55,  168 => 35,  159 => 31,  153 => 30,  147 => 29,  141 => 28,  135 => 27,  126 => 21,  119 => 17,  113 => 14,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Liste des Œuvres de l'Artiste{% endblock %}

{% block body %}
    <div class=\"container mt-5\">    
        <h1 class=\"text-center mb-5\" style=\"color: #e74c3c; font-size: 2.5rem;\">Mes Œuvres</h1>
        <div class=\"text-center mb-4\"> <!-- Ajout d'un espace avec mb-4 pour créer un gap entre le titre et le bouton -->
            <a href=\"{{ path('app_commande_statistics') }}\" class=\"btn btn-lg\" style=\"font-size: 1.25rem; padding: 12px 30px; background-color: #ff69b4; color: white;\">Voir les Statistiques</a>
        </div>

        <!-- Formulaire de recherche avancée -->
        <div class=\"card p-4 mb-4 shadow-sm\" style=\"border-radius: 15px; background-color: #f8f9fa;\">
            <form method=\"GET\" action=\"{{ path('app_produit_artist_list') }}\" class=\"row g-3\">
                <div class=\"col-md-4\">
                    <label for=\"nom\" class=\"form-label\" style=\"font-size: 1.1rem;\">Nom de l'Œuvre</label>
                    <input type=\"text\" id=\"nom\" name=\"nom\" class=\"form-control form-control-lg\" value=\"{{ app.request.query.get('nom') }}\" style=\"font-size: 1.1rem;\">
                </div>
                <div class=\"col-md-4\">
                    <label for=\"prix\" class=\"form-label\" style=\"font-size: 1.1rem;\">Prix (DT)</label>
                    <input type=\"number\" id=\"prix\" name=\"prix\" class=\"form-control form-control-lg\" step=\"0.01\" value=\"{{ app.request.query.get('prix') }}\" style=\"font-size: 1.1rem;\">
                </div>
                <div class=\"col-md-4\">
                    <label for=\"categorie\" class=\"form-label\" style=\"font-size: 1.1rem;\">Catégorie</label>
                    <select id=\"categorie\" name=\"categorie\" class=\"form-select form-select-lg\" style=\"font-size: 1.1rem;\">
                        <option value=\"\">Toutes les catégories</option>
                        <option value=\"Dessin\" {% if app.request.query.get('categorie') == 'Dessin' %}selected{% endif %}>Dessin</option>
                        <option value=\"Peinture\" {% if app.request.query.get('categorie') == 'Peinture' %}selected{% endif %}>Peinture</option>
                        <option value=\"Sculpture\" {% if app.request.query.get('categorie') == 'Sculpture' %}selected{% endif %}>Sculpture</option>
                        <option value=\"Edition\" {% if app.request.query.get('categorie') == 'Edition' %}selected{% endif %}>Edition</option>
                        <option value=\"Photographie\" {% if app.request.query.get('categorie') == 'Photographie' %}selected{% endif %}>Photographie</option>
                    </select>
                </div>
                <div class=\"col-12 d-flex justify-content-between align-items-center\">
                    <a href=\"{{ path('app_produit_artist_list', app.request.query.all|merge({'sort': 'nom'})) }}\" class=\"btn btn-lg mt-3\" style=\"font-size: 1.1rem; background-color: #8e44ad; color: white;\">Trier par nom</a>
                    <button type=\"submit\" class=\"btn btn-lg mt-3\" style=\"font-size: 1.1rem; background-color: #ff8c00; color: white;\">Rechercher</button>
                </div>
            </form>
        </div>

        <div class=\"card p-5 shadow-lg\" style=\"border-radius: 15px; background-color: #f8f9fa;\">
            <table class=\"table table-striped table-hover\" style=\"font-size: 1.1rem;\">
                <thead class=\"table-warning\" style=\"font-size: 1.2rem;\">
                    <tr>
                        <th class=\"text-center\" style=\"padding: 15px;\">ID</th>
                        <th class=\"text-center\" style=\"padding: 15px;\">Nom de l'Œuvre</th>
                        <th class=\"text-center\" style=\"padding: 15px;\">Prix</th>
                        <th class=\"text-center\" style=\"padding: 15px;\">Catégorie</th>
                        <th class=\"text-center\" style=\"padding: 15px;\">Image</th>
                        <th class=\"text-center\" style=\"padding: 15px;\">Statut</th>
                        <th class=\"text-center\" style=\"min-width: 300px; padding: 15px;\">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for produit in produits %}
                        <tr style=\"padding: 10px;\">
                            <td class=\"text-center\" style=\"padding: 15px;\">{{ produit.id }}</td>
                            <td style=\"padding: 15px;\">{{ produit.nom }}</td>
                            <td class=\"text-center\" style=\"padding: 15px;\">{{ produit.prix }} DT</td>
                            <td class=\"text-center\" style=\"padding: 15px;\">{{ produit.categorie }}</td>
                            <td class=\"text-center\" style=\"padding: 15px;\">
                                {% if produit.image %}
                                    <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" alt=\"{{ produit.nom }}\" style=\"width: 150px; height: auto; border-radius: 8px;\">
                                {% else %}
                                    <span class=\"text-muted\">Aucune image</span>
                                {% endif %}
                            </td>
                            <td class=\"text-center\" style=\"padding: 15px;\">{{ produit.approvalStatus }}</td>
                            <td class=\"text-center d-flex justify-content-center gap-3\" style=\"padding: 15px; width: 100%;\">
                                <form method=\"post\" action=\"{{ path('app_produit_delete', {'id': produit.id}) }}\">
                                    <button class=\"btn btn-danger\" type=\"submit\">Suppr.</button>
                                </form>
                                <a href=\"{{ path('app_produit_edit', {'id': produit.id}) }}\" class=\"btn btn-warning\">Modif.</a>
                                <a href=\"{{ path('app_produit_show_artist', {'id': produit.id}) }}\" class=\"btn btn-info\">Voir</a>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>
        <div class=\"text-center mt-5\">
            <a href=\"{{ path('app_produit_new') }}\" class=\"btn btn-success btn-lg\" style=\"font-size: 1.25rem; padding: 12px 30px;\">Ajouter un Produit</a>
        </div>
    </div>
{% endblock %}", "produit/artist-list.html.twig", "D:\\artistic-main\\artistic-main\\templates\\produit\\artist-list.html.twig");
    }
}
