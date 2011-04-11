<?php

/* PublilingusAdminBundle::layout.html.twig */
class __TwigTemplate_57f2e0b0f417a47db3a73d95e0caea27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'pageTitre' => array($this, 'block_pageTitre'),
            'content' => array($this, 'block_content'),
        );
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"fr\" lang=\"fr\" dir=\"ltr\" >
    <head>
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=EmulateIE7\" />
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <meta name=\"robots\" content=\"index, follow, all\" />
        <meta name=\"Author\" content=\"Marion\" />
        <meta name=\"Language\" content=\"fr\"/>
        <meta name=\"Copyright\" content=\"";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("homepage.titre", array(), "messages");
        echo "\" />
        <meta name=\"Publisher\" content=\"Marion\" />
        <meta name=\"Description\" content=\"\" />
        <meta name=\"Keywords\" content=\"\" />

        <title>";
        // line 14
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 16
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        
        ";
        // line 19
        $this->displayBlock('javascripts', $context, $blocks);
        // line 21
        echo "
    </head>

    <body>
      <div>
          <div  class=\"container\" >
              <div id=\"header\">
                  <a href=\"http://publilingus.no-ip.org/\" id=\"logo\"><img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("bundles/publilinguspubli/images/logo.png"), "html");
        echo "\" alt=\"Logo Publilingus\" title=\"Publilingus\" /></a>
                  <div id=\"menu\">
                        ";
        // line 30
        echo $this->getContext($context, 'menu', '30');
        echo "
                  </div>
              </div>
          </div>
      </div> <!-- container end -->

      <div id=\"backWarper\"></div>
      
        ";
        // line 38
        $this->displayBlock('pageTitre', $context, $blocks);
        // line 39
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 40
        echo "        ";
        $template = "PublilingusPubliBundle:Publi:footer.html.twig";
        if ($template instanceof Twig_Template) {
            $template->display($context);
        } else {
            echo $this->env->getExtension('templating')->getTemplating()->render($template, $context);
        }
        // line 41
        echo "
        <script type=\"text/javascript\">
          head.js(
            \"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("common/js/jquery-1.4.4.min.js"), "html");
        echo "\", 
            \"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl("common/js/jquery.easing.1.3.js"), "html");
        echo "\"
          );
        </script>
        
    </body>
</html>";
    }

    // line 14
    public function block_title($context, array $blocks = array())
    {
    }

    // line 16
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 17
        echo "        ";
    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        // line 20
        echo "        ";
    }

    // line 38
    public function block_pageTitre($context, array $blocks = array())
    {
        echo " ";
    }

    // line 39
    public function block_content($context, array $blocks = array())
    {
        echo " ";
    }

    public function getTemplateName()
    {
        return "PublilingusAdminBundle::layout.html.twig";
    }
}
