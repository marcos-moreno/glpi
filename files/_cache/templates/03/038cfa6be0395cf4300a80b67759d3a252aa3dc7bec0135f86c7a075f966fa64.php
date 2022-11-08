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

/* components/form/fields_macros.html.twig */
class __TwigTemplate_c4196af2bd0cff6831335df0d5a1f2c7a51c0d2229eaf38bc9cd26913cfba7bf extends Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "
";
        // line 53
        echo "
";
        // line 70
        echo "
";
        // line 82
        echo "

";
        // line 103
        echo "

";
        // line 121
        echo "

";
        // line 150
        echo "

";
        // line 175
        echo "

";
        // line 190
        echo "

";
        // line 271
        echo "
";
        // line 298
        echo "
";
        // line 331
        echo "
";
        // line 365
        echo "
";
        // line 393
        echo "
";
        // line 406
        echo "
";
        // line 411
        echo "
";
        // line 433
        echo "
";
        // line 458
        echo "
";
        // line 486
        echo "
";
        // line 498
        echo "
";
        // line 519
        echo "
";
        // line 541
        echo "
";
        // line 562
        echo "
";
        // line 582
        echo "
";
        // line 605
        echo "
";
        // line 616
        echo "
";
        // line 636
        echo "
";
        // line 657
        echo "
";
        // line 689
        echo "
";
        // line 700
        echo "
";
        // line 735
        echo "
";
        // line 746
        echo "
";
        // line 756
        echo "

";
        // line 774
        echo "

";
        // line 833
        echo "

";
        // line 864
        echo "

