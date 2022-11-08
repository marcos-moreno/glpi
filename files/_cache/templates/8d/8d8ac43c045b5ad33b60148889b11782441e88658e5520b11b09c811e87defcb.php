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

/* components/itilobject/actors/main.html.twig */
class __TwigTemplate_612d1dffb0fec1081a6d7db779202183bdbbffbef75b327ff8ad98a27549fbd1 extends Template
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
        // line 6
        $macros["fields"] = $this->macros["fields"] = $this->loadTemplate("components/form/fields_macros.html.twig", "components/itilobject/actors/main.html.twig", 6)->unwrap();
        // line 7
        echo "
";
        // line 8
        if ( !array_key_exists("display_actortypes", $context)) {
            // line 9
            echo "   ";
            $context["display_actortypes"] = [0 => "requester", 1 => "observer", 2 => "assign"];
        }
        // line 11
        if ( !array_key_exists("display_labels", $context)) {
            // line 12
            echo "   ";
            $context["display_labels"] = true;
        }
        // line 14
        echo "
";
        // line 15
        $context["actor_options"] = twig_array_merge(($context["field_options"] ?? null), ["is_horizontal" => false, "add_field_class" => ((        // line 17
($context["is_expanded"] ?? null)) ? ("col-sm-4") : (""))]);
        // line 19
        $context["can_admin"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canAdminActors", [], "method", false, false, false, 19);
        // line 20
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 20)) {
            // line 21
            echo "   ";
            $context["can_admin"] = true;
        }
        // line 23
        echo "
";
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        if ((twig_in_filter("requester", ($context["display_actortypes"] ?? null)) && ( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_users_id_requester"], "method", false, false, false, 28) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_groups_id_requester"], "method", false, false, false, 28)))) {
            // line 29
            echo "   ";
            ob_start(function () { return ''; });
            // line 30
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/actors/field.html.twig", ["item" =>             // line 31
($context["item"] ?? null), "actortypeint" => twig_constant("CommonITILActor::REQUESTER"), "actortype" => "requester", "entities_id" =>             // line 34
($context["entities_id"] ?? null), "itiltemplate" =>             // line 35
($context["itiltemplate"] ?? null), "params" =>             // line 36
($context["params"] ?? null), "canupdate" =>             // line 37
($context["canupdate"] ?? null), "disable_assign_to_me" => ((            // line 38
$context["disable_assign_to_me"]) ?? (false)), "main_rand" =>             // line 39
($context["main_rand"] ?? null)], false);
            // line 40
            echo "
   ";
            $context["requester_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 42
            echo "   ";
            if (($context["display_labels"] ?? null)) {
                // line 43
                echo "      ";
                echo twig_call_macro($macros["fields"], "macro_field", ["requester",                 // line 45
($context["requester_field"] ?? null), _n("Requester", "Requesters", 1), twig_array_merge(                // line 47
($context["actor_options"] ?? null), ["required" => (twig_get_attribute($this->env, $this->source,                 // line 48
($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_users_id_requester"], "method", false, false, false, 48) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_groups_id_requester"], "method", false, false, false, 48))])], 43, $context, $this->getSourceContext());
                // line 50
                echo "
   ";
            } else {
                // line 52
                echo "      ";
                echo twig_escape_filter($this->env, ($context["requester_field"] ?? null), "html", null, true);
                echo "
   ";
            }
        }
        // line 55
        echo "


";
        // line 58
        if ((twig_in_filter("assign", ($context["display_actortypes"] ?? null)) && (( !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_users_id_assign"], "method", false, false, false, 58) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_groups_id_assign"], "method", false, false, false, 58)) ||  !twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => "_supplier_id_assign"], "method", false, false, false, 58)))) {
            // line 59
            echo "   ";
            ob_start(function () { return ''; });
            // line 60
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/actors/field.html.twig", ["item" =>             // line 61
($context["item"] ?? null), "actortypeint" => twig_constant("CommonITILActor::ASSIGN"), "actortype" => "assign", "users_right" => "own_ticket", "entities_id" =>             // line 65
($context["entities_id"] ?? null), "itiltemplate" =>             // line 66
($context["itiltemplate"] ?? null), "params" =>             // line 67
($context["params"] ?? null), "canupdate" =>             // line 68
($context["canassign"] ?? null), "disable_assign_to_me" => ((            // line 69
$context["disable_assign_to_me"]) ?? (false)), "main_rand" =>             // line 70
($context["main_rand"] ?? null)], false);
            // line 71
            echo "
   ";
            $context["assign_field"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 73
            echo "   ";
            if (($context["display_labels"] ?? null)) {
                // line 74
                echo "      ";
                echo twig_call_macro($macros["fields"], "macro_field", ["assign",                 // line 76
($context["assign_field"] ?? null), __("Assigned to"), twig_array_merge(                // line 78
($context["actor_options"] ?? null), ["required" => ((twig_get_attribute($this->env, $this->source,                 // line 79
($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_users_id_assign"], "method", false, false, false, 79) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_groups_id_assign"], "method", false, false, false, 79)) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => "_supplier_id_assign"], "method", false, false, false, 79))])], 74, $context, $this->getSourceContext());
                // line 81
                echo "
   ";
            } else {
                // line 83
                echo "      ";
                echo twig_escape_filter($this->env, ($context["assign_field"] ?? null), "html", null, true);
                echo "
   ";
            }
        }
        // line 86
        echo "
