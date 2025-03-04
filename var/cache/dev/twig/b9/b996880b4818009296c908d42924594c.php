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

/* admin/showUser.html.twig */
class __TwigTemplate_052e976ede5d2ab6f0a27483267f8101 extends Template
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
        // line 1
        return "baseAdmin1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showUser.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/showUser.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin1.html.twig", "admin/showUser.html.twig", 1);
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
<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

<!-- Sidebar - Brand -->
<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" >

<img src=\"assets/img/up-next.png\" alt=\"no photo\" height=\"50\" >
</a>


<!-- Divider -->
<hr class=\"sidebar-divider my-0\">



<!-- Nav Item - Dashboard -->
<li class=\"nav-item active\">
    <a class=\"nav-link\" href=\"";
        // line 55
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
        // line 71
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_compte");
        yield "\">
   
    <span>suivie les comptes</span>
</a>
</li>

<!-- Nav Item - Suivi des Réclamations -->
<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_admin");
        yield "\">
     
        <span>Gestion des Réclamations</span>
    </a>
</li>

<!-- Nav Item - Gestion Événements -->
<li class=\"nav-item\">
    <a class=\"nav-link\" href=\"";
        // line 87
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
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservations");
        yield "\">
       
        <span>Gestion Réservations</span>
    </a>
</li>
  <!-- Nav Item - Gestion quiz -->
  <li class=\"nav-item\">
  <a class=\"nav-link\" href=\"";
        // line 109
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
        // line 124
        yield from $this->unwrap()->yieldBlock('boutton', $context, $blocks);
        // line 132
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
        // line 160
        yield from $this->unwrap()->yieldBlock('search', $context, $blocks);
        // line 176
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
        // line 234
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
        // line 265
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_report");
        yield "\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
        <i class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report
    </a>
</div>



\t\t\t\t\t";
        // line 273
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
        // line 360
        yield from $this->unwrap()->yieldBlock('top', $context, $blocks);
        // line 369
        yield "
