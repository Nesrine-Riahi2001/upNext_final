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

/* event/edit.html.twig */
class __TwigTemplate_6cbc3aebb5bf5a47f19dbe8ca49e136e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/edit.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        yield "Modifier un événement";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "<div class=\"container\">
    <h1 class=\"text-center mb-4\">Modifier l'événement</h1>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "title", [], "any", false, false, false, 14), 'label', ["label" => "Titre de l'événement"]);
        yield "
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 16
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "vars", [], "any", false, false, false, 16), "errors", [], "any", false, false, false, 16)) > 0)) {
            // line 17
            yield "                    <div class=\"text-danger\">
                        ";
            // line 18
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "title", [], "any", false, false, false, 18), 'errors');
            yield "
                    </div>
                ";
        }
        // line 21
        yield "            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "ticketPrice", [], "any", false, false, false, 25), 'label', ["label" => "Prix du billet"]);
        yield "
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "ticketPrice", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 27
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "ticketPrice", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "errors", [], "any", false, false, false, 27)) > 0)) {
            // line 28
            yield "                    <div class=\"text-danger\">
                        ";
            // line 29
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "ticketPrice", [], "any", false, false, false, 29), 'errors');
            yield "
                    </div>
                ";
        }
        // line 32
        yield "            </div>
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "descrip", [], "any", false, false, false, 37), 'label', ["label" => "Description"]);
        yield "
        ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "descrip", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control", "rows" => "4"]]);
        yield "
        ";
        // line 39
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "descrip", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39)) > 0)) {
            // line 40
            yield "            <div class=\"text-danger\">
                ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "descrip", [], "any", false, false, false, 41), 'errors');
            yield "
            </div>
        ";
        }
        // line 44
        yield "    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "startdate", [], "any", false, false, false, 49), 'label', ["label" => "Date de début"]);
        yield "
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "startdate", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"]]);
        yield "
                ";
        // line 51
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "startdate", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "errors", [], "any", false, false, false, 51)) > 0)) {
            // line 52
            yield "                    <div class=\"text-danger\">
                        ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "startdate", [], "any", false, false, false, 53), 'errors');
            yield "
                    </div>
                ";
        }
        // line 56
        yield "            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "enddate", [], "any", false, false, false, 60), 'label', ["label" => "Date de fin"]);
        yield "
                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "enddate", [], "any", false, false, false, 61), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"]]);
        yield "
                ";
        // line 62
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "enddate", [], "any", false, false, false, 62), "vars", [], "any", false, false, false, 62), "errors", [], "any", false, false, false, 62)) > 0)) {
            // line 63
            yield "                    <div class=\"text-danger\">
                        ";
            // line 64
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "enddate", [], "any", false, false, false, 64), 'errors');
            yield "
                    </div>
                ";
        }
        // line 67
        yield "            </div>
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "location", [], "any", false, false, false, 72), 'label', ["label" => "Lieu"]);
        yield "
        ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "location", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
         ";
        // line 74
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "location", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74)) > 0)) {
            // line 75
            yield "            <div class=\"text-danger\">
                ";
            // line 76
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "location", [], "any", false, false, false, 76), 'errors');
            yield "
            </div>
        ";
        }
        // line 79
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "image", [], "any", false, false, false, 82), 'label', ["label" => "Image de l'événement"]);
        yield "
        ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "image", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control-file"]]);
        yield "
        ";
        // line 84
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "image", [], "any", false, false, false, 84), "vars", [], "any", false, false, false, 84), "errors", [], "any", false, false, false, 84)) > 0)) {
            // line 85
            yield "            <div class=\"text-danger\">
                ";
            // line 86
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "image", [], "any", false, false, false, 86), 'errors');
            yield "
            </div>
        ";
        }
        // line 89
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "ticketCount", [], "any", false, false, false, 92), 'label', ["label" => "Nombre de billets"]);
        yield "
        ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "ticketCount", [], "any", false, false, false, 93), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 94
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "ticketCount", [], "any", false, false, false, 94), "vars", [], "any", false, false, false, 94), "errors", [], "any", false, false, false, 94)) > 0)) {
            // line 95
            yield "            <div class=\"text-danger\">
                ";
            // line 96
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "ticketCount", [], "any", false, false, false, 96), 'errors');
            yield "
            </div>
        ";
        }
        // line 99
        yield "    </div>

    <div class=\"form-group text-center  mt-4\">
        <button type=\"submit\" class=\"btn btn-success btn-lg\">Enregistrer les modifications</button>
    </div>

    ";
        // line 105
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_end');
        yield "

    <div class=\"text-center mt-4\">
        <a href=\"";
        // line 108
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"btn btn-outline-primary\" 
           style=\"display: inline-block; background: rgba(223, 36, 15, 0.94); color: white; font-size: 16px; padding: 12px 25px; border-radius: 50px; text-decoration: none; transition: background 0.3s ease-in-out, box-shadow 0.3s ease-in-out; box-shadow: 0px 4px 6px rgba(255, 0, 0, 0.68);\" 
           onmouseover=\"this.style.background='rgb(179, 0, 0)'; this.style.boxShadow='0px 6px 8px rgba(179, 0, 0, 0.4)';\" 
           onmouseout=\"this.style.background='rgba(223, 36, 15, 0.94)'; this.style.boxShadow='0px 4px 6px rgba(255, 0, 0, 0.68)';\">
           Retour à la liste des événements
        </a>
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
        return "event/edit.html.twig";
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
        return array (  345 => 108,  339 => 105,  331 => 99,  325 => 96,  322 => 95,  320 => 94,  316 => 93,  312 => 92,  307 => 89,  301 => 86,  298 => 85,  296 => 84,  292 => 83,  288 => 82,  283 => 79,  277 => 76,  274 => 75,  272 => 74,  268 => 73,  264 => 72,  257 => 67,  251 => 64,  248 => 63,  246 => 62,  242 => 61,  238 => 60,  232 => 56,  226 => 53,  223 => 52,  221 => 51,  217 => 50,  213 => 49,  206 => 44,  200 => 41,  197 => 40,  195 => 39,  191 => 38,  187 => 37,  180 => 32,  174 => 29,  171 => 28,  169 => 27,  165 => 26,  161 => 25,  155 => 21,  149 => 18,  146 => 17,  144 => 16,  140 => 15,  136 => 14,  128 => 9,  123 => 6,  110 => 5,  88 => 4,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier un événement{% endblock %}
{% block header %}{% endblock %}
{% block body %}
<div class=\"container\">
    <h1 class=\"text-center mb-4\">Modifier l'événement</h1>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.title, 'Titre de l\\'événement') }}
                {{ form_widget(form.title, {'attr': {'class': 'form-control'}}) }}
                {% if form.title.vars.errors|length > 0 %}
                    <div class=\"text-danger\">
                        {{ form_errors(form.title) }}
                    </div>
                {% endif %}
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.ticketPrice, 'Prix du billet') }}
                {{ form_widget(form.ticketPrice, {'attr': {'class': 'form-control'}}) }}
                {% if form.ticketPrice.vars.errors|length > 0 %}
                    <div class=\"text-danger\">
                        {{ form_errors(form.ticketPrice) }}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.descrip, 'Description') }}
        {{ form_widget(form.descrip, {'attr': {'class': 'form-control', 'rows': '4'}}) }}
        {% if form.descrip.vars.errors|length > 0 %}
            <div class=\"text-danger\">
                {{ form_errors(form.descrip) }}
            </div>
        {% endif %}
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.startdate, 'Date de début') }}
                {{ form_widget(form.startdate, {'attr': {'class': 'form-control', 'placeholder': 'YYYY-MM-DD HH:mm'}}) }}
                {% if form.startdate.vars.errors|length > 0 %}
                    <div class=\"text-danger\">
                        {{ form_errors(form.startdate) }}
                    </div>
                {% endif %}
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                {{ form_label(form.enddate, 'Date de fin') }}
                {{ form_widget(form.enddate, {'attr': {'class': 'form-control', 'placeholder': 'YYYY-MM-DD HH:mm'}}) }}
                {% if form.enddate.vars.errors|length > 0 %}
                    <div class=\"text-danger\">
                        {{ form_errors(form.enddate) }}
                    </div>
                {% endif %}
            </div>
        </div>
    </div>

    <div class=\"form-group\">
        {{ form_label(form.location, 'Lieu') }}
        {{ form_widget(form.location, {'attr': {'class': 'form-control'}}) }}
         {% if form.location.vars.errors|length > 0 %}
            <div class=\"text-danger\">
                {{ form_errors(form.location) }}
            </div>
        {% endif %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.image, 'Image de l\\'événement') }}
        {{ form_widget(form.image, {'attr': {'class': 'form-control-file'}}) }}
        {% if form.image.vars.errors|length > 0 %}
            <div class=\"text-danger\">
                {{ form_errors(form.image) }}
            </div>
        {% endif %}
    </div>

    <div class=\"form-group\">
        {{ form_label(form.ticketCount, 'Nombre de billets') }}
        {{ form_widget(form.ticketCount, {'attr': {'class': 'form-control'}}) }}
        {% if form.ticketCount.vars.errors|length > 0 %}
            <div class=\"text-danger\">
                {{ form_errors(form.ticketCount) }}
            </div>
        {% endif %}
    </div>

    <div class=\"form-group text-center  mt-4\">
        <button type=\"submit\" class=\"btn btn-success btn-lg\">Enregistrer les modifications</button>
    </div>

    {{ form_end(form) }}

    <div class=\"text-center mt-4\">
        <a href=\"{{ path('home') }}\" class=\"btn btn-outline-primary\" 
           style=\"display: inline-block; background: rgba(223, 36, 15, 0.94); color: white; font-size: 16px; padding: 12px 25px; border-radius: 50px; text-decoration: none; transition: background 0.3s ease-in-out, box-shadow 0.3s ease-in-out; box-shadow: 0px 4px 6px rgba(255, 0, 0, 0.68);\" 
           onmouseover=\"this.style.background='rgb(179, 0, 0)'; this.style.boxShadow='0px 6px 8px rgba(179, 0, 0, 0.4)';\" 
           onmouseout=\"this.style.background='rgba(223, 36, 15, 0.94)'; this.style.boxShadow='0px 4px 6px rgba(255, 0, 0, 0.68)';\">
           Retour à la liste des événements
        </a>
    </div>
</div>
{% endblock %}
", "event/edit.html.twig", "D:\\artistic-main\\artistic-main\\templates\\event\\edit.html.twig");
    }
}
