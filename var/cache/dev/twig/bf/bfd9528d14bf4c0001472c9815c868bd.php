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

/* admin/baseAdmin.html.twig */
class __TwigTemplate_af83ee84645d276caabe0426eb9fe857 extends Template
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
            'title' => [$this, 'block_title'],
            'css' => [$this, 'block_css'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'bar' => [$this, 'block_bar'],
            'head' => [$this, 'block_head'],
            'search' => [$this, 'block_search'],
            'home' => [$this, 'block_home'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/baseAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/baseAdmin.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

       <!-- title -->

    <title> ";
        // line 14
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield " </title>

        <!-- title -->
        
    <!-- Custom fonts for this template-->
    ";
        // line 19
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 44
        yield "
   ";
        // line 45
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 51
        yield "</head>



<body id=\"page-top\">



    <!-- Page Wrapper -->
    <div id=\"wrapper\">
";
        // line 61
        yield from $this->unwrap()->yieldBlock('bar', $context, $blocks);
        // line 65
        yield "         
        <!-- Sidebar -->  
    ";
        // line 67
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 112
        yield "         
                
          ";
        // line 114
        yield from $this->unwrap()->yieldBlock('home', $context, $blocks);
        // line 115
        yield "           
        ";
        // line 116
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 374
        yield "    ";
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 377
        yield "

    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 404
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 433
        yield "

</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 14
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 19
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_css(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "css"));

        // line 20
        yield "    <!-- Favicons -->
    <link href=\"";
        // line 21
        yield "assets/img/up-next logo png.png";
        yield "\" rel=\"icon\">
 

<!-- Add this inside <head> -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css\">



    <link href=\"";
        // line 29
        yield "admin/vendor/fontawesome-free/css/all.min.css";
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

   
     <!-- Main CSS File -->
  <link rel=\"stylesheet\" href=\"";
        // line 36
        yield "admin/css/sb-admin-2.min.css";
        yield "\" >
  <link rel=\"stylesheet\" href=\"";
        // line 37
        yield "admin/css/sb-admin-2.css";
        yield "\" >

  



   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 45
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 46
        yield "   <link rel=\"stylesheet\" href=\"";
        yield "admin/css/sb-admin-2.min.css";
        yield "\" >
   <link rel=\"stylesheet\" href=\"";
        // line 47
        yield "admin/css/sb-admin-2.css";
        yield "\" >
   
   
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 61
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_bar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "bar"));

        // line 62
        yield "        <!-- Sidebar -->
        ";
        // line 63
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/admin/sideBare.html.twig");
        yield "
 ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 67
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

        // line 68
        yield "        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <!-- Main Content -->



            <div id=\"content\">
    <!-- Topbar -->
    <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
        

    ";
        // line 80
        yield from $this->unwrap()->yieldBlock('search', $context, $blocks);
        // line 83
        yield "
        <!-- Topbar Navbar -->
        <ul class=\"navbar-nav ml-auto\">
            
            <!-- Notification Icon -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <img class=\"img-profile rounded-circle\" src=\"admin/img/notifications-1.png\" width=\"40\" height=\"40\">
                    <i class=\"fas fa-bell fa-fw\"></i>
                    <span class=\"badge badge-danger badge-counter\">3+</span>
                </a>
            </li>

          
        </ul>
    </nav>
    <!-- End of Topbar -->

<!-- Page Heading -->
<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
<div class=\"container-fluid\">
    <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
</div>
    <a href=\"\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
           Generate Report</a>
