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

/* accueil/index.html.twig */
class __TwigTemplate_763b5f6fcfc90f5a418660318d7e950f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
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

        yield "Accueil";
        
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
        yield "
<section id=\"hello\" class=\"hero-section\">
    <div class=\"container\">

        <div class=\"hero-content\">
            <h1>Bienvenue sur </h1>
            <h1><span class=\"highlight\">Up-Next</span></h1>
            <p>Votre plateforme pour les événements locaux et les créations artistiques.</p>
            <p>Découvrez, réservez et soutenez les événements locaux ainsi que les produits artisanaux uniques, tout en un seul endroit.</p>
            <div class=\"hero-buttons\">
                <a href=\"explore\" class=\"btn primary\">Découvrir</a>
                <a href=\"contact\" class=\"btn secondary\">Nous contacter</a>
            </div>
        </div>
        
        <div class=\"hero-image\">
            <img src=\"assets/img/about-5.webp\" alt=\"Illustration d'événements et d'art\">
        </div>
    </div>
</section>
<section id=\"Utilisateur\" class=\"hero-section\">
<div class=\"container\">
    <div class=\"hero-content\">
        <h1>Pour les utilisateurs</h1>
            <p> Parcourez et explorez les événements à venir dans votre région, achetez vos billets et réservez des produits exclusifs créés par des artistes locaux.</p>
                <p> Restez à jour sur les dernières nouveautés et profitez pleinement de votre expérience avec nous.</p>
                   
        <div class=\"event-image \">
            <img src=\"assets/img/event.jpg\" alt=\"Illustration d'événements et d'art\">
        </div>
   
       
    </div> 
</div>
</section>

<section id=\"Artist\" class=\"hero-section\">
<div class=\"container\">
    <div class=\"hero-content\">
        <h1>Pour les artist</h1>
            <p> Créez, gérez et promouvez vos événements. Mettez en valeur vos produits artistiques auprès d'un large public et gérez facilement vos ventes et votre inventaire. </p>
                <p> Connectez-vous avec vos fans et soutenez la communauté créative locale.</p>
                   
        <div class=\"event-image\">
            <img src=\"assets/img/artist.jpg\" alt=\"Illustration d'événements et d'art\">
        </div>
   
       
    </div> 
</div>
</section>



<section id=\"contact\" class=\"contact-card\">
    <div class=\"container\">
        <h2>Contactez-nous</h2>
        <p>Email : <a href=\"mailto:upnext@gmail.com\">upnext@gmail.com</a></p>
        <p>Téléphone : <a href=\"tel:+999888777\">99 888 777</a></p>
    </div>
</section>

<style>
    .hero-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 50px;
        background-color:rgba(249, 249, 249, 0);
    }
    .hero-content {
        max-width: 80%;
    }
    .hero-content .highlight {
        color:rgb(225, 19, 19);
        font-weight: bold;
    }
    .hero-buttons .btn {
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        margin-right: 10px;
    }
    .btn.primary {
        background-color:rgb(223, 14, 14);
        color: #fff;
    }
    .btn.secondary {
        background-color: #333;
        color: #fff;
    }
    .hero-image img {
        max-width: 100%;
        border-radius: 10px;
        width: 1000px;
    }
    .event-image {
    display: flex;
    justify-content: center; /* Centers horizontally */
    align-items: center; /* Centers vertically */
    width: 100%; /* Ensures the div takes full width */
}

.event-image img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
}
        
    
    .contact-card {
        text-align: center;
        background: #fff;
        padding: 20px;
        margin-top: 30px;
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }


</style>

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
        return "accueil/index.html.twig";
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
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Accueil{% endblock %}

{% block body %}

<section id=\"hello\" class=\"hero-section\">
    <div class=\"container\">

        <div class=\"hero-content\">
            <h1>Bienvenue sur </h1>
            <h1><span class=\"highlight\">Up-Next</span></h1>
            <p>Votre plateforme pour les événements locaux et les créations artistiques.</p>
            <p>Découvrez, réservez et soutenez les événements locaux ainsi que les produits artisanaux uniques, tout en un seul endroit.</p>
            <div class=\"hero-buttons\">
                <a href=\"explore\" class=\"btn primary\">Découvrir</a>
                <a href=\"contact\" class=\"btn secondary\">Nous contacter</a>
            </div>
        </div>
        
        <div class=\"hero-image\">
            <img src=\"assets/img/about-5.webp\" alt=\"Illustration d'événements et d'art\">
        </div>
    </div>
</section>
<section id=\"Utilisateur\" class=\"hero-section\">
<div class=\"container\">
    <div class=\"hero-content\">
        <h1>Pour les utilisateurs</h1>
            <p> Parcourez et explorez les événements à venir dans votre région, achetez vos billets et réservez des produits exclusifs créés par des artistes locaux.</p>
                <p> Restez à jour sur les dernières nouveautés et profitez pleinement de votre expérience avec nous.</p>
                   
        <div class=\"event-image \">
            <img src=\"assets/img/event.jpg\" alt=\"Illustration d'événements et d'art\">
        </div>
   
       
    </div> 
</div>
</section>

<section id=\"Artist\" class=\"hero-section\">
<div class=\"container\">
    <div class=\"hero-content\">
        <h1>Pour les artist</h1>
            <p> Créez, gérez et promouvez vos événements. Mettez en valeur vos produits artistiques auprès d'un large public et gérez facilement vos ventes et votre inventaire. </p>
                <p> Connectez-vous avec vos fans et soutenez la communauté créative locale.</p>
                   
        <div class=\"event-image\">
            <img src=\"assets/img/artist.jpg\" alt=\"Illustration d'événements et d'art\">
        </div>
   
       
    </div> 
</div>
</section>



<section id=\"contact\" class=\"contact-card\">
    <div class=\"container\">
        <h2>Contactez-nous</h2>
        <p>Email : <a href=\"mailto:upnext@gmail.com\">upnext@gmail.com</a></p>
        <p>Téléphone : <a href=\"tel:+999888777\">99 888 777</a></p>
    </div>
</section>

<style>
    .hero-section {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 50px;
        background-color:rgba(249, 249, 249, 0);
    }
    .hero-content {
        max-width: 80%;
    }
    .hero-content .highlight {
        color:rgb(225, 19, 19);
        font-weight: bold;
    }
    .hero-buttons .btn {
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        margin-right: 10px;
    }
    .btn.primary {
        background-color:rgb(223, 14, 14);
        color: #fff;
    }
    .btn.secondary {
        background-color: #333;
        color: #fff;
    }
    .hero-image img {
        max-width: 100%;
        border-radius: 10px;
        width: 1000px;
    }
    .event-image {
    display: flex;
    justify-content: center; /* Centers horizontally */
    align-items: center; /* Centers vertically */
    width: 100%; /* Ensures the div takes full width */
}

.event-image img {
    max-width: 100%;
    height: auto;
    border-radius: 10px;
}
        
    
    .contact-card {
        text-align: center;
        background: #fff;
        padding: 20px;
        margin-top: 30px;
        border-radius: 8px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }


</style>

{% endblock %}

", "accueil/index.html.twig", "D:\\artistic-main\\artistic-main\\templates\\accueil\\index.html.twig");
    }
}
