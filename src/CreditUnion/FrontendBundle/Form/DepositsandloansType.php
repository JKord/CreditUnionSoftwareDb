<?php

namespace CreditUnion\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class DepositsandloansType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('sum')
            ->add('date')
            ->add('priceid')
            ->add('customerid')
            ->add('workerid')            
        ;
    }

    public function getName()
    {
        return 'creditunion_frontendbundle_depositsandloanstype';
    }
}
