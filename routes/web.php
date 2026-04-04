<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.welcome');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.about-me', []);
})->name('ab');

// Route accept 3 parameters (URI, view, data)
Route::view('contact-us', 'pages.contact', [
    "page_name" => "Contact Me Page",
    "page_description" => "<script>This is the contact me page description</script>"
])->name('cc');


Route::get('category/{id}', function ($id) {
    $cat = [
        1 => "Programming",
        2 => "Games",
        3 => "Books"
    ];

    return view('pages.category', [
        "the_id" => $cat[$id] ?? "This id is not found"
    ]);
});