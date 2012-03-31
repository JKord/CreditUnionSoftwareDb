<?php

namespace CreditUnion\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CreditunionsType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('edrpou')
        ;
    }

    public function getName()
    {
        return 'creditunion_frontendbundle_creditunionstype';
    }
}
