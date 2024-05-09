<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\Category;

class DeleteController extends Controller
{
    public function __invoke(Category $category) {
        $category->delete();
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return redirect()->route('category.index', compact('questions', 'passedTime','questionsForMsg'
));
    }
}
