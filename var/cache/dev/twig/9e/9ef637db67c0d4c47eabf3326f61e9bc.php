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

/* reclamation/modifier_suivi.html.twig */
class __TwigTemplate_f1c3ed29786a158c31e7a9a405f08fb0 extends Template
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
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
            'Features' => [$this, 'block_Features'],
            'FeaturesCards' => [$this, 'block_FeaturesCards'],
            'JS' => [$this, 'block_JS'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseClient1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/modifier_suivi.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/modifier_suivi.html.twig"));

        $this->parent = $this->loadTemplate("baseClient1.html.twig", "reclamation/modifier_suivi.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield "Modifier la Satisfaction du Suivi
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        // line 5
        yield "
\t<meta charset=\"utf-8\">
\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
\t<title>Index - iLanding Bootstrap Template</title>
\t<meta name=\"description\" content=\"\">
\t<meta
\tname=\"keywords\" content=\"\">

\t<!-- Favicons -->
\t<link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">
\t<link
\thref=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/apple-touch-icon.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">

\t<!-- Fonts -->
\t<link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
\t<link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
\t<link
\thref=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

\t<!-- Vendor CSS Files -->
\t<link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 27
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
\t<link
\thref=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

\t<!-- Main CSS File -->
\t<link
\thref=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

<!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  =====================================================-->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
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

        // line 45
        yield "\t<body class=\"index-page\">
";
        // line 46
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 90
        yield "
\t\t";
        // line 91
        yield from $this->unwrap()->yieldBlock('Features', $context, $blocks);
        // line 184
        yield "\t\t";
        yield from $this->unwrap()->yieldBlock('FeaturesCards', $context, $blocks);
        // line 237
        yield "
\t\t";
        // line 238
        yield from $this->unwrap()->yieldBlock('JS', $context, $blocks);
        // line 252
        yield "
\t</body>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 46
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

        // line 47
        yield "  <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
    <div class=\"header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
        <img src=\"assets/img/up-next.png\" alt=\"\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"";
        // line 58
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"active\">Home</a></li>
          <li><a href=\"#about\">About</a></li>
          <li><a href=\"#features\">Features</a></li>
          <li><a href=\"#services\">Services</a></li>
          <li><a href=\"#pricing\">Pricing</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"#\">Dropdown 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Dropdown 1</a></li>
                  <li><a href=\"#\">Deep Dropdown 2</a></li>
                  <li><a href=\"#\">Deep Dropdown 3</a></li>
                  <li><a href=\"#\">Deep Dropdown 4</a></li>
                  <li><a href=\"#\">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Dropdown 2</a></li>
              <li><a href=\"#\">Dropdown 3</a></li>
              <li><a href=\"#\">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href=\"#contact\">Contact</a></li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <a class=\"btn-getstarted\" href=\"index.html#about\">Get Started</a>

    </div>
  </header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 91
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_Features(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Features"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Features"));

        // line 92
        yield "        <br>
        <br>
        <br>
\t\t\t<!-- Features Section -->
\t\t\t<section
\t\t\t\tid=\"features\" class=\"features section\">

\t\t\t\t<!-- Section Title -->
\t\t\t\t<div class=\"container section-title\">
\t\t\t\t\t<h2>Reclamations et Suivis</h2>
\t\t\t\t\t<p>Veuillez nous donner votre avis suivant les suivis de vos reclamations</p>
\t\t\t\t</div>
\t\t\t\t<!-- End Section Title -->

\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"d-flex justify-content-center\"></div>

\t\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t\t<div class=\"tab-pane fade active show\" id=\"features-tab-1\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t<h3>Pourquoi faire une réclamation ?</h3>
\t\t\t\t\t\t\t\t\t<p class=\"fst-italic\">
\t\t\t\t\t\t\t\t\t\tIl est essentiel de signaler tout problème rencontré afin d'améliorer nos services et garantir votre satisfaction
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check2-all\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Exprimez vos préoccupations et obtenez une solution adaptée rapidement.</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check2-all\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Suivez l'évolution de votre réclamation en toute transparence</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check2-all\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Votre retour nous permet de garantir un service de qualité et d'améliorer votre expérience.</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 order-1 order-lg-2 text-center\">
\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/features-illustration-1.webp"), "html", null, true);
        yield "\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End tab content item -->
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>

\t\t\t\t\t\t";
        // line 144
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), 'form_start');
        yield "
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "Statisfaction", [], "any", false, false, false, 146));
        foreach ($context['_seq'] as $context["_key"] => $context["choix"]) {
            // line 147
            yield "\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t";
            // line 149
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choix"], 'widget', ["attr" => ["class" => "form-check-input"]]);
            yield "
\t\t\t\t\t\t\t\t\t\t";
            // line 150
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["choix"], 'label', ["class" => "form-check-label"]);
            yield "
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['choix'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 154
        yield "                           
\t\t\t\t\t\t</div>
                       

\t\t\t\t\t
\t\t\t\t\t\t 


\t\t\t\t\t</div>

\t\t\t\t</div>
 <div class=\"container\">

\t\t\t\t\t<div class=\"d-flex justify-content-center\">
                        <div class=\"row\">
                        <div class=\"col-md-12\">
                        \t";
        // line 170
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "modifier_Suivi", [], "any", false, false, false, 170), 'widget', ["attr" => ["class" => "btn btn-primary", "style" => "background-color: #6f42c1; border-color: #6f42c1;"]]);
        yield "

        ";
        // line 172
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), 'form_end');
        yield "


                        </div>
                        </div>
                         </div>
                        </div>


