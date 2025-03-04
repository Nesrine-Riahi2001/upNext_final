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

/* reclamation/pdf_report.html.twig */
class __TwigTemplate_5972535db9096b99c33f8cbb76be5bd5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pdf_report.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/pdf_report.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Rapport des Réclamations</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            background-color: #4e73df;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin: 10px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4e73df;
            color: white;
            font-size: 14px;
        }
        td {
            font-size: 12px;
            background-color: #f8f9fc;
        }
        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }
        tr:hover td {
            background-color: #f0f8ff;
        }
        footer {
            text-align: center;
            padding: 15px;
            font-size: 12px;
            background-color: #4e73df;
            color: white;
            margin-top: 30px;
        }
        .container {
            width: 90%;
            margin: auto;
        }
    </style>
</head>
<body>

<header>
    <h1>Rapport des Réclamations</h1>
</header>

<div class=\"container\">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Email Client</th>
                <th>Date de Création</th>
                <th>Date de Résolution</th>
                <th>Type de Réclamation</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 84
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 84, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 85
            yield "                <tr>
                    <td>";
            // line 86
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 86), "html", null, true);
            yield "</td>
                    <td>";
            // line 87
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "titre", [], "any", false, false, false, 87), "html", null, true);
            yield "</td>
                    <td>";
            // line 88
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "mailClientRec", [], "any", false, false, false, 88), "html", null, true);
            yield "</td>
                    <td>";
            // line 89
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateCreationRec", [], "any", false, false, false, 89), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                    <td>";
            // line 90
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateResolutionRec", [], "any", false, false, false, 90)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "dateResolutionRec", [], "any", false, false, false, 90), "d/m/Y H:i"), "html", null, true)) : ("Non résolu"));
            yield "</td>
                    <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "typeRec", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                    <td>";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "descriptionRec", [], "any", false, false, false, 92), "html", null, true);
            yield "</td>
                    <td>";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "statusRec", [], "any", false, false, false, 93), "html", null, true);
            yield "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rec'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "        </tbody>
    </table>
</div>

<footer>
    <p>Generated by Mariem</p>
</footer>

</body>
</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reclamation/pdf_report.html.twig";
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
        return array (  177 => 96,  168 => 93,  164 => 92,  160 => 91,  156 => 90,  152 => 89,  148 => 88,  144 => 87,  140 => 86,  137 => 85,  133 => 84,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Rapport des Réclamations</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header {
            background-color: #4e73df;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        h1 {
            font-size: 24px;
            margin: 10px 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4e73df;
            color: white;
            font-size: 14px;
        }
        td {
            font-size: 12px;
            background-color: #f8f9fc;
        }
        tr:nth-child(even) td {
            background-color: #f1f1f1;
        }
        tr:hover td {
            background-color: #f0f8ff;
        }
        footer {
            text-align: center;
            padding: 15px;
            font-size: 12px;
            background-color: #4e73df;
            color: white;
            margin-top: 30px;
        }
        .container {
            width: 90%;
            margin: auto;
        }
    </style>
</head>
<body>

<header>
    <h1>Rapport des Réclamations</h1>
</header>

<div class=\"container\">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Titre</th>
                <th>Email Client</th>
                <th>Date de Création</th>
                <th>Date de Résolution</th>
                <th>Type de Réclamation</th>
                <th>Description</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            {% for rec in reclamations %}
                <tr>
                    <td>{{ rec.id }}</td>
                    <td>{{ rec.titre }}</td>
                    <td>{{ rec.mailClientRec }}</td>
                    <td>{{ rec.dateCreationRec | date('d/m/Y H:i') }}</td>
                    <td>{{ rec.dateResolutionRec ? rec.dateResolutionRec | date('d/m/Y H:i') : 'Non résolu' }}</td>
                    <td>{{ rec.typeRec }}</td>
                    <td>{{ rec.descriptionRec }}</td>
                    <td>{{ rec.statusRec }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>

<footer>
    <p>Generated by Mariem</p>
</footer>

</body>
</html>
", "reclamation/pdf_report.html.twig", "D:\\artistic-main\\artistic-main\\templates\\reclamation\\pdf_report.html.twig");
    }
}
