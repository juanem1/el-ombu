<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class Products extends Form
{
    public function buildForm()
    {
        $this
            ->add('title', 'text', ['label' => 'Titulo'])
            ->add('subTitle', 'text', ['label' => 'Subtitulo'])
            ->add('shortDescription', 'textarea', ['label' => 'Descripción corta'])
            ->add('longDescription', 'textarea', ['label' => 'Descripción larga'])
            ->add('price', 'text', ['label' => 'Precio'])
            ->add('save', 'submit',
                [
                    'wrapper' => ['class' => 'pull-right'],
                    'attr' => ['class' => 'button button-3d button-rounded button-green'],
                    'label' => 'Guardar'
                ]);
    }
}