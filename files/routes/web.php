<?php

use Illuminate\Support\Facades\Route;


Route::middleware(\App\Http\Middleware\AdminMiddleware::class)->group(function () {
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/', \App\Http\Controllers\Admin\AdminIndexController::class)->name('admin.main.index');

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

        Route::group(['prefix' => '/users'], function () {
            Route::get('/', \App\Http\Controllers\Admin\User\IndexController::class)->name('user.index');
            Route::get('/admins', \App\Http\Controllers\Admin\User\IndexAdminController::class)->name('user.admin.index');
            Route::get('/create', \App\Http\Controllers\Admin\User\CreateController::class)->name('user.create');
            Route::post('/', \App\Http\Controllers\Admin\User\StoreController::class)->name('user.store');
            Route::get('/{user}/edit', \App\Http\Controllers\Admin\User\EditController::class)->name('user.edit');
            Route::get('/{user}', \App\Http\Controllers\Admin\User\ShowController::class)->name('user.show');
            Route::patch('/{user}', \App\Http\Controllers\Admin\User\UpdateController::class)->name('user.update');
            Route::delete('/{user}', \App\Http\Controllers\Admin\User\DeleteController::class)->name('user.delete');
        });

        Route::group(['prefix' => '/faqs'], function () {
            Route::get('/', \App\Http\Controllers\Admin\Faq\IndexController::class)->name('faq.index');
            Route::get('/create', \App\Http\Controllers\Admin\Faq\CreateController::class)->name('faq.create');
            Route::post('/', \App\Http\Controllers\Admin\Faq\StoreController::class)->name('faq.store');
            Route::get('/{faq}/edit', \App\Http\Controllers\Admin\Faq\EditController::class)->name('faq.edit');
            Route::get('/{faq}', \App\Http\Controllers\Admin\Faq\ShowController::class)->name('faq.show');
            Route::patch('/{faq}', \App\Http\Controllers\Admin\Faq\UpdateController::class)->name('faq.update');
            Route::delete('/{faq}', \App\Http\Controllers\Admin\Faq\DeleteController::class)->name('faq.delete');
        });

        Route::group(['prefix' => '/questions'], function () {
            Route::get('/', \App\Http\Controllers\Admin\Question\IndexController::class)->name('question.index');
            Route::get('/{question}', \App\Http\Controllers\Admin\Question\ShowController::class)->name('question.show');
//            Route::get('/create/{question}', \App\Http\Controllers\Admin\Question\CreateController::class)->name('question.create');
            Route::delete('/{question}', \App\Http\Controllers\Admin\Question\DeleteController::class)->name('question.delete');
        });

        Route::group(['prefix' => '/applications'], function () {
            Route::get('/', \App\Http\Controllers\Admin\Application\IndexController::class)->name('application.index');
            Route::get('/{application}', \App\Http\Controllers\Admin\Application\ShowController::class)->name('application.show');
//            Route::get('/create/{application}', \App\Http\Controllers\Admin\Application\CreateController::class)->name('application.create');
            Route::delete('/{application}', \App\Http\Controllers\Admin\Application\DeleteController::class)->name('application.delete');
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
    Route::post('/application/store', \App\Http\Controllers\Site\ApplicationStoreController::class)->name('site.application.store');
    Route::middleware(\App\Http\Middleware\LoginMiddleware::class)->group(function () {
        Route::group(['prefix' => '/profile'], function () {
            Route::get('', \App\Http\Controllers\Site\ProfileController::class)->name('site.profile');
            Route::get('/favorite', \App\Http\Controllers\Site\Profile\FavoriteController::class)->name('site.profile.favorite');
            Route::get('/faq', \App\Http\Controllers\Site\Profile\FaqController::class)->name('site.profile.faq');
            Route::get('/setting', \App\Http\Controllers\Site\Profile\SettingController::class)->name('site.profile.setting');
            Route::get('/question', \App\Http\Controllers\Site\Profile\QuestionController::class)->name('site.profile.question');
            Route::post('/question/store', \App\Http\Controllers\Site\Profile\QuestionStoreController::class)->name('site.profile.question.store');
        });
    });
});



Auth::routes();
