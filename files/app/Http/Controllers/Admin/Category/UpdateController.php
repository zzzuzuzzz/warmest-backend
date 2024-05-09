<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\UpdateRequest;
use App\Models\Category;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Category $category) {
        $date = $request->validated();
        $category->update($date);
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return view('admin.category.show', compact('category','questions', 'passedTime','questionsForMsg'
));
    }
}
