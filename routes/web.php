<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Admin\BlogController;
use Illuminate\Support\Facades\Auth;


require __DIR__.'/admin.php';

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/{page}', [PagesController::class, 'index'])->name('home.pages');
Route::get('blog/{id}/details', [PagesController::class, 'details'])->name('blog.details');

Route::post('/contactus/request', [PagesController::class, 'Store'])->name('contact-email');
Route::get('/sitemap', [PagesController::class, 'SiteMap'])->name('site.map');
Auth::routes();
 
// Route::get('/home', [HomeController::class, 'index'])->name('home');
