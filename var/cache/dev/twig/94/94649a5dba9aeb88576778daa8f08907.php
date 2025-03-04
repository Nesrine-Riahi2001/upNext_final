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

/* reclamation/SatistiquesAdmin.html.twig */
class __TwigTemplate_4a939e22db6cccf3e47842096bfe99ab extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/SatistiquesAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/SatistiquesAdmin.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin1.html.twig", "reclamation/SatistiquesAdmin.html.twig", 1);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 26
        yield "\t<body
\t\tid=\"page-top\">

\t\t<!-- Page Wrapper -->
\t\t<div
\t\t\tid=\"wrapper\">

\t\t\t<!-- Sidebar -->
\t\t\t<ul
\t\t\t\tclass=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

\t\t\t\t<!-- Sidebar - Brand -->
\t\t\t\t<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
\t\t\t\t\t<div class=\"sidebar-brand-icon\">

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sidebar-brand-text mx-3\">Up-Next
\t\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider my-0\">

\t\t\t\t<!-- Nav Item - Dashboard -->
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 52
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-tachometer-alt\"></i>
\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider\">

\t\t\t\t<!-- Heading -->
\t\t\t\t<div class=\"sidebar-heading\">
\t\t\t\t\tInterface
\t\t\t\t</div>

\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-cog\"></i>
\t\t\t\t\t\t<span>Components</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Custom Components:</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
        // line 76
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_add_suivi");
        yield "\">Créer Suivi</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
        // line 77
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_suivis_admin");
        yield "\">Afficher Les Suivis des Réclamations</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider\">

\t\t\t\t<!-- Heading -->
\t\t\t
\t\t\t
\t\t\t

\t\t\t</ul>
\t\t\t<!-- End of Sidebar -->

\t\t\t<!-- Content Wrapper -->
\t\t\t<div
\t\t\t\tid=\"content-wrapper\" class=\"d-flex flex-column\">

\t\t\t\t<!-- Main Content -->
\t\t\t\t<div
\t\t\t\t\tid=\"content\">

\t\t\t\t\t<!-- Topbar -->
\t\t\t\t\t<nav
\t\t\t\t\t\tclass=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

\t\t\t\t\t\t<!-- Sidebar Toggle (Topbar) -->
\t\t\t\t\t\t<button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<!-- Topbar Search -->
\t\t\t\t\t\t<form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<!-- Topbar Navbar -->
\t\t\t\t\t\t<ul
\t\t\t\t\t\t\tclass=\"navbar-nav ml-auto\">

\t\t\t\t\t\t\t<!-- Nav Item - Search Dropdown (Visible Only XS) -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow d-sm-none\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
\t\t\t\t\t\t\t\t\t<form class=\"form-inline mr-auto w-100 navbar-search\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Nav Item - Alerts -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell fa-fw\"></i>
\t\t\t\t\t\t\t\t\t<!-- Counter - Alerts -->
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\">3+</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - Alerts -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\tAlerts Center
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-file-alt text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 12, 2019</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-success\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-donate text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 7, 2019</div>
\t\t\t\t\t\t\t\t\t\t\t\$290.29 has been deposited into your account!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-exclamation-triangle text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 2, 2019</div>
\t\t\t\t\t\t\t\t\t\t\tSpending Alert: We've noticed unusually high spending for your account.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Nav Item - Messages -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope fa-fw\"></i>
\t\t\t\t\t\t\t\t\t<!-- Counter - Messages -->
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\">7</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\tMessage Center
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">

\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/img/undraw_profile_1.svg"), "html", null, true);
        yield "\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-success\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
\t\t\t\t\t\t\t\t\t\t\t\t                                            problem I've been having.</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Emily Fowler · 58m</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/img/undraw_profile_2.svg"), "html", null, true);
        yield "\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">I have the photos that you ordered last month, how
\t\t\t\t\t\t\t\t\t\t\t\t                                            would you like them sent to you?</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Jae Chun · 1d</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/img/undraw_profile_3.svg"), "html", null, true);
        yield "\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-warning\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Last month's report looks great, I am very happy with
