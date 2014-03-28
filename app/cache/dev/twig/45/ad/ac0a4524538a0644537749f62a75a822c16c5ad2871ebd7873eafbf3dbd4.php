<?php

/* ProjetLolSearchBundle:Event:voirEvent.html.twig */
class __TwigTemplate_45adac0a4524538a0644537749f62a75a822c16c5ad2871ebd7873eafbf3dbd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "ProjetLolSearchBundle:Event:voirEvent";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"table-responsive\">
<table class=\"table\">
<div class='col-md-6 col-md-offset-1'>
\t";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 10
            echo "
\t\t<li>";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "nom"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "adresse"), "html", null, true);
            echo "</li>

\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "\t
</div>
</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "ProjetLolSearchBundle:Event:voirEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 14,  50 => 11,  47 => 10,  43 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
