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

/* admin/add_user.html.twig */
class __TwigTemplate_d98cbf494057879be0a7b00951e23515 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/add_user.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/add_user.html.twig"));

        $this->parent = $this->loadTemplate("baseAdmin1.html.twig", "admin/add_user.html.twig", 1);
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
        // line 228
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

\t\t
                   <div class=\"card shadow mb-4\">
  
    <div class=\"card-body\">
        <div class=\"table-responsive\">
         
\t\t<div class=\"container-fluid\">

   
        <style>
            .card {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
            }
            .card-title {
                border-bottom: 2px solidrgb(192, 16, 16);
                padding-bottom: 5px;
                margin-bottom: 20px;
            }
            .form-check-input {
                cursor: pointer;
            
            }
        
            .form-switch .form-check-input {
                    width: 50px;
                    height: 25px;
                    background-size: 25px 25px;
                    transform: scale(1.2);
                    cursor: pointer;
                }
                .form-switch .form-check-label {
                    font-size: 1em;
                    margin-left: 10px;
                    margin-right: 10px;
                    padding:10px;
                }
        
          
        </style>
        <button class=\"btn btn-secondary\" onclick=\"window.location.href='";
        // line 295
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "'\" style=\"padding: \">
    <i class=\"fas fa-arrow-left\"></i> Back
</button>
        <div class=\"d-flex justify-content-center align-items-center vh-200\">

        <div class=\"d-flex flex-column align-items-center gap-3 mt-3\" style=\"padding: 45px 25px;\">
            <div class=\"card p-4 shadow-lg\" style=\"width: 550px;\">
                <h1 class=\"h3 mb-3 font-weight-normal d-flex justify-content-center\">
                    Add New Admin
                </h1>
    
                ";
        // line 306
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 306, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 306));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 307
            yield "                    <div class=\"alert alert-danger\">
                        ";
            // line 308
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 311
        yield "    
                ";
        // line 312
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 312, $this->source); })()), "flashes", ["success"], "method", false, false, false, 312));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 313
            yield "                    <div class=\"alert alert-success\">
                        ";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 317
        yield "    
                ";
        // line 318
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 318, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "novalidate" => "novalidate"]]);
        yield "
    
                <div class=\"mb-3\">
                    ";
        // line 321
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), "firstName", [], "any", false, false, false, 321), 'label');
        yield "
                    ";
        // line 322
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 322, $this->source); })()), "firstName", [], "any", false, false, false, 322), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 323
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 323, $this->source); })()), "firstName", [], "any", false, false, false, 323), 'errors');
        yield "
                </div>
    
                <div class=\"mb-3\">
                    ";
        // line 327
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 327, $this->source); })()), "lastName", [], "any", false, false, false, 327), 'label');
        yield "
                    ";
        // line 328
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 328, $this->source); })()), "lastName", [], "any", false, false, false, 328), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 329
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 329, $this->source); })()), "lastName", [], "any", false, false, false, 329), 'errors');
        yield "
                </div>
    
                <div class=\"mb-3\">
                    ";
        // line 333
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 333, $this->source); })()), "email", [], "any", false, false, false, 333), 'label');
        yield "
                    ";
        // line 334
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 334, $this->source); })()), "email", [], "any", false, false, false, 334), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 335
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), "email", [], "any", false, false, false, 335), 'errors');
        yield "
                </div>
    
                <div class=\"mb-3\">
                    ";
        // line 339
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 339, $this->source); })()), "plainPassword", [], "any", false, false, false, 339), 'label');
        yield "
                    ";
        // line 340
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 340, $this->source); })()), "plainPassword", [], "any", false, false, false, 340), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                    ";
        // line 341
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 341, $this->source); })()), "plainPassword", [], "any", false, false, false, 341), 'errors');
        yield "
                </div>
    
             
    
            
                <div class=\"d-flex flex-column align-items-center gap-3 mt-3\">
                    ";
        // line 348
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 348, $this->source); })()), "save", [], "any", false, false, false, 348), 'row', ["attr" => ["class" => "btn btn-lg btn-primary"]]);
        yield "
                </div>
    
                ";
        // line 351
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 351, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
      

       
       
  


\t\t\t\t\t



\t<!-- Bootstrap core JavaScript-->
\t\t";
        // line 367
        yield from $this->unwrap()->yieldBlock('js', $context, $blocks);
        // line 386
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

    // line 367
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

        // line 368
        yield "
\t\t\t<script src=\" ";
        // line 369
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/jquery/jquery.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\" ";
        // line 370
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Core plugin JavaScript-->
\t\t\t<script src=\" ";
        // line 373
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<!-- Custom scripts for all pages-->
\t\t\t<script src=\"";
        // line 375
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/sb-admin-2.min.js"), "html", null, true);
        yield "\"></script>


