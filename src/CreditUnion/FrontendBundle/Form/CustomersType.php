<?php

namespace CreditUnion\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class CustomersType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('lastname')
            ->add('name')
            ->add('middlename')
            ->add('seriesofpassport')
            ->add('numberofpassport')
            ->add('dateofbirth')
            ->add('cityofresidence')
            ->add('address')
            ->add('phonenumber')
        ;
    }

    public function getName()
    {
        return 'creditunion_frontendbundle_customerstype';
    }
}
