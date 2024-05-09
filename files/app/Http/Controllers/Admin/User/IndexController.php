<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\User;

class IndexController extends Controller
{
    public function __invoke() {
        $users = User::all();
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return view('admin.user.index', compact('users', 'passedTime', 'questions', 'questionsForMsg'));
    }
}
