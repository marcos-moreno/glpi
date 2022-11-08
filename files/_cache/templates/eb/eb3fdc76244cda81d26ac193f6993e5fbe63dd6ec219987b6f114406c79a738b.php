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

/* components/itilobject/fields_panel.html.twig */
class __TwigTemplate_be5da41b3abe44c03aa3caec69a272e54ce800165f36cc9f32553e39552da74e extends Template
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
";
        // line 5
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/fields_panel.html.twig", 5)->unwrap();
        // line 6
        $context["field_options"] = ["full_width" => true, "fields_template" =>         // line 8
($context["itiltemplate"] ?? null), "disabled" =>  !        // line 9
($context["canupdate"] ?? null), "add_field_class" => ((        // line 10
($context["is_expanded"] ?? null)) ? ("col-sm-6") : (""))];
        // line 12
        echo "
";
        // line 13
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 14
        $context["headers_states"] = (($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["items"] ?? null) : null);
        // line 15
        echo "
<div class=\"accordion open accordion-flush\" id=\"itil-data\">
   ";
        // line 17
        $context["main_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "item-main", [], "array", true, true, false, 17) || (0 === twig_compare((($__internal_compile_1 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["item-main"] ?? null) : null), "true")))) ? (true) : (false));
        // line 18
        echo "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-main-item\">
         <button class=\"accordion-button ";
        // line 20
        echo ((($context["main_show"] ?? null)) ? ("") : ("collapsed"));
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#item-main\" aria-expanded=\"true\" aria-controls=\"ticket-main\">
            <i class=\"ti ti-alert-circle me-1 item-icon\"></i>
            <span class='status-recall'>
                ";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getStatusIcon", [0 => (($__internal_compile_2 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 23)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["status"] ?? null) : null)], "method", false, false, false, 23);
        echo "
            </span>
            <span class=\"item-title\">
                ";
        // line 26
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 26), "html", null, true);
        echo "
            </span>
         </button>
      </h2>
      <div id=\"item-main\" class=\"accordion-collapse collapse ";
        // line 30
        echo ((($context["main_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-main-item\">
         <div class=\"accordion-body row m-0 mt-n2\">

            ";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

            ";
        // line 35
        if (Session::isMultiEntitiesMode()) {
            // line 36
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 36)) {
                // line 37
                echo "                  ";
                echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Entity", "entities_id", (($__internal_compile_3 = twig_get_attribute($this->env, $this->source,                 // line 40
($context["item"] ?? null), "fields", [], "any", false, false, false, 40)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["entities_id"] ?? null) : null), _n("Entity", "Entities", 1), twig_array_merge(                // line 42
($context["field_options"] ?? null), ["entity" =>                 // line 43
($context["userentities"] ?? null), "on_change" => "this.form.submit()"])], 37, $context, $this->getSourceContext());
                // line 46
                echo "
               ";
            } else {
                // line 48
                echo "                  ";
                ob_start(function () { return ''; });
                // line 49
                echo "                     ";
                echo $this->extensions['Glpi\Application\View\Extension\PhpExtension']->call("Entity::badgeCompletename", [0 => $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", (($__internal_compile_4 = twig_get_attribute($this->env, $this->source,                 // line 50
($context["item"] ?? null), "fields", [], "any", false, false, false, 50)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["entities_id"] ?? null) : null))]);
                // line 51
                echo "
                  ";
                $context["entity_html"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 53
                echo "
                  ";
                // line 54
                echo twig_call_macro($macros["fields"], "macro_field", ["",                 // line 56
($context["entity_html"] ?? null), _n("Entity", "Entities", 1), twig_array_merge(                // line 58
($context["field_options"] ?? null), ["add_field_class" => "d-flex align-items-center"])], 54, $context, $this->getSourceContext());
                // line 61
                echo "
               ";
            }
            // line 63
            echo "
               ";
            // line 64
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "is_recursive"], "method", false, false, false, 64)) {
                // line 65
                echo "                  ";
                echo twig_call_macro($macros["fields"], "macro_dropdownYesNo", ["is_recursive", (($__internal_compile_5 = twig_get_attribute($this->env, $this->source,                 // line 67
($context["item"] ?? null), "fields", [], "any", false, false, false, 67)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["is_recursive"] ?? null) : null), __("Child entities"),                 // line 69
($context["field_options"] ?? null)], 65, $context, $this->getSourceContext());
                // line 70
                echo "
               ";
            }
            // line 72
            echo "            ";
        }
        // line 73
        echo "
            ";
        // line 74
        echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date", (($__internal_compile_6 = twig_get_attribute($this->env, $this->source,         // line 76
