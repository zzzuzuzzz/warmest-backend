<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\User;

class ShowController extends Controller
{
    public function __invoke(User $user) {
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();

        return view('admin.user.show', compact('user', 'passedTime', 'questions'));
    }
}
