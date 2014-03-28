<?php

/* ProjetLolSearchBundle:Event:rechercherEvent.html.twig */
class __TwigTemplate_3f37eb1201957ef5b65b7a6fb6902e655b28f367c5b5ed7a064de4e14998a57d extends Twig_Template
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
        echo "ProjetLolSearchBundle:Event:rechercherEvent";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"col-md-3\">
";
        // line 8
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom"), 'label');
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom"), 'errors');
        echo "
";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom"), 'widget');
        echo "

<div class=\"separeBot\"></div>

<button type=\"submit\" class='btn btn-primary'>Rechercher</button></div>
";
        // line 17
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<div class='col-md-6 col-md-offset-1'>
";
        // line 19
        if ((!twig_test_empty((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche"))))) {
            // line 20
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")));
            foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
                // line 21
                echo "
\t\t<li>";
                // line 22
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
            // line 25
            echo "\t
";
        }
        // line 26
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ProjetLolSearchBundle:Event:rechercherEvent.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 26,  93 => 25,  81 => 22,  78 => 21,  73 => 20,  71 => 19,  66 => 17,  58 => 12,  54 => 11,  50 => 10,  46 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