($context["item"] ?? null), "fields", [], "any", false, false, false, 76)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["date"] ?? null) : null), __("Opening date"),         // line 78
($context["field_options"] ?? null)], 74, $context, $this->getSourceContext());
        // line 79
        echo "

            ";
        // line 81
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 81), "Ticket"))) {
            // line 82
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["time_to_resolve", (($__internal_compile_7 = twig_get_attribute($this->env, $this->source,             // line 84
($context["item"] ?? null), "fields", [], "any", false, false, false, 84)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["time_to_resolve"] ?? null) : null), __("Time to resolve"),             // line 86
($context["field_options"] ?? null)], 82, $context, $this->getSourceContext());
            // line 87
            echo "
            ";
        }
        // line 89
        echo "
            ";
        // line 90
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isSolved", [0 => true], "method", false, false, false, 90)) {
            // line 91
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["solvedate", (($__internal_compile_8 = twig_get_attribute($this->env, $this->source,             // line 93
($context["item"] ?? null), "fields", [], "any", false, false, false, 93)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["solvedate"] ?? null) : null), __("Resolution date"),             // line 95
($context["field_options"] ?? null)], 91, $context, $this->getSourceContext());
            // line 96
            echo "
            ";
        }
        // line 98
        echo "
            ";
        // line 99
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isClosed", [], "method", false, false, false, 99)) {
            // line 100
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["closedate", (($__internal_compile_9 = twig_get_attribute($this->env, $this->source,             // line 102
($context["item"] ?? null), "fields", [], "any", false, false, false, 102)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["closedate"] ?? null) : null), __("Close date"),             // line 104
($context["field_options"] ?? null)], 100, $context, $this->getSourceContext());
            // line 105
            echo "
            ";
        }
        // line 107
        echo "
            ";
        // line 108
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 108), "Ticket"))) {
            // line 109
            echo "               ";
            $context["type_params"] = twig_array_merge(["value" => (($__internal_compile_10 = twig_get_attribute($this->env, $this->source,             // line 110
($context["item"] ?? null), "fields", [], "any", false, false, false, 110)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["type"] ?? null) : null), "width" => "100%", "display" => false],             // line 113
($context["field_options"] ?? null));
            // line 114
            echo "               ";
            if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 114)) {
                // line 115
                echo "                  ";
                $context["type_params"] = twig_array_merge(($context["type_params"] ?? null), ["on_change" => "this.form.submit()"]);
                // line 116
                echo "               ";
            } else {
                // line 117
                echo "                  ";
                $context["type_params"] = twig_array_merge(($context["type_params"] ?? null), ["on_change" => "reloadCategory()"]);
                // line 118
                echo "               ";
            }
            // line 119
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_field", ["type", twig_get_attribute($this->env, $this->source,             // line 121
($context["item"] ?? null), "dropdownType", [0 => "type", 1 => ($context["type_params"] ?? null)], "method", false, false, false, 121), _n("Type", "Types", 1),             // line 123
($context["field_options"] ?? null)], 119, $context, $this->getSourceContext());
            // line 124
            echo "
            ";
        }
        // line 126
        echo "
            ";
        // line 127
        $context["cat_params"] = twig_array_merge(($context["field_options"] ?? null), ["entity" => (($__internal_compile_11 = twig_get_attribute($this->env, $this->source,         // line 128
($context["item"] ?? null), "fields", [], "any", false, false, false, 128)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["entities_id"] ?? null) : null), "disabled" =>  !(        // line 129
($context["canupdate"] ?? null) || ($context["can_requester"] ?? null))]);
        // line 131
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 131)) {
            // line 132
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["on_change" => "this.form.submit()"]);
            // line 135
            echo "            ";
        }
        // line 136
        echo "            ";
        if ((( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 136) && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "itilcategories_id"], "method", false, false, false, 136)) && (1 === twig_compare((($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 136)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["itilcategories_id"] ?? null) : null), 0)))) {
            // line 137
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["display_emptychoice" => false]);
            // line 140
            echo "            ";
        }
        // line 141
        echo "            
            ";
        // line 142
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 142), "Ticket"))) {
            // line 143
            echo "               ";
            if ((0 === twig_compare((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 143)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["type"] ?? null) : null), twig_constant("Ticket::INCIDENT_TYPE")))) {
                // line 144
                echo "                  ";
                $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_incident" => 1]]);
                // line 145
                echo "               ";
            } elseif ((0 === twig_compare((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 145)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["type"] ?? null) : null), twig_constant("Ticket::DEMAND_TYPE")))) {
                // line 146
                echo "                  ";
                $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_request" => 1]]);
                // line 147
                echo "               ";
            }
            // line 148
            echo "            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 148), "Problem"))) {
            // line 149
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_problem" => 1]]);
            // line 150
            echo "            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 150), "Change"))) {
            // line 151
            echo "               ";
            $context["cat_params"] = twig_array_merge(($context["cat_params"] ?? null), ["condition" => ["is_change" => 1]]);
            // line 152
            echo "            ";
        }
        // line 153
        echo "            
            <span id=\"category_block_";
        // line 154
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
            ";
        // line 155
        echo twig_call_macro($macros["fields"], "macro_dropdownField", ["ITILCategory", "itilcategories_id", (($__internal_compile_15 = twig_get_attribute($this->env, $this->source,         // line 158
($context["item"] ?? null), "fields", [], "any", false, false, false, 158)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["itilcategories_id"] ?? null) : null), _n("Category", "Categories", 1),         // line 160
($context["cat_params"] ?? null)], 155, $context, $this->getSourceContext());
        // line 161
        echo "
            </span>

            ";
        // line 164
        echo twig_include($this->env, $context, "components/itilobject/fields/status.html.twig");
        echo "

            ";
        // line 166
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "requesttypes_id"], "method", false, false, false, 166)) {
            // line 167
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["RequestType", "requesttypes_id", (($__internal_compile_16 = twig_get_attribute($this->env, $this->source,             // line 170
($context["item"] ?? null), "fields", [], "any", false, false, false, 170)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["requesttypes_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("RequestType"), twig_array_merge(            // line 172
($context["field_options"] ?? null), ["condition" => ["is_active" => 1, "is_ticketheader" => 1]])], 167, $context, $this->getSourceContext());
            // line 178
            echo "
            ";
        }
        // line 180
        echo "
            ";
        // line 181
        echo twig_include($this->env, $context, "components/itilobject/fields/priority_matrix.html.twig");
        echo "

            ";
        // line 183
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => "locations_id"], "method", false, false, false, 183)) {
            // line 184
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Location", "locations_id", (($__internal_compile_17 = twig_get_attribute($this->env, $this->source,             // line 187
($context["item"] ?? null), "fields", [], "any", false, false, false, 187)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["locations_id"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Location"), twig_array_merge(            // line 189
($context["field_options"] ?? null), ["hide_if_no_elements" => true])], 184, $context, $this->getSourceContext());
            // line 192
            echo "
            ";
        }
        // line 194
        echo "
            ";
        // line 195
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 195) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 195), "Ticket")))) {
            // line 196
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Contract", "_contracts_id", ((twig_get_attribute($this->env, $this->source,             // line 199
($context["params"] ?? null), "_contracts_id", [], "array", true, true, false, 199)) ? (_twig_default_filter((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["_contracts_id"] ?? null) : null), 0)) : (0)), $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Contract"), twig_array_merge(            // line 201
($context["field_options"] ?? null), ["entity" => (($__internal_compile_19 = twig_get_attribute($this->env, $this->source,             // line 202
($context["item"] ?? null), "fields", [], "any", false, false, false, 202)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["entities_id"] ?? null) : null), "width" => "100%", "hide_if_no_elements" => true])], 196, $context, $this->getSourceContext());
            // line 206
            echo "
            ";
        }
        // line 208
        echo "
            ";
        // line 209
        if (((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 209), "Ticket")) || twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 209))) {
            // line 210
            echo "               ";
            echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["actiontime", (($__internal_compile_20 = twig_get_attribute($this->env, $this->source,             // line 212
($context["item"] ?? null), "fields", [], "any", false, false, false, 212)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["actiontime"] ?? null) : null), __("Total duration"),             // line 214
($context["field_options"] ?? null)], 210, $context, $this->getSourceContext());
            // line 215
            echo "
            ";
        }
        // line 217
        echo "
            ";
        // line 218
        echo twig_include($this->env, $context, "components/itilobject/fields/global_validation.html.twig");
        echo "

            ";
        // line 220
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "
         </div>
      </div>
   </div>

   ";
        // line 225
        $context["actors_show"] = ((( !twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "actors", [], "array", true, true, false, 225) || (0 === twig_compare((($__internal_compile_21 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["actors"] ?? null) : null), "true")))) ? (true) : (false));
        // line 226
        echo "   <div class=\"accordion-item\">
      <h2 class=\"accordion-header\" id=\"heading-actor\" title=\"";
        // line 227
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "\" data-bs-toggle=\"tooltip\">
         <button class=\"accordion-button ";
        // line 228
        echo ((($context["actors_show"] ?? null)) ? ("") : ("collapsed"));
        echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#actors\" aria-expanded=\"true\" aria-controls=\"actors\">
            <i class=\"ti ti-users me-1\"></i>
            <span class=\"item-title\">
                ";
        // line 231
        echo twig_escape_filter($this->env, __("Actors"), "html", null, true);
        echo "
            </span>  
            <span class=\"badge bg-secondary ms-2\">
               ";
        // line 234
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "countActors", [], "method", false, false, false, 234), "html", null, true);
        echo "
            </span>
         </button>
      </h2>
      <div id=\"actors\" class=\"accordion-collapse collapse ";
        // line 238
        echo ((($context["actors_show"] ?? null)) ? ("show") : (""));
        echo "\" aria-labelledby=\"heading-actor\">
         <div class=\"accordion-body accordion-actors row m-0 mt-n2\">
            ";
        // line 240
        echo twig_include($this->env, $context, "components/itilobject/actors/main.html.twig");
        echo "
         </div>
      </div>
   </div>
 

    

   ";
        // line 248
        if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 248), [0 => "Problem", 1 => "Change"])) {
            // line 249
            echo "      ";
            $context["analysis_fields"] = ["impactcontent" => __("Impacts"), "causecontent" => __("Causes"), "symptomcontent" => __("Symptoms"), "controlistcontent" => __("Control list")];
            // line 255
            echo "
      ";
            // line 256
            $context["nb_analysis"] = 0;
            // line 257
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 258
                echo "         ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["analysis_field"]], "method", false, false, false, 258) && (1 === twig_compare(twig_length_filter($this->env, twig_trim_filter((($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 258)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22[$context["analysis_field"]] ?? null) : null))), 0)))) {
                    // line 259
                    echo "            ";
                    $context["nb_analysis"] = (($context["nb_analysis"] ?? null) + 1);
                    // line 260
                    echo "         ";
                }
                // line 261
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 262
            echo "      ";
            $context["analysis_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "analysis", [], "array", true, true, false, 262) && (0 === twig_compare((($__internal_compile_23 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["analysis"] ?? null) : null), "true")))) ? (true) : (false));
            // line 263
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"analysis-heading\" title=\"";
            // line 264
            echo twig_escape_filter($this->env, __("Analysis"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 265
            echo ((($context["analysis_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#analysis\" aria-expanded=\"true\" aria-controls=\"analysis\">
               <i class=\"ti ti-eyeglass me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 268
            echo twig_escape_filter($this->env, __("Analysis"), "html", null, true);
            echo "
               </span>
               ";
            // line 270
            if ((1 === twig_compare(($context["nb_analysis"] ?? null), 0))) {
                // line 271
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_analysis"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 273
            echo "            </button>
         </h2>
         <div id=\"analysis\" class=\"accordion-collapse collapse ";
            // line 275
            echo ((($context["analysis_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"analysis-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["analysis_fields"] ?? null));
            foreach ($context['_seq'] as $context["analysis_field"] => $context["label"]) {
                // line 278
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["analysis_field"]], "method", false, false, false, 278)) {
                    // line 279
                    echo "                     ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [                    // line 280
$context["analysis_field"], (($__internal_compile_24 = twig_get_attribute($this->env, $this->source,                     // line 281
($context["item"] ?? null), "fields", [], "any", false, false, false, 281)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24[$context["analysis_field"]] ?? null) : null),                     // line 282
$context["label"], twig_array_merge(                    // line 283
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 279, $context, $this->getSourceContext());
                    // line 287
                    echo "
                  ";
                }
                // line 289
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['analysis_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 290
            echo "            </div>
         </div>
      </div>
   ";
        }
        // line 294
        echo "
   ";
        // line 295
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 295), "Change"))) {
            // line 296
            echo "      ";
            $context["plans_fields"] = ["rolloutplancontent" => __("Deployment plan"), "backoutplancontent" => __("Backup plan"), "checklistcontent" => __("Checklist")];
            // line 301
            echo "
      ";
            // line 302
            $context["nb_plans"] = 0;
            // line 303
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 304
                echo "         ";
                if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["plans_field"]], "method", false, false, false, 304) && (1 === twig_compare(twig_length_filter($this->env, twig_trim_filter((($__internal_compile_25 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 304)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25[$context["plans_field"]] ?? null) : null))), 0)))) {
                    // line 305
                    echo "            ";
                    $context["nb_plans"] = (($context["nb_plans"] ?? null) + 1);
                    // line 306
                    echo "         ";
                }
                // line 307
                echo "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 308
            echo "
      ";
            // line 309
            $context["plans_show"] = (((twig_get_attribute($this->env, $this->source, ($context["headers_states"] ?? null), "plans", [], "array", true, true, false, 309) && (0 === twig_compare((($__internal_compile_26 = ($context["headers_states"] ?? null)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["plans"] ?? null) : null), "true")))) ? (true) : (false));
            // line 310
            echo "      <div class=\"accordion-item\">
         <h2 class=\"accordion-header\" id=\"plans-heading\" title=\"";
            // line 311
            echo twig_escape_filter($this->env, __("Plans"), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            <button class=\"accordion-button ";
            // line 312
            echo ((($context["plans_show"] ?? null)) ? ("") : ("collapsed"));
            echo "\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#plans\" aria-expanded=\"true\" aria-controls=\"plans\">
               <i class=\"ti ti-checkup-list me-1\"></i>
               <span class=\"item-title\">
                    ";
            // line 315
            echo twig_escape_filter($this->env, __("Plans"), "html", null, true);
            echo "
               </span>
               ";
            // line 317
            if ((1 === twig_compare(($context["nb_plans"] ?? null), 0))) {
                // line 318
                echo "                  <span class=\"badge bg-secondary ms-2\">";
                echo twig_escape_filter($this->env, ($context["nb_plans"] ?? null), "html", null, true);
                echo "</span>
               ";
            }
            // line 320
            echo "            </button>
         </h2>
         <div id=\"plans\" class=\"accordion-collapse collapse ";
            // line 322
            echo ((($context["plans_show"] ?? null)) ? ("show") : (""));
            echo "\" aria-labelledby=\"plans-heading\">
            <div class=\"accordion-body row m-0 mt-n2\">
               ";
            // line 324
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["plans_fields"] ?? null));
            foreach ($context['_seq'] as $context["plans_field"] => $context["label"]) {
                // line 325
                echo "                  ";
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isField", [0 => $context["plans_field"]], "method", false, false, false, 325)) {
                    // line 326
                    echo "                     ";
                    echo twig_call_macro($macros["fields"], "macro_textareaField", [                    // line 327
$context["plans_field"], (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,                     // line 328
($context["item"] ?? null), "fields", [], "any", false, false, false, 328)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27[$context["plans_field"]] ?? null) : null),                     // line 329
$context["label"], twig_array_merge(                    // line 330
($context["field_options"] ?? null), ["enable_richtext" => true, "is_horizontal" => false])], 326, $context, $this->getSourceContext());
                    // line 334
                    echo "
                  ";
                }
                // line 336
                echo "               ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['plans_field'], $context['label'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 337
            echo "            </div>
         </div>
      </div>
   ";
        }
        // line 341
        echo "
    <span class=\"d-none d-md-block\">
        <button type=\"button\" class=\"switch-panel-width btn btn-sm btn-square btn-icon btn-ghost-secondary position-absolute bottom-0 start-0 mb-2\">
            <i class=\"fas fa-caret-left\"></i>
        </button>
    </span>
