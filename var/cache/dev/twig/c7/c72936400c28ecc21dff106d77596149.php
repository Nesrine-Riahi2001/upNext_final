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

/* event/index.html.twig */
class __TwigTemplate_940c977b9042c3303428c6d8d86d6b12 extends Template
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
            'body' => [$this, 'block_body'],
            'boutton' => [$this, 'block_boutton'],
            'search' => [$this, 'block_search'],
            'top' => [$this, 'block_top'],
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 2
        return "baseAdmin1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/index.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin1.html.twig", "event/index.html.twig", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "\t<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">

\t\t<title>suivie comptes</title>
\t\t
\t\t\t<link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/img/up-next logo png.png"), "html", null, true);
        yield "\" rel=\"icon\">

\t\t<!-- Custom fonts for this template-->
\t\t<link href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

\t\t<!-- Custom styles for this template-->
\t\t<link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/css/sb-admin-2.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

\t


\t</head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 31
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

        // line 32
        yield "<body
\tid=\"page-top\">

\t<!-- Page Wrapper -->
\t<div
\t\tid=\"wrapper\">

\t\t<!-- Sidebar -->
<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

<!-- Sidebar - Brand -->
<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 43
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" >

<img src=\"assets/img/up-next.png\" alt=\"no photo\" height=\"50\" >
</a>


<!-- Divider -->
<hr class=\"sidebar-divider my-0\">



<!-- Nav Item - Dashboard -->
<li class=\"nav-item active\">
    <a class=\"nav-link\" href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\">
        
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class=\"sidebar-divider\">

<!-- Heading -->
<div class=\"sidebar-heading\">
    Gestion
</div>

<!-- configuer les route ou href pour chaque gestion  -->

<li class=\"nav-item\">
<a class=\"nav-link\" href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_compte");
        yield "\">
   
    <span>suivie les comptes</span>
</a>
</li>

<!-- Nav Item - Suivi des Réclamations -->
<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 80
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_admin");
        yield "\">
     
        <span>Gestion des Réclamations</span>
    </a>
</li>

<!-- Nav Item - Gestion Événements -->
<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_index");
        yield "\">
       
        <span>Gestion Événements</span>
    </a>
</li>


<li class=\"nav-item\">
<a class=\"nav-link\" href=\"\">
    
    <span>Gestion produit</span>
</a>
</li>
<!-- Nav Item - Gestion reservation -->
<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 103
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservations");
        yield "\">
       
        <span>Gestion Réservations</span>
    </a>
</li>
  <!-- Nav Item - Gestion quiz -->
  <li class=\"nav-item\">
  <a class=\"nav-link\" href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_index");
        yield "\">
    
      <span>Gestion quiz</span>
  </a>
</li>


<!-- Nav Item - Gestion quize -->
<li class=\"nav-item\">
<a class=\"nav-link\" href=\"\">
   
   <span>Gestion Meet_up</span>
</a>
</li>
<!-- Divider -->
";
        // line 125
        yield from $this->unwrap()->yieldBlock('boutton', $context, $blocks);
        // line 133
        yield "

<!-- Sidebar Toggler (Sidebar) -->


</ul>
<!-- End of Sidebar -->
\t
\t\t<!-- End of Sidebar -->

\t\t<!-- Content Wrapper -->
\t\t<div
\t\t\tid=\"content-wrapper\" class=\"d-flex flex-column\">

\t\t\t<!-- Main Content -->
\t\t\t<div
\t\t\t\tid=\"content\">

\t\t\t\t<!-- Topbar -->
\t\t\t\t<nav
\t\t\t\t\tclass=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

\t\t\t\t\t<!-- Sidebar Toggle (Topbar) -->
\t\t\t\t\t<button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t</button>

\t\t\t\t\t<!-- Topbar Search -->
\t\t\t\t\t";
        // line 161
        yield from $this->unwrap()->yieldBlock('search', $context, $blocks);
        // line 177
        yield "
