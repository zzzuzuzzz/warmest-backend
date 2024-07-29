<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Admin\NotificationsForController;
use App\Http\Controllers\Controller;
use App\Models\User;

class IndexAdminController extends Controller
{
    public function __invoke() {
        $users = User::where('role', 'admin')->get();
        $passedTime = NotificationsForController::passedTime();
        $passedTimeApplication = NotificationsForController::passedTimeApplication();
        $questions = NotificationsForController::questions();
        $applications = NotificationsForController::applications();
        $numberNotification = NotificationsForController::numberNotification();
        $questionsForMsg = NotificationsForController::questionsForMsg();
        $applicationsForMsg = NotificationsForController::applications();


        return view('admin.user.indexAdmin', compact('users', 'passedTime', 'questions', 'questionsForMsg', 'applicationsForMsg', 'applications', 'numberNotification', 'passedTimeApplication'));
    }
}
