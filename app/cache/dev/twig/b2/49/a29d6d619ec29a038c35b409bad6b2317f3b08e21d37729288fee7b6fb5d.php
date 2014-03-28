<?php

/* ProjetLolSearchBundle:Default:contact.html.twig */
class __TwigTemplate_b249a29d6d619ec29a038c35b409bad6b2317f3b08e21d37729288fee7b6fb5d extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Bienvenue !";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "
<h1> Prendre contact avec nous ! </h1>
<p> Ici vous trouverez de quoi prendre contact avec l'équipe ! <br/> 

";
    }

    public function getTemplateName()
    {
        return "ProjetLolSearchBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 7,  37 => 6,  29 => 4,);
    }
}
