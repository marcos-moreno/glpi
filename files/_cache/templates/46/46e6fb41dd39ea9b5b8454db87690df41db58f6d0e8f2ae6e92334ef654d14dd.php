<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* components/itilobject/actors/assign_to_me.html.twig */
class __TwigTemplate_dec8b0467aba74705133fee3262d07a11764be4d8ad8265225a2b215597745a0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<button type=\"submit\"
        form=\"addme_as_";
        // line 6
        echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
        echo "_";
        echo twig_escape_filter($this->env, ($context["main_rand"] ?? null), "html", null, true);
        echo "\"
        name=\"id\"
        value=\"";
        // line 8
        echo twig_escape_filter($this->env, (($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 8)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["id"] ?? null) : null), "html", null, true);
        echo "\"
        class=\"btn btn-icon btn-sm btn-ghost-secondary float-end mt-1 ms-1\"
        title=\"";
        // line 10
        echo twig_escape_filter($this->env, __("Associate myself"), "html", null, true);
        echo "\"
        data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
   <i class=\"fas fa-male\"></i>
</button>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/actors/assign_to_me.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 10,  48 => 8,  41 => 6,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/actors/assign_to_me.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\actors\\assign_to_me.html.twig");
    }
}
