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

/* produit/list.html.twig */
class __TwigTemplate_49212570434a65dee4da34a95b357c40 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/list.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "produit/list.html.twig", 1);
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

        yield "Liste des Produits";
        
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
        yield "    <div class=\"container\">
        <h1 style=\"text-align: center; margin-bottom: 30px; font-size: 2.5rem;\">Liste des Produits</h1>
";
        // line 9
        yield "<div class=\"col-12 text-center\">

</div>

        <div class=\"card p-4 mb-4 shadow-sm\" style=\"border-radius: 15px; background-color: #f8f9fa;\">
            <form method=\"GET\" action=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_list");
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
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_list", Twig\Extension\CoreExtension::merge(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 35, $this->source); })()), "request", [], "any", false, false, false, 35), "query", [], "any", false, false, false, 35), "all", [], "any", false, false, false, 35), ["sort" => "nom"])), "html", null, true);
        yield "\" class=\"btn btn-lg mt-3\" style=\"font-size: 1.1rem; background-color: #8e44ad; color: white;\">Trier par nom</a>
    <button type=\"submit\" class=\"btn btn-lg mt-3\" style=\"font-size: 1.1rem; background-color: #ff8c00; color: white;\">Rechercher</button>
</div>
            </form>
        </div>

        <div class=\"row\">
            ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 42, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 43
            yield "                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\" style=\"border-radius: 15px;\">
                        ";
            // line 45
            if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 45)) {
                // line 46
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                yield "\">
                                <img src=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 47))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 47), "html", null, true);
                yield "\" class=\"card-img-top\" style=\"height: 300px; object-fit: cover; border-radius: 15px 15px 0 0;\">
                            </a>
                        ";
            } else {
                // line 50
                yield "                            <span>Pas d'image</span>
                        ";
            }
            // line 52
            yield "                        <div class=\"card-body p-4\">
                            <h5 class=\"card-title\" style=\"font-size: 1.5rem;\">";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 53), "html", null, true);
            yield "</h5>
                            <p class=\"card-text\" style=\"font-size: 1.1rem;\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 54), "html", null, true);
            yield "</p>
                            <p class=\"card-text\" style=\"font-size: 1.2rem; font-weight: bold; color: #27ae60;\"><strong>Prix:</strong> ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 55), "html", null, true);
            yield " DT</strong></p>
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div class=\"btn-group\">
                                    <a href=\"";
            // line 58
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-secondary\" style=\"font-size: 1.1rem;\">Acheter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 64
        if (!$context['_iterated']) {
            // line 65
            yield "                <div class=\"col-12\">
                    <p class=\"text-center\" style=\"font-size: 1.2rem;\">Aucun produit disponible.</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "        </div>
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
        return "produit/list.html.twig";
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
        return array (  243 => 69,  234 => 65,  232 => 64,  221 => 58,  215 => 55,  211 => 54,  207 => 53,  204 => 52,  200 => 50,  192 => 47,  187 => 46,  185 => 45,  181 => 43,  176 => 42,  166 => 35,  157 => 31,  151 => 30,  145 => 29,  139 => 28,  133 => 27,  124 => 21,  117 => 17,  111 => 14,  104 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Liste des Produits{% endblock %}

{% block body %}
    <div class=\"container\">
        <h1 style=\"text-align: center; margin-bottom: 30px; font-size: 2.5rem;\">Liste des Produits</h1>
{# Juste après le bouton Rechercher dans le formulaire #}
<div class=\"col-12 text-center\">

</div>

        <div class=\"card p-4 mb-4 shadow-sm\" style=\"border-radius: 15px; background-color: #f8f9fa;\">
            <form method=\"GET\" action=\"{{ path('app_produit_list') }}\" class=\"row g-3\">
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
    <a href=\"{{ path('app_produit_list', app.request.query.all|merge({'sort': 'nom'})) }}\" class=\"btn btn-lg mt-3\" style=\"font-size: 1.1rem; background-color: #8e44ad; color: white;\">Trier par nom</a>
    <button type=\"submit\" class=\"btn btn-lg mt-3\" style=\"font-size: 1.1rem; background-color: #ff8c00; color: white;\">Rechercher</button>
</div>
            </form>
        </div>

        <div class=\"row\">
            {% for produit in produits %}
                <div class=\"col-md-4\">
                    <div class=\"card mb-4 shadow-sm\" style=\"border-radius: 15px;\">
                        {% if produit.image %}
                            <a href=\"{{ path('app_produit_show', {'id': produit.id}) }}\">
                                <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" alt=\"{{ produit.nom }}\" class=\"card-img-top\" style=\"height: 300px; object-fit: cover; border-radius: 15px 15px 0 0;\">
                            </a>
                        {% else %}
                            <span>Pas d'image</span>
                        {% endif %}
                        <div class=\"card-body p-4\">
                            <h5 class=\"card-title\" style=\"font-size: 1.5rem;\">{{ produit.nom }}</h5>
                            <p class=\"card-text\" style=\"font-size: 1.1rem;\">{{ produit.description }}</p>
                            <p class=\"card-text\" style=\"font-size: 1.2rem; font-weight: bold; color: #27ae60;\"><strong>Prix:</strong> {{ produit.prix }} DT</strong></p>
                            <div class=\"d-flex justify-content-between align-items-center\">
                                <div class=\"btn-group\">
                                    <a href=\"{{ path('app_cart_add', {'id': produit.id}) }}\" class=\"btn btn-sm btn-outline-secondary\" style=\"font-size: 1.1rem;\">Acheter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"col-12\">
                    <p class=\"text-center\" style=\"font-size: 1.2rem;\">Aucun produit disponible.</p>
                </div>
            {% endfor %}
        </div>
    </div>
{% endblock %}", "produit/list.html.twig", "D:\\artistic-main\\artistic-main\\templates\\produit\\list.html.twig");
    }
}
