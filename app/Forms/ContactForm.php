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
            ]
        ])
        ->add($fields->text('identite', [
            'rules' => 'required',
            'label' => 'Qui êtes vous ?',
            'attributes' => [
                'class' => 'shadow-sm mb-4 mt-2 focus:ring-gray-500 focus:border-gray-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md',
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
                'class' => 'shadow-sm mb-4 mt-2 focus:ring-gray-500 focus:border-gray-500 mt-1 block w-full sm:text-sm border-gray-300 rounded-md',
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
                'class' => 'shadow-sm mb-4 mt-2 focus:ring-gray-500 focus:border-gray-500 block w-full sm:text-sm border-gray-300 rounded-md',
                'required'
            ],
            'messages' => [
                'required' => 'Le champ :attribute est requis'
            ],

        ]))
        ->add($fields->submit('send', [
            'mapped' => false,
            'label' => 'Envoyer',
            'attributes' => [
                "class" => "py-2 px-4 mt-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2",
                "style" => "float: right; padding: 5px 35px; cursor: pointer;"
            ]
        ]))
        ->get();
    }
}
