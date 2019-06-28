<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class AuthorForm extends Form
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
