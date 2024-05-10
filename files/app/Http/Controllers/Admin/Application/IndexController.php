<?php

namespace App\Http\Controllers\Admin\Application;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\Application;

class IndexController extends Controller
{
    public function __invoke() {
        $applications = Application::all();
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();
        $questionsForMsg = NotificationsForController::questionsForMsg();
        $questionsForPage = NotificationsForController::questionsAll();

        foreach ($questionsForPage as $question) {
            $question->create = NotificationsForController::passedTimeForQuestion($question->create);
        }
        return view('admin.application.index', compact('applications', 'questions', 'passedTime','questionsForMsg', 'questionsForPage'));
    }
}
