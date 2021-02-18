<?php

namespace App\Hooks;


use Themosis\Hook\Hookable;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;

use Themosis\Support\Facades\Taxonomy;
use Themosis\Support\Facades\Page;
use Themosis\Support\Section;

class Realisation extends Hookable
{
    public function register()
    {
        PostType::make('realisations', 'Realisations', 'Realisation')
        ->setTitlePlaceholder('Nom de la réalisation')
        ->setArguments([
            'public' => true,
            'has_archive' => true,
            'menu_position' => 20,
            "query_var" => false,
            "rewrite" => false,
            'supports' => ['title', 'editor'],
            'menu_icon' => "dashicons-welcome-add-page",
        ])
        ->set();

        Taxonomy::make('technologies', 'realisations', 'Technologies', 'Technologie')->set();

        Metabox::make('properties', 'realisations')
            ->add(Field::text('author'))
            ->add(Field::media('cover'))
            ->add(Field::integer('publication_year'))
            ->add(Field::submit("yeah", $options = []))
            ->set();

        $page = Page::make('walcome-page', 'Page accueil')->set();
        $page->addSections([
            new Section('general', 'General')
        ]);
        $page->addSettings([
            'general'=>[
                Field::editor('comment')
            ]
        ]);
    }
}
