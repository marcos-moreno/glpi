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

/* components/itilobject/timeline/form_validation.html.twig */
class __TwigTemplate_3160ecda93bd51f51f66e62a56ff092465271f4bbd985a4ae66d3fc354541daa extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_validation.html.twig", 35)->unwrap();
        // line 37
        $context["params"] = ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([]));
        // line 34
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_validation.html.twig", 34);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 39
    public function block_timeline_card($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "   ";
        if ((0 === twig_compare(($context["form_mode"] ?? null), "view"))) {
            // line 41
            echo "      <div class=\"read-only-content w-100\">
         ";
            // line 42
            echo (($__internal_compile_0 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["content"] ?? null) : null);
            echo "

         ";
            // line 44
            if (twig_length_filter($this->env, (($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["comment_submission"] ?? null) : null))) {
                // line 45
                echo "            <div class='alert alert-info mt-2'>
                <div class='d-flex'>
                    <div><i class='ti ti-quote me-2'></i></div>
                    <div class=\"rich_text_container\">
                        ";
                // line 49
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["comment_submission"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
                // line 52
                echo "
                    </div>
                </div>
            </div>
         ";
            }
            // line 57
            echo "         ";
            if (twig_length_filter($this->env, (($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["comment_validation"] ?? null) : null))) {
                // line 58
                echo "            <div class='alert alert-info mt-2'>
                <div class='d-flex'>
                    <div><i class='ti ti-quote me-2'></i></div>
                    <div class=\"rich_text_container\">
                        ";
                // line 62
                echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["comment_validation"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
                // line 65
                echo "
                    </div>
                </div>
            </div>
         ";
            }
            // line 70
            echo "
         ";
            // line 71
            if ((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["can_answer"] ?? null) : null)) {
                // line 72
                echo "            <hr class=\"my-2\" />
            <form id=\"validationanswers_id_";
                // line 73
                echo twig_escape_filter($this->env, (($__internal_compile_6 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["id"] ?? null) : null), "html", null, true);
                echo "\"
                  action=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeFormPath((($__internal_compile_7 = ($context["entry"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["type"] ?? null) : null)), "html", null, true);
                echo "\" method=\"post\" data-submit-once>

               <input type=\"hidden\" name=\"id\" value=\"";
                // line 76
                echo twig_escape_filter($this->env, (($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["id"] ?? null) : null), "html", null, true);
                echo "\" />
               <input type=\"hidden\" name=\"users_id_validate\" value=\"";
                // line 77
                echo twig_escape_filter($this->env, (($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["users_id_validate"] ?? null) : null), "html", null, true);
                echo "\" />
               <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
                // line 78
                echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
                echo "\" />
               ";
                // line 79
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
                echo "

               <div class=\"mb-3 comment-part\">
                  ";
                // line 82
                echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment_validation", "", _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "is_horizontal" => false, "enable_fileupload" => false, "enable_mentions" => true, "entities_id" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,                 // line 92
($context["item"] ?? null), "fields", [], "any", false, false, false, 92)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["entities_id"] ?? null) : null), "rand" =>                 // line 93
($context["rand"] ?? null)]], 82, $context, $this->getSourceContext());
                // line 95
                echo "

                  ";
                // line 97
                echo twig_call_macro($macros["fields"], "macro_fileField", ["filename", null, "", ["multiple" => true, "full_width" => true, "no_label" => true]], 97, $context, $this->getSourceContext());
                // line 106
                echo "
               </div>

               <div class=\"validation-footer\">
                  <button type=\"submit\" class=\"btn btn-outline-green\" name=\"approval_action\" value=\"approve\">
                     <i class=\"fas fa-thumbs-up\"></i>
                     <span class=\"validation-label\">";
                // line 112
                echo twig_escape_filter($this->env, __("Approve"), "html", null, true);
                echo "</span>
                  </button>
                  <button type=\"submit\" class=\"btn btn-outline-red\" name=\"approval_action\" value=\"refuse\">
                     <i class=\"fas fa-thumbs-down\"></i>
                     <span class=\"validation-label\">";
                // line 116
                echo twig_escape_filter($this->env, __("Refuse"), "html", null, true);
                echo "</span>
                  </button>
               </div>
            </form>
         ";
            }
            // line 121
            echo "      </div>
   ";
        } elseif ((0 === twig_compare(        // line 122
($context["form_mode"] ?? null), "answer"))) {
            // line 123
            echo "      <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
            action=\"";
            // line 124
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 124), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>

         <input type=\"hidden\" name=\"id\" value=\"";
            // line 126
            echo twig_escape_filter($this->env, (($__internal_compile_11 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 126)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["id"] ?? null) : null), "html", null, true);
            echo "\" />
         <input type=\"hidden\" name=\"users_id_validate\" value=\"";
            // line 127
            echo twig_escape_filter($this->env, (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 127)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["users_id_validate"] ?? null) : null), "html", null, true);
            echo "\" />
         <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 128
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />

         ";
            // line 130
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

         <div class=\"mb-3 comment-part\">
            ";
            // line 133
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment_validation", (($__internal_compile_13 = twig_get_attribute($this->env, $this->source,             // line 135
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 135)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["comment_validation"] ?? null) : null), _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "is_horizontal" => false, "enable_fileupload" => false, "enable_mentions" => true, "entities_id" => (($__internal_compile_14 = twig_get_attribute($this->env, $this->source,             // line 143
($context["item"] ?? null), "fields", [], "any", false, false, false, 143)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["entities_id"] ?? null) : null), "rand" =>             // line 144
($context["rand"] ?? null)]], 133, $context, $this->getSourceContext());
            // line 146
            echo "

            ";
            // line 148
            echo twig_call_macro($macros["fields"], "macro_fileField", ["filename", null, "", ["multiple" => true, "full_width" => true, "no_label" => true]], 148, $context, $this->getSourceContext());
            // line 157
            echo "
         </div>

         <div class=\"validation-footer\">
            <button type=\"submit\" class=\"btn btn-outline-green\" name=\"approval_action\" value=\"approve\">
               <i class=\"fas fa-thumbs-up\"></i>
               <span class=\"validation-label\">";
            // line 163
            echo twig_escape_filter($this->env, __("Approve"), "html", null, true);
            echo "</span>
            </button>
            <button type=\"submit\" class=\"btn btn-outline-red\" name=\"approval_action\" value=\"refuse\">
               <i class=\"fas fa-thumbs-down\"></i>
               <span class=\"validation-label\">";
            // line 167
            echo twig_escape_filter($this->env, __("Refuse"), "html", null, true);
            echo "</span>
            </button>
         </div>
      </form>
   ";
        } else {
            // line 172
            echo "      <div class=\"itilvalidation card mt-4\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 174
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 174), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 175), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"";
            // line 176
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 176), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_15 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 176)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["id"] ?? null) : null), "html", null, true);
            echo "\" />

            <div class=\"card-header\">
                <h3 class=\"cart-title\">";
            // line 179
            echo twig_escape_filter($this->env, __("Validation request"), "html", null, true);
            echo "</h3>
            </div>
            <div class=\"card-body\">
                ";
            // line 182
            echo twig_call_macro($macros["fields"], "macro_readOnlyField", ["approval_requester", twig_get_attribute($this->env, $this->source, $this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentUser(), "getFriendlyName", [], "method", false, false, false, 184), _n("Requester", "Requesters", 1), ["full_width" => true, "rand" =>             // line 188
($context["rand"] ?? null)]], 182, $context, $this->getSourceContext());
            // line 190
            echo "

                ";
            // line 192
            if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "isNewItem", [], "method", false, false, false, 192)) {
                // line 193
                echo "                    ";
                echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["validatortype", (($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 193)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["validatortype"] ?? null) : null), ["User" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "Group" => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group")], __("Approver"), ["display_emptychoice" => true, "rand" =>                 // line 198
($context["rand"] ?? null), "field_class" => "col-12", "label_class" => "col-xxl-4", "input_class" => "col-xxl-8 flex-wrap", "add_field_html" => (("<span id=\"show_validator_field" .                 // line 202
($context["rand"] ?? null)) . "\" class=\"flex-grow-1\">&nbsp;</span>")]], 193, $context, $this->getSourceContext());
                // line 203
                echo "
                    ";
                // line 204
                if ( !(null === (($__internal_compile_17 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 204)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["validatortype"] ?? null) : null))) {
                    // line 205
                    echo "                    <script type=\"application/javascript\">
                        \$('#show_validator_field";
                    // line 206
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "').load(CFG_GLPI.root_doc + '/ajax/dropdownValidator.php', {
                            id: ";
                    // line 207
                    echo twig_escape_filter($this->env, (($__internal_compile_18 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 207)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["id"] ?? null) : null), "html", null, true);
                    echo ",
                            entity: ";
                    // line 208
                    echo twig_escape_filter($this->env, (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 208)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["entities_id"] ?? null) : null), "html", null, true);
                    echo ",
                            right: \"";
                    // line 209
                    echo ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 209) === "Ticket") && (0 === twig_compare((($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 209)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["type"] ?? null) : null), 2)))) ? ("validate_request") : ("validate_incident"));
                    echo "\",
                            validatortype: \"";
                    // line 210
                    echo ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 210), "users_id_validate", [], "array", false, true, false, 210), "groups_id", [], "array", true, true, false, 210)) ? ("Group") : ((( !twig_test_empty((($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 210)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["users_id_validate"] ?? null) : null))) ? ("User") : (""))));
                    echo "\"
                        });
                    </script>
                    ";
                } else {
                    // line 214
                    echo "                    <script type=\"application/javascript\">
                        updateItemOnSelectEvent(\"dropdown_validatortype";
                    // line 215
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "\", '#show_validator_field";
                    echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                    echo "',
                            CFG_GLPI.root_doc + '/ajax/dropdownValidator.php', {
                                id: 0,
                                entity: ";
                    // line 218
                    echo twig_escape_filter($this->env, (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 218)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["entities_id"] ?? null) : null), "html", null, true);
                    echo ",
                                right: \"";
                    // line 219
                    echo ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 219) === "Ticket") && (0 === twig_compare((($__internal_compile_23 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 219)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["type"] ?? null) : null), 2)))) ? ("validate_request") : ("validate_incident"));
                    echo "\",
                                validatortype: '__VALUE__',
                                groups_id: 0
                            });
                    </script>
                    ";
                }
                // line 225
                echo "                ";
            } else {
                // line 226
                echo "                    ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id_validate", (($__internal_compile_24 = twig_get_attribute($this->env, $this->source,                 // line 229
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 229)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["users_id_validate"] ?? null) : null), __("Approver"), ["disabled" => true, "full_width" => true]], 226, $context, $this->getSourceContext());
                // line 235
                echo "
                ";
            }
            // line 237
            echo "
                ";
            // line 238
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["comment_submission", (($__internal_compile_25 = twig_get_attribute($this->env, $this->source,             // line 240
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 240)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["comment_submission"] ?? null) : null), _n("Comment", "Comments", 1), ["full_width" => true, "enable_richtext" => true, "enable_fileupload" => false, "enable_mentions" => true, "entities_id" => (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 247
($context["item"] ?? null), "fields", [], "any", false, false, false, 247)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["entities_id"] ?? null) : null), "rand" =>             // line 248
($context["rand"] ?? null)]], 238, $context, $this->getSourceContext());
            // line 250
            echo "

                ";
            // line 252
            echo twig_call_macro($macros["fields"], "macro_fileField", ["filename", null, "", ["multiple" => true, "full_width" => true]], 252, $context, $this->getSourceContext());
            // line 260
            echo "
            </div>

            ";
            // line 263
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            <div class=\"d-flex justify-content-center card-footer\">
               ";
            // line 266
            if ((0 >= twig_compare((($__internal_compile_27 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 266)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["id"] ?? null) : null), 0))) {
                // line 267
                echo "                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"add\">
                     <i class=\"fas fa-plus\"></i>
                     <span>";
                // line 269
                echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                echo "</span>
                  </button>
               ";
            } else {
                // line 272
                echo "                  <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_28 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 272)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["id"] ?? null) : null), "html", null, true);
                echo "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 275
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 278
                if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 278)) {
                    // line 279
                    echo "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 280
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 282
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 285
                echo "               ";
            }
            // line 286
            echo "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 288
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         </form>
      </div>

      ";
            // line 292
            if (($context["scroll"] ?? null)) {
                // line 293
                echo "         <script type=\"text/javascript\">
            window.scrollTo(0,document.body.scrollHeight);
         </script>
      ";
            }
            // line 297
            echo "   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 297,  423 => 293,  421 => 292,  414 => 288,  410 => 286,  407 => 285,  401 => 282,  396 => 280,  393 => 279,  391 => 278,  385 => 275,  378 => 272,  372 => 269,  368 => 267,  366 => 266,  360 => 263,  355 => 260,  353 => 252,  349 => 250,  347 => 248,  346 => 247,  345 => 240,  344 => 238,  341 => 237,  337 => 235,  335 => 229,  333 => 226,  330 => 225,  321 => 219,  317 => 218,  309 => 215,  306 => 214,  299 => 210,  295 => 209,  291 => 208,  287 => 207,  283 => 206,  280 => 205,  278 => 204,  275 => 203,  273 => 202,  272 => 198,  270 => 193,  268 => 192,  264 => 190,  262 => 188,  261 => 182,  255 => 179,  247 => 176,  243 => 175,  239 => 174,  235 => 172,  227 => 167,  220 => 163,  212 => 157,  210 => 148,  206 => 146,  204 => 144,  203 => 143,  202 => 135,  201 => 133,  195 => 130,  190 => 128,  186 => 127,  182 => 126,  177 => 124,  174 => 123,  172 => 122,  169 => 121,  161 => 116,  154 => 112,  146 => 106,  144 => 97,  140 => 95,  138 => 93,  137 => 92,  136 => 82,  130 => 79,  126 => 78,  122 => 77,  118 => 76,  113 => 74,  109 => 73,  106 => 72,  104 => 71,  101 => 70,  94 => 65,  92 => 62,  86 => 58,  83 => 57,  76 => 52,  74 => 49,  68 => 45,  66 => 44,  61 => 42,  58 => 41,  55 => 40,  51 => 39,  46 => 34,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_validation.html.twig", "/var/www/html/glpi/templates/components/itilobject/timeline/form_validation.html.twig");
    }
}
