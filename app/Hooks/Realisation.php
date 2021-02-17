<?php

namespace App\Hooks;

use Themosis\Hook\Hookable;
use Themosis\Support\Facades\PostType;

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
    }
}
