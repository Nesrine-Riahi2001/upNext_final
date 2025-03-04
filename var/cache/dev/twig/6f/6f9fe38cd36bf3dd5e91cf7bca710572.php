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

/* reclamation/showReclamationsAdmin.html.twig */
class __TwigTemplate_cc86ba75e68a5215517a03c8f6639d31 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/showReclamationsAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/showReclamationsAdmin.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin1.html.twig", "reclamation/showReclamationsAdmin.html.twig", 1);
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

    // line 26
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

        // line 27
        yield "<body
\tid=\"page-top\">

\t<!-- Page Wrapper -->
\t<div
\t\tid=\"wrapper\">

\t\t<!-- Sidebar -->
\t\t<ul
\t\t\tclass=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

\t\t\t<!-- Sidebar - Brand -->
\t\t\t<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
\t\t\t\t<div class=\"sidebar-brand-icon rotate-n-15\">
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"sidebar-brand-text mx-3\">Up-Next
\t\t\t\t</div>

\t\t\t</a>

\t\t\t<!-- Divider -->
\t\t\t<hr
\t\t\tclass=\"sidebar-divider my-0\">

\t\t\t<!-- Nav Item - Dashboard -->
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"";
        // line 54
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\">
\t\t\t\t\t<i class=\"fas fa-fw fa-tachometer-alt\"></i>
\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<!-- Divider -->
\t\t\t<hr
\t\t\tclass=\"sidebar-divider\">

\t\t\t<!-- Heading -->
\t\t\t<div class=\"sidebar-heading\">
\t\t\t\tInterface
\t\t\t</div>

\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
\t\t\t\t\t<i class=\"fas fa-fw fa-cog\"></i>
\t\t\t\t\t<span>Components</span>
\t\t\t\t</a>
\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t<h6 class=\"collapse-header\">Custom Components:</h6>
\t\t\t\t\t\t<a class=\"collapse-item\" href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_recs");
        yield "\">Voir Statistiques</a>
\t\t\t\t\t\t<a class=\"collapse-item\" href=\"cards.html\">Cards</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>


\t\t\t<!-- Divider -->
\t\t\t<hr
\t\t\tclass=\"sidebar-divider\">

\t\t<!-- Heading -->


\t\t</ul>
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
\t\t\t\t\t<form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

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
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\">3+</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - Alerts -->
\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tAlerts Center
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-file-alt text-white\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 12, 2019</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-success\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-donate text-white\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 7, 2019</div>
\t\t\t\t\t\t\t\t\t\t\$290.29 has been deposited into your account!
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-warning\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-exclamation-triangle text-white\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 2, 2019</div>
\t\t\t\t\t\t\t\t\t\tSpending Alert: We've noticed unusually high spending for your account.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Nav Item - Messages -->
\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope fa-fw\"></i>
\t\t\t\t\t\t\t\t<!-- Counter - Messages -->
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\">7</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tMessage Center
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">

\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"";
        // line 212
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/img/undraw_profile_1.svg"), "html", null, true);
        yield "\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-success\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            problem I've been having.</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Emily Fowler · 58m</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"";
        // line 223
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/img/undraw_profile_2.svg"), "html", null, true);
        yield "\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">I have the photos that you ordered last month, how
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            would you like them sent to you?</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Jae Chun · 1d</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/img/undraw_profile_3.svg"), "html", null, true);
        yield "\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-warning\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Last month's report looks great, I am very happy with
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            the progress so far, keep up the good work!</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-success\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            told me that people say this to all dogs, even if they aren't good...</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<div class=\"topbar-divider d-none d-sm-block\"></div>

\t\t\t\t\t\t<!-- Nav Item - User Information -->
\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
\t\t\t\t\t\t\t\t<img class=\"img-profile rounded-circle\" src=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/img/undraw_profile.svg"), "html", null, true);
        yield "\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\tActivity Log
\t\t\t\t\t\t\t\t</a>
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
    <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
    <a href=\"";
        // line 302
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_generate_pdf_report");
        yield "\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
        <i class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report
    </a>
</div>

\t\t\t\t\t";
        // line 308
        yield "
                       <!-- DataTales Example -->
                   <div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-primary\">Liste des Suivis</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
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
        <th>Actions</th>
    </tr>
</thead>
<tfoot>
    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Email Client</th>
        <th>Date de Création</th>
        <th>Date de Résolution</th>
        <th>Type de Réclamation</th>
        <th>Description</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
