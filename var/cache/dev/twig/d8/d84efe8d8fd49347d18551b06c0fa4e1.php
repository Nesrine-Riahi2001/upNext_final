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

/* produit/stats.html.twig */
class __TwigTemplate_b247197d9222d8df1899fbf0750e8705 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/stats.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/stats.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "produit/stats.html.twig", 1);
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

        yield "Statistiques des Catégories";
        
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
        yield "    <div class=\"container mt-5 d-flex flex-column align-items-center\">
        <h1 class=\"text-center mb-5\" style=\"color: #2c3e50; font-size: 2.5rem;\">Statistiques des Catégories</h1>

        <div class=\"card p-4 shadow-sm mb-5\" style=\"width: 80%; max-width: 800px; border-radius: 15px; background-color: #f8f9fa;\">
            <h2 class=\"text-center mb-4\" style=\"color: #27ae60;\">Répartition des Achats par Catégorie</h2>
            <table class=\"table table-striped text-center\">
                <thead>
                    <tr>
                        <th>Catégorie</th>
                        <th>Pourcentage (%)</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categoryPercentages"]) || array_key_exists("categoryPercentages", $context) ? $context["categoryPercentages"] : (function () { throw new RuntimeError('Variable "categoryPercentages" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["category"] => $context["percentage"]) {
            // line 20
            yield "                        <tr>
                            <td>";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "</td>
                            <td>";
            // line 22
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["percentage"], "html", null, true);
            yield "%</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['category'], $context['percentage'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        yield "                </tbody>
            </table>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"";
        // line 30
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_list");
        yield "\" class=\"btn btn-secondary btn-lg\">Retour aux produits</a>
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
        return "produit/stats.html.twig";
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
        return array (  142 => 30,  135 => 25,  126 => 22,  122 => 21,  119 => 20,  115 => 19,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Statistiques des Catégories{% endblock %}

{% block body %}
    <div class=\"container mt-5 d-flex flex-column align-items-center\">
        <h1 class=\"text-center mb-5\" style=\"color: #2c3e50; font-size: 2.5rem;\">Statistiques des Catégories</h1>

        <div class=\"card p-4 shadow-sm mb-5\" style=\"width: 80%; max-width: 800px; border-radius: 15px; background-color: #f8f9fa;\">
            <h2 class=\"text-center mb-4\" style=\"color: #27ae60;\">Répartition des Achats par Catégorie</h2>
            <table class=\"table table-striped text-center\">
                <thead>
                    <tr>
                        <th>Catégorie</th>
                        <th>Pourcentage (%)</th>
                    </tr>
                </thead>
                <tbody>
                    {% for category, percentage in categoryPercentages %}
                        <tr>
                            <td>{{ category }}</td>
                            <td>{{ percentage }}%</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        </div>

        <div class=\"text-center mt-4\">
            <a href=\"{{ path('app_produit_list') }}\" class=\"btn btn-secondary btn-lg\">Retour aux produits</a>
        </div>
    </div>
{% endblock %}", "produit/stats.html.twig", "D:\\artistic-main\\artistic-main\\templates\\produit\\stats.html.twig");
    }
}
