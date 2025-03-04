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

/* reclamation/testAddRec.html.twig */
class __TwigTemplate_c03cdbc52d79cf09ba52f429da1ebd26 extends Template
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
            'header' => [$this, 'block_header'],
            'hero' => [$this, 'block_hero'],
            'About' => [$this, 'block_About'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/testAddRec.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/testAddRec.html.twig"));

        $this->parent = $this->loadTemplate("baseClient1.html.twig", "reclamation/testAddRec.html.twig", 1);
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
        yield "<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Index - iLanding Bootstrap Template</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

  <!-- Favicons -->
  <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">
  <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/apple-touch-icon.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  =====================================================-->
</head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 39
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

        // line 40
        yield "<body class=\"index-page\">
";
        // line 41
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 89
        yield "
      

";
        // line 92
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 198
        yield from $this->unwrap()->yieldBlock('About', $context, $blocks);
        // line 270
        yield "   <!-- Vendor JS Files -->
   ";
        // line 271
        yield from $this->unwrap()->yieldBlock('JS', $context, $blocks);
        // line 282
        yield "</body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 41
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

        // line 42
        yield "<header id=\"header\" class=\"header d-flex align-items-center fixed-top\">




    <div class=\"header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
        <h1 class=\"sitename\">iLanding</h1>
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"#hero\" class=\"active\">Home</a></li>
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

    // line 92
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_hero(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "hero"));

        // line 93
        yield "    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section\">

      <div class=\"container\">

        <div class=\"row align-items-center\">
          <div class=\"col-lg-6\">
            <div class=\"hero-content\">
              <div class=\"company-badge mb-4\">
                <i class=\"bi bi-gear-fill me-2\"></i>
                Working for your success
              </div>

              <h1 class=\"mb-4\">
                Maecenas Vitae <br>
                Consectetur Led <br>
                <span class=\"accent-text\">Vestibulum Ante</span>
              </h1>

              <p class=\"mb-4 mb-md-5\">
                Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
              </p>

              <div class=\"hero-buttons\">
                <a href=\"#about\" class=\"btn btn-primary me-0 me-sm-2 mx-1\">Get Started</a>
                <a href=\"https://www.youtube.com/watch?v=Y7f98aduVJ8\" class=\"btn btn-link mt-2 mt-sm-0 glightbox\">
                  <i class=\"bi bi-play-circle me-1\"></i>
                  Play Video
                </a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-6\">
            <div class=\"hero-image\" data-aos=\"zoom-out\" data-aos-delay=\"300\">
              <img src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/illustration-1.webp"), "html", null, true);
        yield "\" alt=\"Hero Image\" class=\"img-fluid\">

              <div class=\"customers-badge\">
                <div class=\"customer-avatars\">
                
                  <img src=\"";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-1.webp"), "html", null, true);
        yield "\" alt=\"Customer 1\" class=\"avatar\">
                  <img src=\"";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-2.webp"), "html", null, true);
        yield "\" alt=\"Customer 2\" class=\"avatar\">
                  <img src=\"";
        // line 136
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-3.webp"), "html", null, true);
        yield "\" alt=\"Customer 3\" class=\"avatar\">
                  <img src=\"";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-4.webp"), "html", null, true);
        yield "\" alt=\"Customer 4\" class=\"avatar\">
                  <img src=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-5.webp"), "html", null, true);
        yield "\" alt=\"Customer 5\" class=\"avatar\">
                  <span class=\"avatar more\">12+</span>
                </div>
                <p class=\"mb-0 mt-2\">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
              </div>
            </div>
          </div>
        </div>

        <div class=\"row stats-row gy-4 mt-5\" >
          <div class=\"col-lg-3 col-md-6\">
            <div class=\"stat-item\">
              <div class=\"stat-icon\">
                <i class=\"bi bi-trophy\"></i>
              </div>
              <div class=\"stat-content\">
                <h4>3x Won Awards</h4>
                <p class=\"mb-0\">Vestibulum ante ipsum</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-6\">
            <div class=\"stat-item\">
              <div class=\"stat-icon\">
                <i class=\"bi bi-briefcase\"></i>
              </div>
              <div class=\"stat-content\">
                <h4>6.5k Faucibus</h4>
                <p class=\"mb-0\">Nullam quis ante</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-6\">
            <div class=\"stat-item\">
              <div class=\"stat-icon\">
                <i class=\"bi bi-graph-up\"></i>
              </div>
              <div class=\"stat-content\">
                <h4>80k Mauris</h4>
                <p class=\"mb-0\">Etiam sit amet orci</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-6\">
            <div class=\"stat-item\">
              <div class=\"stat-icon\">
                <i class=\"bi bi-award\"></i>
              </div>
              <div class=\"stat-content\">
                <h4>6x Phasellus</h4>
                <p class=\"mb-0\">Vestibulum ante ipsum</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 198
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_About(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "About"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "About"));

        // line 199
        yield "    <!-- About Section -->
    <section id=\"about\" class=\"about section\">

      <div class=\"container\" >

        <div class=\"row gy-4 align-items-center justify-content-between\">

          <div class=\"col-xl-5\" >
            <span class=\"about-meta\">MORE ABOUT US</span>
            <h2 class=\"about-title\">Voluptas enim suscipit temporibus</h2>
            <p class=\"about-description\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

            <div class=\"row feature-list-wrapper\">
              <div class=\"col-md-6\">
                <ul class=\"feature-list\">
                  <li><i class=\"bi bi-check-circle-fill\"></i> Lorem ipsum dolor sit amet</li>
                  <li><i class=\"bi bi-check-circle-fill\"></i> Consectetur adipiscing elit</li>
                  <li><i class=\"bi bi-check-circle-fill\"></i> Sed do eiusmod tempor</li>
                </ul>
              </div>
              <div class=\"col-md-6\">
                <ul class=\"feature-list\">
                  <li><i class=\"bi bi-check-circle-fill\"></i> Incididunt ut labore et</li>
                  <li><i class=\"bi bi-check-circle-fill\"></i> Dolore magna aliqua</li>
                  <li><i class=\"bi bi-check-circle-fill\"></i> Ut enim ad minim veniam</li>
                </ul>
              </div>
            </div>

            <div class=\"info-wrapper\">
              <div class=\"row gy-4\">
                <div class=\"col-lg-5\">
                  <div class=\"profile d-flex align-items-center gap-3\">
                    <img src=\" ";
        // line 232
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-1.webp"), "html", null, true);
        yield "\" alt=\"CEO Profile\" class=\"profile-image\">
                    <div>
                      <h4 class=\"profile-name\">Mario Smith</h4>
                      <p class=\"profile-position\">CEO &amp; Founder</p>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-7\">
                  <div class=\"contact-info d-flex align-items-center gap-2\">
                    <i class=\"bi bi-telephone-fill\"></i>
                    <div>
                      <p class=\"contact-label\">Call us anytime</p>
                      <p class=\"contact-number\">+123 456-789</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-xl-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"image-wrapper\">
              <div class=\"images position-relative\" data-aos=\"zoom-out\" data-aos-delay=\"400\">
                <img src=\"";
        // line 255
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/about-5.webp"), "html", null, true);
        yield "\" alt=\"Business Meeting\" class=\"img-fluid main-image rounded-4\">
                <img src=\"";
        // line 256
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/about-2.webp"), "html", null, true);
        yield "\" alt=\"Team Discussion\" class=\"img-fluid small-image rounded-4\">
              </div>
              <div class=\"experience-badge floating\">
                <h3>15+ <span>Years</span></h3>
                <p>Of experience in business service</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 271
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

        // line 272
        yield "  <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 273
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 274
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 276
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 277
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        yield "\"></script>

  <!-- Main JS File -->
  <script src=\"";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/js/main.js"), "html", null, true);
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
        return "reclamation/testAddRec.html.twig";
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
        return array (  553 => 280,  547 => 277,  543 => 276,  539 => 275,  535 => 274,  531 => 273,  526 => 272,  513 => 271,  488 => 256,  484 => 255,  458 => 232,  423 => 199,  410 => 198,  339 => 138,  335 => 137,  331 => 136,  327 => 135,  323 => 134,  315 => 129,  277 => 93,  264 => 92,  207 => 42,  194 => 41,  182 => 282,  180 => 271,  177 => 270,  175 => 198,  173 => 92,  168 => 89,  166 => 41,  163 => 40,  150 => 39,  128 => 28,  122 => 25,  118 => 24,  114 => 23,  110 => 22,  106 => 21,  95 => 13,  91 => 12,  81 => 4,  68 => 3,  45 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseClient1.html.twig' %}

  {% block head %}
<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Index - iLanding Bootstrap Template</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

  <!-- Favicons -->
  <link href=\"{{ asset('asset/img/favicon.png') }}\" rel=\"icon\">
  <link href=\"{{ asset('asset/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('asset/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('asset/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('asset/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"{{ asset('asset/css/main.css') }}\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  =====================================================-->
</head>
{% endblock %}
{% block body %}
<body class=\"index-page\">
{% block header %}
<header id=\"header\" class=\"header d-flex align-items-center fixed-top\">




    <div class=\"header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
        <h1 class=\"sitename\">iLanding</h1>
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"#hero\" class=\"active\">Home</a></li>
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

      

{% block hero %}
    <!-- Hero Section -->
    <section id=\"hero\" class=\"hero section\">

      <div class=\"container\">

        <div class=\"row align-items-center\">
          <div class=\"col-lg-6\">
            <div class=\"hero-content\">
              <div class=\"company-badge mb-4\">
                <i class=\"bi bi-gear-fill me-2\"></i>
                Working for your success
              </div>

              <h1 class=\"mb-4\">
                Maecenas Vitae <br>
                Consectetur Led <br>
                <span class=\"accent-text\">Vestibulum Ante</span>
              </h1>

              <p class=\"mb-4 mb-md-5\">
                Nullam quis ante. Etiam sit amet orci eget eros faucibus tincidunt.
                Duis leo. Sed fringilla mauris sit amet nibh. Donec sodales sagittis magna.
              </p>

              <div class=\"hero-buttons\">
                <a href=\"#about\" class=\"btn btn-primary me-0 me-sm-2 mx-1\">Get Started</a>
                <a href=\"https://www.youtube.com/watch?v=Y7f98aduVJ8\" class=\"btn btn-link mt-2 mt-sm-0 glightbox\">
                  <i class=\"bi bi-play-circle me-1\"></i>
                  Play Video
                </a>
              </div>
            </div>
          </div>

          <div class=\"col-lg-6\">
            <div class=\"hero-image\" data-aos=\"zoom-out\" data-aos-delay=\"300\">
              <img src=\"{{ asset('asset/img/illustration-1.webp') }}\" alt=\"Hero Image\" class=\"img-fluid\">

              <div class=\"customers-badge\">
                <div class=\"customer-avatars\">
                
                  <img src=\"{{ asset('asset/img/avatar-1.webp') }}\" alt=\"Customer 1\" class=\"avatar\">
                  <img src=\"{{ asset('asset/img/avatar-2.webp') }}\" alt=\"Customer 2\" class=\"avatar\">
                  <img src=\"{{ asset('asset/img/avatar-3.webp') }}\" alt=\"Customer 3\" class=\"avatar\">
                  <img src=\"{{ asset('asset/img/avatar-4.webp') }}\" alt=\"Customer 4\" class=\"avatar\">
                  <img src=\"{{ asset('asset/img/avatar-5.webp') }}\" alt=\"Customer 5\" class=\"avatar\">
                  <span class=\"avatar more\">12+</span>
                </div>
                <p class=\"mb-0 mt-2\">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
              </div>
            </div>
          </div>
        </div>

        <div class=\"row stats-row gy-4 mt-5\" >
          <div class=\"col-lg-3 col-md-6\">
            <div class=\"stat-item\">
              <div class=\"stat-icon\">
                <i class=\"bi bi-trophy\"></i>
              </div>
              <div class=\"stat-content\">
                <h4>3x Won Awards</h4>
                <p class=\"mb-0\">Vestibulum ante ipsum</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-6\">
            <div class=\"stat-item\">
              <div class=\"stat-icon\">
                <i class=\"bi bi-briefcase\"></i>
              </div>
              <div class=\"stat-content\">
                <h4>6.5k Faucibus</h4>
                <p class=\"mb-0\">Nullam quis ante</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-6\">
            <div class=\"stat-item\">
              <div class=\"stat-icon\">
                <i class=\"bi bi-graph-up\"></i>
              </div>
              <div class=\"stat-content\">
                <h4>80k Mauris</h4>
                <p class=\"mb-0\">Etiam sit amet orci</p>
              </div>
            </div>
          </div>
          <div class=\"col-lg-3 col-md-6\">
            <div class=\"stat-item\">
              <div class=\"stat-icon\">
                <i class=\"bi bi-award\"></i>
              </div>
              <div class=\"stat-content\">
                <h4>6x Phasellus</h4>
                <p class=\"mb-0\">Vestibulum ante ipsum</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->
{% endblock %}
{% block About %}
    <!-- About Section -->
    <section id=\"about\" class=\"about section\">

      <div class=\"container\" >

        <div class=\"row gy-4 align-items-center justify-content-between\">

          <div class=\"col-xl-5\" >
            <span class=\"about-meta\">MORE ABOUT US</span>
            <h2 class=\"about-title\">Voluptas enim suscipit temporibus</h2>
            <p class=\"about-description\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>

            <div class=\"row feature-list-wrapper\">
              <div class=\"col-md-6\">
                <ul class=\"feature-list\">
                  <li><i class=\"bi bi-check-circle-fill\"></i> Lorem ipsum dolor sit amet</li>
                  <li><i class=\"bi bi-check-circle-fill\"></i> Consectetur adipiscing elit</li>
                  <li><i class=\"bi bi-check-circle-fill\"></i> Sed do eiusmod tempor</li>
                </ul>
              </div>
              <div class=\"col-md-6\">
                <ul class=\"feature-list\">
                  <li><i class=\"bi bi-check-circle-fill\"></i> Incididunt ut labore et</li>
                  <li><i class=\"bi bi-check-circle-fill\"></i> Dolore magna aliqua</li>
                  <li><i class=\"bi bi-check-circle-fill\"></i> Ut enim ad minim veniam</li>
                </ul>
              </div>
            </div>

            <div class=\"info-wrapper\">
              <div class=\"row gy-4\">
                <div class=\"col-lg-5\">
                  <div class=\"profile d-flex align-items-center gap-3\">
                    <img src=\" {{ asset('asset/img/avatar-1.webp') }}\" alt=\"CEO Profile\" class=\"profile-image\">
                    <div>
                      <h4 class=\"profile-name\">Mario Smith</h4>
                      <p class=\"profile-position\">CEO &amp; Founder</p>
                    </div>
                  </div>
                </div>
                <div class=\"col-lg-7\">
                  <div class=\"contact-info d-flex align-items-center gap-2\">
                    <i class=\"bi bi-telephone-fill\"></i>
                    <div>
                      <p class=\"contact-label\">Call us anytime</p>
                      <p class=\"contact-number\">+123 456-789</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-xl-6\" data-aos=\"fade-up\" data-aos-delay=\"300\">
            <div class=\"image-wrapper\">
              <div class=\"images position-relative\" data-aos=\"zoom-out\" data-aos-delay=\"400\">
                <img src=\"{{ asset('asset/img/about-5.webp') }}\" alt=\"Business Meeting\" class=\"img-fluid main-image rounded-4\">
                <img src=\"{{ asset('asset/img/about-2.webp') }}\" alt=\"Team Discussion\" class=\"img-fluid small-image rounded-4\">
              </div>
              <div class=\"experience-badge floating\">
                <h3>15+ <span>Years</span></h3>
                <p>Of experience in business service</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->
{% endblock %}
   <!-- Vendor JS Files -->
   {% block JS %}
  <script src=\"{{ asset('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
  <script src=\"{{ asset('asset/vendor/php-email-form/validate.js') }}\"></script>
  <script src=\"{{ asset('asset/vendor/aos/aos.js') }}\"></script>
  <script src=\"{{ asset('asset/vendor/glightbox/js/glightbox.min.js') }}\"></script>
  <script src=\"{{ asset('asset/vendor/swiper/swiper-bundle.min.js') }}\"></script>
  <script src=\"{{ asset('asset/vendor/purecounter/purecounter_vanilla.js') }}\"></script>

  <!-- Main JS File -->
  <script src=\"{{ asset('asset/js/main.js') }}\"></script>
   {% endblock %}
</body>
{% endblock %}
", "reclamation/testAddRec.html.twig", "D:\\artistic-main\\artistic-main\\templates\\reclamation\\testAddRec.html.twig");
    }
}
