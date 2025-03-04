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

/* commande/show.html.twig */
class __TwigTemplate_feb17bbc23398521efc20413c31ab1e7 extends Template
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
        return "base-front.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/show.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "commande/show.html.twig", 1);
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

        yield "Détails de la Commande";
        
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
        <h1>Détails de la Commande #";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7), "html", null, true);
        yield "</h1>

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", ["success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 10
            yield "            <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 13
            yield "            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "
        <table class=\"table\">
            <tbody>
                <tr>
                    <th>ID Commande</th>
                    <td>";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 20, $this->source); })()), "id", [], "any", false, false, false, 20), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Prix Total</th>
                    <td>";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 24, $this->source); })()), "prixTotal", [], "any", false, false, false, 24) + 5), "html", null, true);
        yield " DT</td>
                </tr>
                <tr>
                    <th>Date de Commande</th>
                    <td>";
        // line 28
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 28, $this->source); })()), "dateCommande", [], "any", false, false, false, 28)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 28, $this->source); })()), "dateCommande", [], "any", false, false, false, 28), "Y-m-d H:i:s"), "html", null, true)) : ("Non définie"));
        yield "</td>
                </tr>
                <tr>
                    <th>Statut</th>
                    <td>";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Utilisateur ID</th>
                    <td>";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_id"]) || array_key_exists("user_id", $context) ? $context["user_id"] : (function () { throw new RuntimeError('Variable "user_id" does not exist.', 36, $this->source); })()), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Nom de l'Utilisateur</th>
                    <td>";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["user_name"]) || array_key_exists("user_name", $context) ? $context["user_name"] : (function () { throw new RuntimeError('Variable "user_name" does not exist.', 40, $this->source); })()), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Localisation</th>
                    <td>";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new RuntimeError('Variable "location" does not exist.', 44, $this->source); })()), "html", null, true);
        yield "</td>
                </tr>
                <tr>
                    <th>Produits</th>
                    <td>
                        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 49, $this->source); })()), "produits", [], "any", false, false, false, 49));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 50
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 50), "html", null, true);
            yield " (";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "prix", [], "any", false, false, false, 50), "html", null, true);
            yield " DT)<br>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        yield "                    </td>
                </tr>
                <tr>
                    <th>Actions</th>
                    <td>
                        ";
        // line 57
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 57, $this->source); })()), "status", [], "any", false, false, false, 57) != "Livrée")) {
            // line 58
            yield "                            ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start');
            yield "
                            <div class=\"input-group mb-3\">
                                ";
            // line 60
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "delivery_date", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control", "required" => "required"]]);
            yield "
                                <button type=\"submit\" class=\"btn btn-success\">Confirmer Livraison</button>
                            </div>
                            ";
            // line 63
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_end');
            yield "
                        ";
        } else {
            // line 65
            yield "                            <p>Commande déjà livrée le ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 65, $this->source); })()), "deliveryDate", [], "any", false, false, false, 65)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 65, $this->source); })()), "deliveryDate", [], "any", false, false, false, 65), "d/m/Y"), "html", null, true)) : ("Non spécifié"));
            yield "</p>
                        ";
        }
        // line 67
        yield "                    </td>
                </tr>
            </tbody>
        </table>

        <div class=\"d-flex justify-content-between align-items-center mt-3\">
            <div class=\"d-flex gap-2\">
                <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_index");
        yield "\" class=\"btn btn-secondary\">Retour</a>
                <form method=\"post\" action=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 75, $this->source); })()), "id", [], "any", false, false, false, 75)]), "html", null, true);
        yield "\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76))), "html", null, true);
        yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            </div>
            <a href=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mailer_send", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["commande"]) || array_key_exists("commande", $context) ? $context["commande"] : (function () { throw new RuntimeError('Variable "commande" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
        yield "\" class=\"btn btn-success\" style=\"background-color: #28a745; border-color: #28a745;\">Envoyer Email</a>
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
        return "commande/show.html.twig";
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
        return array (  263 => 80,  256 => 76,  252 => 75,  248 => 74,  239 => 67,  233 => 65,  228 => 63,  222 => 60,  216 => 58,  214 => 57,  207 => 52,  196 => 50,  192 => 49,  184 => 44,  177 => 40,  170 => 36,  163 => 32,  156 => 28,  149 => 24,  142 => 20,  135 => 15,  126 => 13,  121 => 12,  112 => 10,  108 => 9,  103 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Détails de la Commande{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1>Détails de la Commande #{{ commande.id }}</h1>

        {% for flash_message in app.flashes('success') %}
            <div class=\"alert alert-success\">{{ flash_message }}</div>
        {% endfor %}
        {% for flash_message in app.flashes('danger') %}
            <div class=\"alert alert-danger\">{{ flash_message }}</div>
        {% endfor %}

        <table class=\"table\">
            <tbody>
                <tr>
                    <th>ID Commande</th>
                    <td>{{ commande.id }}</td>
                </tr>
                <tr>
                    <th>Prix Total</th>
                    <td>{{ commande.prixTotal + 5 }} DT</td>
                </tr>
                <tr>
                    <th>Date de Commande</th>
                    <td>{{ commande.dateCommande ? commande.dateCommande|date('Y-m-d H:i:s') : 'Non définie' }}</td>
                </tr>
                <tr>
                    <th>Statut</th>
                    <td>{{ commande.status }}</td>
                </tr>
                <tr>
                    <th>Utilisateur ID</th>
                    <td>{{ user_id }}</td>
                </tr>
                <tr>
                    <th>Nom de l'Utilisateur</th>
                    <td>{{ user_name }}</td>
                </tr>
                <tr>
                    <th>Localisation</th>
                    <td>{{ location }}</td>
                </tr>
                <tr>
                    <th>Produits</th>
                    <td>
                        {% for produit in commande.produits %}
                            {{ produit.nom }} ({{ produit.prix }} DT)<br>
                        {% endfor %}
                    </td>
                </tr>
                <tr>
                    <th>Actions</th>
                    <td>
                        {% if commande.status != 'Livrée' %}
                            {{ form_start(form) }}
                            <div class=\"input-group mb-3\">
                                {{ form_widget(form.delivery_date, {'attr': {'class': 'form-control', 'required': 'required'}}) }}
                                <button type=\"submit\" class=\"btn btn-success\">Confirmer Livraison</button>
                            </div>
                            {{ form_end(form) }}
                        {% else %}
                            <p>Commande déjà livrée le {{ commande.deliveryDate ? commande.deliveryDate|date('d/m/Y') : 'Non spécifié' }}</p>
                        {% endif %}
                    </td>
                </tr>
            </tbody>
        </table>

        <div class=\"d-flex justify-content-between align-items-center mt-3\">
            <div class=\"d-flex gap-2\">
                <a href=\"{{ path('app_commande_index') }}\" class=\"btn btn-secondary\">Retour</a>
                <form method=\"post\" action=\"{{ path('app_commande_delete', {'id': commande.id}) }}\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ commande.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            </div>
            <a href=\"{{ path('app_mailer_send', {'id': commande.id}) }}\" class=\"btn btn-success\" style=\"background-color: #28a745; border-color: #28a745;\">Envoyer Email</a>
        </div>
    </div>
{% endblock %}", "commande/show.html.twig", "D:\\artistic-main\\artistic-main\\templates\\commande\\show.html.twig");
    }
}