";
    }

    // line 34
    public function macro_largeTitle($__label__ = null, $__icon__ = "", $__first__ = false, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "first" => $__first__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 35
            echo "   ";
            $context["margins"] = "mt-3";
            // line 36
            echo "   ";
            if (($context["first"] ?? null)) {
                // line 37
                echo "      ";
                $context["margins"] = "mt-n2";
                // line 38
                echo "   ";
            }
            // line 39
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 40
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-3\">
         <h4 class=\"card-title ";
            // line 42
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 43
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 44
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 45
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 48
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 54
    public function macro_smallTitle($__label__ = null, $__icon__ = "", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "icon" => $__icon__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 55
            echo "   ";
            $context["margins"] = "mt-2 mb-2";
            // line 56
            echo "
   <div class=\"card border-0 shadow-none p-0 m-0 ";
            // line 57
            echo twig_escape_filter($this->env, ($context["margins"] ?? null), "html", null, true);
            echo "\">
      <div class=\"card-header mb-1 p-0 ps-3\">
         <h4 class=\"card-subtitle ";
            // line 59
            echo ((twig_length_filter($this->env, ($context["icon"] ?? null))) ? ("ms-4") : (""));
            echo "\">
            ";
            // line 60
            if (twig_length_filter($this->env, ($context["icon"] ?? null))) {
                // line 61
                echo "               <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                  <i class=\"fa-2x ";
                // line 62
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo "\"></i>
               </div>
            ";
            }
            // line 65
            echo "            ";
            echo twig_escape_filter($this->env, ($context["label"] ?? null), "html", null, true);
            echo "
         </h4>
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 71
    public function macro_autoNameField($__name__ = null, $__item__ = null, $__label__ = "", $__withtemplate__ = null, $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "item" => $__item__,
            "label" => $__label__,
            "withtemplate" => $__withtemplate__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 72
            echo "   ";
            $context["tpl_value"] = (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)), 0))) ? (twig_get_attribute($this->env, $this->source, ($context["option"] ?? null), "value", [], "any", false, false, false, 72)) : ($this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_0 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0[($context["name"] ?? null)] ?? null) : null))));
            // line 73
            echo "   ";
            $context["tplmark"] = "";
            // line 74
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isTemplate", [], "method", false, false, false, 74)) {
                echo " ";
                // line 75
                echo "      ";
                $context["tplmark"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getAutofillMark", [0 => ($context["name"] ?? null), 1 => ["withtemplate" => ($context["withtemplate"] ?? null)], 2 => ($context["tpl_value"] ?? null)], "method", false, false, false, 75);
                // line 76
                echo "   ";
            }
            // line 77
            echo "   ";
            $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("autoName", [0 => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_1 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["name"] ?? null)] ?? null) : null)), 1 => ($context["name"] ?? null), 2 => (0 === twig_compare(($context["withtemplate"] ?? null), 2)), 3 => twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 77), 4 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 77)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["entities_id"] ?? null) : null)]);
            // line 78
            echo "   ";
            $context["label"] = twig_sprintf(__("%1\$s%2\$s"), ($context["label"] ?? null), ($context["tplmark"] ?? null));
            // line 79
            echo "
   ";
            // line 80
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 80, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 84
    public function macro_textField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 85
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "text"], ($context["options"] ?? null));
            // line 86
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 86), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 86)) {
                // line 87
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 88
                echo "   ";
            }
            // line 89
            echo "
   ";
            // line 90
            ob_start(function () { return ''; });
            // line 91
            echo "      <input type=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "type", [], "any", false, false, false, 91), "html", null, true);
            echo "\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 93
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 94
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlenght", [], "any", false, false, false, 94)) ? (print (twig_escape_filter($this->env, ("maxlenght=" . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "maxlenght", [], "any", false, false, false, 94)), "html", null, true))) : (print ("")));
            echo "
             ";
            // line 95
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 95)) ? ("readonly") : (""));
            echo "
             ";
            // line 96
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 96)) ? ("disabled") : (""));
            echo "
             ";
            // line 97
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 97)) ? ("multiple") : (""));
            echo " ";
            // line 98
            echo "             ";
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 98)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 100
            echo "
   ";
            // line 101
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 101, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 105
    public function macro_checkboxField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 106
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 106), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 106)) {
                // line 107
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 108
                echo "   ";
            }
            // line 109
            echo "
   ";
            // line 110
            ob_start(function () { return ''; });
            // line 111
            echo "      <input type=\"hidden\"   name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"0\" />
      <input type=\"checkbox\" name=\"";
            // line 112
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"1\" class=\"form-check-input\" id=\"%id%\"
             ";
            // line 113
            echo (((0 === twig_compare(($context["value"] ?? null), 1))) ? ("checked") : (""));
            echo "
             ";
            // line 114
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 114)) ? ("readonly") : (""));
            echo "
             ";
            // line 115
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 115)) ? ("required") : (""));
            echo "
             ";
            // line 116
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 116)) ? ("disabled") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 118
            echo "
   ";
            // line 119
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 119, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 123
    public function macro_sliderField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 124
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 124), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 124)) {
                // line 125
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true],                 // line 127
($context["options"] ?? null));
                // line 128
                echo "   ";
            }
            // line 129
            echo "   ";
            $context["options"] = twig_array_merge(["no_value" => 0, "yes_value" => 1],             // line 132
($context["options"] ?? null));
            // line 133
            echo "
   ";
            // line 134
            ob_start(function () { return ''; });
            // line 135
            echo "      <label class=\"form-check form-switch pt-2\">
         <input type=\"hidden\"   name=\"";
            // line 136
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_value", [], "any", false, false, false, 136), "html", null, true);
            echo "\" />
         <input type=\"checkbox\" name=\"";
            // line 137
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "yes_value", [], "any", false, false, false, 137), "html", null, true);
            echo "\" class=\"form-check-input\" id=\"%id%\"
                ";
            // line 138
            echo (((0 === twig_compare(($context["value"] ?? null), 1))) ? ("checked") : (""));
            echo "
                ";
            // line 139
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 139)) ? ("readonly") : (""));
            echo "
                ";
            // line 140
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 140)) ? ("required") : (""));
            echo "
                ";
            // line 141
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 141)) ? ("disabled") : (""));
            echo " />
         ";
            // line 142
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 142)) {
                // line 143
                echo "            <span class=\"form-check-label\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label2", [], "any", false, false, false, 143), "html", null, true);
                echo "</span>
         ";
            }
            // line 145
            echo "      </label>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 147
            echo "
   ";
            // line 148
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 148, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 152
    public function macro_numberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 153
            echo "   ";
            if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 153), "any")) && (0 !== twig_compare(twig_round(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 153), 0, "floor"), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 153))))) {
                // line 154
                echo "      ";
                // line 155
                echo "      ";
                $context["value"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::formatNumber", [0 => ($context["value"] ?? null), 1 => true]);
                // line 156
                echo "   ";
            }
            // line 157
            echo "
   ";
            // line 158
            if ((0 === twig_compare(($context["value"] ?? null), ""))) {
                // line 159
                echo "      ";
                $context["value"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 159)) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 159)) : (0));
                // line 160
                echo "   ";
            }
            // line 161
            echo "
   ";
            // line 162
            ob_start(function () { return ''; });
            // line 163
            echo "      <input type=\"number\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 165
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
         ";
            // line 166
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 166)) ? ("readonly") : (""));
            echo "
         ";
            // line 167
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 167)) ? ("disabled") : (""));
            echo "
         ";
            // line 168
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 168)) ? ("required") : (""));
            echo "
         ";
            // line 169
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", true, true, false, 169)) {
                echo "min=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "min", [], "any", false, false, false, 169), "html", null, true);
                echo "\"";
            }
            // line 170
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", true, true, false, 170)) {
                echo "max=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "max", [], "any", false, false, false, 170), "html", null, true);
                echo "\"";
            }
            // line 171
            echo "         ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", true, true, false, 171)) {
                echo "step=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "step", [], "any", false, false, false, 171), "html", null, true);
                echo "\"";
            }
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 173
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 173, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 177
    public function macro_readOnlyField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 178
            echo "   ";
            $context["options"] = twig_array_merge(($context["options"] ?? null), ["readonly" => true]);
            // line 179
            echo "   ";
            ob_start(function () { return ''; });
            // line 180
            echo "      <span class=\"form-control\" readonly>
         ";
            // line 181
            if ((0 === twig_compare(twig_length_filter($this->env, ($context["value"] ?? null)), 0))) {
                // line 182
                echo "            &nbsp;
         ";
            } else {
                // line 184
                echo "            ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
                echo "
         ";
            }
            // line 186
            echo "      </span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 188
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 188, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 192
    public function macro_textareaField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 193
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "enable_richtext" => false, "enable_images" => true, "enable_fileupload" => false, "enable_mentions" => false, "entities_id" => $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity"), "uploads" => []],             // line 201
($context["options"] ?? null));
            // line 202
            echo "
   ";
            // line 203
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 203), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 203)) {
                // line 204
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 205
                echo "   ";
            }
            // line 206
            echo "   ";
            $context["id"] = (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 206)), 0))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 206)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 206))));
            // line 207
            echo "
   ";
            // line 208
            ob_start(function () { return ''; });
            // line 209
            echo "      ";
            // line 210
            echo "      <textarea class=\"form-control\" id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" rows=\"3\"
                style=\"width: 100%;\"
                ";
            // line 212
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 212)) ? ("disabled") : (""));
            echo "
                ";
            // line 213
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 213)) ? ("readonly") : (""));
            echo "
                ";
            // line 214
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 214)) ? ("required") : (""));
            echo ">";
            ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 214)) ? (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getSafeHtml(($context["value"] ?? null))))) : (print (twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true))));
            echo "</textarea>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 216
            echo "
   ";
            // line 217
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 217)) {
                // line 218
                echo "      ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::initEditorSystem", [0 =>                 // line 219
($context["id"] ?? null), 1 => twig_get_attribute($this->env, $this->source,                 // line 220
($context["options"] ?? null), "rand", [], "any", false, false, false, 220), 2 => true, 3 => ((twig_get_attribute($this->env, $this->source,                 // line 222
($context["options"] ?? null), "disabled", [], "any", true, true, false, 222)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 222), false)) : (false))]);
                // line 224
                echo "   ";
            }
            // line 225
            echo "
   ";
            // line 226
            $context["add_html"] = "";
            // line 227
            echo "   ";
            if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 227) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 227))) {
                // line 228
                echo "      ";
                ob_start(function () { return ''; });
                // line 229
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ["editor_id" =>                 // line 230
($context["id"] ?? null), "multiple" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 232
($context["options"] ?? null), "uploads", [], "any", false, false, false, 232), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 233
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 233), "isMandatoryField", [0 => "_documents_id"], "method", false, false, false, 233)]]);
                // line 235
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 236
                echo "   ";
            } elseif (((( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 236) &&  !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_fileupload", [], "any", false, false, false, 236)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_richtext", [], "any", false, false, false, 236)) && twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_images", [], "any", false, false, false, 236))) {
                // line 237
                echo "      ";
                ob_start(function () { return ''; });
                // line 238
                echo "         ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ["editor_id" =>                 // line 239
($context["id"] ?? null), "name" =>                 // line 240
($context["name"] ?? null), "only_uploaded_files" => true, "uploads" => twig_get_attribute($this->env, $this->source,                 // line 242
($context["options"] ?? null), "uploads", [], "any", false, false, false, 242), "required" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 243
($context["options"] ?? null), "fields_template", [], "any", false, false, false, 243), "isMandatoryField", [0 => "_documents_id"], "method", false, false, false, 243)]]);
                // line 245
                echo "      ";
                $context["add_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 246
                echo "   ";
            }
            // line 247
            echo "
   ";
            // line 248
            if ((0 !== twig_compare(($context["add_html"] ?? null), ""))) {
                // line 249
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", true, true, false, 249)) {
                    // line 250
                    echo "         ";
                    $context["add_html"] = (($context["add_html"] ?? null) . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 250));
                    // line 251
                    echo "      ";
                }
                // line 252
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["add_field_html" => ($context["add_html"] ?? null)]);
                // line 253
                echo "   ";
            }
            // line 254
            echo "
   ";
            // line 255
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 255, $context, $this->getSourceContext());
            echo "
   ";
            // line 256
            if ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "enable_mentions", [], "any", false, false, false, 256) && $this->extensions['Glpi\Application\View\Extension\ConfigExtension']->config("use_notifications"))) {
                // line 257
                echo "      <script>
         \$(
            function() {
               const user_mention = new GLPI.RichText.UserMention(
                  tinymce.get('";
                // line 261
                echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
                echo "'),
                  ";
                // line 262
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 262), "html", null, true);
                echo ",
                  '";
                // line 263
                echo twig_escape_filter($this->env, Session::getNewIDORToken("User", ["right" => "all", "entity_restrict" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "entities_id", [], "any", false, false, false, 263)]), "html", null, true);
                echo "'
               );
               user_mention.register();
            }
         )
      </script>
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 272
    public function macro_flatpickrHtmlInput($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 273
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 273), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 273)) {
                // line 274
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 275
                echo "   ";
            }
            // line 276
            echo "
   ";
            // line 277
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "checkIsExpired", [], "any", false, false, false, 277)) {
                // line 278
                echo "      ";
                if ((-1 === twig_compare(twig_date_format_filter($this->env, ($context["value"] ?? null), "Y-m-d H:i:s"), twig_date_format_filter($this->env, "now", "Y-m-d H:i:s")))) {
                    // line 279
                    echo "         ";
                    $context["class"] = "warn";
                    // line 280
                    echo "      ";
                }
                // line 281
                echo "   ";
            } else {
                // line 282
                echo "      ";
                $context["class"] = "";
                // line 283
                echo "   ";
            }
            // line 284
            echo "
   <div class=\"input-group flex-grow-1 flatpickr\" id=\"";
            // line 285
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 285), "html", null, true);
            echo "\">
      ";
            // line 287
            echo "      ";
            // line 288
            echo "      <input type=\"text\" class=\"form-control rounded-start ps-2 ";
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" data-input
             name=\"";
            // line 289
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
             ";
            // line 290
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 290)) ? ("required") : (""));
            echo "
             ";
            // line 291
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 291)) ? ("readonly") : (""));
            echo "
             ";
            // line 292
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 292)) ? ("disabled") : (""));
            echo " />
      ";
            // line 293
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 293)) {
                // line 294
                echo "         <i class=\"input-group-text far fa-calendar-alt\" data-toggle role=\"button\"></i>
      ";
            }
            // line 296
            echo "   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 299
    public function macro_dateField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 300
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 301
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 301))], ($context["options"] ?? null));
            // line 302
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 303
            echo "
   ";
            // line 304
            ob_start(function () { return ''; });
            // line 305
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 305, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$(\"#";
            // line 308
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 308), "html", null, true);
            echo "\").flatpickr({
            wrap: true,
            altInput: true,
            altFormat: '";
            // line 311
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", [0 => "js"]), "html", null, true);
            echo "',
            dateFormat: 'Y-m-d',
            enableTime: false,
            weekNumbers: true,
            allowInput: ";
            // line 315
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 315)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 316
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 316)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale(\"";
            // line 317
            echo twig_escape_filter($this->env, (($__internal_compile_3 = ($context["locale"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["language"] ?? null) : null), "html", null, true);
            echo "\", \"";
            echo twig_escape_filter($this->env, (($__internal_compile_4 = ($context["locale"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["region"] ?? null) : null), "html", null, true);
            echo "\"),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 328
            echo "
   ";
            // line 329
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 329, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 332
    public function macro_datetimeField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 333
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 334
            echo "   ";
            $context["options"] = twig_array_merge(["id" => (($this->extensions['Twig\Extra\String\StringExtension']->createSlug(($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 334))], ($context["options"] ?? null));
            // line 335
            echo "   ";
            $context["locale"] = $this->extensions['Glpi\Application\View\Extension\I18nExtension']->getCurrentLocale();
            // line 336
            echo "
   ";
            // line 337
            ob_start(function () { return ''; });
            // line 338
            echo "      ";
            echo twig_call_macro($macros["_self"], "macro_flatpickrHtmlInput", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 338, $context, $this->getSourceContext());
            echo "
      <script>
      \$(function() {
         \$('#";
            // line 341
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 341), "html", null, true);
            echo "').flatpickr({
            altInput: true,
            dateFormat: 'Y-m-d H:i:S',
            altFormat: '";
            // line 344
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Toolbox::getDateFormat", [0 => "js"]), "html", null, true);
            echo " H:i:S',
            enableTime: true,
            wrap: true,
            enableSeconds: true,
            weekNumbers: true,
            allowInput: ";
            // line 349
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 349)) ? ("false") : ("true"));
            echo ",
            clickOpens: ";
            // line 350
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 350)) ? ("false") : ("true"));
            echo ",
            locale: getFlatPickerLocale('";
            // line 351
            echo twig_escape_filter($this->env, (($__internal_compile_5 = ($context["locale"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["language"] ?? null) : null), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["locale"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["region"] ?? null) : null), "html", null, true);
            echo "'),
            onClose(dates, currentdatestring, picker) {
               picker.setDate(picker.altInput.value, true, picker.config.altFormat)
            },
            plugins: [
               CustomFlatpickrButtons()
            ]
         });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 362
            echo "
   ";
            // line 363
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 363, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 366
    public function macro_colorField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 367
            echo "   ";
            ob_start(function () { return ''; });
            // line 368
            echo "      <input id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 370
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 371
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 371)) ? ("readonly") : (""));
            echo "
         ";
            // line 372
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 372)) ? ("disabled") : (""));
            echo "
         ";
            // line 373
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 373)) ? ("required") : (""));
            echo " />
      <script>
      \$(function() {
        \$(\"#%id%\").spectrum({
            showInput: true,
            preferredFormat: \"hex\",
            type: \"text\",
            change: function(color) {
                if (color.getAlpha() !== 1) {
                    let hex = color.toHexString();
                    hex += (\"0\" + Math.round(parseFloat(color.getAlpha()) * 255).toString(16)).slice(-2);
                    this.value = hex;
                }
            }
        });
      });
      </script>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 391
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 391, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 394
    public function macro_passwordField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 395
            echo "   ";
            $context["options"] = twig_array_merge(["autocomplete" => "new-password"], ($context["options"] ?? null));
            // line 396
            echo "   ";
            ob_start(function () { return ''; });
            // line 397
            echo "      <input type=\"password\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 399
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
         ";
            // line 400
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 400)) ? ("readonly") : (""));
            echo "
         ";
            // line 401
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 401)) ? ("disabled") : (""));
            echo "
         ";
            // line 402
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 402)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 404
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 404, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 407
    public function macro_emailField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 408
            echo "   ";
            $context["options"] = twig_array_merge(["type" => "email"], ($context["options"] ?? null));
            // line 409
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_textField", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 409, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 412
    public function macro_fileField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 413
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "name" =>             // line 415
($context["name"] ?? null), "simple" => false],             // line 417
($context["options"] ?? null));
            // line 418
            echo "   ";
            ob_start(function () { return ''; });
            // line 419
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "simple", [], "any", false, false, false, 419)) {
                // line 420
                echo "        <input type=\"file\" id=\"%id%\"
               class=\"form-control\"
               name=\"";
                // line 422
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"
               ";
                // line 423
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mulitple", [], "any", false, false, false, 423)) ? ("multiple") : (""));
                echo "
               ";
                // line 424
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 424)) ? ("readonly") : (""));
                echo "
               ";
                // line 425
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 425)) ? ("disabled") : (""));
                echo "
               ";
                // line 426
                echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 426)) ? ("required") : (""));
                echo " />
      ";
            } else {
                // line 428
                echo "        ";
                $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::file", [0 => ($context["options"] ?? null)]);
                // line 429
                echo "      ";
            }
            // line 430
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 431
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 431, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 434
    public function macro_imageField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], $__link_options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "link_options" => $__link_options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 435
            echo "   ";
            ob_start(function () { return ''; });
            // line 436
            echo "      <div class=\"img-overlay-wrapper position-relative\">
         ";
            // line 437
            $context["clearable"] = (($__internal_compile_7 = ($context["options"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["clearable"] ?? null) : null);
            // line 438
            echo "         ";
            $context["url"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "url", [], "array", true, true, false, 438) &&  !(null === (($__internal_compile_8 = ($context["options"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["url"] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["options"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["url"] ?? null) : null)) : (null));
            // line 439
            echo "         ";
            $context["options"] = twig_array_filter($this->env, ($context["options"] ?? null), function ($__v__, $__k__) use ($context, $macros) { $context["v"] = $__v__; $context["k"] = $__k__; return ((0 !== twig_compare(($context["k"] ?? null), "url")) && (0 !== twig_compare(($context["k"] ?? null), "clearable"))); });
            // line 440
            echo "         ";
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 441
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
                echo "\" ";
                echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [0 => ($context["link_options"] ?? null)]);
                echo ">
         ";
            }
            // line 443
            echo "               <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\" ";
            echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", [0 => ($context["options"] ?? null)]);
            echo " />
         ";
            // line 444
            if ( !twig_test_empty(($context["url"] ?? null))) {
                // line 445
                echo "            </a>
         ";
            }
            // line 447
            echo "         ";
            if (($context["clearable"] ?? null)) {
                // line 448
                echo "            <input type=\"hidden\" name=\"_blank_";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\" />
            <button type=\"button\" class=\"btn p-2 position-absolute top-0 start-0\" title=\"";
                // line 449
                echo twig_escape_filter($this->env, __("Delete"), "html", null, true);
                echo "\"
                    onclick=\"const blank_input = \$('input[name=\\'_blank_";
                // line 450
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\\']'); blank_input.val(blank_input.val() ? '' : true); \$(this).toggleClass('btn-danger')\">
               <i class=\"ti ti-x\"></i>
            </button>
         ";
            }
            // line 454
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 456
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 456, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 459
    public function macro_imageGalleryField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 460
            echo "   ";
            ob_start(function () { return ''; });
            // line 461
            echo "      <div class=\"picture_gallery d-flex flex-wrap overflow-auto p-3\">
         ";
            // line 462
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["picture"]) {
                // line 463
                echo "            <div style=\"position: relative; width: fit-content\">
               ";
                // line 464
                echo twig_call_macro($macros["_self"], "macro_imageField", [((($context["name"] ?? null) . "_") . $context["i"]), $context["picture"], "", ["style" => "max-width: 300px; max-height: 150px", "class" => "picture_square", "clearable" => (($__internal_compile_10 =                 // line 467
($context["options"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["clearable"] ?? null) : null), "no_label" => true]], 464, $context, $this->getSourceContext());
                // line 469
                echo "
            </div>
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['picture'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 472
            echo "      </div>
      ";
            // line 473
            echo twig_call_macro($macros["_self"], "macro_fileField", [($context["name"] ?? null), null, "", ["onlyimages" => true, "multiple" => true]], 473, $context, $this->getSourceContext());
            // line 476
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 478
            echo "
   ";
            // line 479
            $context["id"] = (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 479)), 0))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 479)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 479))));
            // line 480
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null)], 480, $context, $this->getSourceContext());
            echo "
   ";
            // line 481
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["full_width" => true, "no_label" => true])], 481, $context, $this->getSourceContext());
            // line 484
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 487
    public function macro_hiddenField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 488
            echo "   ";
            ob_start(function () { return ''; });
            // line 489
            echo "      <input type=\"hidden\" id=\"%id%\"
             class=\"form-control\"
             name=\"";
            // line 491
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(($context["value"] ?? null)), "html", null, true);
            echo "\"
         ";
            // line 492
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "readonly", [], "any", false, false, false, 492)) ? ("readonly") : (""));
            echo "
         ";
            // line 493
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 493)) ? ("disabled") : (""));
            echo "
         ";
            // line 494
            echo ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 494)) ? ("required") : (""));
            echo " />
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 496
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 496, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 499
    public function macro_dropdownNumberField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 500
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 501
            echo "
   ";
            // line 502
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 502)) {
                // line 503
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 504
                echo "   ";
            }
            // line 505
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 505), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 505)) {
                // line 506
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 507
                echo "   ";
            }
            // line 508
            echo "
   ";
            // line 509
            ob_start(function () { return ''; });
            // line 510
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showNumber", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["value" =>             // line 511
($context["value"] ?? null), "rand" =>             // line 512
($context["rand"] ?? null), "width" => "100%"],             // line 514
($context["options"] ?? null))]);
            // line 515
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 516
            echo "
   ";
            // line 517
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 517))])], 517, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 520
    public function macro_dropdownArrayField($__name__ = null, $__value__ = null, $__elements__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "elements" => $__elements__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 521
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 522
            echo "
   ";
            // line 523
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 523)) {
                // line 524
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 525
                echo "   ";
            }
            // line 526
            echo "
   ";
            // line 527
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 527), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 527)) {
                // line 528
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 529
                echo "   ";
            }
            // line 530
            echo "
   ";
            // line 531
            ob_start(function () { return ''; });
            // line 532
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showFromArray", [0 => ($context["name"] ?? null), 1 => ($context["elements"] ?? null), 2 => twig_array_merge(["value" => $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue(            // line 533
($context["value"] ?? null)), "rand" =>             // line 534
($context["rand"] ?? null), "width" => "100%"],             // line 536
($context["options"] ?? null))]);
            // line 537
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 538
            echo "
   ";
            // line 539
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 539))])], 539, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 542
    public function macro_dropdownTimestampField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 543
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 544
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 544), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 544)) {
                // line 545
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 546
                echo "   ";
            }
            // line 547
            echo "
   ";
            // line 548
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 548)) {
                // line 549
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 550
                echo "   ";
            }
            // line 551
            echo "
   ";
            // line 552
            ob_start(function () { return ''; });
            // line 553
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showTimestamp", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["value" =>             // line 554
($context["value"] ?? null), "rand" =>             // line 555
($context["rand"] ?? null), "width" => "100%"],             // line 557
($context["options"] ?? null))]);
            // line 558
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 559
            echo "
   ";
            // line 560
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 560))])], 560, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 563
    public function macro_dropdownYesNo($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 564
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 565
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 565), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 565)) {
                // line 566
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 567
                echo "   ";
            }
            // line 568
            echo "
   ";
            // line 569
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 569)) {
                // line 570
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 571
                echo "   ";
            }
            // line 572
            echo "
   ";
            // line 573
            ob_start(function () { return ''; });
            // line 574
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showYesNo", [0 => ($context["name"] ?? null), 1 => ($context["value"] ?? null), 2 =>  -1, 3 => twig_array_merge(["rand" =>             // line 575
($context["rand"] ?? null), "width" => "100%"],             // line 577
($context["options"] ?? null))]);
            // line 578
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 579
            echo "
   ";
            // line 580
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 580))])], 580, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 583
    public function macro_dropdownItemTypes($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 584
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 585
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 585), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 585)) {
                // line 586
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 587
                echo "   ";
            }
            // line 588
            echo "
   ";
            // line 589
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 589)) {
                // line 590
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 591
                echo "   ";
            }
            // line 592
            echo "
   ";
            // line 593
            $context["types"] = ((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "types", [], "array", true, true, false, 593)) ? (_twig_default_filter((($__internal_compile_11 = ($context["options"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["types"] ?? null) : null), [])) : ([]));
            // line 594
            echo "
   ";
            // line 595
            ob_start(function () { return ''; });
            // line 596
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showItemTypes", [0 => ($context["name"] ?? null), 1 => ($context["types"] ?? null), 2 => twig_array_merge(["rand" =>             // line 597
($context["rand"] ?? null), "width" => "100%", "value" =>             // line 599
($context["value"] ?? null)],             // line 600
($context["options"] ?? null))]);
            // line 601
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 602
            echo "
   ";
            // line 603
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 603))])], 603, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 606
    public function macro_dropdownItemsFromItemtypes($__name__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 607
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)],             // line 609
($context["options"] ?? null));
            // line 610
            echo "
   ";
            // line 611
            ob_start(function () { return ''; });
            // line 612
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showSelectItemFromItemtypes", [0 => ($context["options"] ?? null)]);
            // line 613
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 614
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 614))])], 614, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 617
    public function macro_dropdownIcons($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 618
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 619
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 619), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 619)) {
                // line 620
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 621
                echo "   ";
            }
            // line 622
            echo "
   ";
            // line 623
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 623)) {
                // line 624
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 625
                echo "   ";
            }
            // line 626
            echo "
   ";
            // line 627
            ob_start(function () { return ''; });
            // line 628
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::dropdownIcons", [0 => ($context["name"] ?? null), 1 => ($context["value"] ?? null), 2 => (twig_constant("GLPI_ROOT") . "/pics/icones"), 3 => twig_array_merge(["rand" =>             // line 629
($context["rand"] ?? null), "width" => "100%"],             // line 631
($context["options"] ?? null))]);
            // line 632
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 633
            echo "
   ";
            // line 634
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 634))])], 634, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 637
    public function macro_dropdownHoursField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 638
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 639
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 639), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 639)) {
                // line 640
                echo "      ";
                $context["options"] = twig_array_merge(["required" => true], ($context["options"] ?? null));
                // line 641
                echo "   ";
            }
            // line 642
            echo "
   ";
            // line 643
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 643)) {
                // line 644
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 645
                echo "   ";
            }
            // line 646
            echo "
   ";
            // line 647
            ob_start(function () { return ''; });
            // line 648
            echo "      ";
            $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Dropdown::showHours", [0 => ($context["name"] ?? null), 1 => twig_array_merge(["rand" =>             // line 649
