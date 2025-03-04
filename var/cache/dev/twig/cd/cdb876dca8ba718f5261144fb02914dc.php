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

/* home/profile.html.twig */
class __TwigTemplate_d0a0677eb146adc62ebc0298bedd963e extends Template
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
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/profile.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "<!-- Back Button in Header -->
<nav class=\"navbar bg-light shadow-sm\">
    <div class=\"container\">
        <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"btn btn-outline-secondary\">
            <i class=\"bi bi-arrow-left\"></i> Back
        </a>
    </div>
</nav>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
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

        // line 16
        yield "<div class=\"container mt-3\" style=\"item-top-center\">
<h1>
    Hello ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "firstname", [], "any", false, false, false, 18), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "user", [], "any", false, false, false, 18), "lastname", [], "any", false, false, false, 18), "html", null, true);
        yield "
    ";
        // line 19
        if ((CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "roles", [], "any", false, false, false, 19)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "isVerified", [], "any", false, false, false, 19))) {
            // line 20
            yield "        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/verified.png"), "html", null, true);
            yield "\" alt=\"Verified\" 
             style=\"width: 30px; height: 30px; margin-left: 5px;\">
    ";
        }
        // line 23
        yield "</h1>

    
    <div class=\"card p-4 shadow-lg text-center\" style=\"max-width: 1500px; margin: 0 auto;\">

        <!-- Profile Image (Centered) -->
        <ul class=\"list-unstyled\" style=\"line-height: 2;\">
            <li>
                <img src=\"";
        // line 31
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "image", [], "any", false, false, false, 31)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "image", [], "any", false, false, false, 31)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.png"), "html", null, true)));
        yield "\" 
     alt=\"Profile Image\" 
     class=\"rounded-circle mb-3\" 
     style=\"width: 300px; height: 300px; object-fit: cover; display: block; margin-left: auto; margin-right: auto; border: 3px solid rgb(198, 18, 51); border-radius: 50%;\">

           
           </li>
          
        <!-- Name and Speciality -->

        <li><h3 style=\"margin-top: 10px;\"> ";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "firstname", [], "any", false, false, false, 41), "html", null, true);
        yield "  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "lastname", [], "any", false, false, false, 41), "html", null, true);
        yield "</h3></a></li>
        
        </ul>
        ";
        // line 44
        if (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "roles", [], "any", false, false, false, 44))) {
            // line 45
            yield "    <p class=\"text-muted\" style=\"margin-bottom: 20px;\">
        @ARTIST
    </p>
";
        } elseif (CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 48
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "roles", [], "any", false, false, false, 48))) {
            // line 49
            yield "    <p class=\"text-muted\" style=\"margin-bottom: 20px;\">
        @CLIENT
    </p>
";
        }
        // line 53
        yield "

        <!-- Profile Details with Added Margin -->
        <ul class=\"list-unstyled\" style=\"line-height: 2;\">
            <li><strong>Email:</strong> ";
        // line 57
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 57, $this->source); })()), "user", [], "any", false, false, false, 57), "email", [], "any", false, false, false, 57), "html", null, true);
        yield " </li>
            <li><strong>Speciality:</strong> ";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "speciality", [], "any", false, false, false, 58), "html", null, true);
        yield " </li>
            <li><strong>Description:</strong> ";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "description", [], "any", false, false, false, 59), "html", null, true);
        yield "</i></li>
        </ul>

        <!-- Edit and Logout Buttons -->
    <a href=\"";
        // line 63
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_edit");
        yield "\" class=\"btn btn-primary mt-3\">Edit Profile</a>
    <a href=\"";
        // line 64
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-primary mt-3 \" style=\"background-color:rgb(77, 77, 77); border: none\">Logout</a>
    </div>
</div>
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
        return "home/profile.html.twig";
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
        return array (  202 => 64,  198 => 63,  191 => 59,  187 => 58,  183 => 57,  177 => 53,  171 => 49,  169 => 48,  164 => 45,  162 => 44,  154 => 41,  141 => 31,  131 => 23,  124 => 20,  122 => 19,  116 => 18,  112 => 16,  99 => 15,  82 => 7,  77 => 4,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block header %}
<!-- Back Button in Header -->
<nav class=\"navbar bg-light shadow-sm\">
    <div class=\"container\">
        <a href=\"{{ path('home') }}\" class=\"btn btn-outline-secondary\">
            <i class=\"bi bi-arrow-left\"></i> Back
        </a>
    </div>
</nav>
{% endblock %}


{% block body %}
<div class=\"container mt-3\" style=\"item-top-center\">
<h1>
    Hello {{ app.user.firstname }} {{ app.user.lastname }}
    {% if 'ROLE_ARTIST' in app.user.roles and app.user.isVerified %}
        <img src=\"{{ asset('assets/img/verified.png') }}\" alt=\"Verified\" 
             style=\"width: 30px; height: 30px; margin-left: 5px;\">
    {% endif %}
</h1>

    
    <div class=\"card p-4 shadow-lg text-center\" style=\"max-width: 1500px; margin: 0 auto;\">

        <!-- Profile Image (Centered) -->
        <ul class=\"list-unstyled\" style=\"line-height: 2;\">
            <li>
                <img src=\"{{ app.user.image ? '/uploads/' ~ app.user.image :  asset('img/user.png')  }}\" 
     alt=\"Profile Image\" 
     class=\"rounded-circle mb-3\" 
     style=\"width: 300px; height: 300px; object-fit: cover; display: block; margin-left: auto; margin-right: auto; border: 3px solid rgb(198, 18, 51); border-radius: 50%;\">

           
           </li>
          
        <!-- Name and Speciality -->

        <li><h3 style=\"margin-top: 10px;\"> {{ app.user.firstname }}  {{ app.user.lastname }}</h3></a></li>
        
        </ul>
        {% if 'ROLE_ARTIST' in app.user.roles %}
    <p class=\"text-muted\" style=\"margin-bottom: 20px;\">
        @ARTIST
    </p>
{% elseif 'ROLE_CLIENT' in app.user.roles %}
    <p class=\"text-muted\" style=\"margin-bottom: 20px;\">
        @CLIENT
    </p>
{% endif %}


        <!-- Profile Details with Added Margin -->
        <ul class=\"list-unstyled\" style=\"line-height: 2;\">
            <li><strong>Email:</strong> {{ app.user.email }} </li>
            <li><strong>Speciality:</strong> {{ app.user.speciality }} </li>
            <li><strong>Description:</strong> {{ app.user.description }}</i></li>
        </ul>

        <!-- Edit and Logout Buttons -->
    <a href=\"{{ path('profile_edit') }}\" class=\"btn btn-primary mt-3\">Edit Profile</a>
    <a href=\"{{ path('app_logout') }}\" class=\"btn btn-primary mt-3 \" style=\"background-color:rgb(77, 77, 77); border: none\">Logout</a>
    </div>
</div>
{% endblock %}", "home/profile.html.twig", "D:\\artistic-main\\artistic-main\\templates\\home\\profile.html.twig");
    }
}
