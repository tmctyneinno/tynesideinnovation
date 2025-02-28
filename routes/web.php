<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\PagesController;
use App\Http\Controllers\Admin\BlogController;


require __DIR__.'/admin.php';

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/{page}', [PagesController::class, 'index'])->name('home.pages');
Route::get('blog/{id}/details', [BlogController::class, 'details'])->name('blog.details');

Auth::routes();
 
// Route::get('/home', [HomeController::class, 'index'])->name('home');