\t\t\t\t\t<!-- Topbar Navbar -->
\t\t\t\t\t<ul
\t\t\t\t\t\tclass=\"navbar-nav ml-auto\">

\t\t\t\t\t\t<!-- Nav Item - Search Dropdown (Visible Only XS) -->
\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow d-sm-none\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
\t\t\t\t\t\t\t\t<form class=\"form-inline mr-auto w-100 navbar-search\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Nav Item - Alerts -->
\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-bell fa-fw\"></i>
\t\t\t\t\t\t\t\t<!-- Counter - Alerts -->
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - Alerts -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Nav Item - Messages -->
\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope fa-fw\"></i>
\t\t\t\t\t\t\t\t<!-- Counter - Messages -->
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<div class=\"topbar-divider d-none d-sm-block\"></div>

\t\t\t\t\t\t<!-- Nav Item - User Information -->
\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img class=\"img-profile rounded-circle\" src=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/img/undraw_profile.svg"), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>

\t\t\t\t</nav>
\t\t\t\t<!-- End of Topbar -->


\t\t\t\t<!-- Begin Page Content -->
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid\">

\t\t\t\t\t<!-- Page Heading -->
\t\t\t\t\t<!-- Page Heading -->
<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
<h1 class=\"h3 mb-1 text-gray-800\">Suivie les Événements</h1>
</div>



\t\t\t\t\t";
        // line 271
        yield "
                       <!-- DataTales Example -->
                   <div class=\"card shadow mb-4\">
  
    <div class=\"card-body\">
        <div class=\"table-responsive\">
         
\t\t<div class=\"container-fluid\">

   
<style>
    /* Center the Table */
    .table-container {
        max-width: 1300px;  /* Adjust width as needed */
        margin: 20px auto; /* Center horizontally and add equal spacing */
        padding: 25px;
        background: white;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0.2, 0.2);
    }
    
    /* Ensures equal vertical spacing between containers */
    .table-container + .table-container {
        margin-top: 20px; /* Consistent spacing between stacked containers */
    }

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 15px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

/* Header Styling */
th, td {
    padding: 10px; /* Reduce padding */
    text-align: center; /* Center text */
    border-right: 1px solid #ddd;
}

/* Remove Border on Last Column */
th:last-child, td:last-child {
    border-right: none;
}

/* Table Header */
thead {
    background-color: rgb(249, 85, 85);
    color: white;
    text-transform: uppercase;
}

/* Alternate Row Colors */
tbody tr:nth-child(even) {
    background-color: rgb(225, 231, 243);
}

/* Hover Effect */
tbody tr:hover {
    background-color: rgba(245, 247, 249, 0.44);
}

/* Section Titles */
h2 {
    text-align: center;
    color: #333;
    border-bottom: 3px solidhsl(0, 71.70%, 61.20%);
    display: inline-block;
    padding-bottom: 5px;
}

/* Adjust Action Icons */
.action-icons a {
    font-size: 18px; /* Smaller icons */
    padding: 4px;
    text-decoration: none;
    color: #333;
}

.action-icons a:hover {
    color: rgb(83, 151, 223);
}

</style>
";
        // line 358
        yield from $this->unwrap()->yieldBlock('top', $context, $blocks);
        // line 367
        yield "
