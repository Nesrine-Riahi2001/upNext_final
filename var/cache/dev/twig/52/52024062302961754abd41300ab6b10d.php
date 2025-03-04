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

/* home/edit_profile.html.twig */
class __TwigTemplate_7945b77eaeda92d9b836157cabcee183 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/edit_profile.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/edit_profile.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/edit_profile.html.twig", 1);
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
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 15
        yield "<div class=\"container mt-3\" style=\"center\">
<div class=\"d-flex flex-column align-items-center gap-3 mt-3 \"style=\" padding: 45px 25px;\">

        <div class=\"card p-4 shadow-lg\" style=\"width: 550px;\">
            <h1 class=\"h3 mb-3 font-weight-normal d-flex justify-content-center\">
                Edit Profile
            </h1>

            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 24
            yield "                <div class=\"alert alert-danger\">
                    ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "flashes", ["success"], "method", false, false, false, 29));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 30
            yield "                <div class=\"alert alert-success\">
                    ";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        yield "
            <div class=\"text-center\">
                <img src=\"/uploads/";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "image", [], "any", false, false, false, 36), "html", null, true);
        yield "\" 
                     alt=\"Profile Image\" 
                     class=\"rounded-circle mb-3\" 
                     style=\"width: 120px; height: 120px; object-fit: cover; border: 3px solid #007bff;\">
            </div>

            ";
        // line 42
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data", "novalidate" => "novalidate"]]);
        yield "

            <div class=\"mb-3\">
                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "firstname", [], "any", false, false, false, 45), 'label');
        yield "
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "firstname", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "firstname", [], "any", false, false, false, 47), 'errors');
        yield "
            </div>

            <div class=\"mb-3\">
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "lastname", [], "any", false, false, false, 51), 'label');
        yield "
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "lastname", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "lastname", [], "any", false, false, false, 53), 'errors');
        yield "
            </div>

            <div class=\"mb-3\">
                ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "speciality", [], "any", false, false, false, 57), 'label');
        yield "
                ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "speciality", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "speciality", [], "any", false, false, false, 59), 'errors');
        yield "
            </div>

            <div class=\"mb-3\">
                ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "description", [], "any", false, false, false, 63), 'label');
        yield "
                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "description", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "description", [], "any", false, false, false, 65), 'errors');
        yield "
            </div>

            <div class=\"mb-3\">
                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "image", [], "any", false, false, false, 69), 'label');
        yield "
                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "image", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "image", [], "any", false, false, false, 71), 'errors');
        yield "
            </div>

        

        <div class=\"d-flex flex-column align-items-center gap-3 mt-3\">
           <button class=\"btn btn-lg btn-danger w-100\" type=\"submit\">
               Save
            </button>
      </div>
        
        <div class=\"d-flex flex-column align-items-center gap-3 mt-3 w-100\">
            <a href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\" class=\"btn btn-secondary mt-3 w-100\">Cancel</a>
        </div>

            ";
        // line 86
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), 'form_end');
        yield "
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
        return "home/edit_profile.html.twig";
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
        return array (  265 => 86,  259 => 83,  244 => 71,  240 => 70,  236 => 69,  229 => 65,  225 => 64,  221 => 63,  214 => 59,  210 => 58,  206 => 57,  199 => 53,  195 => 52,  191 => 51,  184 => 47,  180 => 46,  176 => 45,  170 => 42,  161 => 36,  157 => 34,  148 => 31,  145 => 30,  141 => 29,  138 => 28,  129 => 25,  126 => 24,  122 => 23,  112 => 15,  99 => 14,  82 => 7,  77 => 4,  64 => 3,  41 => 1,);
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
<div class=\"container mt-3\" style=\"center\">
<div class=\"d-flex flex-column align-items-center gap-3 mt-3 \"style=\" padding: 45px 25px;\">

        <div class=\"card p-4 shadow-lg\" style=\"width: 550px;\">
            <h1 class=\"h3 mb-3 font-weight-normal d-flex justify-content-center\">
                Edit Profile
            </h1>

            {% for message in app.flashes('danger') %}
                <div class=\"alert alert-danger\">
                    {{ message }}
                </div>
            {% endfor %}

            {% for message in app.flashes('success') %}
                <div class=\"alert alert-success\">
                    {{ message }}
                </div>
            {% endfor %}

            <div class=\"text-center\">
                <img src=\"/uploads/{{ app.user.image }}\" 
                     alt=\"Profile Image\" 
                     class=\"rounded-circle mb-3\" 
                     style=\"width: 120px; height: 120px; object-fit: cover; border: 3px solid #007bff;\">
            </div>

            {{ form_start(form, {'attr': {'enctype': 'multipart/form-data', 'novalidate': 'novalidate'}}) }}

            <div class=\"mb-3\">
                {{ form_label(form.firstname) }}
                {{ form_widget(form.firstname, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.firstname) }}
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.lastname) }}
                {{ form_widget(form.lastname, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.lastname) }}
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.speciality) }}
                {{ form_widget(form.speciality, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.speciality) }}
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.description) }}
                {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.description) }}
            </div>

            <div class=\"mb-3\">
                {{ form_label(form.image) }}
                {{ form_widget(form.image, {'attr': {'class': 'form-control'}}) }}
                {{ form_errors(form.image) }}
            </div>

        

        <div class=\"d-flex flex-column align-items-center gap-3 mt-3\">
           <button class=\"btn btn-lg btn-danger w-100\" type=\"submit\">
               Save
            </button>
      </div>
        
        <div class=\"d-flex flex-column align-items-center gap-3 mt-3 w-100\">
            <a href=\"{{ path('profile') }}\" class=\"btn btn-secondary mt-3 w-100\">Cancel</a>
        </div>

            {{ form_end(form) }}
        </div>
    </div>
</div>

{% endblock %}", "home/edit_profile.html.twig", "D:\\artistic-main\\artistic-main\\templates\\home\\edit_profile.html.twig");
    }
}
