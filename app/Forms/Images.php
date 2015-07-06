<?php namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Gallery;

class Images extends Form
{
    public function buildForm()
    {
        $this
            ->add('gallery_id', 'select', [
                'label' => 'Galeria',
                'choices' => Gallery::lists('title', 'id')
            ])
            ->add('name', 'file', ['label' => 'Imagen'])
            ->add('save', 'submit', [
                'wrapper' => ['class' => 'pull-right'],
                'attr' => ['class' => 'button button-3d button-rounded button-green'],
                'label' => 'Guardar'
            ]);
    }
}