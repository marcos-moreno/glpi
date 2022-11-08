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

/* layout/parts/menu.html.twig */
class __TwigTemplate_8aabf36a7d7df391f3bcd7a90ce5297d2b5d28e83814f22f6f593517b97d7f5d extends Template
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
        $context["is_vertical"] = (0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout"), "vertical"));
        // line 6
        $context["is_horizontal"] = (0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("page_layout"), "horizontal"));
        // line 7
        $context["is_menu_folded"] = (0 === twig_compare($this->extensions['Glpi\Application\View\Extension\SessionExtension']->userPref("fold_menu"), "1"));
        // line 8
        $context["rand"] = twig_random($this->env);
        // line 9
        echo "
<style>
   .efectMenu {
      color: #FFF;
   }
   .efectMenu:hover {
      color: white;
   }
</style>

<ul class=\"navbar-nav\" id=\"menu_";
        // line 19
        echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
        echo "\">
   ";
        // line 21
        echo "
";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["menu"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["firstlevel"]) {
            // line 23
            echo "   ";
            $context["firstlevel_active"] = (0 === twig_compare((($__internal_compile_0 = (($__internal_compile_1 = ($context["menu"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["title"] ?? null) : null), (($__internal_compile_2 = $context["firstlevel"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["title"] ?? null) : null)));
            // line 24
            echo "   ";
            $context["firstlevel_shown"] = (((0 === twig_compare((($__internal_compile_3 = (($__internal_compile_4 = ($context["menu"] ?? null)) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4[($context["sector"] ?? null)] ?? null) : null)) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["title"] ?? null) : null), (($__internal_compile_5 = $context["firstlevel"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["title"] ?? null) : null))) && ($context["is_vertical"] ?? null)) && (0 === twig_compare(($context["is_menu_folded"] ?? null), false)));
            // line 25
            echo "   ";
            $context["has_subitems"] = false;
            // line 26
            echo " 
   ";
            // line 27
            if ((0 !== twig_compare((($__internal_compile_6 = $context["firstlevel"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["title"] ?? null) : null), "Herramientas"))) {
                // line 28
                echo "      ";
                if (twig_get_attribute($this->env, $this->source, $context["firstlevel"], "content", [], "array", true, true, false, 28)) {
                    // line 29
                    echo "         ";
                    // line 30
                    echo "         ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_7 = $context["firstlevel"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["content"] ?? null) : null));
                    foreach ($context['_seq'] as $context["_key"] => $context["secondlevel"]) {
                        // line 31
                        echo "            ";
                        if (twig_get_attribute($this->env, $this->source, $context["secondlevel"], "page", [], "array", true, true, false, 31)) {
                            // line 32
                            echo "               ";
                            $context["has_subitems"] = true;
                            // line 33
                            echo "            ";
                        }
                        // line 34
                        echo "         ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['secondlevel'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "      ";
                }
                // line 36
                echo "      ";
                if (($context["has_subitems"] ?? null)) {
                    // line 37
                    echo "         <li class=\" nav-item dropdown ";
                    echo ((($context["firstlevel_active"] ?? null)) ? ("active") : (""));
                    echo "\"
            title=\"";
                    // line 38
                    echo twig_escape_filter($this->env, (($__internal_compile_8 = $context["firstlevel"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["title"] ?? null) : null), "html", null, true);
                    echo "\">
            
            <a class=\"nav-link dropdown-toggle ";
                    // line 40
                    echo ((($context["firstlevel_active"] ?? null)) ? ("active") : (""));
                    echo " ";
                    echo ((($context["firstlevel_shown"] ?? null)) ? ("show") : (""));
                    echo "\"
               data-bs-toggle=\"dropdown\" role=\"button\"
               aria-expanded=\"";
                    // line 42
                    echo ((($context["firstlevel_shown"] ?? null)) ? ("true") : ("false"));
                    echo "\">
               <i style=\"color: #FFF;\" class=\"fa-fw ";
                    // line 43
                    (((twig_get_attribute($this->env, $this->source, $context["firstlevel"], "icon", [], "array", true, true, false, 43) &&  !(null === (($__internal_compile_9 = $context["firstlevel"]) && is_array($__internal_compile_9) || $__internal_compile_9 instanceof ArrayAccess ? ($__internal_compile_9["icon"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_10 = $context["firstlevel"]) && is_array($__internal_compile_10) || $__internal_compile_10 instanceof ArrayAccess ? ($__internal_compile_10["icon"] ?? null) : null), "html", null, true))) : (print ("")));
                    echo "\"></i>
               <span class=\"menu-label\" style=\"color: #FFF;\">";
                    // line 44
                    echo twig_escape_filter($this->env, (($__internal_compile_11 = $context["firstlevel"]) && is_array($__internal_compile_11) || $__internal_compile_11 instanceof ArrayAccess ? ($__internal_compile_11["title"] ?? null) : null), "html", null, true);
                    echo " </span>
            </a>
            <div class=\"dropdown-menu ";
                    // line 46
                    echo (((($context["firstlevel_active"] ?? null) && (0 !== twig_compare(($context["is_vertical"] ?? null), false)))) ? ("") : ("animate__animated"));
                    echo " ";
                    echo ((($context["is_vertical"] ?? null)) ? ("animate__fadeInLeft") : ("animate__zoomIn"));
                    echo " ";
                    echo ((($context["firstlevel_shown"] ?? null)) ? ("show") : (""));
                    echo "\">
               
               <h6 class=\"dropdown-header\">";
                    // line 48
                    echo twig_escape_filter($this->env, (($__internal_compile_12 = $context["firstlevel"]) && is_array($__internal_compile_12) || $__internal_compile_12 instanceof ArrayAccess ? ($__internal_compile_12["title"] ?? null) : null), "html", null, true);
                    echo " </h6>
               <div class=\"dropdown-menu-columns\">
                  <div class=\"dropdown-menu-column\">
                  ";
                    // line 51
                    $context["has_dashboard"] = twig_get_attribute($this->env, $this->source, $context["firstlevel"], "default_dashboard", [], "array", true, true, false, 51);
                    // line 52
                    echo "                  ";
                    if (($context["has_dashboard"] ?? null)) {
                        // line 53
                        echo "                     <a class=\"dropdown-item\"
                        href=\"";
                        // line 54
                        echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($__internal_compile_13 = $context["firstlevel"]) && is_array($__internal_compile_13) || $__internal_compile_13 instanceof ArrayAccess ? ($__internal_compile_13["default_dashboard"] ?? null) : null)), "html", null, true);
                        echo "\">
                        <i class=\"ti ti-dashboard\"></i>
                        ";
                        // line 56
                        echo twig_escape_filter($this->env, __("Dashboard"), "html", null, true);
                        echo "
                     </a>
                  ";
                    }
                    // line 59
                    echo "                  ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((($__internal_compile_14 = $context["firstlevel"]) && is_array($__internal_compile_14) || $__internal_compile_14 instanceof ArrayAccess ? ($__internal_compile_14["content"] ?? null) : null));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["sublevel"]) {
                        // line 60
                        echo "                     ";
                        if (twig_get_attribute($this->env, $this->source, $context["sublevel"], "page", [], "array", true, true, false, 60)) {
                            // line 61
                            echo "                     <a class=\"dropdown-item ";
                            echo (((0 === twig_compare(($context["menu_active"] ?? null), (($__internal_compile_15 = $context["sublevel"]) && is_array($__internal_compile_15) || $__internal_compile_15 instanceof ArrayAccess ? ($__internal_compile_15["title"] ?? null) : null)))) ? ("active") : (""));
                            echo "\"
                        href=\"";
                            // line 62
                            echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($__internal_compile_16 = $context["sublevel"]) && is_array($__internal_compile_16) || $__internal_compile_16 instanceof ArrayAccess ? ($__internal_compile_16["page"] ?? null) : null)), "html", null, true);
                            echo "\"
                        accesskey=\"";
                            // line 63
                            (((twig_get_attribute($this->env, $this->source, $context["sublevel"], "shortcut", [], "array", true, true, false, 63) &&  !(null === (($__internal_compile_17 = $context["sublevel"]) && is_array($__internal_compile_17) || $__internal_compile_17 instanceof ArrayAccess ? ($__internal_compile_17["shortcut"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_18 = $context["sublevel"]) && is_array($__internal_compile_18) || $__internal_compile_18 instanceof ArrayAccess ? ($__internal_compile_18["shortcut"] ?? null) : null), "html", null, true))) : (print ("")));
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, (($__internal_compile_19 = $context["sublevel"]) && is_array($__internal_compile_19) || $__internal_compile_19 instanceof ArrayAccess ? ($__internal_compile_19["title"] ?? null) : null), "html", null, true);
                            echo "\">
                        <i style=\"color: #FFF;\" class=\"fa-fw ";
                            // line 64
                            (((twig_get_attribute($this->env, $this->source, $context["sublevel"], "icon", [], "array", true, true, false, 64) &&  !(null === (($__internal_compile_20 = $context["sublevel"]) && is_array($__internal_compile_20) || $__internal_compile_20 instanceof ArrayAccess ? ($__internal_compile_20["icon"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_21 = $context["sublevel"]) && is_array($__internal_compile_21) || $__internal_compile_21 instanceof ArrayAccess ? ($__internal_compile_21["icon"] ?? null) : null), "html", null, true))) : (print ("")));
                            echo "\"></i>
                        <span class='efectMenu text-wrap'>
                           ";
                            // line 66
                            echo $this->extensions['Glpi\Application\View\Extension\DataHelpersExtension']->underlineShortcutLetter((($__internal_compile_22 = $context["sublevel"]) && is_array($__internal_compile_22) || $__internal_compile_22 instanceof ArrayAccess ? ($__internal_compile_22["title"] ?? null) : null), (((twig_get_attribute($this->env, $this->source, $context["sublevel"], "shortcut", [], "array", true, true, false, 66) &&  !(null === (($__internal_compile_23 = $context["sublevel"]) && is_array($__internal_compile_23) || $__internal_compile_23 instanceof ArrayAccess ? ($__internal_compile_23["shortcut"] ?? null) : null)))) ? ((($__internal_compile_24 = $context["sublevel"]) && is_array($__internal_compile_24) || $__internal_compile_24 instanceof ArrayAccess ? ($__internal_compile_24["shortcut"] ?? null) : null)) : ("")));
                            echo "
                        </span>
                     </a>
                     ";
                        }
                        // line 70
                        echo "
                     ";
                        // line 71
                        $context["count_per_column"] = 6;
                        // line 72
                        echo "                     ";
                        if (((0 === twig_compare((twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 72) % ($context["count_per_column"] ?? null)), ((($context["has_dashboard"] ?? null)) ? ((($context["count_per_column"] ?? null) - 1)) : (0)))) &&  !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 72))) {
                            // line 73
                            echo "                        </div>
                        <div class=\"dropdown-menu-column\">
                     ";
                        }
                        // line 76
                        echo "                  ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sublevel'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 77
                    echo "                  </div>
               </div>
            </div>
         </li>
      ";
                } elseif ((twig_get_attribute($this->env, $this->source,                 // line 81
$context["firstlevel"], "default", [], "array", true, true, false, 81) && (0 !== twig_compare((((twig_get_attribute($this->env, $this->source, $context["firstlevel"], "display", [], "array", true, true, false, 81) &&  !(null === (($__internal_compile_25 = $context["firstlevel"]) && is_array($__internal_compile_25) || $__internal_compile_25 instanceof ArrayAccess ? ($__internal_compile_25["display"] ?? null) : null)))) ? ((($__internal_compile_26 = $context["firstlevel"]) && is_array($__internal_compile_26) || $__internal_compile_26 instanceof ArrayAccess ? ($__internal_compile_26["display"] ?? null) : null)) : (true)), false)))) {
                    // line 82
                    echo "         <li class=\"nav-item dropdown ";
                    echo ((($context["firstlevel_active"] ?? null)) ? ("active") : (""));
                    echo "\" data-bs-toggle=\"tooltip\"
         title=\"";
                    // line 83
                    echo twig_escape_filter($this->env, (($__internal_compile_27 = $context["firstlevel"]) && is_array($__internal_compile_27) || $__internal_compile_27 instanceof ArrayAccess ? ($__internal_compile_27["title"] ?? null) : null), "html", null, true);
                    echo "\">
            <a class=\"nav-link\" href=\"";
                    // line 84
                    echo twig_escape_filter($this->env, $this->extensions['Glpi\Application\View\Extension\RoutingExtension']->path((($__internal_compile_28 = $context["firstlevel"]) && is_array($__internal_compile_28) || $__internal_compile_28 instanceof ArrayAccess ? ($__internal_compile_28["default"] ?? null) : null)), "html", null, true);
                    echo "\">
               <i class=\"fa-fw ";
                    // line 85
                    (((twig_get_attribute($this->env, $this->source, $context["firstlevel"], "icon", [], "array", true, true, false, 85) &&  !(null === (($__internal_compile_29 = $context["firstlevel"]) && is_array($__internal_compile_29) || $__internal_compile_29 instanceof ArrayAccess ? ($__internal_compile_29["icon"] ?? null) : null)))) ? (print (twig_escape_filter($this->env, (($__internal_compile_30 = $context["firstlevel"]) && is_array($__internal_compile_30) || $__internal_compile_30 instanceof ArrayAccess ? ($__internal_compile_30["icon"] ?? null) : null), "html", null, true))) : (print ("")));
                    echo "\"></i>
               <span class=\"menu-label\">";
                    // line 86
                    echo twig_escape_filter($this->env, (($__internal_compile_31 = $context["firstlevel"]) && is_array($__internal_compile_31) || $__internal_compile_31 instanceof ArrayAccess ? ($__internal_compile_31["title"] ?? null) : null), "html", null, true);
                    echo "</span>
            </a>
         <li>
      ";
                }
                // line 90
                echo "   ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['firstlevel'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "</ul>

";
        // line 94
        if (($context["is_vertical"] ?? null)) {
            // line 95
            echo "<script type=\"text/javascript\">
\$(function() {
   // below, some modifications of dropdowns menu behavior
   document.querySelectorAll('#menu_";
            // line 98
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " > .dropdown').forEach(function(menuDropdown) {
      // prevent menu closes
      menuDropdown.addEventListener('hide.bs.dropdown', function (event) {
         var orig_event = event.clickEvent;
         if (typeof orig_event != \"undefined\"
             && typeof orig_event.target != \"undefined\") {
            // prevent body clicking to hide menu
            if (!document.getElementById('menu_";
            // line 105
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo "').contains(orig_event.target)) {
               event.preventDefault();
               return;
            }

            // prevent menu links to close menu (waiting the page redirection)
            if (orig_event.target.className.indexOf('dropdown-item') !== false) {
               for (var item of document.querySelectorAll('#menu_";
            // line 112
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " .dropdown-item')) {
                  item.classList.remove('active');
               }
               orig_event.target.classList.add('active');
               event.preventDefault();
            }
         }
      });

      // opening a sub menu close others
      menuDropdown.addEventListener('show.bs.dropdown', function (event) {
         \$('#menu_";
            // line 123
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " .nav-link').removeClass('show active');
         \$('#menu_";
            // line 124
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " .nav-item').removeClass('active');
         \$('#menu_";
            // line 125
            echo twig_escape_filter($this->env, ($context["rand"] ?? null), "html", null, true);
            echo " .dropdown-menu').removeClass('show');
      })
   });

});
</script>
";
        }
    }

    public function getTemplateName()
    {
        return "layout/parts/menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 125,  343 => 124,  339 => 123,  325 => 112,  315 => 105,  305 => 98,  300 => 95,  298 => 94,  294 => 92,  287 => 90,  280 => 86,  276 => 85,  272 => 84,  268 => 83,  263 => 82,  261 => 81,  255 => 77,  241 => 76,  236 => 73,  233 => 72,  231 => 71,  228 => 70,  221 => 66,  216 => 64,  210 => 63,  206 => 62,  201 => 61,  198 => 60,  180 => 59,  174 => 56,  169 => 54,  166 => 53,  163 => 52,  161 => 51,  155 => 48,  146 => 46,  141 => 44,  137 => 43,  133 => 42,  126 => 40,  121 => 38,  116 => 37,  113 => 36,  110 => 35,  104 => 34,  101 => 33,  98 => 32,  95 => 31,  90 => 30,  88 => 29,  85 => 28,  83 => 27,  80 => 26,  77 => 25,  74 => 24,  71 => 23,  67 => 22,  64 => 21,  60 => 19,  48 => 9,  46 => 8,  44 => 7,  42 => 6,  40 => 5,  37 => 4,);
    }

    public function getSourceContext()
    {
        return new Source("", "layout/parts/menu.html.twig", "/var/www/html/glpi/templates/layout/parts/menu.html.twig");
    }
}
