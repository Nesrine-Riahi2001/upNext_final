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

/* event/new.html.twig */
class __TwigTemplate_642d7ca584c205e1d4a13629c2c381c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/new.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "event/new.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "event/new.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
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

        yield " ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
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

        yield "Ajouter un événement";
        
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
    <h1 class=\"text-center mb-4\">Ajouter un événement</h1>

    ";
        // line 9
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate"]]);
        yield "

    ";
        // line 12
        yield "    ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "vars", [], "any", false, false, false, 12), "errors", [], "any", false, false, false, 12)) > 0)) {
            // line 13
            yield "        <div class=\"alert alert-danger\">
            <strong>Il y a des erreurs dans le formulaire :</strong>
            <ul>
                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "vars", [], "any", false, false, false, 16), "errors", [], "any", false, false, false, 16));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 17
                yield "                    <li>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 17), "html", null, true);
                yield "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['error'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            yield "            </ul>
        </div>
    ";
        }
        // line 22
        yield "
    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "title", [], "any", false, false, false, 26), 'label', ["label" => "Titre de l'événement"]);
        yield "
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "title", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 28
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "title", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "errors", [], "any", false, false, false, 28)) > 0)) {
            // line 29
            yield "                    <div class=\"text-danger\">
                        ";
            // line 30
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "title", [], "any", false, false, false, 30), 'errors');
            yield "
                    </div>
                ";
        }
        // line 33
        yield "            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "ticketPrice", [], "any", false, false, false, 37), 'label', ["label" => "Prix du billet"]);
        yield "
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "ticketPrice", [], "any", false, false, false, 38), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
                ";
        // line 39
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "ticketPrice", [], "any", false, false, false, 39), "vars", [], "any", false, false, false, 39), "errors", [], "any", false, false, false, 39)) > 0)) {
            // line 40
            yield "                    <div class=\"text-danger\">
                        ";
            // line 41
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "ticketPrice", [], "any", false, false, false, 41), 'errors');
            yield "
                    </div>
                ";
        }
        // line 44
        yield "            </div>
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "descrip", [], "any", false, false, false, 49), 'label', ["label" => "Description"]);
        yield "
        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "descrip", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "rows" => "4"]]);
        yield "
        ";
        // line 51
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "descrip", [], "any", false, false, false, 51), "vars", [], "any", false, false, false, 51), "errors", [], "any", false, false, false, 51)) > 0)) {
            // line 52
            yield "            <div class=\"text-danger\">
                ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "descrip", [], "any", false, false, false, 53), 'errors');
            yield "
            </div>
        ";
        }
        // line 56
        yield "    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "startdate", [], "any", false, false, false, 61), 'label', ["label" => "Date de début"]);
        yield "
                ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), "startdate", [], "any", false, false, false, 62), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"]]);
        yield "
                ";
        // line 63
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "startdate", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "errors", [], "any", false, false, false, 63)) > 0)) {
            // line 64
            yield "                    <div class=\"text-danger\">
                        ";
            // line 65
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "startdate", [], "any", false, false, false, 65), 'errors');
            yield "
                    </div>
                ";
        }
        // line 68
        yield "            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"form-group\">
                ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "enddate", [], "any", false, false, false, 72), 'label', ["label" => "Date de fin"]);
        yield "
                ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "enddate", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control", "placeholder" => "YYYY-MM-DD HH:mm"]]);
        yield "
                ";
        // line 74
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "enddate", [], "any", false, false, false, 74), "vars", [], "any", false, false, false, 74), "errors", [], "any", false, false, false, 74)) > 0)) {
            // line 75
            yield "                    <div class=\"text-danger\">
                        ";
            // line 76
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "enddate", [], "any", false, false, false, 76), 'errors');
            yield "
                    </div>
                ";
        }
        // line 79
        yield "            </div>
        </div>
    </div>

    <div class=\"form-group\">
        ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "location", [], "any", false, false, false, 84), 'label', ["label" => "Lieu"]);
        yield "
        ";
        // line 85
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 85, $this->source); })()), "location", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 86
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "location", [], "any", false, false, false, 86), "vars", [], "any", false, false, false, 86), "errors", [], "any", false, false, false, 86)) > 0)) {
            // line 87
            yield "            <div class=\"text-danger\">
                ";
            // line 88
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "location", [], "any", false, false, false, 88), 'errors');
            yield "
            </div>
        ";
        }
        // line 91
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "image", [], "any", false, false, false, 94), 'label', ["label" => "Image de l'événement"]);
        yield "
        ";
        // line 95
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "image", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control-file"]]);
        yield "
        ";
        // line 96
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 96, $this->source); })()), "image", [], "any", false, false, false, 96), "vars", [], "any", false, false, false, 96), "errors", [], "any", false, false, false, 96)) > 0)) {
            // line 97
            yield "            <div class=\"text-danger\">
                ";
            // line 98
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "image", [], "any", false, false, false, 98), 'errors');
            yield "
            </div>
        ";
        }
        // line 101
        yield "    </div>

    <div class=\"form-group\">
        ";
        // line 104
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 104, $this->source); })()), "ticketCount", [], "any", false, false, false, 104), 'label', ["label" => "Nombre de billets"]);
        yield "
        ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "ticketCount", [], "any", false, false, false, 105), 'widget', ["attr" => ["class" => "form-control"]]);
        yield "
        ";
        // line 106
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), "ticketCount", [], "any", false, false, false, 106), "vars", [], "any", false, false, false, 106), "errors", [], "any", false, false, false, 106)) > 0)) {
            // line 107
            yield "            <div class=\"text-danger\">
                ";
            // line 108
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "ticketCount", [], "any", false, false, false, 108), 'errors');
            yield "
            </div>
        ";
        }
        // line 111
        yield "    </div>

    <div class=\"form-group text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-success btn-lg\">Créer Événement</button>
    </div>

    ";
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
        yield "

    <div class=\"text-center mt-4\">
        <a href=\"";
        // line 120
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"btn btn-outline-primary\" style=\"display: inline-block; background: rgba(223, 36, 15, 0.94); color: white; font-size: 16px; padding: 12px 25px; border-radius: 50px; text-decoration: none; transition: background 0.3s ease-in-out, box-shadow 0.3s ease-in-out; box-shadow: 0px 4px 6px rgba(255, 0, 0, 0.68);\" 
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
        return "event/new.html.twig";
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
        return array (  375 => 120,  369 => 117,  361 => 111,  355 => 108,  352 => 107,  350 => 106,  346 => 105,  342 => 104,  337 => 101,  331 => 98,  328 => 97,  326 => 96,  322 => 95,  318 => 94,  313 => 91,  307 => 88,  304 => 87,  302 => 86,  298 => 85,  294 => 84,  287 => 79,  281 => 76,  278 => 75,  276 => 74,  272 => 73,  268 => 72,  262 => 68,  256 => 65,  253 => 64,  251 => 63,  247 => 62,  243 => 61,  236 => 56,  230 => 53,  227 => 52,  225 => 51,  221 => 50,  217 => 49,  210 => 44,  204 => 41,  201 => 40,  199 => 39,  195 => 38,  191 => 37,  185 => 33,  179 => 30,  176 => 29,  174 => 28,  170 => 27,  166 => 26,  160 => 22,  155 => 19,  146 => 17,  142 => 16,  137 => 13,  134 => 12,  129 => 9,  124 => 6,  111 => 5,  88 => 3,  65 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}
{% block header %} {% endblock %}
{% block title %}Ajouter un événement{% endblock %}