<button class=\"btn btn-secondary\" onclick=\"window.location.href='";
        // line 368
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "'\" style=\"padding: \">
<i class=\"fas fa-arrow-left\"></i> Back
</button>
<div class=\"table-container\">
        <h2 style=\"display: inline-block;\">Événements</h2>
    <a href=\"";
        // line 373
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_new");
        yield "\" title=\"Add\" style=\"float: right; margin-top: 30px; font-size: 20px;\">
        +Add
    </a>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Lieu</th>
                    <th>Image</th>
                    <th>Status</th> <!-- Nouvelle colonne pour le statut -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                ";
        // line 390
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 390, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 391
            yield "                    <tr>
                        <td>";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 392), "html", null, true);
            yield "</td>
                        
                        <td>";
            // line 394
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "descrip", [], "any", false, false, false, 394)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "descrip", [], "any", false, false, false, 394), "html", null, true)) : ("Pas de description"));
            yield "</td>
                        <td>";
            // line 395
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startdate", [], "any", false, false, false, 395)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "startdate", [], "any", false, false, false, 395), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
            yield "</td>
                        <td>";
            // line 396
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "enddate", [], "any", false, false, false, 396)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "enddate", [], "any", false, false, false, 396), "d/m/Y H:i"), "html", null, true)) : ("Non définie"));
            yield "</td>
                        <td>";
            // line 397
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "location", [], "any", false, false, false, 397)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "location", [], "any", false, false, false, 397), "html", null, true)) : ("Non définie"));
            yield "</td>
                        <td>
                            ";
            // line 399
            if (CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 399)) {
                // line 400
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "image", [], "any", false, false, false, 400))), "html", null, true);
                yield "\" alt=\"Image de ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 400), "html", null, true);
                yield "\" width=\"100\">
                            ";
            } else {
                // line 402
                yield "                                <span>Aucune image</span>
                            ";
            }
            // line 404
            yield "                        </td>
                        <td>";
            // line 405
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getStatusEvent", [], "method", false, false, false, 405)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "getStatusEvent", [], "method", false, false, false, 405), "html", null, true)) : ("Non défini"));
            yield "</td> 
                         <td>
                            <form action=\"";
            // line 407
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 407)]), "html", null, true);
            yield "\" method=\"post\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"";
            // line 408
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 408))), "html", null, true);
            yield "\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                            </form>
                             
                        </td>
                        <td>
                            <!-- Changer le statut -->
                            ";
            // line 415
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "statusEvent", [], "any", false, false, false, 415) == "pending")) {
                // line 416
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_change_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 416), "status" => "approved"]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm\">Approuver</a>
                                <a href=\"";
                // line 417
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_change_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 417), "status" => "rejected"]), "html", null, true);
                yield "\" class=\"btn btn-danger btn-sm\">Rejeter</a>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 418
$context["event"], "statusEvent", [], "any", false, false, false, 418) == "approved")) {
                // line 419
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_change_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 419), "status" => "pending"]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Repasser en attente</a>
                                <a href=\"";
                // line 420
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_change_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 420), "status" => "rejected"]), "html", null, true);
                yield "\" class=\"btn btn-danger btn-sm\">Rejeter</a>
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 421
$context["event"], "statusEvent", [], "any", false, false, false, 421) == "rejected")) {
                // line 422
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_change_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 422), "status" => "pending"]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Repasser en attente</a>
                                <a href=\"";
                // line 423
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_change_status", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 423), "status" => "approved"]), "html", null, true);
                yield "\" class=\"btn btn-success btn-sm\">Approuver</a>
                            ";
            }
            // line 425
            yield "                        </td>
                        
                    </tr>
                ";
            $context['_iterated'] = true;
        }
        // line 428
        if (!$context['_iterated']) {
            // line 429
            yield "                    <tr>
                        <td colspan=\"8\" class=\"text-center\">Aucun événement trouvé</td> <!-- Mise à jour du colspan -->
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 433
        yield "            </tbody>
        </table>
</div>


\t<!-- Bootstrap core JavaScript-->
\t\t";
        // line 439
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 458
        yield "\t</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 125
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_boutton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutton"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutton"));

        // line 126
        yield "<a 
    class=\"d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm\"
    href=\"/";
        // line 128
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128)) ? ("logout") : ("login"));
        yield "\"
    @click=\"isOpen = false\">
    ";
        // line 130
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "user", [], "any", false, false, false, 130)) ? ("logout") : ("login"));
        yield "
