<?php

/* PublilingusPubliBundle:Publi:page.html.twig */
class __TwigTemplate_db39cbb15796daccf20b957223bf1446 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'pageTitre' => array($this, 'block_pageTitre'),
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("PublilingusPubliBundle::layout.html.twig");
        }

        return $this->parent;
    }

    public function display(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("homepage.titre", array(), "messages");
        echo " - ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'titre', '3'), "html");
    }

    // line 5
    public function block_pageTitre($context, array $blocks = array())
    {
        // line 6
        echo "    <div>
        <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, 'titre', '7'), "html");
        echo "</h1>
    </div>
";
    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        // line 12
        echo "    <div>
\t<marquee width=\"50%\" scrollAmount=\"10\" direction=\"left\" onmouseover=\"this.scrollAmount=5;\" onmouseout=\"this.scrollAmount=10;\">
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'livres', '14'));
        foreach ($context['_seq'] as $context['_key'] => $context['livre']) {
            // line 15
            echo "                <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'livre', '15'), "url", array(), "any", false, 15), "html");
            echo "\">
                    <h3>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'livre', '16'), "titre", array(), "any", false, 16), "html");
            echo "</h3> <h4>(";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'livre', '16'), "auteur", array(), "any", false, 16), "html");
            echo ")</h4>
                    <img src=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl(("common/images/cover/" . $this->getAttribute($this->getContext($context, 'livre', '17'), "image", array(), "any", false, 17))), "html");
            echo "\"/>
                </a>&nbsp;&nbsp;&nbsp;
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['livre'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 20
        echo "\t</marquee>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PublilingusPubliBundle:Publi:page.html.twig";
    }
}