\t\t\t\t\t\t\t\t\t\t\t\t                                            the progress so far, keep up the good work!</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-success\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
\t\t\t\t\t\t\t\t\t\t\t\t                                            told me that people say this to all dogs, even if they aren't good...</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<div class=\"topbar-divider d-none d-sm-block\"></div>

\t\t\t\t\t\t\t<!-- Nav Item - User Information -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
\t\t\t\t\t\t\t\t\t<img class=\"img-profile rounded-circle\" src=\"";
        // line 265
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/img/undraw_profile.svg"), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tActivity Log
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t</nav>
\t\t\t\t\t<!-- End of Topbar -->

\t\t\t\t\t<!-- Begin Page Content -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container-fluid\">

\t\t\t\t\t\t<!-- Page Heading -->
\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
\t\t\t\t\t\t\t<h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
\t\t\t\t\t\t\t<a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-download fa-sm text-white-50\"></i>
\t\t\t\t\t\t\t\tGenerate Report</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content Row -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t<!-- Earnings (Monthly) Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-danger shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tNombre De Reclamations</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 318
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalReclamations"]) || array_key_exists("totalReclamations", $context) ? $context["totalReclamations"] : (function () { throw new RuntimeError('Variable "totalReclamations" does not exist.', 318, $this->source); })()), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\tRéclamations</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Earnings (Monthly) Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-success shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tNombre de suivis</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 337
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["totalSuivis"]) || array_key_exists("totalSuivis", $context) ? $context["totalSuivis"] : (function () { throw new RuntimeError('Variable "totalSuivis" does not exist.', 337, $this->source); })()), "html", null, true);
        yield "
\t\t\t\t\t\t\t\t\t\t\t\t\tSuivis
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Earnings (Monthly) Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-info shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Taux de Satisfaction Clientéle
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tauxSatisfaction"]) || array_key_exists("tauxSatisfaction", $context) ? $context["tauxSatisfaction"] : (function () { throw new RuntimeError('Variable "tauxSatisfaction" does not exist.', 359, $this->source); })()), "html", null, true);
        yield "%</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                     ";
        // line 362
        yield "\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: ";
        // line 365
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tauxSatisfaction"]) || array_key_exists("tauxSatisfaction", $context) ? $context["tauxSatisfaction"] : (function () { throw new RuntimeError('Variable "tauxSatisfaction" does not exist.', 365, $this->source); })()), "html", null, true);
        yield "%\" aria-valuenow=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["tauxSatisfaction"]) || array_key_exists("tauxSatisfaction", $context) ? $context["tauxSatisfaction"] : (function () { throw new RuntimeError('Variable "tauxSatisfaction" does not exist.', 365, $this->source); })()), "html", null, true);
        yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 366
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber((isset($context["tauxSatisfaction"]) || array_key_exists("tauxSatisfaction", $context) ? $context["tauxSatisfaction"] : (function () { throw new RuntimeError('Variable "tauxSatisfaction" does not exist.', 366, $this->source); })()), 2), "html", null, true);
        yield "%</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Pending Requests Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-warning shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tNombre de Reclamations Non Encore Traitées</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 font-weight-bold text-gray-800\">";
        // line 387
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["reclamationsNonTraitees"]) || array_key_exists("reclamationsNonTraitees", $context) ? $context["reclamationsNonTraitees"] : (function () { throw new RuntimeError('Variable "reclamationsNonTraitees" does not exist.', 387, $this->source); })()), "html", null, true);
        yield "</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-comments fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content Row -->

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t<!-- Area Chart -->
\t\t\t\t\t\t\t<div class=\"col-xl-8 col-lg-7\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Card Header - Dropdown -->
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-danger\">Nbre de Reclamations par date de création</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown no-arrow\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">Dropdown Header:</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t<!-- Card Body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chart-area\">
\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"myAreaChart\"></canvas>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        let ctx = document.getElementById(\"myAreaChart\").getContext(\"2d\");

        let labels = ";
        // line 437
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["reclamationsParDate"]) || array_key_exists("reclamationsParDate", $context) ? $context["reclamationsParDate"] : (function () { throw new RuntimeError('Variable "reclamationsParDate" does not exist.', 437, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 437, $this->source); })()), "date", [], "any", false, false, false, 437); }));
        yield ";
        let data = ";
        // line 438
        yield json_encode(Twig\Extension\CoreExtension::map($this->env, (isset($context["reclamationsParDate"]) || array_key_exists("reclamationsParDate", $context) ? $context["reclamationsParDate"] : (function () { throw new RuntimeError('Variable "reclamationsParDate" does not exist.', 438, $this->source); })()), function ($__v__) use ($context, $macros) { $context["v"] = $__v__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["v"]) || array_key_exists("v", $context) ? $context["v"] : (function () { throw new RuntimeError('Variable "v" does not exist.', 438, $this->source); })()), "count", [], "any", false, false, false, 438); }));
        yield ";

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Réclamations',
                    data: data,
                    borderColor: 'rgb(225, 12, 12)',
                    backgroundColor: 'rgba(230, 92, 92, 0.2)',
                    borderWidth: 2,
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: { title: { display: true, text: 'Date' } },
                    y: { title: { display: true, text: 'Nombre de Réclamations' } }
                }
            }
        });
    });
