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

/* home/home.html.twig */
class __TwigTemplate_efbe1d32faefd10f097ce45bb35dc2ab extends Template
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
            'boutton' => [$this, 'block_boutton'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/home.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/home.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

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

        // line 5
        yield "
<header id=\"header\" class=\"header d-flex align-items-center fixed-top\">


<div class=\"header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">

 <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"logo d-flex align-items-center me-auto me-xl-0\">

 <img src=\"assets/img/up-next.png\" alt=\"\">

 </a>


 <form class=\"d-flex justify-content-center w-100 mt-1\" action=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("global_search");
        yield "\" method=\"get\">
 <div class=\"input-group\" style=\"max-width: 700px; width: 100%;\">  
     <input type=\"text\" name=\"q\" class=\"form-control border-0 small\" 
         style=\"background-color: rgb(230, 230, 233); color: #000; 
                border-radius: 25px 0 0 25px;\" 
         placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\" 
         value=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "query", [], "any", false, false, false, 24), "get", ["q"], "method", false, false, false, 24), "html", null, true);
        yield "\">
     <div class=\"input-group-append\">
         <button class=\"btn\" type=\"submit\" 
             style=\"background-color: rgb(214, 23, 23); padding: 0.375rem 1.5rem; 
                    border: none; border-radius: 0 25px 25px 0;\">
             <img src=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/img/search1.png"), "html", null, true);
        yield "\" alt=\"Search\" style=\"width: 20px; height: 20px;\">
         </button>
     </div>
 </div>
</form>


  <nav id=\"navmenu\" class=\"navmenu\">
    <ul>

   
      
      ";
        // line 41
        if (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "roles", [], "any", false, false, false, 41))) {
            // line 42
            yield "      <!-- for artist -->
     
      <li><a href=\"\">Check</a></li>
      <li><a href=\"";
            // line 45
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
            yield "\">Quiz</a></li>
      <li><a href=\"";
            // line 46
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations");
            yield "\">Mes Reclamations</a></li>
      <li><a href=\"";
            // line 47
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_indexart");
            yield "\">Reservations</a></li>
  ";
        }
        // line 49
        yield "  
  ";
        // line 50
        if (CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50))) {
            // line 51
            yield "      <!-- for client -->
      <li><a href=\"";
            // line 52
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reponse_index");
            yield "\">Quiz</a></li>
      <li><a href=\"\">Meet-up</a></li>
      <li><a href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamations");
            yield "\">Mes Reclamations</a></li>
      <li><a href=\"";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_index");
            yield "\">Reservations</a></li>
  ";
        }
        // line 57
        yield "  



     

     <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>

     <li>  ";
        // line 65
        yield from $this->unwrap()->yieldBlock('boutton', $context, $blocks);
        // line 70
        yield " </li>

        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 73
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\">
            <img class=\"img-profile rounded-circle\" src=\"";
        // line 74
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "image", [], "any", false, false, false, 74)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "image", [], "any", false, false, false, 74)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.png"), "html", null, true)));
        yield "\"  width=\"40\" height=\"40\">
        </a>

    </li>
    </ul>
  </nav>

</div>

</header>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 65
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_boutton(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutton"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "boutton"));

        // line 66
        yield "        <a 
        class=\"btn-getstarted\" 
        href=\"/";
        // line 68
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68)) ? ("logout") : ("login"));
        yield "\"
          @click=\"isOpen = false\"> ";
        // line 69
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69)) ? ("logout") : ("login"));
        yield " </a> 
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 86
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

        // line 87
        yield "

<!-- Products Section -->

