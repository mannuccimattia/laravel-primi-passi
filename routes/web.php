<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $name = "Laravel";
    $claim = "The framework for PHP web artisans";
    $version = "12.x";

    return view('home', compact("name", "claim", "version"));
})->name("home");

Route::get('/about', function () {

    $description = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit quam eos earum debitis iure deserunt asperiores repellendus et culpa vel. ";

    return view('about', compact("description"));
})->name("about");

Route::get('/contacts', function () {

    $docs = "https://laravel.com/docs/12.x";
    $laracasts = "https://laracasts.com";

    return view('contacts', compact("docs", "laracasts"));
})->name("contacts");
