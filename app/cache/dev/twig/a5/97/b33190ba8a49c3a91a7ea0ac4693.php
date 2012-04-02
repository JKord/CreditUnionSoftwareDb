<?php

/* CreditUnionFrontendBundle:Creditunions:new.html.twig */
class __TwigTemplate_a597b33190ba8a49c3a91a7ea0ac4693 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
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
        echo "Додати нову кредитну спілку";
    }

    // line 4
    public function block_container($context, array $blocks = array())
    {
        echo "   
<h1>Додати нову кредитну спілку</h1>

<form action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Creditunions_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderEnctype($this->getContext($context, "form"));
        echo ">
    ";
        // line 8
        echo $this->env->getExtension('form')->renderWidget($this->getContext($context, "form"));
        echo "
    <p>
        <button type=\"submit\">Створити</button>
    </p>
</form>

<ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("Creditunions"), "html", null, true);
        echo "\">
            Назад до списку
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "CreditUnionFrontendBundle:Creditunions:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
