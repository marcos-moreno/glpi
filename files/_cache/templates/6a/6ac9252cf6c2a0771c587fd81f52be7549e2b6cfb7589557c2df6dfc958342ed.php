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

/* components/itilobject/actors/field.html.twig */
class __TwigTemplate_a77de7943f8a2db5ffadf4b34dd70376a5095bbb30a3ec4ef809feec259744d0 extends Template
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
        // line 5
        echo "
";
        // line 6
        $context["rand"] = twig_random($this->env);
        // line 7
        echo "
";
        // line 8
        $context["actors"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getActorsForType", [0 => ($context["actortypeint"] ?? null), 1 => ($context["params"] ?? null)], "method", false, false, false, 8);
        // line 9
        echo " 
";
        // line 11
        echo "
";
        // line 12
        $context["required"] = false;
        // line 13
        if (((twig_get_attribute($this->env, $this->source,         // line 14
($context["itiltemplate"] ?? null), "isMandatoryField", [0 => ("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 14) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => ("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 14)) || ((0 === twig_compare(        // line 15
($context["actortype"] ?? null), "assign")) && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isMandatoryField", [0 => ("_suppliers_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 15)))) {
            // line 16
            echo "   ";
            $context["required"] = true;
        }
        // line 18
        echo "
";
        // line 19
        $context["is_actor_hidden"] = false;
        // line 20
        if (((twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => ("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 20) && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => ("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 20)) && ((0 !== twig_compare(($context["actortype"] ?? null), "assign")) || twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => ("_suppliers_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 20)))) {
            // line 21
            echo "   ";
            $context["is_actor_hidden"] = true;
        }
        // line 23
        echo "
";
        // line 24
        $context["onchange"] = "";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 25)) {
            // line 26
            echo "   ";
            $context["onchange"] = "this.form.submit();";
        }
        // line 28
        echo "
";
        // line 29
        if ( !($context["is_actor_hidden"] ?? null)) {
            // line 30
            echo "
   <select class=\"form-select\" multiple=\"true\" id=\"actor_";
            // line 31
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" data-actor-type=\"";
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" ";
            echo ((($context["required"] ?? null)) ? ("required") : (""));
            echo ">
      ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["actors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["actor"]) {
                // line 33
                echo "         ";
                $context["unique_id"] = ((("user_opt_" . ($context["actortype"] ?? null)) . twig_get_attribute($this->env, $this->source, $context["actor"], "itemtype", [], "any", false, false, false, 33)) . twig_get_attribute($this->env, $this->source, $context["actor"], "items_id", [], "any", false, false, false, 33));
                // line 34
                echo "         <option selected=\"true\" value=\"";
                echo twig_escape_filter($this->env, (((($__internal_compile_0 = $context["actor"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["itemtype"] ?? null) : null) . "_") . (($__internal_compile_1 = $context["actor"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["items_id"] ?? null) : null)), "html", null, true);
                echo "\"
               data-itemtype=\"";
                // line 35
                echo twig_escape_filter($this->env, (($__internal_compile_2 = $context["actor"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["itemtype"] ?? null) : null), "html", null, true);
                echo "\" data-items-id=\"";
                echo twig_escape_filter($this->env, (($__internal_compile_3 = $context["actor"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["items_id"] ?? null) : null), "html", null, true);
                echo "\"
               data-use-notification=\"";
                // line 36
                echo twig_escape_filter($this->env, (($__internal_compile_4 = $context["actor"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["use_notification"] ?? null) : null), "html", null, true);
                echo "\"
               data-alternative-email=\"";
                // line 37
                echo twig_escape_filter($this->env, (($__internal_compile_5 = $context["actor"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["alternative_email"] ?? null) : null), "html", null, true);
                echo "\"
               ";
                // line 38
                if ((((0 === twig_compare((($__internal_compile_6 = $context["actor"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["itemtype"] ?? null) : null), "User")) && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => ("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 38)) || ((0 === twig_compare((($__internal_compile_7 = $context["actor"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["itemtype"] ?? null) : null), "Group")) && twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => ("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 38)))) {
                    // line 39
                    echo "                  disabled=\"disabled\" style=\"display: none;\"
               ";
                }
                // line 41
                echo "               data-text=\"";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_8 = $context["actor"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["text"] ?? null) : null)), "html", null, true);
                echo "\" data-title=\"";
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_9 = $context["actor"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["title"] ?? null) : null)), "html", null, true);
                echo "\" data-glpi-popover-source=\"content";
                echo twig_escape_filter($this->env, ($context["unique_id"] ?? null), "html", null, true);
                echo "\">
            ";
                // line 42
                echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_10 = $context["actor"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["title"] ?? null) : null)), "html", null, true);
                echo "
         </option>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "   </select>

   ";
            // line 47
            if (((( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 47) &&  !(($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["template_preview"] ?? null) : null)) &&  !($context["disable_assign_to_me"] ?? null)) && ($context["canupdate"] ?? null))) {
                // line 48
                echo "      ";
                echo twig_include($this->env, $context, "components/itilobject/actors/assign_to_me.html.twig");
                echo "
   ";
            }
            // line 50
            echo "
   <script type=\"text/javascript\">
   
   \$(function() {
      var actorytype = '";
            // line 54
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "'; 
      console.log(actorytype);
      // function to display an option in the list or the selected input
      var genericTemplate_";
            // line 57
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " = function(option = {}, is_selection = false) {
         var element   = \$(option.element);
         var itemtype  = element.data('itemtype') ?? option.itemtype;
         var items_id  = element.data('items-id') ?? option.items_id;

         var text      = escapeMarkupText(element.data('text') ?? option.text ?? '');
         var title     = escapeMarkupText(element.data('title') ?? option.title ?? '');
         var use_notif = element.data('use-notification') ?? option.use_notification ?? 1;
         var alt_email = element.data('alternative-email') ?? option.alternative_email ?? '';

         var icon = \"\";
         var fk   = \"\";
         switch (itemtype) {
            case \"User\":
               if (items_id == 0) {
                  text = alt_email;
                  icon = `<i class=\"ti  fa-fw ti-mail mx-1\" title=\"";
            // line 73
            echo twig_escape_filter($this->env, __("Direct email"), "html", null, true);
            echo "\"></i>`;
               } else {
                  icon = `<i class=\"ti  fa-fw ti-user mx-1\" title=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("User"), "html", null, true);
            echo "\"></i>`;
               }
               if (\"";
            // line 77
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"assign\") {
                  fk = \"users_id_assign\";
               } else if (\"";
            // line 79
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"requester\") {
                  fk = \"users_id_requester\";
               }
               break;
            case \"Group\":
               icon = `<i class=\"ti  fa-fw ti-users mx-1\" title=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Group"), "html", null, true);
            echo "\"></i>`;
               if (\"";
            // line 85
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"assign\") {
                  fk = \"groups_id_assign\";
               } else if (\"";
            // line 87
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"requester\") {
                  fk = \"groups_id_requester\";
               }
               break;
            case \"Supplier\":
               icon = `<i class=\"ti fa-fw ti-package mx-1\" title=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemtypeName("Supplier"), "html", null, true);
            echo "\"></i>`;
               fk   = \"suppliers_id_assign\";
               break;
         }

         var actions = \"\";
         ";
            // line 98
            if (($context["canupdate"] ?? null)) {
                // line 99
                echo "         if (['User', 'Supplier', 'Email'].includes(itemtype)
            && is_selection) {
            var fa_class = \"far\";
            if (use_notif) {
               fa_class = \"fas\";
            }
            actions = `<button class=\"btn btn-sm btn-ghost-secondary edit-notify-user\"
                              data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                              title=\"";
                // line 107
                echo twig_escape_filter($this->env, __("Email followup"), "html", null, true);
                echo "\"
                              type=\"button\">
               <i class=\"\${fa_class} fa-bell notify-icon\"></i>
            </button>`;
         }
         ";
            }
            // line 113
            echo "
         // manage specific display for tree data (like groups)
         var indent = \"\";
         if (!is_selection && \"level\" in option && option.level > 1) {
            for (let index = 1; index < option.level; index++) {
               indent = \"&nbsp;&nbsp;&nbsp;\"+indent;
            }
            indent = indent+\"&raquo;\";
         }

  
         // prepare html for option element
         var text = (is_selection && itemtype == \"Group\") ? title : text;
         var option_text    = `<span class=\"actor_text\">\${text}</span>`;
         var option_element = \$(`<span class=\"actor_entry\" data-itemtype=\"\${itemtype}\" data-items-id=\"\${items_id}\" data-actortype=\"\${actorytype}\">\${indent}\${icon}\${option_text}\${actions}</span>`);

          if (is_selection && itemtype == \"User\") {
              const unique_id = \"user_opt_\" + actor_select.attr('data-actor-type') + \"User\" + items_id;
              \$.ajax({
                  url: '";
            // line 132
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/comments.php"), "html", null, true);
            echo "',
                  type: 'POST',
                  data: {
                      'itemtype': 'User',
                      'value': items_id,
                  }
              }).then((result) => {
                  if (result) {
                      actor_select.parent().append('<' + `div id=\"content\${unique_id}\" style=\"display: none;\">` + result + '<' + '/div>');
                      option_element.attr('data-glpi-popover-source', `content\${unique_id}`);
                  }
              });
          }

         // manage ticket information (number of assigned ticket for an actor)
         if (is_selection && itemtype != \"Email\") {
            var label = '';
            if (\"";
            // line 149
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"assign\") {
               label = \"";
            // line 150
            echo twig_escape_filter($this->env, __("Number of tickets already assigned"), "html", null, true);
            echo "\";
            } else if (\"";
            // line 151
            echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
            echo "\" == \"requester\") {
               label = \"";
            // line 152
            echo twig_escape_filter($this->env, __("Number of tickets as requester"), "html", null, true);
            echo "\";
            }
            var existing_element = \$(
               `<span class=\"assign_infos ms-1\" title=\"\${label}\"
                     data-bs-toggle=\"tooltip\" data-bs-placement=\"top\"
                     data-id=\"\${items_id}\" data-fk=\"\${fk}\">
                  <i class=\"fas fa-spinner fa-spin\"></i>
               </span>`
            );
            option_element.append(existing_element);

            \$.get(\"";
            // line 163
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/actorinformation.php"), "html", null, true);
            echo "\", {
               [fk]: items_id,
               only_number: true,
            }).done(function (number) {
               var badge = \"\";
               if (number.length > 0) {
                  badge = `<span class=\"badge bg-secondary-lt\">
                  \${number}
               </span>`;
               }
               existing_element.html(badge);
            });
         }

         return option_element;
      }; 
      var select2_width = \"";
            // line 179
            echo (( !($context["disable_assign_to_me"] ?? null)) ? ("calc(100% - 30px)") : ("100%"));
            echo "\";
      const actor_select = \$(\"#actor_";
            // line 180
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\");
      var enab = (actorytype == 'requester'  ? 'false' : 'true');
      if(enab == 'true'){
         enab = ";
            // line 183
            echo ((($context["canupdate"] ?? null)) ? ("false") : ("true"));
            echo ";
      }
       actor_select.select2({
         tags: true,
         width: select2_width,
         tokenSeparators: [',', ' '],
         disabled: false, // TODO can edit
         containerCssClass: 'actor-field',
         templateSelection: function(option) { return genericTemplate_";
            // line 191
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(option, true); },
         templateResult:    function(option) { return genericTemplate_";
            // line 192
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "(option, false); },
         disabled: enab,
         createTag: function (params) {
            var term = \$.trim(params.term);

            if (term === '') {
               return null;
            }

            // Don't offset to create a tag if it's not an email
            if (!new RegExp(/^[\\w-\\.]+@([\\w-]+\\.)+[\\w-]{2,63}\$/).test(term)) {
               // Return null to disable tag creation
               return null;
            }

            return {
               id: term,
               text: term,
               itemtype: \"User\",
               items_id: 0,
               use_notification: 1,
               alternative_email: term,
            }
         },
         ajax: {
            url: '";
            // line 217
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/ajax/actors.php"), "html", null, true);
            echo "',
            datatype: 'json',
            type: 'POST',
            delay:250,
            data: function (params) {
               var is_new_item = ";
            // line 222
            echo ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 222)) ? ("true") : ("false"));
            echo ";
               return {
                  action: 'getActors',
                  actortype: actorytype,
                  users_right: '";
            // line 226
            (((array_key_exists("users_right", $context) &&  !(null === ($context["users_right"] ?? null)))) ? (print (twig_escape_filter($this->env, ($context["users_right"] ?? null), "html", null, true))) : (print ("all")));
            echo "',
                  entity_restrict: (actors.requester.length == 0 && is_new_item) ? -1 : ";
            // line 227
            echo twig_escape_filter($this->env, ($context["entities_id"] ?? null), "html", null, true);
            echo ",
                  searchText: params.term,
                  _idor_token: '";
            // line 229
            echo twig_escape_filter($this->env, Session::getNewIDORToken(), "html", null, true);
            echo "',
                  itiltemplate_class: '";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "getType", [], "method", false, false, false, 230), "html", null, true);
            echo "',
                  itiltemplates_id: ";
            // line 231
            (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 231), "id", [], "array", true, true, false, 231) &&  !(null === (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 231)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["id"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "fields", [], "any", false, true, false, 231)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["id"] ?? null) : null), "html", null, true))) : (print (0)));
            echo ",
                  itemtype: '";
            // line 232
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 232), "html", null, true);
            echo "',
                  items_id: ";
            // line 233
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 233)) ? ( -1) : ((($__internal_compile_14 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 233)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["id"] ?? null) : null))), "html", null, true);
            echo ",
                  item: ";
            // line 234
            echo json_encode(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 234));
            echo ",
                  returned_itemtypes: ";
            // line 235
            echo json_encode((($context["returned_itemtypes"]) ?? ([0 => "User", 1 => "Group", 2 => "Supplier"])));
            echo ",
                  page: params.page || 1
               };
            },
         }
      }).on('select2:open', () => {
          // Close popovers
          \$('.popover').popover('hide');
      });

       actor_select.parent().popover({
           selector: '[data-glpi-popover-source]',
           container: actor_select.parent(),
           html: true,
           sanitize: false,
           trigger: 'hover',
           delay: {
               hide: 1500
           },
           template: '<' + 'div class=\"popover shadow\" role=\"tooltip\"><' + 'div class=\"popover-arrow\"><' + '/div><' + 'h3 class=\"popover-header\"><' + '/h3><' + 'div class=\"popover-body\"><' + '/div><' + '/div>',
           content: function() {
               // Close other popovers
               \$('.popover').popover('hide');
               return \$('#' + \$(this).attr('data-glpi-popover-source')).html();
           }
       });

      // manage actors change
      var updateActors";
            // line 263
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " = function() {
         var data = \$(\"#actor_";
            // line 264
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").select2('data');

         var new_actors = [];
         data.forEach(function(selection) {
            var element = \$(selection.element);

            var itemtype  = selection.itemtype ?? element.data('itemtype');
            var items_id  = selection.items_id ?? element.data('items-id');
            var use_notif = selection.use_notification  ?? element.data('use-notification')  ?? false;
            var alt_email = selection.alternative_email ?? element.data('alternative-email') ?? '';

            if (itemtype == \"Email\") {
               itemtype  = \"User\";
               use_notif = true;
               alt_email = selection.id;
            }

            new_actors.push({
               itemtype: itemtype,
               items_id: items_id,
               use_notification: use_notif,
               alternative_email: alt_email,
            });
         });

         actors[actorytype] = new_actors;

         saveActorsToDom();
      };
      \$(\"#actor_";
            // line 293
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").on('select2:select', function () {
         updateActors";
            // line 294
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "();
         ";
            // line 295
            echo twig_escape_filter($this->env, ($context["onchange"] ?? null), "html", null, true);
            echo "
      });
      \$(\"#actor_";
            // line 297
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\").on('select2:unselect', function () {
         updateActors";
            // line 298
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "();
         ";
            // line 299
            echo twig_escape_filter($this->env, ($context["onchange"] ?? null), "html", null, true);
            echo "
      });

      // intercept event for edit notification button
      document.addEventListener('click', event => {
         if (event.target.closest(\"#actor_";
            // line 304
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " + .select2 .edit-notify-user\")) {
            return openNotifyModal(event);
         }
         // if a click on assign info is detected prevent opening of select2
         if (event.target.closest(\"#actor_";
            // line 308
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " + .select2 .assign_infos\")) {
            event.stopPropagation();
         }
      }, {capture: true})
      document.addEventListener('keydown', event => {
         if (event.target.closest(\"#actor_";
            // line 313
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " + .select2 .edit-notify-user\")
            && event.key == \"Enter\") {
            return openNotifyModal(event);
         }
      }, {capture: true})

      ";
            // line 319
            if (twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => ("_users_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 319)) {
                // line 320
                echo "         \$(\".actor_entry[data-itemtype=\\\"User\\\"][data-actortype=\\\"";
                echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
                echo "\\\"]\").parent().css(\"display\", \"none\");
      ";
            }
            // line 322
            echo "      ";
            if (twig_get_attribute($this->env, $this->source, ($context["itiltemplate"] ?? null), "isHiddenField", [0 => ("_groups_id_" . ($context["actortype"] ?? null))], "method", false, false, false, 322)) {
                // line 323
                echo "         \$(\".actor_entry[data-itemtype=\\\"Group\\\"][data-actortype=\\\"";
                echo twig_escape_filter($this->env, ($context["actortype"] ?? null), "html", null, true);
                echo "\\\"]\").parent().css(\"display\", \"none\");
      ";
            }
            // line 325
            echo "   });
   </script>
";
        }
    }

    public function getTemplateName()
    {
        return "components/itilobject/actors/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  588 => 325,  582 => 323,  579 => 322,  573 => 320,  571 => 319,  562 => 313,  554 => 308,  547 => 304,  539 => 299,  535 => 298,  531 => 297,  526 => 295,  522 => 294,  518 => 293,  486 => 264,  482 => 263,  451 => 235,  447 => 234,  443 => 233,  439 => 232,  435 => 231,  431 => 230,  427 => 229,  422 => 227,  418 => 226,  411 => 222,  403 => 217,  375 => 192,  371 => 191,  360 => 183,  354 => 180,  350 => 179,  331 => 163,  317 => 152,  313 => 151,  309 => 150,  305 => 149,  285 => 132,  264 => 113,  255 => 107,  245 => 99,  243 => 98,  234 => 92,  226 => 87,  221 => 85,  217 => 84,  209 => 79,  204 => 77,  199 => 75,  194 => 73,  175 => 57,  169 => 54,  163 => 50,  157 => 48,  155 => 47,  151 => 45,  142 => 42,  133 => 41,  129 => 39,  127 => 38,  123 => 37,  119 => 36,  113 => 35,  108 => 34,  105 => 33,  101 => 32,  93 => 31,  90 => 30,  88 => 29,  85 => 28,  81 => 26,  79 => 25,  77 => 24,  74 => 23,  70 => 21,  68 => 20,  66 => 19,  63 => 18,  59 => 16,  57 => 15,  56 => 14,  55 => 13,  53 => 12,  50 => 11,  47 => 9,  45 => 8,  42 => 7,  40 => 6,  37 => 5,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/actors/field.html.twig", "C:\\xampp\\htdocs\\glpi\\templates\\components\\itilobject\\actors\\field.html.twig");
    }
}