</div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 80
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

        // line 81
        yield "    
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 114
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_home(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "home"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 116
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

        // line 117
        yield "          <div class=\"container-fluid\">


<!-- Content Row -->


<!-- Content Row -->
<div class=\"row\">
<!-- Begin Page Content -->
<div class=\"container-fluid\">

           


<div class=\"row\">


    <!-- Area Chart -->
    <div class=\"col-xl-8 col-lg-7\">
        <div class=\"card shadow mb-4\">
            <!-- Card Header - Dropdown -->
            <div
                class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                <div class=\"dropdown no-arrow\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                        aria-labelledby=\"dropdownMenuLink\">
                        <div class=\"dropdown-header\">Dropdown Header:</div>
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class=\"card-body\">
                <div class=\"chart-area\">
                    <canvas id=\"myAreaChart\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class=\"col-xl-4 col-lg-5\">
        <div class=\"card shadow mb-4\">
            <!-- Card Header - Dropdown -->
            <div
                class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                <div class=\"dropdown no-arrow\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                        aria-labelledby=\"dropdownMenuLink\">
                        <div class=\"dropdown-header\">Dropdown Header:</div>
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class=\"card-body\">
                <div class=\"chart-pie pt-4 pb-2\">
                    <canvas id=\"myPieChart\"></canvas>
                </div>
                <div class=\"mt-4 text-center small\">
                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle text-primary\"></i> Direct
                    </span>
                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle text-success\"></i> Social
                    </span>
                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle text-info\"></i> Referral
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class=\"row\">

    <!-- Content Column -->
    <div class=\"col-lg-6 mb-4\">
    

        <!-- Project Card Example -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
            </div>
            <div class=\"card-body\">
                <h4 class=\"small font-weight-bold\">Server Migration <span
                        class=\"float-right\">20%</span></h4>
                <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\"
                        aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <h4 class=\"small font-weight-bold\">Sales Tracking <span
                        class=\"float-right\">40%</span></h4>
                <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\"
                        aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <h4 class=\"small font-weight-bold\">Customer Database <span
                        class=\"float-right\">60%</span></h4>
                <div class=\"progress mb-4\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"
                        aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <h4 class=\"small font-weight-bold\">Payout Details <span
                        class=\"float-right\">80%</span></h4>
                <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\"
                        aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <h4 class=\"small font-weight-bold\">Account Setup <span
                        class=\"float-right\">Complete!</span></h4>
                <div class=\"progress\">
                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\"
                        aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
            </div>
        </div>

        <!-- Color System -->
        <div class=\"row\">
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-primary text-white shadow\">
                    <div class=\"card-body\">
                        Primary
                        <div class=\"text-white-50 small\">#4e73df</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-success text-white shadow\">
                    <div class=\"card-body\">
                        Success
                        <div class=\"text-white-50 small\">#1cc88a</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-info text-white shadow\">
                    <div class=\"card-body\">
                        Info
                        <div class=\"text-white-50 small\">#36b9cc</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-warning text-white shadow\">
                    <div class=\"card-body\">
                        Warning
                        <div class=\"text-white-50 small\">#f6c23e</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-danger text-white shadow\">
                    <div class=\"card-body\">
                        Danger
                        <div class=\"text-white-50 small\">#e74a3b</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-secondary text-white shadow\">
                    <div class=\"card-body\">
                        Secondary
                        <div class=\"text-white-50 small\">#858796</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-light text-black shadow\">
                    <div class=\"card-body\">
                        Light
                        <div class=\"text-black-50 small\">#f8f9fc</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-dark text-white shadow\">
                    <div class=\"card-body\">
                        Dark
                        <div class=\"text-white-50 small\">#5a5c69</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class=\"col-lg-6 mb-4\">

        <!-- Illustrations -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"text-center\">
                    <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                        src=\"img/undraw_posting_photo.svg\" alt=\"...\">
                </div>
                <p>Add some quality, svg illustrations to your project courtesy of <a
                        target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
                    constantly updated collection of beautiful svg images that you can use
                    completely free and without attribution!</p>
                <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
                    unDraw &rarr;</a>
            </div>
        </div>

        <!-- Approach -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
            </div>
            <div class=\"card-body\">
                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                    CSS bloat and poor page performance. Custom CSS classes are used to create
                    custom components and custom utility classes.</p>
                <p class=\"mb-0\">Before working with this theme, you should become familiar with the
                    Bootstrap framework, especially the utility classes.</p>
            </div>
        </div>

    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 374
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "footer"));

        // line 375
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/admin/adminFooter.html.twig");
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 404
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 405
        yield "
    <!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 407
        yield "admin/vendor/jquery/jquery.min.js";
        yield "\"></script>
    <script src=\"";
        // line 408
        yield "admin/vendor/bootstrap/js/bootstrap.bundle.min.js";
        yield "\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 411
        yield "admin/vendor/jquery-easing/jquery.easing.min.js";
        yield "\"></script>

    <!-- Main JS File -->
  <script src=\"";
        // line 414
        yield "admin/js/sb-admin-2.min.js";
        yield "\"></script>
  <script src=\"";
        // line 415
        yield "admin/js/sb-admin-2.js";
        yield "\"></script>

    <!-- Page level plugins -->
    <script src=\"";
        // line 418
        yield "admin/vendor/chart.js/Chart.min.js";
        yield "\"></script>

    <!-- Page level custom scripts -->
    <script src=\"";
        // line 421
        yield "admin/js/demo/chart-area-demo.js";
        yield "\"></script>
    <script src=\"";
        // line 422
        yield "admin/js/demo/chart-pie-demo.js";
        yield "\"></script>

    <!-- Add this before </body> -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js\"></script>

