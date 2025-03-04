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

/* includes/footer.html.twig */
class __TwigTemplate_b29f1a67f1ba2dac3ad58d81461662de extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "includes/footer.html.twig"));

        // line 1
        yield "<footer id=\"footer\" class=\"footer\">

<div class=\"container footer-top\">
  <div class=\"row gy-4\">
    <div class=\"col-lg-4 col-md-6 footer-about\">
      


    </div>

  </div>
</div>

<div class=\"container copyright text-center mt-4\">

  <p>© <span>Copyright</span> <strong class=\"px-1 sitename\"> <a href=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("view");
        yield "\" > Up-next </a> </strong> <span>All Rights Reserved</span></p>

  

 
</div>

</footer>";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "includes/footer.html.twig";
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
        return array (  65 => 16,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<footer id=\"footer\" class=\"footer\">

<div class=\"container footer-top\">
  <div class=\"row gy-4\">
    <div class=\"col-lg-4 col-md-6 footer-about\">
      


    </div>

  </div>
</div>

<div class=\"container copyright text-center mt-4\">

  <p>© <span>Copyright</span> <strong class=\"px-1 sitename\"> <a href=\"{{ path('view') }}\" > Up-next </a> </strong> <span>All Rights Reserved</span></p>

  

 
</div>

</footer>", "includes/footer.html.twig", "D:\\artistic-main\\artistic-main\\templates\\includes\\footer.html.twig");
    }
}
