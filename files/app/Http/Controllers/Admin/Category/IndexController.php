<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\Category;

class IndexController extends Controller
{
    public function __invoke() {
        $categories = Category::all();
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return view('admin.category.index', compact('categories', 'questions', 'passedTime','questionsForMsg'
));
    }
}
