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

/* components/itilobject/timeline/form_solution.html.twig */
class __TwigTemplate_9979da73ebbdf76049209782dd5797fa163dbe89af021ae4dd6c1173e7fb2d4e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'timeline_card' => [$this, 'block_timeline_card'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 34
        return "components/itilobject/timeline/form_timeline_item.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 35
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_solution.html.twig", 35)->unwrap();
        // line 37
        $context["params"] = twig_array_merge(["item" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])));
        // line 39
        $context["candedit"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maySolve", [], "method", false, false, false, 39);
        // line 40
        $context["can_read_kb"] = (Session::haveRight("knowbase", twig_constant("READ")) || Session::haveRight("knowbase", twig_constant("KnowbaseItem::READFAQ")));
        // line 41
        $context["can_update_kb"] = Session::haveRight("knowbase", twig_constant("UPDATE"));
        // line 42
        $context["nokb"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "nokb", [], "array", true, true, false, 42) || (0 === twig_compare((($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["nokb"] ?? null) : null), true)));
        // line 43
        $context["noform"] = (twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "noform", [], "array", true, true, false, 43) || (0 === twig_compare((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["noform"] ?? null) : null), true)));
        // line 44
        $context["disabled"] = (0 === twig_compare(($context["candedit"] ?? null), false));
        // line 34
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_solution.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 46
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 47
        echo "   ";
        if ((0 === twig_compare(($context["form_mode"] ?? null), "view"))) {
            // line 48
            echo "      <div class=\"read-only-content\">
         <div class= \"rich_text_container\">
            ";
            // line 50
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 53
            echo "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 57
            if ((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["solutiontypes_id"] ?? null) : null)) {
                // line 58
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-tag me-1\"></i>
                  ";
                // line 60
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("SolutionType", (($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["solutiontypes_id"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 63
            echo "
            ";
            // line 64
            if (((0 !== twig_compare((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["status"] ?? null) : null), twig_constant("CommonITILValidation::WAITING"))) && (0 !== twig_compare((($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["status"] ?? null) : null), twig_constant("CommonITILValidation::NONE"))))) {
                // line 65
                echo "               <span class=\"badge bg-blue-lt\">
                  ";
                // line 66
                $context["action"] = (((0 === twig_compare((($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["status"] ?? null) : null), twig_constant("CommonITILValidation::ACCEPTED")))) ? (__("Accepted")) : (_x("validation", "Refused")));
                // line 67
                echo "                  ";
                echo twig_sprintf(__("%1\$s on %2\$s by %3\$s"),                 // line 68
($context["action"] ?? null), $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_8 =                 // line 69
($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["date_approval"] ?? null) : null)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("User", (($__internal_compile_9 =                 // line 70
($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["users_id_approval"] ?? null) : null), ["enable_anonymization" => true]));
                // line 71
                echo "
               </span>
            ";
            }
            // line 74
            echo "         </div>
      </div>
   ";
        } else {
            // line 77
            echo "      <div class=\"itilsolution\">
         ";
            // line 78
            $context["validation_class"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getValidationClassInstance", [], "method", false, false, false, 78);
            // line 79
            echo "         ";
            if ( !(null === ($context["validation_class"] ?? null))) {
                // line 80
                echo "            ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["validation_class"] ?? null), "alertValidation", [0 => ($context["item"] ?? null), 1 => "solution"], "method", false, false, false, 80), "html", null, true);
                echo "
         ";
            }
            // line 82
            echo "
         ";
            // line 83
            if ( !($context["noform"] ?? null)) {
                // line 84
                echo "         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
                // line 85
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 85), "html", null, true);
                echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
         ";
            }
            // line 87
            echo "
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 88), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, (($__internal_compile_10 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 89)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["id"] ?? null) : null), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
            ";
            // line 91
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            ";
            // line 93
            if ((1 === twig_compare($this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Ticket_Ticket::countOpenChildren", [0 => (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null)]), 0))) {
                // line 94
                echo "               <div class=\"alert alert-important alert-warning\">
                  <i class=\"fas fa-2x fa-info me-2\"></i>
                  <span>";
                // line 96
                echo twig_escape_filter($this->env, __("Warning: non closed children tickets depends on current ticket. Are you sure you want to close it?"), "html", null, true);
                echo "</span>
               </div>
            ";
            }
            // line 99
            echo "
            <div class=\"row mx-n3 mx-xxl-auto\">
               <div class=\"col-12 col-xl-7 col-xxl-8\">
                  ";
            // line 102
            $context["content"] = (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["content"] ?? null) : null);
            // line 103
            echo "                  ";
            if ((1 === twig_compare(($context["kb_id_toload"] ?? null), 0))) {
                // line 104
                echo "                     ";
                $context["kb_item"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItem("KnowbaseItem", ($context["kb_id_toload"] ?? null));
                // line 105
                echo "                     ";
                $context["content"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["kb_item"] ?? null), "fields", [], "any", false, true, false, 105), "answer", [], "array", true, true, false, 105) &&  !(null === (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["kb_item"] ?? null), "fields", [], "any", false, true, false, 105)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["answer"] ?? null) : null)))) ? ((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["kb_item"] ?? null), "fields", [], "any", false, true, false, 105)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["answer"] ?? null) : null)) : (""));
                // line 106
                echo "                  ";
            }
            // line 107
            echo "
                  ";
            // line 108
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content",             // line 110
($context["content"] ?? null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "entities_id" => (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,             // line 118
($context["item"] ?? null), "fields", [], "any", false, false, false, 118)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["entities_id"] ?? null) : null), "rand" =>             // line 119
($context["rand"] ?? null), "disabled" =>             // line 120
($context["disabled"] ?? null)]], 108, $context, $this->getSourceContext());
            // line 122
            echo "
               </div>
               <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-o pe-xxl-auto\">
                  <div class=\"row\">
                     ";
            // line 126
            if (($context["candedit"] ?? null)) {
                // line 127
                echo "                        ";
                if (($context["can_read_kb"] ?? null)) {
                    // line 128
                    echo "                           ";
                    ob_start(function () { return ''; });
                    // line 129
                    echo "                              <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((((("/front/knowbaseitem.php?item_itemtype=" . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 129)) . "&item_items_id=") . twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getID", [], "method", false, false, false, 129)) . "&forcetab=Knowbase\$1")), "html", null, true);
                    echo "\"
                                 class=\"btn btn-secondary overflow-hidden text-nowrap\" type=\"submit\"
                                 title=\"";
                    // line 131
                    echo twig_escape_filter($this->env, __("Search a solution"), "html", null, true);
                    echo "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\">
                                 <i class=\"fas fa-search\"></i>
                              </a>
                           ";
                    $context["search_solution_button"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 136
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_field", ["",                     // line 138
($context["search_solution_button"] ?? null), "", ["full_width" => true, "icon_label" => true]], 136, $context, $this->getSourceContext());
                    // line 144
                    echo "
                        ";
                }
                // line 146
                echo "
                        ";
                // line 147
                ob_start(function () { return ''; });
                // line 148
                echo "                           <i class=\"fas fa-reply fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 149
                echo twig_escape_filter($this->env, _n("Solution template", "Solution templates", Session::getPluralNumber()), "html", null, true);
                echo "\"></i>
                        ";
                $context["sol_template_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 151
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["SolutionTemplate", "solutiontemplates_id", 0,                 // line 155
($context["sol_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("solutiontemplate_update" .                 // line 159
($context["rand"] ?? null)) . "(this.value)"), "rand" =>                 // line 160
($context["rand"] ?? null), "disabled" =>                 // line 161
($context["disabled"] ?? null)]], 151, $context, $this->getSourceContext());
                // line 163
                echo "

                     ";
            }
            // line 166
            echo "
                     ";
            // line 167
            ob_start(function () { return ''; });
            // line 168
            echo "                        <i class=\"fas fa-tag fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("SolutionType"), "html", null, true);
            echo "\"
                           data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                     ";
            $context["sol_type_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 171
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["SolutionType", "solutiontypes_id", (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 174
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 174), "solutiontypes_id", [], "array", true, true, false, 174) &&  !(null === (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 174)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["solutiontypes_id"] ?? null) : null)))) ? ((($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 174)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["solutiontypes_id"] ?? null) : null)) : (0)),             // line 175
($context["sol_type_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 179
($context["rand"] ?? null), "disabled" =>             // line 180
($context["disabled"] ?? null)]], 171, $context, $this->getSourceContext());
            // line 182
            echo "

                     ";
            // line 184
            if ((($context["can_read_kb"] ?? null) && (1 === twig_compare(($context["kb_id_toload"] ?? null), 0)))) {
                // line 185
                echo "                        ";
                ob_start(function () { return ''; });
                // line 186
                echo "                           <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 187
                echo twig_escape_filter($this->env, twig_replace_filter(__("Link to knowledge base entry #%id"), ["%id" => ($context["kb_id_toload"] ?? null)]), "html", null, true);
                echo "\"></i>
                        ";
                $context["link_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 189
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["kb_linked_id", 1,                 // line 192
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 196
($context["rand"] ?? null), "yes_value" =>                 // line 197
($context["kb_id_toload"] ?? null)]], 189, $context, $this->getSourceContext());
                // line 199
                echo "
                     ";
            }
            // line 201
            echo "
                     ";
            // line 202
            if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                // line 203
                echo "                        ";
                ob_start(function () { return ''; });
                // line 204
                echo "                           <i class=\"far fa-save fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Save and add to the knowledge base"), "html", null, true);
                echo "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        ";
                $context["sol_to_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 207
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["_sol_to_kb", 0,                 // line 210
($context["sol_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 214
($context["rand"] ?? null)]], 207, $context, $this->getSourceContext());
                // line 216
                echo "
                     ";
            }
            // line 218
            echo "                  </div>
               </div>
            </div>

         ";
            // line 222
            if ( !($context["noform"] ?? null)) {
                // line 223
                echo "               ";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
                echo "
               <div class=\"d-flex card-footer mx-n3 mb-n3\">
                  ";
                // line 225
                if ((0 >= twig_compare((($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 225)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["id"] ?? null) : null), 0))) {
                    // line 226
                    echo "                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                    // line 228
                    echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                } else {
                    // line 231
                    echo "                     <input type=\"hidden\" name=\"id\" value=\"";
                    echo twig_escape_filter($this->env, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 231)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["id"] ?? null) : null), "html", null, true);
                    echo "\" />
                     <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                        <i class=\"far fa-save\"></i>
                        <span>";
                    // line 234
                    echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 237
                echo "               </div>

               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 239
                echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                echo "\" />
            </form>
         ";
            }
            // line 242
            echo "      </div>

      <script type=\"text/javascript\">
         function solutiontemplate_update";
            // line 245
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(value) {
            \$.ajax({
               url: '";
            // line 247
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/solution.php"), "html", null, true);
            echo "',
               type: 'POST',
               data: {
                  solutiontemplates_id: value,
                  items_id: '";
            // line 251
            echo twig_escape_filter($this->env, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 251)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null), "html", null, true);
            echo "',
                  itemtype: '";
            // line 252
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 252), "html", null, true);
            echo "'
               }
            }).done(function (data) {
               // set textarea content
               if (tasktinymce = tinymce.get(\"content_";
            // line 256
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")) {
                  tasktinymce.setContent(data.content);
               }

               // set type
               var solutiontypes_id = isNaN(parseInt(data.solutiontypes_id))
                  ? 0
                  : parseInt(data.solutiontypes_id);
               \$(\"#dropdown_solutiontypes_id";
            // line 264
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger(\"setValue\", solutiontypes_id);
            });
         }
      </script>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_solution.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 264,  412 => 256,  405 => 252,  401 => 251,  394 => 247,  389 => 245,  384 => 242,  378 => 239,  374 => 237,  368 => 234,  361 => 231,  355 => 228,  351 => 226,  349 => 225,  343 => 223,  341 => 222,  335 => 218,  331 => 216,  329 => 214,  328 => 210,  326 => 207,  319 => 204,  316 => 203,  314 => 202,  311 => 201,  307 => 199,  305 => 197,  304 => 196,  303 => 192,  301 => 189,  296 => 187,  293 => 186,  290 => 185,  288 => 184,  284 => 182,  282 => 180,  281 => 179,  280 => 175,  279 => 174,  277 => 171,  270 => 168,  268 => 167,  265 => 166,  260 => 163,  258 => 161,  257 => 160,  256 => 159,  255 => 155,  253 => 151,  248 => 149,  245 => 148,  243 => 147,  240 => 146,  236 => 144,  234 => 138,  232 => 136,  224 => 131,  218 => 129,  215 => 128,  212 => 127,  210 => 126,  204 => 122,  202 => 120,  201 => 119,  200 => 118,  199 => 110,  198 => 108,  195 => 107,  192 => 106,  189 => 105,  186 => 104,  183 => 103,  181 => 102,  176 => 99,  170 => 96,  166 => 94,  164 => 93,  159 => 91,  154 => 89,  150 => 88,  147 => 87,  142 => 85,  139 => 84,  137 => 83,  134 => 82,  128 => 80,  125 => 79,  123 => 78,  120 => 77,  115 => 74,  110 => 71,  108 => 70,  107 => 69,  106 => 68,  104 => 67,  102 => 66,  99 => 65,  97 => 64,  94 => 63,  88 => 60,  84 => 58,  82 => 57,  76 => 53,  74 => 50,  70 => 48,  67 => 47,  63 => 46,  58 => 34,  56 => 44,  54 => 43,  52 => 42,  50 => 41,  48 => 40,  46 => 39,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_solution.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\form_solution.html.twig");
    }
}
