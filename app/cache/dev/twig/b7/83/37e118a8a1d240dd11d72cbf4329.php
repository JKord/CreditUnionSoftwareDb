<?php

/* CreditUnionFrontendBundle:pages:contact.html.twig */
class __TwigTemplate_b78337e118a8a1d240dd11d72cbf4329 extends Twig_Template
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
        echo "Зв'язок - Кредитною спілкою";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        echo "   
<h1>Зв'язок</h1>
<ul class=\"listContent\">
  <table style=\"font-size: 28;\" width=\"100%\" cellpadding=\"13\" border=\"0\"  > \t\t    
\t <tr><td colspan=\"3\" align=\"center\"><li>Звоніть</li></td></tr>
\t <tr><th colspan=\"3\" >0003235232</th></tr>
\t <tr><td colspan=\"3\" align=\"center\"><li>Пишіть</li></td></tr>
\t <tr><th colspan=\"3\" >Mail@mail.ua</th></tr>
\t <tr><td colspan=\"3\" align=\"center\"><li>Слідкуйте</li></td></tr>
\t <tr> 
\t\t <th><a href=\"#f\">facebook</a></th>
\t\t <th><a href=\"#v\">vkontakte</a></th>
\t\t <th><a href=\"#t\">twitter</a></th>
\t </tr>
  </table> 
</ul>
";
    }

    public function getTemplateName()
    {
        return "CreditUnionFrontendBundle:pages:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