</tfoot>
                <tbody>
                    ";
        // line 344
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 344, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rec"]) {
            // line 345
            yield "                        <tr>
                            <td>";
            // line 346
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "getId", [], "method", false, false, false, 346), "html", null, true);
            yield "</td>
                            <td>";
            // line 347
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "getTitre", [], "method", false, false, false, 347), "html", null, true);
            yield "</td>
                            <td>";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "getMailClientRec", [], "method", false, false, false, 348), "html", null, true);
            yield "</td>
                            <td>";
            // line 349
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "getDateCreationRec", [], "method", false, false, false, 349), "d/m/Y H:i"), "html", null, true);
            yield "</td>
                            ";
            // line 351
            yield "\t\t\t\t\t\t\t<td> ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "getStatusRec", [], "method", false, false, false, 351) == "Fermé")) {
                // line 352
                yield "        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "getDateResolutionRec", [], "method", false, false, false, 352), "d/m/Y H:i"), "html", null, true);
                yield "
    ";
            } else {
                // line 354
                yield "\t      Empty
    ";
            }
            // line 356
            yield "\t</td>
\t";
            // line 358
            yield "                            <td>";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "getTypeRec", [], "method", false, false, false, 358), "html", null, true);
            yield "</td>
                            <td>";
            // line 359
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "getDescriptionRec", [], "method", false, false, false, 359), "html", null, true);
            yield "</td>
                            <td>";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "getStatusRec", [], "method", false, false, false, 360), "html", null, true);
            yield "</td>

                             <td>
                                    <a href=\"";
            // line 363
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voir_suivi_admin", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["rec"], "id", [], "any", false, false, false, 363)]), "html", null, true);
            yield "\" class=\"btn btn-info btn-sm\">Voir suivi</a>
                             </td>

                            ";
            // line 373
            yield "                            ";
            // line 383
            yield "                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['rec'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 385
        yield "                </tbody>
            </table>
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
        // line 403
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 422
        yield "\t</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 403
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

        // line 404
        yield "
\t\t\t<script src=\" ";
        // line 405
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\" ";
        // line 406
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Core plugin JavaScript-->
\t\t\t<script src=\" ";
        // line 409
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<!-- Custom scripts for all pages-->
\t\t\t<script src=\"";
        // line 411
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/sb-admin-2.min.js"), "html", null, true);
        yield "\"></script>


\t\t\t<!-- Page level plugins -->
\t\t\t<script src=\"";
        // line 415
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Page level custom scripts -->
\t\t\t<script src=\"";
        // line 418
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/demo/chart-area-demo.js"), "html", null, true);
        yield "\"></script>

\t\t\t<script src=\"";
        // line 420
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
        return "reclamation/showReclamationsAdmin.html.twig";
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
        return array (  621 => 420,  616 => 418,  610 => 415,  603 => 411,  598 => 409,  592 => 406,  588 => 405,  585 => 404,  572 => 403,  560 => 422,  558 => 403,  538 => 385,  531 => 383,  529 => 373,  523 => 363,  517 => 360,  513 => 359,  508 => 358,  505 => 356,  501 => 354,  495 => 352,  492 => 351,  488 => 349,  484 => 348,  480 => 347,  476 => 346,  473 => 345,  469 => 344,  431 => 308,  423 => 302,  382 => 264,  349 => 234,  335 => 223,  321 => 212,  184 => 78,  157 => 54,  128 => 27,  115 => 26,  99 => 19,  91 => 14,  78 => 3,  65 => 2,  42 => 1,);
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
<body
\tid=\"page-top\">

\t<!-- Page Wrapper -->
\t<div
\t\tid=\"wrapper\">

\t\t<!-- Sidebar -->
\t\t<ul
\t\t\tclass=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

\t\t\t<!-- Sidebar - Brand -->
\t\t\t<a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"index.html\">
\t\t\t\t<div class=\"sidebar-brand-icon rotate-n-15\">
\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"sidebar-brand-text mx-3\">Up-Next
\t\t\t\t</div>

\t\t\t</a>

\t\t\t<!-- Divider -->
\t\t\t<hr
\t\t\tclass=\"sidebar-divider my-0\">

\t\t\t<!-- Nav Item - Dashboard -->
\t\t\t<li class=\"nav-item active\">
\t\t\t\t<a class=\"nav-link\" href=\"{{ path('app_admin') }}\">
\t\t\t\t\t<i class=\"fas fa-fw fa-tachometer-alt\"></i>
\t\t\t\t\t<span>Dashboard</span>
\t\t\t\t</a>
\t\t\t</li>

