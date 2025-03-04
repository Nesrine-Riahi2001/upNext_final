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

/* produit/pannier.html.twig */
class __TwigTemplate_430c1587273af90163a6a28c7b7c9996 extends Template
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
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/pannier.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "produit/pannier.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "produit/pannier.html.twig", 1);
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

        yield "Mon Panier";
        
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
        yield "    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-5\" style=\"font-size: 2.5rem; color: #2c3e50; font-weight: bold;\">Mon Panier</h1>

        ";
        // line 9
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 9, $this->source); })()))) {
            // line 10
            yield "            <div class=\"alert alert-info text-center\" role=\"alert\" style=\"font-size: 1.2rem;\">
                Votre panier est vide.
                <a href=\"";
            // line 12
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_list");
            yield "\" class=\"btn btn-info btn-lg mt-3\">Retour à la liste des produits</a>
            </div>
        ";
        } else {
            // line 15
            yield "            <div class=\"row\">
                <div class=\"col-md-8\">
                    ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                // line 18
                yield "                        <div class=\"card mb-4\" style=\"border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);\">
                            <div class=\"row no-gutters\">
                                <div class=\"col-md-4\">
                                    ";
                // line 21
                if (CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 21)) {
                    // line 22
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 22)]), "html", null, true);
                    yield "\">
                                            <img src=\"";
                    // line 23
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images/" . CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "image", [], "any", false, false, false, 23))), "html", null, true);
                    yield "\" class=\"card-img-top img-fluid\" style=\"height: 250px; object-fit: cover; border-radius: 15px 0 0 15px;\">
                                        </a>
                                    ";
                } else {
                    // line 26
                    yield "                                        <div class=\"card-img-top bg-light text-center\" style=\"height: 250px; padding-top: 100px; font-size: 1.2rem;\">Pas d'image</div>
                                    ";
                }
                // line 28
                yield "                                </div>
                                <div class=\"col-md-8\">
                                    <div class=\"card-body p-4\">
                                        <h4 class=\"card-title\" style=\"font-size: 1.5rem; color: #2c3e50;\">";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 31), "html", null, true);
                yield "</h4>
                                        <p class=\"card-text\" style=\"font-size: 1.1rem;\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", true, true, false, 32)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "description", [], "any", false, false, false, 32), "Aucune description")) : ("Aucune description")), "html", null, true);
                yield "</p>
                                        <p class=\"card-text\" style=\"font-size: 1.2rem; font-weight: bold; color: #27ae60;\">Prix : ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 33), "html", null, true);
                yield " DT</p>
                                        <div class=\"input-group mb-3 w-50\">
                                            <input type=\"number\" class=\"form-control form-control-lg\" value=\"1\" min=\"1\" style=\"font-size: 1.1rem;\">
                                            <div class=\"input-group-append\">
                                                <a href=\"";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_remove", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "id", [], "any", false, false, false, 37)]), "html", null, true);
                yield "\" class=\"btn btn-danger btn-lg\" style=\"font-size: 1.1rem;\">Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            yield "                </div>

                <!-- Récapitulatif -->
                <div class=\"col-md-4\">
                    <div class=\"card p-4\" style=\"border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);\">
                        <h4 class=\"card-title mb-4\" style=\"font-size: 1.5rem; color: #2c3e50;\">Récapitulatif</h4>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item py-3\" style=\"font-size: 1.2rem;\">
                                <span>Sous-total</span>
                                <span style=\"color: #27ae60; font-weight: bold;\">";
            // line 54
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 54, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 54, $this->source); })()), "prix", [], "any", false, false, false, 54); }), function ($__sum__, $__price__) use ($context, $macros) { $context["sum"] = $__sum__; $context["price"] = $__price__; return ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 54, $this->source); })()) + (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 54, $this->source); })())); }, 0), "html", null, true);
            yield " DT</span>
                            </li>
                            <li class=\"list-group-item py-3\" style=\"font-size: 1.2rem;\">
                                <span>Livraison</span>
                                <span style=\"color: #27ae60;\">Standard - 5 DT</span>
                            </li>
                            <li class=\"list-group-item py-3\" style=\"font-size: 1.3rem; border-top: 2px solid #eee;\">
                                <strong>Total</strong>
                                <strong style=\"color: #e74c3c;\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::reduce($this->env, Twig\Extension\CoreExtension::map($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new RuntimeError('Variable "produits" does not exist.', 62, $this->source); })()), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 62, $this->source); })()), "prix", [], "any", false, false, false, 62); }), function ($__sum__, $__price__) use ($context, $macros) { $context["sum"] = $__sum__; $context["price"] = $__price__; return ((isset($context["sum"]) || array_key_exists("sum", $context) ? $context["sum"] : (function () { throw new RuntimeError('Variable "sum" does not exist.', 62, $this->source); })()) + (isset($context["price"]) || array_key_exists("price", $context) ? $context["price"] : (function () { throw new RuntimeError('Variable "price" does not exist.', 62, $this->source); })())); }, 0) + 5), "html", null, true);
            yield " DT</strong>
                            </li>
                        </ul>
                        <button class=\"btn btn-pink btn-lg btn-block mt-4\" style=\"font-size: 1.2rem; background-color: #ff69b4; border-color: #ff69b4; color: white;\" onclick=\"window.location.href='";
            // line 65
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_cart_confirm");
            yield "'\">Finaliser la commande</button>
                        <a href=\"";
            // line 66
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_produit_list");
            yield "\" class=\"btn btn-secondary btn-lg btn-block mt-3\" style=\"font-size: 1.2rem;\">Continuer mes achats</a>
                    </div>
                </div>
            </div>
        ";
        }
        // line 71
        yield "    </div>

