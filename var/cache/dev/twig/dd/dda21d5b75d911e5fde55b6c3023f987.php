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

/* commande/chart.html.twig */
class __TwigTemplate_a0c4bed8dd80baeb79ac33177803d1d0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/chart.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/chart.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "commande/chart.html.twig", 1);
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

        yield "Statistiques des Commandes";
        
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
        <h1 class=\"text-center mb-5\" style=\"color: #e74c3c; font-size: 2.5rem;\">Statistiques des Commandes</h1>

        <div class=\"card p-4 shadow-sm\" style=\"max-width: 700px; margin: 0 auto; border-radius: 15px; background-color: #f5f6fa;\">
            <div class=\"col-xl-12\">
                <div class=\"card shadow mb-4\">
                    <!-- Card Header -->
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Répartition des Catégories dans les Commandes</h6>
                    </div>
                    <!-- Card Body -->
                    <div class=\"card-body\">
                        <div class=\"chart-pie pt-4\">
                            <canvas id=\"myPieChart\"></canvas>
                        </div>
                        <hr>
                        Ces statistiques montrent la répartition des catégories de produits dans toutes les commandes.
                    </div>
                </div>
            </div>
            <div class=\"d-flex justify-content-between align-items-center mt-3\">
                <a href=\"";
        // line 27
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
        yield "\" class=\"btn btn-secondary btn-lg\" style=\"font-size: 1.25rem; padding: 12px 30px;\">Retour aux Commandes</a>
                <a href=\"";
        // line 28
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_artist_list");
        yield "\" class=\"btn btn-secondary btn-lg\" style=\"font-size: 1.25rem; padding: 12px 30px;\">Retour aux Œuvres</a>
            </div>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('myPieChart').getContext('2d');
            var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: ";
        // line 41
        yield (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 41, $this->source); })());
        yield ", // JSON-encoded labels from controller
                    datasets: [{
                        data: ";
        // line 43
        yield (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 43, $this->source); })());
        yield ", // JSON-encoded data from controller
                        backgroundColor: [
                            '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'
                        ],
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Répartition des Catégories'
                        }
                    }
                }
            });
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
        return "commande/chart.html.twig";
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
        return array (  148 => 43,  143 => 41,  127 => 28,  123 => 27,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Statistiques des Commandes{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-5\" style=\"color: #e74c3c; font-size: 2.5rem;\">Statistiques des Commandes</h1>

        <div class=\"card p-4 shadow-sm\" style=\"max-width: 700px; margin: 0 auto; border-radius: 15px; background-color: #f5f6fa;\">
            <div class=\"col-xl-12\">
                <div class=\"card shadow mb-4\">
                    <!-- Card Header -->
                    <div class=\"card-header py-3\">
                        <h6 class=\"m-0 font-weight-bold text-primary\">Répartition des Catégories dans les Commandes</h6>
                    </div>
                    <!-- Card Body -->
                    <div class=\"card-body\">
                        <div class=\"chart-pie pt-4\">
                            <canvas id=\"myPieChart\"></canvas>
                        </div>
                        <hr>
                        Ces statistiques montrent la répartition des catégories de produits dans toutes les commandes.
                    </div>
                </div>
            </div>
            <div class=\"d-flex justify-content-between align-items-center mt-3\">
                <a href=\"{{ path('app_commande_index') }}\" class=\"btn btn-secondary btn-lg\" style=\"font-size: 1.25rem; padding: 12px 30px;\">Retour aux Commandes</a>
                <a href=\"{{ path('app_produit_artist_list') }}\" class=\"btn btn-secondary btn-lg\" style=\"font-size: 1.25rem; padding: 12px 30px;\">Retour aux Œuvres</a>
            </div>
        </div>
    </div>

    <!-- Chart.js Script -->
    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var ctx = document.getElementById('myPieChart').getContext('2d');
            var myPieChart = new Chart(ctx, {
                type: 'doughnut',
                data: {
                    labels: {{ labels|raw }}, // JSON-encoded labels from controller
                    datasets: [{
                        data: {{ data|raw }}, // JSON-encoded data from controller
                        backgroundColor: [
                            '#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF'
                        ],
                        hoverOffset: 4
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Répartition des Catégories'
                        }
                    }
                }
            });
        });
    </script>
{% endblock %}", "commande/chart.html.twig", "D:\\artistic-main\\artistic-main\\templates\\commande\\chart.html.twig");
    }
}