{% block body %}
<div class=\"container\">
    <h1 class=\"text-center mb-4\">Ajouter un événement</h1>

    {{ form_start(form, {'attr': {'novalidate': 'novalidate'}}) }}

    {# Affichage des erreurs globales de formulaire #}
    {% if form.vars.errors|length > 0 %}
        <div class=\"alert alert-danger\">
            <strong>Il y a des erreurs dans le formulaire :</strong>
            <ul>
                {% for error in form.vars.errors %}
                    <li>{{ error.message }}</li>
                {% endfor %}
            </ul>
        </div>
    {% endif %}

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

    <div class=\"form-group text-center mt-4\">
        <button type=\"submit\" class=\"btn btn-success btn-lg\">Créer Événement</button>
    </div>

    {{ form_end(form) }}

    <div class=\"text-center mt-4\">
        <a href=\"{{ path('home') }}\" class=\"btn btn-outline-primary\" style=\"display: inline-block; background: rgba(223, 36, 15, 0.94); color: white; font-size: 16px; padding: 12px 25px; border-radius: 50px; text-decoration: none; transition: background 0.3s ease-in-out, box-shadow 0.3s ease-in-out; box-shadow: 0px 4px 6px rgba(255, 0, 0, 0.68);\" 
            onmouseover=\"this.style.background='rgb(179, 0, 0)'; this.style.boxShadow='0px 6px 8px rgba(179, 0, 0, 0.4)';\" 
            onmouseout=\"this.style.background='rgba(223, 36, 15, 0.94)'; this.style.boxShadow='0px 4px 6px rgba(255, 0, 0, 0.68)';\">
            Retour à la liste des événements
        </a>
    </div>
</div>
{% endblock %}
", "event/new.html.twig", "D:\\artistic-main\\artistic-main\\templates\\event\\new.html.twig");
    }
}
