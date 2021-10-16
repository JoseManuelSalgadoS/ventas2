<?php

namespace App\Form;

use App\Entity\Payments;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PaymentsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('customernumber', NumberType::class, [
                'label' => 'Numero del cliente',
                'attr' => [
                    'placeholder' => 'Numero del cliente',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('checknumber', TextType::class, [
                'label' => 'Numero de chequeo',
                'attr' => [
                    'placeholder' => 'Numero de chequeo',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('paymentdate', DateType::class, [
                'label' => 'Fecha de pago',
                'attr' => [
                    'placeholder' => 'Fecha de pago',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('amount', NumberType::class, [
                'label' => 'Monto',
                'attr' => [
                    'placeholder' => 'Monto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {

    }
}
