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

/* reclamation/showReclamations.html.twig */
class __TwigTemplate_30db58eb86f4dd234f38cbc5267f7c49 extends Template
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
            'head' => [$this, 'block_head'],
            'body' => [$this, 'block_body'],
            'header' => [$this, 'block_header'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "baseClient1.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/showReclamations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reclamation/showReclamations.html.twig"));

        $this->parent = $this->loadTemplate("baseClient1.html.twig", "reclamation/showReclamations.html.twig", 1);
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

        yield "Liste des Réclamations";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 4
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 5
        yield "<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Index - iLanding Bootstrap Template</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

  <!-- Favicons -->
  <link href=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/favicon.png"), "html", null, true);
        yield "\" rel=\"icon\">
  <link href=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/img/apple-touch-icon.png"), "html", null, true);
        yield "\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/bootstrap-icons/bootstrap-icons.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/aos/aos.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 25
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/glightbox/css/glightbox.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
  <link href=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/vendor/swiper/swiper-bundle.min.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("asset/css/main.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  =====================================================-->
</head>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 43
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

        // line 44
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 88
        yield "
<br>
<br>
<br>
<br>
<br>
<br>


<body class=\"hm-gradient\">
   <div class=\"container mt-4\">
    <div class=\"text-center darken-grey-text mb-4\">
        <h1 class=\"font-bold mt-4 mb-3 h5\">Liste des Réclamations</h1>
    </div>
";
        // line 103
        yield "    <div class=\"card mb-4\">
        <div class=\"card-body\">
          ";
        // line 105
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), 'form_start');
        yield "
    <div class=\"row\">
        <div class=\"col-md-4\">
            ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "mots", [], "any", false, false, false, 108), 'widget');
        yield "
        </div>
     
        <div class=\"col-md-2\">
            ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), "Rechercher", [], "any", false, false, false, 112), 'widget');
        yield "
        </div>
    </div>
";
        // line 115
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_end');
        yield "

";
        // line 118
        yield "    <div class=\"card mb-4\">
        <div class=\"card-body\">
          ";
        // line 120
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTrie"]) || array_key_exists("formTrie", $context) ? $context["formTrie"] : (function () { throw new RuntimeError('Variable "formTrie" does not exist.', 120, $this->source); })()), 'form_start');
        yield "
    <div class=\"row\">


     <style>
     .btn-pink {
    background-color: #FF69B4; /* Couleur rose */
    color: white;
    border: none;
}

.btn-pink:hover {
    background-color: #FF1493; /* Couleur rose plus foncée au survol */
}
     </style>



        <div class=\"col-md-2\">
";
        // line 139
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["formTrie"]) || array_key_exists("formTrie", $context) ? $context["formTrie"] : (function () { throw new RuntimeError('Variable "formTrie" does not exist.', 139, $this->source); })()), "TriCroissantTitre", [], "any", false, false, false, 139), 'widget', ["attr" => ["class" => "btn btn-pink"]]);
        yield "        </div>
    </div>
