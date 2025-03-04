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

/* reclamation/ChatbotAi.html.twig */
class __TwigTemplate_b7f24b9852dfe654690730eabff10766 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/ChatbotAi.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/ChatbotAi.html.twig"));

        $this->parent = $this->loadTemplate("baseClient1.html.twig", "reclamation/ChatbotAi.html.twig", 1);
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
        yield " <head>
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
        yield "\">Ajouter Réclamation</a>

    </div>
  </header>
   
   <!-- na7i el data-aos=\"fade-up\" data-aos-delay=\"200\" -->
    <!-- Hero Section -->
    <style>
    * {
  font-family: 'Roboto';
}
.bubbleWrapper {
\tpadding: 10px 10px;
\tdisplay: flex;
\tjustify-content: flex-end;
\tflex-direction: column;
\talign-self: flex-end;
  color: #fff;
}
.inlineContainer {
  display: inline-flex;
}
.inlineContainer.own {
  flex-direction: row-reverse;
}
.inlineIcon {
  width:20px;
  object-fit: contain;
}
.ownBubble {
\tmin-width: 60px;
\tmax-width: 700px;
\tpadding: 14px 18px;
  margin: 6px 8px;
\tbackground-color:rgb(32, 113, 205);
\tborder-radius: 16px 16px 0 16px;
\tborder: 1px solidrgb(63, 75, 86);
 
}
.otherBubble {
\tmin-width: 60px;
\tmax-width: 700px;
\tpadding: 14px 18px;
  margin: 6px 8px;
\tbackground-color: #6C8EA4;
\tborder-radius: 16px 16px 16px 0;
\tborder: 1px solid #54788e;
  
}
.own {
\talign-self: flex-end;
}
.other {
\talign-self: flex-start;
}
span.own,
span.other{
  font-size: 14px;
  color: grey;
}


:root {
    --default-font: \"Roboto\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
}

/* Appliquez la police à tout le texte dans la conversation */
.chat-container,
.message-wrapper,
.bubble,
.own-bubble,
.message-form-container,
textarea.form-control {
    font-family: var(--default-font);
}

/* Vous pouvez aussi appliquer la police spécifiquement aux messages */
.own-bubble,
.other-bubble {
    font-family: var(--default-font);
}
    </style>
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
                Chater <br>
                Avec Notre Assistant AI pour Reclamations <br>
                <span class=\"accent-text\">Plus Rapide que jamais!</span>
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
        // line 195
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/Chatbot.jpg"), "html", null, true);
        yield "\" alt=\"Hero Image\" class=\"img-fluid\">

<div class=\"customers-badge\">
    <div class=\"customer-avatars\">
        <img src=\"";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-1.webp"), "html", null, true);
        yield "\" alt=\"Customer 1\" class=\"avatar\">
        <img src=\"";
        // line 200
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-2.webp"), "html", null, true);
        yield "\" alt=\"Customer 2\" class=\"avatar\">
        <img src=\"";
        // line 201
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-3.webp"), "html", null, true);
        yield "\" alt=\"Customer 3\" class=\"avatar\">
        <img src=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/avatar-4.webp"), "html", null, true);
        yield "\" alt=\"Customer 4\" class=\"avatar\">
        <img src=\"";
        // line 203
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

</section>



    <section id=\"hero\" class=\"hero section\">

      <div class=\"container\" >

        <div class=\"row align-items-center\">
          <div class=\"col-lg-12\">
          
  <h1>Chatbot Conversation</h1>
    
   

    <div class=\"chat\">
        ";
        // line 230
        if ((isset($context["chatbotResponse"]) || array_key_exists("chatbotResponse", $context) ? $context["chatbotResponse"] : (function () { throw new RuntimeError('Variable "chatbotResponse" does not exist.', 230, $this->source); })())) {
            // line 231
            yield "            <div class=\"bubbleWrapper\">
                <div class=\"inlineContainer own\">
                    <img class=\"inlineIcon\" src=\"https://www.pinclipart.com/picdir/middle/205-2059398_blinkk-en-mac-app-store-ninja-icon-transparent.png\">
                    <div class=\"ownBubble own\">
                        ";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["chatbotResponse"]) || array_key_exists("chatbotResponse", $context) ? $context["chatbotResponse"] : (function () { throw new RuntimeError('Variable "chatbotResponse" does not exist.', 235, $this->source); })()), "html", null, true);
            yield "
                    </div>
                </div>
                <span class=\"own\">Now</span>
            </div>
        ";
        }
        // line 241
        yield "    </div>

     <form method=\"POST\" action=\"";
        // line 243
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_chatbot_rec2");
        yield "\">
        <div class=\"form-group\">
            <label for=\"userMessage\">Your Message:</label>
            <textarea id=\"userMessage\" name=\"userMessage\" rows=\"4\" class=\"form-control\" required></textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Send</button>
    </form>

</div>
</div>
</div>
    </section>