</script>



\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Pie Chart -->
\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-5\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Card Header - Dropdown -->
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-danger\">Nombre de Reclamations Par Type</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown no-arrow\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">Dropdown Header:</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card Body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chart-pie pt-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"myPieChart\"></canvas>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        // line 509
        yield "\t\t\t\t\t\t\t\t\t</div>


                                    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        var ctx = document.getElementById(\"myPieChart\").getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: ";
        // line 519
        yield (isset($context["labels"]) || array_key_exists("labels", $context) ? $context["labels"] : (function () { throw new RuntimeError('Variable "labels" does not exist.', 519, $this->source); })());
        yield ",  // [\"Service\", \"Finance\", \"Autres\"]
                datasets: [{
                    data: ";
        // line 521
        yield (isset($context["counts"]) || array_key_exists("counts", $context) ? $context["counts"] : (function () { throw new RuntimeError('Variable "counts" does not exist.', 521, $this->source); })());
        yield ",  // [10, 5, 8]
                    backgroundColor: ['#FF4136', '#FF851B', '#FF69B4'],
                    hoverBackgroundColor: ['#FF4136', '#FF851B', '#FF69B4'],
                    hoverBorderColor: \"rgba(234, 236, 244, 1)\"
                }]
            },
            options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: \"rgb(255,255,255)\",
      bodyFontColor: \"#858796\",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: true
    },
    cutoutPercentage: 80,
  },
        });
    });
</script>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content Row -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t<!-- Content Column -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-6 mb-4\">

