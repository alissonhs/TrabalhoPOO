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

/* base.html */
class __TwigTemplate_ee84cd125435ca88c5396fbc3d87e24236744d1efd25f29f53e753da47515a02 extends \Twig\Template
{
    private $source;

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
        // line 1
        echo "<!DOCTYPE html>

<html>
\t<head> 
\t\t<title> My App </title> 
\t</head>

\t<body>
\t\t<h1>
\t\t\t";
        // line 10
        if (($context["hello"] ?? null)) {
            // line 11
            echo "\t\t\t\t";
            echo twig_escape_filter($this->env, ($context["hello"] ?? null), "html", null, true);
            echo "
\t\t\t";
        }
        // line 13
        echo "\t\t</h1>
\t</body>

</html>";
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 13,  48 => 11,  46 => 10,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "base.html", "C:\\Users\\Alisson H. Silva\\Documents\\POO II\\Aula-1903-OO\\template\\base.html");
    }
}
