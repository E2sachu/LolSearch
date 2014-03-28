<?php

/* ProjetLolSearchBundle:Profil:showProfil.html.twig */
class __TwigTemplate_aa902e42e91dff4bc3ec17d775b2d38980ee9724f3f62b452a00f8630c6ee8f0 extends Twig_Template
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
        echo "ProjetLolSearchBundle:Profil:showProfil";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pseudo"), "html", null, true);
        echo "'s Profil</h1>
\t
\t";
        // line 8
        echo twig_var_dump($this->env, $context, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"));
        echo "

\t<p>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "pseudo"), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "rang"), "html", null, true);
        echo "</p>
\t<p>Vous recherchez des partenaires pour : </p>
\t";
        // line 12
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "normal3") == true)) {
            // line 13
            echo "\t\t<p>Normal 3x3</p>
\t";
        }
        // line 15
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "normal5") == true)) {
            // line 16
            echo "\t\t<p>Normal 5x5</p>
\t";
        }
        // line 18
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "ranked3") == true)) {
            // line 19
            echo "\t\t<p>Ranked 3x3</p>
\t";
        }
        // line 21
        echo "\t";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "ranked5") == true)) {
            // line 22
            echo "\t\t<p>Ranked 5x5</p>
\t";
        }
        // line 24
        echo "
";
    }

    public function getTemplateName()
    {
        return "ProjetLolSearchBundle:Profil:showProfil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 24,  79 => 22,  76 => 21,  72 => 19,  69 => 18,  65 => 16,  62 => 15,  58 => 13,  56 => 12,  49 => 10,  44 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
