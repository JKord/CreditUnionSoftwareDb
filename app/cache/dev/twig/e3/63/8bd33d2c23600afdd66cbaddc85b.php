<?php

/* CreditUnionFrontendBundle:Welcome:index.html.twig */
class __TwigTemplate_e3638bd33d2c23600afdd66cbaddc85b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CreditUnionFrontendBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome! - Credit Union";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        echo "   
<h1>Welcome</h1>

<ul>
  <li><a href=\"/index.php/Customers/\">Клієнти</a></li>
  <li><a href=\"/index.php/Worker/\">Працівники</a></li>
  <li><a href=\"/index.php/Depositsandloans/\">Вклади та Кредити</a></li>
  <li><a href=\"/index.php/Price/\">Прайс лист</a></li>
  <li><a href=\"/index.php/Creditunions/\">Кредитні спілки</a></li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CreditUnionFrontendBundle:Welcome:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
