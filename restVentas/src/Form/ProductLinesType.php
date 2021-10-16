<?php

namespace App\Form;

use App\Entity\Productlines;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductLinesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('textdescription', TextType::class, [
                'label' => 'Descripcion en texto',
                'attr' => [
                    'placeholder' => 'Descripcion en texto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'false'
                ]
            ])
            ->add('htmldescription', TextType::class, [
                'label' => 'Descripcion en HTMl',
                'attr' => [
                    'placeholder' => 'Descripcion en HTML',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'false'
                ]
            ])
            ->add('image', TextType::class, [
                'label' => 'Imagen',
                'attr' => [
                    'placeholder' => 'Imagen',
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
