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

/* components/itilobject/timeline/form_followup.html.twig */
class __TwigTemplate_f89b6777d1cf8d9606ea0066148d51d2a7f9ef712365f04e0c0aab045f9af7eb extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_followup.html.twig", 35)->unwrap();
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
        $context["rand"] = twig_random($this->env);
        // line 34
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_followup.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 45
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        echo "   ";
        if ((0 === twig_compare(($context["form_mode"] ?? null), "view"))) {
            // line 47
            echo "      <div class=\"read-only-content\">
         <div class=\"rich_text_container\">
            ";
            // line 49
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 52
            echo "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 56
            if ((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["sourceitems_id"] ?? null) : null)) {
                // line 57
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 59
                ob_start(function () { return ''; });
                // line 60
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 61
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["sourceitems_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["merged_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 64
                echo "                  ";
                echo twig_sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 67
            echo "
            ";
            // line 68
            if ((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["sourceof_items_id"] ?? null) : null)) {
                // line 69
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 71
                ob_start(function () { return ''; });
                // line 72
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 73
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["sourceof_items_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["promoted_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 76
                echo "                  ";
                echo twig_sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 79
            echo "
            ";
            // line 80
            echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            echo "
         </div>
      </div>
   ";
        } else {
            // line 84
            echo "      <div class=\"itilfollowup\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 86
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 86), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 87), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"items_id\" value=\"";
            // line 88
            echo twig_escape_filter($this->env, (($__internal_compile_6 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 88)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null), "html", null, true);
            echo "\" />
            ";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            ";
            // line 91
            $context["add_reopen"] = ((((twig_get_attribute($this->env, $this->source, ($context["_get"] ?? null), "_openfollowup", [], "array", true, true, false, 91) &&  !(null === (($__internal_compile_7 = ($context["_get"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["_openfollowup"] ?? null) : null)))) ? ((($__internal_compile_8 = ($context["_get"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["_openfollowup"] ?? null) : null)) : (false)) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "needReopen", [], "method", false, false, false, 91));
            // line 92
            echo "            ";
            if (($context["add_reopen"] ?? null)) {
                // line 93
                echo "               <input type=\"hidden\" name=\"add_reopen\" value=\"1\" />
            ";
            }
            // line 95
            echo "
            <div class=\"row mx-n3 mx-xxl-auto\">
               ";
            // line 97
            $context["col_md"] = (((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface(), "central"))) ? ("col-xl-7 col-xxl-8") : ("col-xxl-12"));
            // line 98
            echo "               <div class=\"col-12 ";
            echo twig_escape_filter($this->env, ($context["col_md"] ?? null), "html", null, true);
            echo "\">
                  ";
            // line 99
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 101
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 101)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "entities_id" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 109
($context["item"] ?? null), "fields", [], "any", false, false, false, 109)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null), "rand" =>             // line 110
($context["rand"] ?? null), "required" =>             // line 111
($context["add_reopen"] ?? null)]], 99, $context, $this->getSourceContext());
            // line 113
            echo "
               </div>
               ";
            // line 115
            if ((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface(), "central"))) {
                // line 116
                echo "                  <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-o pe-xxl-auto\">
                     <div class=\"row\">

                        ";
                // line 119
                ob_start(function () { return ''; });
                // line 120
                echo "                           <i class=\"fas fa-reply fa-fw me-1\"
                              title=\"";
                // line 121
                echo twig_escape_filter($this->env, _n("Followup template", "Followup templates", Session::getPluralNumber()), "html", null, true);
                echo "\"></i>
                        ";
                $context["fup_template_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 123
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILFollowupTemplate", "itilfollowuptemplates_id", (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,                 // line 126
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 126)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["itilfollowuptemplates_id"] ?? null) : null),                 // line 127
($context["fup_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itilfollowuptemplate_update" .                 // line 131
($context["rand"] ?? null)) . "(this.value)"), "rand" =>                 // line 132
($context["rand"] ?? null)]], 123, $context, $this->getSourceContext());
                // line 134
                echo "

                        ";
                // line 136
                ob_start(function () { return ''; });
                // line 137
                echo "                           <i class=\"fas fa-inbox fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Source of followup"), "html", null, true);
                echo "\"></i>
                        ";
                $context["fup_source_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 139
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["RequestType", "requesttypes_id", (($__internal_compile_12 = twig_get_attribute($this->env, $this->source,                 // line 142
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 142)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["requesttypes_id"] ?? null) : null),                 // line 143
($context["fup_source_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "condition" => ["is_active" => 1, "is_itilfollowup" => 1], "rand" =>                 // line 151
($context["rand"] ?? null)]], 139, $context, $this->getSourceContext());
                // line 153
                echo "

                        ";
                // line 155
                ob_start(function () { return ''; });
                // line 156
                echo "                           <i class=\"ti ti-lock fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Private"), "html", null, true);
                echo "\"></i>
                        ";
                $context["fup_private_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 158
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["is_private", (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,                 // line 160
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 160)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["is_private"] ?? null) : null),                 // line 161
($context["fup_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 165
($context["rand"] ?? null)]], 158, $context, $this->getSourceContext());
                // line 167
                echo "

                        ";
                // line 169
                if ((($context["can_read_kb"] ?? null) && (1 === twig_compare(($context["kb_id_toload"] ?? null), 0)))) {
                    // line 170
                    echo "                           ";
                    ob_start(function () { return ''; });
                    // line 171
                    echo "                              <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                                 title=\"";
                    // line 172
                    echo twig_escape_filter($this->env, twig_replace_filter(__("Link to knowledge base entry #%id"), ["%id" => ($context["kb_id_toload"] ?? null)]), "html", null, true);
                    echo "\"></i>
                           ";
                    $context["link_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 174
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_sliderField", ["kb_linked_id", 1,                     // line 177
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 181
($context["rand"] ?? null), "yes_value" =>                     // line 182
($context["kb_id_toload"] ?? null)]], 174, $context, $this->getSourceContext());
                    // line 184
                    echo "
                        ";
                }
                // line 186
                echo "
                        ";
                // line 187
                if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                    // line 188
                    echo "                           ";
                    ob_start(function () { return ''; });
                    // line 189
                    echo "                              <i class=\"far fa-save fa-fw me-1\" title=\"";
                    echo twig_escape_filter($this->env, __("Save and add to the knowledge base"), "html", null, true);
                    echo "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                           ";
                    $context["fup_to_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 192
                    echo "                           ";
                    echo twig_call_macro($macros["fields"], "macro_sliderField", ["_fup_to_kb", 0,                     // line 195
($context["fup_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                     // line 199
($context["rand"] ?? null)]], 192, $context, $this->getSourceContext());
                    // line 201
                    echo "
                        ";
                }
                // line 203
                echo "                     </div>
                  </div>
               ";
            }
            // line 206
            echo "            </div>

            ";
            // line 208
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "
            <div class=\"d-flex card-footer mx-n3 mb-n3\">
               ";
            // line 210
            if ((0 >= twig_compare((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 210)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["id"] ?? null) : null), 0))) {
                // line 211
                echo "                  <div class=\"input-group\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                // line 214
                echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                echo "</span>
                     </button>
                     ";
                // line 216
                if (((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface(), "central")) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isAllowedStatus", [0 => (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 216)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["status"] ?? null) : null), 1 => twig_constant("CommonITILObject::WAITING")], "method", false, false, false, 216))) {
                    // line 217
                    echo "                        <span class=\"input-group-text bg-yellow-lt py-0 pe-0\" id=\"pending-reasons-control-";
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\">
                           <span class=\"d-inline-flex align-items-center\" title=\"";
                    // line 218
                    echo twig_escape_filter($this->env, __("Set the status to pending"), "html", null, true);
                    echo "\"
                                 data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                              <i class=\"fas fa-pause me-2\"></i>
                              <label class=\"form-check form-switch pt-2\">
                                 <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                                 <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                                       id=\"enable-pending-reasons-";
                    // line 224
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\"
                                       role=\"button\"
                                       data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
                    // line 226
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\" />
                              </label>
                           </span>

                           <div class=\"collapse ps-2 py-1 flex-fill\" id=\"pending-reasons-setup-";
                    // line 230
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\">
                              ";
                    // line 231
                    echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                    echo "
                           </div>
                        </span>
                     ";
                }
                // line 235
                echo "                  </div>
               ";
            } else {
                // line 237
                echo "                  <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 237)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null), "html", null, true);
                echo "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 240
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 243
                if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 243)) {
                    // line 244
                    echo "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 245
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 247
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 250
                echo "               ";
            }
            // line 251
            echo "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 253
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itilfollowuptemplate_update";
            // line 258
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(value) {
            \$.ajax({
               url: '";
            // line 260
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/itilfollowup.php"), "html", null, true);
            echo "',
               type: 'POST',
               data: {
                  itilfollowuptemplates_id: value,
                  items_id: '";
            // line 264
            echo twig_escape_filter($this->env, (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 264)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["id"] ?? null) : null), "html", null, true);
            echo "',
                  itemtype: '";
            // line 265
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 265), "html", null, true);
            echo "'
               }
            }).done(function (data) {
               var requesttypes_id = isNaN(parseInt(data.requesttypes_id))
                  ? 0
                  : parseInt(data.requesttypes_id);

               // set textarea content
               if (tasktinymce = tinymce.get(\"content_";
            // line 273
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")) {
                  tasktinymce.setContent(data.content);
               }
               // set category
               \$(\"#dropdown_requesttypes_id";
            // line 277
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger(\"setValue\", requesttypes_id);
               // set is_private
               \$(\"#is_private_";
            // line 279
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")
                  .prop(\"checked\", data.is_private == \"0\"
                     ? false
                     : true);
            });
         }
      </script>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_followup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  455 => 279,  450 => 277,  443 => 273,  432 => 265,  428 => 264,  421 => 260,  416 => 258,  408 => 253,  404 => 251,  401 => 250,  395 => 247,  390 => 245,  387 => 244,  385 => 243,  379 => 240,  372 => 237,  368 => 235,  361 => 231,  357 => 230,  350 => 226,  345 => 224,  336 => 218,  331 => 217,  329 => 216,  324 => 214,  319 => 211,  317 => 210,  312 => 208,  308 => 206,  303 => 203,  299 => 201,  297 => 199,  296 => 195,  294 => 192,  287 => 189,  284 => 188,  282 => 187,  279 => 186,  275 => 184,  273 => 182,  272 => 181,  271 => 177,  269 => 174,  264 => 172,  261 => 171,  258 => 170,  256 => 169,  252 => 167,  250 => 165,  249 => 161,  248 => 160,  246 => 158,  240 => 156,  238 => 155,  234 => 153,  232 => 151,  231 => 143,  230 => 142,  228 => 139,  222 => 137,  220 => 136,  216 => 134,  214 => 132,  213 => 131,  212 => 127,  211 => 126,  209 => 123,  204 => 121,  201 => 120,  199 => 119,  194 => 116,  192 => 115,  188 => 113,  186 => 111,  185 => 110,  184 => 109,  183 => 101,  182 => 99,  177 => 98,  175 => 97,  171 => 95,  167 => 93,  164 => 92,  162 => 91,  157 => 89,  153 => 88,  149 => 87,  145 => 86,  141 => 84,  134 => 80,  131 => 79,  124 => 76,  118 => 73,  115 => 72,  113 => 71,  109 => 69,  107 => 68,  104 => 67,  97 => 64,  91 => 61,  88 => 60,  86 => 59,  82 => 57,  80 => 56,  74 => 52,  72 => 49,  68 => 47,  65 => 46,  61 => 45,  56 => 34,  54 => 43,  52 => 42,  50 => 41,  48 => 40,  46 => 39,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_followup.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\form_followup.html.twig");
    }
}