</a> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 161
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_search(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "search"));

        // line 162
        yield "\t\t\t\t\t<!-- Topbar Search -->
\t\t\t\t\t<form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\" action=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_search");
        yield "\" method=\"get\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
\t\t\t\t\t\t\taria-label=\"Search\" aria-describedby=\"basic-addon2\" value=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "request", [], "any", false, false, false, 166), "query", [], "any", false, false, false, 166), "get", ["q"], "method", false, false, false, 166), "html", null, true);
        yield "\">
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" style=\"padding: 0.375rem 0.75rem;\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/img/search1.png"), "html", null, true);
        yield "\" alt=\"Search\" style=\"width: 20px; height: 20px;\">
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 358
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_top(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "top"));

        // line 359
        yield "<!-- Page Heading -->


<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 439
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_js(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "js"));

        // line 440
        yield "
\t\t\t<script src=\" ";
        // line 441
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\" ";
        // line 442
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Core plugin JavaScript-->
\t\t\t<script src=\" ";
        // line 445
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<!-- Custom scripts for all pages-->
\t\t\t<script src=\"";
        // line 447
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/sb-admin-2.min.js"), "html", null, true);
        yield "\"></script>


\t\t\t<!-- Page level plugins -->
\t\t\t<script src=\"";
        // line 451
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Page level custom scripts -->
\t\t\t<script src=\"";
        // line 454
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/demo/chart-area-demo.js"), "html", null, true);
        yield "\"></script>

\t\t\t<script src=\"";
        // line 456
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/demo/chart-pie-demo.js"), "html", null, true);
        yield "\"></script>
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
        return "event/index.html.twig";
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
        return array (  811 => 456,  806 => 454,  800 => 451,  793 => 447,  788 => 445,  782 => 442,  778 => 441,  775 => 440,  762 => 439,  744 => 359,  731 => 358,  712 => 169,  706 => 166,  700 => 163,  697 => 162,  684 => 161,  670 => 130,  665 => 128,  661 => 126,  648 => 125,  636 => 458,  634 => 439,  626 => 433,  617 => 429,  615 => 428,  608 => 425,  603 => 423,  598 => 422,  596 => 421,  592 => 420,  587 => 419,  585 => 418,  581 => 417,  576 => 416,  574 => 415,  564 => 408,  560 => 407,  555 => 405,  552 => 404,  548 => 402,  540 => 400,  538 => 399,  533 => 397,  529 => 396,  525 => 395,  521 => 394,  516 => 392,  513 => 391,  508 => 390,  488 => 373,  480 => 368,  477 => 367,  475 => 358,  386 => 271,  348 => 235,  288 => 177,  286 => 161,  256 => 133,  254 => 125,  236 => 110,  226 => 103,  208 => 88,  197 => 80,  186 => 72,  167 => 56,  151 => 43,  138 => 32,  125 => 31,  107 => 22,  99 => 17,  93 => 14,  81 => 4,  68 => 3,  45 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
{% extends 'baseAdmin1.html.twig' %}
{% block head %}
\t<head>

\t\t<meta charset=\"utf-8\">
\t\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
\t\t<meta name=\"description\" content=\"\">
\t\t<meta name=\"author\" content=\"\">

\t\t<title>suivie comptes</title>
\t\t
\t\t\t<link href=\"{{ asset('asset1/img/up-next logo png.png') }}\" rel=\"icon\">

\t\t<!-- Custom fonts for this template-->
\t\t<link href=\"{{ asset('asset1/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

\t\t<!-- Custom styles for this template-->
\t\t<link href=\"{{ asset('asset1/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">

\t


\t</head>
{% endblock %}


{% block body %}
<body
\tid=\"page-top\">

\t<!-- Page Wrapper -->
\t<div
\t\tid=\"wrapper\">

\t\t<!-- Sidebar -->
<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

<!-- Sidebar - Brand -->
<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"{{ path('app_admin') }}\" >

<img src=\"assets/img/up-next.png\" alt=\"no photo\" height=\"50\" >
</a>


<!-- Divider -->
<hr class=\"sidebar-divider my-0\">



<!-- Nav Item - Dashboard -->
<li class=\"nav-item active\">
    <a class=\"nav-link\" href=\"{{ path('app_admin') }}\">
        
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class=\"sidebar-divider\">

<!-- Heading -->
<div class=\"sidebar-heading\">
    Gestion
</div>

<!-- configuer les route ou href pour chaque gestion  -->

<li class=\"nav-item\">
<a class=\"nav-link\" href=\"{{ path('app_admin_compte') }}\">
   
    <span>suivie les comptes</span>
</a>
</li>

<!-- Nav Item - Suivi des Réclamations -->
<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ path('app_reclamations_admin') }}\">
     
        <span>Gestion des Réclamations</span>
    </a>
