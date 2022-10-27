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

/* core/modules/image/templates/image-rotate-summary.html.twig */
class __TwigTemplate_be14f95e249d3ca3d0078849627995fc0dfe47cb0365a498769831bf79f06c85 extends \Twig\Template
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
        // line 21
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "random", [], "any", false, false, true, 21)) {
            // line 22
            echo "  ";
            $context["degrees"] = abs($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "degrees", [], "any", false, false, true, 22), 22, $this->source));
            // line 23
            echo "  ";
            echo t("random between -@degrees° and @degrees°", array("@degrees" =>             // line 24
($context["degrees"] ?? null), "@degrees" => ($context["degrees"] ?? null), ));
        } else {
            // line 27
            echo "  ";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "degrees", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
            echo "°
";
        }
    }

    public function getTemplateName()
    {
        return "core/modules/image/templates/image-rotate-summary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 27,  46 => 24,  44 => 23,  41 => 22,  39 => 21,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/modules/image/templates/image-rotate-summary.html.twig", "/var/www/html/web/install-dir/web/core/modules/image/templates/image-rotate-summary.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 21, "set" => 22, "trans" => 23);
        static $filters = array("abs" => 22, "escape" => 24);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set', 'trans'],
                ['abs', 'escape'],
                []
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
