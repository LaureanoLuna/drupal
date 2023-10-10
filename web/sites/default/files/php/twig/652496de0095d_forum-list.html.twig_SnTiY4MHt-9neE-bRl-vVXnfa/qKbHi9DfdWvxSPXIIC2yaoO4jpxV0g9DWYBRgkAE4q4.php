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

/* core/themes/stable9/templates/dataset/forum-list.html.twig */
class __TwigTemplate_1db9313d12bb6454eb6a5ccbd8d5addc extends Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "<table>
  <thead>
    <tr>
      <th>";
        // line 36
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Forum"));
        echo "</th>
      <th>";
        // line 37
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Topics"));
        echo "</th>
      <th>";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Posts"));
        echo "</th>
      <th>";
        // line 39
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last post"));
        echo "</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["forums"] ?? null));
        foreach ($context['_seq'] as $context["child_id"] => $context["forum"]) {
            // line 44
            echo "    <tr>
      <td";
            // line 45
            if ((twig_get_attribute($this->env, $this->source, $context["forum"], "is_container", [], "any", false, false, true, 45) == true)) {
                echo " colspan=\"4\"";
            }
            echo ">
        ";
            // line 51
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 51) > 0)) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 51)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "<div class=\"indent\">";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 52
            echo "          <div title=\"";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "icon_title", [], "any", false, false, true, 52), 52, $this->source), "html", null, true);
            echo "\">
            <span class=\"visually-hidden\">";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "icon_title", [], "any", false, false, true, 53), 53, $this->source), "html", null, true);
            echo "</span>
          </div>
          <div><a href=\"";
            // line 55
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "link", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "label", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
            echo "</a></div>
          ";
            // line 56
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, true, 56), "value", [], "any", false, false, true, 56)) {
                // line 57
                echo "            <div>";
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["forum"], "description", [], "any", false, false, true, 57), "value", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
                echo "</div>
          ";
            }
            // line 59
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 59) > 0)) {
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, twig_get_attribute($this->env, $this->source, $context["forum"], "depth", [], "any", false, false, true, 59)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    echo "</div>";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
            }
            // line 60
            echo "      </td>
      ";
            // line 61
            if ((twig_get_attribute($this->env, $this->source, $context["forum"], "is_container", [], "any", false, false, true, 61) == false)) {
                // line 62
                echo "        <td>
          ";
                // line 63
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "num_topics", [], "any", false, false, true, 63), 63, $this->source), "html", null, true);
                echo "
          ";
                // line 64
                if ((twig_get_attribute($this->env, $this->source, $context["forum"], "new_topics", [], "any", false, false, true, 64) == true)) {
                    // line 65
                    echo "            <br />
            <a href=\"";
                    // line 66
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "new_url", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                    echo "\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "new_text", [], "any", false, false, true, 66), 66, $this->source), "html", null, true);
                    echo "</a>
          ";
                }
                // line 68
                echo "        </td>
        <td>";
                // line 69
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "num_posts", [], "any", false, false, true, 69), 69, $this->source), "html", null, true);
                echo "</td>
        <td>";
                // line 70
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["forum"], "last_reply", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
                echo "</td>
      ";
            }
            // line 72
            echo "    </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['child_id'], $context['forum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "  </tbody>
</table>
";
    }

    public function getTemplateName()
    {
        return "core/themes/stable9/templates/dataset/forum-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 74,  160 => 72,  155 => 70,  151 => 69,  148 => 68,  141 => 66,  138 => 65,  136 => 64,  132 => 63,  129 => 62,  127 => 61,  124 => 60,  112 => 59,  106 => 57,  104 => 56,  98 => 55,  93 => 53,  88 => 52,  76 => 51,  70 => 45,  67 => 44,  63 => 43,  56 => 39,  52 => 38,  48 => 37,  44 => 36,  39 => 33,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/stable9/templates/dataset/forum-list.html.twig", "C:\\xampp\\htdocs\\drupal\\web\\core\\themes\\stable9\\templates\\dataset\\forum-list.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 43, "if" => 45);
        static $filters = array("t" => 36, "escape" => 52);
        static $functions = array("range" => 51);

        try {
            $this->sandbox->checkSecurity(
                ['for', 'if'],
                ['t', 'escape'],
                ['range']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
