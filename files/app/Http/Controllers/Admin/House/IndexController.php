<?php

namespace App\Http\Controllers\Admin\House;

use App\Http\Controllers\Controller;
use App\Models\House;
use App\Http\Controllers\Admin\NotificationsForController;

class IndexController extends Controller
{
    public function __invoke() {
        $houses = House::all();
        $passedTime = NotificationsForController::passedTime();
        $questions = NotificationsForController::questions();


        return view('admin.house.index', compact('houses', 'questions', 'passedTime'));
    }
}
