<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('index');})->name('home');

Route::get('/services', function () {return view('pages.services');})->name('services');

/* Route::get('/blog', function () {return view('pages.blog');})->name('blog');
 */
Route::get('/contact', function () {return view('pages.contact');})->name('contact');

Route::get('/rendez-vous', function () {return view('pages.rendez-vous');})->name('appointment');

Route::get('/privacy-policy', function () {return view('pages.privacy-policy');})->name('privacy-policy');


/* Route::get('/blog-show', function () {return view('pages.blog-show');})->name('blog.show');
 */

Route::get('/blog', [BlogController::class, 'index'])->name('blog');

Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');


Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');
Route::post('/appointment', [AppointmentController::class, 'send'])->name('appointment.send');


Route::get('/language/{locale}', function (string $locale) {

    abort_unless(
        in_array($locale, ['fr', 'en'], true),
        404
    );

    session(['locale' => $locale]);

    return redirect()->back();

})->name('language.switch');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
