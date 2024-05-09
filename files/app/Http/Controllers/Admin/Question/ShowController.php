<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\Question;

class ShowController extends Controller
{
    public function __invoke(Question $question) {
        Question::where('id', $question->id)->update(['viewed' => 'true']);
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();
        $questionsForPage = NotificationsForController::questionsAll();
        foreach ($questionsForPage as $quest) {
            $quest->create = NotificationsForController::passedTimeForQuestion($quest->create);
        }
        return view('admin.question.show', compact('questions', 'passedTime','questionsForMsg', 'questionsForPage', 'question'));
    }
}
