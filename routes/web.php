

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FileController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ServiceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/
Route::get('/',[FrontendController::class, 'index'])->name('index');
Route::get('about',[FrontendController::class, 'about'])->name('about');
Route::get('services',[FrontendController::class, 'services'])->name('services');
Route::get('gallery',[FrontendController::class, 'gallery'])->name('gallery');
Route::get('blog',[FrontendController::class, 'blog'])->name('blog');
Route::get('contact',[FrontendController::class, 'contact'])->name('contact');
Route::get('dashboard', [AuthController::class, 'dashboard']);
Route::get('login', [AuthController::class, 'index'])->name('login');
Route::post('custom-login', [AuthController::class, 'customLogin'])->name('login.custom');
Route::post('custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom');
Route::resource('category',CategoryController::class);
Route::resource('file',FileController::class);
Route::resource('banner',BannerController::class);
Route::resource('team',TeamController::class);
Route::resource('main',MainController::class);
Route::resource('service',ServiceController::class);
Route::get('/contact-form', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact-form');
Route::get('/contactView', [App\Http\Controllers\ContactController::class, 'ContactView'])->name('Contact');
Route::post('contactform', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contactform');
Route::get('registration', [AuthController::class, 'registration'])->name('register-user');
Route::get('signout', [AuthController::class, 'signOut'])->name('signout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