";
        // line 73
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        yield "    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "produit/pannier.html.twig";
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
        return array (  249 => 74,  226 => 73,  222 => 71,  214 => 66,  210 => 65,  204 => 62,  193 => 54,  182 => 45,  168 => 37,  161 => 33,  157 => 32,  153 => 31,  148 => 28,  144 => 26,  138 => 23,  133 => 22,  131 => 21,  126 => 18,  122 => 17,  118 => 15,  112 => 12,  108 => 10,  106 => 9,  101 => 6,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Mon Panier{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1 class=\"text-center mb-5\" style=\"font-size: 2.5rem; color: #2c3e50; font-weight: bold;\">Mon Panier</h1>

        {% if produits is empty %}
            <div class=\"alert alert-info text-center\" role=\"alert\" style=\"font-size: 1.2rem;\">
                Votre panier est vide.
                <a href=\"{{ path('app_produit_list') }}\" class=\"btn btn-info btn-lg mt-3\">Retour à la liste des produits</a>
            </div>
        {% else %}
            <div class=\"row\">
                <div class=\"col-md-8\">
                    {% for produit in produits %}
                        <div class=\"card mb-4\" style=\"border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);\">
                            <div class=\"row no-gutters\">
                                <div class=\"col-md-4\">
                                    {% if produit.image %}
                                        <a href=\"{{ path('app_produit_show', {'id': produit.id}) }}\">
                                            <img src=\"{{ asset('uploads/images/' ~ produit.image) }}\" class=\"card-img-top img-fluid\" style=\"height: 250px; object-fit: cover; border-radius: 15px 0 0 15px;\">
                                        </a>
                                    {% else %}
                                        <div class=\"card-img-top bg-light text-center\" style=\"height: 250px; padding-top: 100px; font-size: 1.2rem;\">Pas d'image</div>
                                    {% endif %}
                                </div>
                                <div class=\"col-md-8\">
                                    <div class=\"card-body p-4\">
                                        <h4 class=\"card-title\" style=\"font-size: 1.5rem; color: #2c3e50;\">{{ produit.nom }}</h4>
                                        <p class=\"card-text\" style=\"font-size: 1.1rem;\">{{ produit.description|default('Aucune description') }}</p>
                                        <p class=\"card-text\" style=\"font-size: 1.2rem; font-weight: bold; color: #27ae60;\">Prix : {{ produit.prix }} DT</p>
                                        <div class=\"input-group mb-3 w-50\">
                                            <input type=\"number\" class=\"form-control form-control-lg\" value=\"1\" min=\"1\" style=\"font-size: 1.1rem;\">
                                            <div class=\"input-group-append\">
                                                <a href=\"{{ path('app_cart_remove', {'id': produit.id}) }}\" class=\"btn btn-danger btn-lg\" style=\"font-size: 1.1rem;\">Supprimer</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>

                <!-- Récapitulatif -->
                <div class=\"col-md-4\">
                    <div class=\"card p-4\" style=\"border-radius: 15px; box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);\">
                        <h4 class=\"card-title mb-4\" style=\"font-size: 1.5rem; color: #2c3e50;\">Récapitulatif</h4>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item py-3\" style=\"font-size: 1.2rem;\">
                                <span>Sous-total</span>
                                <span style=\"color: #27ae60; font-weight: bold;\">{{ produits|map(p => p.prix)|reduce((sum, price) => sum + price, 0) }} DT</span>
                            </li>
                            <li class=\"list-group-item py-3\" style=\"font-size: 1.2rem;\">
                                <span>Livraison</span>
                                <span style=\"color: #27ae60;\">Standard - 5 DT</span>
                            </li>
                            <li class=\"list-group-item py-3\" style=\"font-size: 1.3rem; border-top: 2px solid #eee;\">
                                <strong>Total</strong>
                                <strong style=\"color: #e74c3c;\">{{ produits|map(p => p.prix)|reduce((sum, price) => sum + price, 0) + 5 }} DT</strong>
                            </li>
                        </ul>
                        <button class=\"btn btn-pink btn-lg btn-block mt-4\" style=\"font-size: 1.2rem; background-color: #ff69b4; border-color: #ff69b4; color: white;\" onclick=\"window.location.href='{{ path('app_cart_confirm') }}'\">Finaliser la commande</button>
                        <a href=\"{{ path('app_produit_list') }}\" class=\"btn btn-secondary btn-lg btn-block mt-3\" style=\"font-size: 1.2rem;\">Continuer mes achats</a>
                    </div>
                </div>
            </div>
        {% endif %}
    </div>

{% block javascripts %}
    {# Supprimez le script JavaScript car il n'est plus nécessaire sans <select> #}
{% endblock %}
{% endblock %}", "produit/pannier.html.twig", "D:\\artistic-main\\artistic-main\\templates\\produit\\pannier.html.twig");
    }
}
