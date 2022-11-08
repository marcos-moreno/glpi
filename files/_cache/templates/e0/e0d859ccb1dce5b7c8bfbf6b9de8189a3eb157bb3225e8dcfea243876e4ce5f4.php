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

/* components/itilobject/timeline/form_task.html.twig */
class __TwigTemplate_62f4b1f5cddb552e87c2ad417b22e3e76305a7ec2e0adda4d5f1270e4f301a95 extends Template
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
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/timeline/form_task.html.twig", 35)->unwrap();
        // line 37
        $context["params"] = twig_array_merge(["parent" => ($context["item"] ?? null)], ((array_key_exists("params", $context)) ? (_twig_default_filter(($context["params"] ?? null), [])) : ([])));
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
        $this->parent = $this->loadTemplate("components/itilobject/timeline/form_timeline_item.html.twig", "components/itilobject/timeline/form_task.html.twig", 34);
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
            echo "      <div class=\"read-only-content ";
            echo ((((($__internal_compile_1 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["state"] ?? null) : null) === constant("Planning::DONE"))) ? ("done") : (""));
            echo "\">
         <div class=\"rich_text_container text-content\" data-bs-html=\"true\" data-bs-custom-class=\"todo-list-tooltip\"
              title=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getTextFromHtml((($__internal_compile_2 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["content"] ?? null) : null)), "html", null, true);
            echo "\" data-bs-toggle=\"tooltip\">
            ";
            // line 50
            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getEnhancedHtml((($__internal_compile_3 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["content"] ?? null) : null), ["user_mentions" => true, "images_gallery" => true]);
            // line 53
            echo "
         </div>

         <div class=\"timeline-badges\">
            ";
            // line 57
            if ((($__internal_compile_4 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["users_id_tech"] ?? null) : null)) {
                // line 58
                echo "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 59
                $context["is_current_tech"] = (0 === twig_compare((($__internal_compile_5 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["users_id_tech"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID")));
                // line 60
                echo "                  ";
                $context["anonym_tech"] = (((0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->getCurrentInterface(), "helpdesk")) &&  !($context["is_current_tech"] ?? null)) && (0 !== twig_compare($this->extensions['Glpi\Application\View\Extension\ConfigExtension']->getEntityConfig("anonymize_support_agents", $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")), twig_constant("Entity::ANONYMIZE_DISABLED"))));
                // line 61
                echo "                  ";
                echo twig_include($this->env, $context, "components/user/link_with_tooltip.html.twig", ["users_id" => (($__internal_compile_6 =                 // line 62
($context["entry_i"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["users_id_tech"] ?? null) : null), "enable_anonymization" =>                 // line 63
($context["anonym_tech"] ?? null)], false);
                // line 64
                echo "
               </span>
            ";
            }
            // line 67
            echo "
            ";
            // line 68
            if ((($__internal_compile_7 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["groups_id_tech"] ?? null) : null)) {
                // line 69
                echo "               <span class=\"badge bg-orange-lt\">
                  <i class=\"fas fa-users me-1\"></i>
                  ";
                // line 71
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Group", (($__internal_compile_8 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["groups_id_tech"] ?? null) : null), ["enable_anonymization" => true]);
                echo "
               </span>
            ";
            }
            // line 74
            echo "
            ";
            // line 75
            if ((($__internal_compile_9 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["taskcategories_id"] ?? null) : null)) {
                // line 76
                echo "               <span class=\"badge bg-orange-lt\">
                  ";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("TaskCategory", (($__internal_compile_10 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["taskcategories_id"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 80
            echo "
            ";
            // line 81
            if ((($__internal_compile_11 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["actiontime"] ?? null) : null)) {
                // line 82
                echo "               <span class=\"actiontime badge bg-orange-lt\">
                  <i class=\"fas fa-stopwatch me-1\"></i>
                  ";
                // line 84
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDuration((($__internal_compile_12 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["actiontime"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 87
            echo "
            ";
            // line 88
            if ((($__internal_compile_13 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["begin"] ?? null) : null)) {
                // line 89
                echo "               <span class=\"planification badge bg-orange-lt\">
                  <i class=\"fas fa-calendar me-1\"></i>
                  ";
                // line 91
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_14 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["begin"] ?? null) : null)), "html", null, true);
                echo "
                  &rArr;
                  ";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getFormattedDatetime((($__internal_compile_15 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["end"] ?? null) : null)), "html", null, true);
                echo "
               </span>
            ";
            }
            // line 96
            echo "
            ";
            // line 97
            if ((($__internal_compile_16 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["sourceitems_id"] ?? null) : null)) {
                // line 98
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 100
                ob_start(function () { return ''; });
                // line 101
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 102
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_17 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["sourceitems_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["merged_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 105
                echo "                  ";
                echo twig_sprintf(__("Merged from Ticket %1\$s"), ($context["merged_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 108
            echo "
            ";
            // line 109
            if ((($__internal_compile_18 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["sourceof_items_id"] ?? null) : null)) {
                // line 110
                echo "               <span class=\"badge bg-blue-lt\">
                  <i class=\"fas fa-code-branch me-1\"></i>
                  ";
                // line 112
                ob_start(function () { return ''; });
                // line 113
                echo "                     <span class=\"badge ms-2 me-n2\">
                        ";
                // line 114
                echo $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemLink("Ticket", (($__internal_compile_19 = ($context["entry_i"] ?? null)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["sourceof_items_id"] ?? null) : null));
                echo "
                     </span>
                  ";
                $context["promoted_badge"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 117
                echo "                  ";
                echo twig_sprintf(__("Promoted to Ticket %1\$s"), ($context["promoted_badge"] ?? null));
                echo "
               </span>
            ";
            }
            // line 120
            echo "
            ";
            // line 121
            echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons_messages.html.twig");
            echo "
         </div>
      </div>

      <script type=\"text/javascript\">
         function change_task_state(tasks_id, target) {
            \$.post('";
            // line 127
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/timeline.php"), "html", null, true);
            echo "',
               {'action':     'change_task_state',
                  'tasks_id':   tasks_id,
                  'parenttype': '";
            // line 130
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 130), "html", null, true);
            echo "',
                  '";
            // line 131
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 131), "html", null, true);
            echo "': ";
            echo twig_escape_filter($this->env, (($__internal_compile_20 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 131)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["id"] ?? null) : null), "html", null, true);
            echo "
               })
               .done(function(response) {
                  \$(target).closest('.timeline-item').find('.state')
                     .removeClass('state_1 state_2')
                     .addClass('state_'+response.state)
                     .attr('title', response.label);

                  \$(target).closest('.timeline-item').find('.read-only-content')
                     .toggleClass('done');

                  var todo_tasks   = \$('.todo-list-state .state.state_1').length;
                  var done_tasks   = \$('.todo-list-state .state.state_2').length;
                  var total_tasks  = todo_tasks + done_tasks;
                  var percent_done = Math.floor(100 * done_tasks / total_tasks);

                  \$('.timeline-progress')
                     .css('width', percent_done + '%')
                     .attr('aria-valuenow', percent_done);
                  \$('.task-progress-label').html(percent_done + '%');
               });
         }
      </script>
   ";
        } else {
            // line 155
            echo "      <div class=\"itiltask\">
         <form name=\"asset_form\" style=\"width: 100%;\" class=\"d-flex flex-column\" method=\"post\"
               action=\"";
            // line 157
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "getFormURL", [], "method", false, false, false, 157), "html", null, true);
            echo "\" enctype=\"multipart/form-data\" data-track-changes=\"true\" data-submit-once>
            <input type=\"hidden\" name=\"itemtype\" value=\"";
            // line 158
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 158), "html", null, true);
            echo "\" />
            <input type=\"hidden\" name=\"";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 159), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 159)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["id"] ?? null) : null), "html", null, true);
            echo "\" />
            ";
            // line 160
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("pre_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "

            <div class=\"row mx-n3 mx-xxl-auto\">
               <div class=\"col-12 col-xl-7 col-xxl-8\">
                  ";
            // line 164
            echo twig_call_macro($macros["fields"], "macro_textareaField", ["content", (($__internal_compile_22 = twig_get_attribute($this->env, $this->source,             // line 166
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 166)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["content"] ?? null) : null), "", ["full_width" => true, "no_label" => true, "enable_richtext" => true, "enable_fileupload" => true, "enable_mentions" => true, "entities_id" => (($__internal_compile_23 = twig_get_attribute($this->env, $this->source,             // line 174
($context["item"] ?? null), "fields", [], "any", false, false, false, 174)) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["entities_id"] ?? null) : null), "rand" =>             // line 175
($context["rand"] ?? null)]], 164, $context, $this->getSourceContext());
            // line 177
            echo "
               </div>
               <div class=\"col-12 col-xl-5 col-xxl-4 order-first order-md-last pe-o pe-xxl-auto\">
                  <div class=\"row\">

                     ";
            // line 182
            ob_start(function () { return ''; });
            // line 183
            echo "                        <i class=\"fas fa-reply fa-fw me-1\"
                           title=\"";
            // line 184
            echo twig_escape_filter($this->env, _n("Task template", "Task templates", Session::getPluralNumber()), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_template_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 186
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["TaskTemplate", "tasktemplates_id", (($__internal_compile_24 = twig_get_attribute($this->env, $this->source,             // line 189
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 189)) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["tasktemplates_id"] ?? null) : null),             // line 190
($context["task_template_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "on_change" => (("itiltasktemplate_update" .             // line 194
($context["rand"] ?? null)) . "(this.value)"), "entity" => (($__internal_compile_25 = twig_get_attribute($this->env, $this->source,             // line 195
($context["item"] ?? null), "fields", [], "any", false, false, false, 195)) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["entities_id"] ?? null) : null), "rand" =>             // line 196
($context["rand"] ?? null)]], 186, $context, $this->getSourceContext());
            // line 198
            echo "

                     ";
            // line 200
            ob_start(function () { return ''; });
            // line 201
            echo "                        <i class=\"fas fa-calendar fa-fw me-1\"
                           title=\"";
            // line 202
            echo twig_escape_filter($this->env, _n("Date", "Dates", 1), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_date_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 204
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_datetimeField", ["date", (($__internal_compile_26 = twig_get_attribute($this->env, $this->source,             // line 206
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 206)) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["date"] ?? null) : null),             // line 207
($context["task_date_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 211
($context["rand"] ?? null)]], 204, $context, $this->getSourceContext());
            // line 213
            echo "

                     ";
            // line 216
            echo "                     ";
            ob_start(function () { return ''; });
            // line 217
            echo "                        <i class=\"fas fa-tag fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, _n("Category", "Categories", 1), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_category_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 219
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["TaskCategory", "taskcategories_id", (($__internal_compile_27 = twig_get_attribute($this->env, $this->source,             // line 222
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 222)) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["taskcategories_id"] ?? null) : null),             // line 223
($context["task_category_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_28 = twig_get_attribute($this->env, $this->source,             // line 227
($context["item"] ?? null), "fields", [], "any", false, false, false, 227)) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["entities_id"] ?? null) : null), "condition" => ["is_active" => 1], "rand" =>             // line 231
($context["rand"] ?? null)]], 219, $context, $this->getSourceContext());
            // line 233
            echo "

                     ";
            // line 236
            echo "                     ";
            ob_start(function () { return ''; });
            // line 237
            echo "                        <i class=\"fas fa-tasks fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Status"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_state_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 239
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownArrayField", ["state", (($__internal_compile_29 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 239)) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["state"] ?? null) : null), [0 => _n("Information", "Information", 1), 1 => __("To do"), 2 => __("Done")],             // line 243
($context["task_state_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 246
($context["rand"] ?? null)]], 239, $context, $this->getSourceContext());
            // line 247
            echo "


                     ";
            // line 250
            ob_start(function () { return ''; });
            // line 251
            echo "                        <i class=\"ti ti-lock fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Private"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_private_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 253
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_sliderField", ["is_private", (($__internal_compile_30 = twig_get_attribute($this->env, $this->source,             // line 255
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 255)) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["is_private"] ?? null) : null),             // line 256
($context["task_private_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 260
($context["rand"] ?? null)]], 253, $context, $this->getSourceContext());
            // line 262
            echo "

                     ";
            // line 264
            if ((($context["can_read_kb"] ?? null) && (1 === twig_compare(($context["kb_id_toload"] ?? null), 0)))) {
                // line 265
                echo "                        ";
                ob_start(function () { return ''; });
                // line 266
                echo "                           <i class=\"fas fa-link fa-fw me-1\" data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 267
                echo twig_escape_filter($this->env, twig_replace_filter(__("Link to knowledge base entry #%id"), ["%id" => ($context["kb_id_toload"] ?? null)]), "html", null, true);
                echo "\"></i>
                        ";
                $context["link_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 269
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["kb_linked_id", 1,                 // line 272
($context["link_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 276
($context["rand"] ?? null), "yes_value" =>                 // line 277
($context["kb_id_toload"] ?? null)]], 269, $context, $this->getSourceContext());
                // line 279
                echo "
                     ";
            }
            // line 281
            echo "
                     ";
            // line 282
            if (((($context["candedit"] ?? null) && ($context["can_update_kb"] ?? null)) &&  !($context["nokb"] ?? null))) {
                // line 283
                echo "                        ";
                ob_start(function () { return ''; });
                // line 284
                echo "                           <i class=\"far fa-save fa-fw me-1\" title=\"";
                echo twig_escape_filter($this->env, __("Save and add to the knowledge base"), "html", null, true);
                echo "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"></i>
                        ";
                $context["task_to_kb_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 287
                echo "                        ";
                echo twig_call_macro($macros["fields"], "macro_sliderField", ["_task_to_kb", 0,                 // line 290
($context["task_to_kb_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>                 // line 294
($context["rand"] ?? null)]], 287, $context, $this->getSourceContext());
                // line 296
                echo "
                     ";
            }
            // line 298
            echo "
                     ";
            // line 300
            echo "                     ";
            ob_start(function () { return ''; });
            // line 301
            echo "                        <i class=\"fas fa-stopwatch fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, __("Duration"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_actiontime_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 303
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownTimestampField", ["actiontime", (($__internal_compile_31 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 303)) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["actiontime"] ?? null) : null), ($context["task_actiontime_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "rand" =>             // line 306
($context["rand"] ?? null), "min" => 0, "max" => (8 * twig_constant("HOUR_TIMESTAMP")), "addfirstminutes" => true, "inhours" => true, "toadd" => twig_array_map($this->env, range(9, 100),             // line 311
function ($__i__) use ($context, $macros) { $context["i"] = $__i__; return (($context["i"] ?? null) * twig_constant("HOUR_TIMESTAMP")); })]], 303, $context, $this->getSourceContext());
            // line 312
            echo "

                     ";
            // line 315
            echo "                     ";
            ob_start(function () { return ''; });
            // line 316
            echo "                        <i class=\"fas fa-user fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_user_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 318
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["User", "users_id_tech", ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 321
($context["subitem"] ?? null), "fields", [], "any", false, true, false, 321), "users_id_tech", [], "array", true, true, false, 321)) ? (_twig_default_filter((($__internal_compile_32 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 321)) && is_array($__internal_compile_32) || $__internal_compile_32 instanceof ArrayAccess ? ($__internal_compile_32["users_id_tech"] ?? null) : null), $this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiID"))),             // line 322
($context["task_user_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_33 = twig_get_attribute($this->env, $this->source,             // line 326
($context["item"] ?? null), "fields", [], "any", false, false, false, 326)) && is_array($__internal_compile_33) || $__internal_compile_33 instanceof ArrayAccess ? ($__internal_compile_33["entities_id"] ?? null) : null), "right" => "own_ticket", "rand" =>             // line 328
($context["rand"] ?? null)]], 318, $context, $this->getSourceContext());
            // line 330
            echo "

                     ";
            // line 333
            echo "                     ";
            ob_start(function () { return ''; });
            // line 334
            echo "                        <i class=\"fas fa-users fa-fw me-1\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), "html", null, true);
            echo "\"></i>
                     ";
            $context["task_group_lbl"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 336
            echo "                     ";
            echo twig_call_macro($macros["fields"], "macro_dropdownField", ["Group", "groups_id_tech", (($__internal_compile_34 = twig_get_attribute($this->env, $this->source,             // line 339
($context["subitem"] ?? null), "fields", [], "any", false, false, false, 339)) && is_array($__internal_compile_34) || $__internal_compile_34 instanceof ArrayAccess ? ($__internal_compile_34["groups_id_tech"] ?? null) : null),             // line 340
($context["task_group_lbl"] ?? null), ["full_width" => true, "icon_label" => true, "entity" => (($__internal_compile_35 = twig_get_attribute($this->env, $this->source,             // line 344
($context["item"] ?? null), "fields", [], "any", false, false, false, 344)) && is_array($__internal_compile_35) || $__internal_compile_35 instanceof ArrayAccess ? ($__internal_compile_35["entities_id"] ?? null) : null), "condition" => ["is_task" => 1], "rand" =>             // line 346
($context["rand"] ?? null)]], 336, $context, $this->getSourceContext());
            // line 348
            echo "

                     <script type=\"text/javascript\">
                        function showPlanUpdate";
            // line 351
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(e) {
                           \$('#plan";
            // line 352
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').hide();
                           \$('#viewplan";
            // line 353
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').load('";
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/planning.php"), "html", null, true);
            echo "', {
                              action: \"add_event_classic_form\",
                              form: \"followups\", // Was followups for tasks before. Can't find where this is used.
                              entity: ";
            // line 356
            echo twig_escape_filter($this->env, (($__internal_compile_36 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 356)) && is_array($__internal_compile_36) || $__internal_compile_36 instanceof ArrayAccess ? ($__internal_compile_36["entities_id"] ?? null) : null), "html", null, true);
            echo ",
                              rand_user: ";
            // line 357
            echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
            echo ",
                              rand_group: ";
            // line 358
            echo twig_escape_filter($this->env, twig_random($this->env), "html", null, true);
            echo ",
                              itemtype: \"";
            // line 359
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "type", [], "any", false, false, false, 359), "html", null, true);
            echo "\",
                              items_id: ";
            // line 360
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 360), "id", [], "array", true, true, false, 360)) ? (_twig_default_filter((($__internal_compile_37 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, true, false, 360)) && is_array($__internal_compile_37) || $__internal_compile_37 instanceof ArrayAccess ? ($__internal_compile_37["id"] ?? null) : null),  -1)) : ( -1)), "html", null, true);
            echo ",
                              parent_itemtype: \"";
            // line 361
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "type", [], "any", false, false, false, 361), "html", null, true);
            echo "\",
                              parent_items_id: ";
            // line 362
            echo twig_escape_filter($this->env, (($__internal_compile_38 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 362)) && is_array($__internal_compile_38) || $__internal_compile_38 instanceof ArrayAccess ? ($__internal_compile_38["id"] ?? null) : null), "html", null, true);
            echo ",
                              parent_fk_field: \"";
            // line 363
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getForeignKeyField", [], "method", false, false, false, 363), "html", null, true);
            echo "\",
                           });
                        }
                     </script>
                     <div class=\"col-12\">
                        <button id=\"plan";
            // line 368
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" class=\"btn btn-outline-secondary d-block mb-2 text-truncate\" onclick=\"showPlanUpdate";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "()\" type=\"button\">
                           <i class=\"fas fa-calendar\"></i>
                           <span>";
            // line 370
            echo twig_escape_filter($this->env, __("Plan this task"), "html", null, true);
            echo "</span>
                        </button>
                        <div id=\"viewplan";
            // line 372
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"></div>
                     </div>
                  </div>
               </div>
            </div>

            ";
            // line 378
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook("post_item_form", ["item" => ($context["subitem"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
            echo "
            <div class=\"d-flex card-footer mx-n3 mb-n3\">
               ";
            // line 380
            if ((0 >= twig_compare((($__internal_compile_39 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 380)) && is_array($__internal_compile_39) || $__internal_compile_39 instanceof ArrayAccess ? ($__internal_compile_39["id"] ?? null) : null), 0))) {
                // line 381
                echo "                  <div class=\"input-group\">
                     <button class=\"btn btn-primary\" type=\"submit\" name=\"add\">
                        <i class=\"fas fa-plus\"></i>
                        <span>";
                // line 384
                echo twig_escape_filter($this->env, _x("button", "Add"), "html", null, true);
                echo "</span>
                     </button>
                     <span class=\"input-group-text bg-yellow-lt py-0 pe-0\" id=\"pending-reasons-control-";
                // line 386
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\">
                        <span class=\"d-inline-flex align-items-center\" title=\"";
                // line 387
                echo twig_escape_filter($this->env, __("Set the status to pending"), "html", null, true);
                echo "\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\" role=\"button\">
                           <i class=\"fas fa-pause me-2\"></i>
                           <label class=\"form-check form-switch pt-2\">
                              <input type=\"hidden\"   name=\"pending\" value=\"0\" />
                              <input type=\"checkbox\" name=\"pending\" value=\"1\" class=\"form-check-input\"
                                    id=\"enable-pending-reasons-";
                // line 393
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\"
                                    role=\"button\"
                                    data-bs-toggle=\"collapse\" data-bs-target=\"#pending-reasons-setup-";
                // line 395
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\" />
                           </label>
                        </span>

                        <div class=\"collapse ps-2 py-1 flex-fill\" id=\"pending-reasons-setup-";
                // line 399
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\">
                           ";
                // line 400
                echo twig_include($this->env, $context, "components/itilobject/timeline/pending_reasons.html.twig");
                echo "
                        </div>
                     </span>
                  </div>
               ";
            } else {
                // line 405
                echo "                  <input type=\"hidden\" name=\"id\" value=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_40 = twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "fields", [], "any", false, false, false, 405)) && is_array($__internal_compile_40) || $__internal_compile_40 instanceof ArrayAccess ? ($__internal_compile_40["id"] ?? null) : null), "html", null, true);
                echo "\" />
                  <button class=\"btn btn-primary me-2\" type=\"submit\" name=\"update\">
                     <i class=\"far fa-save\"></i>
                     <span>";
                // line 408
                echo twig_escape_filter($this->env, _x("button", "Save"), "html", null, true);
                echo "</span>
                  </button>

                  ";
                // line 411
                if (twig_get_attribute($this->env, $this->source, ($context["subitem"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => twig_constant("PURGE")], "method", false, false, false, 411)) {
                    // line 412
                    echo "                     <button class=\"btn btn-outline-danger me-2\" type=\"submit\" name=\"purge\"
                             onclick=\"return confirm('";
                    // line 413
                    echo twig_escape_filter($this->env, __("Confirm the final deletion?"), "html", null, true);
                    echo "');\">
                        <i class=\"fas fa-trash-alt\"></i>
                        <span>";
                    // line 415
                    echo twig_escape_filter($this->env, _x("button", "Delete permanently"), "html", null, true);
                    echo "</span>
                     </button>
                  ";
                }
                // line 418
                echo "               ";
            }
            // line 419
            echo "            </div>

            <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 421
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
         </form>
      </div>

      <script type=\"text/javascript\">
         function itiltasktemplate_update";
            // line 426
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(value) {
            \$.ajax({
               url: '";
            // line 428
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/task.php"), "html", null, true);
            echo "',
               type: 'POST',
               data: {
                  tasktemplates_id: value,
                  items_id: '";
            // line 432
            echo twig_escape_filter($this->env, (($__internal_compile_41 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 432)) && is_array($__internal_compile_41) || $__internal_compile_41 instanceof ArrayAccess ? ($__internal_compile_41["id"] ?? null) : null), "html", null, true);
            echo "',
                  itemtype: '";
            // line 433
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 433), "html", null, true);
            echo "'
               }
            }).done(function (data) {
                if (data.content !== undefined) {
                    // set textarea content
                    if (tasktinymce = tinymce.get(\"content_";
            // line 438
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")) {
                        tasktinymce.setContent(data.content);
                    }
                }

                if (data.taskcategories_id !== undefined) {
                    // set category
                    const taskcategories_id = isNaN(parseInt(data.taskcategories_id))
                        ? 0
                        : parseInt(data.taskcategories_id);
                    \$(\"#dropdown_taskcategories_id";
            // line 448
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger(\"setValue\", taskcategories_id);
                }

                if (data.is_private !== undefined) {
                    // set is_private
                    \$(\"#is_private_";
            // line 453
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\")
                        .prop(\"checked\", data.is_private == \"0\"
                            ? false
                            : true);
                }

                if (data.state !== undefined) {
                    // Set state
                    \$(\"#dropdown_state";
            // line 461
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.state);
                }

                if (data.actiontime !== undefined) {
                    // Set duration
                    \$(\"#dropdown_actiontime";
            // line 466
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.actiontime);
                }

                if (data.users_id_tech !== undefined) {
                    // Set user
                    \$(\"#dropdown_users_id_tech";
            // line 471
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.users_id_tech);
                }

               if (data.groups_id_tech !== undefined) {
                   // Set group
                   \$(\"#dropdown_groups_id_tech";
            // line 476
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").trigger('setValue', data.groups_id_tech);
               }
            });
         }
      </script>
   ";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/timeline/form_task.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  771 => 476,  763 => 471,  755 => 466,  747 => 461,  736 => 453,  728 => 448,  715 => 438,  707 => 433,  703 => 432,  696 => 428,  691 => 426,  683 => 421,  679 => 419,  676 => 418,  670 => 415,  665 => 413,  662 => 412,  660 => 411,  654 => 408,  647 => 405,  639 => 400,  635 => 399,  628 => 395,  623 => 393,  614 => 387,  610 => 386,  605 => 384,  600 => 381,  598 => 380,  593 => 378,  584 => 372,  579 => 370,  572 => 368,  564 => 363,  560 => 362,  556 => 361,  552 => 360,  548 => 359,  544 => 358,  540 => 357,  536 => 356,  528 => 353,  524 => 352,  520 => 351,  515 => 348,  513 => 346,  512 => 344,  511 => 340,  510 => 339,  508 => 336,  502 => 334,  499 => 333,  495 => 330,  493 => 328,  492 => 326,  491 => 322,  490 => 321,  488 => 318,  482 => 316,  479 => 315,  475 => 312,  473 => 311,  472 => 306,  470 => 303,  464 => 301,  461 => 300,  458 => 298,  454 => 296,  452 => 294,  451 => 290,  449 => 287,  442 => 284,  439 => 283,  437 => 282,  434 => 281,  430 => 279,  428 => 277,  427 => 276,  426 => 272,  424 => 269,  419 => 267,  416 => 266,  413 => 265,  411 => 264,  407 => 262,  405 => 260,  404 => 256,  403 => 255,  401 => 253,  395 => 251,  393 => 250,  388 => 247,  386 => 246,  385 => 243,  383 => 239,  377 => 237,  374 => 236,  370 => 233,  368 => 231,  367 => 227,  366 => 223,  365 => 222,  363 => 219,  357 => 217,  354 => 216,  350 => 213,  348 => 211,  347 => 207,  346 => 206,  344 => 204,  339 => 202,  336 => 201,  334 => 200,  330 => 198,  328 => 196,  327 => 195,  326 => 194,  325 => 190,  324 => 189,  322 => 186,  317 => 184,  314 => 183,  312 => 182,  305 => 177,  303 => 175,  302 => 174,  301 => 166,  300 => 164,  293 => 160,  287 => 159,  283 => 158,  279 => 157,  275 => 155,  246 => 131,  242 => 130,  236 => 127,  227 => 121,  224 => 120,  217 => 117,  211 => 114,  208 => 113,  206 => 112,  202 => 110,  200 => 109,  197 => 108,  190 => 105,  184 => 102,  181 => 101,  179 => 100,  175 => 98,  173 => 97,  170 => 96,  164 => 93,  159 => 91,  155 => 89,  153 => 88,  150 => 87,  144 => 84,  140 => 82,  138 => 81,  135 => 80,  129 => 77,  126 => 76,  124 => 75,  121 => 74,  115 => 71,  111 => 69,  109 => 68,  106 => 67,  101 => 64,  99 => 63,  98 => 62,  96 => 61,  93 => 60,  91 => 59,  88 => 58,  86 => 57,  80 => 53,  78 => 50,  74 => 49,  68 => 47,  65 => 46,  61 => 45,  56 => 34,  54 => 43,  52 => 42,  50 => 41,  48 => 40,  46 => 39,  44 => 37,  42 => 35,  35 => 34,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/timeline/form_task.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\timeline\\form_task.html.twig");
    }
}
