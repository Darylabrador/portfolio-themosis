<?php

/**
 * Theme routes.
 *
 * The routes defined inside your theme override any similar routes
 * defined on the application global scope.
 */

use App\Http\Controllers\ContactController;

Route::get('/', function(){
    return view('welcome');
})->name('home');


// route for PostType Realisation
Route::get('singular', ['realisations', function ($post, $query) {
    $listTechnos = get_the_terms($post, 'technologies');
    return view('pages.realisation', compact('post', 'listTechnos'));
}]);

Route::get('singular', ['formations', function ($post, $query) {
    return view('pages.formations', compact('post'));
}]);

// Arcade
Route::any('postTypeArchive', ['realisations', function ($post, $query) {
    $dataPost = $query->posts;
    return view('blog.archive', compact('dataPost'));
}]);

Route::any('postTypeArchive', ['formations', function () {
    return view('blog.archive');
}]);


// Taxonomy Routes
Route::any('tax', ['technologies', function ($post, $query) {
    $dataPost = $query->posts;
    return view('pages.technologies', compact('dataPost'));
}]);


// route to qui-suis-je page
Route::get('/qui-suis-je', function () {
    return view('pages.quisuisje');
})->name('quisuisje');


// route to  contact page
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'sendMail']);


// default route
Route::fallback(function() {
    return view('errors.404');
});