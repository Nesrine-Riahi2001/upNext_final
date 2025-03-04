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

/* admin/search.html.twig */
class __TwigTemplate_7927912747e28bafba45556d443cd055 extends Template
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
            'js' => [$this, 'block_js'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseAdmin1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/search.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/search.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin1.html.twig", "admin/search.html.twig", 1);
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

\t\t<title>suivie comptes</title>
\t\t
\t\t\t<link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/img/up-next logo png.png"), "html", null, true);
        yield "\" rel=\"icon\">

\t\t<!-- Custom fonts for this template-->
\t\t<link href=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

\t\t<!-- Custom styles for this template-->
\t\t<link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/css/sb-admin-2.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

\t


\t</head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 30
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

        // line 31
        yield "<body
\tid=\"page-top\">

\t<!-- Page Wrapper -->
\t<div
\t\tid=\"wrapper\">

\t\t<!-- Sidebar -->
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
                    ";
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
<h1 class=\"h3 mb-1 text-gray-800\">Suivie les comptes</h1>
    <a href=\"";
        // line 266
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_generate_pdf_report");
        yield "\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
        <i class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report
    </a>
</div>



\t\t\t\t\t";
        // line 274
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
    background-color: rgb(219, 38, 38);
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
    border-bottom: 3px solidrgb(255, 0, 0);
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

<button class=\"btn btn-secondary\" onclick=\"window.location.href='";
        // line 365
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "'\" style=\"padding: \">
<i class=\"fas fa-arrow-left\"></i> Back
</button>

<div class=\"container text-center\">
    <h2 class=\"mt-3\">Search Results for \"";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 370, $this->source); })()), "html", null, true);
        yield "\"</h2>
</div>

";
        // line 373
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 373, $this->source); })())) > 0)) {
            // line 374
            yield "<div class=\"container mt-4\">
    <table class=\"table\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Role</th>
            <th>Status</th>
            ";
            // line 384
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 384, $this->source); })()), function ($__user__) use ($context, $macros) { $context["user"] = $__user__; return CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 384, $this->source); })()), "roles", [], "any", false, false, false, 384)); })) > 0)) {
                // line 385
                yield "                <th>Verified</th>
            ";
            }
            // line 387
            yield "            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        ";
            // line 391
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 391, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 392
                yield "            <tr>
                <td>";
                // line 393
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 393), "html", null, true);
                yield "</td>
                <td>";
                // line 394
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 394), "html", null, true);
                yield "</td>
                <td>";
                // line 395
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 395), "html", null, true);
                yield "</td>
                <td>";
                // line 396
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 396), "html", null, true);
                yield "</td>
                <td>
                    ";
                // line 398
                if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 398))) {
                    // line 399
                    yield "                        Admin 👑
                    ";
                } elseif (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source,                 // line 400
$context["user"], "roles", [], "any", false, false, false, 400))) {
                    // line 401
                    yield "                        Artist 🎨
                    ";
                } else {
                    // line 403
                    yield "                        Client 👤
                    ";
                }
                // line 405
                yield "                </td>
                <td>";
                // line 406
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 406)) ? ("Active ✅") : ("Not active ⛔"));
                yield "</td>
                
                ";
                // line 408
                if (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 408))) {
                    // line 409
                    yield "                    <td>";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 409)) ? ("Verified ✔️") : ("Not Verified ➖"));
                    yield "</td>
                ";
                }
                // line 411
                yield "
                 ";
                // line 412
                if ((CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 412)) || CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 412)))) {
                    // line 413
                    yield "                      <td>";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 413)) ? (" ------") : ("------"));
                    yield "</td>
                    ";
                }
                // line 415
                yield "
                <td>
                    ";
                // line 417
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 417) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 417, $this->source); })()), "user", [], "any", false, false, false, 417), "id", [], "any", false, false, false, 417))) {
                    // line 418
                    yield "                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 418)]), "html", null, true);
                    yield "\" title=\"Edit\">✏️</a>
                        <a href=\"";
                    // line 419
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 419)]), "html", null, true);
                    yield "\" title=\"Delete\"
                           onclick=\"return confirm('Are you sure you want to delete this user?');\">❌</a>

                        <form action=\"";
                    // line 422
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_deactivate_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 422)]), "html", null, true);
                    yield "\" method=\"POST\"
                              onsubmit=\"return confirm('Are you sure you want to change this user\\'s status?');\">
                            <button type=\"submit\" class=\"btn btn-danger\">
                                ";
                    // line 425
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 425)) ? ("🔒 Deactivate") : ("🔓 Activate"));
                    yield "
                            </button>
                        </form>
                    ";
                } else {
                    // line 429
                    yield "                <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 429)]), "html", null, true);
                    yield "\" title=\"Edit\">✏️</a>
                        <span class=\"text-muted\">(you)</span>
                    ";
                }
                // line 432
                yield "                </td>
            </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 435
            yield "    </tbody>
    </table>
  </div>

  <!-- Pagination controls -->
  <div class=\"pagination\">
  ";
            // line 441
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 441, $this->source); })()));
            yield "
