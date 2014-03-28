<?php

/* ::base.html.twig */
class __TwigTemplate_b26f29601b8e495051c08aa76ee2e9e89e28c2bf6a1b0336a993446f6dfd2445 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'user_block' => array($this, 'block_user_block'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"shortcut icon\" href=\"../../assets/ico/favicon.ico\">

     <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
\t\t<a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("lolsearch_home");
        echo "\"> <img class=\"logo\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projetlolsearch/images/lols1.png"), "html", null, true);
        echo "\" /> </a>
     <link rel=\"stylesheet\" href=\"//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css\">
    <script src=\"//code.jquery.com/jquery-1.9.1.js\"></script>
    <script src=\"//code.jquery.com/ui/1.10.4/jquery-ui.js\"></script>
    
    <!-- Bootstrap core CSS -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Custom styles for this template -->
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/navbar.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src=\"../../assets/js/ie8-responsive-file-warning.js\"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
      <script src=\"https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>

  <body>
    <div class=\"container\">
      <!-- Static navbar -->
      <div class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container-fluid\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            
          </div>
          <div class=\"navbar-collapse collapse\">
            <ul class=\"nav navbar-nav\">
             \t<li ><a href=\"";
        // line 51
        echo $this->env->getExtension('routing')->getPath("lolsearch_home");
        echo "\">Accueil</a></li>
\t\t\t\t<li><a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("lolsearch_recherche");
        echo "\">Rechercher un Joueur</a></li>
        <li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Lieux <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("lolsearch_ajouterLieux");
        echo "\">Ajouter un lieu</a></li>
            <li><a href=\"";
        // line 57
        echo $this->env->getExtension('routing')->getPath("lolsearch_rechercherLieux");
        echo "\"> Rechercher un lieu</a></li>
          </ul>
        </li>
\t\t\t\t
\t\t\t\t";
        // line 61
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
        } else {
            echo "<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("lolsearch_inscription");
            echo "\">Inscription</a></li>";
        }
        // line 62
        echo "\t\t\t\t<li class=\"dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Evenement <b class=\"caret\"></b></a>
          <ul class=\"dropdown-menu\">
            <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("lolsearch_ajouterEvent");
        echo "\">Ajouter un evenement</a></li>
            <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("lolsearch_rechercherEvent");
        echo "\"> Rechercher un evenement</a></li>
            <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("lolsearch_voirEvent");
        echo "\"> Liste des evenements</a></li>
          </ul>
        </li>
\t\t\t\t<li><a href=\"#\">FAQ</a></li>
\t\t\t\t<li ><a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("lolsearch_contact");
        echo "\">Nous Contacter</a></li>
\t\t\t\t

            </ul>
            
           

            <ul class=\"nav navbar-nav navbar-right\">
            \t";
        // line 79
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
        } else {
            echo "<li class=\"dropdown\">
\t\t\t          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Connexion <b class=\"caret\"></b></a>
\t\t\t          <ul class=\"dropdown-menu\">
\t\t\t            
                             <form action=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("login_check");
            echo "\" method=\"post\">
                                 <label>Login</label>
                                 <input id=\"username\" type=\"text\" name=\"_username\" placeholder= \"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Username"), "html", null, true);
            echo "\" autofocus />
                                 <label>Password</label>
                                 <input id=\"password\" type=\"password\" name=\"_password\"  placeholder = \"";
            // line 87
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Password"), "html", null, true);
            echo "\" />
                                
                                 <button type=\"submit\">Sign in</button>
                        </form>
                        
\t\t\t          </ul>
\t\t\t        </li>";
        }
        // line 94
        echo "             \t";
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user")) {
            // line 95
            echo "             \t<li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("lolsearch_profil");
            echo "\">Mon Profil</a></li>
             \t<li>";
            // line 96
            $this->displayBlock('user_block', $context, $blocks);
            echo "</li> ";
        }
        // line 97
        echo "            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

      <!-- Main component for a primary marketing message or call to action -->
      
      ";
        // line 104
        $this->displayBlock('body', $context, $blocks);
        // line 105
        echo "    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js\"></script>
    <script src=\"";
        // line 111
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
  </body>
  <footer></footer>
</html>
";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo " LolSearch";
    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/projetlolsearch/css/menu.css"), "html", null, true);
        echo "\" />";
    }

    // line 96
    public function block_user_block($context, array $blocks = array())
    {
        echo "<a class=\"btn btn-default btn-xs pull-right\" href=\"";
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logout"), "html", null, true);
        echo "</a>";
    }

    // line 104
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 104,  234 => 96,  226 => 23,  220 => 11,  211 => 111,  203 => 105,  201 => 104,  192 => 97,  188 => 96,  183 => 95,  180 => 94,  170 => 87,  165 => 85,  160 => 83,  152 => 79,  141 => 71,  134 => 67,  130 => 66,  126 => 65,  121 => 62,  114 => 61,  107 => 57,  103 => 56,  96 => 52,  92 => 51,  63 => 24,  61 => 23,  57 => 22,  51 => 19,  40 => 13,  35 => 11,  23 => 1,);
    }
}