($context["rand"] ?? null), "width" => "100%", "value" =>             // line 651
($context["value"] ?? null)],             // line 652
($context["options"] ?? null))]);
            // line 653
            echo "   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 654
            echo "
   ";
            // line 655
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 655))])], 655, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 658
    public function macro_dropdownField($__itemtype__ = null, $__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "itemtype" => $__itemtype__,
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 659
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "multiple", [], "any", false, false, false, 659)) {
                // line 660
                echo "      ";
                // line 661
                echo "      ";
                $context["defined_input_name"] = (("_" . ($context["name"] ?? null)) . "_defined");
                // line 662
                echo "      <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, ($context["defined_input_name"] ?? null), "html", null, true);
                echo "\" value=\"1\"></input>

      ";
                // line 665
                echo "      ";
                $context["name"] = (($context["name"] ?? null) . "[]");
                // line 666
                echo "   ";
            }
            // line 667
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env)], ($context["options"] ?? null));
            // line 668
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 668), "isMandatoryField", [0 => ($context["name"] ?? null)], "method", false, false, false, 668)) {
                // line 669
                echo "      ";
                $context["options"] = twig_array_merge(["specific_tags" => ["required" => true]], ($context["options"] ?? null));
                // line 670
                echo "   ";
            }
            // line 671
            echo "
   ";
            // line 672
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "disabled", [], "any", false, false, false, 672)) {
                // line 673
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["specific_tags" => ["disabled" => "disabled"]]);
                // line 674
                echo "   ";
            }
            // line 675
            echo "
   ";
            // line 676
            ob_start(function () { return ''; });
            // line 677
            echo "      ";
            echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeDropdown(($context["itemtype"] ?? null), twig_array_merge(["name" =>             // line 678
($context["name"] ?? null), "value" =>             // line 679
($context["value"] ?? null), "rand" =>             // line 680
($context["rand"] ?? null), "width" => "100%"],             // line 682
($context["options"] ?? null)));
            echo "
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 684
            echo "
   ";
            // line 685
            if ( !twig_test_empty(twig_trim_filter(($context["field"] ?? null)))) {
                // line 686
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((("dropdown_" . ($context["name"] ?? null)) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 686))])], 686, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 690
    public function macro_htmlField($__name__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 691
            echo "   ";
            if ((0 === twig_compare(twig_length_filter($this->env, ($context["value"] ?? null)), 0))) {
                // line 692
                echo "      ";
                $context["value"] = "&nbsp;";
                // line 693
                echo "   ";
            }
            // line 694
            echo "
   ";
            // line 695
            ob_start(function () { return ''; });
            // line 696
            echo "      <span class=\"form-control-plaintext\">";
            echo ($context["value"] ?? null);
            echo "</span>
   ";
            $context["value"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 698
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["name"] ?? null), ($context["value"] ?? null), ($context["label"] ?? null), ($context["options"] ?? null)], 698, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 701
    public function macro_field($__name__ = null, $__field__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "field" => $__field__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 702
            echo "   ";
            $context["options"] = twig_array_merge(["rand" => twig_random($this->env), "is_horizontal" => true, "include_field" => true, "add_field_html" => "", "locked" => false, "locked_fields" => []],             // line 709
($context["options"] ?? null));
            // line 710
            echo "
   ";
            // line 711
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, true, false, 711), ($context["name"] ?? null), [], "array", true, true, false, 711)) {
                // line 712
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["locked" => true, "locked_value" => (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 712)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12[($context["name"] ?? null)] ?? null) : null)]);
                // line 713
                echo "   ";
            } elseif (twig_in_filter(($context["name"] ?? null), twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_fields", [], "any", false, false, false, 713))) {
                // line 714
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["locked" => true]);
                // line 715
                echo "   ";
            }
            // line 716
            echo "
   ";
            // line 717
            if ( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "include_field", [], "any", false, false, false, 717)) {
                // line 718
                echo "      ";
                echo twig_escape_filter($this->env, ($context["field"] ?? null), "html", null, true);
                echo "
   ";
            } else {
                // line 720
                echo "      ";
                $context["id"] = (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 720)), 0))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "id", [], "any", false, false, false, 720)) : (((($context["name"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 720))));
                // line 721
                echo "      ";
                $context["field"] = twig_replace_filter(($context["field"] ?? null), ["%id%" => ($context["id"] ?? null)]);
                // line 722
                echo "      ";
                $context["add_field_html"] = (((1 === twig_compare(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 722)), 0))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_html", [], "any", false, false, false, 722)) : (""));
                // line 723
                echo "
      ";
                // line 724
                if (( !twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", true, true, false, 724) ||  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 724), "isHiddenField", [0 => ($context["name"] ?? null)], "method", false, false, false, 724))) {
                    // line 725
                    echo "         ";
                    if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "no_label", [], "any", false, false, false, 725)) {
                        // line 726
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_noLabelField", [($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 726, $context, $this->getSourceContext());
                        echo "
         ";
                    } elseif (twig_get_attribute($this->env, $this->source,                     // line 727
($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 727)) {
                        // line 728
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 728, $context, $this->getSourceContext());
                        echo "
         ";
                    } else {
                        // line 730
                        echo "            ";
                        echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), twig_array_merge(($context["options"] ?? null), ["name" => ($context["name"] ?? null)])], 730, $context, $this->getSourceContext());
                        echo "
         ";
                    }
                    // line 732
                    echo "      ";
                }
                // line 733
                echo "   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 736
    public function macro_ajaxField($__id__ = null, $__value__ = null, $__label__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "id" => $__id__,
            "value" => $__value__,
            "label" => $__label__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 737
            echo "   ";
            ob_start(function () { return ''; });
            // line 738
            echo "      <div id=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\" class=\"form-field-ajax\">
         ";
            // line 739
            if ( !(null === ($context["value"] ?? null))) {
                // line 740
                echo "            ";
                echo ($context["value"] ?? null);
                echo "
         ";
            }
            // line 742
            echo "      </div>
   ";
            $context["field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 744
            echo "   ";
            echo twig_call_macro($macros["_self"], "macro_field", [($context["id"] ?? null), ($context["field"] ?? null), ($context["label"] ?? null), twig_array_merge(($context["options"] ?? null), ["id" => ((($context["id"] ?? null) . "_") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "rand", [], "any", false, false, false, 744))])], 744, $context, $this->getSourceContext());
            echo "
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 747
    public function macro_nullField($__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 748
            echo "   ";
            $context["options"] = twig_array_merge(["is_horizontal" => true], ($context["options"] ?? null));
            // line 749
            echo "
   ";
            // line 750
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "is_horizontal", [], "any", false, false, false, 750)) {
                // line 751
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_horizontalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 751, $context, $this->getSourceContext());
                echo "
   ";
            } else {
                // line 753
                echo "      ";
                echo twig_call_macro($macros["_self"], "macro_verticalField", [($context["label"] ?? null), ($context["field"] ?? null), ($context["id"] ?? null), ($context["add_field_html"] ?? null), ($context["options"] ?? null)], 753, $context, $this->getSourceContext());
                echo "
   ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 758
    public function macro_noLabelField($__field__ = null, $__id__ = "", $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 759
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-3"],             // line 762
($context["options"] ?? null));
            // line 763
            echo "
   ";
            // line 764
            $context["class"] = (((twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", true, true, false, 764) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 764)))) ? (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 764)) : ("col-12 col-sm-6"));
            // line 765
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 765)) {
                // line 766
                echo "      ";
                $context["class"] = "col-12";
                // line 767
                echo "   ";
            }
            // line 768
            echo "
   <div class=\"";
            // line 769
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 769), "html", null, true);
            echo "\">
      ";
            // line 770
            echo ($context["field"] ?? null);
            echo "
      ";
            // line 771
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 776
    public function macro_horizontalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 777
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "full_width_adapt_column" => true, "align_label_right" => true, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "label_class" => "col-xxl-5", "input_class" => "col-xxl-7", "add_field_class" => "", "add_field_attribs" => [], "center" => false],             // line 788
($context["options"] ?? null));
            // line 789
            echo "
   ";
            // line 790
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 790)) {
                // line 791
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 794
                echo "
      ";
                // line 795
                if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width_adapt_column", [], "any", false, false, false, 795)) {
                    // line 796
                    echo "         ";
                    $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => "col-xxl-4", "input_class" => "col-xxl-8"]);
                    // line 800
                    echo "      ";
                }
                // line 801
                echo "   ";
            }
            // line 802
            echo "
   ";
            // line 803
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "icon_label", [], "any", false, false, false, 803)) {
                // line 804
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => "col-2", "input_class" => "col-10"]);
                // line 808
                echo "   ";
            }
            // line 809
            echo "
   ";
            // line 810
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "align_label_right", [], "any", false, false, false, 810)) {
                // line 811
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["label_class" => (twig_get_attribute($this->env, $this->source,                 // line 812
($context["options"] ?? null), "label_class", [], "any", false, false, false, 812) . " text-xxl-end")]);
                // line 814
                echo "   ";
            }
            // line 815
            echo "
   ";
            // line 816
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 816))) {
                // line 817
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 817)]);
                // line 818
                echo "   ";
            } else {
                // line 819
                echo "      ";
                $context["extra_attribs"] = "";
                // line 820
                echo "   ";
            }
            // line 821
            echo "
   <div class=\"form-field row ";
            // line 822
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 822), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 822), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 822), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 823
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 823))], 823, $context, $this->getSourceContext());
            echo "
      ";
            // line 824
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "center", [], "any", false, false, false, 824)) {
                // line 825
                echo "         ";
                $context["flex_class"] = "d-flex align-items-center";
                // line 826
                echo "      ";
            }
            // line 827
            echo "      <div class=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 827), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, ($context["flex_class"] ?? null), "html", null, true);
            echo " field-container\">
         ";
            // line 828
            echo ($context["field"] ?? null);
            echo "
         ";
            // line 829
            echo ($context["add_field_html"] ?? null);
            echo "
      </div>
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 835
    public function macro_verticalField($__label__ = null, $__field__ = null, $__id__ = null, $__add_field_html__ = "", $__options__ = [], ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "field" => $__field__,
            "id" => $__id__,
            "add_field_html" => $__add_field_html__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 836
            echo "   ";
            $context["options"] = twig_array_merge(["full_width" => false, "mb" => "mb-2", "field_class" => "col-12 col-sm-6", "add_field_class" => "", "add_field_attribs" => []],             // line 842
($context["options"] ?? null));
            // line 843
            echo "
   ";
            // line 844
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "full_width", [], "any", false, false, false, 844)) {
                // line 845
                echo "      ";
                $context["options"] = twig_array_merge(($context["options"] ?? null), ["field_class" => "col-12"]);
                // line 848
                echo "   ";
            }
            // line 849
            echo "
   ";
            // line 850
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 850))) {
                // line 851
                echo "      ";
                $context["extra_attribs"] = $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Html::parseAttributes", ["options" => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_attribs", [], "any", false, false, false, 851)]);
                // line 852
                echo "   ";
            } else {
                // line 853
                echo "      ";
                $context["extra_attribs"] = "";
                // line 854
                echo "   ";
            }
            // line 855
            echo "
   <div class=\"form-field ";
            // line 856
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "field_class", [], "any", false, false, false, 856), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "add_field_class", [], "any", false, false, false, 856), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "mb", [], "any", false, false, false, 856), "html", null, true);
            echo "\" ";
            echo ($context["extra_attribs"] ?? null);
            echo ">
      ";
            // line 857
            echo twig_call_macro($macros["_self"], "macro_label", [($context["label"] ?? null), ($context["id"] ?? null), ($context["options"] ?? null), ("col-form-label " . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "label_class", [], "any", false, false, false, 857))], 857, $context, $this->getSourceContext());
            echo "
      <div class=\"";
            // line 858
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "input_class", [], "any", false, false, false, 858), "html", null, true);
            echo " field-container\">
         ";
            // line 859
            echo ($context["field"] ?? null);
            echo "
      </div>
      ";
            // line 861
            echo ($context["add_field_html"] ?? null);
            echo "
   </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 866
    public function macro_label($__label__ = null, $__id__ = null, $__options__ = [], $__class__ = "form-label", ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "label" => $__label__,
            "id" => $__id__,
            "options" => $__options__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 867
            echo "    ";
            $context["options"] = twig_array_merge(["locked" => false, "locked_value" => null],             // line 870
($context["options"] ?? null));
            // line 871
            echo "
   ";
            // line 872
            $context["required_mark"] = "";
            // line 873
            echo "   ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "fields_template", [], "any", false, false, false, 873), "isMandatoryField", [0 => twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "name", [], "any", false, false, false, 873)], "method", false, false, false, 873) || twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "required", [], "any", false, false, false, 873))) {
                // line 874
                echo "      ";
                $context["required_mark"] = "<span class=\"required\">*</span>";
                // line 875
                echo "   ";
            }
            // line 876
            echo "
   ";
            // line 877
            $context["helper"] = "";
            // line 878
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 878)) {
                // line 879
                echo "      ";
                ob_start(function () { return ''; });
                // line 880
                echo "         <span class=\"form-help\" data-bs-toggle=\"popover\" data-bs-placement=\"top\" data-bs-html=\"true\"
               data-bs-content=\"";
                // line 881
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "helper", [], "any", false, false, false, 881), "html", null, true);
                echo "\">
            ?
         </span>
      ";
                $context["helper"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 885
                echo "   ";
            }
            // line 886
            echo "
   ";
            // line 887
            $context["locked_mark"] = "";
            // line 888
            echo "   ";
            if (twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked", [], "any", false, false, false, 888)) {
                // line 889
                echo "      ";
                ob_start(function () { return ''; });
                // line 890
                echo "        ";
                ob_start(function () { return ''; });
                echo twig_escape_filter($this->env, __("Field will not be updated from inventory"), "html", null, true);
                $context["locked_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 891
                echo "        ";
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 891))) {
                    // line 892
                    echo "            ";
                    ob_start(function () { return ''; });
                    echo twig_escape_filter($this->env, ($context["locked_title"] ?? null), "html", null, true);
                    echo " - ";
                    echo twig_escape_filter($this->env, ((__("Last inventory value was:") . " ") . twig_get_attribute($this->env, $this->source, ($context["options"] ?? null), "locked_value", [], "any", false, false, false, 892)), "html", null, true);
                    $context["locked_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 893
                    echo "        ";
                }
                // line 894
                echo "        <i class=\"ti ti-lock\"
           title=\"";
                // line 895
                echo twig_escape_filter($this->env, ($context["locked_title"] ?? null), "html", null, true);
                echo "\"
           data-bs-toggle=\"tooltip\"></i>
      ";
                $context["locked_mark"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 898
                echo "   ";
            }
            // line 899
            echo "
   <label class=\"";
            // line 900
            echo twig_escape_filter($this->env, ($context["class"] ?? null), "html", null, true);
            echo "\" for=\"";
            echo twig_escape_filter($this->env, ($context["id"] ?? null), "html", null, true);
            echo "\">
      ";
            // line 901
            echo ($context["label"] ?? null);
            echo "
      ";
            // line 902
            echo ($context["locked_mark"] ?? null);
            echo "
      ";
            // line 903
            echo ($context["required_mark"] ?? null);
            echo "
      ";
            // line 904
            echo ($context["helper"] ?? null);
            echo "
   </label>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "components/form/fields_macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2861 => 904,  2857 => 903,  2853 => 902,  2849 => 901,  2843 => 900,  2840 => 899,  2837 => 898,  2831 => 895,  2828 => 894,  2825 => 893,  2818 => 892,  2815 => 891,  2810 => 890,  2807 => 889,  2804 => 888,  2802 => 887,  2799 => 886,  2796 => 885,  2789 => 881,  2786 => 880,  2783 => 879,  2780 => 878,  2778 => 877,  2775 => 876,  2772 => 875,  2769 => 874,  2766 => 873,  2764 => 872,  2761 => 871,  2759 => 870,  2757 => 867,  2741 => 866,  2729 => 861,  2724 => 859,  2720 => 858,  2716 => 857,  2706 => 856,  2703 => 855,  2700 => 854,  2697 => 853,  2694 => 852,  2691 => 851,  2689 => 850,  2686 => 849,  2683 => 848,  2680 => 845,  2678 => 844,  2675 => 843,  2673 => 842,  2671 => 836,  2654 => 835,  2641 => 829,  2637 => 828,  2630 => 827,  2627 => 826,  2624 => 825,  2622 => 824,  2618 => 823,  2608 => 822,  2605 => 821,  2602 => 820,  2599 => 819,  2596 => 818,  2593 => 817,  2591 => 816,  2588 => 815,  2585 => 814,  2583 => 812,  2581 => 811,  2579 => 810,  2576 => 809,  2573 => 808,  2570 => 804,  2568 => 803,  2565 => 802,  2562 => 801,  2559 => 800,  2556 => 796,  2554 => 795,  2551 => 794,  2548 => 791,  2546 => 790,  2543 => 789,  2541 => 788,  2539 => 777,  2522 => 776,  2510 => 771,  2506 => 770,  2500 => 769,  2497 => 768,  2494 => 767,  2491 => 766,  2488 => 765,  2486 => 764,  2483 => 763,  2481 => 762,  2479 => 759,  2463 => 758,  2450 => 753,  2444 => 751,  2442 => 750,  2439 => 749,  2436 => 748,  2423 => 747,  2411 => 744,  2407 => 742,  2401 => 740,  2399 => 739,  2394 => 738,  2391 => 737,  2375 => 736,  2365 => 733,  2362 => 732,  2356 => 730,  2350 => 728,  2348 => 727,  2343 => 726,  2340 => 725,  2338 => 724,  2335 => 723,  2332 => 722,  2329 => 721,  2326 => 720,  2320 => 718,  2318 => 717,  2315 => 716,  2312 => 715,  2309 => 714,  2306 => 713,  2303 => 712,  2301 => 711,  2298 => 710,  2296 => 709,  2294 => 702,  2278 => 701,  2266 => 698,  2260 => 696,  2258 => 695,  2255 => 694,  2252 => 693,  2249 => 692,  2246 => 691,  2230 => 690,  2217 => 686,  2215 => 685,  2212 => 684,  2207 => 682,  2206 => 680,  2205 => 679,  2204 => 678,  2202 => 677,  2200 => 676,  2197 => 675,  2194 => 674,  2191 => 673,  2189 => 672,  2186 => 671,  2183 => 670,  2180 => 669,  2177 => 668,  2174 => 667,  2171 => 666,  2168 => 665,  2162 => 662,  2159 => 661,  2157 => 660,  2154 => 659,  2137 => 658,  2126 => 655,  2123 => 654,  2120 => 653,  2118 => 652,  2117 => 651,  2116 => 649,  2114 => 648,  2112 => 647,  2109 => 646,  2106 => 645,  2103 => 644,  2101 => 643,  2098 => 642,  2095 => 641,  2092 => 640,  2089 => 639,  2086 => 638,  2070 => 637,  2059 => 634,  2056 => 633,  2053 => 632,  2051 => 631,  2050 => 629,  2048 => 628,  2046 => 627,  2043 => 626,  2040 => 625,  2037 => 624,  2035 => 623,  2032 => 622,  2029 => 621,  2026 => 620,  2023 => 619,  2020 => 618,  2004 => 617,  1992 => 614,  1989 => 613,  1986 => 612,  1984 => 611,  1981 => 610,  1979 => 609,  1977 => 607,  1962 => 606,  1951 => 603,  1948 => 602,  1945 => 601,  1943 => 600,  1942 => 599,  1941 => 597,  1939 => 596,  1937 => 595,  1934 => 594,  1932 => 593,  1929 => 592,  1926 => 591,  1923 => 590,  1921 => 589,  1918 => 588,  1915 => 587,  1912 => 586,  1909 => 585,  1906 => 584,  1890 => 583,  1879 => 580,  1876 => 579,  1873 => 578,  1871 => 577,  1870 => 575,  1868 => 574,  1866 => 573,  1863 => 572,  1860 => 571,  1857 => 570,  1855 => 569,  1852 => 568,  1849 => 567,  1846 => 566,  1843 => 565,  1840 => 564,  1824 => 563,  1813 => 560,  1810 => 559,  1807 => 558,  1805 => 557,  1804 => 555,  1803 => 554,  1801 => 553,  1799 => 552,  1796 => 551,  1793 => 550,  1790 => 549,  1788 => 548,  1785 => 547,  1782 => 546,  1779 => 545,  1776 => 544,  1773 => 543,  1757 => 542,  1746 => 539,  1743 => 538,  1740 => 537,  1738 => 536,  1737 => 534,  1736 => 533,  1734 => 532,  1732 => 531,  1729 => 530,  1726 => 529,  1723 => 528,  1721 => 527,  1718 => 526,  1715 => 525,  1712 => 524,  1710 => 523,  1707 => 522,  1704 => 521,  1687 => 520,  1676 => 517,  1673 => 516,  1670 => 515,  1668 => 514,  1667 => 512,  1666 => 511,  1664 => 510,  1662 => 509,  1659 => 508,  1656 => 507,  1653 => 506,  1650 => 505,  1647 => 504,  1644 => 503,  1642 => 502,  1639 => 501,  1636 => 500,  1620 => 499,  1608 => 496,  1603 => 494,  1599 => 493,  1595 => 492,  1589 => 491,  1585 => 489,  1582 => 488,  1566 => 487,  1556 => 484,  1554 => 481,  1549 => 480,  1547 => 479,  1544 => 478,  1540 => 476,  1538 => 473,  1535 => 472,  1527 => 469,  1525 => 467,  1524 => 464,  1521 => 463,  1517 => 462,  1514 => 461,  1511 => 460,  1495 => 459,  1483 => 456,  1479 => 454,  1472 => 450,  1468 => 449,  1463 => 448,  1460 => 447,  1456 => 445,  1454 => 444,  1447 => 443,  1439 => 441,  1436 => 440,  1433 => 439,  1430 => 438,  1428 => 437,  1425 => 436,  1422 => 435,  1405 => 434,  1393 => 431,  1390 => 430,  1387 => 429,  1384 => 428,  1379 => 426,  1375 => 425,  1371 => 424,  1367 => 423,  1363 => 422,  1359 => 420,  1356 => 419,  1353 => 418,  1351 => 417,  1350 => 415,  1348 => 413,  1332 => 412,  1320 => 409,  1317 => 408,  1301 => 407,  1289 => 404,  1284 => 402,  1280 => 401,  1276 => 400,  1272 => 399,  1268 => 397,  1265 => 396,  1262 => 395,  1246 => 394,  1234 => 391,  1213 => 373,  1209 => 372,  1205 => 371,  1199 => 370,  1195 => 368,  1192 => 367,  1176 => 366,  1165 => 363,  1162 => 362,  1146 => 351,  1142 => 350,  1138 => 349,  1130 => 344,  1124 => 341,  1117 => 338,  1115 => 337,  1112 => 336,  1109 => 335,  1106 => 334,  1103 => 333,  1087 => 332,  1076 => 329,  1073 => 328,  1057 => 317,  1053 => 316,  1049 => 315,  1042 => 311,  1036 => 308,  1029 => 305,  1027 => 304,  1024 => 303,  1021 => 302,  1018 => 301,  1015 => 300,  999 => 299,  989 => 296,  985 => 294,  983 => 293,  979 => 292,  975 => 291,  971 => 290,  965 => 289,  960 => 288,  958 => 287,  954 => 285,  951 => 284,  948 => 283,  945 => 282,  942 => 281,  939 => 280,  936 => 279,  933 => 278,  931 => 277,  928 => 276,  925 => 275,  922 => 274,  919 => 273,  903 => 272,  886 => 263,  882 => 262,  878 => 261,  872 => 257,  870 => 256,  866 => 255,  863 => 254,  860 => 253,  857 => 252,  854 => 251,  851 => 250,  848 => 249,  846 => 248,  843 => 247,  840 => 246,  837 => 245,  835 => 243,  834 => 242,  833 => 240,  832 => 239,  830 => 238,  827 => 237,  824 => 236,  821 => 235,  819 => 233,  818 => 232,  817 => 230,  815 => 229,  812 => 228,  809 => 227,  807 => 226,  804 => 225,  801 => 224,  799 => 222,  798 => 220,  797 => 219,  795 => 218,  793 => 217,  790 => 216,  783 => 214,  779 => 213,  775 => 212,  767 => 210,  765 => 209,  763 => 208,  760 => 207,  757 => 206,  754 => 205,  751 => 204,  749 => 203,  746 => 202,  744 => 201,  742 => 193,  726 => 192,  714 => 188,  710 => 186,  704 => 184,  700 => 182,  698 => 181,  695 => 180,  692 => 179,  689 => 178,  673 => 177,  661 => 173,  651 => 171,  644 => 170,  638 => 169,  634 => 168,  630 => 167,  626 => 166,  620 => 165,  616 => 163,  614 => 162,  611 => 161,  608 => 160,  605 => 159,  603 => 158,  600 => 157,  597 => 156,  594 => 155,  592 => 154,  589 => 153,  573 => 152,  562 => 148,  559 => 147,  555 => 145,  549 => 143,  547 => 142,  543 => 141,  539 => 140,  535 => 139,  531 => 138,  525 => 137,  519 => 136,  516 => 135,  514 => 134,  511 => 133,  509 => 132,  507 => 129,  504 => 128,  502 => 127,  500 => 125,  497 => 124,  481 => 123,  470 => 119,  467 => 118,  462 => 116,  458 => 115,  454 => 114,  450 => 113,  446 => 112,  441 => 111,  439 => 110,  436 => 109,  433 => 108,  430 => 107,  427 => 106,  411 => 105,  400 => 101,  397 => 100,  391 => 98,  388 => 97,  384 => 96,  380 => 95,  376 => 94,  370 => 93,  364 => 91,  362 => 90,  359 => 89,  356 => 88,  353 => 87,  350 => 86,  347 => 85,  331 => 84,  320 => 80,  317 => 79,  314 => 78,  311 => 77,  308 => 76,  305 => 75,  301 => 74,  298 => 73,  295 => 72,  278 => 71,  263 => 65,  257 => 62,  254 => 61,  252 => 60,  248 => 59,  243 => 57,  240 => 56,  237 => 55,  223 => 54,  208 => 48,  202 => 45,  199 => 44,  197 => 43,  193 => 42,  188 => 40,  185 => 39,  182 => 38,  179 => 37,  176 => 36,  173 => 35,  158 => 34,  152 => 864,  148 => 833,  144 => 774,  140 => 756,  137 => 746,  134 => 735,  131 => 700,  128 => 689,  125 => 657,  122 => 636,  119 => 616,  116 => 605,  113 => 582,  110 => 562,  107 => 541,  104 => 519,  101 => 498,  98 => 486,  95 => 458,  92 => 433,  89 => 411,  86 => 406,  83 => 393,  80 => 365,  77 => 331,  74 => 298,  71 => 271,  67 => 190,  63 => 175,  59 => 150,  55 => 121,  51 => 103,  47 => 82,  44 => 70,  41 => 53,  38 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/fields_macros.html.twig", "/var/www/html/glpi/templates/components/form/fields_macros.html.twig");
    }
}
