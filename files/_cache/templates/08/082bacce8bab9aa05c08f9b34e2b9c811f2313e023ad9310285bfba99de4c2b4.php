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

/* components/form/header.html.twig */
class __TwigTemplate_2a0f787e7053d451f50d52559b381c53a4c1b8255b86a884c5e2999331ff9f5f extends Template
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
        // line 33
        echo "
";
        // line 34
        $context["target"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "target", [], "array", true, true, false, 34) &&  !(null === (($__internal_compile_0 = ($context["params"] ?? null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["target"] ?? null) : null)))) ? ((($__internal_compile_1 = ($context["params"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["target"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getFormURL", [], "method", false, false, false, 34)));
        // line 35
        $context["canedit"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "canedit", [], "array", true, true, false, 35) &&  !(null === (($__internal_compile_2 = ($context["params"] ?? null)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["canedit"] ?? null) : null)))) ? ((($__internal_compile_3 = ($context["params"] ?? null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["canedit"] ?? null) : null)) : (true));
        // line 36
        $context["withtemplate"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "withtemplate", [], "array", true, true, false, 36) &&  !(null === (($__internal_compile_4 = ($context["params"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["withtemplate"] ?? null) : null)))) ? ((($__internal_compile_5 = ($context["params"] ?? null)) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["withtemplate"] ?? null) : null)) : (""));
        // line 37
        $context["rand"] = twig_random($this->env);
        // line 38
        $context["nametype"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formtitle", [], "array", true, true, false, 38) &&  !(null === (($__internal_compile_6 = ($context["params"] ?? null)) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["formtitle"] ?? null) : null)))) ? ((($__internal_compile_7 = ($context["params"] ?? null)) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["formtitle"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getTypeName", [0 => 1], "method", false, false, false, 38)));
        // line 39
        $context["friendlyname"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "friendlyname", [], "array", true, true, false, 39) &&  !(null === (($__internal_compile_8 = ($context["params"] ?? null)) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["friendlyname"] ?? null) : null)))) ? ((($__internal_compile_9 = ($context["params"] ?? null)) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["friendlyname"] ?? null) : null)) : (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getHeaderName", [], "method", false, false, false, 39)));
        // line 40
        $context["no_id"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "noid", [], "array", true, true, false, 40) &&  !(null === (($__internal_compile_10 = ($context["params"] ?? null)) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["noid"] ?? null) : null)))) ? ((($__internal_compile_11 = ($context["params"] ?? null)) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["noid"] ?? null) : null)) : (false));
        // line 41
        $context["id"] = (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 41), "id", [], "array", true, true, false, 41) &&  !(null === (($__internal_compile_12 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 41)) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["id"] ?? null) : null)))) ? ((($__internal_compile_13 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, true, false, 41)) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["id"] ?? null) : null)) : ( -1));
        // line 42
        $context["formoptions"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "formoptions", [], "array", true, true, false, 42) &&  !(null === (($__internal_compile_14 = ($context["params"] ?? null)) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["formoptions"] ?? null) : null)))) ? ((($__internal_compile_15 = ($context["params"] ?? null)) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["formoptions"] ?? null) : null)) : (""));
        // line 43
        echo "
";
        // line 44
        $context["entity_id"] = 0;
        // line 45
        $context["entity_name"] = "";
        // line 46
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 46)) {
            // line 47
            echo "   ";
            if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getType", [], "method", false, false, false, 47), "Entity")) && (0 === twig_compare((($__internal_compile_16 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 47)) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["id"] ?? null) : null), 0)))) {
                // line 48
                echo "      ";
                $context["entity_id"] = null;
                // line 49
                echo "   ";
            } else {
                // line 50
                echo "      ";
                $context["entity_id"] = (((twig_get_attribute($this->env, $this->source, ($context["params"] ?? null), "entities_id", [], "array", true, true, false, 50) &&  !(null === (($__internal_compile_17 = ($context["params"] ?? null)) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["entities_id"] ?? null) : null)))) ? ((($__internal_compile_18 = ($context["params"] ?? null)) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["entities_id"] ?? null) : null)) : ((((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", true, true, false, 50) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 50)))) ? (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 50)) : ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiactive_entity")))));
                // line 51
                echo "   ";
            }
            // line 52
            echo "
   ";
            // line 53
            if (Session::isMultiEntitiesMode()) {
                // line 54
                echo "      ";
                $context["entity_name"] = $this->extensions['Glpi\Application\View\Extension\ItemtypeExtension']->getItemName("Entity", twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getEntityID", [], "method", false, false, false, 54));
                // line 55
                echo "   ";
            }
        }
        // line 57
        echo "
