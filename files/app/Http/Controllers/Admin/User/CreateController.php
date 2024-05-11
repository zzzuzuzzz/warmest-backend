<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;

class CreateController extends Controller
{
    public function __invoke() {
        $passedTime = NotificationsForController::passedTime();
        $passedTimeApplication = NotificationsForController::passedTimeApplication();
        $questions = NotificationsForController::questions();
        $applications = NotificationsForController::applications();
        $numberNotification = NotificationsForController::numberNotification();
        $questionsForMsg = NotificationsForController::questionsForMsg();
        $applicationsForMsg = NotificationsForController::applications();


        return view('admin.user.create', compact('passedTime', 'questions', 'questionsForMsg', 'applicationsForMsg', 'applications', 'numberNotification', 'passedTimeApplication'));
    }
}
