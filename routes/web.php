<?php
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\http\Controllers\FrontendController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PreparationController;

Route::get('/', [FrontendController::class, 'homePage'])->name('home');
Route::get('/about', [FrontendController::class, 'aboutPage'])->name('about');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('companies', CompanyController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('posts', PostController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('preparations', PreparationController::class);
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';


/*
    slider
    preparation
    service
    about
    contact
    testimonial
    partners
    passers
    blog
*/
