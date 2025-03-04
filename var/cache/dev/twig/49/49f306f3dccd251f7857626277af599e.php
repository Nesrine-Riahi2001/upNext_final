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

/* produit/_form.html.twig */
class __TwigTemplate_90554b33aa42b3200a6192e90e7229b5 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/_form.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["novalidate" => "novalidate", "enctype" => "multipart/form-data", "class" => "needs-validation"]]);
        yield "
<div class=\"row g-5\">
    <!-- Nom de l'œuvre -->
    <div class=\"col-12 mb-4\">
        <h4 style=\"color: #1a1a1a; font-size: 1.25rem;\">Veuillez entrer le nom complet de l'œuvre artistique :</h4>
        ";
        // line 6
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), "nom", [], "any", false, false, false, 6), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ex: \"Paysage d'automne\"", "style" => "font-size: 1.1rem;"]]);
        yield "
        ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "nom", [], "any", false, false, false, 7), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
    </div>

    <!-- Image -->
    <div class=\"col-12 mb-4\">
        <h4 style=\"color: #1a1a1a; font-size: 1.25rem;\">Veuillez sélectionner une image représentant l'œuvre :</h4>
        ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "image", [], "any", false, false, false, 13), 'widget', ["attr" => ["class" => "form-control form-control-lg", "style" => "font-size: 1.1rem;"]]);
        yield "
        ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "image", [], "any", false, false, false, 14), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
    </div>

    <!-- Prix -->
    <div class=\"col-12 col-md-6 mb-4\">
        <h4 style=\"color: #1a1a1a; font-size: 1.25rem;\">Veuillez indiquer le prix de l'œuvre en dinars :</h4>
        ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "prix", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "form-control form-control-lg", "placeholder" => "Ex: 5000 DT", "style" => "font-size: 1.1rem;"]]);
        yield "
        ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "prix", [], "any", false, false, false, 21), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
    </div>

    <!-- Catégorie -->
    <div class=\"col-12 col-md-6 mb-4\">
        <h4 style=\"color: #1a1a1a; font-size: 1.25rem;\">Veuillez choisir la catégorie de l'œuvre artistique : <i class=\"fas fa-chevron-down\"></i></h4>
        ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "categorie", [], "any", false, false, false, 27), 'widget', ["attr" => ["class" => "form-control form-control-lg", "style" => "font-size: 1.1rem;"]]);
        yield "
        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "categorie", [], "any", false, false, false, 28), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
    </div>

    <!-- Description -->
    <div class=\"col-12 mb-4\">
        <h4 style=\"color: #1a1a1a; font-size: 1.25rem;\">Veuillez fournir une description détaillée de l'œuvre :</h4>
        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "description", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "form-control form-control-lg", "rows" => "6", "placeholder" => "Décrivez l'œuvre en détail...", "style" => "font-size: 1.1rem;"]]);
        yield "
        ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "description", [], "any", false, false, false, 35), 'errors', ["attr" => ["class" => "text-danger"]]);
        yield "
    </div>

    <!-- Bouton de soumission (remplacer le bouton personnalisé par le champ save du formulaire) -->
    <div class=\"col-12 text-center mt-5\">
        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "save", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "btn btn-pink btn-lg", "style" => "background-color: #ff69b4; border-color: #ff69b4; color: white; font-size: 1.25rem; padding: 12px 30px;"]]);
        yield "
    </div>
</div>
";
        // line 43
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), 'form_end');
        yield " <!-- Suppression de render_rest: false pour inclure les champs restants comme le token CSRF -->";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "produit/_form.html.twig";
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
        return array (  126 => 43,  120 => 40,  112 => 35,  108 => 34,  99 => 28,  95 => 27,  86 => 21,  82 => 20,  73 => 14,  69 => 13,  60 => 7,  56 => 6,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'enctype': 'multipart/form-data', 'class': 'needs-validation'}}) }}
<div class=\"row g-5\">
    <!-- Nom de l'œuvre -->
    <div class=\"col-12 mb-4\">
        <h4 style=\"color: #1a1a1a; font-size: 1.25rem;\">Veuillez entrer le nom complet de l'œuvre artistique :</h4>
        {{ form_widget(form.nom, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Ex: \"Paysage d\\'automne\"', 'style': 'font-size: 1.1rem;'}}) }}
        {{ form_errors(form.nom, {'attr': {'class': 'text-danger'}}) }}
    </div>

    <!-- Image -->
    <div class=\"col-12 mb-4\">
        <h4 style=\"color: #1a1a1a; font-size: 1.25rem;\">Veuillez sélectionner une image représentant l'œuvre :</h4>
        {{ form_widget(form.image, {'attr': {'class': 'form-control form-control-lg', 'style': 'font-size: 1.1rem;'}}) }}
        {{ form_errors(form.image, {'attr': {'class': 'text-danger'}}) }}
    </div>

    <!-- Prix -->
    <div class=\"col-12 col-md-6 mb-4\">
        <h4 style=\"color: #1a1a1a; font-size: 1.25rem;\">Veuillez indiquer le prix de l'œuvre en dinars :</h4>
        {{ form_widget(form.prix, {'attr': {'class': 'form-control form-control-lg', 'placeholder': 'Ex: 5000 DT', 'style': 'font-size: 1.1rem;'}}) }}
        {{ form_errors(form.prix, {'attr': {'class': 'text-danger'}}) }}
    </div>

    <!-- Catégorie -->
    <div class=\"col-12 col-md-6 mb-4\">
        <h4 style=\"color: #1a1a1a; font-size: 1.25rem;\">Veuillez choisir la catégorie de l'œuvre artistique : <i class=\"fas fa-chevron-down\"></i></h4>
        {{ form_widget(form.categorie, {'attr': {'class': 'form-control form-control-lg', 'style': 'font-size: 1.1rem;'}}) }}
        {{ form_errors(form.categorie, {'attr': {'class': 'text-danger'}}) }}
    </div>

    <!-- Description -->
    <div class=\"col-12 mb-4\">
        <h4 style=\"color: #1a1a1a; font-size: 1.25rem;\">Veuillez fournir une description détaillée de l'œuvre :</h4>
        {{ form_widget(form.description, {'attr': {'class': 'form-control form-control-lg', 'rows': '6', 'placeholder': 'Décrivez l\\'œuvre en détail...', 'style': 'font-size: 1.1rem;'}}) }}
        {{ form_errors(form.description, {'attr': {'class': 'text-danger'}}) }}
    </div>

    <!-- Bouton de soumission (remplacer le bouton personnalisé par le champ save du formulaire) -->
    <div class=\"col-12 text-center mt-5\">
        {{ form_widget(form.save, {'attr': {'class': 'btn btn-pink btn-lg', 'style': 'background-color: #ff69b4; border-color: #ff69b4; color: white; font-size: 1.25rem; padding: 12px 30px;'}}) }}
    </div>
</div>
{{ form_end(form) }} <!-- Suppression de render_rest: false pour inclure les champs restants comme le token CSRF -->", "produit/_form.html.twig", "D:\\artistic-main\\artistic-main\\templates\\produit\\_form.html.twig");
    }
}
