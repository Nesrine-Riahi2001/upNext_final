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

/* reclamation/modifierRec.html.twig */
class __TwigTemplate_3f0640989e9fa9627a42ae3d63abc720 extends Template
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
            'hero' => [$this, 'block_hero'],
            'Contact' => [$this, 'block_Contact'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/modifierRec.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/modifierRec.html.twig"));

        $this->parent = $this->loadTemplate("baseClient1.html.twig", "reclamation/modifierRec.html.twig", 1);
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
        yield "<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Index - iLanding Bootstrap Template</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

  <!-- Favicons -->
  <link href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">
  <link href=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/apple-touch-icon.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"";
        // line 27
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
  <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
    <div class=\"header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
        <img src=\"assets/img/up-next.png\" alt=\"\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"";
        // line 52
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

<a class=\"btn-getstarted\" href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajout_reclamation");
        yield "\">Envoyer Réclamation</a>

    </div>
  </header>
   <main class=\"main\">
   <!-- na7i el data-aos=\"fade-up\" data-aos-delay=\"200\" -->
    <!-- Hero Section -->
    ";
        // line 86
        yield from $this->unwrap()->yieldBlock('hero', $context, $blocks);
        // line 192
        yield from $this->unwrap()->yieldBlock('Contact', $context, $blocks);
        // line 347
        yield "    </main>

  <footer id=\"footer\" class=\"footer\">

    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-4 col-md-6 footer-about\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <span class=\"sitename\">iLanding</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
            <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">About us</a></li>
            <li><a href=\"#\">Services</a></li>
            <li><a href=\"#\">Terms of service</a></li>
            <li><a href=\"#\">Privacy policy</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"#\">Web Design</a></li>
            <li><a href=\"#\">Web Development</a></li>
            <li><a href=\"#\">Product Management</a></li>
            <li><a href=\"#\">Marketing</a></li>
            <li><a href=\"#\">Graphic Design</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href=\"#\">Molestiae accusamus iure</a></li>
            <li><a href=\"#\">Excepturi dignissimos</a></li>
            <li><a href=\"#\">Suscipit distinctio</a></li>
            <li><a href=\"#\">Dilecta</a></li>
            <li><a href=\"#\">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href=\"#\">Ipsam</a></li>
            <li><a href=\"#\">Laudantium dolorum</a></li>
            <li><a href=\"#\">Dinera</a></li>
            <li><a href=\"#\">Trodelas</a></li>
            <li><a href=\"#\">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">iLanding</strong> <span>All Rights Reserved</span></p>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>

  </footer>


";
        // line 432
        yield from $this->unwrap()->yieldBlock('JS', $context, $blocks);
        // line 444
        yield " </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 86
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

        // line 87
        yield "    <section id=\"hero\" class=\"hero section\">

      <div class=\"container\" >

        <div class=\"row align-items-center\">
          <div class=\"col-lg-6\">
            <div class=\"hero-content\" >
              <div class=\"company-badge mb-4\">
                <i class=\"bi bi-gear-fill me-2\"></i>
                Working for your success
              </div>

              <h1 class=\"mb-4\">
                Modifier <br>
                Votre <br>
                <span class=\"accent-text\">Réclamation Votre Avis</span>
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
            <div class=\"hero-image\" >
             <img src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/illustration-1.webp"), "html", null, true);
        yield "\" alt=\"Hero Image\" class=\"img-fluid\">

<div class=\"customers-badge\">
    <div class=\"customer-avatars\">
        <img src=\"";
        // line 126
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-1.webp"), "html", null, true);
        yield "\" alt=\"Customer 1\" class=\"avatar\">
        <img src=\"";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-2.webp"), "html", null, true);
        yield "\" alt=\"Customer 2\" class=\"avatar\">
        <img src=\"";
        // line 128
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-3.webp"), "html", null, true);
        yield "\" alt=\"Customer 3\" class=\"avatar\">
        <img src=\"";
        // line 129
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-4.webp"), "html", null, true);
        yield "\" alt=\"Customer 4\" class=\"avatar\">
        <img src=\"";
        // line 130
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-5.webp"), "html", null, true);
        yield "\" alt=\"Customer 5\" class=\"avatar\">
        <span class=\"avatar more\">12+</span>
    </div>
