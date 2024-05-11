<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AddService;
use App\Models\House;
use App\Models\User;


class AdminIndexController extends Controller
{
    public function __invoke() {
        $housesNumber = count(House::all());
        $addServicesNumber = count(AddService::all());
        $usersNumber = count(User::all());
        $passedTime = NotificationsForController::passedTime();
        $passedTimeApplication = NotificationsForController::passedTimeApplication();
        $questions = NotificationsForController::questions();
        $applications = NotificationsForController::applications();
        $applicationsNumber = count($applications) > 0 ? count($applications) : 0;
        $numberNotification = NotificationsForController::numberNotification();
        $questionsForMsg = NotificationsForController::questionsForMsg();
        $applicationsForMsg = NotificationsForController::applications();



        return view('admin.main.index', compact( 'applicationsNumber', 'applications', 'numberNotification', 'passedTimeApplication','housesNumber', 'addServicesNumber', 'usersNumber', 'questions', 'passedTime','questionsForMsg', 'applicationsForMsg', 'applications', 'numberNotification', 'passedTimeApplication'
));
    }
}
