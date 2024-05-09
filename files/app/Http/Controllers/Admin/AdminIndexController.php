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
        $questions = NotificationsForController::questions();

        return view('admin.main.index', compact('housesNumber', 'addServicesNumber', 'usersNumber', 'questions', 'passedTime'));
    }
}
