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

/* commande/index.html.twig */
class __TwigTemplate_dec5661ce1f6c426c303982da37f8a8a extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "commande/index.html.twig"));

        $this->parent = $this->loadTemplate("base-front.html.twig", "commande/index.html.twig", 1);
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

        yield "Liste des Commandes";
        
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
        <h1>Liste des Commandes</h1>

        ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", ["info"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 10
            yield "            <div class=\"alert alert-info\">";
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
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "flashes", ["success"], "method", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 13
            yield "            <div class=\"alert alert-success\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["danger"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 16
            yield "            <div class=\"alert alert-danger\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_message"], "html", null, true);
            yield "</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        yield "
        ";
        // line 19
        if (Twig\Extension\CoreExtension::testEmpty((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 19, $this->source); })()))) {
            // line 20
            yield "            <p>Aucune commande disponible.</p>
        ";
        } else {
            // line 22
            yield "            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prix Total</th>
                        <th>Statut</th>
                        <th>Produits</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new RuntimeError('Variable "commandes" does not exist.', 33, $this->source); })()));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 34
                yield "                        <tr>
                            <td>";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 35), "html", null, true);
                yield "</td>
                            <td>";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "prixTotal", [], "any", false, false, false, 36) + 5), "html", null, true);
                yield " DT</td>
                            <td>";
                // line 37
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 37), "html", null, true);
                yield "</td>
                            <td>
                                ";
                // line 39
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "produits", [], "any", false, false, false, 39));
                foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
                    // line 40
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["produit"], "nom", [], "any", false, false, false, 40), "html", null, true);
                    yield "<br>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['produit'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 42
                yield "                            </td>
                            <td>
                                <div class=\"d-flex gap-2\">
                                    ";
                // line 45
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "status", [], "any", false, false, false, 45) != "Livrée")) {
                    // line 46
                    yield "                                        <form method=\"post\" action=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_commande_update_delivery", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                    yield "\" style=\"display:inline;\">
                                            <div class=\"input-group\">
                                                <input type=\"date\" name=\"delivery_date\" class=\"form-control form-control-sm\" required>
                                                <button type=\"submit\" class=\"btn btn-success btn-sm\">Confirmer livraison</button>
                                            </div>
                                        </form>
                                    ";
                }
                // line 53
                yield "                                    ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, "commande/_delete_form.html.twig", ["commande" => $context["commande"]]);
                yield "
                                    <a href=\"";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_mailer_send", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["commande"], "id", [], "any", false, false, false, 54)]), "html", null, true);
                yield "\" class=\"btn btn-sm\" style=\"background-color: #ffa500; color: white; border: none;\">Envoyer mail</a>
                                </div>
                            </td>
                        </tr>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "                </tbody>
            </table>
        ";
        }
        // line 62
        yield "    </div>
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
        return "commande/index.html.twig";
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
        return array (  261 => 62,  256 => 59,  237 => 54,  232 => 53,  221 => 46,  219 => 45,  214 => 42,  205 => 40,  201 => 39,  196 => 37,  192 => 36,  188 => 35,  185 => 34,  168 => 33,  155 => 22,  151 => 20,  149 => 19,  146 => 18,  137 => 16,  132 => 15,  123 => 13,  118 => 12,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base-front.html.twig' %}

{% block title %}Liste des Commandes{% endblock %}

{% block body %}
    <div class=\"container mt-5\">
        <h1>Liste des Commandes</h1>

        {% for flash_message in app.flashes('info') %}
            <div class=\"alert alert-info\">{{ flash_message }}</div>
        {% endfor %}
        {% for flash_message in app.flashes('success') %}
            <div class=\"alert alert-success\">{{ flash_message }}</div>
        {% endfor %}
        {% for flash_message in app.flashes('danger') %}
            <div class=\"alert alert-danger\">{{ flash_message }}</div>
        {% endfor %}

        {% if commandes is empty %}
            <p>Aucune commande disponible.</p>
        {% else %}
            <table class=\"table table-striped\">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Prix Total</th>
                        <th>Statut</th>
                        <th>Produits</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {% for commande in commandes %}
                        <tr>
                            <td>{{ commande.id }}</td>
                            <td>{{ commande.prixTotal + 5 }} DT</td>
                            <td>{{ commande.status }}</td>
                            <td>
                                {% for produit in commande.produits %}
                                    {{ produit.nom }}<br>
                                {% endfor %}
                            </td>
                            <td>
                                <div class=\"d-flex gap-2\">
                                    {% if commande.status != 'Livrée' %}
                                        <form method=\"post\" action=\"{{ path('app_commande_update_delivery', {'id': commande.id}) }}\" style=\"display:inline;\">
                                            <div class=\"input-group\">
                                                <input type=\"date\" name=\"delivery_date\" class=\"form-control form-control-sm\" required>
                                                <button type=\"submit\" class=\"btn btn-success btn-sm\">Confirmer livraison</button>
                                            </div>
                                        </form>
                                    {% endif %}
                                    {{ include('commande/_delete_form.html.twig', {'commande': commande}) }}
                                    <a href=\"{{ path('app_mailer_send', {'id': commande.id}) }}\" class=\"btn btn-sm\" style=\"background-color: #ffa500; color: white; border: none;\">Envoyer mail</a>
                                </div>
                            </td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% endif %}
    </div>
{% endblock %}", "commande/index.html.twig", "D:\\artistic-main\\artistic-main\\templates\\commande\\index.html.twig");
    }
}