</div>

                <p class=\"mb-0 mt-2\">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
              </div>
            </div>
          </div>
        </div>

        <div class=\"row stats-row gy-4 mt-5\" data-aos=\"fade-up\" data-aos-delay=\"500\">
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

    // line 192
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_Contact(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Contact"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "Contact"));

        // line 193
        yield "    <!-- Contact Section -->
    <section id=\"contact\" class=\"contact section light-background\">

      <!-- Section Title -->
      <div class=\"container section-title\" >
        <h2>Modifer Reclamation</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\" >

        <div class=\"row g-4 g-lg-5\">
          <div class=\"col-lg-5\">
            <div class=\"info-box\" >
              <h3>Contact Info</h3>
              <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>

              <div class=\"info-item\" >
                <div class=\"icon-box\">
                  <i class=\"bi bi-geo-alt\"></i>
                </div>
                <div class=\"content\">
                  <h4>Our Location</h4>
                  <p>A108 Adam Street</p>
                  <p>New York, NY 535022</p>
                </div>
              </div>

              <div class=\"info-item\" >
                <div class=\"icon-box\">
                  <i class=\"bi bi-telephone\"></i>
                </div>
                <div class=\"content\">
                  <h4>Phone Number</h4>
                  <p>+1 5589 55488 55</p>
                  <p>+1 6678 254445 41</p>
                </div>
              </div>

              <div class=\"info-item\" >
                <div class=\"icon-box\">
                  <i class=\"bi bi-envelope\"></i>
                </div>
                <div class=\"content\">
                  <h4>Email Address</h4>
                  <p>info@example.com</p>
                  <p>contact@example.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-7\">
            <div class=\"contact-form\" >
              <h3>Get In Touch</h3>
              <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>

              ";
        // line 279
        yield "
              ";
        // line 281
        yield "
              ";
        // line 283
        yield "
               
  ";
        // line 286
        yield "    ";
        // line 294
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "
<div class=\"row gy-4\">

    <div class=\"col-md-6\">
        ";
        // line 298
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 298, $this->source); })()), "Titre", [], "any", false, false, false, 298), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Titre "]]);
        yield "
        <div class=\"text-danger\">
            ";
        // line 300
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 300, $this->source); })()), "Titre", [], "any", false, false, false, 300), 'errors');
        yield "
        </div>
    </div>

    <div class=\"col-md-6\">
        ";
        // line 305
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 305, $this->source); })()), "MailClient_Rec", [], "any", false, false, false, 305), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Votre Email"]]);
        yield "
        <div class=\"text-danger\">
            ";
        // line 307
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 307, $this->source); })()), "MailClient_Rec", [], "any", false, false, false, 307), 'errors');
        yield "
        </div>
    </div>

    <div class=\"col-12\">
        ";
        // line 312
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), "Type_Rec", [], "any", false, false, false, 312), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "Type Reclamation"]]);
        yield "
        <div class=\"text-danger\">
            ";
        // line 314
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 314, $this->source); })()), "Type_Rec", [], "any", false, false, false, 314), 'errors');
        yield "
        </div>
    </div>

    <div class=\"col-12\">
        ";
        // line 319
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), "Description_Rec", [], "any", false, false, false, 319), 'widget', ["attr" => ["class" => "form-control", "rows" => "6", "placeholder" => "Descritpion"]]);
        yield "
        <div class=\"text-danger\">
            ";
        // line 321
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 321, $this->source); })()), "Description_Rec", [], "any", false, false, false, 321), 'errors');
        yield "
        </div>
    </div>

    <div class=\"col-12\">
        ";
        // line 326
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 326, $this->source); })()), "file", [], "any", false, false, false, 326), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        
    </div>

    <div class=\"col-12 text-center\">
        ";
        // line 331
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 331, $this->source); })()), "modifier_Rec", [], "any", false, false, false, 331), 'widget', ["attr" => ["class" => "btn", "type" => "submit"]]);
        yield "
    </div>

