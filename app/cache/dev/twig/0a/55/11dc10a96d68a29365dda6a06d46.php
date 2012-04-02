<?php

/* CreditUnionFrontendBundle:pages:index.html.twig */
class __TwigTemplate_0a5511dc10a96d68a29365dda6a06d46 extends Twig_Template
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
<h2>Про КС «Рачок» </h2>
<p class=\"text\">
  Кредитна спілка «Рачок» працює на ринку фінансових послуг з 2001 року.
  Це неприбуткова організація, заснована фізичними особами на кооперативних засадах з 
  метою задоволення потреб її  членів у взаємному кредитуванні та наданні фінансових послуг 
  за рахунок об'єднаних грошових внесків членів кредитної спілки.
  Підтримуючи стабільний фінансовий стан, збільшуючи обсяги активів, 
  підвищуючи професійний рівень, вдосконалюючи технології ведення бізнесу, фахівці
  нашої спілки постійно освоюють нові напрямки кредитування, щоб створити найкращі
  умови для всіх членів кредитної спілки «Перспектива».
  Кредитна спілка «Перспектива» пропонує кредити та депозити фізичним особам на вигідних умовах. 
  Для членів нашої спілки запроваджена різноманітна система пільг. Оформити кредит дуже швидко і 
  просто. Всі кредити без першого внеску.
  Наші працівники завжди привітні, вони допоможуть Вам та нададуть всю необхідну інформацію 
  щодо умов кредитування чи депозитування.
</p>
<p class=\"text\">
  Даний сайт розроблений для працівників підпреємства, а саме для менеджерів для полегшеня
  їхньої роботи та зменшеня помилок і затрат часу на координацію дії підприємства.
  По своїй суті вн має ряд переваг перед настільними програмами, а сами це мобільність,
  здатність запустити з любого місця і навіть з портативних пристроїв.
</p>
";
    }

    public function getTemplateName()
    {
        return "CreditUnionFrontendBundle:pages:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
