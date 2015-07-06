<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Gallery;

class Complex extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text', ['label' => 'Titulo'])
            ->add('description', 'textarea', ['label' => 'Descripción'])
            ->add('price', 'text', ['label' => 'Precio'])
            ->add('gallery_id', 'select', [
                'label' => 'Galeria Asociada',
                'choices' => Gallery::lists('title', 'id')
            ])
            ->add('save', 'submit',
                [
                    'wrapper' => ['class' => 'pull-right'],
                    'attr' => ['class' => 'form-control field-input btn btn-primary'],
                    'label' => 'Guardar'
                ]);
    }
}