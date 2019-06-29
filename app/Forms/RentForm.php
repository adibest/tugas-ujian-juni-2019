<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Model\Member;
use App\Model\Book;

class RentForm extends Form
{
    public function buildForm()
    {
        $this
        	->add('date', 'date', [
                'attr' => [
                    'data-validation' => 'required',
                ]
            ])
            ->add('member_id', 'select', [
                'choices' => Member::pluck('name', 'id')->toArray(),
                'empty_value' => '- Please Select -',
                'label' => 'Member',
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'select2 form-control',
                ]
            ])
            ->add('book_id', 'select', [
                'choices' => Book::pluck('title', 'id')->toArray(),
                'empty_value' => '- Please Select -',
                'label' => 'Book',
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'select2 form-control',
                ]
            ])
            ->add('set_return', 'text', [
                'attr' => [
                    'data-validation' => 'required',
                ]
            ])
            ->add('return_date', 'date', [
                'attr' => [
                    'data-validation' => 'required',
                ]
            ]);
    }
}
