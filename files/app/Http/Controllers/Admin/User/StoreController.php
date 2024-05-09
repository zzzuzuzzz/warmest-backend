<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Http\Requests\Users\StoreRequest;
use App\Models\User;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request) {
        $date = $request->validated();
        User::firstOrCreate($date);
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();




        return redirect()->route('user.index', compact('passedTime', 'questions', 'questionsForMsg'));
    }
}
