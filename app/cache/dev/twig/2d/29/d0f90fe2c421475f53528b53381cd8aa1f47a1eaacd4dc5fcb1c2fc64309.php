<?php

/* ProjetLolSearchBundle:Joueur:rechercheJoueur.html.twig */
class __TwigTemplate_2d29d0f90fe2c421475f53528b53381cd8aa1f47a1eaacd4dc5fcb1c2fc64309 extends Twig_Template
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
        echo "ProjetLolSearchBundle:Joueur:rechercheJoueur";
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Pseudo"), 'label');
        echo "
";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Pseudo"), 'errors');
        echo "
";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Pseudo"), 'widget');
        echo "

";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Classement"), 'label');
        echo "
";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Classement"), 'errors');
        echo "
";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Classement"), 'widget');
        echo "

<div class=\"separeBot\"></div>

<button type=\"submit\" class='btn btn-primary'>Rechercher</button></div>
";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
<div class='col-md-6 col-md-offset-1'>
";
        // line 22
        if ((!twig_test_empty((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche"))))) {
            // line 23
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recherche"]) ? $context["recherche"] : $this->getContext($context, "recherche")));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 24
                echo "
\t\t<li><a href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lolsearch_fiche", array("id" => $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "id"))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "pseudo"), "html", null, true);
                echo "</a> - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["player"]) ? $context["player"] : $this->getContext($context, "player")), "rang"), "html", null, true);
                echo "</li>

\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['player'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "\t
";
        }
        // line 29
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "ProjetLolSearchBundle:Joueur:rechercheJoueur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 29,  107 => 28,  93 => 25,  90 => 24,  85 => 23,  83 => 22,  78 => 20,  70 => 15,  66 => 14,  62 => 13,  57 => 11,  53 => 10,  49 => 9,  45 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
