<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class TypeBookForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
                'attr' => [
                    'data-validation' => 'required',
                ]
            ]);
    }
}
