<?php

/* /View/list.html.twig */
class __TwigTemplate_9d2efed2691f355574e4f82f2deb443c8c4cb322c9724b8c955c72cc446aadc6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo twig_escape_filter($this->env, ($context["age"] ?? null), "html", null, true);
    }

    public function getTemplateName()
    {
        return "/View/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/View/list.html.twig", "/var/www/html/WebDev/mvc/src/View/list.html.twig");
    }
}