\t\t\t<!-- Divider -->
\t\t\t<hr
\t\t\tclass=\"sidebar-divider\">

\t\t\t<!-- Heading -->
\t\t\t<div class=\"sidebar-heading\">
\t\t\t\tInterface
\t\t\t</div>

\t\t\t<!-- Nav Item - Pages Collapse Menu -->
\t\t\t<li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link collapsed\" href=\"#\" data-toggle=\"collapse\" data-target=\"#collapseTwo\" aria-expanded=\"true\" aria-controls=\"collapseTwo\">
\t\t\t\t\t<i class=\"fas fa-fw fa-cog\"></i>
\t\t\t\t\t<span>Components</span>
\t\t\t\t</a>
\t\t\t\t<div id=\"collapseTwo\" class=\"collapse\" aria-labelledby=\"headingTwo\" data-parent=\"#accordionSidebar\">
\t\t\t\t\t<div class=\"bg-white py-2 collapse-inner rounded\">
\t\t\t\t\t\t<h6 class=\"collapse-header\">Custom Components:</h6>
\t\t\t\t\t\t<a class=\"collapse-item\" href=\"{{ path('app_admin_recs') }}\">Voir Statistiques</a>
\t\t\t\t\t\t<a class=\"collapse-item\" href=\"cards.html\">Cards</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</li>


\t\t\t<!-- Divider -->
\t\t\t<hr
\t\t\tclass=\"sidebar-divider\">

\t\t<!-- Heading -->


\t\t</ul>
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
\t\t\t\t\t<form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t<input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\">
\t\t\t\t\t\t\t<div class=\"input-group-append\">
\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"button\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-search fa-sm\"></i>
\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</form>

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
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\">3+</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - Alerts -->
\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"alertsDropdown\">
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tAlerts Center
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-primary\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-file-alt text-white\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 12, 2019</div>
\t\t\t\t\t\t\t\t\t\t<span class=\"font-weight-bold\">A new monthly report is ready to download!</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-success\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-donate text-white\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 7, 2019</div>
\t\t\t\t\t\t\t\t\t\t\$290.29 has been deposited into your account!
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"mr-3\">
\t\t\t\t\t\t\t\t\t\t<div class=\"icon-circle bg-warning\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fas fa-exclamation-triangle text-white\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">December 2, 2019</div>
\t\t\t\t\t\t\t\t\t\tSpending Alert: We've noticed unusually high spending for your account.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Show All Alerts</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<!-- Nav Item - Messages -->
\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow mx-1\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"messagesDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<i class=\"fas fa-envelope fa-fw\"></i>
\t\t\t\t\t\t\t\t<!-- Counter - Messages -->
\t\t\t\t\t\t\t\t<span class=\"badge badge-danger badge-counter\">7</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - Messages -->
\t\t\t\t\t\t\t<div class=\"dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"messagesDropdown\">
\t\t\t\t\t\t\t\t<h6 class=\"dropdown-header\">
\t\t\t\t\t\t\t\t\tMessage Center
\t\t\t\t\t\t\t\t</h6>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">

\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"{{ asset('asset1/img/undraw_profile_1.svg') }}\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-success\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"font-weight-bold\">
\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Hi there! I am wondering if you can help me with a
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            problem I've been having.</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Emily Fowler · 58m</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"{{ asset('asset1/img/undraw_profile_2.svg') }}\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">I have the photos that you ordered last month, how
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            would you like them sent to you?</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Jae Chun · 1d</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"{{ asset('asset1/img/undraw_profile_3.svg') }}\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-warning\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Last month's report looks great, I am very happy with
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            the progress so far, keep up the good work!</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Morgan Alvarez · 2d</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item d-flex align-items-center\" href=\"#\">
\t\t\t\t\t\t\t\t\t<div class=\"dropdown-list-image mr-3\">
\t\t\t\t\t\t\t\t\t\t<img class=\"rounded-circle\" src=\"https://source.unsplash.com/Mv9hjnEUHR4/60x60\" alt=\"...\">
\t\t\t\t\t\t\t\t\t\t<div class=\"status-indicator bg-success\"></div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t<div class=\"text-truncate\">Am I a good boy? The reason I ask is because someone
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t                                            told me that people say this to all dogs, even if they aren't good...</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"small text-gray-500\">Chicken the Dog · 2w</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item text-center small text-gray-500\" href=\"#\">Read More Messages</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<div class=\"topbar-divider d-none d-sm-block\"></div>