\t\t\t</section>
\t\t\t<!-- /Features Section -->
\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 184
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_FeaturesCards(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "FeaturesCards"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "FeaturesCards"));

        // line 185
        yield "        
\t\t\t<!-- Features Cards Section -->
\t\t\t<section id=\"features-cards\" class=\"features-cards section\">

\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"row gy-4\">

\t\t\t\t\t\t<div class=\"col-xl-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"feature-box orange\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-award\"></i>
\t\t\t\t\t\t\t\t<h4>Quitter / Ignorer</h4>
\t\t\t\t\t\t\t\t<p>Vous annulez votre demande de reclamation</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Feature Borx-->


\t\t\t\t\t\t";
        // line 210
        yield "
\t\t\t\t\t\t<div class=\"col-xl-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"feature-box green\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-sunrise\"></i>
\t\t\t\t\t\t\t\t<h4>Vous êtes satisfait!</h4>
\t\t\t\t\t\t\t\t<p>Vous êtes totalement satisfait par les suivis de votre réclamation</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-xl-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"feature-box red\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-shield-check\"></i>
\t\t\t\t\t\t\t\t<h4>Vous n'etes pas satisfait</h4>
\t\t\t\t\t\t\t\t<p>Il existe encore des problemes !</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Feature Borx-->

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</section>
\t\t\t<!-- /Features Cards Section -->

