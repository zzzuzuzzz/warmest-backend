<?php

use Illuminate\Support\Facades\Route;


Route::middleware(\App\Http\Middleware\AdminMiddleware::class)->group(function () {
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/', \App\Http\Controllers\Admin\AdminIndexController::class)->name('admin.main.index');
        Route::get('/singin', \App\Http\Controllers\Admin\AdminSingInController::class)->name('admin.singin')->withoutMiddleware(\App\Http\Middleware\AdminMiddleware::class);
        Route::post('/auth', \App\Http\Controllers\Admin\AdminAuthController::class)->name('admin.auth')->withoutMiddleware(\App\Http\Middleware\AdminMiddleware::class);
        Route::post('/logout', \App\Http\Controllers\Admin\AdminLogoutController::class)->name('admin.logout')->withoutMiddleware(\App\Http\Middleware\AdminMiddleware::class);

        Route::group(['prefix' => '/categories'], function () {
            Route::get('/', \App\Http\Controllers\Admin\Category\IndexController::class)->name('category.index');
            Route::get('/create', \App\Http\Controllers\Admin\Category\CreateController::class)->name('category.create');
            Route::post('/', \App\Http\Controllers\Admin\Category\StoreController::class)->name('category.store');
            Route::get('/{category}/edit', \App\Http\Controllers\Admin\Category\EditController::class)->name('category.edit');
            Route::get('/{category}', \App\Http\Controllers\Admin\Category\ShowController::class)->name('category.show');
            Route::patch('/{category}', \App\Http\Controllers\Admin\Category\UpdateController::class)->name('category.update');
            Route::delete('/{category}', \App\Http\Controllers\Admin\Category\DeleteController::class)->name('category.delete');
        });

        Route::group(['prefix' => '/addService'], function () {
            Route::get('/', \App\Http\Controllers\Admin\AddService\IndexController::class)->name('addService.index');
            Route::get('/create', \App\Http\Controllers\Admin\AddService\CreateController::class)->name('addService.create');
            Route::post('/', \App\Http\Controllers\Admin\AddService\StoreController::class)->name('addService.store');
            Route::get('/{addService}/edit', \App\Http\Controllers\Admin\AddService\EditController::class)->name('addService.edit');
            Route::get('/{addService}', \App\Http\Controllers\Admin\AddService\ShowController::class)->name('addService.show');
            Route::patch('/{addService}', \App\Http\Controllers\Admin\AddService\UpdateController::class)->name('addService.update');
            Route::delete('/{addService}', \App\Http\Controllers\Admin\AddService\DeleteController::class)->name('addService.delete');
        });

        Route::group(['prefix' => '/houses'], function () {
            Route::get('/', \App\Http\Controllers\Admin\House\IndexController::class)->name('house.index');
            Route::get('/create', \App\Http\Controllers\Admin\House\CreateController::class)->name('house.create');
            Route::post('/', \App\Http\Controllers\Admin\House\StoreController::class)->name('house.store');
            Route::get('/{house}/edit', \App\Http\Controllers\Admin\House\EditController::class)->name('house.edit');
            Route::get('/{house}', \App\Http\Controllers\Admin\House\ShowController::class)->name('house.show');
            Route::patch('/{house}', \App\Http\Controllers\Admin\House\UpdateController::class)->name('house.update');
            Route::get('/{house}/publish', \App\Http\Controllers\Admin\House\PublishController::class)->name('house.publish');
            Route::delete('/{house}', \App\Http\Controllers\Admin\House\DeleteController::class)->name('house.delete');
        });

        Route::group(['prefix' => '/administrations'], function () {
            Route::get('/', \App\Http\Controllers\Admin\Administration\IndexController::class)->name('administration.index');
            Route::get('/create', \App\Http\Controllers\Admin\Administration\CreateController::class)->name('administration.create');
            Route::post('/', \App\Http\Controllers\Admin\Administration\StoreController::class)->name('administration.store');
            Route::get('/{administration}/edit', \App\Http\Controllers\Admin\Administration\EditController::class)->name('administration.edit');
            Route::get('/{administration}', \App\Http\Controllers\Admin\Administration\ShowController::class)->name('administration.show');
            Route::patch('/{administration}', \App\Http\Controllers\Admin\Administration\UpdateController::class)->name('administration.update');
            Route::delete('/{administration}', \App\Http\Controllers\Admin\Administration\DeleteController::class)->name('administration.delete');
        });
    });
});


Route::group(['prefix' => ''], function () {
    Route::get('', \App\Http\Controllers\Site\IndexController::class)->name('site.index');
    Route::get('#about-us-block', \App\Http\Controllers\Site\AboutUsController::class)->name('site.index#about-us-block');
    Route::get('#our-services', \App\Http\Controllers\Site\OurServicesController::class)->name('site.index#our-services');
    Route::get('#house-block', \App\Http\Controllers\Site\HouseController::class)->name('site.index#house-block');
    Route::get('#contact-us-block', \App\Http\Controllers\Site\ContactController::class)->name('site.index#contact-us-block');
    Route::get('/catalog', \App\Http\Controllers\Site\CatalogController::class)->name('site.catalog');
});



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
