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
        echo "<h1>Tablica</h1>
<ul>
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["age"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 4
            echo "    <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", array()), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "name", array()), "html", null, true);
            echo "| ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "author", array()), "html", null, true);
            echo "</li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</ul>
";
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
        return array (  44 => 6,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/View/list.html.twig", "/var/www/html/WebDev/mvc/src/View/list.html.twig");
    }
}
