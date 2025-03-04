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

/* baseAdmin.html.twig */
class __TwigTemplate_500af7f99e906313efa06c8735525716 extends Template
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
            'body' => [$this, 'block_body'],
            'home' => [$this, 'block_home'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "baseAdmin.html.twig"));

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
        // line 40
        yield "
   ";
        // line 41
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 47
        yield "</head>



<body id=\"page-top\">



    <!-- Page Wrapper -->
    <div id=\"wrapper\">

        <!-- Sidebar -->
        ";
        // line 59
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/admin/sideBare.html.twig");
        yield "

         
        <!-- Sidebar -->  

        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <!-- Main Content -->



            <div id=\"content\">
    <!-- Topbar -->
    <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
        
        <!-- Topbar Search -->
        <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
            <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\" style=\"padding: 0.375rem 0.75rem;\">
                    <img src=\"admin/img/search.png\" alt=\"Search\" style=\"width: 20px; height: 20px;\">
                </button>
            </div>
        </div>
    </form>
    

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



         ";
        // line 109
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 110
        yield "                
          ";
        // line 111
        yield from $this->unwrap()->yieldBlock('home', $context, $blocks);
        // line 112
        yield "           



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    ";
        // line 122
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 125
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
        // line 152
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 172
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
        yield "assets/img/up-next.png";
        yield "\" rel=\"icon\">
 


    <link href=\"";
        // line 25
        yield "admin/vendor/fontawesome-free/css/all.min.css";
        yield "\" rel=\"stylesheet\" type=\"text/css\">
    <link
        href=\"https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i\"
        rel=\"stylesheet\">

   
     <!-- Main CSS File -->
  <link rel=\"stylesheet\" href=\"";
        // line 32
        yield "admin/css/sb-admin-2.min.css";
        yield "\" >
  <link rel=\"stylesheet\" href=\"";
        // line 33
        yield "admin/css/sb-admin-2.css";
        yield "\" >

  



   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
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

        // line 42
        yield "   <link rel=\"stylesheet\" href=\"";
        yield "admin/css/sb-admin-2.min.css";
        yield "\" >
   <link rel=\"stylesheet\" href=\"";
        // line 43
        yield "admin/css/sb-admin-2.css";
        yield "\" >
   
   
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 109
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 111
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

    // line 122
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

        // line 123
        yield "    ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/admin/adminFooter.html.twig");
        yield "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 152
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

        // line 153
        yield "
    <!-- Bootstrap core JavaScript-->
    <script src=\"";
        // line 155
        yield "admin/vendor/jquery/jquery.min.js";
        yield "\"></script>
    <script src=\"";
        // line 156
        yield "admin/vendor/bootstrap/js/bootstrap.bundle.min.js";
        yield "\"></script>

    <!-- Core plugin JavaScript-->
    <script src=\"";
        // line 159
        yield "admin/vendor/jquery-easing/jquery.easing.min.js";
        yield "\"></script>

    <!-- Main JS File -->
  <script src=\"";
        // line 162
        yield "admin/js/sb-admin-2.min.js";
        yield "\"></script>
  <script src=\"";
        // line 163
        yield "admin/js/sb-admin-2.js";
        yield "\"></script>

    <!-- Page level plugins -->
    <script src=\"";
        // line 166
        yield "admin/vendor/chart.js/Chart.min.js";
        yield "\"></script>

    <!-- Page level custom scripts -->
    <script src=\"";
        // line 169
        yield "admin/js/demo/chart-area-demo.js";
        yield "\"></script>
    <script src=\"";
        // line 170
        yield "admin/js/demo/chart-pie-demo.js";
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
        return "baseAdmin.html.twig";
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
        return array (  453 => 170,  449 => 169,  443 => 166,  437 => 163,  433 => 162,  427 => 159,  421 => 156,  417 => 155,  413 => 153,  400 => 152,  386 => 123,  373 => 122,  351 => 111,  329 => 109,  314 => 43,  309 => 42,  296 => 41,  278 => 33,  274 => 32,  264 => 25,  257 => 21,  254 => 20,  241 => 19,  219 => 14,  204 => 172,  202 => 152,  173 => 125,  171 => 122,  159 => 112,  157 => 111,  154 => 110,  152 => 109,  99 => 59,  85 => 47,  83 => 41,  80 => 40,  78 => 19,  70 => 14,  55 => 1,);
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
    <link href=\"{{'assets/img/up-next.png'}}\" rel=\"icon\">
 


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

        <!-- Sidebar -->
        {{ include('includes/admin/sideBare.html.twig') }}

         
        <!-- Sidebar -->  

        <!-- Content Wrapper -->
        <div id=\"content-wrapper\" class=\"d-flex flex-column\">

            <!-- Main Content -->



            <div id=\"content\">
    <!-- Topbar -->
    <nav class=\"navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow\">
        
        <!-- Topbar Search -->
        <form class=\"d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search\">
        <div class=\"input-group\">
            <input type=\"text\" class=\"form-control bg-light border-0 small\" placeholder=\"Search for...\"
                aria-label=\"Search\" aria-describedby=\"basic-addon2\">
            <div class=\"input-group-append\">
                <button class=\"btn btn-primary\" type=\"button\" style=\"padding: 0.375rem 0.75rem;\">
                    <img src=\"admin/img/search.png\" alt=\"Search\" style=\"width: 20px; height: 20px;\">
                </button>
            </div>
        </div>
    </form>
    

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



         {% block body %}{% endblock %}
                
          {% block home %}{% endblock %}
           



        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

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
{% endblock %}


</body>

</html>", "baseAdmin.html.twig", "D:\\artistic-main\\artistic-main\\templates\\baseAdmin.html.twig");
    }
}
