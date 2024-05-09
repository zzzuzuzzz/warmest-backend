<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\Question;

class DeleteController extends Controller
{
    public function __invoke(Question $question) {
        $question->delete();
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();



        return redirect()->route('question.index', compact('questions', 'passedTime','questionsForMsg'
));
    }
}
