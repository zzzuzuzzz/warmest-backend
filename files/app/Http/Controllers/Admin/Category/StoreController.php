<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\StoreRequest;
use App\Models\Category;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();
        Category::firstOrCreate($date);
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();


        return redirect()->route('category.index', compact('questions', 'passedTime'));
    }
}