<button class=\"btn btn-secondary\" onclick=\"window.location.href='";
        // line 370
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "'\" style=\"padding: \">
<i class=\"fas fa-arrow-left\"></i> Back
</button>
<div class=\"table-container\">
    <h2 style=\"display: inline-block;\">Admins</h2>
    <a href=\"";
        // line 375
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_add_user");
        yield "\" title=\"Add\" style=\"float: right; margin-top: 30px; font-size: 20px;\">
        +Add
    </a>

    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 390
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 390, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 391
            yield "                <tr>
                    <td>";
            // line 392
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 392), "html", null, true);
            yield "</td>
                    <td>";
            // line 393
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "email", [], "any", false, false, false, 393), "html", null, true);
            yield "</td>
                    <td>";
            // line 394
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "firstname", [], "any", false, false, false, 394), "html", null, true);
            yield "</td>
                    <td>";
            // line 395
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "lastname", [], "any", false, false, false, 395), "html", null, true);
            yield "</td>
                    <td>
                        <div style=\"display: flex; flex-direction: row;\">
                            <a href=\"";
            // line 398
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 398)]), "html", null, true);
            yield "\" title=\"Edit\">
                                Edit
                            </a>

                            ";
            // line 402
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 402) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 402, $this->source); })()), "user", [], "any", false, false, false, 402), "id", [], "any", false, false, false, 402))) {
                // line 403
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["admin"], "id", [], "any", false, false, false, 403)]), "html", null, true);
                yield "\" title=\"Delete\"
                                    onclick=\"return confirm('Are you sure you want to delete this user?');\">
                                    ❌
                                </a>
                            ";
            } else {
                // line 408
                yield "                                <span style=\"color: gray; margin-left: 10px;\">(You)</span>
                            ";
            }
            // line 410
            yield "                        </div>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 413
        if (!$context['_iterated']) {
            // line 414
            yield "                <tr>
                    <td colspan=\"5\" class=\"text-center\">No admins found.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['admin'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 418
        yield "        </tbody>
    </table>
</div>


<div class=\"table-container\">
    <h2>Artists</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Speciality</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>status</th>
                <th>Vérifier</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 439
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["artists"]) || array_key_exists("artists", $context) ? $context["artists"] : (function () { throw new RuntimeError('Variable "artists" does not exist.', 439, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["artist"]) {
            // line 440
            yield "                <tr>
                    <td>";
            // line 441
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 441), "html", null, true);
            yield "</td>
                    <td>";
            // line 442
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "email", [], "any", false, false, false, 442), "html", null, true);
            yield "</td>
                    <td>";
            // line 443
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "speciality", [], "any", false, false, false, 443), "html", null, true);
            yield "</td>
                    <td>";
            // line 444
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "firstname", [], "any", false, false, false, 444), "html", null, true);
            yield "</td>
                    <td>";
            // line 445
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "lastname", [], "any", false, false, false, 445), "html", null, true);
            yield "</td>
                    <td>";
            // line 446
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "isActive", [], "any", false, false, false, 446)) ? ("Active ✅") : ("Not active ⛔"));
            yield "</td>
                    <td>";
            // line 447
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "isVerified", [], "any", false, false, false, 447)) ? ("Verified ✔️") : ("Not Verified ➖"));
            yield "</td>

                      <td>  <a href=\"";
            // line 449
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 449)]), "html", null, true);
            yield "\" title=\"Edit\">
                        ✏️
                    </a>

                      <a href=\"";
            // line 453
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 453)]), "html", null, true);
            yield "\" title=\"Delete\"
                    onclick=\"return confirm('Are you sure you want to delete this user?');\">
                                 ❌
                        </a>
             
                        <form action=\"";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_deactivate_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "id", [], "any", false, false, false, 458)]), "html", null, true);
            yield "\" method=\"POST\" onsubmit=\"return confirm('Are you sure you want to change this user\\'s status?');\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                            ";
            // line 460
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["artist"], "isActive", [], "any", false, false, false, 460)) ? ("🔒 Deactivate") : ("🔓 Activate"));
            yield "
                        </button>
                    </form>
                    </td>
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 465
        if (!$context['_iterated']) {
            // line 466
            yield "                <tr>
                    <td colspan=\"7\" class=\"text-center\">No artists found.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['artist'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 470
        yield "        </tbody>
    </table>
</div>

<div class=\"table-container\">
    <h2>Clients</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>status</th>
                <th>Actions</th>
               
            </tr>
        </thead>
        <tbody>
            ";
        // line 489
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["clients"]) || array_key_exists("clients", $context) ? $context["clients"] : (function () { throw new RuntimeError('Variable "clients" does not exist.', 489, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
            // line 490
            yield "                <tr>
                    <td>";
            // line 491
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 491), "html", null, true);
            yield "</td>
                    <td>";
            // line 492
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "email", [], "any", false, false, false, 492), "html", null, true);
            yield "</td>
                    <td>";
            // line 493
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "firstname", [], "any", false, false, false, 493), "html", null, true);
            yield "</td>
                    <td>";
            // line 494
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["client"], "lastname", [], "any", false, false, false, 494), "html", null, true);
            yield "</td>
                    <td>";
            // line 495
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["client"], "isActive", [], "any", false, false, false, 495)) ? ("Active ✅") : ("Not active ⛔"));
            yield "</td>
                      
                    <td >
                  <a href=\"";
            // line 498
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_edit_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 498)]), "html", null, true);
            yield "\" title=\"Edit\">
                        ✏️
                    </a>
                    
                      <a href=\"";
            // line 502
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_delete_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 502)]), "html", null, true);
            yield "\" title=\"Delete\"
                    onclick=\"return confirm('Are you sure you want to delete this user?');\">
                     ❌
                        </a>
                    <form action=\"";
            // line 506
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_deactivate_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["client"], "id", [], "any", false, false, false, 506)]), "html", null, true);
            yield "\" method=\"POST\" onsubmit=\"return confirm('Are you sure you want to change this user\\'s status?');\">
                            <button type=\"submit\" class=\"btn btn-danger\">
                                ";
            // line 508
            yield ((CoreExtension::getAttribute($this->env, $this->source, $context["client"], "isActive", [], "any", false, false, false, 508)) ? ("🔒 Deactivate") : ("🔓 Activate"));
            yield "
                            </button>
                        </form>
                    
                    </td>

                 
                       
                </tr>
            ";
            $context['_iterated'] = true;
        }
        // line 517
        if (!$context['_iterated']) {
            // line 518
            yield "                <tr>
                    <td colspan=\"5\" class=\"text-center\">No clients found.</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['client'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 522
        yield "        </tbody>
    </table>
</div>

       
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
        // line 543
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 562
        yield "\t</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 124
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

        // line 125
        yield "<a 
    class=\"d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm\"
    href=\"/";
        // line 127
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 127, $this->source); })()), "user", [], "any", false, false, false, 127)) ? ("logout") : ("login"));
        yield "\"
    @click=\"isOpen = false\">
    ";
        // line 129
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 129, $this->source); })()), "user", [], "any", false, false, false, 129)) ? ("logout") : ("login"));
        yield "
