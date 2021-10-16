<?php

namespace App\Form;

use App\Entity\Employees;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EmployeesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastname', TextType::class, [
                'label' => 'Apellido',
                'attr' => [
                    'placeholder' => 'Apellido',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label' => 'Nombre',
                'attr' => [
                    'placeholder' => 'Nombre',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('extension', TextType::class, [
                'label' => 'Extension',
                'attr' => [
                    'placeholder' => 'Extension',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('email', EmailType::class, [
                'label' => 'Correo Electronico',
                'attr' => [
                    'placeholder' => 'Correo Electronico',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('jobtitle', TextType::class, [
                'label' => 'Titulo de Trabajo',
                'attr' => [
                    'placeholder' => 'Titulo de Trabajo',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('reportsto', NumberType::class, [
                'label' => 'Reportarse a..',
                'attr' => [
                    'placeholder' => 'Reportarse a..',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'false'
                ]
            ])
            ->add('officecode', TextType::class, [
                'label' => 'Codigo de Oficina',
                'attr' => [
                    'placeholder' => 'Codigo de Oficina',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
;
    }
}