";
        // line 257
        yield from $this->unwrap()->yieldBlock('JS', $context, $blocks);
        // line 269
        yield " </body>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 257
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

        // line 258
        yield "   <!-- Vendor JS Files -->
  <script src=\"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/php-email-form/validate.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 261
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/aos/aos.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 262
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/glightbox/js/glightbox.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 263
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/swiper/swiper-bundle.min.js"), "html", null, true);
        yield "\"></script>
  <script src=\"";
        // line 264
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/purecounter/purecounter_vanilla.js"), "html", null, true);
        yield "\"></script>

  <!-- Main JS File -->
  <script src=\"";
        // line 267
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
        return "reclamation/ChatbotAi.html.twig";
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
        return array (  470 => 267,  464 => 264,  460 => 263,  456 => 262,  452 => 261,  448 => 260,  444 => 259,  441 => 258,  428 => 257,  416 => 269,  414 => 257,  397 => 243,  393 => 241,  384 => 235,  378 => 231,  376 => 230,  346 => 203,  342 => 202,  338 => 201,  334 => 200,  330 => 199,  323 => 195,  204 => 79,  174 => 52,  160 => 40,  147 => 39,  125 => 27,  119 => 24,  115 => 23,  111 => 22,  107 => 21,  103 => 20,  92 => 12,  88 => 11,  78 => 3,  65 => 2,  42 => 1,);
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

<a class=\"btn-getstarted\" href=\"{{ path('app_ajout_reclamation') }}\">Ajouter Réclamation</a>

    </div>
  </header>
   
   <!-- na7i el data-aos=\"fade-up\" data-aos-delay=\"200\" -->
    <!-- Hero Section -->
    <style>
    * {
  font-family: 'Roboto';
}
.bubbleWrapper {
\tpadding: 10px 10px;
\tdisplay: flex;
\tjustify-content: flex-end;
\tflex-direction: column;
\talign-self: flex-end;
  color: #fff;
}
.inlineContainer {
  display: inline-flex;
}
.inlineContainer.own {
  flex-direction: row-reverse;
}
.inlineIcon {
  width:20px;
  object-fit: contain;
}
.ownBubble {
\tmin-width: 60px;
\tmax-width: 700px;
\tpadding: 14px 18px;
  margin: 6px 8px;
\tbackground-color:rgb(32, 113, 205);
\tborder-radius: 16px 16px 0 16px;
\tborder: 1px solidrgb(63, 75, 86);
 
}
.otherBubble {
\tmin-width: 60px;
\tmax-width: 700px;
\tpadding: 14px 18px;
  margin: 6px 8px;
\tbackground-color: #6C8EA4;
\tborder-radius: 16px 16px 16px 0;
\tborder: 1px solid #54788e;
  
}
.own {
\talign-self: flex-end;
}
.other {
\talign-self: flex-start;
}
span.own,
span.other{
  font-size: 14px;
  color: grey;
}


:root {
    --default-font: \"Roboto\", system-ui, -apple-system, \"Segoe UI\", Roboto, \"Helvetica Neue\", Arial, \"Noto Sans\", \"Liberation Sans\", sans-serif, \"Apple Color Emoji\", \"Segoe UI Emoji\", \"Segoe UI Symbol\", \"Noto Color Emoji\";
}

/* Appliquez la police à tout le texte dans la conversation */
.chat-container,
.message-wrapper,
.bubble,
.own-bubble,
.message-form-container,
textarea.form-control {
    font-family: var(--default-font);
}

/* Vous pouvez aussi appliquer la police spécifiquement aux messages */
.own-bubble,
.other-bubble {
    font-family: var(--default-font);
}
    </style>
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
                Chater <br>
                Avec Notre Assistant AI pour Reclamations <br>
                <span class=\"accent-text\">Plus Rapide que jamais!</span>
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
             <img src=\"{{asset('asset/img/Chatbot.jpg')}}\" alt=\"Hero Image\" class=\"img-fluid\">

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

</section>



    <section id=\"hero\" class=\"hero section\">

      <div class=\"container\" >

        <div class=\"row align-items-center\">
          <div class=\"col-lg-12\">
          
  <h1>Chatbot Conversation</h1>
    
   

    <div class=\"chat\">
        {% if chatbotResponse %}
            <div class=\"bubbleWrapper\">
                <div class=\"inlineContainer own\">
                    <img class=\"inlineIcon\" src=\"https://www.pinclipart.com/picdir/middle/205-2059398_blinkk-en-mac-app-store-ninja-icon-transparent.png\">
                    <div class=\"ownBubble own\">
                        {{ chatbotResponse }}
                    </div>
                </div>
                <span class=\"own\">Now</span>
            </div>
        {% endif %}
    </div>

     <form method=\"POST\" action=\"{{ path('app_chatbot_rec2') }}\">
        <div class=\"form-group\">
            <label for=\"userMessage\">Your Message:</label>
            <textarea id=\"userMessage\" name=\"userMessage\" rows=\"4\" class=\"form-control\" required></textarea>
        </div>
        <button type=\"submit\" class=\"btn btn-primary\">Send</button>
    </form>

</div>
</div>
</div>
    </section>


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
", "reclamation/ChatbotAi.html.twig", "D:\\artistic-main\\artistic-main\\templates\\reclamation\\ChatbotAi.html.twig");
    }
}
