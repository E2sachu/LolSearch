<?php

/* ProjetLolSearchBundle:Joueur:fiche.html.twig */
class __TwigTemplate_11e6d0d9a180d0da4891f51add7adb197e50502dd8e4ac0459ba0f31274c354f extends Twig_Template
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
        echo "ProjetLolSearchBundle:Joueur:ficheJoueur";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "
<div class='col-md-2 col-md-offset-5 table-responsive'>
\t<table class =\"table table-bordered\">
\t<thead>
\t<tr>
\t<th> pseudo </th>
\t<th> rang </th>
\t</tr>
\t</thead>
\t<tbody>
\t<tr>
\t<td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheJoueur"]) ? $context["ficheJoueur"] : $this->getContext($context, "ficheJoueur")), "pseudo"), "html", null, true);
        echo "</td>
\t<td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ficheJoueur"]) ? $context["ficheJoueur"] : $this->getContext($context, "ficheJoueur")), "rang"), "html", null, true);
        echo "</td>
\t</tr>
\t</tbody>
\t</table>
</div>
";
    }

    public function getTemplateName()
    {
        return "ProjetLolSearchBundle:Joueur:fiche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 18,  51 => 17,  38 => 6,  35 => 5,  29 => 3,);
    }
}
