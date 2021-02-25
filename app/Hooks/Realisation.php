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
        ->setTitlePlaceholder('Nom de la realisation')
        ->setArguments([
            'public' => true,
            'has_archive' => true,
            'menu_position' => 20,
            "query_var" => false,
            "rewrite" => true,
            'supports' => ['title', 'editor', 'thumbnail'],
            'menu_icon' => "dashicons-welcome-add-page",
        ])
        ->set();

        Taxonomy::make('technologies', 'realisations', 'Technologies', 'Technologie')->set();

        Metabox::make('properties', 'realisations')
            ->add(Field::text('author'))
            ->add(Field::media('cover'))
            ->add(Field::integer('publication_year'))
            ->set();
    }
}