<div class=\"container mt-5\">
    <!-- Top Section with Hello Message and Button -->
    
        <!-- Hello Message (Centered) -->
        <h1>
            Hello ";
        // line 96
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "firstname", [], "any", false, false, false, 96), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "user", [], "any", false, false, false, 96), "lastname", [], "any", false, false, false, 96), "html", null, true);
        yield "
            ";
        // line 97
        if ((CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "roles", [], "any", false, false, false, 97)) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97), "isVerified", [], "any", false, false, false, 97))) {
            // line 98
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/verified.png"), "html", null, true);
            yield "\" alt=\"Verified\" 
                     style=\"width: 30px; height: 30px; margin-left: 5px;\">
            ";
        }
        // line 101
        yield "        </h1>

        ";
        // line 103
        if (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 103, $this->source); })()), "user", [], "any", false, false, false, 103), "roles", [], "any", false, false, false, 103))) {
            // line 104
            yield "            <h3 class=\"text-muted\" >
                @ARTIST
       </h3>
        ";
        } elseif (CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 107
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 107, $this->source); })()), "user", [], "any", false, false, false, 107), "roles", [], "any", false, false, false, 107))) {
            // line 108
            yield "            <h3 class=\"text-muted\">
                @CLIENT
            </h3>
         ";
        }
        // line 112
        yield "


         ";
        // line 115
        if (CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115), "roles", [], "any", false, false, false, 115))) {
            // line 116
            yield "         <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin");
            yield "\" 

         class=\"btn btn-danger rounded-pill\" 
         style=\"padding: 10px 20px; font-weight: bold;\">
          Go to Dashboard Admin
          </a>
      ";
        }
        // line 123
        yield "        <!-- Go to Dashboard Admin Button (Top Right) 
        
         <a href=\"\" 

       class=\"btn btn-danger rounded-pill\" 
       style=\"padding: 10px 20px; font-weight: bold;\">
        Go to Dashboard Admin
        </a>
         -->

 

 ";
        // line 135
        if (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "roles", [], "any", false, false, false, 135))) {
            // line 136
            yield "
 <div class=\"d-flex justify-content-end mt-4\">
    <button class=\"btn btn-lg btn-primary\" onclick=\"window.location.href='produit/new'\">
        + Add Product
    </button>
 </div>
 ";
        }
        // line 143
        yield "
    

    <!-- Card Section Below -->
    <div class=\"card p-4 shadow-lg d-flex flex-row align-items-center mt-4\" style=\"height: 250px;\">
        <!-- Content of the card goes here -->
    </div>

    ";
        // line 151
        if (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 151, $this->source); })()), "user", [], "any", false, false, false, 151), "roles", [], "any", false, false, false, 151))) {
            // line 152
            yield "
 <div class=\"d-flex justify-content-end mt-4\">
    <a href=\"";
            // line 154
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_new");
            yield "\" class=\"btn btn-lg btn-primary\">  + Add event</a>
 </div> <div class=\"d-flex justify-content-end mt-4\">
    <a href=\"";
            // line 156
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("statistics");
            yield "\" class=\"btn btn-lg btn-primary\">  + View Stats</a>
 </div>
 
<!-- Card Section Below -->
<div class=\"card p-4 shadow-lg d-flex flex-column align-items-center mt-4\" style=\"height: 250px; overflow-y: auto; width: 100%;\">
    <div class=\"w-100\">
        <h5 class=\"text-center mb-3\">Liste des événements</h5>

        ";
            // line 164
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 164, $this->source); })()))) {
                // line 165
                yield "            <p class=\"text-center\">Aucun événement trouvé.</p>
        ";
            } else {
                // line 167
                yield "            <ul class=\"list-group w-100\">
    ";
                // line 168
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 168, $this->source); })()));
                $context['_iterated'] = false;
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 169
                    yield "        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "statusEvent", [], "any", false, false, false, 169) == "approved")) {
                        // line 170
                        yield "            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                ";
                        // line 171
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 171), "html", null, true);
                        yield "

                <a href=\"";
                        // line 173
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 173)]), "html", null, true);
                        yield "\" class=\"btn btn-sm btn-danger\" style=\"margin-right: 0;\">Show</a>

                <!-- Formulaire de suppression -->
                <form action=\"";
                        // line 176
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 176)]), "html", null, true);
                        yield "\" method=\"post\" style=\"display:inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 177
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 177))), "html", null, true);
                        yield "\">
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\" style=\"margin-right: 0;\">Supprimer</button>
                </form>

                <!-- Bouton \"Modifier\" -->
                <a href=\"";
                        // line 182
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 182)]), "html", null, true);
                        yield "\" class=\"btn btn-sm btn-warning\" style=\"margin-right: 0;\">Modifier</a>
            </li>
        ";
                    }
                    // line 185
                    yield "    ";
                    $context['_iterated'] = true;
                }
                if (!$context['_iterated']) {
                    // line 186
                    yield "        <li class=\"list-group-item text-center\">Aucun événement approuvé disponible.</li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 188
                yield "</ul>

        ";
            }
            // line 191
            yield "    </div>
