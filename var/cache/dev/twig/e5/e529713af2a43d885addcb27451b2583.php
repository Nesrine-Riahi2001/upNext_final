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

/* home/search_result.html.twig */
class __TwigTemplate_482c79d37b1980442dc1f94f7368eb3b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/search_result.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/search_result.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/search_result.html.twig", 1);
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
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("home");
        yield "\" class=\"logo d-flex align-items-center me-auto me-xl-0\">

 <img src=\"assets/img/up-next.png\" alt=\"\">

 </a>




<form class=\"d-flex justify-content-center w-100 mt-1\" action=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("global_search");
        yield "\" method=\"get\">
 <div class=\"input-group\" style=\"max-width: 700px; width: 100%;\">  
     <input type=\"text\" name=\"q\" class=\"form-control border-0 small\" 
         style=\"background-color: rgb(230, 230, 233); color: #000; 
                border-radius: 25px 0 0 25px;\" 
         placeholder=\"Search for...\" aria-label=\"Search\" aria-describedby=\"basic-addon2\" 
         value=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "request", [], "any", false, false, false, 28), "query", [], "any", false, false, false, 28), "get", ["q"], "method", false, false, false, 28), "html", null, true);
        yield "\">
     <div class=\"input-group-append\">
         <button class=\"btn\" type=\"submit\" 
             style=\"background-color: rgb(214, 23, 23); padding: 0.375rem 1.5rem; 
                    border: none; border-radius: 0 25px 25px 0;\">
             <img src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/img/search1.png"), "html", null, true);
        yield "\" alt=\"Search\" style=\"width: 20px; height: 20px;\">
         </button>
     </div>
 </div>
</form>
<nav id=\"navmenu\" class=\"navmenu\">
    <ul>

   
      
      ";
        // line 43
        if (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "roles", [], "any", false, false, false, 43))) {
            // line 44
            yield "      <!-- for artist -->
     
      <li><a href=\"\">Check</a></li>
      <li><a href=\"\"></a></li>
  ";
        }
        // line 49
        yield "  
  ";
        // line 50
        if (CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 50, $this->source); })()), "user", [], "any", false, false, false, 50), "roles", [], "any", false, false, false, 50))) {
            // line 51
            yield "      <!-- for client -->
      <li><a href=\"\">Quiz</a></li>
      <li><a href=\"\">Meet-up</a></li>
      <li><a href=\"\">Reclamations</a></li>
  ";
        }
        // line 56
        yield "  



     

     <i class=\"mobile-nav-toggle d-xl-none bi bi-list\"></i>

     <li>  ";
        // line 64
        yield from $this->unwrap()->yieldBlock('boutton', $context, $blocks);
        // line 69
        yield " </li>

        <li class=\"nav-item\">
        <a class=\"nav-link\" href=\"";
        // line 72
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
        yield "\">
            <img class=\"img-profile rounded-circle\" src=\"";
        // line 73
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "image", [], "any", false, false, false, 73)) ? ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(("/uploads/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 73, $this->source); })()), "user", [], "any", false, false, false, 73), "image", [], "any", false, false, false, 73)), "html", null, true)) : ($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/user.png"), "html", null, true)));
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

    // line 64
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

        // line 65
        yield "        <a 
        class=\"btn-getstarted\" 
        href=\"/";
        // line 67
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67)) ? ("logout") : ("login"));
        yield "\"
          @click=\"isOpen = false\"> ";
        // line 68
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68)) ? ("logout") : ("login"));
        yield " </a> 
        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 85
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

        // line 86
        yield "
<style>
    /* Center the Table */
    .table-container {
        max-width: 1300px;  
        margin: 20px auto; 
        padding: 25px;
        background: white;
        border-radius: 12px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
    }

    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 15px;
        border-radius: 8px;
        overflow: hidden;
    }

    /* Table Header - Red */
    thead {
        background-color: #d9534f; /* Bootstrap 'danger' red */
        color: #d9534f;
        text-transform: uppercase;
        font-weight: bold;
    }

    th {
        padding: 12px;
        text-align: center;
    }

    /* Table Body */
    td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    /* Alternate Row Colors */
    tbody tr:nth-child(even) {
        background-color: #f5f8ff;
    }

    /* Hover Effect */
    tbody tr:hover {
        background-color: rgba(76, 127, 255, 0.15);
        transition: 0.3s;
    }

   

    /* Action Buttons */
    .action-btn {
        padding: 6px 12px;
        font-size: 14px;
        text-decoration: none;
        border-radius: 5px;
        transition: 0.2s;
    }

    .view-btn {
        background-color:rgb(242, 55, 55);
        color: white;
    }

    .view-btn:hover {
        background-color:rgb(134, 0, 0);
    }

