<?php

/* ProjetLolSearchBundle:Default:index.html.twig */
class __TwigTemplate_8b27af62d9bf359f3921dc9e7e97241648aef3fc183916f8b1ce6af2551c716d extends Twig_Template
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
<h1> Bienvenue sur le site de LoLSearch ! </h1>


<p> Qu'es ce que LoLSearch ? <br/> 
LoLSearch est une id&eacutee d&eacute;velopp&eacute &agrave la base par Amion Ange-Williams et Gevaudan Yoann dans le projet de fin d'ann&eacutee &agrave pr&eacutesent&eacute au professeur. <br/>
Cette application web est faite dans un premier temps pour tous les joueurs de League of Legends d&eacutesirant trouver des partenaires de jeux ou tout simplement trouv&eacute des 
lieux alliant d&eacutetente et plaisir vid&eacuteoludique tel que le <a href=\"http://www.meltdown-paris.com/\"> Meltdown </a>.</p>

";
    }

    public function getTemplateName()
    {
        return "ProjetLolSearchBundle:Default:index.html.twig";
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
