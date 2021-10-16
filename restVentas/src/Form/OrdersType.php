<?php

namespace App\Form;

use App\Entity\Orders;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class OrdersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('orderdate', DateType::class, [
                'label' => 'Fecha de la orden',
                'attr' => [
                    'placeholder' => 'Fecha de la orden',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('requireddate', DateType::class, [
                'label' => 'Fecha requerida',
                'attr' => [
                    'placeholder' => 'Fecha requerida',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('shippeddate', DateType::class, [
                'label' => 'Fecha de envio',
                'attr' => [
                    'placeholder' => 'Fecha de envio',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'false'
                ]
            ])
            ->add('status', TextType::class, [
                'label' => 'Estado',
                'attr' => [
                    'placeholder' => 'Estado',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('comments', TextType::class, [
                'label' => 'Comentarios',
                'attr' => [
                    'placeholder' => 'Comentarios',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'false'
                ]
            ])
            ->add('customernumber', NumberType::class, [
                'label' => 'Numero del cliente',
                'attr' => [
                    'placeholder' => 'Numero del cliente',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            /*->add('productcode')*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {

    }
}
