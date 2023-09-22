<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Tags;
use App\Models\Esmaabi;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
// */

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    $tags = Tags::paginate(15);
    $esmaabi = Esmaabi::paginate();

    return view('home', [
        'tags' => $tags,
        'esmaabi' => $esmaabi,
    ]);
})->name('home');

Route::get('/juhendid', function () {
    $tags = Tags::paginate(15);
    return view('juhendid', [
        'tags' => $tags,
    ]);
})->name('juhendid');


Route::get('/symptom/{slug}', function ($slug) {

    $tags = Tags::paginate(15);
    $symptom = Esmaabi::find($slug);
    return view('symptom', [
        'tags' => $tags,
        'symptom' => $symptom,
    ]);
})->name('symptom');

Route::get('/numbers', function () {
    return view('numbers');
})->name('numbers');

Route::get('/first-aid/{slug}', function () {
    return view('esmaabi');
})->name('esmaabi');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/download-pdf', 'PdfController@download');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/anxiety', function () {
    $tags = Tags::paginate(15);

    return view('anxiety', [
        'tags' => $tags,
    ]);
})->name('anxiety');

Route::get('/uncertainty', function () {
    $tags = Tags::paginate(15);

    return view('uncertainty', [
        'tags' => $tags,
    ]);
})->name('uncertainty');

Route::get('/stress', function () {
    $tags = Tags::paginate(15);

    return view('stress', [
        'tags' => $tags,
    ]);
})->name('stress');

require __DIR__.'/auth.php';
