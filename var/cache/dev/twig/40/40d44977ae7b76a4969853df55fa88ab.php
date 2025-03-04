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

/* home/profile_view.html.twig */
class __TwigTemplate_aec4b0070cea5e81452e7b5b4190f2bd extends Template
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
            'title' => [$this, 'block_title'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/profile_view.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/profile_view.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/profile_view.html.twig", 1);
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

        yield "User Profile - ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "firstname", [], "any", false, false, false, 14), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 14, $this->source); })()), "lastname", [], "any", false, false, false, 14), "html", null, true);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
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

        // line 17
        yield "<div class=\"container mt-4\">
    <div class=\"card shadow-lg p-4\">

 

        <!-- Profile Image (Centered) -->
        <ul class=\"list-unstyled\" style=\"line-height: 2;\">
            <li>
                <img src=\"";
        // line 25
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "image", [], "any", false, false, false, 25)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/uploads/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "image", [], "any", false, false, false, 25)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.png"), "html", null, true)));
        yield "\" 
     alt=\"Profile Image\" 
     class=\"rounded-circle mb-3\" 
     style=\"width: 300px; height: 300px; object-fit: cover; display: block; margin-left: auto; margin-right: auto; border: 3px solid rgb(198, 18, 51); border-radius: 50%;\">

           
           </li>
        <div class=\"card-body text-center\">
        <h2>
            ";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "firstname", [], "any", false, false, false, 34), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "lastname", [], "any", false, false, false, 34), "html", null, true);
        yield "
            ";
        // line 35
        if ((CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "roles", [], "any", false, false, false, 35)) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "isVerified", [], "any", false, false, false, 35))) {
            // line 36
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/verified.png"), "html", null, true);
            yield "\" alt=\"Verified\" 
                     style=\"width: 30px; height: 30px; margin-left: 5px;\">
            ";
        }
        // line 39
        yield "        </h2>
            <p class=\"text-muted\">";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "email", [], "any", false, false, false, 40), "html", null, true);
        yield "</p>
            
            <hr>

            <h5>Role:</h5>
            <p class=\"badge ";
        // line 45
        if (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "roles", [], "any", false, false, false, 45))) {
            yield "bg-primary";
        } else {
            yield "bg-secondary";
        }
        yield "\">
                ";
        // line 46
        if (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 46, $this->source); })()), "roles", [], "any", false, false, false, 46))) {
            // line 47
            yield "                    🎨 Artist
                ";
        } else {
            // line 49
            yield "                    🛍️ Client
                ";
        }
        // line 51
        yield "            </p>

            <h5>Status:</h5>
            <p class=\"badge ";
        // line 54
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 54, $this->source); })()), "isActive", [], "any", false, false, false, 54)) {
            yield "bg-success";
        } else {
            yield "bg-danger";
        }
        yield "\">
                ";
        // line 55
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "isActive", [], "any", false, false, false, 55)) ? ("✅ Active") : ("⛔ Inactive"));
        yield "
            </p>

            ";
        // line 58
        if (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 58, $this->source); })()), "roles", [], "any", false, false, false, 58))) {
            // line 59
            yield "                <h5>Verification:</h5>
                <p class=\"badge ";
            // line 60
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "isVerified", [], "any", false, false, false, 60)) {
                yield "bg-success";
            } else {
                yield "bg-warning";
            }
            yield "\">
                    ";
            // line 61
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "isVerified", [], "any", false, false, false, 61)) ? ("✔️ Verified") : ("❌ Not Verified"));
            yield "
                </p>
            ";
        }
        // line 64
        yield "
   

            <hr>

            <a href=\"";
        // line 69
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("global_search");
        yield "\" class=\"btn btn-outline-dark mt-3\"> Back to home</a>
        </div>
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
        return "home/profile_view.html.twig";
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
        return array (  250 => 69,  243 => 64,  237 => 61,  229 => 60,  226 => 59,  224 => 58,  218 => 55,  210 => 54,  205 => 51,  201 => 49,  197 => 47,  195 => 46,  187 => 45,  179 => 40,  176 => 39,  169 => 36,  167 => 35,  161 => 34,  149 => 25,  139 => 17,  126 => 16,  100 => 14,  83 => 7,  78 => 4,  65 => 3,  42 => 1,);
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

{% block title %}User Profile - {{ user.firstname }} {{ user.lastname }}{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"card shadow-lg p-4\">

 

        <!-- Profile Image (Centered) -->
        <ul class=\"list-unstyled\" style=\"line-height: 2;\">
            <li>
                <img src=\"{{ user.image ? '/uploads/' ~ user.image :  asset('img/user.png')  }}\" 
     alt=\"Profile Image\" 
     class=\"rounded-circle mb-3\" 
     style=\"width: 300px; height: 300px; object-fit: cover; display: block; margin-left: auto; margin-right: auto; border: 3px solid rgb(198, 18, 51); border-radius: 50%;\">

           
           </li>
        <div class=\"card-body text-center\">
        <h2>
            {{ user.firstname }} {{ user.lastname }}
            {% if 'ROLE_ARTIST' in user.roles and user.isVerified %}
                <img src=\"{{ asset('assets/img/verified.png') }}\" alt=\"Verified\" 
                     style=\"width: 30px; height: 30px; margin-left: 5px;\">
            {% endif %}
        </h2>
            <p class=\"text-muted\">{{ user.email }}</p>
            
            <hr>

            <h5>Role:</h5>
            <p class=\"badge {% if 'ROLE_ARTIST' in user.roles %}bg-primary{% else %}bg-secondary{% endif %}\">
                {% if 'ROLE_ARTIST' in user.roles %}
                    🎨 Artist
                {% else %}
                    🛍️ Client
                {% endif %}
            </p>

            <h5>Status:</h5>
            <p class=\"badge {% if user.isActive %}bg-success{% else %}bg-danger{% endif %}\">
                {{ user.isActive ? '✅ Active' : '⛔ Inactive' }}
            </p>

            {% if 'ROLE_ARTIST' in user.roles %}
                <h5>Verification:</h5>
                <p class=\"badge {% if user.isVerified %}bg-success{% else %}bg-warning{% endif %}\">
                    {{ user.isVerified ? '✔️ Verified' : '❌ Not Verified' }}
                </p>
            {% endif %}

   

            <hr>

            <a href=\"{{ path('global_search') }}\" class=\"btn btn-outline-dark mt-3\"> Back to home</a>
        </div>
    </div>
</div>
{% endblock %}
", "home/profile_view.html.twig", "D:\\artistic-main\\artistic-main\\templates\\home\\profile_view.html.twig");
    }
}
