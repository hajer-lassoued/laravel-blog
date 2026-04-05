<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


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

require __DIR__.'/auth.php';