</div>

<script type=\"text/javascript\">
\$(function() {
   if (\$(window).width() < 768) { // medium breakpoint (Todo check if it's possible to get bootstrap breakpoints withint javascript)
      \$('#itil-data .accordion-collapse').each(function() {
         \$(this).removeClass('show');
      })
   }
});

var reloadCategory = function() {
    var type = \$('[name=type]').val();

    \$('#category_block_";
        // line 361
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo " .field-container').load(
        '";
        // line 362
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("ajax/dropdownTicketCategories.php"), "html", null, true);
        echo "',
        {
            'type': type,
            'entity_restrict': ";
        // line 365
        echo twig_escape_filter($this->env, (($__internal_compile_28 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 365)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["entities_id"] ?? null) : null), "html", null, true);
        echo ",
            'value': ";
        // line 366
        echo twig_escape_filter($this->env, (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 366)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["itilcategories_id"] ?? null) : null), "html", null, true);
        echo ",
        }
    );
};
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/fields_panel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  669 => 366,  665 => 365,  659 => 362,  655 => 361,  633 => 341,  627 => 337,  621 => 336,  617 => 334,  615 => 330,  614 => 329,  613 => 328,  612 => 327,  610 => 326,  607 => 325,  603 => 324,  598 => 322,  594 => 320,  588 => 318,  586 => 317,  581 => 315,  575 => 312,  571 => 311,  568 => 310,  566 => 309,  563 => 308,  557 => 307,  554 => 306,  551 => 305,  548 => 304,  543 => 303,  541 => 302,  538 => 301,  535 => 296,  533 => 295,  530 => 294,  524 => 290,  518 => 289,  514 => 287,  512 => 283,  511 => 282,  510 => 281,  509 => 280,  507 => 279,  504 => 278,  500 => 277,  495 => 275,  491 => 273,  485 => 271,  483 => 270,  478 => 268,  472 => 265,  468 => 264,  465 => 263,  462 => 262,  456 => 261,  453 => 260,  450 => 259,  447 => 258,  442 => 257,  440 => 256,  437 => 255,  434 => 249,  432 => 248,  421 => 240,  416 => 238,  409 => 234,  403 => 231,  397 => 228,  393 => 227,  390 => 226,  388 => 225,  380 => 220,  375 => 218,  372 => 217,  368 => 215,  366 => 214,  365 => 212,  363 => 210,  361 => 209,  358 => 208,  354 => 206,  352 => 202,  351 => 201,  350 => 199,  348 => 196,  346 => 195,  343 => 194,  339 => 192,  337 => 189,  336 => 187,  334 => 184,  332 => 183,  327 => 181,  324 => 180,  320 => 178,  318 => 172,  317 => 170,  315 => 167,  313 => 166,  308 => 164,  303 => 161,  301 => 160,  300 => 158,  299 => 155,  295 => 154,  292 => 153,  289 => 152,  286 => 151,  283 => 150,  280 => 149,  277 => 148,  274 => 147,  271 => 146,  268 => 145,  265 => 144,  262 => 143,  260 => 142,  257 => 141,  254 => 140,  251 => 137,  248 => 136,  245 => 135,  242 => 132,  239 => 131,  237 => 129,  236 => 128,  235 => 127,  232 => 126,  228 => 124,  226 => 123,  225 => 121,  223 => 119,  220 => 118,  217 => 117,  214 => 116,  211 => 115,  208 => 114,  206 => 113,  205 => 110,  203 => 109,  201 => 108,  198 => 107,  194 => 105,  192 => 104,  191 => 102,  189 => 100,  187 => 99,  184 => 98,  180 => 96,  178 => 95,  177 => 93,  175 => 91,  173 => 90,  170 => 89,  166 => 87,  164 => 86,  163 => 84,  161 => 82,  159 => 81,  155 => 79,  153 => 78,  152 => 76,  151 => 74,  148 => 73,  145 => 72,  141 => 70,  139 => 69,  138 => 67,  136 => 65,  134 => 64,  131 => 63,  127 => 61,  125 => 58,  124 => 56,  123 => 54,  120 => 53,  116 => 51,  114 => 50,  112 => 49,  109 => 48,  105 => 46,  103 => 43,  102 => 42,  101 => 40,  99 => 37,  96 => 36,  94 => 35,  89 => 33,  83 => 30,  76 => 26,  70 => 23,  64 => 20,  60 => 18,  58 => 17,  54 => 15,  52 => 14,  50 => 13,  47 => 12,  45 => 10,  44 => 9,  43 => 8,  42 => 6,  40 => 5,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/fields_panel.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\fields_panel.html.twig");
    }
}
