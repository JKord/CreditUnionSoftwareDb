<?php

namespace CreditUnion\FrontendBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class WorkerType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('lastname')
            ->add('name')
            ->add('middlename')
            ->add('specialty')
        ;
    }

    public function getName()
    {
        return 'creditunion_frontendbundle_workertype';
    }
}
