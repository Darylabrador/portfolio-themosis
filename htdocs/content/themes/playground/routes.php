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
    return view('pages.quisuisje', compact('post'));
}]);

// route for PostType Realisation
Route::get('singular', ['realisations', function ($post, $query) {
    $listTechnos = get_the_terms($post, 'technologies');
    return view('pages.realisation', compact('post', 'listTechnos'));
}]);

Route::get('singular', ['formations', function ($post, $query) {
    return view('pages.formations', compact('post'));
}]);

// Arcage
Route::any('postTypeArchive', ['realisations', function () {
    return view('blog.archive');
}]);

Route::any('postTypeArchive', ['formations', function () {
    return view('blog.archive');
}]);

// filtre by Taxonomy


// default route
Route::fallback(function() {
    return view('errors.404');
});