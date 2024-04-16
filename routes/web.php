<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MainController::class, 'index']);
Route::get('/about-us', [\App\Http\Controllers\MainController::class, 'aboutUs']);
Route::get('/catalog', [\App\Http\Controllers\MainController::class, 'catalog']);
Route::get('/little-forms', [\App\Http\Controllers\MainController::class, 'littleForms']);
Route::get('/our-objects', [\App\Http\Controllers\MainController::class, 'ourObjects']);
Route::get('/credits', [\App\Http\Controllers\MainController::class, 'credits']);
Route::get('/invest', [\App\Http\Controllers\MainController::class, 'invest']);
Route::get('/services', [\App\Http\Controllers\MainController::class, 'services']);



Route::get('/admin-panel', [\App\Http\Controllers\AdminControllers::class, 'adminPanel']);
Route::get('/admin-panel/houses', [\App\Http\Controllers\AdminControllers::class, 'adminPanelHouses']);
Route::get('/admin-panel/serves', [\App\Http\Controllers\AdminControllers::class, 'adminPanelServes']);
