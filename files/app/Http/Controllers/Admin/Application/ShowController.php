<?php

namespace App\Http\Controllers\Admin\Application;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Question;

class ShowController extends Controller
{
    public function __invoke(Application $application) {
        Application::where('id', $application->id)->update(['viewed' => 'true']);
        $passedTime = NotificationsForController::passedTime();
        $passedTimeApplication = NotificationsForController::passedTimeApplication();
        $questions = NotificationsForController::questions();
        $applications = NotificationsForController::applications();
        $numberNotification = NotificationsForController::numberNotification();
        $questionsForMsg = NotificationsForController::questionsForMsg();
        $applicationsForMsg = NotificationsForController::applications();        $questionsForPage = NotificationsForController::questionsAll();
        foreach ($questionsForPage as $quest) {
            $quest->create = NotificationsForController::passedTimeForQuestion($quest->create);
        }
        return view('admin.application.show', compact('questions', 'passedTime','questionsForMsg', 'applicationsForMsg', 'applications', 'numberNotification', 'passedTimeApplication', 'questionsForPage', 'application'));
    }
}