<input type=\"hidden\" name=\"_actors\" id=\"_actors\" />

";
        // line 90
        echo "<div class=\"modal fade\" id=\"editActorNotifySettings\" tabindex=\"-1\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
         <h5 class=\"modal-title\">
            <i class=\"fas fa-envelope\"></i>
            &nbsp;";
        // line 96
        echo twig_escape_filter($this->env, __("Edit notification settings"), "html", null, true);
        echo "
         </h5>
         <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"";
        // line 98
        echo twig_escape_filter($this->env, __("Close"), "html", null, true);
        echo "\"></button>
      </div>
      <div class=\"modal-body\">
         <div class=\"mb-3\">
            <label class=\"form-label\" for=\"actorname\">";
        // line 102
        echo twig_escape_filter($this->env, __("Actor"), "html", null, true);
        echo "</label>
            <input type=\"text\" class=\"form-control\" id=\"actorname\" name=\"_notifications_actorname\" />
            <input type=\"hidden\" name=\"_notifications_actortype\" value=\"\" />
            <input type=\"hidden\" name=\"_notifications_actorindex\" value=\"\" />
         </div>
         <div class=\"mb-3\">
            <label for=\"alternative_email\" class=\"form-label\">";
        // line 108
        echo twig_escape_filter($this->env, __("Email address"), "html", null, true);
        echo "</label>
            <div class=\"form-check form-switch\">
               <input class=\"form-check-input\" type=\"checkbox\" id=\"use_notification\" name=\"_notifications_use_notification\" />
               <label class=\"form-check-label\" for=\"use_notification\">";
        // line 111
        echo twig_escape_filter($this->env, __("Email followup"), "html", null, true);
        echo "</label>
            </div>
            <input type=\"email\" class=\"form-control\" id=\"alternative_email\" name=\"_notifications_alternative_email\" />
         </div>
      </div>
      <div class=\"modal-footer\">
         <button type=\"button\" class=\"btn btn-outline-secondary\" data-bs-dismiss=\"modal\">
            <i class=\"ti ti-x\"></i>
            <span>";
        // line 119
        echo twig_escape_filter($this->env, __("Close"), "html", null, true);
        echo "<span>
         </button>
         <button type=\"button\" class=\"btn btn-primary\" id=\"saveActorNotifySettings\">
            <i class=\"far fa-save\"></i>
            <span>";
        // line 123
        echo twig_escape_filter($this->env, __("Save"), "html", null, true);
        echo "</span>
         </button>
      </div>
    </div>
  </div>
</div>

";
        // line 130
        $context["actortypes"] = ["requester" => twig_constant("CommonITILActor::REQUESTER"), "observer" => twig_constant("CommonITILActor::OBSERVER"), "assign" => twig_constant("CommonITILActor::ASSIGN")];
        // line 135
        echo "