</div>
</div>
";
        } else {
            // line 445
            yield "
<p class=\"text-center mt-3\">No users found for \"";
            // line 446
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 446, $this->source); })()), "html", null, true);
            yield "\".</p>
<div class=\"container text-center\">

<img src=\"";
            // line 449
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/img/des.webp"), "html", null, true);
            yield "\" >

</div>
";
        }
        // line 453
        yield "




       
        </div>
    </div>
</div>


\t\t\t\t\t



\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
  </div>
\t<!-- Bootstrap core JavaScript-->
\t\t";
        // line 475
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 494
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
        yield "                    <!-- Topbar Search -->
                    <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\" action=\"";
        // line 163
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_search");
        yield "\" method=\"get\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"q\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                            aria-label=\"Search\" aria-describedby=\"basic-addon2\" value=\"";
        // line 166
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 166, $this->source); })()), "request", [], "any", false, false, false, 166), "query", [], "any", false, false, false, 166), "get", ["q"], "method", false, false, false, 166), "html", null, true);
        yield "\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"submit\" style=\"padding: 0.375rem 0.75rem;\">
                                <img src=\"";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/img/search1.png"), "html", null, true);
        yield "\" alt=\"Search\" style=\"width: 20px; height: 20px;\">
                            </button>
                        </div>
                    </div>
                    </form>
                    
                    
                    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 475
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

        // line 476
        yield "
\t\t\t<script src=\" ";
        // line 477
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\" ";
        // line 478
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Core plugin JavaScript-->
\t\t\t<script src=\" ";
        // line 481
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<!-- Custom scripts for all pages-->
\t\t\t<script src=\"";
        // line 483
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/sb-admin-2.min.js"), "html", null, true);
        yield "\"></script>


\t\t\t<!-- Page level plugins -->
\t\t\t<script src=\"";
        // line 487
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Page level custom scripts -->
\t\t\t<script src=\"";
        // line 490
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/demo/chart-area-demo.js"), "html", null, true);
        yield "\"></script>

