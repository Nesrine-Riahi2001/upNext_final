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

/* includes/header.html.twig */
class __TwigTemplate_e47200402d5ae961f3f7ba8714c0227a extends Template
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
            'boutton' => [$this, 'block_boutton'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/header.html.twig"));

        // line 1
        yield "<!-- preloader
  ================================================== -->
  <div id=\"preloader\">
       <div id=\"loader\"></div>
  </div>

<!-- header
================================================== -->

<header id=\"header\" class=\"header d-flex align-items-center fixed-top\">


<div class=\"header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">

<a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view");
        yield "\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
<!-- Uncomment the line below if you also wish to use an image logo -->
<img src=\"assets/img/up-next.png\" alt=\"\">

</a>




  <nav id=\"navmenu\" class=\"navmenu\">
    <ul>
      <li><a href=\"#hello\" title=\"\">Accueil</a></li>
    
      <li><a href=\"#Utilisateur\">Utilisateur normal</a></li>
      <li><a href=\"#Artist\">Artist</a></li>


      ";
        // line 33
        yield "        
      ";
        // line 51
        yield "
      <li><a href=\"#contact\">Contact us</a></li>
    </ul>
    <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
  </nav>

";
        // line 74
        yield from $this->unwrap()->yieldBlock('boutton', $context, $blocks);
        // line 83
        yield "</div>
</header>

";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 74
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

        // line 75
        yield "<a 
class=\"btn-getstarted\" 
href=\"/";
        // line 77
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77)) ? ("logout") : ("login"));
        yield "\"
  @click=\"isOpen = false\"> ";
        // line 78
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78)) ? ("logout") : ("login"));
        yield " </a> 

  <a class=\"btn-getstarted\" href=\"/";
        // line 80
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80)) ? ("home") : ("register"));
        yield "\"
   @click=\"isOpen = false\"> ";
        // line 81
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 81, $this->source); })()), "user", [], "any", false, false, false, 81)) ? ("home") : ("register"));
        yield " </a>
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
        return "includes/header.html.twig";
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
        return array (  142 => 81,  138 => 80,  133 => 78,  129 => 77,  125 => 75,  112 => 74,  98 => 83,  96 => 74,  88 => 51,  85 => 33,  65 => 15,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- preloader
  ================================================== -->
  <div id=\"preloader\">
       <div id=\"loader\"></div>
  </div>

<!-- header
================================================== -->

<header id=\"header\" class=\"header d-flex align-items-center fixed-top\">


<div class=\"header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">

<a href=\"{{ path('view') }}\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
<!-- Uncomment the line below if you also wish to use an image logo -->
<img src=\"assets/img/up-next.png\" alt=\"\">

</a>




  <nav id=\"navmenu\" class=\"navmenu\">
    <ul>
      <li><a href=\"#hello\" title=\"\">Accueil</a></li>
    
      <li><a href=\"#Utilisateur\">Utilisateur normal</a></li>
      <li><a href=\"#Artist\">Artist</a></li>


      {# <li><a href=\"#pricing\">Pricing</a></li> #}
        
      {#<li class=\"dropdown\"><a href=\"#\"><span>Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
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
      </li> #}

      <li><a href=\"#contact\">Contact us</a></li>
    </ul>
    <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
  </nav>

{#
<!--  search wrap -->
  <div class=\"s-header__search\">

  <form role=\"search\" method=\"get\" class=\"s-header__search-form\" action=\"#\">
      <label>
          <span class=\"hide-content\">Search for:</span>
          <input type=\"search\" class=\"s-header__search-field\" placeholder=\"Type Your Keywords\" value=\"\" name=\"s\" title=\"Search for:\" autocomplete=\"off\">
      </label>
      <input type=\"submit\" class=\"s-header__search-submit\" value=\"Search\">
  </form>

  <a href=\"#0\" title=\"Close Search\" class=\"s-header__overlay-close\">Close</a>

</div> <!-- end search wrap -->

#}
{% block boutton %}
<a 
class=\"btn-getstarted\" 
href=\"/{{ app.user ? 'logout':'login' }}\"
  @click=\"isOpen = false\"> {{ app.user ? 'logout':'login' }} </a> 

  <a class=\"btn-getstarted\" href=\"/{{ app.user ? 'home':'register' }}\"
   @click=\"isOpen = false\"> {{ app.user ? 'home':'register' }} </a>
{% endblock %}
</div>
</header>

", "includes/header.html.twig", "D:\\artistic-main\\artistic-main\\templates\\includes\\header.html.twig");
    }
}