</li>

<!-- Nav Item - Gestion Événements -->
<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ path('event_index') }}\">
       
        <span>Gestion Événements</span>
    </a>
</li>


<li class=\"nav-item\">
<a class=\"nav-link\" href=\"\">
    
    <span>Gestion produit</span>
</a>
</li>
<!-- Nav Item - Gestion reservation -->
<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"{{ path('admin_reservations') }}\">
       
        <span>Gestion Réservations</span>
    </a>
</li>
  <!-- Nav Item - Gestion quiz -->
  <li class=\"nav-item\">
  <a class=\"nav-link\" href=\"{{ path('quiz_index') }}\">
    
      <span>Gestion quiz</span>
  </a>
</li>


<!-- Nav Item - Gestion quize -->
<li class=\"nav-item\">
<a class=\"nav-link\" href=\"\">
   
   <span>Gestion Meet_up</span>
</a>
</li>
<!-- Divider -->
{% block boutton %}
<a 
    class=\"d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm\"
    href=\"/{{ app.user ? 'logout' : 'login' }}\"
    @click=\"isOpen = false\">
    {{ app.user ? 'logout' : 'login' }}
</a> 
{% endblock %}


<!-- Sidebar Toggler (Sidebar) -->


</ul>
<!-- End of Sidebar -->
\t
\t\t<!-- End of Sidebar -->

\t\t<!-- Content Wrapper -->
\t\t<div
\t\t\tid=\"content-wrapper\" class=\"d-flex flex-column\">

\t\t\t<!-- Main Content -->
\t\t\t<div
\t\t\t\tid=\"content\">

\t\t\t\t<!-- Topbar -->
\t\t\t\t<nav
\t\t\t\t\tclass=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

\t\t\t\t\t<!-- Sidebar Toggle (Topbar) -->
\t\t\t\t\t<button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t</button>

\t\t\t\t\t<!-- Topbar Search -->
\t\t\t\t\t{% block search %}
\t\t\t\t\t<!-- Topbar Search -->
\t\t\t\t\t<form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\" action=\"{{ path('home_search') }}\" method=\"get\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
\t\t\t\t\t\t\taria-label=\"Search\" aria-describedby=\"basic-addon2\" value=\"{{ app.request.query.get('q') }}\">
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" style=\"padding: 0.375rem 0.75rem;\">
\t\t\t\t\t\t\t\t<img src=\"{{ asset('admin/img/search1.png') }}\" alt=\"Search\" style=\"width: 20px; height: 20px;\">
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t</form>
\t\t\t\t\t
\t\t\t\t\t
\t\t\t\t\t{% endblock %}

\t\t\t\t\t<!-- Topbar Navbar -->
\t\t\t\t\t<ul
\t\t\t\t\t\tclass=\"navbar-nav ml-auto\">