\t\t\t<!-- Page level plugins -->
\t\t\t<script src=\"";
        // line 379
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/vendor/chart.js/Chart.min.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Page level custom scripts -->
\t\t\t<script src=\"";
        // line 382
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset1/js/demo/chart-area-demo.js"), "html", null, true);
        yield "\"></script>

\t\t\t<script src=\"";
        // line 384
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
        return "admin/add_user.html.twig";
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
        return array (  667 => 384,  662 => 382,  656 => 379,  649 => 375,  644 => 373,  638 => 370,  634 => 369,  631 => 368,  618 => 367,  604 => 130,  599 => 128,  595 => 126,  582 => 125,  570 => 386,  568 => 367,  549 => 351,  543 => 348,  533 => 341,  529 => 340,  525 => 339,  518 => 335,  514 => 334,  510 => 333,  503 => 329,  499 => 328,  495 => 327,  488 => 323,  484 => 322,  480 => 321,  474 => 318,  471 => 317,  462 => 314,  459 => 313,  455 => 312,  452 => 311,  443 => 308,  440 => 307,  436 => 306,  422 => 295,  352 => 228,  255 => 133,  253 => 125,  235 => 110,  225 => 103,  207 => 88,  196 => 80,  185 => 72,  166 => 56,  150 => 43,  136 => 31,  123 => 30,  105 => 21,  97 => 16,  91 => 13,  79 => 3,  66 => 2,  43 => 1,);
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

\t\t
                   <div class=\"card shadow mb-4\">
  
    <div class=\"card-body\">
        <div class=\"table-responsive\">
         
\t\t<div class=\"container-fluid\">

   
        <style>
            .card {
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 10px;
            }
            .card-title {
                border-bottom: 2px solidrgb(192, 16, 16);
                padding-bottom: 5px;
                margin-bottom: 20px;
            }
            .form-check-input {
                cursor: pointer;
            
            }
        
            .form-switch .form-check-input {
                    width: 50px;
                    height: 25px;
                    background-size: 25px 25px;
                    transform: scale(1.2);
                    cursor: pointer;
                }
                .form-switch .form-check-label {
                    font-size: 1em;
                    margin-left: 10px;
                    margin-right: 10px;
                    padding:10px;
                }
        
          
        </style>
        <button class=\"btn btn-secondary\" onclick=\"window.location.href='{{ path('app_admin') }}'\" style=\"padding: \">
    <i class=\"fas fa-arrow-left\"></i> Back
</button>
        <div class=\"d-flex justify-content-center align-items-center vh-200\">

        <div class=\"d-flex flex-column align-items-center gap-3 mt-3\" style=\"padding: 45px 25px;\">
            <div class=\"card p-4 shadow-lg\" style=\"width: 550px;\">
                <h1 class=\"h3 mb-3 font-weight-normal d-flex justify-content-center\">
                    Add New Admin
                </h1>
    
                {% for message in app.flashes('danger') %}
                    <div class=\"alert alert-danger\">
                        {{ message }}
                    </div>
                {% endfor %}
    
                {% for message in app.flashes('success') %}
                    <div class=\"alert alert-success\">
                        {{ message }}
                    </div>
                {% endfor %}
    
                {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'novalidate': 'novalidate'}}) }}
    
                <div class=\"mb-3\">
                    {{ form_label(form.firstName) }}
                    {{ form_widget(form.firstName, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.firstName) }}
                </div>
    
                <div class=\"mb-3\">
                    {{ form_label(form.lastName) }}
                    {{ form_widget(form.lastName, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.lastName) }}
                </div>
    
                <div class=\"mb-3\">
                    {{ form_label(form.email) }}
                    {{ form_widget(form.email, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.email) }}
                </div>
    
                <div class=\"mb-3\">
                    {{ form_label(form.plainPassword) }}
                    {{ form_widget(form.plainPassword, {'attr': {'class': 'form-control'}}) }}
                    {{ form_errors(form.plainPassword) }}
                </div>
    
             
    
            
                <div class=\"d-flex flex-column align-items-center gap-3 mt-3\">
                    {{ form_row(form.save, {'attr': {'class': 'btn btn-lg btn-primary'}}) }}
                </div>
    
                {{ form_end(form) }}
            </div>
        </div>
    </div>
      

       
       
  


\t\t\t\t\t



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

", "admin/add_user.html.twig", "D:\\artistic-main\\artistic-main\\templates\\admin\\add_user.html.twig");
    }
}