\t\t\t\t\t\t\t\t<!-- Project Card Example -->
\t\t\t\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Statisfaction par type de reclamation</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
        // line 598
        yield "                                    <div class=\"card-body\">
    ";
        // line 599
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["stats"]) || array_key_exists("stats", $context) ? $context["stats"] : (function () { throw new RuntimeError('Variable "stats" does not exist.', 599, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["stat"]) {
            // line 600
            yield "        <h4 class=\"small font-weight-bold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "type", [], "any", false, false, false, 600), "html", null, true);
            yield "
            <span class=\"float-right\">";
            // line 601
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "pourcentage", [], "any", false, false, false, 601), "html", null, true);
            yield "%</span>
        </h4>
        <div class=\"progress mb-4\">
            <div class=\"progress-bar 
                ";
            // line 605
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "pourcentage", [], "any", false, false, false, 605) < 30)) {
                yield " bg-danger 
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 606
$context["stat"], "pourcentage", [], "any", false, false, false, 606) < 60)) {
                yield " bg-warning 
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 607
$context["stat"], "pourcentage", [], "any", false, false, false, 607) < 80)) {
                yield " bg-info 
                ";
            } else {
                // line 608
                yield " bg-success ";
            }
            yield "\"
                role=\"progressbar\"
                style=\"width: ";
            // line 610
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "pourcentage", [], "any", false, false, false, 610), "html", null, true);
            yield "%\"
                aria-valuenow=\"";
            // line 611
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["stat"], "pourcentage", [], "any", false, false, false, 611), "html", null, true);
            yield "\"
                aria-valuemin=\"0\"
                aria-valuemax=\"100\">
            </div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['stat'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 617
        yield "</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Color System -->
\t\t\t\t\t\t\t\t";
        // line 688
        yield "
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-6 mb-4\">

\t\t\t\t\t\t\t\t<!-- Illustrations -->
\t\t\t\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Top 10 Recs Par Users</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\" src=\" ";
        // line 701
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/img/undraw_posting_photo.svg"), "html", null, true);
        yield "\" alt=\"...\">

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p>Add some quality, svg illustrations to your project courtesy of
\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
\t\t\t\t\t\t\t\t\t\t\t\t                                        constantly updated collection of beautiful svg images that you can use
\t\t\t\t\t\t\t\t\t\t\t\t                                        completely free and without attribution!</p>
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
\t\t\t\t\t\t\t\t\t\t\t                                        unDraw &rarr;</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Approach -->
\t\t\t\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
\t\t\t\t\t\t\t\t\t\t\t                                        CSS bloat and poor page performance. Custom CSS classes are used to create
\t\t\t\t\t\t\t\t\t\t\t                                        custom components and custom utility classes.</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Before working with this theme, you should become familiar with the
\t\t\t\t\t\t\t\t\t\t\t                                        Bootstrap framework, especially the utility classes.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.container-fluid -->

\t\t\t\t</div>
\t\t\t\t<!-- End of Main Content -->

\t\t\t\t<!-- Footer -->
\t\t\t\t<footer class=\"sticky-footer bg-white\">
\t\t\t\t\t<div class=\"container my-auto\">
\t\t\t\t\t\t<div class=\"copyright text-center my-auto\">
\t\t\t\t\t\t\t<span>Copyright &copy; Your Website 2021</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<!-- End of Footer -->

\t\t\t</div>
\t\t\t<!-- End of Content Wrapper -->

\t\t</div>
\t\t<!-- End of Page Wrapper -->

\t\t<!-- Scroll to Top Button-->
\t\t<a class=\"scroll-to-top rounded\" href=\"#page-top\">
\t\t\t<i class=\"fas fa-angle-up\"></i>
\t\t</a>

\t\t<!-- Logout Modal-->
\t\t<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
\t\t\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Bootstrap core JavaScript-->
\t\t";
        // line 777
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 796
        yield "\t</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 777
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

        // line 778
        yield "
\t\t\t<script src=\" ";
        // line 779
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\" ";
        // line 780
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Core plugin JavaScript-->
\t\t\t<script src=\" ";
        // line 783
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<!-- Custom scripts for all pages-->
\t\t\t<script src=\"";
        // line 785
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/sb-admin-2.min.js"), "html", null, true);
        yield "\"></script>


\t\t\t<!-- Page level plugins -->
\t\t\t<script src=\"";
        // line 789
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Page level custom scripts -->
\t\t\t<script src=\"";
        // line 792
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/demo/chart-area-demo.js"), "html", null, true);
        yield "\"></script>

\t\t\t<script src=\"";
        // line 794
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/demo/chart-pie-demo.js"), "html", null, true);
        yield "\"></script>
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "reclamation/SatistiquesAdmin.html.twig";
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
        return array (  930 => 794,  925 => 792,  919 => 789,  912 => 785,  907 => 783,  901 => 780,  897 => 779,  894 => 778,  881 => 777,  869 => 796,  867 => 777,  788 => 701,  773 => 688,  766 => 617,  754 => 611,  750 => 610,  744 => 608,  739 => 607,  735 => 606,  731 => 605,  724 => 601,  719 => 600,  715 => 599,  712 => 598,  664 => 521,  659 => 519,  647 => 509,  587 => 438,  583 => 437,  530 => 387,  506 => 366,  500 => 365,  495 => 362,  490 => 359,  465 => 337,  443 => 318,  387 => 265,  354 => 235,  340 => 224,  326 => 213,  187 => 77,  183 => 76,  156 => 52,  128 => 26,  115 => 25,  99 => 19,  91 => 14,  78 => 3,  65 => 2,  42 => 1,);
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

\t\t<title>SB Admin 2 - Dashboard</title>

\t\t<!-- Custom fonts for this template-->
\t\t<link href=\"{{ asset('asset1/vendor/fontawesome-free/css/all.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">
\t\t<link
\t\thref=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\" rel=\"stylesheet\">

\t\t<!-- Custom styles for this template-->
\t\t<link href=\"{{ asset('asset1/css/sb-admin-2.min.css') }}\" rel=\"stylesheet\">


\t</head>
{% endblock %}

{% block body %}
\t<body
\t\tid=\"page-top\">

\t\t<!-- Page Wrapper -->
\t\t<div
\t\t\tid=\"wrapper\">

\t\t\t<!-- Sidebar -->
\t\t\t<ul
\t\t\t\tclass=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

\t\t\t\t<!-- Sidebar - Brand -->
\t\t\t\t<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
\t\t\t\t\t<div class=\"sidebar-brand-icon\">

\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"sidebar-brand-text mx-3\">Up-Next
\t\t\t\t\t</div>
\t\t\t\t</a>

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider my-0\">

\t\t\t\t<!-- Nav Item - Dashboard -->
\t\t\t\t<li class=\"nav-item active\">
\t\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_admin') }}\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-tachometer-alt\"></i>
\t\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t\t</a>
\t\t\t\t</li>

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider\">

\t\t\t\t<!-- Heading -->
\t\t\t\t<div class=\"sidebar-heading\">
\t\t\t\t\tInterface
\t\t\t\t</div>

\t\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t\t<li class=\"nav-item\">
\t\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
\t\t\t\t\t\t<i class=\"fas fa-fw fa-cog\"></i>
\t\t\t\t\t\t<span>Components</span>
\t\t\t\t\t</a>
\t\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t\t<h6 class=\"collapse-header\">Custom Components:</h6>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_add_suivi') }}\">Créer Suivi</a>
\t\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_suivis_admin') }}\">Afficher Les Suivis des Réclamations</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</li>

\t\t\t

\t\t\t\t<!-- Divider -->
\t\t\t\t<hr
\t\t\t\tclass=\"sidebar-divider\">

\t\t\t\t<!-- Heading -->
\t\t\t
\t\t\t
\t\t\t

\t\t\t</ul>
\t\t\t<!-- End of Sidebar -->

\t\t\t<!-- Content Wrapper -->
\t\t\t<div
\t\t\t\tid=\"content-wrapper\" class=\"d-flex flex-column\">

\t\t\t\t<!-- Main Content -->
\t\t\t\t<div
\t\t\t\t\tid=\"content\">

\t\t\t\t\t<!-- Topbar -->
\t\t\t\t\t<nav
\t\t\t\t\t\tclass=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">

\t\t\t\t\t\t<!-- Sidebar Toggle (Topbar) -->
\t\t\t\t\t\t<button id=\"sidebarToggleTop\" class=\"btn btn-link d-md-none rounded-circle mr-3\">
\t\t\t\t\t\t\t<i class=\"fa fa-bars\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<!-- Topbar Search -->
\t\t\t\t\t\t<form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>

\t\t\t\t\t\t<!-- Topbar Navbar -->
\t\t\t\t\t\t<ul
\t\t\t\t\t\t\tclass=\"navbar-nav ml-auto\">

\t\t\t\t\t\t\t<!-- Nav Item - Search Dropdown (Visible Only XS) -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow d-sm-none\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"searchDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-fw\"></i>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in\" aria-labelledby=\"searchDropdown\">
\t\t\t\t\t\t\t\t\t<form class=\"form-inline mr-auto w-100 navbar-search\">
\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Nav Item - Alerts -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-bell fa-fw\"></i>
\t\t\t\t\t\t\t\t\t<!-- Counter - Alerts -->
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\">3+</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - Alerts -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\tAlerts Center
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-file-alt text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 12, 2019</div>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-success\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-donate text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 7, 2019</div>
\t\t\t\t\t\t\t\t\t\t\t\$290.29 has been deposited into your account!
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-warning\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-exclamation-triangle text-white\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 2, 2019</div>
\t\t\t\t\t\t\t\t\t\t\tSpending Alert: We've noticed unusually high spending for your account.
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<!-- Nav Item - Messages -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope fa-fw\"></i>
\t\t\t\t\t\t\t\t\t<!-- Counter - Messages -->
\t\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\">7</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\t\tMessage Center
\t\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">

\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"{{ asset('asset1/img/undraw_profile_1.svg') }}\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-success\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
\t\t\t\t\t\t\t\t\t\t\t\t                                            problem I've been having.</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Emily Fowler · 58m</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"{{ asset('asset1/img/undraw_profile_2.svg') }}\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">I have the photos that you ordered last month, how
\t\t\t\t\t\t\t\t\t\t\t\t                                            would you like them sent to you?</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Jae Chun · 1d</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"{{ asset('asset1/img/undraw_profile_3.svg') }}\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-warning\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Last month's report looks great, I am very happy with
\t\t\t\t\t\t\t\t\t\t\t\t                                            the progress so far, keep up the good work!</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-success\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
\t\t\t\t\t\t\t\t\t\t\t\t                                            told me that people say this to all dogs, even if they aren't good...</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<div class=\"topbar-divider d-none d-sm-block\"></div>

\t\t\t\t\t\t\t<!-- Nav Item - User Information -->
\t\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
\t\t\t\t\t\t\t\t\t<img class=\"img-profile rounded-circle\" src=\"{{ asset('asset1/img/undraw_profile.svg') }}\">
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tActivity Log
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\" data-toggle=\"modal\" data-target=\"#logoutModal\">
\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t</ul>

\t\t\t\t\t</nav>
\t\t\t\t\t<!-- End of Topbar -->

\t\t\t\t\t<!-- Begin Page Content -->
\t\t\t\t\t<div
\t\t\t\t\t\tclass=\"container-fluid\">

\t\t\t\t\t\t<!-- Page Heading -->
\t\t\t\t\t\t<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
\t\t\t\t\t\t\t<h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
\t\t\t\t\t\t\t<a href=\"#\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-download fa-sm text-white-50\"></i>
\t\t\t\t\t\t\t\tGenerate Report</a>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content Row -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t<!-- Earnings (Monthly) Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-danger shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tNombre De Reclamations</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ totalReclamations }}
\t\t\t\t\t\t\t\t\t\t\t\t\tRéclamations</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-calendar fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Earnings (Monthly) Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-success shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tNombre de suivis</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{ totalSuivis }}
\t\t\t\t\t\t\t\t\t\t\t\t\tSuivis
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Earnings (Monthly) Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-info shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Taux de Satisfaction Clientéle
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 mr-3 font-weight-bold text-gray-800\">{{tauxSatisfaction}}%</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                                     {# bar taa progression #}
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-sm mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: {{tauxSatisfaction}}%\" aria-valuenow=\"{{ tauxSatisfaction }}\" aria-valuemin=\"0\" aria-valuemax=\"100\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t{{ tauxSatisfaction|number_format(2) }}%</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-clipboard-list fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Pending Requests Card Example -->
\t\t\t\t\t\t\t<div class=\"col-xl-3 col-md-6 mb-4\">
\t\t\t\t\t\t\t\t<div class=\"card border-left-warning shadow h-100 py-2\">
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"row no-gutters align-items-center\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\tNombre de Reclamations Non Encore Traitées</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"h5 mb-0 font-weight-bold text-gray-800\">{{reclamationsNonTraitees}}</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-auto\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-comments fa-2x text-gray-300\"></i>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content Row -->

