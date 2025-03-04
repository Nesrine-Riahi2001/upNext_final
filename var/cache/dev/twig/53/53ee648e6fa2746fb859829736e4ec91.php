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

/* base.html.twig */
class __TwigTemplate_1f88587969a5eb4eb6b8efcaffe59332 extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
            'footer' => [$this, 'block_footer'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

   <!-- title -->

   
   <title>";
        // line 13
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
   


   ";
        // line 17
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 37
        yield "
</head>

<body class=\"index-page\">

";
        // line 42
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 47
        yield "
  <main class=\"main\">

    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section\">


      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">


   ";
        // line 57
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 59
        yield "  


      </div>
    </section>
    <!-- /Hero Section -->


</main>

";
        // line 69
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 71
        yield " 


  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
  ";
        // line 76
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 89
        yield "</body>

</html>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 13
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

        yield "Up-next";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 17
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

        // line 18
        yield "  <!-- Favicons -->
  <link href=\"";
        // line 19
        yield "assets/img/up-next logo png.png";
        yield "\" rel=\"icon\">
  <link href=\"";
        // line 20
        yield "assets/img/up-next logo png.png";
        yield "\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 28
        yield "assets/vendor/bootstrap/css/bootstrap.min.css";
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 29
        yield "assets/vendor/bootstrap-icons/bootstrap-icons.css";
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 30
        yield "assets/vendor/aos/aos.css";
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 31
        yield "assets/vendor/glightbox/css/glightbox.min.css";
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 32
        yield "assets/vendor/swiper/swiper-bundle.min.css";
        yield "\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"";
        // line 35
        yield "assets/css/main.css";
        yield "\" rel=\"stylesheet\">
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 42
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 43
        yield "
";
        // line 44
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/header.html.twig");
        yield "

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 57
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

        // line 58
        yield "
   ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 69
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

        // line 70
        yield Twig\Extension\CoreExtension::include($this->env, $context, "includes/footer.html.twig");
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 76
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

        // line 77
        yield "  <!-- Vendor JS Files -->
  <script src=\"";
        // line 78
        yield "assets/vendor/bootstrap/js/bootstrap.bundle.min.js";
        yield "\"></script>
  <script src=\"";
        // line 79
        yield "assets/vendor/php-email-form/validate.js";
        yield "\"></script>
  <script src=\"";
        // line 80
        yield "assets/vendor/aos/aos.js";
        yield "\"></script>
  <script src=\"";
        // line 81
        yield "assets/vendor/glightbox/js/glightbox.min.";
        yield "js\"></script>
  <script src=\"";
        // line 82
        yield "assets/vendor/swiper/swiper-bundle.min.js";
        yield "\"></script>
  <script src=\"";
        // line 83
        yield "assets/vendor/purecounter/purecounter_vanilla.js";
        yield "\"></script>

  <!-- Main JS File -->
  <script src=\"";
        // line 86
        yield "assets/js/main.js";
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
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  348 => 86,  342 => 83,  338 => 82,  334 => 81,  330 => 80,  326 => 79,  322 => 78,  319 => 77,  306 => 76,  293 => 70,  280 => 69,  268 => 58,  255 => 57,  241 => 44,  238 => 43,  225 => 42,  212 => 35,  206 => 32,  202 => 31,  198 => 30,  194 => 29,  190 => 28,  179 => 20,  175 => 19,  172 => 18,  159 => 17,  136 => 13,  123 => 89,  121 => 76,  114 => 71,  112 => 69,  100 => 59,  98 => 57,  86 => 47,  84 => 42,  77 => 37,  75 => 17,  68 => 13,  54 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"fr\">

<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

   <!-- title -->

   
   <title>{% block title %}Up-next{% endblock %}</title>
   


   {% block css %}
  <!-- Favicons -->
  <link href=\"{{'assets/img/up-next logo png.png'}}\" rel=\"icon\">
  <link href=\"{{'assets/img/up-next logo png.png'}}\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">
  <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css\">
  <!-- Vendor CSS Files -->
  <link href=\"{{ 'assets/vendor/bootstrap/css/bootstrap.min.css' }}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/vendor/bootstrap-icons/bootstrap-icons.css'}}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/vendor/aos/aos.css'}}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/vendor/glightbox/css/glightbox.min.css'}}\" rel=\"stylesheet\">
  <link href=\"{{ 'assets/vendor/swiper/swiper-bundle.min.css'}}\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"{{'assets/css/main.css'}}\" rel=\"stylesheet\">
   {% endblock %}

</head>

<body class=\"index-page\">

{% block header %}

{{ include('includes/header.html.twig') }}

{% endblock %}

  <main class=\"main\">

    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section\">


      <div class=\"container\" data-aos=\"fade-up\" data-aos-delay=\"100\">


   {% block body %}

   {% endblock %}  


      </div>
    </section>
    <!-- /Hero Section -->


</main>

{% block footer %}
{{ include('includes/footer.html.twig') }}
{% endblock %} 


  <!-- Scroll Top -->
  <a href=\"#\" id=\"scroll-top\" class=\"scroll-top d-flex align-items-center justify-content-center\"><i class=\"bi bi-arrow-up-short\"></i></a>
  {% block javascripts %}
  <!-- Vendor JS Files -->
  <script src=\"{{ 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'}}\"></script>
  <script src=\"{{ 'assets/vendor/php-email-form/validate.js'}}\"></script>
  <script src=\"{{ 'assets/vendor/aos/aos.js'}}\"></script>
  <script src=\"{{ 'assets/vendor/glightbox/js/glightbox.min.'}}js\"></script>
  <script src=\"{{ 'assets/vendor/swiper/swiper-bundle.min.js'}}\"></script>
  <script src=\"{{ 'assets/vendor/purecounter/purecounter_vanilla.js'}}\"></script>

  <!-- Main JS File -->
  <script src=\"{{ 'assets/js/main.js'}}\"></script>

{% endblock %}
</body>

</html>", "base.html.twig", "D:\\artistic-main\\artistic-main\\templates\\base.html.twig");
    }
}
