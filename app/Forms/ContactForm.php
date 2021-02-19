<?php

namespace App\Forms;

use Themosis\Field\Contracts\FieldFactoryInterface;
use Themosis\Forms\Contracts\FormFactoryInterface;
use Themosis\Forms\Contracts\Formidable;
use Themosis\Forms\Contracts\FormInterface;
use illuminate\validation;

class ContactForm implements Formidable
{
    /**
     * Build your form.
     *
     * @param FormFactoryInterface  $factory
     * @param FieldFactoryInterface $fields
     *
     * @return FormInterface
     */
    public function build(FormFactoryInterface $factory, FieldFactoryInterface $fields): FormInterface
    {
        return $factory->make(null, [
            'flush' => false,
            'attributes' => [
                'id'    => 'contact-form',
                'class' => 'form-control'
            ]
        ])
        ->add($fields->text('identite', [
            'rules' => 'required',
            'label' => 'Qui êtes vous ?',
            'attributes' => [
                'class' => 'custom-demo',
                'required'
            ],
            'messages' => [
                'required' => 'Le champ :attribute est requis.'
            ],
        ]))
        ->add($fields->email('email', [
            'rules' => 'required|email',
            'label' => 'Votre adresse email',
            'attributes' => [
                'class' => 'custom-demo',
                'required'
            ],
            'messages' => [
                'required' => 'Le champ :attribute est requis',
                'email' => ':attribute est invalide.'
            ],
        ]))
        ->add($fields->textarea('message', [
            'rules' => 'required',
            'label' => 'Que voulez-vous me dire ?',
            'attributes' => [
                'class' => 'custom-demo',
                'required'
            ],
            'messages' => [
                'required' => 'Le champ :attribute est requis'
            ],

        ]))
        ->add($fields->submit('send', [
            'mapped' => false,
            'label' => 'Contacter',
        ]))
        ->get();
    }
}