</div>
";
        // line 335
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 335, $this->source); })()), 'form_end');
        yield "


            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->
  ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 432
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

        // line 433
        yield "   <!-- Vendor JS Files -->
  <script src=\"";
        // line 434
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 436
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 438
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 439
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        yield "\"></script>

  <!-- Main JS File -->
  <script src=\"";
        // line 442
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
        return "reclamation/modifierRec.html.twig";
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
        return array (  690 => 442,  684 => 439,  680 => 438,  676 => 437,  672 => 436,  668 => 435,  664 => 434,  661 => 433,  648 => 432,  625 => 335,  618 => 331,  610 => 326,  602 => 321,  597 => 319,  589 => 314,  584 => 312,  576 => 307,  571 => 305,  563 => 300,  558 => 298,  551 => 294,  549 => 286,  545 => 283,  542 => 281,  539 => 279,  480 => 193,  467 => 192,  394 => 130,  390 => 129,  386 => 128,  382 => 127,  378 => 126,  371 => 122,  334 => 87,  321 => 86,  309 => 444,  307 => 432,  220 => 347,  218 => 192,  216 => 86,  206 => 79,  176 => 52,  162 => 40,  149 => 39,  127 => 27,  121 => 24,  117 => 23,  113 => 22,  109 => 21,  105 => 20,  94 => 12,  90 => 11,  80 => 3,  67 => 2,  44 => 1,);
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

<a class=\"btn-getstarted\" href=\"{{ path('app_ajout_reclamation') }}\">Envoyer Réclamation</a>

    </div>
  </header>
   <main class=\"main\">
   <!-- na7i el data-aos=\"fade-up\" data-aos-delay=\"200\" -->
    <!-- Hero Section -->
    {% block hero %}
    <section id=\"hero\" class=\"hero section\">

      <div class=\"container\" >

        <div class=\"row align-items-center\">
          <div class=\"col-lg-6\">
            <div class=\"hero-content\" >
              <div class=\"company-badge mb-4\">
                <i class=\"bi bi-gear-fill me-2\"></i>
                Working for your success
              </div>

              <h1 class=\"mb-4\">
                Modifier <br>
                Votre <br>
                <span class=\"accent-text\">Réclamation Votre Avis</span>
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
            <div class=\"hero-image\" >
             <img src=\"{{asset('asset/img/illustration-1.webp')}}\" alt=\"Hero Image\" class=\"img-fluid\">

<div class=\"customers-badge\">
    <div class=\"customer-avatars\">
        <img src=\"{{ asset('asset/img/avatar-1.webp') }}\" alt=\"Customer 1\" class=\"avatar\">
        <img src=\"{{ asset('asset/img/avatar-2.webp') }}\" alt=\"Customer 2\" class=\"avatar\">
        <img src=\"{{ asset('asset/img/avatar-3.webp') }}\" alt=\"Customer 3\" class=\"avatar\">
        <img src=\"{{ asset('asset/img/avatar-4.webp') }}\" alt=\"Customer 4\" class=\"avatar\">
        <img src=\"{{ asset('asset/img/avatar-5.webp') }}\" alt=\"Customer 5\" class=\"avatar\">
        <span class=\"avatar more\">12+</span>
    </div>
