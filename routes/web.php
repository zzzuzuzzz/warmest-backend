<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => '/admin'], function () {
    Route::get('/', \App\Http\Controllers\Admin\AdminIndexController::class)->name('admin.main.index');

    Route::group(['prefix' => '/admin/categories'], function () {
        Route::get('/', \App\Http\Controllers\Category\IndexController::class)->name('category.index');
        Route::get('/create', \App\Http\Controllers\Category\CreateController::class)->name('category.create');
        Route::post('/', \App\Http\Controllers\Category\StoreController::class)->name('category.store');
        Route::get('/{category}/edit', \App\Http\Controllers\Category\EditController::class)->name('category.edit');
        Route::get('/{category}', \App\Http\Controllers\Category\ShowController::class)->name('category.show');
        Route::patch('/{category}', \App\Http\Controllers\Category\UpdateController::class)->name('category.update');
        Route::delete('/{category}', \App\Http\Controllers\Category\DeleteController::class)->name('category.delete');
    });

    Route::group(['prefix' => '/admin/addService'], function () {
        Route::get('/', \App\Http\Controllers\AddService\IndexController::class)->name('addService.index');
        Route::get('/create', \App\Http\Controllers\AddService\CreateController::class)->name('addService.create');
        Route::post('/', \App\Http\Controllers\AddService\StoreController::class)->name('addService.store');
        Route::get('/{addService}/edit', \App\Http\Controllers\AddService\EditController::class)->name('addService.edit');
        Route::get('/{addService}', \App\Http\Controllers\AddService\ShowController::class)->name('addService.show');
        Route::patch('/{addService}', \App\Http\Controllers\AddService\UpdateController::class)->name('addService.update');
        Route::delete('/{addService}', \App\Http\Controllers\AddService\DeleteController::class)->name('addService.delete');
    });

    Route::group(['prefix' => '/admin/houses'], function () {
        Route::get('/', \App\Http\Controllers\House\IndexController::class)->name('house.index');
        Route::get('/create', \App\Http\Controllers\House\CreateController::class)->name('house.create');
        Route::post('/', \App\Http\Controllers\House\StoreController::class)->name('house.store');
        Route::get('/{house}/edit', \App\Http\Controllers\House\EditController::class)->name('house.edit');
        Route::get('/{house}', \App\Http\Controllers\House\ShowController::class)->name('house.show');
        Route::patch('/{house}', \App\Http\Controllers\House\UpdateController::class)->name('house.update');
        Route::get('/{house}/publish', \App\Http\Controllers\House\PublishController::class)->name('house.publish');
        Route::delete('/{house}', \App\Http\Controllers\House\DeleteController::class)->name('house.delete');
    });
});


Route::get('/', function () {
    return view('welcome');
});

