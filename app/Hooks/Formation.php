<?php

namespace App\Hooks;


use Themosis\Hook\Hookable;
use Themosis\Support\Facades\PostType;
use Themosis\Support\Facades\Field;
use Themosis\Support\Facades\Metabox;

use Themosis\Support\Facades\Taxonomy;
use Themosis\Support\Section;

class Formation extends Hookable
{
    public function register()
    {
        PostType::make('formations', 'Formations', 'Formation')
            ->setTitlePlaceholder('Nom de la réalisation')
            ->setArguments([
                'public' => true,
                'has_archive' => true,
                'menu_position' => 20,
                "query_var" => false,
                "rewrite" => true,
                'supports' => ['title', 'editor'],
                'menu_icon' => "dashicons-welcome-add-page",
            ])
            ->set();

        Metabox::make('properties', 'formations')
            ->add(Field::text('author'))
            ->add(Field::media('cover'))
            ->add(Field::integer('publication_year'))
            ->set();
    }
}
