<?php

use App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;


Route::get('/', [Frontend::class, 'home']);
Route::get('/about', [Frontend::class, 'about']);
Route::get('/contact', [Frontend::class, 'contact']);
Route::get('/portfolio', [Frontend::class, 'portfolio']);
Route::get('/details', [Frontend::class, 'details']);

Route::get('/myform', [Frontend::class, 'myform']);

Route::post('/form_submit', [Frontend::class, 'form_submit']);

// Route::get('/', [Frontend::class, 'home']);
// Route::get('/', [Frontend::class, 'home']);
// Route::get('/', [Frontend::class, 'home']);
// Route::get('/', [Frontend::class, 'home']);
// Route::get('/', [Frontend::class, 'home']);