</style>


<div class=\"container text-center\">
    <h2 class=\"mt-3\">Search Results for \"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 162, $this->source); })()), "html", null, true);
        yield "\"</h2>
</div>


";
        // line 166
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 166, $this->source); })())) > 0)) {
            // line 167
            yield "    <div class=\"table-container\">
        <h3>Users</h3>
        <table class=\"table table-hover text-center\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Verification</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 182, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 183
                yield "                    ";
                if (!CoreExtension::inFilter("ROLE_ADMIN", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 183))) {
                    yield " ";
                    // line 184
                    yield "                        <tr class=\"";
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 184)) ? ("") : (""));
                    yield "\">
                            <td>";
                    // line 185
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 185), "html", null, true);
                    yield "</td>
                            <td>";
                    // line 186
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 186), "html", null, true);
                    yield "</td>
                            <td>";
                    // line 187
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 187), "html", null, true);
                    yield "</td>
                            <td>";
                    // line 188
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 188), "html", null, true);
                    yield "</td>
                            <td>";
                    // line 189
                    yield ((CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 189))) ? ("Artist") : ("Client"));
                    yield "</td>
                            <td>";
                    // line 190
                    yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isActive", [], "any", false, false, false, 190)) ? ("Active ✅") : ("Not active ⛔"));
                    yield "</td>
                            
                            ";
                    // line 192
                    if (CoreExtension::inFilter("ROLE_ARTIST", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 192))) {
                        // line 193
                        yield "                                <td>";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 193)) ? ("Verified ✔️") : ("Not Verified ➖"));
                        yield "</td>
                            ";
                    }
                    // line 195
                    yield "
                            ";
                    // line 196
                    if (CoreExtension::inFilter("ROLE_CLIENT", CoreExtension::getAttribute($this->env, $this->source, $context["user"], "roles", [], "any", false, false, false, 196))) {
                        // line 197
                        yield "                        <td>";
                        yield ((CoreExtension::getAttribute($this->env, $this->source, $context["user"], "isVerified", [], "any", false, false, false, 197)) ? (" ------") : ("------"));
                        yield "</td>
                    ";
                    }
                    // line 199
                    yield "
                    ";
                    // line 200
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200) && ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200), "firstname", [], "any", false, false, false, 200) == (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 200, $this->source); })())) || (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 200, $this->source); })()), "user", [], "any", false, false, false, 200), "lastname", [], "any", false, false, false, 200) == (isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 200, $this->source); })()))))) {
                        // line 201
                        yield "                     ";
                        // line 202
                        yield "                        <script>
                                window.location.href = \"";
                        // line 203
                        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
                        yield "\";
                            </script>
                        ";
                    }
                    // line 205
                    yield "   
            
                            <td>
                                <a href=\"";
                    // line 208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile_view", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 208)]), "html", null, true);
                    yield "\" class=\"action-btn view-btn\">View Profile</a>
                            </td>
                        </tr>
                    ";
                }
                // line 212
                yield "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['user'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            yield "

            </tbody>
        </table>
        
        <!-- Pagination controls -->
        <div class=\"pagination\">
            ";
            // line 220
            yield $this->env->getRuntime('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationRuntime')->render($this->env, (isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 220, $this->source); })()));
            yield "
        </div>
    </div>

";
        } else {
            // line 225
            yield "    <p class=\"text-center mt-3\">No users found for \"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 225, $this->source); })()), "html", null, true);
            yield "\".</p>
    <div class=\"container text-center\">
        <img src=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("admin/img/des.webp"), "html", null, true);
            yield "\" class=\"img-fluid mt-3\" alt=\"No Results\">
    </div>