<!-- Bootstrap CSS -->

<!-- Bootstrap JS -->

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
        return "admin/baseAdmin.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  786 => 422,  782 => 421,  776 => 418,  770 => 415,  766 => 414,  760 => 411,  754 => 408,  750 => 407,  746 => 405,  733 => 404,  719 => 375,  706 => 374,  439 => 117,  426 => 116,  404 => 114,  392 => 81,  379 => 80,  340 => 83,  338 => 80,  324 => 68,  311 => 67,  298 => 63,  295 => 62,  282 => 61,  267 => 47,  262 => 46,  249 => 45,  231 => 37,  227 => 36,  217 => 29,  206 => 21,  203 => 20,  190 => 19,  168 => 14,  153 => 433,  151 => 404,  122 => 377,  119 => 374,  117 => 116,  114 => 115,  112 => 114,  108 => 112,  106 => 67,  102 => 65,  100 => 61,  88 => 51,  86 => 45,  83 => 44,  81 => 19,  73 => 14,  58 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>

    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

       <!-- title -->

    <title> {% block title %}{% endblock %} </title>

        <!-- title -->
        
    <!-- Custom fonts for this template-->
    {% block css %}
    <!-- Favicons -->
    <link href=\"{{'assets/img/up-next logo png.png'}}\" rel=\"icon\">
 

<!-- Add this inside <head> -->
    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css\">



    <link href=\"{{'admin/vendor/fontawesome-free/css/all.min.css'}}\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

   
     <!-- Main CSS File -->
  <link rel=\"stylesheet\" href=\"{{'admin/css/sb-admin-2.min.css'}}\" >
  <link rel=\"stylesheet\" href=\"{{'admin/css/sb-admin-2.css'}}\" >

  



   {% endblock %}

   {% block stylesheets %}
   <link rel=\"stylesheet\" href=\"{{'admin/css/sb-admin-2.min.css'}}\" >
   <link rel=\"stylesheet\" href=\"{{'admin/css/sb-admin-2.css'}}\" >
   
   
    {% endblock %}
</head>



<body id=\"page-top\">



    <!-- Page Wrapper -->
    <div id=\"wrapper\">
{% block bar %}
        <!-- Sidebar -->
        {{ include('includes/admin/sideBare.html.twig') }}
 {% endblock %}
         
        <!-- Sidebar -->  
    {% block head %}
        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <!-- Main Content -->



            <div id=\"content\">
    <!-- Topbar -->
    <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
        

    {% block search %}
    
{% endblock %}

        <!-- Topbar Navbar -->
        <ul class=\"navbar-nav ml-auto\">
            
            <!-- Notification Icon -->
            <li class=\"nav-item dropdown no-arrow mx-1\">
                <a class=\"nav-link dropdown-toggle\" href=\"#\" id=\"alertsDropdown\" role=\"button\"
                    data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                    <img class=\"img-profile rounded-circle\" src=\"admin/img/notifications-1.png\" width=\"40\" height=\"40\">
                    <i class=\"fas fa-bell fa-fw\"></i>
                    <span class=\"badge badge-danger badge-counter\">3+</span>
                </a>
            </li>

          
        </ul>
    </nav>
    <!-- End of Topbar -->

<!-- Page Heading -->
<div class=\"d-sm-flex align-items-center justify-content-between mb-4\">
<div class=\"container-fluid\">
    <h1 class=\"h3 mb-0 text-gray-800\">Dashboard</h1>
</div>
    <a href=\"\" class=\"d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm\">
           Generate Report</a>
