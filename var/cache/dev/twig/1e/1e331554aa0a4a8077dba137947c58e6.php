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

/* includes/admin/sideBare.html.twig */
class __TwigTemplate_4b8f5852a39f15bd6212d17461a42ed8 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin/sideBare.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/admin/sideBare.html.twig"));

        // line 1
        yield "<!-- Sidebar -->
<ul class=\"navbar-nav bg-gradient-primary sidebar sidebar-dark accordion\" id=\"accordionSidebar\">

    <!-- Sidebar - Brand -->
    <a class=\"sidebar-brand d-flex align-items-center justify-content-center\" href=\"";
        // line 5
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
        yield "\" >
    
    <img src=\"assets/img/up-next.png\" alt=\"no photo\" height=\"50\" >
    </a>


    <!-- Divider -->
    <hr class=\"sidebar-divider my-0\">



    <!-- Nav Item - Dashboard -->
    <li class=\"nav-item active\">
        <a class=\"nav-link\" href=\"";
        // line 18
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
        // line 34
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_compte");
        yield "\">
       
        <span>suivie les comptes</span>
    </a>
</li>

    <!-- Nav Item - Suivi des Réclamations -->
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations_admin");
        yield "\">
         
            <span>Gestion des Réclamations</span>
        </a>
    </li>

    <!-- Nav Item - Gestion Événements -->
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_index");
        yield "\">
           
            <span>Gestion Événements</span>
        </a>
    </li>
<!-- Nav Item - Gestion reservation -->
    <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 57
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservations");
        yield "\">
           
            <span>Gestion Réservations</span>
        </a>
    </li>
      <!-- Nav Item - Gestion quiz -->
      <li class=\"nav-item\">
      <a class=\"nav-link\" href=\"";
        // line 64
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
        // line 79
        yield from $this->unwrap()->yieldBlock('boutton', $context, $blocks);
        // line 87
        yield "    

    <!-- Sidebar Toggler (Sidebar) -->
    

</ul>
<!-- End of Sidebar -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 79
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

        // line 80
        yield "    <a 
        class=\"d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm\"
        href=\"/";
        // line 82
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 82, $this->source); })()), "user", [], "any", false, false, false, 82)) ? ("logout") : ("login"));
        yield "\"
        @click=\"isOpen = false\">
        ";
        // line 84
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84)) ? ("logout") : ("login"));
        yield "
    </a> 
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
        return "includes/admin/sideBare.html.twig";
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
        return array (  192 => 84,  187 => 82,  183 => 80,  170 => 79,  152 => 87,  150 => 79,  132 => 64,  122 => 57,  112 => 50,  101 => 42,  90 => 34,  71 => 18,  55 => 5,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- Sidebar -->
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
", "includes/admin/sideBare.html.twig", "D:\\artistic-main\\artistic-main\\templates\\includes\\admin\\sideBare.html.twig");
    }
}
