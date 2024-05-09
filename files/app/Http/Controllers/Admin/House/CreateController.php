<?php

namespace App\Http\Controllers\Admin\House;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\AddService;
use App\Models\Category;

class CreateController extends Controller
{
    public function __invoke() {

        $categories = Category::all();
        $addServices = AddService::all();
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();

        return view('admin.house.create', compact('categories', 'addServices', 'questions', 'passedTime'));
    }
}
