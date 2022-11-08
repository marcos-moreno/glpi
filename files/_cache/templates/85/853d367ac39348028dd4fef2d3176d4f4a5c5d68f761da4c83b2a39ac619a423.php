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

/* components/itilobject/layout.html.twig */
class __TwigTemplate_e16cc0d180a6e8690c02d42d6e09dd222607f59b8508582007c04a8d557ae004 extends Template
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
        $context["rand"] = twig_random($this->env);
        // line 6
        $context["main_rand"] = ($context["rand"] ?? null);
        // line 7
        echo "
";
        // line 8
        $context["itil_layout"] = $this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("itil_layout", true);
        // line 9
        $context["is_collapsed"] = (0 === twig_compare((($__internal_compile_0 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["collapsed"] ?? null) : null), "true"));
        // line 10
        $context["is_expanded"] = (0 === twig_compare((($__internal_compile_1 = ($context["itil_layout"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["expanded"] ?? null) : null), "true"));
        // line 11
        $context["collapsed_cls"] = ((($context["is_collapsed"] ?? null)) ? ("right-collapsed") : (""));
        // line 12
        $context["expanded_cls"] = (((0 === twig_compare(($context["is_expanded"] ?? null), "true"))) ? ("right-expanded") : (""));
        // line 13
        echo "
";
        // line 14
        $context["left_regular_cls"] = "col-xl-8 col-md-10";
        // line 15
        $context["right_regular_cls"] = "col-xl-4 col-md-2";
        // line 16
        echo "
";
        // line 17
        $context["left_expanded_cls"] = "col-xxl-4 col-md-4";
        // line 18
        $context["right_expanded_cls"] = "col-xxl-8 col-md-8";
        // line 19
        echo "
";
        // line 20
        $context["left_side_cls"] = ($context["left_regular_cls"] ?? null);
        // line 21
        $context["right_side_cls"] = ($context["right_regular_cls"] ?? null);
        // line 22
        if (($context["is_expanded"] ?? null)) {
            // line 23
            echo "    ";
            $context["left_side_cls"] = ($context["left_expanded_cls"] ?? null);
            // line 24
            echo "    ";
            $context["right_side_cls"] = ($context["right_expanded_cls"] ?? null);
        }
        // line 26
        echo "

<div id=\"itil-object-container\" class=\"mt-n1 ";
        // line 28
        echo twig_escape_filter($this->env, ($context["collapsed_cls"] ?? null), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["expanded_cls"] ?? null), "html", null, true);
        echo "\">

   ";
        // line 30
        if ((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 30) &&  !(($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["template_preview"] ?? null) : null))) {
            // line 31
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            echo "
   ";
        }
        // line 33
        echo "
   <div class=\"row d-flex flex-column alin-items-stretch itil-object\">
      ";
        // line 35
        $context["is_timeline_reversed"] = (0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("timeline_order"), twig_constant("CommonITILObject::TIMELINE_ORDER_REVERSE")));
        // line 36
        echo "      ";
        $context["fl_direction"] = (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "any", false, false, false, 36) || ($context["is_timeline_reversed"] ?? null))) ? ("flex-column") : ("flex-column-reverse"));
        // line 37
        echo "      <div class=\"itil-left-side col-12 ";
        echo twig_escape_filter($this->env, ($context["left_side_cls"] ?? null), "html", null, true);
        echo " order-last order-md-first pt-2 pe-2 pe-md-4 d-flex ";
        echo twig_escape_filter($this->env, ($context["fl_direction"] ?? null), "html", null, true);
        echo " border-top border-4\">
         ";
        // line 38
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 38)) {
            // line 39
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/new_form.html.twig");
            echo "
         ";
        } else {
            // line 41
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/timeline/timeline.html.twig");
            echo "
         ";
        }
        // line 43
        echo "      </div>
      <div class=\"itil-right-side col-12 ";
        // line 44
        echo twig_escape_filter($this->env, ($context["right_side_cls"] ?? null), "html", null, true);
        echo " mt-0 mt-md-n1 card-footer p-0 rounded-0\">
         ";
        // line 45
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 45)) {
            // line 46
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_open.html.twig");
            echo "
         ";
        }
        // line 48
        echo "         ";
        echo twig_include($this->env, $context, "components/itilobject/fields_panel.html.twig");
        echo "
         ";
        // line 49
        if ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 49)) {
            // line 50
            echo "            ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_close.html.twig");
            echo "
         ";
        }
        // line 52
        echo "      </div>
   </div>

   ";
        // line 55
        if ( !(($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["template_preview"] ?? null) : null)) {
            // line 56
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/footer.html.twig");
            echo "
   ";
        }
        // line 58
        echo "
   ";
        // line 59
        if (( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 59) &&  !(($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["template_preview"] ?? null) : null))) {
            // line 60
            echo "      ";
            echo twig_include($this->env, $context, "components/itilobject/mainform_close.html.twig");
            echo "
   ";
        }
        // line 62
        echo "