\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t<!-- Area Chart -->
\t\t\t\t\t\t\t<div class=\"col-xl-8 col-lg-7\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Card Header - Dropdown -->
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-danger\">Nbre de Reclamations par date de création</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown no-arrow\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">Dropdown Header:</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>



\t\t\t\t\t\t\t\t\t<!-- Card Body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chart-area\">
\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"myAreaChart\"></canvas>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
<script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function () {
        let ctx = document.getElementById(\"myAreaChart\").getContext(\"2d\");

        let labels = {{ reclamationsParDate|map(v => v.date)|json_encode|raw }};
        let data = {{ reclamationsParDate|map(v => v.count)|json_encode|raw }};

        new Chart(ctx, {
            type: 'line',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Réclamations',
                    data: data,
                    borderColor: 'rgb(225, 12, 12)',
                    backgroundColor: 'rgba(230, 92, 92, 0.2)',
                    borderWidth: 2,
                    fill: true,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    x: { title: { display: true, text: 'Date' } },
                    y: { title: { display: true, text: 'Nombre de Réclamations' } }
                }
            }
        });
    });
</script>



\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<!-- Pie Chart -->
\t\t\t\t\t\t\t<div class=\"col-xl-4 col-lg-5\">
\t\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\t\tclass=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<!-- Card Header - Dropdown -->
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-danger\">Nombre de Reclamations Par Type</h6>
\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown no-arrow\">
\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\" aria-labelledby=\"dropdownMenuLink\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-header\">Dropdown Header:</div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Another action</a>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dropdown-divider\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">Something else here</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<!-- Card Body -->
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"chart-pie pt-4 pb-2\">
\t\t\t\t\t\t\t\t\t\t\t<canvas id=\"myPieChart\"></canvas>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{# <div class=\"mt-4 text-center small\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle text-primary\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tDirect
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle text-success\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSocial
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"mr-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-circle text-info\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tReferral
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</div> #}
\t\t\t\t\t\t\t\t\t</div>


                                    <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
