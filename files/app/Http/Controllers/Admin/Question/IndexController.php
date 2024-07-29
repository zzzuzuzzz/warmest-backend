<?php

namespace App\Http\Controllers\Admin\Question;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke() {
        $passedTime = NotificationsForController::passedTime();
        $passedTimeApplication = NotificationsForController::passedTimeApplication();
        $questions = NotificationsForController::questions();
        $applications = NotificationsForController::applications();
        $numberNotification = NotificationsForController::numberNotification();
        $questionsForMsg = NotificationsForController::questionsForMsg();
        $applicationsForMsg = NotificationsForController::applications();        $questionsForPage = NotificationsForController::questionsAll();

        foreach ($questionsForPage as $question) {
            $question->create = NotificationsForController::passedTimeForQuestion($question->create);
        }
        return view('admin.question.index', compact('questions', 'passedTime','questionsForMsg', 'applicationsForMsg', 'applications', 'numberNotification', 'passedTimeApplication', 'questionsForPage'));
    }
}