";
        // line 58
        if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canEdit", [0 => (($__internal_compile_19 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 58)) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["id"] ?? null) : null)], "method", false, false, false, 58)) {
            // line 59
            echo "<form name=\"massaction_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" id=\"massaction_";
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\" method=\"post\"
      action=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path("/front/massiveaction.php"), "html", null, true);
            echo "\" data-submit-once>
   <div id=\"massive_container_";
            // line 61
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "\"></div>
   <input type=\"hidden\" name=\"_glpi_csrf_token\" value=\"";
            // line 62
            echo twig_escape_filter($this->env, Session::getNewCSRFToken(), "html", null, true);
            echo "\" />
</form>

<form name=\"asset_form\" method=\"post\" action=\"";
            // line 65
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "html", null, true);
            echo "\" ";
            echo ($context["formoptions"] ?? null);
            echo " enctype=\"multipart/form-data\" data-submit-once>
   <input type=\"hidden\" name=\"entities_id\" value=\"";
            // line 66
            echo twig_escape_filter($this->env, ($context["entity_id"] ?? null), "html", null, true);
            echo "\" />
   ";
            // line 67
            if ((twig_get_attribute($this->env, $this->source, ($context["_request"] ?? null), "_in_modal", [], "array", true, true, false, 67) && (0 === twig_compare((($__internal_compile_20 = ($context["_request"] ?? null)) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["_in_modal"] ?? null) : null), "1")))) {
                // line 68
                echo "      <input type=\"hidden\" name=\"_in_modal\" value=\"1\"/>
   ";
            }
        }
        // line 71
        echo "   <div id=\"mainformtable\">
      ";
        // line 72
        $context["template_name"] = $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->getVerbatimValue((($__internal_compile_21 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 72)) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["template_name"] ?? null) : null));
        // line 73
        echo "      ";
        if (((0 === twig_compare(($context["withtemplate"] ?? null), 2)) &&  !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 73))) {
            // line 74
            echo "         <input type=\"hidden\" name=\"template_name\" value=\"";
            echo twig_escape_filter($this->env, ($context["template_name"] ?? null), "html", null, true);
            echo "\" />
         ";
            // line 75
            $context["nametype"] = twig_sprintf(__("Created from the template %s"), ($context["template_name"] ?? null));
            // line 76
            echo "      ";
        } elseif ((0 === twig_compare(($context["withtemplate"] ?? null), 1))) {
            // line 77
            echo "         <input type=\"hidden\" name=\"is_template\" value=\"1\" />
      ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 78
($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 78)) {
            // line 79
            echo "         ";
            $context["nametype"] = twig_sprintf(__("%1\$s - %2\$s"), __("New item"), ($context["nametype"] ?? null));
            // line 80
            echo "      ";
        } else {
            // line 81
            echo "         ";
            if (((0 === twig_compare(($context["noid"] ?? null), false)) && ($this->extensions['Glpi\Application\View\Extension\SessionExtension']->session("glpiis_ids_visible") || (0 === twig_compare(twig_length_filter($this->env, ($context["nametype"] ?? null)), 0))))) {
                // line 82
                echo "            ";
                $context["nametype"] = twig_sprintf(__("%1\$s - %2\$s"), ($context["nametype"] ?? null), (($__internal_compile_22 = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "fields", [], "any", false, false, false, 82)) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["id"] ?? null) : null));
                // line 83
                echo "         ";
            }
            // line 84
            echo "      ";
        }
        // line 85
        echo "
      ";
        // line 86
        if (( !array_key_exists("no_header", $context) || (0 === twig_compare(($context["no_header"] ?? null), false)))) {
            // line 87
            echo "         <div class=\"card-header main-header d-flex flex-wrap mx-n2 mt-n2 align-items-stretch\">
            ";
            // line 88
            if ((0 === twig_compare(($context["withtemplate"] ?? null), 1))) {
                // line 89
                echo "               <input type=\"text\" class=\"form-control ms-4 mb-2\" placeholder=\"";
                echo twig_escape_filter($this->env, __("Template name"), "html", null, true);
                echo "\"
                  name=\"template_name\" id=\"textfield_template_name";
                // line 90
                echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
                echo "\"
                  value=\"";
                // line 91
                echo twig_escape_filter($this->env, ($context["template_name"] ?? null), "html", null, true);
                echo "\" />
            ";
            }
            // line 93
            echo "            <h3 class=\"card-title d-flex align-items-center ps-4\">
               ";
            // line 94
            $context["icon"] = twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "getIcon", [], "method", false, false, false, 94);
            // line 95
            echo "               ";
            if ((1 === twig_compare(twig_length_filter($this->env, ($context["icon"] ?? null)), 0))) {
                // line 96
                echo "                  <div class=\"ribbon ribbon-bookmark ribbon-top ribbon-start bg-blue s-1\">
                     <i class=\"";
                // line 97
                echo twig_escape_filter($this->env, ($context["icon"] ?? null), "html", null, true);
                echo " fa-2x\"></i>
                  </div>
               ";
            }
            // line 100
            echo "               <span>
               ";
            // line 101
            if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "id", [], "any", false, false, false, 101), 0))) {
                // line 102
                echo "                  ";
                echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, ($context["friendlyname"] ?? null), "html", null, true);
                echo "
               ";
            } else {
                // line 104
                echo "                  ";
                echo twig_escape_filter($this->env, ($context["nametype"] ?? null), "html", null, true);
                echo "
               ";
            }
            // line 106
            echo "               </span>
               ";
            // line 107
            if (($context["header_toolbar"] ?? null)) {
                // line 108
                echo "                  <div class=\"d-inline-block toolbar ms-2\">
                     ";
                // line 109
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["header_toolbar"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["raw_element"]) {
                    // line 110
                    echo "                        ";
                    echo $context["raw_element"];
                    echo "
                     ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['raw_element'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 112
                echo "                  </div>
               ";
            }
            // line 114
            echo "            </h3>

            ";
            // line 116
            $context["single_actions_ms_auto"] = true;
            // line 117
            echo "            ";
            if (((twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isEntityAssign", [], "method", false, false, false, 117) && Session::isMultiEntitiesMode()) &&  !$this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "Entity"))) {
                // line 118
                echo "               ";
                $context["single_actions_ms_auto"] = false;
                // line 119
                echo "               <span class=\"badge entity-name mx-1 px-2 ms-auto align-items-center\" title=\"";
                echo twig_escape_filter($this->env, ($context["entity_name"] ?? null), "html", null, true);
                echo "\">
                  <i class=\"ti ti-stack me-2\"></i>
                  ";
                // line 121
                echo twig_escape_filter($this->env, ($context["entity_name"] ?? null), "html", null, true);
                echo "
               </span>

               ";
                // line 124
                if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "maybeRecursive", [], "method", false, false, false, 124)) {
                    // line 125
                    echo "                  <span class=\"badge is_recursive-toggle mx-1 px-2 align-items-center\">
                     <label class=\"form-check d-flex align-items-center mb-0\">
                        ";
                    // line 127
                    $context["disabled"] = (0 === twig_compare(($context["canedit"] ?? null), false));
                    // line 128
                    echo "                        ";
                    $context["comment"] = __("Change visibility in child entities.");
                    // line 129
                    echo "
                        ";
                    // line 130
                    if ($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild")) {
                        // line 131
                        echo "                           ";
                        $context["comment"] = __("Can՛t change this attribute. It՛s inherited from its parent.");
                        // line 132
                        echo "                           ";
                        $context["disabled"] = true;
                        // line 133
                        echo "                        ";
                    } elseif ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "can", [0 => ($context["id"] ?? null), 1 => "recursive"], "method", false, false, false, 133)) {
                        // line 134
                        echo "                           ";
                        $context["comment"] = __("You are not allowed to change the visibility flag for child entities.");
                        // line 135
                        echo "                           ";
                        $context["disabled"] = true;
                        // line 136
                        echo "                        ";
                    } elseif ( !twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "canUnrecurs", [], "method", false, false, false, 136)) {
                        // line 137
                        echo "                           ";
                        $context["comment"] = __("Flag change forbidden. Linked items found.");
                        // line 138
                        echo "                           ";
                        $context["disabled"] = true;
                        // line 139
                        echo "                        ";
                    }
                    // line 140
                    echo "
                        ";
                    // line 141
                    if ( !($context["disabled"] ?? null)) {
                        echo "<input type=\"hidden\" name=\"is_recursive\" value=\"0\" />";
                    }
                    // line 142
                    echo "                        <input class=\"form-check-input\" type=\"checkbox\" name=\"is_recursive\" value=\"1\"
                              ";
                    // line 143
                    if (twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 143)) {
                        echo "checked=\"checked\"";
                    }
                    // line 144
                    echo "                              ";
                    if (($context["disabled"] ?? null)) {
                        echo "disabled=\"disabled\"";
                    }
                    echo " />
                        ";
                    // line 145
                    if ((($this->extensions['Glpi\Application\View\Extension\PhpExtension']->isInstanceOf(($context["item"] ?? null), "CommonDBChild") && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isNewItem", [], "method", false, false, false, 145)) && twig_get_attribute($this->env, $this->source, ($context["item"] ?? null), "isRecursive", [], "method", false, false, false, 145))) {
                        // line 146
                        echo "                            ";
                        // line 147
                        echo "                            <input type=\"hidden\" name=\"is_recursive\" value=\"1\" />
                        ";
                    }
                    // line 149
                    echo "                        <span class=\"form-check-label mb-0 mx-2\">
                           ";
                    // line 150
                    echo twig_escape_filter($this->env, __("Child entities"), "html", null, true);
                    echo "
                           <i class=\"fas fa-info ms-1\" title=\"";
                    // line 151
                    echo twig_escape_filter($this->env, ($context["comment"] ?? null), "html", null, true);
                    echo "\"></i>
                        </span>
                     </label>
                  </span>
               ";
                }
                // line 156
                echo "            ";
            }
            // line 157
            echo "
            ";
            // line 158
            echo twig_include($this->env, $context, "components/form/single-action.html.twig");
            echo "
         </div>
      ";
        }
        // line 161
        echo "
      ";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\PluginExtension']->callPluginHook(twig_constant("Glpi\\Plugin\\Hooks::PRE_ITEM_FORM"), ["item" => ($context["item"] ?? null), "options" => ($context["params"] ?? null)]), "html", null, true);
        echo "

      ";
        // line 165
        echo "      ";
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 165), "request", [0 => "in_modal"], "method", false, false, false, 165), true))) {
            // line 166
            echo "      <input type=\"hidden\" name=\"_no_message_link\" value=\"1\" />
      ";
        }
    }

    public function getTemplateName()
    {
        return "components/form/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  397 => 166,  394 => 165,  389 => 162,  386 => 161,  380 => 158,  377 => 157,  374 => 156,  366 => 151,  362 => 150,  359 => 149,  355 => 147,  353 => 146,  351 => 145,  344 => 144,  340 => 143,  337 => 142,  333 => 141,  330 => 140,  327 => 139,  324 => 138,  321 => 137,  318 => 136,  315 => 135,  312 => 134,  309 => 133,  306 => 132,  303 => 131,  301 => 130,  298 => 129,  295 => 128,  293 => 127,  289 => 125,  287 => 124,  281 => 121,  275 => 119,  272 => 118,  269 => 117,  267 => 116,  263 => 114,  259 => 112,  250 => 110,  246 => 109,  243 => 108,  241 => 107,  238 => 106,  232 => 104,  224 => 102,  222 => 101,  219 => 100,  213 => 97,  210 => 96,  207 => 95,  205 => 94,  202 => 93,  197 => 91,  193 => 90,  188 => 89,  186 => 88,  183 => 87,  181 => 86,  178 => 85,  175 => 84,  172 => 83,  169 => 82,  166 => 81,  163 => 80,  160 => 79,  158 => 78,  155 => 77,  152 => 76,  150 => 75,  145 => 74,  142 => 73,  140 => 72,  137 => 71,  132 => 68,  130 => 67,  126 => 66,  120 => 65,  114 => 62,  110 => 61,  106 => 60,  99 => 59,  97 => 58,  94 => 57,  90 => 55,  87 => 54,  85 => 53,  82 => 52,  79 => 51,  76 => 50,  73 => 49,  70 => 48,  67 => 47,  65 => 46,  63 => 45,  61 => 44,  58 => 43,  56 => 42,  54 => 41,  52 => 40,  50 => 39,  48 => 38,  46 => 37,  44 => 36,  42 => 35,  40 => 34,  37 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "components/form/header.html.twig", "/var/www/html/glpi/templates/components/form/header.html.twig");
    }
}
