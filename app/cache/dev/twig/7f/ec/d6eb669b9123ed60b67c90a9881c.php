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
            'content' => array($this, 'block_content'),
            'containerFother' => array($this, 'block_containerFother'),
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/creditunionfrontend/css/style1.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/creditunionfrontend/css//css3menu1/menu1.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        
        <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 14
        $this->displayBlock('head', $context, $blocks);
        // line 16
        echo "        <div id=\"container\">
           <div id=\"head\">           
             <ul id=\"css3menu1\" class=\"topmenu\" style=\"margin-left: 450px; margin-top: 40px;\">
\t\t\t    <li class=\"topfirst\"><a href=\"/index.php\">Головна</a></li>
\t\t\t\t<li class=\"topmenu\"><a href=\"#\"><span>Item 1</span></a>
\t\t    \t   <ul>
\t\t\t\t\t  <li><a href=\"#\">Item 1 0</a></li>
\t\t\t\t\t  <li><a href=\"#\">Item 1 1</a></li>
\t\t\t\t\t  <li><a href=\"#\">Item 1 2</a></li>
\t\t\t\t   </ul>
\t\t\t\t</li>
\t\t\t\t<li class=\"toplast\"><a href=\"/index.php/contact\">Зв'язок</a></li>
\t\t\t </ul>           
           </div>
           <div id=\"left_col\">
             <h3>Інформація про:</h3>
             <ul>
               <li><a href=\"/index.php/Customers/\">Клієнти</a></li>
               <li><a href=\"/index.php/Worker/\">Працівники</a></li>
               <li><a href=\"/index.php/Depositsandloans/\">Вклади та Кредити</a></li>
               <li><a href=\"/index.php/Price/\">Прайс лист</a></li>
               <li><a href=\"/index.php/Creditunions/\">Кредитні спілки</a></li>
             </ul> 
             <h3>Операції:</h3>
             <ul>
               <li><a href=\"#\">ап</a></li>
               <li><a href=\"#\">па</a></li>              
             </ul> 
           </div>  
           <div id=\"content\">
              ";
        // line 46
        $this->displayBlock('content', $context, $blocks);
        // line 47
        echo " 
           </div>  
           ";
        // line 49
        $this->displayBlock('containerFother', $context, $blocks);
        // line 50
        echo " 
           <div id=\"footer\">
               Сайт Кредитна спілка для дипломної роботи © 2012р. Всі права захищені.
           </div>
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

    // line 14
    public function block_head($context, array $blocks = array())
    {
        // line 15
        echo "        ";
    }

    // line 46
    public function block_content($context, array $blocks = array())
    {
        // line 47
        echo "              ";
    }

    // line 49
    public function block_containerFother($context, array $blocks = array())
    {
        // line 50
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
