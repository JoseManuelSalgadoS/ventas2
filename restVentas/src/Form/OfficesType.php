<?php

namespace App\Form;

use App\Entity\Offices;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class OfficesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('city', TextType::class, [
                'label' => 'Ciudad',
                'attr' => [
                    'placeholder' => 'Ciudad',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'Telefono',
                'attr' => [
                    'placeholder' => 'Telefono',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('addressline1', TextType::class, [
                'label' => 'Direccion Linea 1',
                'attr' => [
                    'placeholder' => 'Direccion Linea 1',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('addressline2', TextType::class, [
                'label' => 'Direccion Linea 2',
                'attr' => [
                    'placeholder' => 'Direccion Linea 2',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'false'
                ]
            ])
            ->add('state', TextType::class, [
                'label' => 'Estado',
                'attr' => [
                    'placeholder' => 'Estado',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'false'
                ]
            ])
            ->add('country', TextType::class, [
                'label' => 'Pais',
                'attr' => [
                    'placeholder' => 'Pais',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('postalcode', TextType::class, [
                'label' => 'Codigo postal',
                'attr' => [
                    'placeholder' => 'Codigo postal',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('territory', TextType::class, [
                'label' => 'Territorio',
                'attr' => [
                    'placeholder' => 'Territorio',
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
