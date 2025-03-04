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

/* produit/index.html.twig */
class __TwigTemplate_b8943dd5c30d8c5451e317fed100cddc extends Template
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
        return "base-back.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/index.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "produit/index.html.twig", 1);
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

        yield "Gestion des Produits (Admin)";
        
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
        yield "    <div class=\"container-fluid mt-5\"> <!-- Changé de \"container\" à \"container-fluid\" pour plus de largeur -->
        <h1 class=\"text-center mb-5\" style=\"color: #2c3e50; font-size: 3rem;\">Gestion des Produits</h1> <!-- Augmenté la taille du titre -->

";
        // line 10
        yield "<div class=\"col-12 text-center\">


</div>

        <!-- Formulaire de recherche avancée -->
        <div class=\"card p-5 mb-5 shadow-lg\" style=\"border-radius: 15px; background-color: #ffffff;\">
            <form method=\"GET\" action=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index");
        yield "\" class=\"row g-4\">
                <div class=\"col-md-4\">
                    <label for=\"nom\" class=\"form-label\" style=\"font-size: 1.25rem;\">Nom de l'Œuvre</label> <!-- Augmenté la taille du label -->
                    <input type=\"text\" id=\"nom\" name=\"nom\" class=\"form-control form-control-lg\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "request", [], "any", false, false, false, 20), "query", [], "any", false, false, false, 20), "get", ["nom"], "method", false, false, false, 20), "html", null, true);
        yield "\" style=\"font-size: 1.25rem;\">
                </div>
                <div class=\"col-md-4\">
                    <label for=\"prix\" class=\"form-label\" style=\"font-size: 1.25rem;\">Prix (DT)</label>
                    <input type=\"number\" id=\"prix\" name=\"prix\" class=\"form-control form-control-lg\" step=\"0.01\" value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "query", [], "any", false, false, false, 24), "get", ["prix"], "method", false, false, false, 24), "html", null, true);
        yield "\" style=\"font-size: 1.25rem;\">
                </div>
                <div class=\"col-md-4\">
                    <label for=\"categorie\" class=\"form-label\" style=\"font-size: 1.25rem;\">Catégorie</label>
                    <select id=\"categorie\" name=\"categorie\" class=\"form-select form-select-lg\" style=\"font-size: 1.25rem;\">
                        <option value=\"\">Toutes les catégories</option>
                        <option value=\"Dessin\" ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "request", [], "any", false, false, false, 30), "query", [], "any", false, false, false, 30), "get", ["categorie"], "method", false, false, false, 30) == "Dessin")) {
            yield "selected";
        }
        yield ">Dessin</option>
                        <option value=\"Peinture\" ";
        // line 31
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "request", [], "any", false, false, false, 31), "query", [], "any", false, false, false, 31), "get", ["categorie"], "method", false, false, false, 31) == "Peinture")) {
            yield "selected";
        }
        yield ">Peinture</option>
                        <option value=\"Sculpture\" ";
        // line 32
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "request", [], "any", false, false, false, 32), "query", [], "any", false, false, false, 32), "get", ["categorie"], "method", false, false, false, 32) == "Sculpture")) {
            yield "selected";
        }
        yield ">Sculpture</option>
                        <option value=\"Edition\" ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "query", [], "any", false, false, false, 33), "get", ["categorie"], "method", false, false, false, 33) == "Edition")) {
            yield "selected";
        }
        yield ">Edition</option>
                        <option value=\"Photographie\" ";
        // line 34
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 34, $this->source); })()), "request", [], "any", false, false, false, 34), "query", [], "any", false, false, false, 34), "get", ["categorie"], "method", false, false, false, 34) == "Photographie")) {
            yield "selected";
        }
        yield ">Photographie</option>
                    </select>
                </div>
                <div class=\"col-12 d-flex justify-content-between align-items-center\">
    <a href=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_index", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "request", [], "any", false, false, false, 38), "query", [], "any", false, false, false, 38), "all", [], "any", false, false, false, 38), ["sort" => "nom"])), "html", null, true);
        yield "\" class=\"btn btn-lg mt-4\" style=\"font-size: 1.25rem; padding: 12px 30px; background-color: #8e44ad; color: white;\">Trier par nom</a>
    <button type=\"submit\" class=\"btn btn-lg mt-4\" style=\"font-size: 1.25rem; padding: 12px 30px; background-color: #ff8c00; color: white;\">Rechercher</button>
