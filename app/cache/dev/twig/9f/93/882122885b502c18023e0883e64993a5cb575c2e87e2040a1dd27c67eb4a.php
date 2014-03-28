<?php

/* ProjetLolSearchBundle:Lieux:rechercherLieux.html.twig */
class __TwigTemplate_9f93882122885b502c18023e0883e64993a5cb575c2e87e2040a1dd27c67eb4a extends Twig_Template
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
        echo "ProjetLolSearchBundle:Lieux:rechercherLieux";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"col-md-3\">
";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom"), 'label');
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom"), 'errors');
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Nom"), 'widget');
        echo "

<div class=\"separeBot\"></div>

<button type=\"submit\" class='btn btn-primary'>Rechercher</button></div>
";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<div class='col-md-6 col-md-offset-1'>
";
        // line 18
        if ((!twig_test_empty((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche"))))) {
            // line 19
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")));
            foreach ($context['_seq'] as $context["_key"] => $context["lieu"]) {
                // line 20
                echo "
\t\t<li>";
                // line 21
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : $this->getContext($context, "lieu")), "nom"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lieu"]) ? $context["lieu"] : $this->getContext($context, "lieu")), "adresse"), "html", null, true);
                echo "</li>

\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lieu'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "\t
";
        }
        // line 25
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ProjetLolSearchBundle:Lieux:rechercherLieux.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 25,  92 => 24,  80 => 21,  77 => 20,  72 => 19,  70 => 18,  65 => 16,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