</div>

{% endblock %}
         
                
          {% block home %}{% endblock %}
           
        {% block body %}
          <div class=\"container-fluid\">


<!-- Content Row -->


<!-- Content Row -->
<div class=\"row\">
<!-- Begin Page Content -->
<div class=\"container-fluid\">

           


<div class=\"row\">


    <!-- Area Chart -->
    <div class=\"col-xl-8 col-lg-7\">
        <div class=\"card shadow mb-4\">
            <!-- Card Header - Dropdown -->
            <div
                class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Earnings Overview</h6>
                <div class=\"dropdown no-arrow\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                        aria-labelledby=\"dropdownMenuLink\">
                        <div class=\"dropdown-header\">Dropdown Header:</div>
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class=\"card-body\">
                <div class=\"chart-area\">
                    <canvas id=\"myAreaChart\"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie Chart -->
    <div class=\"col-xl-4 col-lg-5\">
        <div class=\"card shadow mb-4\">
            <!-- Card Header - Dropdown -->
            <div
                class=\"card-header py-3 d-flex flex-row align-items-center justify-content-between\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Revenue Sources</h6>
                <div class=\"dropdown no-arrow\">
                    <a class=\"dropdown-toggle\" href=\"#\" role=\"button\" id=\"dropdownMenuLink\"
                        data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                        <i class=\"fas fa-ellipsis-v fa-sm fa-fw text-gray-400\"></i>
                    </a>
                    <div class=\"dropdown-menu dropdown-menu-right shadow animated--fade-in\"
                        aria-labelledby=\"dropdownMenuLink\">
                        <div class=\"dropdown-header\">Dropdown Header:</div>
                        <a class=\"dropdown-item\" href=\"#\">Action</a>
                        <a class=\"dropdown-item\" href=\"#\">Another action</a>
                        <div class=\"dropdown-divider\"></div>
                        <a class=\"dropdown-item\" href=\"#\">Something else here</a>
                    </div>
                </div>
            </div>
            <!-- Card Body -->
            <div class=\"card-body\">
                <div class=\"chart-pie pt-4 pb-2\">
                    <canvas id=\"myPieChart\"></canvas>
                </div>
                <div class=\"mt-4 text-center small\">
                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle text-primary\"></i> Direct
                    </span>
                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle text-success\"></i> Social
                    </span>
                    <span class=\"mr-2\">
                        <i class=\"fas fa-circle text-info\"></i> Referral
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Content Row -->
<div class=\"row\">

    <!-- Content Column -->
    <div class=\"col-lg-6 mb-4\">
    

        <!-- Project Card Example -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Projects</h6>
            </div>
            <div class=\"card-body\">
                <h4 class=\"small font-weight-bold\">Server Migration <span
                        class=\"float-right\">20%</span></h4>
                <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-danger\" role=\"progressbar\" style=\"width: 20%\"
                        aria-valuenow=\"20\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <h4 class=\"small font-weight-bold\">Sales Tracking <span
                        class=\"float-right\">40%</span></h4>
                <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-warning\" role=\"progressbar\" style=\"width: 40%\"
                        aria-valuenow=\"40\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <h4 class=\"small font-weight-bold\">Customer Database <span
                        class=\"float-right\">60%</span></h4>
                <div class=\"progress mb-4\">
                    <div class=\"progress-bar\" role=\"progressbar\" style=\"width: 60%\"
                        aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <h4 class=\"small font-weight-bold\">Payout Details <span
                        class=\"float-right\">80%</span></h4>
                <div class=\"progress mb-4\">
                    <div class=\"progress-bar bg-info\" role=\"progressbar\" style=\"width: 80%\"
                        aria-valuenow=\"80\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
                <h4 class=\"small font-weight-bold\">Account Setup <span
                        class=\"float-right\">Complete!</span></h4>
                <div class=\"progress\">
                    <div class=\"progress-bar bg-success\" role=\"progressbar\" style=\"width: 100%\"
                        aria-valuenow=\"100\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                </div>
            </div>
        </div>

        <!-- Color System -->
        <div class=\"row\">
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-primary text-white shadow\">
                    <div class=\"card-body\">
                        Primary
                        <div class=\"text-white-50 small\">#4e73df</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-success text-white shadow\">
                    <div class=\"card-body\">
                        Success
                        <div class=\"text-white-50 small\">#1cc88a</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-info text-white shadow\">
                    <div class=\"card-body\">
                        Info
                        <div class=\"text-white-50 small\">#36b9cc</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-warning text-white shadow\">
                    <div class=\"card-body\">
                        Warning
                        <div class=\"text-white-50 small\">#f6c23e</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-danger text-white shadow\">
                    <div class=\"card-body\">
                        Danger
                        <div class=\"text-white-50 small\">#e74a3b</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-secondary text-white shadow\">
                    <div class=\"card-body\">
                        Secondary
                        <div class=\"text-white-50 small\">#858796</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-light text-black shadow\">
                    <div class=\"card-body\">
                        Light
                        <div class=\"text-black-50 small\">#f8f9fc</div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 mb-4\">
                <div class=\"card bg-dark text-white shadow\">
                    <div class=\"card-body\">
                        Dark
                        <div class=\"text-white-50 small\">#5a5c69</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class=\"col-lg-6 mb-4\">

        <!-- Illustrations -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Illustrations</h6>
            </div>
            <div class=\"card-body\">
                <div class=\"text-center\">
                    <img class=\"img-fluid px-3 px-sm-4 mt-3 mb-4\" style=\"width: 25rem;\"
                        src=\"img/undraw_posting_photo.svg\" alt=\"...\">
                </div>
                <p>Add some quality, svg illustrations to your project courtesy of <a
                        target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">unDraw</a>, a
                    constantly updated collection of beautiful svg images that you can use
                    completely free and without attribution!</p>
                <a target=\"_blank\" rel=\"nofollow\" href=\"https://undraw.co/\">Browse Illustrations on
                    unDraw &rarr;</a>
            </div>
        </div>

        <!-- Approach -->
        <div class=\"card shadow mb-4\">
            <div class=\"card-header py-3\">
                <h6 class=\"m-0 font-weight-bold text-primary\">Development Approach</h6>
            </div>
            <div class=\"card-body\">
                <p>SB Admin 2 makes extensive use of Bootstrap 4 utility classes in order to reduce
                    CSS bloat and poor page performance. Custom CSS classes are used to create
                    custom components and custom utility classes.</p>
                <p class=\"mb-0\">Before working with this theme, you should become familiar with the
                    Bootstrap framework, especially the utility classes.</p>
            </div>
        </div>

    </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
{% endblock %}
    {% block footer %}
    {{ include('includes/admin/adminFooter.html.twig') }}
    {% endblock %}


    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
        <i class=\"fas fa-angle-up\"></i>
    </a>

    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"logoutModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\"
        aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Ready to Leave?</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">Select \"Logout\" below if you are ready to end your current session.</div>
                <div class=\"modal-footer\">
                    <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cancel</button>
                    <a class=\"btn btn-primary\" href=\"login.html\">Logout</a>
                </div>
            </div>
        </div>
    </div>

    {% block javascripts %}

    <!-- Bootstrap core JavaScript-->
    <script src=\"{{'admin/vendor/jquery/jquery.min.js'}}\"></script>
    <script src=\"{{'admin/vendor/bootstrap/js/bootstrap.bundle.min.js'}}\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"{{'admin/vendor/jquery-easing/jquery.easing.min.js'}}\"></script>

    <!-- Main JS File -->
  <script src=\"{{ 'admin/js/sb-admin-2.min.js'}}\"></script>
  <script src=\"{{ 'admin/js/sb-admin-2.js'}}\"></script>

    <!-- Page level plugins -->
    <script src=\"{{'admin/vendor/chart.js/Chart.min.js'}}\"></script>

    <!-- Page level custom scripts -->
    <script src=\"{{'admin/js/demo/chart-area-demo.js'}}\"></script>
    <script src=\"{{'admin/js/demo/chart-pie-demo.js'}}\"></script>

    <!-- Add this before </body> -->
<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js\"></script>

<!-- Bootstrap CSS -->

<!-- Bootstrap JS -->

{% endblock %}


</body>

</html>", "admin/baseAdmin.html.twig", "D:\\artistic-main\\artistic-main\\templates\\admin\\baseAdmin.html.twig");
    }
}