</div>
            </form>
        </div>

        <div class=\"card p-5 shadow-lg\" style=\"border-radius: 15px; background-color: #ffffff; width: 100%;\">
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\" style=\"font-size: 1.25rem;\"> <!-- Augmenté la taille de la police -->
                    <thead class=\"table-dark\" style=\"font-size: 1.5rem;\"> <!-- Augmenté la taille des en-têtes -->
                        <tr>
                            <th class=\"text-center\" style=\"padding: 20px;\">ID</th> <!-- Augmenté le padding -->
                            <th class=\"text-center\" style=\"padding: 20px;\">Nom de l'Œuvre</th>
                            <th class=\"text-center\" style=\"padding: 20px;\">Prix</th>
                            <th class=\"text-center\" style=\"padding: 20px;\">Catégorie</th>
                            <th class=\"text-center\" style=\"padding: 20px; overflow-wrap: break-word;\">Description</th>
                            <th class=\"text-center\" style=\"padding: 20px;\">Image</th>
                            <th class=\"text-center\" style=\"padding: 20px;\">Statut</th>
                            <th class=\"text-center\" style=\"padding: 20px; min-width: 300px;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 61
            yield "                            <tr style=\"padding: 15px;\">
                                <td class=\"text-center\" style=\"padding: 20px;\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield "</td>
                                <td style=\"padding: 20px; overflow-wrap: break-word;\">";
            // line 63
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 63)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 63), "html", null, true)) : ("Sans nom"));
            yield "</td>
                                <td class=\"text-center\" style=\"padding: 20px;\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 64) * 3), "html", null, true);
            yield " DT</td>
                                <td class=\"text-center\" style=\"padding: 20px;\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "categorie", [], "any", false, false, false, 65), "html", null, true);
            yield "</td>
                                <td style=\"padding: 20px; overflow-wrap: break-word;\">";
            // line 66
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 66)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 66), "html", null, true)) : ("Non disponible"));
            yield "</td>
                                <td class=\"text-center\" style=\"padding: 20px;\">
                                    ";
            // line 68
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 68)) {
                // line 69
                yield "                                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 69))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 69), "html", null, true);
                yield "\" style=\"width: 250px; height: auto; border-radius: 8px; max-width: 100%; object-fit: contain;\">
                                    ";
            } else {
                // line 71
                yield "                                        <span class=\"text-muted\">Aucune image</span>
                                    ";
            }
            // line 73
            yield "                                </td>
                                <td class=\"text-center\" style=\"padding: 20px;\">";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "approvalStatus", [], "any", false, false, false, 74), "html", null, true);
            yield "</td>
                                <td class=\"text-center d-flex justify-content-center gap-3\" style=\"padding: 20px; width: 100%;\">
                                    ";
            // line 76
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "approvalStatus", [], "any", false, false, false, 76) == "PENDING")) {
                // line 77
                yield "                                        <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 77)]), "html", null, true);
                yield "\" style=\"display: inline; margin: 0;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("approve" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 78))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-success btn-lg\" style=\"margin: 0; padding: 12px 24px; font-size: 1.25rem;\">Accepter</button> <!-- Augmenté la taille et le padding -->
                                        </form>
                                        <form method=\"post\" action=\"";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 81)]), "html", null, true);
                yield "\" style=\"display: inline; margin: 0;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("reject" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 82))), "html", null, true);
                yield "\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-lg\" style=\"margin: 0; padding: 12px 24px; font-size: 1.25rem;\">Rejeter</button>
                                        </form>
                                    ";
            }
            // line 86
            yield "                                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show_admin", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 86)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-lg\" style=\"margin: 0; padding: 12px 24px; font-size: 1.25rem;\">Détails</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        yield "                    </tbody>
                </table>
            </div>
        </div>
        ";
        // line 95
        yield "        ";
        // line 98
        yield "    </div>
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
        return "produit/index.html.twig";
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
        return array (  287 => 98,  285 => 95,  279 => 90,  268 => 86,  261 => 82,  257 => 81,  251 => 78,  246 => 77,  244 => 76,  239 => 74,  236 => 73,  232 => 71,  224 => 69,  222 => 68,  217 => 66,  213 => 65,  209 => 64,  205 => 63,  201 => 62,  198 => 61,  194 => 60,  169 => 38,  160 => 34,  154 => 33,  148 => 32,  142 => 31,  136 => 30,  127 => 24,  120 => 20,  114 => 17,  105 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-back.html.twig' %}

{% block title %}Gestion des Produits (Admin){% endblock %}

{% block body %}
    <div class=\"container-fluid mt-5\"> <!-- Changé de \"container\" à \"container-fluid\" pour plus de largeur -->
        <h1 class=\"text-center mb-5\" style=\"color: #2c3e50; font-size: 3rem;\">Gestion des Produits</h1> <!-- Augmenté la taille du titre -->

{# Juste après le bouton Rechercher dans le formulaire #}
<div class=\"col-12 text-center\">


</div>

        <!-- Formulaire de recherche avancée -->
        <div class=\"card p-5 mb-5 shadow-lg\" style=\"border-radius: 15px; background-color: #ffffff;\">
            <form method=\"GET\" action=\"{{ path('app_produit_index') }}\" class=\"row g-4\">
                <div class=\"col-md-4\">
                    <label for=\"nom\" class=\"form-label\" style=\"font-size: 1.25rem;\">Nom de l'Œuvre</label> <!-- Augmenté la taille du label -->
                    <input type=\"text\" id=\"nom\" name=\"nom\" class=\"form-control form-control-lg\" value=\"{{ app.request.query.get('nom') }}\" style=\"font-size: 1.25rem;\">
                </div>
                <div class=\"col-md-4\">
                    <label for=\"prix\" class=\"form-label\" style=\"font-size: 1.25rem;\">Prix (DT)</label>
                    <input type=\"number\" id=\"prix\" name=\"prix\" class=\"form-control form-control-lg\" step=\"0.01\" value=\"{{ app.request.query.get('prix') }}\" style=\"font-size: 1.25rem;\">
                </div>
                <div class=\"col-md-4\">
                    <label for=\"categorie\" class=\"form-label\" style=\"font-size: 1.25rem;\">Catégorie</label>
                    <select id=\"categorie\" name=\"categorie\" class=\"form-select form-select-lg\" style=\"font-size: 1.25rem;\">
                        <option value=\"\">Toutes les catégories</option>
                        <option value=\"Dessin\" {% if app.request.query.get('categorie') == 'Dessin' %}selected{% endif %}>Dessin</option>
                        <option value=\"Peinture\" {% if app.request.query.get('categorie') == 'Peinture' %}selected{% endif %}>Peinture</option>
                        <option value=\"Sculpture\" {% if app.request.query.get('categorie') == 'Sculpture' %}selected{% endif %}>Sculpture</option>
                        <option value=\"Edition\" {% if app.request.query.get('categorie') == 'Edition' %}selected{% endif %}>Edition</option>
                        <option value=\"Photographie\" {% if app.request.query.get('categorie') == 'Photographie' %}selected{% endif %}>Photographie</option>
                    </select>
                </div>
                <div class=\"col-12 d-flex justify-content-between align-items-center\">
    <a href=\"{{ path('app_produit_index', app.request.query.all|merge({'sort': 'nom'})) }}\" class=\"btn btn-lg mt-4\" style=\"font-size: 1.25rem; padding: 12px 30px; background-color: #8e44ad; color: white;\">Trier par nom</a>
    <button type=\"submit\" class=\"btn btn-lg mt-4\" style=\"font-size: 1.25rem; padding: 12px 30px; background-color: #ff8c00; color: white;\">Rechercher</button>
</div>
            </form>
        </div>

        <div class=\"card p-5 shadow-lg\" style=\"border-radius: 15px; background-color: #ffffff; width: 100%;\">
            <div class=\"table-responsive\">
                <table class=\"table table-striped table-hover\" style=\"font-size: 1.25rem;\"> <!-- Augmenté la taille de la police -->
                    <thead class=\"table-dark\" style=\"font-size: 1.5rem;\"> <!-- Augmenté la taille des en-têtes -->
                        <tr>
                            <th class=\"text-center\" style=\"padding: 20px;\">ID</th> <!-- Augmenté le padding -->
                            <th class=\"text-center\" style=\"padding: 20px;\">Nom de l'Œuvre</th>
                            <th class=\"text-center\" style=\"padding: 20px;\">Prix</th>
                            <th class=\"text-center\" style=\"padding: 20px;\">Catégorie</th>
                            <th class=\"text-center\" style=\"padding: 20px; overflow-wrap: break-word;\">Description</th>
                            <th class=\"text-center\" style=\"padding: 20px;\">Image</th>
                            <th class=\"text-center\" style=\"padding: 20px;\">Statut</th>
                            <th class=\"text-center\" style=\"padding: 20px; min-width: 300px;\">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for produit in produits %}
                            <tr style=\"padding: 15px;\">
                                <td class=\"text-center\" style=\"padding: 20px;\">{{ produit.id }}</td>
                                <td style=\"padding: 20px; overflow-wrap: break-word;\">{{ produit.nom ? produit.nom : 'Sans nom' }}</td>
                                <td class=\"text-center\" style=\"padding: 20px;\">{{ produit.prix * 3 }} DT</td>
                                <td class=\"text-center\" style=\"padding: 20px;\">{{ produit.categorie }}</td>
                                <td style=\"padding: 20px; overflow-wrap: break-word;\">{{ produit.description ? produit.description : 'Non disponible' }}</td>
                                <td class=\"text-center\" style=\"padding: 20px;\">
                                    {% if produit.image %}
                                        <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" alt=\"{{ produit.nom }}\" style=\"width: 250px; height: auto; border-radius: 8px; max-width: 100%; object-fit: contain;\">
                                    {% else %}
                                        <span class=\"text-muted\">Aucune image</span>
                                    {% endif %}
                                </td>
                                <td class=\"text-center\" style=\"padding: 20px;\">{{ produit.approvalStatus }}</td>
                                <td class=\"text-center d-flex justify-content-center gap-3\" style=\"padding: 20px; width: 100%;\">
                                    {% if produit.approvalStatus == 'PENDING' %}
                                        <form method=\"post\" action=\"{{ path('app_produit_approve', {'id': produit.id}) }}\" style=\"display: inline; margin: 0;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('approve' ~ produit.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-success btn-lg\" style=\"margin: 0; padding: 12px 24px; font-size: 1.25rem;\">Accepter</button> <!-- Augmenté la taille et le padding -->
                                        </form>
                                        <form method=\"post\" action=\"{{ path('app_produit_reject', {'id': produit.id}) }}\" style=\"display: inline; margin: 0;\">
                                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('reject' ~ produit.id) }}\">
                                            <button type=\"submit\" class=\"btn btn-danger btn-lg\" style=\"margin: 0; padding: 12px 24px; font-size: 1.25rem;\">Rejeter</button>
                                        </form>
                                    {% endif %}
                                    <a href=\"{{ path('app_produit_show_admin', {'id': produit.id}) }}\" class=\"btn btn-info btn-lg\" style=\"margin: 0; padding: 12px 24px; font-size: 1.25rem;\">Détails</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            </div>
        </div>
        {# Supprimer ou désactiver le bouton pour l'admin #}
        {# <div class=\"text-center mt-4\">
            <a href=\"{{ path('app_produit_new') }}\" class=\"btn btn-primary btn-lg\">Ajouter un Produit</a>
        </div> #}
    </div>
{% endblock %}", "produit/index.html.twig", "D:\\artistic-main\\artistic-main\\templates\\produit\\index.html.twig");
    }
}
