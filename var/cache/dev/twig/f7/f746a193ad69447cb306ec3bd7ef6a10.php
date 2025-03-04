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

/* quiz/index.html.twig */
class __TwigTemplate_62b9fa0bf2258fc84f1478dad7f6de8f extends Template
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
            'head' => [$this, 'block_head'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/index.html.twig"));

        $this->parent = $this->loadTemplate("base-back.html.twig", "quiz/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 3
        yield "\t<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">

\t\t<title>SB Admin 2 - Dashboard</title>

\t\t<!-- Custom fonts for this template-->
\t\t<link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

\t\t<!-- Custom styles for this template-->
\t\t<link href=\"";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/css/sb-admin-2.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">


\t</head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 25
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

        yield "Liste des Quiz";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 27
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

        // line 28
        yield "    <h1>Liste des Quiz</h1>

    <!-- Formulaire de recherche en AJAX -->
    <form id=\"searchForm\" action=\"";
        // line 31
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_search");
        yield "\" method=\"GET\" class=\"mb-4\">
        <div class=\"input-group\">
            <input type=\"text\" name=\"title\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher par titre...\" value=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "request", [], "any", false, false, false, 33), "query", [], "any", false, false, false, 33), "get", ["title", ""], "method", false, false, false, 33), "html", null, true);
        yield "\">
        </div>
    </form>

    <!-- Formulaire pour ajouter un nouveau quiz -->
    <h2>Ajouter un nouveau quiz</h2>
    ";
        // line 39
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["quizForm"]) || array_key_exists("quizForm", $context) ? $context["quizForm"] : (function () { throw new RuntimeError('Variable "quizForm" does not exist.', 39, $this->source); })()), 'form_start');
        yield "
        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["quizForm"]) || array_key_exists("quizForm", $context) ? $context["quizForm"] : (function () { throw new RuntimeError('Variable "quizForm" does not exist.', 40, $this->source); })()), 'widget');
        yield "
        <button type=\"submit\" class=\"btn btn-success\">Créer un quiz</button>
    ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["quizForm"]) || array_key_exists("quizForm", $context) ? $context["quizForm"] : (function () { throw new RuntimeError('Variable "quizForm" does not exist.', 42, $this->source); })()), 'form_end');
        yield "

    <!-- Options de tri -->
<div class=\"mb-3\">
    <form method=\"GET\" id=\"sortForm\">
        <label for=\"sortBy\">Trier par :</label>
        <select name=\"sortBy\" id=\"sortBy\" class=\"form-select\">
            <option value=\"titreQuiz\" ";
        // line 49
        if (((isset($context["currentSortBy"]) || array_key_exists("currentSortBy", $context) ? $context["currentSortBy"] : (function () { throw new RuntimeError('Variable "currentSortBy" does not exist.', 49, $this->source); })()) == "titreQuiz")) {
            yield "selected";
        }
        yield ">Titre</option>
            <option value=\"sujet\" ";
        // line 50
        if (((isset($context["currentSortBy"]) || array_key_exists("currentSortBy", $context) ? $context["currentSortBy"] : (function () { throw new RuntimeError('Variable "currentSortBy" does not exist.', 50, $this->source); })()) == "sujet")) {
            yield "selected";
        }
        yield ">Sujet</option>
            <option value=\"nombre_questions\" ";
        // line 51
        if (((isset($context["currentSortBy"]) || array_key_exists("currentSortBy", $context) ? $context["currentSortBy"] : (function () { throw new RuntimeError('Variable "currentSortBy" does not exist.', 51, $this->source); })()) == "nombre_questions")) {
            yield "selected";
        }
        yield ">Nombre de questions</option>
        </select>
        <label for=\"order\">Ordre :</label>
        <select name=\"order\" id=\"order\" class=\"form-select\">
            <option value=\"ASC\" ";
        // line 55
        if (((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 55, $this->source); })()) == "ASC")) {
            yield "selected";
        }
        yield ">Croissant</option>
            <option value=\"DESC\" ";
        // line 56
        if (((isset($context["currentOrder"]) || array_key_exists("currentOrder", $context) ? $context["currentOrder"] : (function () { throw new RuntimeError('Variable "currentOrder" does not exist.', 56, $this->source); })()) == "DESC")) {
            yield "selected";
        }
        yield ">Décroissant</option>
        </select>
    </form>