";
        }
        // line 230
        yield "

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
        return "home/search_result.html.twig";
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
        return array (  465 => 230,  459 => 227,  453 => 225,  445 => 220,  436 => 213,  430 => 212,  423 => 208,  418 => 205,  412 => 203,  409 => 202,  407 => 201,  405 => 200,  402 => 199,  396 => 197,  394 => 196,  391 => 195,  385 => 193,  383 => 192,  378 => 190,  374 => 189,  370 => 188,  366 => 187,  362 => 186,  358 => 185,  353 => 184,  349 => 183,  345 => 182,  328 => 167,  326 => 166,  319 => 162,  241 => 86,  228 => 85,  215 => 68,  211 => 67,  207 => 65,  194 => 64,  172 => 73,  168 => 72,  163 => 69,  161 => 64,  151 => 56,  144 => 51,  142 => 50,  139 => 49,  132 => 44,  130 => 43,  117 => 33,  109 => 28,  100 => 22,  88 => 13,  78 => 5,  65 => 4,  42 => 1,);
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
      <li><a href=\"\"></a></li>
  {% endif %}
  
  {% if 'ROLE_CLIENT' in app.user.roles %}
      <!-- for client -->
      <li><a href=\"\">Quiz</a></li>
      <li><a href=\"\">Meet-up</a></li>
      <li><a href=\"\">Reclamations</a></li>
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

<style>
    /* Center the Table */
    .table-container {
        max-width: 1300px;  
        margin: 20px auto; 
        padding: 25px;
        background: white;
        border-radius: 12px;
        box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.15);
    }

    /* Table Styling */
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 15px;
        border-radius: 8px;
        overflow: hidden;
    }

    /* Table Header - Red */
    thead {
        background-color: #d9534f; /* Bootstrap 'danger' red */
        color: #d9534f;
        text-transform: uppercase;
        font-weight: bold;
    }

    th {
        padding: 12px;
        text-align: center;
    }

    /* Table Body */
    td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }

    /* Alternate Row Colors */
    tbody tr:nth-child(even) {
        background-color: #f5f8ff;
    }

    /* Hover Effect */
    tbody tr:hover {
        background-color: rgba(76, 127, 255, 0.15);
        transition: 0.3s;
    }

   

    /* Action Buttons */
    .action-btn {
        padding: 6px 12px;
        font-size: 14px;
        text-decoration: none;
        border-radius: 5px;
        transition: 0.2s;
    }

    .view-btn {
        background-color:rgb(242, 55, 55);
        color: white;
    }

    .view-btn:hover {
        background-color:rgb(134, 0, 0);
    }

</style>


<div class=\"container text-center\">
    <h2 class=\"mt-3\">Search Results for \"{{ searchTerm }}\"</h2>
</div>


{% if users|length > 0 %}
    <div class=\"table-container\">
        <h3>Users</h3>
        <table class=\"table table-hover text-center\">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Email</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Role</th>
                    <th>Status</th>
                    <th>Verification</th>
                </tr>
            </thead>
            <tbody>
                {% for user in users %}
                    {% if 'ROLE_ADMIN' not in user.roles %} {# Exclude Admins #}
                        <tr class=\"{{ user.isActive ? '' : '' }}\">
                            <td>{{ user.id }}</td>
                            <td>{{ user.email }}</td>
                            <td>{{ user.firstname }}</td>
                            <td>{{ user.lastname }}</td>
                            <td>{{ 'ROLE_ARTIST' in user.roles ? 'Artist' : 'Client' }}</td>
                            <td>{{ user.isActive ? 'Active ✅' : 'Not active ⛔' }}</td>
                            
                            {% if 'ROLE_ARTIST' in user.roles %}
                                <td>{{ user.isVerified ? 'Verified ✔️' : 'Not Verified ➖' }}</td>
                            {% endif %}

                            {% if 'ROLE_CLIENT' in user.roles %}
                        <td>{{ user.isVerified ?' ------' : '------' }}</td>
                    {% endif %}

                    {% if app.user and (app.user.firstname == searchTerm or app.user.lastname == searchTerm) %}
                     {# If the logged-in user searches for their own name, redirect them to their profile page #}
                        <script>
                                window.location.href = \"{{ path('profile') }}\";
                            </script>
                        {% endif %}   
            
                            <td>
                                <a href=\"{{ path('profile_view', { id: user.id }) }}\" class=\"action-btn view-btn\">View Profile</a>
                            </td>
                        </tr>
                    {% endif %}
                {% endfor %}


            </tbody>
        </table>
        
        <!-- Pagination controls -->
        <div class=\"pagination\">
            {{ knp_pagination_render(users) }}
        </div>
    </div>

{% else %}
    <p class=\"text-center mt-3\">No users found for \"{{ searchTerm }}\".</p>
    <div class=\"container text-center\">
        <img src=\"{{ asset('admin/img/des.webp') }}\" class=\"img-fluid mt-3\" alt=\"No Results\">
    </div>
{% endif %}


{% endblock %}

", "home/search_result.html.twig", "D:\\artistic-main\\artistic-main\\templates\\home\\search_result.html.twig");
    }
}
