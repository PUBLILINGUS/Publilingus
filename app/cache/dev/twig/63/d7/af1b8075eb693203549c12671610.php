<?php

/* PublilingusPubliBundle:Publi:index.html.twig */
class __TwigTemplate_63d7af1b8075eb693203549c12671610 extends Twig_Template
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
    }

    // line 5
    public function block_pageTitre($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("homepage.soustitre", array(), "messages");
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <div>
        <h3>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("homepage.index.titre1", array(), "messages");
        echo "</h3>
        <p>
            ";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("homepage.index.texte1", array(), "messages");
        // line 12
        echo "        </p>
    </div>
    <div>
        <h3>";
        // line 15
        echo $this->env->getExtension('translator')->getTranslator()->trans("homepage.index.titre2", array(), "messages");
        echo "</h3>
        <p>
            ";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("homepage.index.texte2", array(), "messages");
        // line 18
        echo "        </p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PublilingusPubliBundle:Publi:index.html.twig";
    }
}
