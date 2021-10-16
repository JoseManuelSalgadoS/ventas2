<?php

namespace App\Form;

use App\Entity\Products;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('productname', TextType::class, [
                'label' => 'Nombre del producto',
                'attr' => [
                    'placeholder' => 'Nombre del producto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('productscale', TextType::class, [
                'label' => 'Escala del producto',
                'attr' => [
                    'placeholder' => 'Escala del producto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('productvendor', TextType::class, [
                'label' => 'Vendedor del producto',
                'attr' => [
                    'placeholder' => 'Vendedor del producto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('productdescription', TextType::class, [
                'label' => 'Descripcion del producto',
                'attr' => [
                    'placeholder' => 'Descripcion del producto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('quantityinstock', NumberType::class, [
                'label' => 'Cantidad en stock',
                'attr' => [
                    'placeholder' => 'Cantidad en stock',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('buyprice', NumberType::class, [
                'label' => 'Precio de Compra',
                'attr' => [
                    'placeholder' => 'Precio de compra',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('msrp', NumberType::class, [
                'label' => 'MSRP',
                'attr' => [
                    'placeholder' => 'MSRP',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            ->add('productline', TextType::class, [
                'label' => 'Linea de producto',
                'attr' => [
                    'placeholder' => 'Linea de producto',
                    'autocomplete' => 'off',
                    'class' => 'form-control',
                    'required' => 'true'
                ]
            ])
            /*->add('ordernumber')*/
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {

    }
}
