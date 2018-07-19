<?php

/* View/Layout/layout.html.twig */
class __TwigTemplate_62976c6cb259e188107e9064dfd80bfdcdf1c195a72b8b53fce41be15d57fd04 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html lang=\"eng\">
<head>
<body>
</body>
";
        // line 6
        $this->displayBlock('content', $context, $blocks);
        // line 8
        echo "

</head>
</html>";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "View/Layout/layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  33 => 8,  31 => 6,  24 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "View/Layout/layout.html.twig", "/var/www/html/WebDev/mvc/src/View/Layout/layout.html.twig");
    }
}
