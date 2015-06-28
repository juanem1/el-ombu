<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class Galleries extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text', ['label' => 'Titulo'])
            ->add('description', 'textarea')
            ->add('save', 'submit',
                [
                    'wrapper' => ['class' => 'pull-right'],
                    'attr' => ['class' => 'form-control field-input btn btn-primary'],
                    'label' => 'Guardar'
                ]);
    }
}