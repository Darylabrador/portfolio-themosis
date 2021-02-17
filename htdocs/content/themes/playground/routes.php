<?php

/**
 * Theme routes.
 *
 * The routes defined inside your theme override any similar routes
 * defined on the application global scope.
 */

Route::get('/', function(){
    return view('welcome');
})->name('home');

// route for template qui-suis-je
Route::any('template', ['qui-suis-je', function ($post, $query) {
    // var_dump($post);
    return view('pages.quisuisje', compact('post'));
}]);

// default route
Route::fallback(function() {
    return view('errors.404');
});