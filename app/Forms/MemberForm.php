<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;
use App\Model\TypeMember;

class MemberForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('type_member_id', 'select', [
                'choices' => TypeMember::pluck('name', 'id')->toArray(),
                'empty_value' => '- Please Select -',
                'label' => 'TypeMember',
                'attr' => [
                    'data-validation' => 'required',
                    'class' => 'select2 form-control',
                ]
            ])
            ->add('name', 'text', [
                'attr' => [
                    'data-validation' => 'required',
                ]
            ])
            ->add('address', 'text', [
                'attr' => [
                    'data-validation' => 'required',
                ]
            ])
            ->add('phone', 'text', [
                'attr' => [
                    'data-validation' => 'required',
                ]
            ]);
    }
}