\t\t";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 238
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_JS(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JS"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "JS"));

        // line 239
        yield "

\t\t\t<!-- Vendor JS Files -->
\t\t\t<script src=\"";
        // line 242
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 243
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 244
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 246
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
\t\t\t<script src=\"";
        // line 247
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        yield "\"></script>

\t\t\t<!-- Main JS File -->
\t\t\t<script src=\"";
        // line 250
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/main.js"), "html", null, true);
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
        return "reclamation/modifier_suivi.html.twig";
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
        return array (  550 => 250,  544 => 247,  540 => 246,  536 => 245,  532 => 244,  528 => 243,  524 => 242,  519 => 239,  506 => 238,  469 => 210,  449 => 185,  436 => 184,  413 => 172,  408 => 170,  390 => 154,  380 => 150,  376 => 149,  372 => 147,  368 => 146,  363 => 144,  351 => 135,  306 => 92,  293 => 91,  250 => 58,  237 => 47,  224 => 46,  210 => 252,  208 => 238,  205 => 237,  202 => 184,  200 => 91,  197 => 90,  195 => 46,  192 => 45,  179 => 44,  158 => 34,  151 => 30,  146 => 28,  142 => 27,  138 => 26,  134 => 25,  122 => 16,  117 => 14,  106 => 5,  93 => 4,  69 => 2,  46 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseClient1.html.twig' %}
{% block title %}Modifier la Satisfaction du Suivi
{% endblock %}
{% block head %}

\t<meta charset=\"utf-8\">
\t<meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
\t<title>Index - iLanding Bootstrap Template</title>
\t<meta name=\"description\" content=\"\">
\t<meta
\tname=\"keywords\" content=\"\">

\t<!-- Favicons -->
\t<link href=\"{{ asset('asset/img/favicon.png') }}\" rel=\"icon\">
\t<link
\thref=\"{{ asset('asset/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

\t<!-- Fonts -->
\t<link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
\t<link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
\t<link
\thref=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

\t<!-- Vendor CSS Files -->
\t<link href=\"{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('asset/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
\t<link href=\"{{ asset('asset/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
\t<link
\thref=\"{{ asset('asset/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

\t<!-- Main CSS File -->
\t<link
\thref=\"{{ asset('asset/css/main.css') }}\" rel=\"stylesheet\">

<!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  =====================================================-->
{% endblock %}
{% block body %}
\t<body class=\"index-page\">
{% block header %}
  <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
    <div class=\"header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
        <img src=\"assets/img/up-next.png\" alt=\"\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"{{ path('app_home') }}\" class=\"active\">Home</a></li>
          <li><a href=\"#about\">About</a></li>
          <li><a href=\"#features\">Features</a></li>
          <li><a href=\"#services\">Services</a></li>
          <li><a href=\"#pricing\">Pricing</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"#\">Dropdown 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Dropdown 1</a></li>
                  <li><a href=\"#\">Deep Dropdown 2</a></li>
                  <li><a href=\"#\">Deep Dropdown 3</a></li>
                  <li><a href=\"#\">Deep Dropdown 4</a></li>
                  <li><a href=\"#\">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Dropdown 2</a></li>
              <li><a href=\"#\">Dropdown 3</a></li>
              <li><a href=\"#\">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href=\"#contact\">Contact</a></li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

      <a class=\"btn-getstarted\" href=\"index.html#about\">Get Started</a>

    </div>
  </header>
{% endblock %}

\t\t{% block Features %}
        <br>
        <br>
        <br>
\t\t\t<!-- Features Section -->
\t\t\t<section
\t\t\t\tid=\"features\" class=\"features section\">

\t\t\t\t<!-- Section Title -->
\t\t\t\t<div class=\"container section-title\">
\t\t\t\t\t<h2>Reclamations et Suivis</h2>
\t\t\t\t\t<p>Veuillez nous donner votre avis suivant les suivis de vos reclamations</p>
\t\t\t\t</div>
\t\t\t\t<!-- End Section Title -->

\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"d-flex justify-content-center\"></div>

\t\t\t\t\t<div class=\"tab-content\">

\t\t\t\t\t\t<div class=\"tab-pane fade active show\" id=\"features-tab-1\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center\">
\t\t\t\t\t\t\t\t\t<h3>Pourquoi faire une réclamation ?</h3>
\t\t\t\t\t\t\t\t\t<p class=\"fst-italic\">
\t\t\t\t\t\t\t\t\t\tIl est essentiel de signaler tout problème rencontré afin d'améliorer nos services et garantir votre satisfaction
\t\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check2-all\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Exprimez vos préoccupations et obtenez une solution adaptée rapidement.</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check2-all\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Suivez l'évolution de votre réclamation en toute transparence</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t<i class=\"bi bi-check2-all\"></i>
\t\t\t\t\t\t\t\t\t\t\t<span>Votre retour nous permet de garantir un service de qualité et d'améliorer votre expérience.</span>
\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-lg-6 order-1 order-lg-2 text-center\">
\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('asset/img/features-illustration-1.webp') }}\" alt=\"\" class=\"img-fluid\">
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End tab content item -->
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>
\t\t\t\t\t\t<br>