\t\t\t<script src=\"";
        // line 492
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
        return "admin/search.html.twig";
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
        return array (  837 => 492,  832 => 490,  826 => 487,  819 => 483,  814 => 481,  808 => 478,  804 => 477,  801 => 476,  788 => 475,  769 => 169,  763 => 166,  757 => 163,  754 => 162,  741 => 161,  727 => 130,  722 => 128,  718 => 126,  705 => 125,  693 => 494,  691 => 475,  667 => 453,  660 => 449,  654 => 446,  651 => 445,  644 => 441,  636 => 435,  628 => 432,  621 => 429,  614 => 425,  608 => 422,  602 => 419,  597 => 418,  595 => 417,  591 => 415,  585 => 413,  583 => 412,  580 => 411,  574 => 409,  572 => 408,  567 => 406,  564 => 405,  560 => 403,  556 => 401,  554 => 400,  551 => 399,  549 => 398,  544 => 396,  540 => 395,  536 => 394,  532 => 393,  529 => 392,  525 => 391,  519 => 387,  515 => 385,  513 => 384,  501 => 374,  499 => 373,  493 => 370,  485 => 365,  392 => 274,  382 => 266,  348 => 235,  288 => 177,  286 => 161,  256 => 133,  254 => 125,  236 => 110,  226 => 103,  208 => 88,  197 => 80,  186 => 72,  167 => 56,  151 => 43,  137 => 31,  124 => 30,  106 => 21,  98 => 16,  92 => 13,  80 => 3,  67 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseAdmin1.html.twig' %}
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
                    {% block search %}
                    <!-- Topbar Search -->
                    <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\" action=\"{{ path('home_search') }}\" method=\"get\">
                    <div class=\"input-group\">
                        <input type=\"text\" name=\"q\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                            aria-label=\"Search\" aria-describedby=\"basic-addon2\" value=\"{{ app.request.query.get('q') }}\">
                        <div class=\"input-group-append\">
                            <button class=\"btn btn-primary\" type=\"submit\" style=\"padding: 0.375rem 0.75rem;\">
                                <img src=\"{{ asset('admin/img/search1.png') }}\" alt=\"Search\" style=\"width: 20px; height: 20px;\">
                            </button>
                        </div>
                    </div>
                    </form>
                    
                    
                    {% endblock %}

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
<h1 class=\"h3 mb-1 text-gray-800\">Suivie les comptes</h1>
    <a href=\"{{ path('app_generate_pdf_report') }}\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
        <i class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report
    </a>
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
    background-color: rgb(219, 38, 38);
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
    border-bottom: 3px solidrgb(255, 0, 0);
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

<button class=\"btn btn-secondary\" onclick=\"window.location.href='{{ path('app_admin') }}'\" style=\"padding: \">
<i class=\"fas fa-arrow-left\"></i> Back
</button>

<div class=\"container text-center\">
    <h2 class=\"mt-3\">Search Results for \"{{ searchTerm }}\"</h2>
</div>

{% if users|length > 0 %}
<div class=\"container mt-4\">
    <table class=\"table\">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Role</th>
            <th>Status</th>
            {% if users|filter(user => 'ROLE_ARTIST' in user.roles)|length > 0 %}
                <th>Verified</th>
            {% endif %}
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        {% for user in users %}
            <tr>
                <td>{{ user.id }}</td>
                <td>{{ user.email }}</td>
                <td>{{ user.firstname }}</td>
                <td>{{ user.lastname }}</td>
                <td>
                    {% if 'ROLE_ADMIN' in user.roles %}
                        Admin 👑
                    {% elseif 'ROLE_ARTIST' in user.roles %}
                        Artist 🎨
                    {% else %}
                        Client 👤
                    {% endif %}
                </td>
                <td>{{ user.isActive ? 'Active ✅' : 'Not active ⛔' }}</td>
                
                {% if 'ROLE_ARTIST' in user.roles %}
                    <td>{{ user.isVerified ? 'Verified ✔️' : 'Not Verified ➖' }}</td>
                {% endif %}

                 {% if 'ROLE_CLIENT' in user.roles or 'ROLE_ADMIN' in user.roles %}
                      <td>{{ user.isVerified ? ' ------' : '------' }}</td>
                    {% endif %}

                <td>
                    {% if user.id != app.user.id %}
                        <a href=\"{{ path('admin_edit_user', {id: user.id}) }}\" title=\"Edit\">✏️</a>
                        <a href=\"{{ path('admin_delete_user', {id: user.id}) }}\" title=\"Delete\"
                           onclick=\"return confirm('Are you sure you want to delete this user?');\">❌</a>

                        <form action=\"{{ path('admin_deactivate_user', {id: user.id}) }}\" method=\"POST\"
                              onsubmit=\"return confirm('Are you sure you want to change this user\\'s status?');\">
                            <button type=\"submit\" class=\"btn btn-danger\">
                                {{ user.isActive ? '🔒 Deactivate' : '🔓 Activate' }}
                            </button>
                        </form>
                    {% else %}
                <a href=\"{{ path('admin_edit_user', {id: user.id}) }}\" title=\"Edit\">✏️</a>
                        <span class=\"text-muted\">(you)</span>
                    {% endif %}
                </td>
            </tr>
        {% endfor %}
    </tbody>
    </table>
  </div>

  <!-- Pagination controls -->
  <div class=\"pagination\">
  {{ knp_pagination_render(users) }}
</div>
</div>
{% else %}

<p class=\"text-center mt-3\">No users found for \"{{ searchTerm }}\".</p>
<div class=\"container text-center\">

<img src=\"{{ asset('admin/img/des.webp') }}\" >

</div>
{% endif %}





       
        </div>
    </div>
</div>


\t\t\t\t\t



\t\t\t\t</div>

\t\t\t</div>

\t\t</div>
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

", "admin/search.html.twig", "D:\\artistic-main\\artistic-main\\templates\\admin\\search.html.twig");
    }
}
