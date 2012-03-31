<?php

/* CreditUnionFrontendBundle:Default:index.html.twig */
class __TwigTemplate_3ad5f6bdb6d1798373612b87e6ffdd73 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, $this->getContext($context, "name"), "html", null, true);
        echo "!
";
    }

    public function getTemplateName()
    {
        return "CreditUnionFrontendBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