\t\t\t\t\t\t<!-- Nav Item - Search Dropdown (Visible Only XS) -->
\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow d-sm-none\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
\t\t\t\t\t\t\t\t<form class=\"form-inline mr-auto w-100 navbar-search\">
\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Nav Item - Alerts -->
\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-bell fa-fw\"></i>
\t\t\t\t\t\t\t\t<!-- Counter - Alerts -->
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - Alerts -->
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Nav Item - Messages -->
\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope fa-fw\"></i>
\t\t\t\t\t\t\t\t<!-- Counter - Messages -->
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\"></span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<div class=\"topbar-divider d-none d-sm-block\"></div>

\t\t\t\t\t\t<!-- Nav Item - User Information -->
\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<img class=\"img-profile rounded-circle\" src=\"{{ asset('asset1/img/undraw_profile.svg') }}\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t</ul>

\t\t\t\t</nav>
\t\t\t\t<!-- End of Topbar -->


\t\t\t\t<!-- Begin Page Content -->
\t\t\t\t<div
\t\t\t\t\tclass=\"container-fluid\">

\t\t\t\t\t<!-- Page Heading -->
\t\t\t\t\t<!-- Page Heading -->
<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
<h1 class=\"h3 mb-1 text-gray-800\">Suivie les Événements</h1>
</div>



\t\t\t\t\t{# Tableau Des Suivis !! #}

                       <!-- DataTales Example -->
                   <div class=\"card shadow mb-4\">
  
    <div class=\"card-body\">
        <div class=\"table-responsive\">
         
\t\t<div class=\"container-fluid\">

   
<style>
    /* Center the Table */
    .table-container {
        max-width: 1300px;  /* Adjust width as needed */
        margin: 20px auto; /* Center horizontally and add equal spacing */
        padding: 25px;
        background: white;
        border-radius: 10px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0.2, 0.2);
    }
    
    /* Ensures equal vertical spacing between containers */
    .table-container + .table-container {
        margin-top: 20px; /* Consistent spacing between stacked containers */
    }

/* Table Styling */
table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 15px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

/* Header Styling */
th, td {
    padding: 10px; /* Reduce padding */
    text-align: center; /* Center text */
    border-right: 1px solid #ddd;
}

/* Remove Border on Last Column */
th:last-child, td:last-child {
    border-right: none;
}

/* Table Header */
thead {
    background-color: rgb(249, 85, 85);
    color: white;
    text-transform: uppercase;
}

/* Alternate Row Colors */
tbody tr:nth-child(even) {
    background-color: rgb(225, 231, 243);
}

/* Hover Effect */
tbody tr:hover {
    background-color: rgba(245, 247, 249, 0.44);
}

/* Section Titles */
h2 {
    text-align: center;
    color: #333;
    border-bottom: 3px solidhsl(0, 71.70%, 61.20%);
    display: inline-block;
    padding-bottom: 5px;
}

/* Adjust Action Icons */
.action-icons a {
    font-size: 18px; /* Smaller icons */
    padding: 4px;
    text-decoration: none;
    color: #333;
}

.action-icons a:hover {
    color: rgb(83, 151, 223);
}

</style>
{% block top %}
<!-- Page Heading -->


<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">

</div>

{% endblock %}

