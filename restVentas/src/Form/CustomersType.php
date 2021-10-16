<?php

namespace App\Form;

use App\Entity\Customers;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

use Symfony\Component\Form\Extension\Core\Type\TextType;

class CustomersType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('customername', TextType::class, [
                'label' => 'Nombre del Cliente',
                'attr' => [
                    'placeholder' => 'Nombre del Cliente',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('contactlastname', TextType::class, [
                'label' => 'Apellido del contacto',
                'attr' => [
                    'placeholder' => 'Apellido del contacto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('contactfirstname', TextType::class, [
                'label' => 'Nombre del contacto',
                'attr' => [
                    'placeholder' => 'Nombre del contacto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('phone', TextType::class, [
                'label' => 'Telefono del cliente',
                'attr' => [
                    'placeholder' => 'Telefono  del cliente',
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
            ->add('city', TextType::class, [
                'label' => 'Ciudad',
                'attr' => [
                    'placeholder' => 'ciudad',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
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
            ->add('postalcode', TextType::class, [
                'label' => 'Codigo postal',
                'attr' => [
                    'placeholder' => 'Codigo postal',
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
            ->add('creditlimit', TextType::class, [
                'label' => 'Limite de Credito',
                'attr' => [
                    'placeholder' => 'Limite de Credito',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'false'
                ]
            ])
            ->add('')
            ->add('salesrepemployeenumber', NumberType::class, [
                'label' => 'Numero del vendedor',
                'attr' => [
                    'placeholder' => 'Numero del vendedor',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'false'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {

    }
}
