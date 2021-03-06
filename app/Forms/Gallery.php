<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class Gallery extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text', ['label' => 'Titulo'])
            ->add('description', 'textarea')
            ->add('save', 'submit',
                [
                    'wrapper' => ['class' => 'pull-right'],
                    'attr' => ['class' => 'button button-3d button-rounded button-green'],
                    'label' => 'Guardar'
                ]);
    }
}