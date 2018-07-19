<?php

/* /View/list.html.twig */
class __TwigTemplate_9d2efed2691f355574e4f82f2deb443c8c4cb322c9724b8c955c72cc446aadc6 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("View/Layout/layout.html.twig", "/View/list.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "View/Layout/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Tablica</h1>
<ul>
";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["age"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["book"]) {
            // line 7
            echo "    <li>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "id", array()), "html", null, true);
            echo "|";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "name", array()), "html", null, true);
            echo "| ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["book"], "author", array()), "html", null, true);
            echo "</li>
    <li><a href=\"";
            // line 8
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('generateUrl')->getCallable(), array("deleteId", array("id" => twig_get_attribute($this->env, $this->source, $context["book"], "id", array())))), "html", null, true);
            echo "\">Usun</a></li>

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['book'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
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
        return array (  61 => 11,  52 => 8,  43 => 7,  39 => 6,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "/View/list.html.twig", "/var/www/html/WebDev/mvc/src/View/list.html.twig");
    }
}