\t\t\t\t\t\t{{ form_start(form) }}
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t{% for choix in form.Statisfaction %}
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"form-check\">
\t\t\t\t\t\t\t\t\t\t{{ form_widget(choix, {'attr': {'class': 'form-check-input'}}) }}
\t\t\t\t\t\t\t\t\t\t{{ form_label(choix, null, {'class': 'form-check-label'}) }}
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t{% endfor %}
                           
\t\t\t\t\t\t</div>
                       

\t\t\t\t\t
\t\t\t\t\t\t 


\t\t\t\t\t</div>

\t\t\t\t</div>
 <div class=\"container\">

\t\t\t\t\t<div class=\"d-flex justify-content-center\">
                        <div class=\"row\">
                        <div class=\"col-md-12\">
                        \t{{ form_widget(form.modifier_Suivi, {'attr': {'class': 'btn btn-primary', 'style': 'background-color: #6f42c1; border-color: #6f42c1;'}}) }}

        {{ form_end(form) }}


                        </div>
                        </div>
                         </div>
                        </div>


\t\t\t</section>
\t\t\t<!-- /Features Section -->
\t\t{% endblock %}
\t\t{% block FeaturesCards %}
        
\t\t\t<!-- Features Cards Section -->
\t\t\t<section id=\"features-cards\" class=\"features-cards section\">

\t\t\t\t<div class=\"container\">

\t\t\t\t\t<div class=\"row gy-4\">

\t\t\t\t\t\t<div class=\"col-xl-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"feature-box orange\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-award\"></i>
\t\t\t\t\t\t\t\t<h4>Quitter / Ignorer</h4>
\t\t\t\t\t\t\t\t<p>Vous annulez votre demande de reclamation</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Feature Borx-->


\t\t\t\t\t\t{# <div class=\"col-xl-4 col-md-6\" >
\t\t\t\t\t\t            <div class=\"feature-box green\">
\t\t\t\t\t\t              <i class=\"bi bi-sunrise\"></i>
\t\t\t\t\t\t              <h4>Vous etes satisfait!</h4>
\t\t\t\t\t\t              <p>Vous etes totalement satisfait par les suivis de votre reclamation</p>
\t\t\t\t\t\t            </div>
\t\t\t\t\t\t          </div><!-- End Feature Borx--> #}

\t\t\t\t\t\t<div class=\"col-xl-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"feature-box green\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-sunrise\"></i>
\t\t\t\t\t\t\t\t<h4>Vous êtes satisfait!</h4>
\t\t\t\t\t\t\t\t<p>Vous êtes totalement satisfait par les suivis de votre réclamation</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>


\t\t\t\t\t\t<div class=\"col-xl-4 col-md-6\">
\t\t\t\t\t\t\t<div class=\"feature-box red\">
\t\t\t\t\t\t\t\t<i class=\"bi bi-shield-check\"></i>
\t\t\t\t\t\t\t\t<h4>Vous n'etes pas satisfait</h4>
\t\t\t\t\t\t\t\t<p>Il existe encore des problemes !</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<!-- End Feature Borx-->

\t\t\t\t\t</div>

\t\t\t\t</div>

\t\t\t</section>
\t\t\t<!-- /Features Cards Section -->

\t\t{% endblock %}

\t\t{% block JS %}


\t\t\t<!-- Vendor JS Files -->
\t\t\t<script src=\"{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('asset/vendor/php-email-form/validate.js') }}\"></script>
\t\t\t<script src=\"{{ asset('asset/vendor/aos/aos.js') }}\"></script>
\t\t\t<script src=\"{{ asset('asset/vendor/glightbox/js/glightbox.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('asset/vendor/swiper/swiper-bundle.min.js') }}\"></script>
\t\t\t<script src=\"{{ asset('asset/vendor/purecounter/purecounter_vanilla.js') }}\"></script>

\t\t\t<!-- Main JS File -->
\t\t\t<script src=\"{{ asset('asset/js/main.js') }}\"></script>
\t\t{% endblock %}

\t</body>

{% endblock %}
", "reclamation/modifier_suivi.html.twig", "D:\\artistic-main\\artistic-main\\templates\\reclamation\\modifier_suivi.html.twig");
    }
}