<script type=\"text/javascript\">
   /* global bootstrap */
   var editActorNotifySettings_modal = null;
   \$(function () {
      editActorNotifySettings_modal = new bootstrap.Modal(document.getElementById('editActorNotifySettings'), {});
   });

   var actors = {
      ";
        // line 144
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["actortypes"] ?? null));
        foreach ($context['_seq'] as $context["actortype"] => $context["actortypeint"]) {
            // line 145
            echo "         ";
            echo twig_escape_filter($this->env, $context["actortype"], "html", null, true);
            echo ": [
            ";
            // line 146
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getActorsForType", [0 => $context["actortypeint"], 1 => ($context["params"] ?? null)], "method", false, false, false, 146));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 147
                echo "            {
               itemtype: \"";
                // line 148
                echo twig_escape_filter($this->env, (($__internal_compile_0 = $context["actor"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null), "html", null, true);
                echo "\",
               items_id: \"";
                // line 149
                echo twig_escape_filter($this->env, (($__internal_compile_1 = $context["actor"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["items_id"] ?? null) : null), "html", null, true);
                echo "\",
               use_notification: ";
                // line 150
                echo (((($__internal_compile_2 = $context["actor"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["use_notification"] ?? null) : null)) ? ("1") : ("0"));
                echo ",
               ";
                // line 151
                if (twig_get_attribute($this->env, $this->source, $context["actor"], "alternative_email", [], "array", true, true, false, 151)) {
                    // line 152
                    echo "                  alternative_email: \"";
                    echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["actor"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["alternative_email"] ?? null) : null), "html", null, true);
                    echo "\",
               ";
                }
                // line 154
                echo "            },
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 156
            echo "         ],
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['actortype'], $context['actortypeint'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "   };

   // edit email preference when .edit-notify-user button is activated
   function openNotifyModal(event) {
      event.stopPropagation();

      var element = \$(event.target).closest('.actor_entry');
      var itemtype  = element.data('itemtype');
      var items_id  = element.data('items-id');
      var actortype = element.data('actortype');
      var text      = element.data('text');

      var actorIndex = actors[actortype].findIndex(element => (element.itemtype == itemtype && element.items_id == items_id));
      var actor      = actors[actortype][actorIndex];

      var modal = \$('#editActorNotifySettings');
      modal.find(\"input[name=_notifications_actortype]\").val(actortype);
      modal.find(\"input[name=_notifications_actorindex]\").val(actorIndex);
      modal.find(\"input[name=_notifications_actorname]\").removeAttr('readonly').val(text).attr('readonly', 'true');
      modal.find(\"input[name=_notifications_use_notification]\").prop('checked', parseInt(actor.use_notification));
      modal.find(\"input[name=_notifications_alternative_email]\").val(actor.alternative_email);

      editActorNotifySettings_modal.show();
   }

   // save edited actor when clicking on save button
   \$(document).on('click', '#saveActorNotifySettings', function(event) {
      saveNotificationSettings();
   });

   // prevent submit on enter key in modal (but save notification settings)
   \$(document).on('keyup keypress', '#editActorNotifySettings input', function(event) {
      var keyCode = event.keyCode || event.which;
      if (keyCode === 13) {
         event.preventDefault();
         saveNotificationSettings();
         return false;
      }
   });

   // save settings from modal (get modal data, and serialize them into input hidden)
   function saveNotificationSettings() {
      var modal = \$('#editActorNotifySettings');
      var actortype  = modal.find(\"input[name=_notifications_actortype]\").val();
      var actorIndex = modal.find(\"input[name=_notifications_actorindex]\").val();
      var use_notif  = (modal.find(\"input[name=_notifications_use_notification]\").is(\":checked\") ? 1 : 0);
      var alt_email  = modal.find(\"input[name=_notifications_alternative_email]\").val();

      var actor = actors[actortype][actorIndex];
      actor.use_notification = use_notif;
      actor.alternative_email = alt_email;

      // update notif setting icon for actor
      var fa_class = \"far\";
      if (use_notif) {
         fa_class = \"fas\";
      }

      var actor_entry = \$('.actor_entry[data-itemtype='+actor.itemtype+'][data-items-id='+actor.items_id+'][data-actortype='+actortype+']');

      // toggle notify icon
      actor_entry.find('.notify-icon')
         .removeClass('fas far')
         .addClass(fa_class);

      // toggle text for direct email
      if (actor.itemtype == \"User\" && parseInt(actor.items_id) == 0) {
         actor_entry.find('.actor_text').html(alt_email);
      }


      editActorNotifySettings_modal.hide();
      saveActorsToDom();
   }

   // save actors object to dom
   function saveActorsToDom() {
      \$('#_actors').val(JSON.stringify(actors));
   }
   saveActorsToDom();
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/actors/main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 158,  288 => 156,  281 => 154,  275 => 152,  273 => 151,  269 => 150,  265 => 149,  261 => 148,  258 => 147,  254 => 146,  249 => 145,  245 => 144,  234 => 135,  232 => 130,  222 => 123,  215 => 119,  204 => 111,  198 => 108,  189 => 102,  182 => 98,  177 => 96,  169 => 90,  164 => 86,  157 => 83,  153 => 81,  151 => 79,  150 => 78,  149 => 76,  147 => 74,  144 => 73,  140 => 71,  138 => 70,  137 => 69,  136 => 68,  135 => 67,  134 => 66,  133 => 65,  132 => 61,  130 => 60,  127 => 59,  125 => 58,  120 => 55,  113 => 52,  109 => 50,  107 => 48,  106 => 47,  105 => 45,  103 => 43,  100 => 42,  96 => 40,  94 => 39,  93 => 38,  92 => 37,  91 => 36,  90 => 35,  89 => 34,  88 => 31,  86 => 30,  83 => 29,  81 => 28,  78 => 27,  75 => 25,  72 => 23,  68 => 21,  66 => 20,  64 => 19,  62 => 17,  61 => 15,  58 => 14,  54 => 12,  52 => 11,  48 => 9,  46 => 8,  43 => 7,  41 => 6,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/actors/main.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\actors\\main.html.twig");
    }
}
