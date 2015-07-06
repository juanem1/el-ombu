<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Products;

class Offers extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text', ['label' => 'Titulo'])
            ->add('price', 'text', ['label' => 'Precio'])
            ->add('product_id', 'select', [
                'label' => 'Producto asociado',
                'choices' => Products::lists('title', 'id')
            ])
            ->add('save', 'submit',
                [
                    'wrapper' => ['class' => 'pull-right'],
                    'attr' => ['class' => 'form-control field-input btn btn-primary'],
                    'label' => 'Guardar'
                ]);
    }
}