";
        // line 141
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formTrie"]) || array_key_exists("formTrie", $context) ? $context["formTrie"] : (function () { throw new RuntimeError('Variable "formTrie" does not exist.', 141, $this->source); })()), 'form_end');
        yield "

            ";
        // line 143
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 143, $this->source); })()))) {
            // line 144
            yield "                <table class=\"table table-striped\">
                    <thead class=\"thead-dark\">
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Mail Client</th>
                            <th>Type</th>
                            <th>Date Création</th>
                            <th>Statut</th>
                            <th>Pièce jointe</th>
                            <th>Actions</th>
                            <th>Suivi</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 160
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 160, $this->source); })()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["reclamation"]) {
                // line 161
                yield "                            <tr>
                                <th scope=\"row\">";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 162), "html", null, true);
                yield "</th>
                                <td>";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "Titre", [], "any", false, false, false, 163), "html", null, true);
                yield "</td>
                                <td>";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "getDescriptionRec", [], "method", false, false, false, 164), "html", null, true);
                yield "</td>
                                <td>";
                // line 165
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "getMailClientRec", [], "method", false, false, false, 165), "html", null, true);
                yield "</td>
                                <td>";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "getTypeRec", [], "method", false, false, false, 166), "html", null, true);
                yield "</td>
                                <td>";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "getDateCreationRec", [], "method", false, false, false, 167), "d/m/Y"), "html", null, true);
                yield "</td>
                                <td>";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "getStatusRec", [], "method", false, false, false, 168), "html", null, true);
                yield "</td>
                                <td>
                                    ";
                // line 170
                if (CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "getFichierPJRec", [], "method", false, false, false, 170)) {
                    // line 171
                    yield "                                        <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "getFichierPJRec", [], "method", false, false, false, 171))), "html", null, true);
                    yield "\" target=\"_blank\" class=\"btn btn-primary btn-sm\">Télécharger</a>
                                    ";
                } else {
                    // line 173
                    yield "                                        Pas de pièce jointe
                                    ";
                }
                // line 175
                yield "                                </td>
                                <td>
                                    <a href=\"";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_modifier_reclamation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 177)]), "html", null, true);
                yield "\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                    <form action=\"";
                // line 178
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_supprimer_reclamation", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 178)]), "html", null, true);
                yield "\" method=\"post\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">Supprimer</button>
                                    </form>
                                </td>
                                <td>
                                    <a href=\"";
                // line 184
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_voir_suivi", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["reclamation"], "id", [], "any", false, false, false, 184)]), "html", null, true);
                yield "\" class=\"btn btn-info btn-sm\">Voir suivi</a>
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
            unset($context['_seq'], $context['_key'], $context['reclamation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 188
            yield "                    </tbody>
                </table>
            ";
        } else {
            // line 191
            yield "                <p class=\"text-center\">Aucune réclamation trouvée.</p>
            ";
        }
        // line 193
        yield "        </div>
    </div>
</div>
</body>
";
        // line 198
        yield " <style>
.hm-gradient {
    background-image: linear-gradient(to top,rgb(234, 146, 146) 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}
.input-group.md-form.form-sm.form-2 input {
    border: 1px solid #bdbdbd;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.input-group.md-form.form-sm.form-2 input.purple-border {
    border: 1px solid #9e9e9e;
}
.input-group.md-form.form-sm.form-2 input[type=text]:focus:not([readonly]).purple-border {
    border: 1px solidrgb(200, 104, 131);
    box-shadow: none;
}
.form-2 .input-group-addon {
    border: 1px solidrgb(200, 104, 114);
}
.danger-text {
    color: #ff3547; 
}  
.success-text {
    color: #00C851; 
}
.table-bordered.red-border, .table-bordered.red-border th, .table-bordered.red-border td {
    border: 1px solid #ff3547!important;
}        
.table.table-bordered th {
    text-align: center;
}
 </style>
";
        // line 324
        yield "


















";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 44
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

        // line 45
        yield "  <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
    <div class=\"header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
        <img src=\"assets/img/up-next.png\" alt=\"\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"";
        // line 56
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"active\">Home</a></li>
          <li><a href=\"#about\">About</a></li>
          <li><a href=\"#features\">Features</a></li>
          <li><a href=\"#services\">Services</a></li>
          <li><a href=\"#pricing\">Pricing</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"#\">Dropdown 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Dropdown 1</a></li>
                  <li><a href=\"#\">Deep Dropdown 2</a></li>
                  <li><a href=\"#\">Deep Dropdown 3</a></li>
                  <li><a href=\"#\">Deep Dropdown 4</a></li>
                  <li><a href=\"#\">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Dropdown 2</a></li>
              <li><a href=\"#\">Dropdown 3</a></li>
              <li><a href=\"#\">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href=\"#contact\">Contact</a></li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

<a class=\"btn-getstarted\" href=\"";
        // line 83
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_ajout_reclamation");
        yield "\">Ajouter Réclamation</a>

    </div>
  </header>
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
        return "reclamation/showReclamations.html.twig";
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
        return array (  520 => 83,  490 => 56,  477 => 45,  464 => 44,  434 => 324,  397 => 198,  391 => 193,  387 => 191,  382 => 188,  364 => 184,  355 => 178,  351 => 177,  347 => 175,  343 => 173,  337 => 171,  335 => 170,  330 => 168,  326 => 167,  322 => 166,  318 => 165,  314 => 164,  310 => 163,  306 => 162,  303 => 161,  286 => 160,  268 => 144,  266 => 143,  261 => 141,  256 => 139,  234 => 120,  230 => 118,  225 => 115,  219 => 112,  212 => 108,  206 => 105,  202 => 103,  186 => 88,  184 => 44,  171 => 43,  149 => 29,  143 => 26,  139 => 25,  135 => 24,  131 => 23,  127 => 22,  116 => 14,  112 => 13,  102 => 5,  89 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'baseClient1.html.twig' %}

{% block title %}Liste des Réclamations{% endblock %}
 {% block head %}
<head>
  <meta charset=\"utf-8\">
  <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
  <title>Index - iLanding Bootstrap Template</title>
  <meta name=\"description\" content=\"\">
  <meta name=\"keywords\" content=\"\">

  <!-- Favicons -->
  <link href=\"{{ asset('asset/img/favicon.png') }}\" rel=\"icon\">
  <link href=\"{{ asset('asset/img/apple-touch-icon.png') }}\" rel=\"apple-touch-icon\">

  <!-- Fonts -->
  <link href=\"https://fonts.googleapis.com\" rel=\"preconnect\">
  <link href=\"https://fonts.gstatic.com\" rel=\"preconnect\" crossorigin>
  <link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap\" rel=\"stylesheet\">

  <!-- Vendor CSS Files -->
  <link href=\"{{ asset('asset/vendor/bootstrap/css/bootstrap.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('asset/vendor/aos/aos.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('asset/vendor/glightbox/css/glightbox.min.css') }}\" rel=\"stylesheet\">
  <link href=\"{{ asset('asset/vendor/swiper/swiper-bundle.min.css') }}\" rel=\"stylesheet\">

  <!-- Main CSS File -->
  <link href=\"{{ asset('asset/css/main.css') }}\" rel=\"stylesheet\">

  <!-- =======================================================
  * Template Name: iLanding
  * Template URL: https://bootstrapmade.com/ilanding-bootstrap-landing-page-template/
  * Updated: Nov 12 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  =====================================================-->
</head>
{% endblock %}



{% block body %}
{% block header %}
  <header id=\"header\" class=\"header d-flex align-items-center fixed-top\">
    <div class=\"header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">

      <a href=\"index.html\" class=\"logo d-flex align-items-center me-auto me-xl-0\">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src=\"assets/img/logo.png\" alt=\"\"> -->
        <img src=\"assets/img/up-next.png\" alt=\"\">
      </a>

      <nav id=\"navmenu\" class=\"navmenu\">
        <ul>
          <li><a href=\"{{ path('app_home') }}\" class=\"active\">Home</a></li>
          <li><a href=\"#about\">About</a></li>
          <li><a href=\"#features\">Features</a></li>
          <li><a href=\"#services\">Services</a></li>
          <li><a href=\"#pricing\">Pricing</a></li>
          <li class=\"dropdown\"><a href=\"#\"><span>Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
            <ul>
              <li><a href=\"#\">Dropdown 1</a></li>
              <li class=\"dropdown\"><a href=\"#\"><span>Deep Dropdown</span> <i class=\"bi bi-chevron-down toggle-dropdown\"></i></a>
                <ul>
                  <li><a href=\"#\">Deep Dropdown 1</a></li>
                  <li><a href=\"#\">Deep Dropdown 2</a></li>
                  <li><a href=\"#\">Deep Dropdown 3</a></li>
                  <li><a href=\"#\">Deep Dropdown 4</a></li>
                  <li><a href=\"#\">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href=\"#\">Dropdown 2</a></li>
              <li><a href=\"#\">Dropdown 3</a></li>
              <li><a href=\"#\">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href=\"#contact\">Contact</a></li>
        </ul>
        <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>
      </nav>

<a class=\"btn-getstarted\" href=\"{{ path('app_ajout_reclamation') }}\">Ajouter Réclamation</a>

    </div>
  </header>
{% endblock %}

<br>
<br>
<br>
<br>
<br>
<br>


<body class=\"hm-gradient\">
   <div class=\"container mt-4\">
    <div class=\"text-center darken-grey-text mb-4\">
        <h1 class=\"font-bold mt-4 mb-3 h5\">Liste des Réclamations</h1>
    </div>
{# Recherche #}
    <div class=\"card mb-4\">
        <div class=\"card-body\">
          {{ form_start(form) }}
    <div class=\"row\">
        <div class=\"col-md-4\">
            {{ form_widget(form.mots) }}
        </div>
     
        <div class=\"col-md-2\">
            {{ form_widget(form.Rechercher) }}
        </div>
    </div>
{{ form_end(form) }}

{# Trie #}
    <div class=\"card mb-4\">
        <div class=\"card-body\">
          {{ form_start(formTrie) }}
    <div class=\"row\">


     <style>
     .btn-pink {
    background-color: #FF69B4; /* Couleur rose */
    color: white;
    border: none;
}

.btn-pink:hover {
    background-color: #FF1493; /* Couleur rose plus foncée au survol */
}
     </style>



        <div class=\"col-md-2\">
{{ form_widget(formTrie.TriCroissantTitre, { 'attr': { 'class': 'btn btn-pink' } }) }}        </div>
    </div>
{{ form_end(formTrie) }}

            {% if reclamations is not empty %}
                <table class=\"table table-striped\">
                    <thead class=\"thead-dark\">
                        <tr>
                            <th>#</th>
                            <th>Titre</th>
                            <th>Description</th>
                            <th>Mail Client</th>
                            <th>Type</th>
                            <th>Date Création</th>
                            <th>Statut</th>
                            <th>Pièce jointe</th>
                            <th>Actions</th>
                            <th>Suivi</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for reclamation in reclamations %}
                            <tr>
                                <th scope=\"row\">{{ loop.index }}</th>
                                <td>{{ reclamation.Titre }}</td>
                                <td>{{ reclamation.getDescriptionRec() }}</td>
                                <td>{{ reclamation.getMailClientRec() }}</td>
                                <td>{{ reclamation.getTypeRec() }}</td>
                                <td>{{ reclamation.getDateCreationRec()|date('d/m/Y') }}</td>
                                <td>{{ reclamation.getStatusRec() }}</td>
                                <td>
                                    {% if reclamation.getFichierPJRec() %}
                                        <a href=\"{{ asset('uploads/' ~ reclamation.getFichierPJRec()) }}\" target=\"_blank\" class=\"btn btn-primary btn-sm\">Télécharger</a>
                                    {% else %}
                                        Pas de pièce jointe
                                    {% endif %}
                                </td>
                                <td>
                                    <a href=\"{{ path('app_modifier_reclamation', {'id': reclamation.id}) }}\" class=\"btn btn-warning btn-sm\">Modifier</a>
                                    <form action=\"{{ path('app_supprimer_reclamation', {'id': reclamation.id}) }}\" method=\"post\" style=\"display:inline;\">
                                        <input type=\"hidden\" name=\"_method\" value=\"DELETE\">
                                        <button type=\"submit\" class=\"btn btn-danger btn-sm\" onclick=\"return confirm('Êtes-vous sûr de vouloir supprimer cette réclamation ?');\">Supprimer</button>
                                    </form>
                                </td>
                                <td>
                                    <a href=\"{{ path('app_voir_suivi', {'id': reclamation.id}) }}\" class=\"btn btn-info btn-sm\">Voir suivi</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>
            {% else %}
                <p class=\"text-center\">Aucune réclamation trouvée.</p>
            {% endif %}
        </div>
    </div>
</div>
</body>
{# HEdhi el zinna !!! #}
 <style>
.hm-gradient {
    background-image: linear-gradient(to top,rgb(234, 146, 146) 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}
.input-group.md-form.form-sm.form-2 input {
    border: 1px solid #bdbdbd;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.input-group.md-form.form-sm.form-2 input.purple-border {
    border: 1px solid #9e9e9e;
}
.input-group.md-form.form-sm.form-2 input[type=text]:focus:not([readonly]).purple-border {
    border: 1px solidrgb(200, 104, 131);
    box-shadow: none;
}
.form-2 .input-group-addon {
    border: 1px solidrgb(200, 104, 114);
}
.danger-text {
    color: #ff3547; 
}  
.success-text {
    color: #00C851; 
}
.table-bordered.red-border, .table-bordered.red-border th, .table-bordered.red-border td {
    border: 1px solid #ff3547!important;
}        
.table.table-bordered th {
    text-align: center;
}
 </style>
{# <body class=\"hm-gradient\">
    
    <main>
        
        <!--MDB Tables-->
        <div class=\"container mt-4\">

            <div class=\"text-center darken-grey-text mb-4\">
                <h1 class=\"font-bold mt-4 mb-3 h5\">Built with Material Design for Bootstrap 4</h1>
                <a class=\"btn btn-danger btn-md\" href=\"https://mdbootstrap.com/material-design-for-bootstrap/\" target=\"_blank\">Free download<i class=\"fa fa-download pl-2\"></i></a>
            </div>

            <div class=\"card mb-4\">
                <div class=\"card-body\">
                    <!-- Grid row -->
                    <div class=\"row\">
                        <!-- Grid column -->
                        <div class=\"col-md-12\">
                            <h2 class=\"pt-3 pb-4 text-center font-bold font-up deep-purple-text\">Search within table</h2>
                            <div class=\"input-group md-form form-sm form-2 pl-0\">
                                <input class=\"form-control my-0 py-1 pl-3 purple-border\" type=\"text\" placeholder=\"Search something here...\" aria-label=\"Search\">
                                <span class=\"input-group-addon waves-effect purple lighten-2\" id=\"basic-addon1\"><a><i class=\"fa fa-search white-text\" aria-hidden=\"true\"></i></a></span>
                            </div>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <!--Table-->
                    <table class=\"table table-striped\">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Username</th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                            <tr>
                                <th scope=\"row\">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope=\"row\">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                        <!--Table body-->
                    </table>
                    <!--Table-->
                </div>
            </div>
   

        </div>
        <!--MDB Tables-->
      
    </main>
  
</body> #}



















{% endblock %}
", "reclamation/showReclamations.html.twig", "D:\\artistic-main\\artistic-main\\templates\\reclamation\\showReclamations.html.twig");
    }
}