</div>

                <p class=\"mb-0 mt-2\">12,000+ lorem ipsum dolor sit amet consectetur adipiscing elit</p>
              </div>
            </div>
          </div>
        </div>

        <div class=\"row stats-row gy-4 mt-5\" data-aos=\"fade-up\" data-aos-delay=\"500\">
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
{% block Contact %}
    <!-- Contact Section -->
    <section id=\"contact\" class=\"contact section light-background\">

      <!-- Section Title -->
      <div class=\"container section-title\" >
        <h2>Modifer Reclamation</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class=\"container\" >

        <div class=\"row g-4 g-lg-5\">
          <div class=\"col-lg-5\">
            <div class=\"info-box\" >
              <h3>Contact Info</h3>
              <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>

              <div class=\"info-item\" >
                <div class=\"icon-box\">
                  <i class=\"bi bi-geo-alt\"></i>
                </div>
                <div class=\"content\">
                  <h4>Our Location</h4>
                  <p>A108 Adam Street</p>
                  <p>New York, NY 535022</p>
                </div>
              </div>

              <div class=\"info-item\" >
                <div class=\"icon-box\">
                  <i class=\"bi bi-telephone\"></i>
                </div>
                <div class=\"content\">
                  <h4>Phone Number</h4>
                  <p>+1 5589 55488 55</p>
                  <p>+1 6678 254445 41</p>
                </div>
              </div>

              <div class=\"info-item\" >
                <div class=\"icon-box\">
                  <i class=\"bi bi-envelope\"></i>
                </div>
                <div class=\"content\">
                  <h4>Email Address</h4>
                  <p>info@example.com</p>
                  <p>contact@example.com</p>
                </div>
              </div>
            </div>
          </div>

          <div class=\"col-lg-7\">
            <div class=\"contact-form\" >
              <h3>Get In Touch</h3>
              <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ante ipsum primis.</p>

              {# <form action=\"forms/contact.php\" method=\"post\" class=\"php-email-form\">
                <div class=\"row gy-4\">

                  <div class=\"col-md-6\">
                    <input type=\"text\" name=\"name\" class=\"form-control\" placeholder=\"Your Name\" required=\"\">
                  </div>

                  <div class=\"col-md-6 \">
                    <input type=\"email\" class=\"form-control\" name=\"email\" placeholder=\"Your Email\" required=\"\">
                  </div>

                  <div class=\"col-12\">
                    <input type=\"text\" class=\"form-control\" name=\"subject\" placeholder=\"Subject\" required=\"\">
                  </div>

                  <div class=\"col-12\">
                    <textarea class=\"form-control\" name=\"message\" rows=\"6\" placeholder=\"Message\" required=\"\"></textarea>
                  </div>

                  <div class=\"col-12 text-center\">
                    <div class=\"loading\">Loading</div>
                    <div class=\"error-message\"></div>
                    <div class=\"sent-message\">Your message has been sent. Thank you!</div>

                    <button type=\"submit\" class=\"btn\">Send Message</button>
                  </div>

                </div>
              </form> #}

              {# Affichage du formulaire #}

              {# man7outch el  {'attr': {'class': 'php-email-form' }}) }  bich yamchi el formulaire !!  #}

               
  {# Affichage du formulaire #}
    {# {{ form_start(form) }}
        {{ form_widget(form.Titre) }}
        {{ form_widget(form.MailClient_Rec) }}
        {{ form_widget(form.Type_Rec) }}
        {{ form_widget(form.Description_Rec) }}
        {{ form_widget(form.file) }}
          {{ form_widget(form.modifier_Rec) }}
    {{ form_end(form) }} #}
{{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}
<div class=\"row gy-4\">

    <div class=\"col-md-6\">
        {{ form_widget(form.Titre, {'attr': {'class': 'form-control', 'placeholder': 'Titre '}}) }}
        <div class=\"text-danger\">
            {{ form_errors(form.Titre) }}
        </div>
    </div>

    <div class=\"col-md-6\">
        {{ form_widget(form.MailClient_Rec, {'attr': {'class': 'form-control', 'placeholder': 'Votre Email'}}) }}
        <div class=\"text-danger\">
            {{ form_errors(form.MailClient_Rec) }}
        </div>
    </div>

    <div class=\"col-12\">
        {{ form_widget(form.Type_Rec, {'attr': {'class': 'form-control', 'placeholder': 'Type Reclamation'}}) }}
        <div class=\"text-danger\">
            {{ form_errors(form.Type_Rec) }}
        </div>
    </div>

    <div class=\"col-12\">
        {{ form_widget(form.Description_Rec, {'attr': {'class': 'form-control', 'rows': '6', 'placeholder': 'Descritpion'}}) }}
        <div class=\"text-danger\">
            {{ form_errors(form.Description_Rec) }}
        </div>
    </div>

    <div class=\"col-12\">
        {{ form_widget(form.file, {'attr': {'class': 'form-control'}}) }}
        
    </div>

    <div class=\"col-12 text-center\">
        {{ form_widget(form.modifier_Rec, {'attr': {'class': 'btn', 'type': 'submit'}}) }}
    </div>

</div>
{{ form_end(form) }}


            </div>
          </div>

        </div>

      </div>

    </section><!-- /Contact Section -->
  {% endblock %}
    </main>

  <footer id=\"footer\" class=\"footer\">

    <div class=\"container footer-top\">
      <div class=\"row gy-4\">
        <div class=\"col-lg-4 col-md-6 footer-about\">
          <a href=\"index.html\" class=\"logo d-flex align-items-center\">
            <span class=\"sitename\">iLanding</span>
          </a>
          <div class=\"footer-contact pt-3\">
            <p>A108 Adam Street</p>
            <p>New York, NY 535022</p>
            <p class=\"mt-3\"><strong>Phone:</strong> <span>+1 5589 55488 55</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
          <div class=\"social-links d-flex mt-4\">
            <a href=\"\"><i class=\"bi bi-twitter-x\"></i></a>
            <a href=\"\"><i class=\"bi bi-facebook\"></i></a>
            <a href=\"\"><i class=\"bi bi-instagram\"></i></a>
            <a href=\"\"><i class=\"bi bi-linkedin\"></i></a>
          </div>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Useful Links</h4>
          <ul>
            <li><a href=\"#\">Home</a></li>
            <li><a href=\"#\">About us</a></li>
            <li><a href=\"#\">Services</a></li>
            <li><a href=\"#\">Terms of service</a></li>
            <li><a href=\"#\">Privacy policy</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Our Services</h4>
          <ul>
            <li><a href=\"#\">Web Design</a></li>
            <li><a href=\"#\">Web Development</a></li>
            <li><a href=\"#\">Product Management</a></li>
            <li><a href=\"#\">Marketing</a></li>
            <li><a href=\"#\">Graphic Design</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Hic solutasetp</h4>
          <ul>
            <li><a href=\"#\">Molestiae accusamus iure</a></li>
            <li><a href=\"#\">Excepturi dignissimos</a></li>
            <li><a href=\"#\">Suscipit distinctio</a></li>
            <li><a href=\"#\">Dilecta</a></li>
            <li><a href=\"#\">Sit quas consectetur</a></li>
          </ul>
        </div>

        <div class=\"col-lg-2 col-md-3 footer-links\">
          <h4>Nobis illum</h4>
          <ul>
            <li><a href=\"#\">Ipsam</a></li>
            <li><a href=\"#\">Laudantium dolorum</a></li>
            <li><a href=\"#\">Dinera</a></li>
            <li><a href=\"#\">Trodelas</a></li>
            <li><a href=\"#\">Flexo</a></li>
          </ul>
        </div>

      </div>
    </div>

    <div class=\"container copyright text-center mt-4\">
      <p>© <span>Copyright</span> <strong class=\"px-1 sitename\">iLanding</strong> <span>All Rights Reserved</span></p>
      <div class=\"credits\">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href=\"https://bootstrapmade.com/\">BootstrapMade</a>
      </div>
    </div>

  </footer>


{% block JS %}
   <!-- Vendor JS Files -->
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
", "reclamation/modifierRec.html.twig", "D:\\artistic-main\\artistic-main\\templates\\reclamation\\modifierRec.html.twig");
    }
}
