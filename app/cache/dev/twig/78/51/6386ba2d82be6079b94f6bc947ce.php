<?php

/* PublilingusPubliBundle:Publi:livre.html.twig */
class __TwigTemplate_78516386ba2d82be6079b94f6bc947ce extends Twig_Template
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
        <h2>";
        // line 13
        echo twig_escape_filter($this->env, $this->getContext($context, 'auteur', '13'), "html");
        echo "</h2>
        ";
        // line 14
        echo twig_escape_filter($this->env, $this->getContext($context, 'edition', '14'), "html");
        echo " - ";
        echo twig_escape_filter($this->env, $this->getContext($context, 'annee', '14'), "html");
        echo "<br>
        <ul>
            <li><a href=\"#histoire\">";
        // line 16
        echo $this->env->getExtension('translator')->getTranslator()->trans("livre.histoire", array(), "messages");
        echo "</a></li>
            <li><a href=\"#pense\">";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("livre.pense", array(), "messages");
        echo "</a></li>
            <li><a href=\"#culte\">";
        // line 18
        echo $this->env->getExtension('translator')->getTranslator()->trans("livre.culte", array(), "messages");
        echo "</a></li>
            <li><a href=\"#bonus\">";
        // line 19
        echo $this->env->getExtension('translator')->getTranslator()->trans("livre.bonus", array(), "messages");
        echo "</a></li>
        </ul>
        <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('templating')->getAssetUrl(("common/images/cover/" . $this->getContext($context, 'image', '21'))), "html");
        echo "\"/>
        <p>
            <a name=\"histoire\"></a>
            <h3>";
        // line 24
        echo $this->env->getExtension('translator')->getTranslator()->trans("livre.histoire", array(), "messages");
        echo "</h3>
            ";
        // line 25
        echo $this->getContext($context, 'histoire', '25');
        echo "
        </p>
        <p>
            <a name=\"pense\"></a>
            <h3>";
        // line 29
        echo $this->env->getExtension('translator')->getTranslator()->trans("livre.pense", array(), "messages");
        echo "</h3>
            ";
        // line 30
        echo $this->getContext($context, 'pense', '30');
        echo "
        </p>
        <p>
            <a name=\"culte\"></a>
            <h3>";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("livre.culte", array(), "messages");
        echo "</h3>
            ";
        // line 35
        echo $this->getContext($context, 'culte', '35');
        echo "
        </p>
        <p>
            <a name=\"bonus\"></a>
            <h3>";
        // line 39
        echo $this->env->getExtension('translator')->getTranslator()->trans("livre.bonus", array(), "messages");
        echo "</h3>
            ";
        // line 40
        echo $this->getContext($context, 'bonus', '40');
        echo "
        </p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "PublilingusPubliBundle:Publi:livre.html.twig";
    }
}
