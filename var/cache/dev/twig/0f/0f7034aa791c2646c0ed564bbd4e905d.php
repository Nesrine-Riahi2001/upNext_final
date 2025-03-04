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

/* quiz/_quiz_list.html.twig */
class __TwigTemplate_4954e4ece2799f80f9522c1fd3e6440d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/_quiz_list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "quiz/_quiz_list.html.twig"));

        // line 2
        yield "
<table class=\"table\">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Sujet</th>
            <th>Questions</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["quizzes"]) || array_key_exists("quizzes", $context) ? $context["quizzes"] : (function () { throw new RuntimeError('Variable "quizzes" does not exist.', 13, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["quiz"]) {
            // line 14
            yield "        <tr>
            <td>";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "titreQuiz", [], "any", false, false, false, 15), "html", null, true);
            yield "</td>
            <td>";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "sujet", [], "any", false, false, false, 16), "html", null, true);
            yield "</td>
            <td>
                <ul>
                    ";
            // line 19
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "questions", [], "any", false, false, false, 19));
            foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
                // line 20
                yield "                        <li>
                            ";
                // line 21
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["question"], "texteQuestion", [], "any", false, false, false, 21), "html", null, true);
                yield "
                            <!-- Bouton Modifier pour chaque question -->
                            <a href=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("question_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["question"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                        </li>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['question'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            yield "                </ul>
            </td>
            <td>
                <!-- Bouton Modifier Quiz -->
                <a href=\"";
            // line 30
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            yield "\" class=\"btn btn-warning\">Modifier</a>

                <!-- Lien pour ajouter une question à ce quiz -->
                <a href=\"";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_add_question", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 33)]), "html", null, true);
            yield "\" class=\"btn btn-primary\">Ajouter une question</a>

                <!-- Formulaire pour supprimer ce quiz -->
                <form method=\"post\" action=\"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("quiz_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 36)]), "html", null, true);
            yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce quiz ?');\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["quiz"], "id", [], "any", false, false, false, 37))), "html", null, true);
            yield "\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        // line 42
        if (!$context['_iterated']) {
            // line 43
            yield "        <tr>
            <td colspan=\"4\">Aucun quiz trouvé</td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['quiz'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        yield "    </tbody>
</table>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "quiz/_quiz_list.html.twig";
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
        return array (  143 => 47,  134 => 43,  132 => 42,  122 => 37,  118 => 36,  112 => 33,  106 => 30,  100 => 26,  91 => 23,  86 => 21,  83 => 20,  79 => 19,  73 => 16,  69 => 15,  66 => 14,  61 => 13,  48 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/quiz/_quiz_list.html.twig #}

<table class=\"table\">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Sujet</th>
            <th>Questions</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    {% for quiz in quizzes %}
        <tr>
            <td>{{ quiz.titreQuiz }}</td>
            <td>{{ quiz.sujet }}</td>
            <td>
                <ul>
                    {% for question in quiz.questions %}
                        <li>
                            {{ question.texteQuestion }}
                            <!-- Bouton Modifier pour chaque question -->
                            <a href=\"{{ path('question_edit', {'id': question.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                        </li>
                    {% endfor %}
                </ul>
            </td>
            <td>
                <!-- Bouton Modifier Quiz -->
                <a href=\"{{ path('quiz_edit', {'id': quiz.id}) }}\" class=\"btn btn-warning\">Modifier</a>

                <!-- Lien pour ajouter une question à ce quiz -->
                <a href=\"{{ path('quiz_add_question', {'id': quiz.id}) }}\" class=\"btn btn-primary\">Ajouter une question</a>

                <!-- Formulaire pour supprimer ce quiz -->
                <form method=\"post\" action=\"{{ path('quiz_delete', {'id': quiz.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce quiz ?');\" style=\"display: inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ quiz.id) }}\">
                    <button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>
                </form>
            </td>
        </tr>
    {% else %}
        <tr>
            <td colspan=\"4\">Aucun quiz trouvé</td>
        </tr>
    {% endfor %}
    </tbody>
</table>", "quiz/_quiz_list.html.twig", "D:\\artistic-main\\artistic-main\\templates\\quiz\\_quiz_list.html.twig");
    }
}
