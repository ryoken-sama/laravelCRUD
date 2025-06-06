<?php
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\http\Controllers\FrontendController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PreparationController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\BlogController;

Route::get('/', [FrontendController::class, 'homePage'])->name('home');
Route::get('/aboutpage', [FrontendController::class, 'aboutPage'])->name('aboutpage');
Route::get('/blog-details/{id}', [FrontendController::class, 'blogDetails'])->name('frontend.blog-details');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('companies', CompanyController::class);
    Route::resource('employees', EmployeeController::class);
    Route::resource('posts', PostController::class);
    Route::resource('sliders', SliderController::class);
    Route::resource('preparations', PreparationController::class);
    Route::resource('services',ServiceController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('testimonials', TestimonialController::class);
    Route::resource('blogs', BlogController::class);
    Route::patch('/blogs/{id}/toggle-publish', [BlogController::class, 'togglePublish'])->name('blogs.togglePublish');
    Route::post('/blogs/update-order', [BlogController::class, 'updateOrder'])->name('blogs.updateOrder');

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