\t\t\t\t\t\t<!-- Nav Item - User Information -->
\t\t\t\t\t\t<li class=\"nav-item dropdown no-arrow\">
\t\t\t\t\t\t\t<a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"userDropdown\" role=\"button\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
\t\t\t\t\t\t\t\t<span class=\"mr-2 d-none d-lg-inline text-gray-600 small\">Douglas McGee</span>
\t\t\t\t\t\t\t\t<img class=\"img-profile rounded-circle\" src=\"{{ asset('asset1/img/undraw_profile.svg') }}\">
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t<!-- Dropdown - User Information -->
\t\t\t\t\t\t\t<div class=\"dropdown-menu dropdown-menu-right shadow animated--grow-in\" aria-labelledby=\"userDropdown\">
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-user fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-cogs fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t<a class=\"dropdown-item\" href=\"#\">
\t\t\t\t\t\t\t\t\t<i class=\"fas fa-list fa-sm fa-fw mr-2 text-gray-400\"></i>
\t\t\t\t\t\t\t\t\tActivity Log
\t\t\t\t\t\t\t\t</a>
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
    <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
    <a href=\"{{ path('app_generate_pdf_report') }}\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
        <i class=\"fas fa-download fa-sm text-white-50\"></i> Generate Report
    </a>
</div>

\t\t\t\t\t{# Tableau Des Suivis !! #}

                       <!-- DataTales Example -->
                   <div class=\"card shadow mb-4\">
    <div class=\"card-header py-3\">
        <h6 class=\"m-0 font-weight-bold text-primary\">Liste des Suivis</h6>
    </div>
    <div class=\"card-body\">
        <div class=\"table-responsive\">
            <table class=\"table table-bordered\" id=\"dataTable\" width=\"100%\" cellspacing=\"0\">
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
        <th>Actions</th>
    </tr>
</thead>
<tfoot>
    <tr>
        <th>ID</th>
        <th>Titre</th>
        <th>Email Client</th>
        <th>Date de Création</th>
        <th>Date de Résolution</th>
        <th>Type de Réclamation</th>
        <th>Description</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>
</tfoot>
                <tbody>
                    {% for rec in reclamations %}
                        <tr>
                            <td>{{ rec.getId() }}</td>
                            <td>{{ rec.getTitre() }}</td>
                            <td>{{ rec.getMailClientRec() }}</td>
                            <td>{{ rec.getDateCreationRec()|date('d/m/Y H:i') }}</td>
                            {# <td>{{ rec.getDateResolutionRec()|date('d/m/Y H:i') }}</td> #}
\t\t\t\t\t\t\t<td> {% if rec.getStatusRec() == 'Fermé' %}
        {{ rec.getDateResolutionRec()|date('d/m/Y H:i') }}
    {% else %}
\t      Empty
    {% endif %}
\t</td>
\t{# <td>Date Reso</td> #}
                            <td>{{ rec.getTypeRec() }}</td>
                            <td>{{ rec.getDescriptionRec() }}</td>
                            <td>{{ rec.getStatusRec() }}</td>

                             <td>
                                    <a href=\"{{ path('app_voir_suivi_admin', {'id': rec.id}) }}\" class=\"btn btn-info btn-sm\">Voir suivi</a>
                             </td>

                            {# <td>
                                {% if suivi.getStatisfaction() == 'oui' %}
                                    <span class=\"badge badge-success\">Satisfait</span>
                                {% else %}
                                    <span class=\"badge badge-danger\">Non Satisfait</span>
                                {% endif %}
                            </td> #}
                            {# <td>
                                <a href=\"{{ path('app_modifier_suivi_admin', {'id': suivi.id}) }}\" class=\"btn btn-warning btn-sm\">
                                    <i class=\"fas fa-edit\"></i> Modifier
                                </a>
                                <a href=\"{{ path('app_supprimer_suivi_admin', {'id': suivi.id}) }}\" 
                                   class=\"btn btn-danger btn-sm\" 
                                   onclick=\"return confirm('Voulez-vous vraiment supprimer ce suivi ?');\">
                                    <i class=\"fas fa-trash-alt\"></i> Supprimer
                                </a>
                            </td> #}
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
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

", "reclamation/showReclamationsAdmin.html.twig", "D:\\artistic-main\\artistic-main\\templates\\reclamation\\showReclamationsAdmin.html.twig");
    }
}
