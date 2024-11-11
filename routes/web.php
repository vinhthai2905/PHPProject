<?php

use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function(){
//     return view('pages.home');
// });

// Route::get('/about', function(){
//     return view('pages.about');
// });
Auth::routes();

Route::get('/', [PagesController::class, 'IndexPage']);

Route::get('/about', [PagesController::class, 'AboutPage']);

Route::get('/services', [PagesController::class, 'ServicesPage']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