</div>

  ";
        }
        // line 195
        yield "
";
        // line 196
        if (CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 196, $this->source); })()), "user", [], "any", false, false, false, 196), "roles", [], "any", false, false, false, 196))) {
            yield " 
 
<!-- Card Section Below -->
<div class=\"card p-4 shadow-lg d-flex flex-column align-items-center mt-4\" style=\"height: 250px; overflow-y: auto; width: 100%;\">
    <div class=\"w-100\">
        <h5 class=\"text-center mb-3\">Liste des événements</h5>

        ";
            // line 203
            if (Twig\Extension\CoreExtension::testEmpty((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 203, $this->source); })()))) {
                // line 204
                yield "            <p class=\"text-center\">Aucun événement trouvé.</p>
        ";
            } else {
                // line 206
                yield "            <ul class=\"list-group w-100\">
    ";
                // line 207
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable((isset($context["events"]) || array_key_exists("events", $context) ? $context["events"] : (function () { throw new RuntimeError('Variable "events" does not exist.', 207, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                    // line 208
                    yield "    ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["event"], "statusEvent", [], "any", false, false, false, 208) == "approved")) {
                        // line 209
                        yield "            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                ";
                        // line 210
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "title", [], "any", false, false, false, 210), "html", null, true);
                        yield "
                <a href=\"";
                        // line 211
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("event_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 211)]), "html", null, true);
                        yield "\" class=\"btn btn-sm btn-danger\">Show</a>
                <a href=\"";
                        // line 212
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("reservation_new", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["event"], "id", [], "any", false, false, false, 212)]), "html", null, true);
                        yield "\" class=\"btn btn-sm btn-warning\">Reserver!</a>
            </li>
        ";
                    }
                    // line 215
                    yield "    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 216
                yield "</ul>
        ";
            }
            // line 218
            yield "    </div>
</div>
";
        }
        // line 221
        yield "
