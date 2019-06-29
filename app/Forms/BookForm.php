<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Model\TypeBook;
use App\Model\Author;
use App\Model\Publisher;

class BookForm extends Form
{
    public function buildForm()
    {
        $this
        	->add('ISBN', 'text', [
                'attr' => [
                    'data-validation' => 'required|min:13|max:13',
                ]
            ])
            ->add('title', 'text', [
                'attr' => [
                    'data-validation' => 'required',
                ]
            ])
            ->add('type_book_id', 'select', [
                'choices' => TypeBook::pluck('name', 'id')->toArray(),
                'empty_value' => '- Please Select -',
                'label' => 'TypeBook',
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'select2 form-control',
                ]
            ])
            ->add('author_id', 'select', [
                'choices' => Author::pluck('name', 'id')->toArray(),
                'empty_value' => '- Please Select -',
                'label' => 'Author',
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'select2 form-control',
                ]
            ])
            ->add('publisher_id', 'select', [
                'choices' => Publisher::pluck('name', 'id')->toArray(),
                'empty_value' => '- Please Select -',
                'label' => 'Publisher',
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'select2 form-control',
                ]
            ])
            ->add('amount_total', 'text', [
                'attr' => [
                    'data-validation' => 'required',
                ]
            ])
            ->add('amount_out', 'text', [
                'attr' => [
                    'data-validation' => 'required',
                ]
            ])
            ->add('amount_remain', 'text', [
                'attr' => [
                    'data-validation' => 'required',
                ]
            ]);
    }
}
