<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\frontend\NavbarController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(NavbarController::class)->group(function () {
    Route::get('/', 'HomeMain')->name('home');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//About Page All Route
Route::controller(NavbarController::class)->group(function () {
    Route::get('/contact', 'HomeContact')->name('home.contact');
    Route::get('/about', 'HomeAbout')->name('home.about');
    Route::get('/photo', 'HomePhoto')->name('home.photo');
    Route::get('/project', 'HomeProject')->name('home.project');

});


require __DIR__.'/auth.php';