</div>

";
        // line 65
        if (($context["ticket_ticket"] ?? null)) {
            // line 66
            echo "   ";
            // line 67
            echo "   <form method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["ticket_ticket"] ?? null), "getFormURL", [], "method", false, false, false, 67), "html", null, true);
            echo "\" class=\"d-none\" id=\"linked_tickets_";
            echo twig_escape_filter($this->env, ($context["main_rand"] ?? null), "html", null, true);
            echo "\" data-submit-once>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 68
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
      <input type=\"hidden\" name=\"purge\" value=\"1\" />
      <input type=\"hidden\" name=\"tickets_id\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, (($__internal_compile_5 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 70)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["id"] ?? null) : null), "html", null, true);
            echo "\" />
   </form>
";
        }
        // line 73
        echo "
";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable([0 => "requester", 1 => "observer", 2 => "assign"]);
        foreach ($context['_seq'] as $context["_key"] => $context["actortype"]) {
            // line 76
            echo "   <form method=\"POST\" action=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 76), "html", null, true);
            echo "\" class=\"d-none\" id=\"addme_as_";
            echo twig_escape_filter($this->env, $context["actortype"], "html", null, true);
            echo "_";
            echo twig_escape_filter($this->env, ($context["main_rand"] ?? null), "html", null, true);
            echo "\" data-submit-once>
      <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 77
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
      <input type=\"hidden\" name=\"addme_as_actor\" value=\"1\" />
      <input type=\"hidden\" name=\"actortype\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, $context["actortype"], "html", null, true);
            echo "\" />
   </form>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actortype'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "
<form name=\"massaction_";
        // line 83
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" id=\"massaction_";
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\" method=\"post\"
      action=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
        echo "\" data-submit-once>
   <div id=\"massive_container_";
        // line 85
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
        // line 86
        echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
        echo "\" />
</form>

<script type=\"text/javascript\">
\$(function() {
   \$(document).on(\"click\", \".switch-panel-width\", function() {
       if (\$('#itil-object-container').hasClass('right-collapsed')) {
           \$('#itil-object-container').removeClass('right-collapsed');
       } else if (\$('.itil-left-side').hasClass(\"";
        // line 94
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\")) {
         // Expand right-side panel
         \$('#itil-object-container').addClass('right-expanded');
         // Left side
         \$('.itil-left-side').removeClass(\"";
        // line 98
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\");
         \$('.itil-footer .timeline-buttons').removeClass(\"";
        // line 99
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\");
         // Right side
         \$('.itil-footer .form-buttons').removeClass('col-md').addClass(\"";
        // line 101
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\");
         \$('.itil-right-side').removeClass(\"";
        // line 102
        echo twig_escape_filter($this->env, ($context["right_regular_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\");
         // Switcher buttons
         \$('.switch-panel-width i.fas').removeClass('fa-caret-left').addClass('fa-caret-right');
         \$('.itil-right-side .accordion-body:not(.accordion-actors).row .col-12').removeClass('col-12').addClass('col-sm-6');
         \$('#actors .col-12').removeClass('col-12').addClass('col-sm-4');
      } else {
         // Decrease right-side panel
         \$('#itil-object-container').removeClass('right-expanded');
         // Left side
         \$('.itil-left-side').removeClass(\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\");
         \$('.itil-footer .timeline-buttons').removeClass(\"";
        // line 112
        echo twig_escape_filter($this->env, ($context["left_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["left_regular_cls"] ?? null), "html", null, true);
        echo "\");
         // Right side
         \$('.itil-footer .form-buttons').removeClass(\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass('col-md');
         \$('.itil-right-side').removeClass(\"";
        // line 115
        echo twig_escape_filter($this->env, ($context["right_expanded_cls"] ?? null), "html", null, true);
        echo "\").addClass(\"";
        echo twig_escape_filter($this->env, ($context["right_regular_cls"] ?? null), "html", null, true);
        echo "\");
         // Switcher buttons
         \$('.switch-panel-width i.fas').removeClass('fa-caret-right').addClass('fa-caret-left');
         \$('.itil-right-side .accordion-body:not(.accordion-actors).row .col-sm-6').removeClass('col-sm-6').addClass('col-12');
         \$('#actors .col-sm-4').removeClass('col-sm-4').addClass('col-12');
      }

      saveFieldPanelState();
   });

    \$(document).on(\"click\", \".collapse-panel\", function() {
       \$('#itil-object-container').addClass('right-collapsed');

        // Hide all accordion item
        \$('#itil-data .accordion-collapse').removeClass('show');
        \$('#itil-data .accordion-button').addClass('collapsed');

       saveFieldPanelState();
    });

    \$(document).on(\"click\", \".right-collapsed .itil-right-side\", function(event) {
        \$('#itil-object-container').removeClass('right-collapsed');
        saveFieldPanelState();
    });

    var myCollapsible = document.getElementById('itil-data')
    myCollapsible.addEventListener('shown.bs.collapse', function () {
        saveFieldPanelState();
    });
    myCollapsible.addEventListener('hidden.bs.collapse', function () {
        saveFieldPanelState();
    });

    var itil_layout = {
        collapsed: false,
        expanded: false,
        items: {}
    };

    var saveFieldPanelState = function() {
        itil_layout.collapsed = \$('#itil-object-container').hasClass('right-collapsed');
        itil_layout.expanded  = \$('#itil-object-container').hasClass('right-expanded');

        \$('#itil-data .accordion-collapse').each(function() {
            var item_shown = \$(this).hasClass('show');
            var item_id    = \$(this).attr('id');

            itil_layout.items[item_id] = item_shown;
        });

        \$.ajax({
            url: CFG_GLPI.root_doc + '/ajax/itillayout.php',
            type: 'POST',
            datatype: \"json\",
            data: {
                'itil_layout': itil_layout
            }
        });
    }

    var restoreFieldPanelState = function() {
        \$.each(field_panel_state.items, function(item_id, item_shown) {
            if (item_shown) {
                \$('#' + item_id).addClass('show');
            } else {
                \$('#' + item_id).removeClass('show');
            }
        });
    }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "components/itilobject/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  328 => 115,  324 => 114,  317 => 112,  311 => 111,  297 => 102,  293 => 101,  286 => 99,  280 => 98,  273 => 94,  262 => 86,  258 => 85,  254 => 84,  248 => 83,  245 => 82,  236 => 79,  231 => 77,  222 => 76,  218 => 75,  215 => 73,  209 => 70,  204 => 68,  197 => 67,  195 => 66,  193 => 65,  188 => 62,  182 => 60,  180 => 59,  177 => 58,  171 => 56,  169 => 55,  164 => 52,  158 => 50,  156 => 49,  151 => 48,  145 => 46,  143 => 45,  139 => 44,  136 => 43,  130 => 41,  124 => 39,  122 => 38,  115 => 37,  112 => 36,  110 => 35,  106 => 33,  100 => 31,  98 => 30,  91 => 28,  87 => 26,  83 => 24,  80 => 23,  78 => 22,  76 => 21,  74 => 20,  71 => 19,  69 => 18,  67 => 17,  64 => 16,  62 => 15,  60 => 14,  57 => 13,  55 => 12,  53 => 11,  51 => 10,  49 => 9,  47 => 8,  44 => 7,  42 => 6,  40 => 5,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/itilobject/layout.html.twig", "/var/www/html/glpi/templates/components/itilobject/layout.html.twig");
    }
}
