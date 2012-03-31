<?php

/* CreditUnionFrontendBundle::layout.html.twig */
class __TwigTemplate_7fecd6eb669b9123ed60b67c90a9881c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head' => array($this, 'block_head'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        echo "                   
        <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/blogfrontend/css/style1.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        
        <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('head', $context, $blocks);
        // line 15
        echo "        <div id=\"container\">
           ";
        // line 16
        $this->displayBlock('container', $context, $blocks);
        // line 17
        echo " 
        </div>     
    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome! - Credit nion";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 13
    public function block_head($context, array $blocks = array())
    {
        // line 14
        echo "        ";
    }

    // line 16
    public function block_container($context, array $blocks = array())
    {
        // line 17
        echo "           ";
    }

    public function getTemplateName()
    {
        return "CreditUnionFrontendBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