</a> 
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 160
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

        // line 161
        yield "\t\t\t\t\t<!-- Topbar Search -->
\t\t\t\t\t<form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\" action=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home_search");
        yield "\" method=\"get\">
\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"q\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
\t\t\t\t\t\t\taria-label=\"Search\" aria-describedby=\"basic-addon2\" value=\"";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 165, $this->source); })()), "request", [], "any", false, false, false, 165), "query", [], "any", false, false, false, 165), "get", ["q"], "method", false, false, false, 165), "html", null, true);
        yield "\">
\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\" style=\"padding: 0.375rem 0.75rem;\">
\t\t\t\t\t\t\t\t<img src=\"";
        // line 168
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

    // line 360
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

        // line 361
        yield "<!-- Page Heading -->


<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">

</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 543
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

        // line 544
        yield "
\t\t\t<script src=\" ";
        // line 545
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\" ";
        // line 546
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Core plugin JavaScript-->
\t\t\t<script src=\" ";
        // line 549
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<!-- Custom scripts for all pages-->
\t\t\t<script src=\"";
        // line 551
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/sb-admin-2.min.js"), "html", null, true);
        yield "\"></script>


\t\t\t<!-- Page level plugins -->
\t\t\t<script src=\"";
        // line 555
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Page level custom scripts -->
\t\t\t<script src=\"";
        // line 558
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/demo/chart-area-demo.js"), "html", null, true);
        yield "\"></script>

\t\t\t<script src=\"";
        // line 560
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
        return "admin/showUser.html.twig";
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
        return array (  974 => 560,  969 => 558,  963 => 555,  956 => 551,  951 => 549,  945 => 546,  941 => 545,  938 => 544,  925 => 543,  907 => 361,  894 => 360,  875 => 168,  869 => 165,  863 => 162,  860 => 161,  847 => 160,  833 => 129,  828 => 127,  824 => 125,  811 => 124,  799 => 562,  797 => 543,  774 => 522,  765 => 518,  763 => 517,  749 => 508,  744 => 506,  737 => 502,  730 => 498,  724 => 495,  720 => 494,  716 => 493,  712 => 492,  708 => 491,  705 => 490,  700 => 489,  679 => 470,  670 => 466,  668 => 465,  658 => 460,  653 => 458,  645 => 453,  638 => 449,  633 => 447,  629 => 446,  625 => 445,  621 => 444,  617 => 443,  613 => 442,  609 => 441,  606 => 440,  601 => 439,  578 => 418,  569 => 414,  567 => 413,  560 => 410,  556 => 408,  547 => 403,  545 => 402,  538 => 398,  532 => 395,  528 => 394,  524 => 393,  520 => 392,  517 => 391,  512 => 390,  494 => 375,  486 => 370,  483 => 369,  481 => 360,  392 => 273,  382 => 265,  348 => 234,  288 => 176,  286 => 160,  256 => 132,  254 => 124,  236 => 109,  226 => 102,  208 => 87,  197 => 79,  186 => 71,  167 => 55,  151 => 42,  138 => 31,  125 => 30,  107 => 21,  99 => 16,  93 => 13,  81 => 3,  68 => 2,  45 => 1,);
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
<h1 class=\"h3 mb-1 text-gray-800\">Suivie les comptes</h1>
    <a href=\"{{ path('admin_user_report') }}\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
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
    <h2 style=\"display: inline-block;\">Admins</h2>
    <a href=\"{{ path('admin_add_user') }}\" title=\"Add\" style=\"float: right; margin-top: 30px; font-size: 20px;\">
        +Add
    </a>

    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for admin in admins %}
                <tr>
                    <td>{{ admin.id }}</td>
                    <td>{{ admin.email }}</td>
                    <td>{{ admin.firstname }}</td>
                    <td>{{ admin.lastname }}</td>
                    <td>
                        <div style=\"display: flex; flex-direction: row;\">
                            <a href=\"{{ path('admin_edit_user', {id: admin.id}) }}\" title=\"Edit\">
                                Edit
                            </a>

                            {% if admin.id != app.user.id %}
                                <a href=\"{{ path('admin_delete_user', {id: admin.id}) }}\" title=\"Delete\"
                                    onclick=\"return confirm('Are you sure you want to delete this user?');\">
                                    ❌
                                </a>
                            {% else %}
                                <span style=\"color: gray; margin-left: 10px;\">(You)</span>
                            {% endif %}
                        </div>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\" class=\"text-center\">No admins found.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>