<script>
    document.addEventListener(\"DOMContentLoaded\", function() {
        var ctx = document.getElementById(\"myPieChart\").getContext('2d');
        var myPieChart = new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: {{ labels|raw }},  // [\"Service\", \"Finance\", \"Autres\"]
                datasets: [{
                    data: {{ counts|raw }},  // [10, 5, 8]
                    backgroundColor: ['#FF4136', '#FF851B', '#FF69B4'],
                    hoverBackgroundColor: ['#FF4136', '#FF851B', '#FF69B4'],
                    hoverBorderColor: \"rgba(234, 236, 244, 1)\"
                }]
            },
            options: {
    maintainAspectRatio: false,
    tooltips: {
      backgroundColor: \"rgb(255,255,255)\",
      bodyFontColor: \"#858796\",
      borderColor: '#dddfeb',
      borderWidth: 1,
      xPadding: 15,
      yPadding: 15,
      displayColors: false,
      caretPadding: 10,
    },
    legend: {
      display: true
    },
    cutoutPercentage: 80,
  },
        });
    });
</script>


\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<!-- Content Row -->
\t\t\t\t\t\t<div
\t\t\t\t\t\t\tclass=\"row\">

\t\t\t\t\t\t\t<!-- Content Column -->
\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-6 mb-4\">