<button class=\"btn btn-secondary\" onclick=\"window.location.href='{{ path('app_admin') }}'\" style=\"padding: \">
<i class=\"fas fa-arrow-left\"></i> Back
</button>
<div class=\"table-container\">
        <h2 style=\"display: inline-block;\">Événements</h2>
    <a href=\"{{ path('event_new') }}\" title=\"Add\" style=\"float: right; margin-top: 30px; font-size: 20px;\">
        +Add
    </a>
        <table class=\"table\">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>Description</th>
                    <th>Date de début</th>
                    <th>Date de fin</th>
                    <th>Lieu</th>
                    <th>Image</th>
                    <th>Status</th> <!-- Nouvelle colonne pour le statut -->
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                {% for event in events %}
                    <tr>
                        <td>{{ event.title }}</td>
                        
                        <td>{{ event.descrip ? event.descrip : 'Pas de description' }}</td>
                        <td>{{ event.startdate ? event.startdate|date('d/m/Y H:i') : 'Non définie' }}</td>
                        <td>{{ event.enddate ? event.enddate|date('d/m/Y H:i') : 'Non définie' }}</td>
                        <td>{{ event.location ? event.location : 'Non définie' }}</td>
                        <td>
                            {% if event.image %}
                                <img src=\"{{ asset('uploads/images/' ~ event.image) }}\" alt=\"Image de {{ event.title }}\" width=\"100\">
                            {% else %}
                                <span>Aucune image</span>
                            {% endif %}
                        </td>
                        <td>{{ event.getStatusEvent() ? event.getStatusEvent() : 'Non défini' }}</td> 
                         <td>
                            <form action=\"{{ path('event_delete', {'id': event.id}) }}\" method=\"post\" style=\"display:inline;\">
                                <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\">
                                <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                            </form>
                             
                        </td>
                        <td>
                            <!-- Changer le statut -->
                            {% if event.statusEvent == 'pending' %}
                                <a href=\"{{ path('event_change_status', {'id': event.id, 'status': 'approved'}) }}\" class=\"btn btn-success btn-sm\">Approuver</a>
                                <a href=\"{{ path('event_change_status', {'id': event.id, 'status': 'rejected'}) }}\" class=\"btn btn-danger btn-sm\">Rejeter</a>
                            {% elseif event.statusEvent == 'approved' %}
                                <a href=\"{{ path('event_change_status', {'id': event.id, 'status': 'pending'}) }}\" class=\"btn btn-warning btn-sm\">Repasser en attente</a>
                                <a href=\"{{ path('event_change_status', {'id': event.id, 'status': 'rejected'}) }}\" class=\"btn btn-danger btn-sm\">Rejeter</a>
                            {% elseif event.statusEvent == 'rejected' %}
                                <a href=\"{{ path('event_change_status', {'id': event.id, 'status': 'pending'}) }}\" class=\"btn btn-warning btn-sm\">Repasser en attente</a>
                                <a href=\"{{ path('event_change_status', {'id': event.id, 'status': 'approved'}) }}\" class=\"btn btn-success btn-sm\">Approuver</a>
                            {% endif %}
                        </td>
                        
                    </tr>
                {% else %}
                    <tr>
                        <td colspan=\"8\" class=\"text-center\">Aucun événement trouvé</td> <!-- Mise à jour du colspan -->
                    </tr>
                {% endfor %}
            </tbody>
        </table>
</div>


\t<!-- Bootstrap core JavaScript-->
\t\t{% block js %}

\t\t\t<script src=\" {{ asset('asset1/vendor/jquery/jquery.min.js') }}\"></script>
\t\t\t<script src=\" {{ asset('asset1/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>

\t\t\t<!-- Core plugin JavaScript-->
\t\t\t<script src=\" {{ asset('asset1/vendor/jquery-easing/jquery.easing.min.js') }}\"></script>
\t\t\t<!-- Custom scripts for all pages-->
\t\t\t<script src=\"{{ asset('asset1/js/sb-admin-2.min.js') }}\"></script>


\t\t\t<!-- Page level plugins -->
\t\t\t<script src=\"{{ asset('asset1/vendor/chart.js/Chart.min.js') }}\"></script>

\t\t\t<!-- Page level custom scripts -->
\t\t\t<script src=\"{{ asset('asset1/js/demo/chart-area-demo.js') }}\"></script>

\t\t\t<script src=\"{{ asset('asset1/js/demo/chart-pie-demo.js') }}\"></script>
 {% endblock %}
\t</body>
{% endblock %}

", "event/index.html.twig", "D:\\artistic-main\\artistic-main\\templates\\event\\index.html.twig");
    }
}