<div class=\"table-container\">
    <h2>Artists</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Speciality</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>status</th>
                <th>Vérifier</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for artist in artists %}
                <tr>
                    <td>{{ artist.id }}</td>
                    <td>{{ artist.email }}</td>
                    <td>{{ artist.speciality }}</td>
                    <td>{{ artist.firstname }}</td>
                    <td>{{ artist.lastname }}</td>
                    <td>{{ artist.isActive ? 'Active ✅' : 'Not active ⛔' }}</td>
                    <td>{{ artist.isVerified ? 'Verified ✔️' : 'Not Verified ➖' }}</td>

                      <td>  <a href=\"{{ path('admin_edit_user', {id: artist.id}) }}\" title=\"Edit\">
                        ✏️
                    </a>

                      <a href=\"{{ path('admin_delete_user', {id: artist.id}) }}\" title=\"Delete\"
                    onclick=\"return confirm('Are you sure you want to delete this user?');\">
                                 ❌
                        </a>
             
                        <form action=\"{{ path('admin_deactivate_user', {id: artist.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Are you sure you want to change this user\\'s status?');\">
                        <button type=\"submit\" class=\"btn btn-danger\">
                            {{ artist.isActive ? '🔒 Deactivate' : '🔓 Activate' }}
                        </button>
                    </form>
                    </td>
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"7\" class=\"text-center\">No artists found.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>

<div class=\"table-container\">
    <h2>Clients</h2>
    <table class=\"table\">
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>status</th>
                <th>Actions</th>
               
            </tr>
        </thead>
        <tbody>
            {% for client in clients %}
                <tr>
                    <td>{{ client.id }}</td>
                    <td>{{ client.email }}</td>
                    <td>{{ client.firstname }}</td>
                    <td>{{ client.lastname }}</td>
                    <td>{{ client.isActive ? 'Active ✅' : 'Not active ⛔' }}</td>
                      
                    <td >
                  <a href=\"{{ path('admin_edit_user', {id: client.id}) }}\" title=\"Edit\">
                        ✏️
                    </a>
                    
                      <a href=\"{{ path('admin_delete_user', {id: client.id}) }}\" title=\"Delete\"
                    onclick=\"return confirm('Are you sure you want to delete this user?');\">
                     ❌
                        </a>
                    <form action=\"{{ path('admin_deactivate_user', {id: client.id}) }}\" method=\"POST\" onsubmit=\"return confirm('Are you sure you want to change this user\\'s status?');\">
                            <button type=\"submit\" class=\"btn btn-danger\">
                                {{ client.isActive ? '🔒 Deactivate' : '🔓 Activate' }}
                            </button>
                        </form>
                    
                    </td>

                 
                       
                </tr>
            {% else %}
                <tr>
                    <td colspan=\"5\" class=\"text-center\">No clients found.</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>

       
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

", "admin/showUser.html.twig", "D:\\artistic-main\\artistic-main\\templates\\admin\\showUser.html.twig");
    }
}