<style>
  .btn-dashboard {
      background-color:rgb(172, 51, 15);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
  }
  .btn-dashboard:hover {
      background-color:rgb(145, 24, 24);
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
        return "home/home.html.twig";
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
        return array (  513 => 221,  508 => 218,  504 => 216,  498 => 215,  492 => 212,  488 => 211,  484 => 210,  481 => 209,  478 => 208,  474 => 207,  471 => 206,  467 => 204,  465 => 203,  455 => 196,  452 => 195,  446 => 191,  441 => 188,  434 => 186,  429 => 185,  423 => 182,  415 => 177,  411 => 176,  405 => 173,  400 => 171,  397 => 170,  394 => 169,  389 => 168,  386 => 167,  382 => 165,  380 => 164,  369 => 156,  364 => 154,  360 => 152,  358 => 151,  348 => 143,  339 => 136,  337 => 135,  323 => 123,  312 => 116,  310 => 115,  305 => 112,  299 => 108,  297 => 107,  292 => 104,  290 => 103,  286 => 101,  279 => 98,  277 => 97,  271 => 96,  260 => 87,  247 => 86,  234 => 69,  230 => 68,  226 => 66,  213 => 65,  191 => 74,  187 => 73,  182 => 70,  180 => 65,  170 => 57,  165 => 55,  161 => 54,  156 => 52,  153 => 51,  151 => 50,  148 => 49,  143 => 47,  139 => 46,  135 => 45,  130 => 42,  128 => 41,  113 => 29,  105 => 24,  96 => 18,  86 => 11,  78 => 5,  65 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}


{% block header %}

<header id=\"header\" class=\"header d-flex align-items-center fixed-top\">


<div class=\"header-container container-fluid container-xl position-relative d-flex align-items-center justify-content-between\">

 <a href=\"{{ path('home') }}\" class=\"logo d-flex align-items-center me-auto me-xl-0\">

 <img src=\"assets/img/up-next.png\" alt=\"\">

 </a>


 <form class=\"d-flex justify-content-center w-100 mt-1\" action=\"{{ path('global_search') }}\" method=\"get\">
 <div class=\"input-group\" style=\"max-width: 700px; width: 100%;\">  
     <input type=\"text\" name=\"q\" class=\"form-control border-0 small\" 
         style=\"background-color: rgb(230, 230, 233); color: #000; 
                border-radius: 25px 0 0 25px;\" 
         placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\" 
         value=\"{{ app.request.query.get('q') }}\">
     <div class=\"input-group-append\">
         <button class=\"btn\" type=\"submit\" 
             style=\"background-color: rgb(214, 23, 23); padding: 0.375rem 1.5rem; 
                    border: none; border-radius: 0 25px 25px 0;\">
             <img src=\"{{ asset('admin/img/search1.png') }}\" alt=\"Search\" style=\"width: 20px; height: 20px;\">
         </button>
     </div>
 </div>
</form>


  <nav id=\"navmenu\" class=\"navmenu\">
    <ul>

   
      
      {% if 'ROLE_ARTIST' in app.user.roles %}
      <!-- for artist -->
     
      <li><a href=\"\">Check</a></li>
      <li><a href=\"{{ path('app_reponse_index') }}\">Quiz</a></li>
      <li><a href=\"{{ path('app_reclamations') }}\">Mes Reclamations</a></li>
      <li><a href=\"{{ path('reservation_indexart') }}\">Reservations</a></li>
  {% endif %}
  
  {% if 'ROLE_CLIENT' in app.user.roles %}
      <!-- for client -->
      <li><a href=\"{{ path('app_reponse_index') }}\">Quiz</a></li>
      <li><a href=\"\">Meet-up</a></li>
      <li><a href=\"{{ path('app_reclamations') }}\">Mes Reclamations</a></li>
      <li><a href=\"{{ path('reservation_index') }}\">Reservations</a></li>
  {% endif %}
  



     

     <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>

     <li>  {% block boutton %}
        <a 
        class=\"btn-getstarted\" 
        href=\"/{{ app.user ? 'logout':'login' }}\"
          @click=\"isOpen = false\"> {{ app.user ? 'logout':'login' }} </a> 
        {% endblock %} </li>

        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"{{ path('profile') }}\">
            <img class=\"img-profile rounded-circle\" src=\"{{ app.user.image ? '/uploads/' ~ app.user.image : asset('img/user.png') }}\"  width=\"40\" height=\"40\">
        </a>

    </li>
    </ul>
  </nav>

</div>

</header>
{% endblock %}

{% block body %}


<!-- Products Section -->

<div class=\"container mt-5\">
    <!-- Top Section with Hello Message and Button -->
    
        <!-- Hello Message (Centered) -->
        <h1>
            Hello {{ app.user.firstname }} {{ app.user.lastname }}
            {% if 'ROLE_ARTIST' in app.user.roles and app.user.isVerified %}
                <img src=\"{{ asset('assets/img/verified.png') }}\" alt=\"Verified\" 
                     style=\"width: 30px; height: 30px; margin-left: 5px;\">
            {% endif %}
        </h1>

        {% if 'ROLE_ARTIST' in app.user.roles %}
            <h3 class=\"text-muted\" >
                @ARTIST
       </h3>
        {% elseif 'ROLE_CLIENT' in app.user.roles %}
            <h3 class=\"text-muted\">
                @CLIENT
            </h3>
         {% endif %}



         {% if 'ROLE_ADMIN' in app.user.roles %}
         <a href=\"{{ path('app_admin') }}\" 

         class=\"btn btn-danger rounded-pill\" 
         style=\"padding: 10px 20px; font-weight: bold;\">
          Go to Dashboard Admin
          </a>
      {% endif %}
        <!-- Go to Dashboard Admin Button (Top Right) 
        
         <a href=\"\" 

       class=\"btn btn-danger rounded-pill\" 
       style=\"padding: 10px 20px; font-weight: bold;\">
        Go to Dashboard Admin
        </a>
         -->

 

 {% if 'ROLE_ARTIST' in app.user.roles %}

 <div class=\"d-flex justify-content-end mt-4\">
    <button class=\"btn btn-lg btn-primary\" onclick=\"window.location.href='produit/new'\">
        + Add Product
    </button>
 </div>
 {% endif %}

    

    <!-- Card Section Below -->
    <div class=\"card p-4 shadow-lg d-flex flex-row align-items-center mt-4\" style=\"height: 250px;\">
        <!-- Content of the card goes here -->
    </div>

    {% if 'ROLE_ARTIST' in app.user.roles %}

 <div class=\"d-flex justify-content-end mt-4\">
    <a href=\"{{ path('event_new') }}\" class=\"btn btn-lg btn-primary\">  + Add event</a>
 </div> <div class=\"d-flex justify-content-end mt-4\">
    <a href=\"{{ path('statistics') }}\" class=\"btn btn-lg btn-primary\">  + View Stats</a>
 </div>
 
<!-- Card Section Below -->
<div class=\"card p-4 shadow-lg d-flex flex-column align-items-center mt-4\" style=\"height: 250px; overflow-y: auto; width: 100%;\">
    <div class=\"w-100\">
        <h5 class=\"text-center mb-3\">Liste des événements</h5>

        {% if events is empty %}
            <p class=\"text-center\">Aucun événement trouvé.</p>
        {% else %}
            <ul class=\"list-group w-100\">
    {% for event in events %}
        {% if event.statusEvent == 'approved' %}
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                {{ event.title }}

                <a href=\"{{ path('event_show', {'id': event.id}) }}\" class=\"btn btn-sm btn-danger\" style=\"margin-right: 0;\">Show</a>

                <!-- Formulaire de suppression -->
                <form action=\"{{ path('event_delete', {'id': event.id}) }}\" method=\"post\" style=\"display:inline;\">
                    <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ event.id) }}\">
                    <button type=\"submit\" class=\"btn btn-sm btn-danger\" style=\"margin-right: 0;\">Supprimer</button>
                </form>

                <!-- Bouton \"Modifier\" -->
                <a href=\"{{ path('event_edit', {'id': event.id}) }}\" class=\"btn btn-sm btn-warning\" style=\"margin-right: 0;\">Modifier</a>
            </li>
        {% endif %}
    {% else %}
        <li class=\"list-group-item text-center\">Aucun événement approuvé disponible.</li>
    {% endfor %}
