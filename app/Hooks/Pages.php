<?php

namespace App\Hooks;


use Themosis\Hook\Hookable;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;

use Themosis\Support\Facades\Taxonomy;
use Themosis\Support\Facades\Page;
use Themosis\Support\Section;

class Pages extends Hookable
{
    public function register()
    {
        // Page d'accueil
        $accueil = Page::make('welcome-page', 'Accueil')->set();
        $accueil->addSections([
            new Section('general', 'General')
        ]);
        $accueil->addSettings([
            'general' => [
                Field::text('welcomemessage'),
                Field::editor('welcomecontent')
            ]
        ]);


        // Page qui suis je ?
        $quisuisje = Page::make('quisuisje', 'Qui suis je ?')->set();
        $quisuisje->addSections([
            new Section('presentation', 'Presentation'),
        ]);
        $quisuisje->addSettings([
            'presentation' => [
                Field::text('whotitle'),
                Field::editor('presentation')
            ]
        ]);


        // Page de contact
        $contact = Page::make('contact', 'Contact')->set();
        $contact->addSections([
            new Section('contact', 'Contact'),
        ]);
        $contact->addSettings([
            'contact' => [
                Field::text('contactmessage'),
            ],
        ]);
    }
}
