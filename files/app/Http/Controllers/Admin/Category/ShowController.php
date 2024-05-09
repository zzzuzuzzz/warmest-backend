<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\Category;

class ShowController extends Controller
{
    public function __invoke(Category $category) {
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return view('admin.category.show', compact('category', 'questions', 'passedTime','questionsForMsg'
));
    }
}
