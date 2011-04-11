<?php

/* PublilingusAdminBundle:Admin:index.html.twig */
class __TwigTemplate_9050a42344ffcfe477d3edfc486bda16 extends Twig_Template
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
            $this->parent = $this->env->loadTemplate("PublilingusAdminBundle::layout.html.twig");
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
        echo " - Admin";
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
        
    </div>
";
    }

    public function getTemplateName()
    {
        return "PublilingusAdminBundle:Admin:index.html.twig";
    }
}
