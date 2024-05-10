<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\Question;

class CreateController extends Controller
{
    public function __invoke(Question $question) {

        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return view('admin.question.create', compact('question','questions', 'passedTime','questionsForMsg'
));
    }
}
