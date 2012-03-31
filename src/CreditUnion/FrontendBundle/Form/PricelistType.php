<?php

namespace CreditUnion\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PricelistType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('type')
            ->add('nterestrate')
            ->add('forthedate')
            ->add('creditunionid')
        ;
    }

    public function getName()
    {
        return 'creditunion_frontendbundle_pricelisttype';
    }
}
