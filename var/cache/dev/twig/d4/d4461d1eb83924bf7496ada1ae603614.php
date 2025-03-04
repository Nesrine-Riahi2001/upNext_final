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

/* produit/show1.html.twig */
class __TwigTemplate_a7019b23329bc834a7c8a8af2ee59df3 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/show1.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/show1.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "produit/show1.html.twig", 1);
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

        yield "Détails de l'Œuvre";
        
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
        <div class=\"card p-4 shadow-sm\" style=\"max-width: 700px; margin: 0 auto; border-radius: 15px; background-color: #f5f6fa;\">
            <h1 class=\"text-center mb-4\" style=\"color: #e74c3c;\">Détails de l'Œuvre #";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 8, $this->source); })()), "id", [], "any", false, false, false, 8), "html", null, true);
        yield "</h1>
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th class=\"bg-dark text-white\">Image</th>
                            <td class=\"text-center\">
                                ";
        // line 15
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 15, $this->source); })()), "image", [], "any", false, false, false, 15)) {
            // line 16
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 16, $this->source); })()), "image", [], "any", false, false, false, 16))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 16, $this->source); })()), "nom", [], "any", false, false, false, 16), "html", null, true);
            yield "\" style=\"max-width: 100%; height: auto; border-radius: 10px;\">
                                ";
        } else {
            // line 18
            yield "                                    <span class=\"text-muted\">Aucune image disponible</span>
                                ";
        }
        // line 20
        yield "                            </td>
                        </tr>
                        <tr>
                            <th class=\"bg-dark text-white\">Identifiant</th>
                            <td class=\"text-center\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 24, $this->source); })()), "id", [], "any", false, false, false, 24), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"bg-dark text-white\">Nom</th>
                            <td class=\"text-center\">";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 28, $this->source); })()), "nom", [], "any", false, false, false, 28), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"bg-dark text-white\">Prix</th>
                            <td class=\"text-center\">";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 32, $this->source); })()), "prix", [], "any", false, false, false, 32), "html", null, true);
        yield " DT</td>
                        </tr>
                        <tr>
                            <th class=\"bg-dark text-white\">Catégorie</th>
                            <td class=\"text-center\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 36, $this->source); })()), "categorie", [], "any", false, false, false, 36), "html", null, true);
        yield "</td>
                        </tr>
                        <tr>
                            <th class=\"bg-dark text-white\">Description</th>
                            <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["produit"] ?? null), "description", [], "any", true, true, false, 40)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 40, $this->source); })()), "description", [], "any", false, false, false, 40), "Non disponible")) : ("Non disponible")), "html", null, true);
        yield "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"text-center mt-3\">
                <a href=\"";
        // line 46
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_list");
        yield "\" class=\"btn btn-secondary btn-lg\">Retour aux Œuvres</a>
                <a href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_add", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["produit"]) || array_key_exists("produit", $context) ? $context["produit"] : (function () { throw new RuntimeError('Variable "produit" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)]), "html", null, true);
        yield "\" class=\"btn btn-primary btn-lg\" style=\"background-color: #e74c3c; border-color: #e74c3c;\">Acheter</a>
            </div>
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
        return "produit/show1.html.twig";
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
        return array (  175 => 47,  171 => 46,  162 => 40,  155 => 36,  148 => 32,  141 => 28,  134 => 24,  128 => 20,  124 => 18,  116 => 16,  114 => 15,  104 => 8,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Détails de l'Œuvre{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <div class=\"card p-4 shadow-sm\" style=\"max-width: 700px; margin: 0 auto; border-radius: 15px; background-color: #f5f6fa;\">
            <h1 class=\"text-center mb-4\" style=\"color: #e74c3c;\">Détails de l'Œuvre #{{ produit.id }}</h1>
            <div class=\"table-responsive\">
                <table class=\"table table-bordered\">
                    <tbody>
                        <tr>
                            <th class=\"bg-dark text-white\">Image</th>
                            <td class=\"text-center\">
                                {% if produit.image %}
                                    <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" alt=\"{{ produit.nom }}\" style=\"max-width: 100%; height: auto; border-radius: 10px;\">
                                {% else %}
                                    <span class=\"text-muted\">Aucune image disponible</span>
                                {% endif %}
                            </td>
                        </tr>
                        <tr>
                            <th class=\"bg-dark text-white\">Identifiant</th>
                            <td class=\"text-center\">{{ produit.id }}</td>
                        </tr>
                        <tr>
                            <th class=\"bg-dark text-white\">Nom</th>
                            <td class=\"text-center\">{{ produit.nom }}</td>
                        </tr>
                        <tr>
                            <th class=\"bg-dark text-white\">Prix</th>
                            <td class=\"text-center\">{{ produit.prix }} DT</td>
                        </tr>
                        <tr>
                            <th class=\"bg-dark text-white\">Catégorie</th>
                            <td class=\"text-center\">{{ produit.categorie }}</td>
                        </tr>
                        <tr>
                            <th class=\"bg-dark text-white\">Description</th>
                            <td>{{ produit.description|default('Non disponible') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class=\"text-center mt-3\">
                <a href=\"{{ path('app_produit_list') }}\" class=\"btn btn-secondary btn-lg\">Retour aux Œuvres</a>
                <a href=\"{{ path('app_cart_add', {'id': produit.id}) }}\" class=\"btn btn-primary btn-lg\" style=\"background-color: #e74c3c; border-color: #e74c3c;\">Acheter</a>
            </div>
        </div>
    </div>
{% endblock %}", "produit/show1.html.twig", "D:\\artistic-main\\artistic-main\\templates\\produit\\show1.html.twig");
    }
}