</ul>

        {% endif %}
    </div>
</div>

  {% endif %}

{% if 'ROLE_CLIENT' in app.user.roles %} 
 
<!-- Card Section Below -->
<div class=\"card p-4 shadow-lg d-flex flex-column align-items-center mt-4\" style=\"height: 250px; overflow-y: auto; width: 100%;\">
    <div class=\"w-100\">
        <h5 class=\"text-center mb-3\">Liste des événements</h5>

        {% if events is empty %}
            <p class=\"text-center\">Aucun événement trouvé.</p>
        {% else %}
            <ul class=\"list-group w-100\">
    {% for event in events %}
    {% if event.statusEvent == 'approved' %}
            <li class=\"list-group-item d-flex justify-content-between align-items-center\">
                {{ event.title }}
                <a href=\"{{ path('event_show', {'id': event.id}) }}\" class=\"btn btn-sm btn-danger\">Show</a>
                <a href=\"{{ path('reservation_new', {'id': event.id}) }}\" class=\"btn btn-sm btn-warning\">Reserver!</a>
            </li>
        {% endif %}
    {% endfor %}
</ul>
        {% endif %}
    </div>
</div>
{% endif %}

<style>
  .btn-dashboard {
      background-color:rgb(172, 51, 15);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
  }
  .btn-dashboard:hover {
      background-color:rgb(145, 24, 24);
  }
</style>


{% endblock %}", "home/home.html.twig", "D:\\artistic-main\\artistic-main\\templates\\home\\home.html.twig");
    }
}