\t\t\t\t\t\t\t\t<!-- Project Card Example -->
\t\t\t\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Statisfaction par type de reclamation</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t{# <div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Server Migration
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">20%</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\" aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Sales Tracking
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">40%</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\" aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Customer Database
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">60%</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Payout Details
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">80%</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress mb-4\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\" aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<h4 class=\"small font-weight-bold\">Account Setup
\t\t\t\t\t\t\t\t\t\t\t<span class=\"float-right\">Complete!</span>
\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\" aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div> #}
                                    <div class=\"card-body\">
    {% for stat in stats %}
        <h4 class=\"small font-weight-bold\">{{ stat.type }}
            <span class=\"float-right\">{{ stat.pourcentage }}%</span>
        </h4>
        <div class=\"progress mb-4\">
            <div class=\"progress-bar 
                {% if stat.pourcentage < 30 %} bg-danger 
                {% elseif stat.pourcentage < 60 %} bg-warning 
                {% elseif stat.pourcentage < 80 %} bg-info 
                {% else %} bg-success {% endif %}\"
                role=\"progressbar\"
                style=\"width: {{ stat.pourcentage }}%\"
                aria-valuenow=\"{{ stat.pourcentage }}\"
                aria-valuemin=\"0\"
                aria-valuemax=\"100\">
            </div>
        </div>
    {% endfor %}
</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Color System -->
\t\t\t\t\t\t\t\t{# <div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-primary text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tPrimary
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#4e73df</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-success text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tSuccess
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#1cc88a</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-info text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tInfo
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#36b9cc</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-warning text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tWarning
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#f6c23e</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-danger text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tDanger
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#e74a3b</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-secondary text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tSecondary
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#858796</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-light text-black shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tLight
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-black-50 small\">#f8f9fc</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-lg-6 mb-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"card bg-dark text-white shadow\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t\t\tDark
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text-white-50 small\">#5a5c69</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div> #}

\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div
\t\t\t\t\t\t\t\tclass=\"col-lg-6 mb-4\">

\t\t\t\t\t\t\t\t<!-- Illustrations -->
\t\t\t\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Top 10 Recs Par Users</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-center\">
\t\t\t\t\t\t\t\t\t\t\t<img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\" src=\" {{ asset('asset1/img/undraw_posting_photo.svg') }}\" alt=\"...\">

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<p>Add some quality, svg illustrations to your project courtesy of
\t\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
\t\t\t\t\t\t\t\t\t\t\t\t                                        constantly updated collection of beautiful svg images that you can use
\t\t\t\t\t\t\t\t\t\t\t\t                                        completely free and without attribution!</p>
\t\t\t\t\t\t\t\t\t\t<a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
\t\t\t\t\t\t\t\t\t\t\t                                        unDraw &rarr;</a>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<!-- Approach -->
\t\t\t\t\t\t\t\t<div class=\"card shadow mb-4\">
\t\t\t\t\t\t\t\t\t<div class=\"card-header py-3\">
\t\t\t\t\t\t\t\t\t\t<h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t\t\t\t\t<p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
\t\t\t\t\t\t\t\t\t\t\t                                        CSS bloat and poor page performance. Custom CSS classes are used to create
\t\t\t\t\t\t\t\t\t\t\t                                        custom components and custom utility classes.</p>
\t\t\t\t\t\t\t\t\t\t<p class=\"mb-0\">Before working with this theme, you should become familiar with the
\t\t\t\t\t\t\t\t\t\t\t                                        Bootstrap framework, especially the utility classes.</p>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t</div>
\t\t\t\t\t<!-- /.container-fluid -->

\t\t\t\t</div>
\t\t\t\t<!-- End of Main Content -->

\t\t\t\t<!-- Footer -->
\t\t\t\t<footer class=\"sticky-footer bg-white\">
\t\t\t\t\t<div class=\"container my-auto\">
\t\t\t\t\t\t<div class=\"copyright text-center my-auto\">
\t\t\t\t\t\t\t<span>Copyright &copy; Your Website 2021</span>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</footer>
\t\t\t\t<!-- End of Footer -->

\t\t\t</div>
\t\t\t<!-- End of Content Wrapper -->

\t\t</div>
\t\t<!-- End of Page Wrapper -->

\t\t<!-- Scroll to Top Button-->
\t\t<a class=\"scroll-to-top rounded\" href=\"#page-top\">
\t\t\t<i class=\"fas fa-angle-up\"></i>
\t\t</a>

\t\t<!-- Logout Modal-->
\t\t<div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
\t\t\t<div class=\"modal-dialog\" role=\"document\">
\t\t\t\t<div class=\"modal-content\">
\t\t\t\t\t<div class=\"modal-header\">
\t\t\t\t\t\t<h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
\t\t\t\t\t\t<button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
\t\t\t\t\t\t\t<span aria-hidden=\"true\">×</span>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
\t\t\t\t\t<div class=\"modal-footer\">
\t\t\t\t\t\t<button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
\t\t\t\t\t\t<a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<!-- Bootstrap core JavaScript-->
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
\t\t{% endblock %}
\t</body>
{% endblock %}
", "reclamation/SatistiquesAdmin.html.twig", "D:\\artistic-main\\artistic-main\\templates\\reclamation\\SatistiquesAdmin.html.twig");
    }
}