</div>

    <!-- Liste des quiz en AJAX -->
    <h2>Quiz existants</h2>
    <div id=\"quizList\">
        ";
        // line 64
        yield from $this->loadTemplate("quiz/_quiz_list.html.twig", "quiz/index.html.twig", 64)->unwrap()->yield($context);
        // line 65
        yield "    </div>

    <!-- Bouton pour générer le PDF -->
    <div class=\"mb-3\">
        <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_pdf");
        yield "\" class=\"btn btn-danger\">📄 Télécharger en PDF</a>
    </div>

    <!-- Script AJAX -->
    <script>
    document.getElementById(\"searchInput\").addEventListener(\"input\", function() {
        let query = this.value;

        fetch(\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_search");
        yield "?title=\" + encodeURIComponent(query), {
            method: \"GET\",
            headers: { \"X-Requested-With\": \"XMLHttpRequest\" }
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById(\"quizList\").innerHTML = html;
        })
        .catch(error => console.error(\"Erreur AJAX :\", error));
    });

    document.getElementById(\"sortBy\").addEventListener(\"change\", updateQuizList);
    document.getElementById(\"order\").addEventListener(\"change\", updateQuizList);

    function updateQuizList() {
        let sortBy = document.getElementById(\"sortBy\").value;
        let order = document.getElementById(\"order\").value;

        fetch(\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_search");
        yield "?sortBy=\" + encodeURIComponent(sortBy) + \"&order=\" + encodeURIComponent(order), {
            method: \"GET\",
            headers: { \"X-Requested-With\": \"XMLHttpRequest\" }
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById(\"quizList\").innerHTML = html;
        })
        .catch(error => console.error(\"Erreur AJAX :\", error));
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
        return "quiz/index.html.twig";
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
        return array (  269 => 95,  248 => 77,  237 => 69,  231 => 65,  229 => 64,  216 => 56,  210 => 55,  201 => 51,  195 => 50,  189 => 49,  179 => 42,  174 => 40,  170 => 39,  161 => 33,  156 => 31,  151 => 28,  138 => 27,  115 => 25,  99 => 19,  91 => 14,  78 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-back.html.twig' %}
{% block head %}
\t<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">

\t\t<title>SB Admin 2 - Dashboard</title>

\t\t<!-- Custom fonts for this template-->
\t\t<link href=\"{{ asset('asset1/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

\t\t<!-- Custom styles for this template-->
\t\t<link href=\"{{ asset('asset1/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">


\t</head>
{% endblock %}

{% block title %}Liste des Quiz{% endblock %}

{% block body %}
    <h1>Liste des Quiz</h1>

    <!-- Formulaire de recherche en AJAX -->
    <form id=\"searchForm\" action=\"{{ path('quiz_search') }}\" method=\"GET\" class=\"mb-4\">
        <div class=\"input-group\">
            <input type=\"text\" name=\"title\" id=\"searchInput\" class=\"form-control\" placeholder=\"Rechercher par titre...\" value=\"{{ app.request.query.get('title', '') }}\">
        </div>
    </form>

    <!-- Formulaire pour ajouter un nouveau quiz -->
    <h2>Ajouter un nouveau quiz</h2>
    {{ form_start(quizForm) }}
        {{ form_widget(quizForm) }}
        <button type=\"submit\" class=\"btn btn-success\">Créer un quiz</button>
    {{ form_end(quizForm) }}

    <!-- Options de tri -->
<div class=\"mb-3\">
    <form method=\"GET\" id=\"sortForm\">
        <label for=\"sortBy\">Trier par :</label>
        <select name=\"sortBy\" id=\"sortBy\" class=\"form-select\">
            <option value=\"titreQuiz\" {% if currentSortBy == 'titreQuiz' %}selected{% endif %}>Titre</option>
            <option value=\"sujet\" {% if currentSortBy == 'sujet' %}selected{% endif %}>Sujet</option>
            <option value=\"nombre_questions\" {% if currentSortBy == 'nombre_questions' %}selected{% endif %}>Nombre de questions</option>
        </select>
        <label for=\"order\">Ordre :</label>
        <select name=\"order\" id=\"order\" class=\"form-select\">
            <option value=\"ASC\" {% if currentOrder == 'ASC' %}selected{% endif %}>Croissant</option>
            <option value=\"DESC\" {% if currentOrder == 'DESC' %}selected{% endif %}>Décroissant</option>
        </select>
    </form>
</div>

    <!-- Liste des quiz en AJAX -->
    <h2>Quiz existants</h2>
    <div id=\"quizList\">
        {% include 'quiz/_quiz_list.html.twig' %}
    </div>

    <!-- Bouton pour générer le PDF -->
    <div class=\"mb-3\">
        <a href=\"{{ path('quiz_pdf') }}\" class=\"btn btn-danger\">📄 Télécharger en PDF</a>
    </div>

    <!-- Script AJAX -->
    <script>
    document.getElementById(\"searchInput\").addEventListener(\"input\", function() {
        let query = this.value;

        fetch(\"{{ path('quiz_search') }}?title=\" + encodeURIComponent(query), {
            method: \"GET\",
            headers: { \"X-Requested-With\": \"XMLHttpRequest\" }
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById(\"quizList\").innerHTML = html;
        })
        .catch(error => console.error(\"Erreur AJAX :\", error));
    });

    document.getElementById(\"sortBy\").addEventListener(\"change\", updateQuizList);
    document.getElementById(\"order\").addEventListener(\"change\", updateQuizList);

    function updateQuizList() {
        let sortBy = document.getElementById(\"sortBy\").value;
        let order = document.getElementById(\"order\").value;

        fetch(\"{{ path('quiz_search') }}?sortBy=\" + encodeURIComponent(sortBy) + \"&order=\" + encodeURIComponent(order), {
            method: \"GET\",
            headers: { \"X-Requested-With\": \"XMLHttpRequest\" }
        })
        .then(response => response.text())
        .then(html => {
            document.getElementById(\"quizList\").innerHTML = html;
        })
        .catch(error => console.error(\"Erreur AJAX :\", error));
    }
    </script>

{% endblock %}
", "quiz/index.html.twig", "D:\\artistic-main\\artistic-main\\templates\\quiz\\index.html.twig");
    }
}
